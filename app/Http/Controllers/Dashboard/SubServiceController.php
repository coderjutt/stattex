<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Models\SubService;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SubServiceController extends Controller
{
    public function index()
    {
        $subServices = SubService::with('service')->get();
        return view('dashboard.subservices.index', compact('subServices'));
    }

    public function create()
    {
        $services = Services::all();
        return view('dashboard.subservices.create', compact('services'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'service_id' => 'required|exists:services,id',
            'name' => 'required|string',
            'icon' => 'nullable|image',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('icon')) {
            $data['icon'] = $request->file('icon')->store('sub_service_icons', 'public');
        }

        SubService::create($data);

        return redirect()->route('admin_subservices')->with('success', 'SubService created successfully.');
    }

    public function edit($id)
    {
        $subservice = SubService::findOrFail($id); // fetch manually by ID
        $services = Services::all();

        return view('dashboard.subservices.edit', compact('subservice', 'services'));
    }


   

public function update(Request $request, $subServiceID)
{
    $subService=SubService::findOrFail($subServiceID);
    $data = $request->validate([
        'service_id' => 'required|exists:services,id',
        'name' => 'required|string|max:255',
        'icon' => 'nullable|image|mimes:jpg,jpeg,png,svg,webp',
        'description' => 'nullable|string',
    ]);

    // Handle icon upload and deletion
    if ($request->hasFile('icon')) {
        if ($subService->icon && Storage::disk('public')->exists($subService->icon)) {
            Storage::disk('public')->delete($subService->icon);
        }

        $data['icon'] = $request->file('icon')->store('sub_service_icons', 'public');
    }

    $subService->update($data);

    return redirect()->route('admin_subservices')->with('success', 'Sub-Service updated successfully.');
}


    
    public function destroy($serviceId)
                {
                    $service = SubService::find($serviceId);

                if ($service->icon && Storage::disk('public')->exists($service->icon)) {
                Storage::disk('public')->delete($service->icon);
            }
                if (empty($service)) {
                    abort(404);
                }
                
                $service->delete();
                
                return redirect()->route('admin_subservices');
                }
}
