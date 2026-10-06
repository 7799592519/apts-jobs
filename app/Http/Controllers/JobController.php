<?php

namespace App\Http\Controllers;
use App\Models\Job;
use App\Models\Category;

use Illuminate\Http\Request;

class JobController extends Controller
{
    public function create(){
        $categories = Category::all();
        return view('add_job', compact('categories'));
    }

    public function store(Request $request){
        $request->validate([
            'category_id' => 'required',
            'title' => 'required|string|max:255',
            'description' => 'required',
            'qualification' => 'required',
            'total_posts' => 'nullable|integer',
            'last_date' => 'required|date',
            'apply_link' => 'nullable|url',
        ]);
        Job::create($request->all());
        return redirect('/')->with('success', 'కొత్త జాబ్ నోటిఫికేషన్ విజయవంతంగా యాడ్ చేయబడింది!');
    }
}
