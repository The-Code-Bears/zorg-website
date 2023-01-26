<?php

namespace App\Http\Controllers;

use App\Models\question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class QuestionController extends Controller
{
    public function view()
    {
        $question = question::all();
        return view('questions.overzicht', compact('question'));
    }

    public function viewReactZorgvraag()
    {
        return view('questions.zorgvraagReact');
    }

    public function viewReactZorgverleeners()
    {
        return view('questions.zorgverlenersReact');
    }

    public function viewReactZorgverleeners_store(Request $request)
    {
        $data = [
            'user_id' => Auth::user()->id,
            'to_user_id' => 2,
            'name' => Auth::user()->name,
            'subject' => $request->subject,
            'location' => "roosendaal",
            'question' => $request->question,
            'created_at' => now(),
            'updated_at' => now(),
        ];

        question::create($data);

        return redirect()->route('questions');

    }
}
