<?php

namespace App;

use App\Classes\Unite;
use Carbon\Carbon;
use Cviebrock\EloquentSluggable\Sluggable;
use Gloudemans\Shoppingcart\Contracts\Buyable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes, Sluggable, Unite;

    protected $fillable = ['name','description','slug','path','code','category_id','is_visible', 'expiration', 'label'];

    protected $dates = ['expiration'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function images()
    {
        return $this->morphMany('App\Image', 'imageable')->orderBy('order');
    }

    public function sluggable()
    {
        return [
            'slug' => ['source' => 'name', 'includeTrashed' => true, 'onUpdate' => true]
        ];
    }

    //getters y setters
    public function getThumbAttribute()
    {
        if (!$image = $this->images()->first()) {
            $src = 'imagen-no-disponible.jpg';
        } else {
             $src = $image->src;
        }
        return $src;
    }

    public function getExpirationAttribute($value)
    {
        return \Carbon\Carbon::parse($value)->format('d-m-Y');
    }

    public function setExpirationAttribute($value)
    {
        $this->attributes['expiration'] = preg_replace('/([0-9]{2})-([0-9]{2})-([0-9]{4})/', '$3-$2-$1', $value);
    }

    //scopes
    public function scopeVisible($query)
    {
        $query->where('is_visible', 1);
    }
    public function scopeSearch($query)
    {
        if (request()->has('search.value')) {
            $query->where('products.name', 'like', request()->input('search.value').'%')
                ->orWhere('products.code', 'like', request()->input('search.value').'%');
        }
    }
    public function scopeFilter($query)
    {
		if (request()->has('sort')) {
            list($column, $direction) = explode('-', request()->input('sort'));
            if (in_array($column, ['name'])) $query->orderBy($column, $direction);
        }
    }

    public function scopeDt($query)
    {
        $query->select(\DB::raw('products.*, images.src as thumb, images.order, categories.value as category'))
            ->unite('category')
            ->unite('images', true)
            ->take(request()->input('length'))
            ->skip(request()->input('start'))
            ->orderBy(request()->input('order.0.column'), request()->input('order.0.dir'))
            ->orderBy('images.order')
            ->groupBy('products.id')
        ;
    }

}
