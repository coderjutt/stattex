<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServicesController extends Controller
{
    /**
     * Display all services.
     */
    public function index()
    {
        $services = Services::all();
        return view('dashboard.services.index', compact('services'));
    }

    /**
     * Show the form to create a new service.
     */
    public function create()
    {
        return view('dashboard.services.create');
    }

    /**
     * Store a new service and its image + sub-services.
     */
 public function store(Request $request)
{
    // dd($request);
    $request->validate([
        'name' => 'required|string|max:255',
        'icon' => 'required|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
        'description' => 'nullable|string',
    ]);

    $iconPath = null;

    if ($request->hasFile('icon')) {
        $iconPath = $request->file('icon')->store('services', 'public');
    }

    Services::create([
        'name' => $request->name,
        'icon' => $iconPath,
        'description' => $request->description,
    ]);

    return redirect()->route('admin_services')->with('success', 'Service created successfully.');
}


    /**
     * Show the form for editing a service.
     */
    public function edit(Services $service,$serviceId)
    {   $service = Services::find($serviceId);
        // $service->load('subServices');
        return view('dashboard.services.edit', compact('service'));
    }

    /**
     * Update the service and its icon image (with unlink).
     */
    public function update(Request $request, Services $service)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:2048',
            'description' => 'nullable|string',
        ]);

        // Delete old icon if new one uploaded
        if ($request->hasFile('icon')) {
            if ($service->icon && Storage::disk('public')->exists($service->icon)) {
                Storage::disk('public')->delete($service->icon);
            }

            $service->icon = $request->file('icon')->store('services', 'public');
        }

        $service->name = $request->name;
        $service->description = $request->description;
        $service->save();

        return redirect()->route('admin_services')->with('success', 'Service updated successfully.');
    }

   
    public function destroy($serviceId)
    {
        $service = Services::find($serviceId);

        if ($service->icon && Storage::disk('public')->exists($service->icon)) {
            Storage::disk('public')->delete($service->icon);
        }
        if (empty($service)) {
            abort(404);
        }
                
        $service->delete();
                
        return redirect()->route('admin_services');
    }       
}
