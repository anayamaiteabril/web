<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BrandRequest;
use App\Slider;

class BrandController extends Controller
{

    public function edit()
    {
        $slider = Slider::find(2);
        return view('admin.brands.form', compact('slider'));
    }

    public function update()
    {
        $slider = Slider::find(2);
        $this->addImages($slider);
        return redirect('admin/brands#edit');
    }

    private function addImages($slider)
    {
        //slider
        if (request()->has('imagesIds')) {
            $images = \App\Image::whereIn('id', request('imagesIds'));
            $slider->images()->saveMany($images->get());
            $images->update(['pending'=>0]);
        }
        $slider->save();
    }
}
