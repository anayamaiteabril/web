<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['title', 'label', 'icon'];

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
