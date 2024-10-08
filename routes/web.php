<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\homepage;
use App\Livewire\auth\login;
use App\Livewire\auth\student;
use App\Livewire\auth\faculty;
use App\Livewire\UserDashboard;

Route::get('/', homepage::class);
Route::get('/login', login::class);
Route::get('/student', student::class);
Route::get('/faculty', faculty ::class);
Route::get('/user-dashboard', UserDashboard::class);