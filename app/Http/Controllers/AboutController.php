<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AboutMe;
use App\Models\Education;
use App\Models\WorkingHistory;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;


class AboutController extends Controller
{
    //About ME
    public function aboutMe(){
        $icon = DB::table('icons')->first();
        $portfolios = DB::table('about_portfolios')->first();
        $aboutMe = AboutMe::latest()->paginate(3);
        return view('admin.about.aboutMe', compact('icon','portfolios','aboutMe'));
    }
    public function AddAboutMe(){
        $icon = DB::table('icons')->first();
        $portfolios = DB::table('about_portfolios')->first();
        return view('admin.about.aboutMe_add', compact('icon', 'portfolios'));
    }
    public function storeAboutMe(Request $request){
        $validate = $request->validate([
            'image' => 'required|mimes:jpg,jpeg,png',
        ]);
        $image = $request->file('image');
        $imageNameGenerator = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(470, 510)->save('backend/assets/img/about/' . $imageNameGenerator);
        $lastImage = 'backend/assets/img/about/' . $imageNameGenerator;
        AboutMe::insert([
            'image' => $lastImage,
            'description' => $request->description,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->route('about.me')->with('success', 'About Me Added Successfully');

    }
    public function editAboutMe($id){
        $icon = DB::table('icons')->first();
        $portfolios = DB::table('about_portfolios')->first();
        $about = AboutMe::find($id);
        return view('admin.about.aboutMe_edit', compact('icon','portfolios','about'));
    }
    public function updateAboutMe(Request $request, $id){
        $oldImage = $request->oldImage;
        $image = $request->file('image');
        if($image){
            $imageNameGenerator = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(470, 510)->save('backend/assets/img/about/' . $imageNameGenerator);
            $lastImage = 'backend/assets/img/about/' . $imageNameGenerator;
            unlink($oldImage);
            AboutMe::find($id)->update([
                'image' => $lastImage,
                'description' => $request->description,
            ]);
            return redirect()->route('about.me')->with('success', 'About Me Updated Successfully');

        }else{
            AboutMe::find($id)->update([
                'description' => $request->description,
            ]);
            return redirect()->route('about.me')->with('success', 'About Me Updated Successfully');

        }

    }
    public function deleteAboutMe($id){
        $image = AboutMe::find($id);
        $oldImage = $image->image;
        unlink($oldImage);
        AboutMe::find($id)->delete();
        return redirect()->back()->with('success', 'About Me deleted successfully');

    }

    //Education
    public function education(){
        $icon = DB::table('icons')->first();
        $portfolios = DB::table('about_portfolios')->first();
        $education = Education::latest()->paginate(3);
        return view('admin.about.education', compact('icon','portfolios','education'));
    }
    public function addEducation(){
        $icon = DB::table('icons')->first();
        $portfolios = DB::table('about_portfolios')->first();
        return view('admin.about.education_add', compact('icon','portfolios'));
    }
    public function storeEducation(Request $request){
        $validate = $request->validate([
            'image' => 'required|mimes:jpg,jpeg,png',
        ]);
        $image = $request->file('image');
        $imageNameGenerator = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(200, 300)->save('backend/assets/img/education/' . $imageNameGenerator);
        $lastImage = 'backend/assets/img/education/' . $imageNameGenerator;
        Education::insert([
            'name' => $request->name,
            'image' => $lastImage,
            'fieldOfEducation' => $request->field,
            'gpa' => $request->gpa,
            'inScaleOf' => $request->inScaleOf,
            'year' => $request->year,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->route('education')->with('success', 'Institution Added Successfully');

    }
    public function editEducation($id){
        $icon = DB::table('icons')->first();
        $portfolios = DB::table('about_portfolios')->first();
        $education = Education::find($id);
        return view('admin.about.education_edit', compact('icon','portfolios','education'));
    }
    public function updateEducation(Request $request, $id){
        $oldImage = $request->oldImage;
        $image = $request->file('image');
        if ($image) {
            $imageNameGenerator = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(200, 300)->save('backend/assets/img/education/' . $imageNameGenerator);
            $lastImage = 'backend/assets/img/education/' . $imageNameGenerator;
            unlink($oldImage);
            Education::find($id)->update([
                'name' => $request->name,
                'image' => $lastImage,
                'fieldOfEducation' => $request->field,
                'gpa' => $request->gpa,
                'inScaleOf' => $request->inScaleOf,
                'year' => $request->year,
            ]);
            return redirect()->route('education')->with('success', 'Institution Updated Successfully');

        } else {
            Education::find($id)->update([
                'name' => $request->name,
                'fieldOfEducation' => $request->field,
                'gpa' => $request->gpa,
                'inScaleOf' => $request->inScaleOf,
                'year' => $request->year,
            ]);
            return redirect()->route('education')->with('success', 'Institution Updated Successfully');

        }

    }

    public function deleteEducation($id){
        $image = Education::find($id);
        $oldImage = $image->image;
        unlink($oldImage);
        Education::find($id)->delete();
        return redirect()->back()->with('success', 'Institution deleted successfully');

    }

    // Working History
    public function workingHistory(){
        $icon = DB::table('icons')->first();
        $portfolios = DB::table('about_portfolios')->first();
        $workings = WorkingHistory::latest()->paginate(3);
        return view('admin.about.workingHistory', compact('icon', 'portfolios', 'workings'));
    }
    public function addWorkingHistory(){
        $icon = DB::table('icons')->first();
        $portfolios = DB::table('about_portfolios')->first();
        return view('admin.about.workingHistory_add', compact('icon', 'portfolios'));
    }
    public function storeWorkingHistory(Request $request){
        $validate = $request->validate([
            'image' => 'required|mimes:jpg,jpeg,png',
        ]);
        $image = $request->file('image');
        $imageNameGenerator = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(200, 300)->save('backend/assets/img/organization/' . $imageNameGenerator);
        $lastImage = 'backend/assets/img/organization/' . $imageNameGenerator;
        WorkingHistory::insert([
            'name' => $request->name,
            'image' => $lastImage,
            'designation' => $request->designation,
            'from' => $request->from,
            'to' => $request->to,
            'contact' => $request->contact,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->route('working.history')->with('success', 'Working History Added Successfully');

    }
    public function editWorkingHistory($id){
        $icon = DB::table('icons')->first();
        $portfolios = DB::table('about_portfolios')->first();
        $workings = WorkingHistory::find($id);
        return view('admin.about.workingHistory_edit', compact('icon', 'portfolios', 'workings'));
    }
    public function updateWorkingHistory(Request $request, $id){
        $oldImage = $request->oldImage;
        $image = $request->file('image');
        if ($image) {
            $imageNameGenerator = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(200, 300)->save('backend/assets/img/organization/' . $imageNameGenerator);
            $lastImage = 'backend/assets/img/organization/' . $imageNameGenerator;
            unlink($oldImage);
            WorkingHistory::find($id)->update([
                'name' => $request->name,
                'image' => $lastImage,
                'designation' => $request->designation,
                'from' => $request->from,
                'to' => $request->to,
                'contact' => $request->contact,
            ]);
            return redirect()->route('working.history')->with('success', 'Working History Updated Successfully');

        } else {
            WorkingHistory::find($id)->update([
                'name' => $request->name,
                'designation' => $request->designation,
                'from' => $request->from,
                'to' => $request->to,
                'contact' => $request->contact,
            ]);
            return redirect()->route('working.history')->with('success', 'Working History Updated Successfully');

        }

    }
    public function deleteWorkingHistory($id){
        $image = WorkingHistory::find($id);
        $oldImage = $image->image;
        unlink($oldImage);
        WorkingHistory::find($id)->delete();
        return redirect()->back()->with('success', 'Working History deleted successfully');

    }
}
