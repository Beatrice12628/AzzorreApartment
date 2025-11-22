<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactsMail;
use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function welcome()
{

    return view('welcome');
}

    public function photos()
    {
        return view('pages.photos');
    }

    public function form()
    {
        return view('pages.contacts');
    }

    public function sendMail(ContactRequest $request)
    {
        $mail = new ContactsMail(
            $request->name,
            $request->surname,
            $request->mail,
            $request->phone,
            $request->body,
            );
       
            Mail::to('tricerozza@gmail.com')->send($mail);

           return redirect()->route('pages.contacts')->with('success', 'Richiesta inviata con successo!');

    }

    public function privacy()
    {
        return view('pages.privacy');
    }
}
