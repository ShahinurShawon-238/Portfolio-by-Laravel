 <?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResumeController;

Route::group(['middleware' => 'prevent-back-history'],function(){

Route::get('/', function () {
    $contacts = DB::table('contacts')->first();
    $testimonials = DB::table('testimonials')->get();
    $projects = DB::table('projects')->get();
    $skills = DB::table('skills')->get();
    $services = DB::table('services')->get();
    $aboutMe = DB::table('about_mes')->first();
    $education = DB::table('education')->get();
    $icons = DB::table('icons')->first();
    $portfolios = DB::table('about_portfolios')->first();
    $working = DB::table('working_histories')->get();
    $socials = DB::table('social_media')->first();
    $colors = DB::table('colors')->first();
    return view('home', compact('contacts', 'testimonials', 'projects', 'skills', 'services', 'aboutMe', 'education', 'icons', 'portfolios', 'working', 'socials', 'colors'));
});
Route::get('/resume', function () {
    $contacts = DB::table('contacts')->first();
    $projects = DB::table('projects')->get();
    $skills = DB::table('skills')->get();
    $aboutMe = DB::table('about_mes')->first();
    $education = DB::table('education')->get();
    $icons = DB::table('icons')->first();
    $portfolios = DB::table('about_portfolios')->first();
    $working = DB::table('working_histories')->get();
    $socials = DB::table('social_media')->first();
    return view('homeBody.resume', compact('contacts', 'projects', 'skills', 'aboutMe', 'education', 'icons', 'portfolios', 'working', 'socials'));
})->name('resume');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $icon = DB::table('icons')->first();
    $portfolios = DB::table('about_portfolios')->first();
    return view('admin.index', compact('icon', 'portfolios'));
})->name('dashboard');



//admin index route
 Route::get('/admin/dashboard', [IndexController::class, 'index'])->name('admin.index');
 Route::get('/admin/login', [IndexController::class, 'logout'])->name('user.logout');

 //Contact page route
Route::get('/contact/profile', [ContactController::class, 'contactProfile'])->name('contact.profile');
Route::get('/add/contact', [ContactController::class, 'addContact'])->name('add.contact');
Route::post('/contact/add', [ContactController::class, 'storeContact'])->name('store.contact');
Route::get('/contact/edit/{id}', [ContactController::class, 'editContact']);
Route::post('/contact/update/{id}', [ContactController::class, 'updateContact']);
Route::get('/contact/delete/{id}', [ContactController::class, 'deleteContact']);

Route::get('/contact/message', [ContactController::class, 'contactMessage'])->name('contact.message');
Route::post('/contact/message/add', [ContactController::class, 'storeContactForm'])->name('store.contact.form');
Route::get('contact/message/delete/{id}', [ContactController::class, 'deleteContactForm']);

//Testimonial page routes
Route::get('/testimonial', [TestimonialController::class, 'testimonial'])->name('testimonial');
Route::post('/testimonial/add', [TestimonialController::class, 'storeTestimonial'])->name('store.testimonial');
Route::get('/testimonial/delete/{id}', [TestimonialController::class, 'deleteTestimonial']);

//Work page route
Route::get('/project', [ProjectController::class, 'project'])->name('project');
Route::get('/add/project', [ProjectController::class, 'addProject'])->name('add.project');
Route::post('/project/add', [ProjectController::class, 'storeProject'])->name('store.project');
Route::get('/project/edit/{id}', [ProjectController::class, 'editProject']);
Route::post('/project/update/{id}', [ProjectController::class, 'updateProject']);
Route::get('/project/delete/{id}', [ProjectController::class, 'deleteProject']);


//Skill page route
Route::get('/skill', [SkillController::class, 'skill'])->name('skill');
Route::get('/add/skill', [SkillController::class, 'addSkill'])->name('add.skill');
Route::post('/skill/add', [SkillController::class, 'storeSkill'])->name('store.skill');
Route::get('/skill/edit/{id}', [SkillController::class, 'editSkill']);
Route::post('/skill/update/{id}', [SkillController::class, 'updateSkill']);
Route::get('/skill/delete/{id}', [SkillController::class, 'deleteSkill']);


