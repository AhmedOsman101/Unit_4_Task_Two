<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        return response()->json(Question::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        foreach ($request->all() as $question) {
            $question = Question::create($question);
            $question->save();
        }
        return response()->json(Question::all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Question $question) {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Question $question) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Question $question) {
        //
    }
}
