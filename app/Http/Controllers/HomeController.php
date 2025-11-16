<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use App\Models\Partner;
use App\Models\Portfolio;
use App\Models\Faq;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $testimonials = Testimonial::query()
            ->where('is_active', true)
            ->orderBy('order')
            ->get(['role', 'name', 'quote']);

        $partners = Partner::query()
            ->where('is_active', true)
            ->orderBy('order')
            ->get(['name', 'label', 'type', 'short_description', 'logo_path']);

        $portfolios = Portfolio::query()
            ->where('is_active', true)
            ->orderBy('order')
            ->get(['category', 'title', 'summary']);

        $faqs = Faq::query()
            ->where('is_active', true)
            ->orderBy('order')
            ->get(['category', 'question', 'answer']);

        return view('welcome', compact('testimonials', 'partners', 'portfolios', 'faqs'));
    }
}
