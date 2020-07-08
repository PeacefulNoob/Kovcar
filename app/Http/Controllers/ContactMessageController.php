<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;


class ContactMessageController extends Controller
{
    public function create()
    {
        return view('site.contact');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
        $data['title'] = $request->message;

        Mail::send('emails.contact_message', $data, function ($message) use ($request) {

            $message->to('kovcar.info@gmail.com', 'Receiver Name')
                ->from($request->email, $request->fname)
                ->subject('Kov-Car Website');
        });



        return redirect()->back()->with('contact', 'Uspesno ste poslali poruku! ');
    }
}
