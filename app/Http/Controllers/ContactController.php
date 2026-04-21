<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $request->validate([
            'prenom'  => 'required|string|max:100',
            'nom'     => 'required|string|max:100',
            'email'   => 'required|email|max:255',
            'sujet'   => 'nullable|string|max:100',
            'message' => 'required|string|min:10',
        ]);
        // هنا تقدر تحفظ في DB أو ترسل email
        // مثال: Mail::to('admin@hotel.com')->send(new ContactMail($request->all()));

        return back()->with('success', 'Votre message a été envoyé avec succès !');
    }
}
