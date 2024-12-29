<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    $jobs = Job::with('employer')->latest()->simplePaginate(3);

    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

Route::get('/jobs/create', function () {
    return view('jobs.create');
});
//Show
Route::get('/jobs/{id}', function ($id) {
    $job = Job::find($id);

    return view('jobs.show', ['job' => $job]);
});
//Store
Route::post('/jobs', function () {
    request()->validate([
        "title" => ['required', 'min:3'],
        "salary" => ['required']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});
//Edit
Route::get('/jobs/{id}/edit', function ($id) {
    $job = Job::find($id);

    return view('jobs.edit', ['job' => $job]);
});

//Update
Route::patch('/jobs/{id}', function ($id) {
    request()->validate([
        "title" => ['required', 'min:3'],
        "salary" => ['required']
    ]);
    // authorize (On hold...)

    $job = Job::findOrFail($id);
    // and persist
    $job->update([
        'title' => request('title'),
        'salary' => request('salary')
    ]);

    return redirect('/jobs/' . $job->id);
});

Route::delete('/jobs/{id}', function ($id) {
    // authorize (On hold...)
    // delete the job
    $job = Job::findOrFail($id);
    $job->delete();

    return redirect('/jobs');
});

Route::get('/contact', function () {
    return view('contact');
});

//just a comment