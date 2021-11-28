<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Http\Requests\StoreContactRequest;
use App\Http\Requests\UpdateContactRequest;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        return view('contact');
    }

    public function mailContactForm(Request $request)
    {

        $this->validate($request, [
      'name'     =>  'required',
      'subject'     =>  'required',
      'tel'     =>  'required',
      'email'  =>  'required|email',
      'message' =>  'required'
     ]);
        $data = [

        'name' => $request->get('name'),
        'subject' => $request->get('subject'),
        'tel' => $request->get('tel'),
        'email' => $request->get('email'),
        'message' => $request->get('message'),
        ];

        \Mail::to(env('RECIPIENT_EMAIL'))->send(new \App\Mail\ContactMail($data));

        return redirect()->back();
    }
}
