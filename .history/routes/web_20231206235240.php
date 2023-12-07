<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/jobs', [\App\Http\Controllers\JobController::class, 'index'])->name('jobs.index');
    Route::get('/jobs/{job}', [\App\Http\Controllers\JobController::class, 'show'])->name('jobs.show');

    Route::post('/job-applications', [\App\Http\Controllers\JobApplicationController::class, 'store'])->name('job-applications.store');

    Route::get('admin', [\App\Http\Controllers\AdminController::class, 'jobApplications'])->name('admin');

    Route::put('/job-applications/{jobApplication}', function ($id) {
        dd($id);
    });


});

Route::get('create-permission', [\App\Http\Controllers\AdminController::class, 'createPermission'])->name('create-permission');


Route::get('assign-role', [\App\Http\Controllers\AdminController::class, 'assignRole'])->name('assign-role');




// Route::get('/jobs/create', [\App\Http\Controllers\JobController::class, 'create'])->name('jobs.create');
// Route::post('/jobs', [\App\Http\Controllers\JobController::class, 'store'])->name('jobs.store');
// Route::get('/jobs/{job}', [\App\Http\Controllers\JobController::class, 'show'])->name('jobs.show');
// Route::get('/jobs/{job}/edit', [\App\Http\Controllers\JobController::class, 'edit'])->name('jobs.edit');
// Route::put('/jobs/{job}', [\App\Http\Controllers\JobController::class, 'update'])->name('jobs.update');
// Route::delete('/jobs/{job}', [\App\Http\Controllers\JobController::class, 'destroy'])->name('jobs.destroy');

// apply for a job application


// Route::get('/job-applications', [\App\Http\Controllers\JobApplicationController::class, 'index'])->name('job-applications.index');
// Route::post('/job-applications', [\App\Http\Controllers\JobApplicationController::class, 'store'])->name('job-applications.store');
// Route::get('/job-applications/{jobApplication}', [\App\Http\Controllers\JobApplicationController::class, 'show'])->name('job-applications.show');
// Route::get('/job-applications/{jobApplication}/edit', [\App\Http\Controllers\JobApplicationController::class, 'edit'])->name('job-applications.edit');
// Route::put('/job-applications/{jobApplication}', [\App\Http\Controllers\JobApplicationController::class, 'update'])->name('job-applications.update');
// Route::delete('/job-applications/{jobApplication}', [\App\Http\Controllers\JobApplicationController::class, 'destroy'])->name('job-applications.destroy');
