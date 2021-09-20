<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PDF;

class ResumeController extends Controller
{
    public function download(){
        $contacts = DB::table('contacts')->first();
        $projects = DB::table('projects')->get();
        $skills = DB::table('skills')->get();
        $aboutMe = DB::table('about_mes')->first();
        $education = DB::table('education')->get();
        $icons = DB::table('icons')->first();
        $portfolios = DB::table('about_portfolios')->first();
        $working = DB::table('working_histories')->get();
        $socials = DB::table('social_media')->first();
        $pdf = PDF::loadView('homeBody.resume', compact('contacts',  'projects', 'skills', 'aboutMe', 'education', 'icons', 'portfolios', 'working', 'socials'));
        return $pdf->download('resume.pdf');

    }
}
