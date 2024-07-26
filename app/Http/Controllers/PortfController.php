<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PortfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function envoyerEmail(Request $request)
    {
        $validate = $request->validate([
          
            'prenom' => 'required',
            'objet' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
       
        $contact = Contact::create($validate);
       
        // Si la validation échoue, rediriger avec les erreurs
        if (!$contact) {
            return redirect()->back()->withErrors(['message' => 'Erreur lors de l\'enregistrement du contact.'])->withInput();
        }
        Mail::to('beresaf@gmail.com')->send(new ContactMail($request->all()));

        return redirect()->back()->with('message', 'Message envoyé avec succès!');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
