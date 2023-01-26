<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Resources\Views\ContactForm;

class ContactFormController extends Controller
{
    public function create()
    {
        return view('ContactForm');
    }
};

