<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/design-system', function () {
    return view('pages.design-system');
})->name('design-system');

Route::get('/projects/3d-print', function () {
    return view('pages.projects.3d-print');
})->name('projects.3d-print');

Route::get('/projects/video-downloader', function () {
    return view('pages.projects.video-downloader');
})->name('projects.video-downloader');