//Service page route
Route::get('/service', [ServiceController::class, 'service'])->name('service');
Route::get('/add/service', [ServiceController::class, 'addService'])->name('add.service');
Route::post('/service/add', [ServiceController::class, 'storeService'])->name('store.service');
Route::get('/service/edit/{id}', [ServiceController::class, 'editService']);
Route::post('/service/update/{id}', [ServiceController::class, 'updateService']);
Route::get('/service/delete/{id}', [ServiceController::class, 'deleteService']);

//About page routes
Route::get('/about/me', [AboutController::class, 'aboutMe'])->name('about.me');
Route::get('/add/about/me', [AboutController::class, 'AddAboutMe'])->name('add.about.me');
Route::post('/about/me/add', [AboutController::class, 'storeAboutMe'])->name('store.about.me');
Route::get('/about/me/edit/{id}', [AboutController::class, 'editAboutMe']);
Route::post('/about/me/update/{id}', [AboutController::class, 'updateAboutMe']);
Route::get('/about/me/delete/{id}', [AboutController::class, 'deleteAboutMe']);


Route::get('/about/education', [AboutController::class, 'education'])->name('education');
Route::get('/add/about/education', [AboutController::class, 'addEducation'])->name('add.education');
Route::post('/about/education/add', [AboutController::class, 'storeEducation'])->name('store.education');
Route::get('/education/edit/{id}', [AboutController::class, 'editEducation']);
Route::post('/education/update/{id}', [AboutController::class, 'updateEducation']);
Route::get('/education/delete/{id}', [AboutController::class, 'deleteEducation']);


Route::get('/about/working/history', [AboutController::class, 'workingHistory'])->name('working.history');
Route::get('/add/about/working/history', [AboutController::class, 'addWorkingHistory'])->name('add.working.history');
Route::post('/about/working/history/add', [AboutController::class, 'storeWorkingHistory'])->name('store.working.history');
Route::get('/working/history/edit/{id}', [AboutController::class, 'editWorkingHistory']);
Route::post('/working/history/update/{id}', [AboutController::class, 'updateWorkingHistory']);
Route::get('/working/history/delete/{id}', [AboutController::class, 'deleteWorkingHistory']);



//Home page routes
Route::get('/home/icon', [HomeController::class, 'homeIcon'])->name('home.icon');
Route::get('/add/icon', [HomeController::class, 'AddIcon'])->name('add.icon');
Route::post('/icon/add', [HomeController::class, 'storeIcon'])->name('store.icon');
Route::get('/icon/edit/{id}', [HomeController::class, 'editIcon']);
Route::post('/icon/update/{id}', [HomeController::class, 'updateIcon']);
Route::get('/icon/delete/{id}', [HomeController::class, 'deleteIcon']);

Route::get('/about/portfolio', [HomeController::class, 'aboutPortfolio'])->name('about.portfolio');
Route::get('/add/about/portfolio', [HomeController::class, 'addAboutPortfolio'])->name('add.about.portfolio');
Route::post('/about/portfolio/add', [HomeController::class, 'storeAboutPortfolio'])->name('store.about.portfolio');
Route::get('/portfolio/edit/{id}', [HomeController::class, 'editAboutPortfolio']);
Route::post('/portfolio/update/{id}', [HomeController::class, 'updateAboutPortfolio']);
Route::get('/portfolio/delete/{id}', [HomeController::class, 'deleteAboutPortfolio']);

Route::get('/social/media', [HomeController::class, 'socialMedia'])->name('social.media');
Route::get('/add/social/media', [HomeController::class, 'addSocialMedia'])->name('add.social.media');
Route::post('/social/media/add', [HomeController::class, 'storeSocialMedia'])->name('store.social.media');
Route::get('/social/media/edit/{id}', [HomeController::class, 'editSocialMedia']);
Route::post('/social/media/update/{id}', [HomeController::class, 'updateSocialMedia']);
Route::get('/social/media/delete/{id}', [HomeController::class, 'deleteSocialMedia']);

Route::get('/color', [HomeController::class, 'color'])->name('colors');
Route::get('/add/color', [HomeController::class, 'addColor'])->name('add.home.color');
Route::post('/color/add', [HomeController::class, 'storeColor'])->name('store.home.color');
Route::get('/color/edit/{id}', [HomeController::class, 'editColor']);
Route::post('/color/update/{id}', [HomeController::class, 'updateColor']);
Route::get('/color/delete/{id}', [HomeController::class, 'deleteColor']);

Route::get('/resume/download', [ResumeController::class, 'download'])->name('resume.download');

});
