<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    //
    public function postContact(Request $request){
        $this->validate($request,
            [
                'name' => 'required',
                'email_address' => 'required | email',
                'description' => 'required',
            ]);
        Mail::send('email.contact-form',[
                'name' => $request->get('name'),
                'email'=> $request->get('email_address'),
                'description'=> $request->get('description'),
            ], function($message){
            $message->from('dev@sententia.co.ke');
            $message->to('mulekea3@gmail.com','Andrew Muleke')
                    ->subject('Your Website Contact Form');
        });
        return back()->with('success','Email sent');
    }
}
