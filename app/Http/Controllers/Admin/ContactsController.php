<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Models\Contact;


class ContactsController extends Controller
{
    public function index()
    {
        abort_unless(\Gate::allows('contact_access'), 403);

        $contacts = Contact::all();

        return view('admin.contacts.index', compact('contacts'));
    }
    public function create()
    {
        
    }
    public function store()
    {
        
    }
   
}
