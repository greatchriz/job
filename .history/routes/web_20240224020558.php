<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;


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


Route::get('/', [\App\Http\Controllers\MainPageController::class, 'home'])->name('home');

Route::get('/about-us', [\App\Http\Controllers\MainPageController::class, 'aboutUs'])->name('about-us');

Route::get('/services', [\App\Http\Controllers\MainPageController::class, 'services'])->name('services');

Route::get('/terms', [\App\Http\Controllers\MainPageController::class, 'terms'])->name('terms');

Route::get('/privacy-policy', [\App\Http\Controllers\MainPageController::class, 'privacyPolicy'])->name('privacy-policy');

Route::get('/blog', [\App\Http\Controllers\MainPageController::class, 'blog'])->name('blog');

Route::get('/contact-us', [\App\Http\Controllers\MainPageController::class, 'contactUs'])->name('contact-us');

Route::get('/job-listing', [\App\Http\Controllers\MainPageController::class, 'jobListing'])->name('job-listing');

//jobsDetails
Route::get('/jobs-details', [\App\Http\Controllers\MainPageController::class, 'jobsDetails'])->name('jobs-details');

//work-visa
Route::get('/work-visa', [\App\Http\Controllers\MainPageController::class, 'workVisa'])->name('work-visa');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // user dashboard
    Route::get('/dashboard', [\App\Http\Controllers\UserController::class, 'dashboard'])->name('dashboard');
    Route::get('/job-list', [\App\Http\Controllers\UserController::class, 'jobList'])->name('joblist');
    // appliedjobs
    Route::get('/applied-jobs', [\App\Http\Controllers\UserController::class, 'appliedJobs'])->name('appliedjobs');
    // usermessages
    Route::get('/user-messages', [\App\Http\Controllers\UserController::class, 'userMessages'])->name('usermessages');
    // userflights
    Route::get('/user-flights', [\App\Http\Controllers\UserController::class, 'userFlights'])->name('userflights');
    //accountbalance
    Route::get('/account-balance', [\App\Http\Controllers\UserController::class, 'accountBalance'])->name('accountbalance');



    Route::get('/jobs', [\App\Http\Controllers\JobController::class, 'index'])->name('jobs.index');
    Route::get('/jobs/{job}', [\App\Http\Controllers\JobController::class, 'show'])->name('jobs.show');

    Route::post('/job-applications', [\App\Http\Controllers\JobApplicationController::class, 'store'])->name('job-applications.store');

    Route::get('/admin/job-applications', [\App\Http\Controllers\AdminController::class, 'jobApplications'])->name('admin.job-applications');

    //form-inputs route
    Route::get('/admin/form-inputs', [\App\Http\Controllers\AdminController::class, 'formInputs'])->name('admin.form-inputs');

    //form-input edit route
    Route::get('/admin/form-inputs/{formInput}/edit', [\App\Http\Controllers\AdminController::class, 'formInputsEdit'])->name('admin.form-inputs.edit');

    Route::put('/admin/form-inputs/{formInput}/update', [\App\Http\Controllers\AdminController::class, 'formInputsUpdate'])->name('admin.form-inputs.update');

    Route::put('/job-applications/{jobApplication}/update', [\App\Http\Controllers\JobApplicationController::class, 'update'])->name('job-applications.update');

    Route::put('/job-applications/{jobApplication}/reject', [\App\Http\Controllers\JobApplicationController::class, 'reject'])->name('job-applications.reject');

    //visa-apply route
    Route::get('/visa-apply', [\App\Http\Controllers\VisaController::class, 'create'])->name('visa-apply.create');

    Route::post('/visa-apply', [\App\Http\Controllers\VisaController::class, 'store'])->name('visas.store');

    //admin.dashboard route is not controller route
    Route::get('/admin/dashboard', [\App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin.dashboard');



});






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
