<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = Quiz::latest()->paginate(10);
    
        return view('customer.index',compact('customer'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
     
    public function create()
    {
        return view('customer.create');
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
            'image',
        
        ]);

    
        Quiz::create($request->all());
     
        return redirect()->route('customer.index')
                        ->with('success','Quiz created successfully.');
    }


    public function edit(Quiz $quiz)
    {
        return view('customer.edit',compact('quiz'));
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
    
        return redirect()->route('customer.index')
                        ->with('success','Quiz updated successfully');
    }

    public function destroy(Quiz $quiz)
    {
        $quiz->delete();
    
        return redirect()->route('customer.index')
                        ->with('success','Quiz deleted successfully');
    }
}
