<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = ['title', 'label'];

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function getHtmlTitle()
    {
        $parts = explode(' ', $this->title);
        return '<span class="text-custom font-weight-bold">' . array_shift($parts) .'</span> ' . implode(' ', $parts);
    }

    //----------------
    //-----scopes-----
    //----------------
    public function scopeSearch($query)
    {
        if (request()->has('search.value')) {
            $query->where('title', 'like', request()->input('search.value').'%');
        }
    }

    public function scopeDt($query)
    {
        $query->take(request('length'))
            ->skip(request('start'))
            ->orderBy(request()->input('order.0.column'), request()->input('order.0.dir'))
        ;
    }
    //----------------
}
