<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
  
    public function index(Request $request)
    {
        $contacts = Contact::paginate(15);
        return view('contacts.index', compact('contacts'));

    }

    public function create()
    {
        return view('contacts.create');
    }

    /**
     * Store a new flight in the database.
     */
    public function store(Request $request): RedirectResponse
    {
        // Validate the request...

        $contact = new Contact();

        $contact->nom = $request->nom;

        $contact->prenom = $request->prenom;

        $contact->telephone = $request->telephone;

        $contact->email = $request->email;

        $contact->adresse = $request->adresse;

        $contact->save();

        return redirect('/');
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail(decrypt($id));
        return view('contacts.edit',compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $contact = Contact::findOrFail($id);
        $contact->nom = $request->nom;
        $contact->prenom= $request->prenom;
        $contact->telephone = $request->telephone;
        $contact->email = $request->email;
        $contact->adresse = $request->adresse;
        $contact->save();
        //flash(__('Contact has been updated successfully'))->success();
        return redirect()->route('home');
    }


    public function show($id)
    {
        $contact  = Contact::findOrFail(decrypt($id));
        return view('contacts.show', compact('contact'));
    }


    public function destroy($id)
    {
        //

        $contact = Contact::findOrFail($id);
        if(Contact::destroy($id)){
            //flash(__('Tag has been deleted successfully'))->success();
            return redirect()->route('home');
        }
        else{
            //flash(__('Something went wrong'))->error();
            return back();
        }
    }

}
