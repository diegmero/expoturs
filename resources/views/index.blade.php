@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="w-full min-h-screen">
    
    <!-- Header Global provisto por layouts.app -->

    <!-- Hero con Navegación Flotante -->
    @include('components.hero-navigation', [
        'heroImage' => 'img/WEB/header_Home.webp',
        'heroTitle' => 'WHERE OPPORTUNITIES BECOME BUSINESS!',
        'heroSubtitle' => 'Pura Vida',
        'showEventInfo' => true,
        'activeTab' => 'buyer'
    ])

    <!-- Slider de Imágenes -->
    <section class="mx-2 sm:mx-4">
        @livewire('image-slider')
    </section>

</div>
@endsection
