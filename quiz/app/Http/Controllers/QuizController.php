<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::latest()->paginate(5);
    
        return view('quizzes.index',compact('quizzes'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
     
    public function create()
    {
        return view('quizzes.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'author' => 'required',
            'question' => 'required',
            'answer' => 'required',
            'question_id' => 'required',
            'image'
        ]);

    
        Quiz::create($request->all());
     
        return redirect()->route('quizzes.index')
                        ->with('success','Quiz created successfully.');
    }

    public function show(Quiz $quiz)
    {
        return view('quizzes.show',compact('quiz'));
    } 
     

    public function edit(Quiz $quiz)
    {
        return view('quizzes.edit',compact('quiz'));
    }
    
    public function update(Request $request, Quiz $quiz)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'author' => 'required',
            'question' => 'required',
            'answer' => 'required',
            'question_id' => 'required',
            'image' 
        ]);
    
        $quiz->update($request->all());
    
        return redirect()->route('quizzes.index')
                        ->with('success','Quiz updated successfully');
    }

    public function destroy(Quiz $quiz)
    {
        $quiz->delete();
    
        return redirect()->route('quizzes.index')
                        ->with('success','Quiz deleted successfully');
    }
}
