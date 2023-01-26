<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function view()
    {
        return view('questions.overzicht');
    }

    public function viewReactZorgvraag()
    {
        return view('questions.zorgvraagReact');
    }

    public function viewReactZorgverleeners()
    {
        return view('questions.zorgverlenersReact');
    }
}
