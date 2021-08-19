<?php

namespace App\Http\Controllers\Admin;

use App\Service;
use App\Http\Requests\ServiceRequest;
use App\Http\Controllers\Controller;

class ServiceController extends Controller
{

    public function json()
    {
        $data = Service::dt()->search()->get();
        $recordsTotal = Service::count();
        $recordsFiltered = Service::search()->count();
        return compact('data', 'recordsTotal', 'recordsFiltered');
    }

    public function index()
    {
        return view('admin.services.index');
    }

    public function create()
    {
        $service = new Service;
        return view('admin.services.form', compact('service'));
    }

    public function store(ServiceRequest $request)
    {
        Service::create($request->all());
        return redirect('admin/services#new');
    }

    public function edit(Service $service)
    {
        return view('admin.services.form', compact('service'));
    }

    public function update(ServiceRequest $request, Service $service)
    {
        $service->update($request->all());
        return redirect('admin/services#edit');
    }

    public function destroy(Service $service)
    {
        $service->delete();
        return ['success' => true];
    }
}
