@extends('layouts.app')

@section('title', 'Akar Sekawan · Desa Digital, SIAKAD, UMKM')

@section('content')
  @include('partials.hero')

  @include('partials.feature-overview')

  @include('partials.why-akarsekawan')

  @include('partials.implementation-timeline')

  @include('partials.services')

  @include('partials.portfolio')

  @include('partials.partners')

  @include('partials.testimonials')

  @include('partials.faq')

  @include('partials.contact')
@endsection
