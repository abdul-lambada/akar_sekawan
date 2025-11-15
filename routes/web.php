<?php

use Illuminate\Support\Facades\Route;
use App\Models\Testimonial;
use App\Models\Partner;
use App\Models\Portfolio;
use App\Models\Faq;

Route::get('/', function () {
    $testimonials = Testimonial::query()
        ->where('is_active', true)
        ->orderBy('order')
        ->get(['role', 'name', 'quote']);

    $partners = Partner::query()
        ->where('is_active', true)
        ->orderBy('order')
        ->get(['name', 'label', 'type', 'short_description']);

    $portfolios = Portfolio::query()
        ->where('is_active', true)
        ->orderBy('order')
        ->get(['category', 'title', 'summary']);

    $faqs = Faq::query()
        ->where('is_active', true)
        ->orderBy('order')
        ->get(['category', 'question', 'answer']);

    return view('welcome', compact('testimonials', 'partners', 'portfolios', 'faqs'));
})->name('home');

Route::view('/tentang', 'pages.about')->name('about');
Route::view('/layanan', 'pages.services')->name('services');
Route::view('/portfolio', 'pages.portfolio')->name('portfolio');
Route::view('/tim', 'pages.team')->name('team');
Route::view('/kontak', 'pages.contact')->name('contact');
