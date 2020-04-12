<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function store(Request $request) {

        $request->validate([
            'question' => 'required|string',
            'uuid' => 'required|string',
        ]);

        $saved_question = Question::create([
            'question' => $request->question,
            'user_id' => $this->user_id,
        ]);

        return response()->json($saved_question, 201);
    }
}
