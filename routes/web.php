<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use App\Http\Controllers\JobController;
use App\Models\Category;

Route::get('/', function () {
    $jobs = Job::with('category')->latest()->get();
    return view('welcome', compact('jobs'));
});
Route::get('/jobs/{id}', function($id){
    $job = Job::with('category')->findOrFail($id);
    return view('job_details', compact('job'));


})->name('job.show');
Route::get('/admin/add-job', [JobController::class, 'create'])->name('job.create');
Route::post('/admin/add-job', [JobController::class, 'store'])->name('job.store');
Route::get('/category/{slug}', function($slug){
   $category = Category::where('slug', $slug)->firstOrFail();
   $jobs = $category->jobs()->latest()->get();
   return view('category_jobs', compact('category', 'jobs'));
})->name('category.show');

