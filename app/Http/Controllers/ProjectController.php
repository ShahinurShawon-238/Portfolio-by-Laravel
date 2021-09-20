<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\DB;


class ProjectController extends Controller
{
    public function project(){
        $icon = DB::table('icons')->first();
        $portfolios = DB::table('about_portfolios')->first();
        $projects = Project::latest()->paginate(4);
        return view('admin.project.index', compact('icon','portfolios','projects'));
    }
    public function addProject(){
        $icon = DB::table('icons')->first();
        $portfolios = DB::table('about_portfolios')->first();
        return view('admin.project.project_add', compact('icon', 'portfolios'));
    }
    public function storeProject(Request $request){
        $validate = $request->validate([
            'image' => 'required|mimes:jpg,jpeg,png',
        ]);
        $image = $request->file('image');
        $imageNameGenerator = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(300, 400)->save('backend/assets/img/project/' . $imageNameGenerator);
        $lastImage = 'backend/assets/img/project/' . $imageNameGenerator;
        Project::insert([
            'image' => $lastImage,
            'title' => $request->title,
            'description' => $request->description,
            'link' => $request->link,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->route('project')->with('success', 'Project Added Successfully');

    }

    public function editProject($id){
        $icon = DB::table('icons')->first();
        $portfolios = DB::table('about_portfolios')->first();
        $project = Project::find($id);
        return view('admin.project.project_edit', compact('icon','portfolios','project'));
    }

    public function updateProject(Request $request, $id){
        $oldImage = $request->oldImage;
        $image = $request->file('image');
        if($image){
            $imageNameGenerator = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 400)->save('backend/assets/img/project/' . $imageNameGenerator);
            $lastImage = 'backend/assets/img/project/' . $imageNameGenerator;
            unlink($oldImage);
            Project::find($id)->update([
                'image' => $lastImage,
                'title' => $request->title,
                'description' => $request->description,
                'link' => $request->link,
            ]);
            return redirect()->route('project')->with('success', 'Project Updated Successfully');

        }else{
            Project::find($id)->update([
                'title' => $request->title,
                'description' => $request->description,
                'link' => $request->link,
            ]);
            return redirect()->route('project')->with('success', 'Project Updated Successfully');

        }

    }
    public function deleteProject($id){
        $image = Project::find($id);
        $oldImage = $image->image;
        unlink($oldImage);
        Project::find($id)->delete();
        return redirect()->back()->with('success', 'Project deleted successfully');

    }
}
