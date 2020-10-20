<?php

namespace Vito\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Vito\Contact\Mail\ContactMailable;
use Vito\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index() {
        return view('contact::contact');
    }

    public function send(Request $request) {
        Mail::to(config('contact.send_email_to'))->send(new ContactMailable($request->message, $request->name,$request->email));
        Contact::create($request->all());
        return redirect(route('contact'));
    }
}
