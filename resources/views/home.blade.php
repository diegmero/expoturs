@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="w-full min-h-screen">
    
    <!-- Header Global provisto por layouts.app -->

    <!-- Hero con Navegación Flotante -->
    @include('components.hero-navigation', [
        'heroImage' => 'https://res.cloudinary.com/dspoaxmvn/image/upload/v1762109289/header_Home_awv29m.webp',
        'heroTitle' => 'WHERE OPPORTUNITIES BECOME BUSINESS!',
        'heroSubtitle' => 'Pura Vida',
        'showEventInfo' => true,
        'activeTab' => 'home'
    ])

    <!-- Slider de Imágenes -->
    <section class="mx-2 sm:mx-4">
        @livewire('image-slider')
    </section>

</div>
@endsection
