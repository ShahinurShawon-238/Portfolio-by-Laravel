<?php

namespace App\Http\Controllers;

use App\Models\Icon;
use App\Models\AboutPortfolio;
use App\Models\Color;
use App\Models\SocialMedia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    public function homeIcon(){
        $icon = DB::table('icons')->first();
        $portfolios = DB::table('about_portfolios')->first();
        $icons = Icon::latest()->paginate(4);
        return view('admin.home.icons', compact('icon','portfolios','icons'));
    }
    public function AddIcon(){
        $icon = DB::table('icons')->first();
        $portfolios = DB::table('about_portfolios')->first();
        return view('admin.home.icons_add', compact('icon','portfolios'));
    }
    public function storeIcon(Request $request){
        $validate = $request->validate([
            'logo' => 'required|mimes:jpg,jpeg,png',
            'shortcut' => 'required|mimes:jpg,jpeg,png',
        ]);
        $image = $request->file('logo');
        $image2 = $request->file('shortcut');
        $imageNameGenerator = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $imageNameGenerator2 = hexdec(uniqid()) . '.' . $image2->getClientOriginalExtension();
        Image::make($image)->resize(200, 200)->save('backend/assets/img/icon/' . $imageNameGenerator);
        Image::make($image2)->resize(200, 200)->save('backend/assets/img/icon/' . $imageNameGenerator2);
        $lastImage = 'backend/assets/img/icon/' . $imageNameGenerator;
        $lastImage2 = 'backend/assets/img/icon/' . $imageNameGenerator2;
        Icon::insert([
            'logo' => $lastImage,
            'shortCut' => $lastImage2,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->route('home.icon')->with('success', 'Icons Added Successfully');

    }
    public function editIcon($id){
        $icon = DB::table('icons')->first();
        $portfolios = DB::table('about_portfolios')->first();
        $icons = Icon::find($id);
        return view('admin.home.icons_edit', compact('icon','portfolios', 'icons'));
    }
    public function updateIcon(Request $request, $id){
        $oldImage = $request->oldImage;
        $oldImage2 = $request->oldImage2;
        $image = $request->file('logo');
        $image2 = $request->file('shortcut');
        if ($image) {
            $imageNameGenerator = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(200, 200)->save('backend/assets/img/icon/' . $imageNameGenerator);
            $lastImage = 'backend/assets/img/icon/' . $imageNameGenerator;
            unlink($oldImage);
            Icon::find($id)->update([
                'logo' => $lastImage,
            ]);
            return redirect()->route('home.icon')->with('success', 'Icon Updated Successfully');

        }else if($image2){
            $imageNameGenerator2 = hexdec(uniqid()) . '.' . $image2->getClientOriginalExtension();
            Image::make($image2)->resize(200, 200)->save('backend/assets/img/icon/' . $imageNameGenerator2);
            $lastImage2 = 'backend/assets/img/icon/' . $imageNameGenerator2;
            unlink($oldImage2);
            Icon::find($id)->update([
                'shortCut' => $lastImage2,
            ]);
            return redirect()->route('home.icon')->with('success', 'Icon Updated Successfully');

        } 
        else {
            return redirect()->route('home.icon')->with('success', 'Icon is not Updated Successfully');

        }

    }
    public function deleteIcon($id){
        $icon = Icon::find($id);
        $oldImage = $icon->logo;
        $oldImage2 = $icon->shortCut;
        unlink($oldImage);
        unlink($oldImage2);
        Icon::find($id)->delete();
        return redirect()->back()->with('success', 'Icon deleted successfully');

    }

    // About Portfolio
    public function aboutPortfolio(){
        $icon = DB::table('icons')->first();
        $portfolios = DB::table('about_portfolios')->first();
        $portfolios2 = AboutPortfolio::latest()->paginate(3);
        return view('admin.home.aboutPortfolio', compact('icon','portfolios','portfolios2'));
    }
    public function addAboutPortfolio(){
        $icon = DB::table('icons')->first();
        $portfolios = DB::table('about_portfolios')->first();
        return view('admin.home.aboutPortfolio_add', compact('icon', 'portfolios'));
    }
    public function storeAboutPortfolio(Request $request){
        AboutPortfolio::insert([
            'title' => $request->title,
            'name' => $request->name,
            'designation' => $request->designation,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->route('about.portfolio')->with('success', 'About Portfolio Successfully Added');

    }
    public function editAboutPortfolio($id){
        $icon = DB::table('icons')->first();
        $portfolios = DB::table('about_portfolios')->first();
        $portfolios2 = AboutPortfolio::find($id);
        return view('admin.home.aboutPortfolio_edit', compact('icon','portfolios', 'portfolios2'));
    }
    public function updateAboutPortfolio(Request $request, $id){
        AboutPortfolio::find($id)->update([
            'title' => $request->title,
            'name' => $request->name,
            'designation' => $request->designation,
        ]);
        return redirect()->route('about.portfolio')->with('success', 'About Portfolio Successfully Updated');
    }
    public function deleteAboutPortfolio($id){
        AboutPortfolio::find($id)->delete();
        return redirect()->back()->with('success', 'About Portfolio Successfully Deleted');
    }

    //Social Media
    public function socialMedia(){
        $icon = DB::table('icons')->first();
        $portfolios = DB::table('about_portfolios')->first();
        $socialMedia = SocialMedia::latest()->paginate(3);
        return view('admin.home.socialMedia', compact('icon', 'portfolios', 'socialMedia'));

    }
    public function addSocialMedia(){
        $icon = DB::table('icons')->first();
        $portfolios = DB::table('about_portfolios')->first();
        return view('admin.home.socialMedia_add', compact('icon', 'portfolios'));
    }
    public function storeSocialMedia(Request $request){
        SocialMedia::insert([
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
            'github' => $request->github,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->route('social.media')->with('success', 'Social Media Inserted Successfully');

    }
    public function editSocialMedia($id){
        $icon = DB::table('icons')->first();
        $portfolios = DB::table('about_portfolios')->first();
        $socialMedia = SocialMedia::find($id);
        return view('admin.home.socialMedia_edit', compact('icon','portfolios', 'socialMedia'));
    }
    public function updateSocialMedia(Request $request, $id){
        SocialMedia::find($id)->update([
            'facebook' => $request->facebook,
            'twitter' => $request->twitter,
            'linkedin' => $request->linkedin,
            'github' => $request->github,
        ]);
        return redirect()->route('social.media')->with('success', 'Social Media Successfully Updated');
    }
    public function deleteSocialMedia($id){
        SocialMedia::find($id)->delete();
        return redirect()->back()->with('success', 'Social Media Successfully Deleted');
    }
    
    //Color
    public function color(){
        $icon = DB::table('icons')->first();
        $portfolios = DB::table('about_portfolios')->first();
        $colors = Color::latest()->paginate(3);
        return view('admin.home.color', compact('icon', 'portfolios', 'colors'));

    }
    public function addColor(){
        $icon = DB::table('icons')->first();
        $portfolios = DB::table('about_portfolios')->first();
        return view('admin.home.color_add', compact('icon', 'portfolios'));

    }
    public function storeColor(Request $request){
        Color::insert([
            'top' => $request->top,
            'bottom' => $request->bottom,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->route('colors')->with('success', 'Color Inserted Successfully');

    }
    public function editColor($id){
        $icon = DB::table('icons')->first();
        $portfolios = DB::table('about_portfolios')->first();
        $colors = Color::find($id);
        return view('admin.home.color_edit', compact('icon', 'portfolios', 'colors'));

    }
    public function updateColor(Request $request, $id){
        Color::find($id)->update([
            'top' => $request->top,
            'bottom' => $request->bottom,
        ]);
        return redirect()->route('colors')->with('success', 'Color Successfully Updated');
    }
}
