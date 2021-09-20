<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
{
    public function contactProfile(){
        $icon = DB::table('icons')->first();
        $portfolios = DB::table('about_portfolios')->first();
        $contacts = Contact::latest()->get();
        return view('admin.contact.contact_profile', compact('icon','portfolios','contacts'));
    }
    public function addContact(){
        $icon = DB::table('icons')->first();
        $portfolios = DB::table('about_portfolios')->first();
        return view('admin.contact.contact_profile_add', compact('icon','portfolios'));
    }
    public function editContact($id){
        $icon = DB::table('icons')->first();
        $portfolios = DB::table('about_portfolios')->first();
        $contact = Contact::find($id);
        return view('admin.contact.contact_profile_edit', compact('icon','portfolios','contact'));
    }
    public function storeContact(Request $request){
        Contact::insert([
            'address' => $request->contactAddress,
            'phone' => $request->contactPhone,
            'email' => $request->contactEmail,
            'created_at' => Carbon::now(),
        ]);
        return redirect()->route('contact.profile')->with('success', 'You added your contact successfully');
    }
    public function updateContact(Request $request, $id){
        Contact::find($id)->update([
            'address' => $request->contactAddress,
            'phone' => $request->contactPhone,
            'email' => $request->contactEmail,
        ]);
        return redirect()->route('contact.profile')->with('success', 'You updated your contact successfully');
    }
    public function deleteContact($id){
        Contact::find($id)->delete();
        return redirect()->back()->with('success', 'Contact deleted successfully');
    }
    public function contactMessage(){
        $icon = DB::table('icons')->first();
        $portfolios = DB::table('about_portfolios')->first();
        $contactForm = ContactForm::latest()->paginate(4);
        return view('admin.contact.contact_message', compact('icon','portfolios','contactForm'));
    }
    public function storeContactForm(Request $request){
        ContactForm::insert([
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
            'created_at' => Carbon::now(),
        ]);
    }
    public function deleteContactForm($id){
        ContactForm::find($id)->delete();
        return redirect()->back()->with('success', 'Contact Form deleted successfully');

    }
}
