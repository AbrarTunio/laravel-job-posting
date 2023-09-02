<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{
   
    // List out one job
    public function showOne( Job $job ){
        return view( '/jobs.job' , [ 'job' =>  $job ]  );     
    }

    // Show form for Creating New Post
    public function create( Request $request  ){
        return view("/jobs.create" );
    }

    // Go to edit form
    public function edit( Job $job ){
        return view('/jobs.edit' , ['job' => $job]);
    }

    // Post the job and insert into database
    public function store( Request $request  ){
        $formFields = $request->validate([
            'title' => 'required',
            'tags' => 'required',
            'company' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required' , 'email'],
            'company' => ['required'],
            'description' => 'required',
        ]);

        Job::create($formFields);
        // $formFields->update();
        return redirect('/');

    }

    // Post update into database
    public function update( Request $request , Job $job ){
        $formFields = $request->validate([
            'title' => 'required',
            'tags' => 'required',
            'company' => 'required',
            'location' => 'required',
            'website' => 'required',
            'email' => ['required' , 'email'],
            'company' => ['required'],
            'description' => 'required',
        ]);

        $job->update($formFields);
        // $formFields->update();
        return view("/jobs.job" , ['job' => $job]);

    }

    public function remove(Job $job){
       $job->delete();
       return redirect('/'); 
    }
    
}
