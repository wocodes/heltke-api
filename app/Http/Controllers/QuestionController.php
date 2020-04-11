<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function store(Request $request) {
        dd(1);
        return response()->json(['stat' => 'Done'], 200);

        $request->validate([
            'question' => 'required|string',
            'uuid' => 'required|string',
        ]);

        $saved_question = Question::create([
            'question' => $request->question,
            'user_id' => $this->user_id,
        ]);
    }
}
