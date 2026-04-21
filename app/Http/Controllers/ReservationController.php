<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index() { return view('reservation'); }

public function send(Request $request) {
    $request->validate([
        'prenom'       => 'required|string|max:100',
        'nom'          => 'required|string|max:100',
        'email'        => 'required|email',
        'date_arrivee' => 'required|date',
        'date_depart'  => 'required|date|after:date_arrivee',
    ]);

    return back()->with('success', 'Réservation confirmée ! Nous vous contacterons bientôt.');
}
}
