<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;



class TestimonialController extends Controller
{
    public function testimonial(){
        $icon = DB::table('icons')->first();
        $portfolios = DB::table('about_portfolios')->first();
        $testimonials = Testimonial::latest()->paginate(4);
        return view('admin.testimonial.index', compact('icon','portfolios','testimonials'));
    }

    public function storeTestimonial(Request $request){
        $validate = $request->validate([
            'image' => 'required|mimes:jpg,jpeg,png',
        ]);
        $image = $request->file('image');
        $imageNameGenerator = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(300, 200)->save('frontend/assets/images/testimonial/' . $imageNameGenerator);
        $lastImage = 'frontend/assets/images/testimonial/' . $imageNameGenerator;
        Testimonial::insert([
            'name' => $request->name,
            'designation' => $request->designation,
            'image' => $lastImage,
            'message' => $request->opinion,
            'created_at' => Carbon::now()
        ]);
        return redirect()->back();

    }
    public function deleteTestimonial($id){
        $image = Testimonial::find($id);
        $oldImage = $image->image;
        unlink($oldImage);
        Testimonial::find($id)->delete();
        return redirect()->back()->with('success', 'Testimonial deleted successfully');

    }
}
