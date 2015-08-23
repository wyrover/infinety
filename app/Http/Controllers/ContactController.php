<?php

namespace Infinety\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Infinety\Http\Requests;
use Infinety\Http\Controllers\Controller;
use Infinety\Http\Requests\ContactRequest;

class ContactController extends Controller
{

    public function send(ContactRequest $request)
    {
         $data = array(
             'name'  => $request->input('name'),
             'email' => $request->input('email'),
             'body'  => $request->input('body')
         );
         // Send the email
         Mail::send('emails/contact', $data, function( $message ) use ($data)
         {
             $message->to('hello@infinety.co.uk')
                     ->from($data['email'])
                     ->subject('Contact Form Submission');
         });

        flash()->success('Thank You!', 'We have received your request and will be touch shortly.');
        return redirect('/');
    }

}
