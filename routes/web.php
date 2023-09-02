<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Job;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function ( Job $jobs ) {
    $jobs = $jobs->latest()->filter(request(['tag']))->get();
    // $jobs = [];
    return view('jobs.jobs' , ['jobs' => $jobs] );
});

Route::get('/jobs/create' , [JobController::class , 'create']);
Route::put('/jobs' , [JobController::class , 'store']);

Route::get('/jobs/edit/{job}' , [JobController::class , 'edit']);
Route::put('/jobs/{job}' , [JobController::class , 'update']);

Route::delete('/jobs/{job}' , [JobController::class , 'remove']);

Route::get('/jobs/{job}' , [JobController::class , 'showOne']);
