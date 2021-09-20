<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class SkillController extends Controller
{
    public function skill(){
        $icon = DB::table('icons')->first();
        $portfolios = DB::table('about_portfolios')->first();
        $skills = Skill::latest()->paginate(4);
        return view('admin.skill.index', compact('icon','portfolios','skills'));
    }
    public function addSkill(){
        $icon = DB::table('icons')->first();
        $portfolios = DB::table('about_portfolios')->first();
        return view('admin.skill.skill_add', compact('icon', 'portfolios'));
    }
    public function storeSkill(Request $request){
        Skill::insert([
            'name'=> $request->skillName,
            'percentage'=> $request->skillPercent,
            'created_at'=> Carbon::now(),
        ]);
        return redirect()->route('skill')->with('success', 'Skill Added Successfully');
    }
    public function editSkill($id){
        $icon = DB::table('icons')->first();
        $portfolios = DB::table('about_portfolios')->first();
        $skill = Skill::find($id);
        return view('admin.skill.skill_edit', compact('icon','portfolios','skill'));
    }
    public function updateSkill(Request $request, $id){
        Skill::find($id)->update([
            'name'=> $request->skillName,
            'percentage'=> $request->skillPercent,
        ]);
        return redirect()->route('skill')->with('success', 'Skill Updated Successfully');

    }
    public function deleteSkill($id){
        Skill::find($id)->delete();
        return redirect()->back()->with('success', 'Skill deleted successfully');


    }
}
