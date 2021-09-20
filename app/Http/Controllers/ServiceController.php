<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;

class ServiceController extends Controller
{
    public function service(){
        $icon = DB::table('icons')->first();
        $portfolios = DB::table('about_portfolios')->first();
        $services = Service::latest()->paginate(3);
        return view('admin.service.index', compact('icon','portfolios','services'));
    }
    public function addService(){
        $icon = DB::table('icons')->first();
        $portfolios = DB::table('about_portfolios')->first();
        return view('admin.service.service_add', compact('icon', 'portfolios'));
    }
    public function storeService(Request $request){
        $validate = $request->validate([
            'image' => 'required|mimes:jpg,jpeg,png',
        ]);
        $image = $request->file('image');
        $imageNameGenerator = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(100, 100)->save('backend/assets/img/service/' . $imageNameGenerator);
        $lastImage = 'backend/assets/img/service/' . $imageNameGenerator;
        Service::insert([
            'image' => $lastImage,
            'name' => $request->name,
            'description' => $request->description,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->route('service')->with('success', 'Service Added Successfully');

    }
    public function editService($id){
        $icon = DB::table('icons')->first();
        $portfolios = DB::table('about_portfolios')->first();
        $service = Service::find($id);
        return view('admin.service.service_edit', compact('icon','portfolios','service'));

    }
    public function updateService(Request $request, $id){
        $oldImage = $request->oldImage;
        $image = $request->file('image');
        if($image){
            $imageNameGenerator = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(100, 100)->save('backend/assets/img/service/' . $imageNameGenerator);
            $lastImage = 'backend/assets/img/service/' . $imageNameGenerator;
            unlink($oldImage);
            Service::find($id)->update([
                'image' => $lastImage,
                'name' => $request->name,
                'description' => $request->description,
            ]);
            return redirect()->route('service')->with('success', 'Service Updated Successfully');

        }else{
            Service::find($id)->update([
                'name' => $request->name,
                'description' => $request->description,
            ]);
            return redirect()->route('service')->with('success', 'Service Updated Successfully');

        }

    }
    public function deleteService($id){
        $image = Service::find($id);
        $oldImage = $image->image;
        unlink($oldImage);
        Service::find($id)->delete();
        return redirect()->back()->with('success', 'Service deleted successfully');

    }
}
