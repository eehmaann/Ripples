<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactEmail;

class ContactController extends Controller
{
    //
    public function create()
    {
        return view('clients.contact');
    }

    public function store()
    {
    	$contact = [];
        $contact['name'] = $request->get('name');
        $contact['email'] = $request->get('email');
        $contact['msg'] = $request->get('msg');
        Mail::to(config('mail.support.address'))->send(new ContactEmail($contact));
        flash('Your message has been sent!')->success();
        return redirect()->route('contact.create');
    }
    }
}
