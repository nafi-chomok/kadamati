<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    //

    public function index() {

        $contacts = Contact::all();

        return view('pages.contact_us_index', ['contacts'=> $contacts]);
    }

    public function create() {
        return view('pages.contact_us');
    }

    public function store(Request $request) {

        // dd(request()->all());
        $total = Contact::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'contact_no' => $request['contact_no'],
            'message' => $request['txtMsg'],
        ]);

        return back()->with('status', 'Thanks for reaching out to us!');

    }
    protected function delete(Contact $contact) {
        $contact->delete();
        return back();
    }
}
