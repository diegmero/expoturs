@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="w-full min-h-screen">
    
    <!-- Header Global provisto por layouts.app -->

    <!-- Hero con Navegación Flotante -->
    @include('components.hero-navigation', [
        'heroImage' => 'https://res.cloudinary.com/dspoaxmvn/image/upload/v1763693957/Web_Site_header_home_ts1m55.png',
        'heroTitle' => __('messages.hero.title'),
        'heroSubtitle' => __('messages.hero.subtitle'),
        'showEventInfo' => true,
        'activeTab' => 'home'
    ])

    <!-- Slider de Imágenes -->
    <section class="mx-2 sm:mx-4">
        @livewire('image-slider')
    </section>

</div>
@endsection
