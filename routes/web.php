<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;
use Illuminate\Contracts\Queue\Job as QueueJob;
use App\Http\Controllers\JobController;
Route::get('/', function () {
    return view('home');
});

Route::resource('jobs', JobController::class);