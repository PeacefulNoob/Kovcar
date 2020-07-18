<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Validator;


class ContactMessageController extends Controller
{
    public function create()
    {
        return view('site.contact');
    }

    public function store(Request $request)
    {
 
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'

        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        $data['title'] = $request->message;
        $data['email'] = $request->email;

        Mail::send('emails.contact_message', $data, function ($message) use ($request) {

            $message->to('kovcar.info@gmail.com', 'Receiver Name')
                ->from($request->email, $request->fname)
                ->subject('Kov-Car Website');
        });



        return redirect()->back()->with('contact', 'Uspesno ste poslali poruku! ');
    }

    public function test_drive(Request $request)
    {
    

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'surname' => 'required',
            'email' => 'required|email',
            'city' => 'required',
            'tel' => 'required',
            'god' => 'required',
            'model' => 'required'

        ]);
    
        if ($validator->fails()) {
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
        
        $data['title'] = $request->message;
        $data['email'] = $request->email;

        Mail::send('emails.test_drive', $data, function ($message) use ($request) {

            $message->to('kovcar.info@gmail.com', 'Receiver Name')
                ->from($request->email, $request->fname)
                ->subject('Kov-Car Test Drive ');
        });



        return redirect()->back()->with('test_drive', 'Uspesno ste poslali poruku! ');
    }
}
