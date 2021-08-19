<?php

namespace App\Http\Controllers\Admin;

use App\About;
use App\Http\Requests\AboutRequest;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function show(About $about)
    {
        return view('admin.abouts.show', compact('about'));
    }

    public function edit(About $about)
    {
        return view('admin.abouts.form', compact('about'));
    }

    public function update(AboutRequest $request, About $about)
    {
        $about->update($request->all());
        $this->addImage($about);
        return redirect('admin/abouts/1#edit');
    }

    private function addImage($about)
    {
        if ($image_id = request()->input('image_id')) {
            $image = \App\Image::where('id', $image_id)->update(['pending'=>0]);
            $about->image_id = $image_id;
            $about->save();
        }
    }
}
