<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::view('/tentang', 'pages.about')->name('about');
Route::view('/layanan', 'pages.services')->name('services');
Route::view('/portfolio', 'pages.portfolio')->name('portfolio');
Route::view('/tim', 'pages.team')->name('team');
Route::view('/kontak', 'pages.contact')->name('contact');
