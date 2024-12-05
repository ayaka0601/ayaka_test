<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Http\Controllers\ContactController;
use App\Models\Contact;

class ContactController extends Controller
{
  public function index()
  {
    return view('index');
  }

  public function confirm(ContactRequest $request)
  {
    $contact = $request->only(['name', 'sex', 'email', 'tel', 'address', 'choice', 'content']);
    return view('confirm', compact('contact'));
  }

  public function store(ContactRequest $request)
  {
    $contact = $request->only(['name', 'sex', 'email', 'tel', 'address', 'choice', 'content']);
    Contact::create($contact);
    return view('thanks');
  }
}
