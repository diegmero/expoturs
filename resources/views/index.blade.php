@extends('layouts.app')

@section('content')
<!-- Hero Section -->
<div class="w-full min-h-screen">
    
    <!-- Header Turquesa -->
    <header class="bg-gradient-to-r from-[#4EAAA8] to-[#5AB8B6] py-6 px-8 rounded-t-[2.5rem] mx-4 mt-4 relative">
        <!-- Selector de Idioma -->
        <div class="absolute top-6 right-8 bg-white rounded-full px-4 py-2 flex items-center gap-2 shadow-md">
            <div class="flex items-center gap-1">
                <img src="https://flagcdn.com/w20/us.png" alt="EN" class="w-5 h-4">
                <p class="text-sm font-medium text-gray-700">EN</p>
            </div>
            <span class="text-gray-400">|</span>
            <div class="flex items-center gap-1">
                <img src="https://flagcdn.com/w20/es.png" alt="ESP" class="w-5 h-4">
                <p class="text-sm font-medium text-gray-700">ESP</p>
            </div>
        </div>
        
        <!-- Logo Centrado -->
        <div class="flex justify-center">
            <img src="URL_DEL_LOGO_EXPOTOUR" alt="ExpoTour Costa Rica" class="h-24">
        </div>
    </header>

    <!-- Hero Section con Degradado -->
    <section class="relative mx-4 overflow-hidden" style="background: linear-gradient(90deg, #FF6B35 0%, #FFA07A 25%, #FFD4A3 50%, #B8E0E0 75%, #7EC8E3 100%);">
        
        <!-- Imagen de Fondo -->
        <div class="absolute inset-0 z-0">
            <img src="URL_IMAGEN_SURFISTAS" alt="Pura Vida" class="w-full h-full object-cover opacity-90">
        </div>
        
        <!-- Contenido del Hero -->
        <div class="relative z-10 py-16 px-8 lg:px-16">
            <div class="max-w-7xl mx-auto">
                
                <!-- Texto Principal -->
                <div class="mb-8">
                    <h1 class="text-white font-extrabold text-5xl lg:text-7xl leading-tight mb-2">
                        WHERE <span class="font-black">OPPORTUNITIES</span><br>
                        BECOME <span class="font-black">BUSINESS!</span>
                    </h1>
                    
                    <!-- Pura Vida en cursiva -->
                    <h2 class="text-white font-bold italic text-6xl lg:text-8xl mt-4" style="font-family: 'Brush Script MT', cursive;">
                        Pura Vida
                    </h2>
                </div>
                
                <!-- Iconos con Texto -->
                <div class="flex flex-wrap gap-6 items-center text-white">
                    <!-- Trayectoria -->
                    <div class="flex items-center gap-2">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"/>
                            <circle cx="12" cy="12" r="3" fill="currentColor"/>
                        </svg>
                        <span class="text-lg font-medium">Trayectoria</span>
                    </div>
                    
                    <!-- Innovación -->
                    <div class="flex items-center gap-2">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"/>
                            <path d="M12 6v6l4 2" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                        <span class="text-lg font-medium">Innovación</span>
                    </div>
                    
                    <!-- Comercialización -->
                    <div class="flex items-center gap-2">
                        <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2" fill="none"/>
                            <path d="M8 12h8M12 8v8" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                        <span class="text-lg font-medium">Comercialización</span>
                    </div>
                </div>
                
            </div>
        </div>
        
        <!-- Barra Inferior Morada con Info -->
        <div class="bg-[#4A4E69] py-6 px-8 lg:px-16">
            <div class="max-w-7xl mx-auto flex flex-wrap items-center justify-between gap-6 text-white">
                
                <!-- Fecha -->
                <div class="flex items-center gap-3">
                    <svg class="w-10 h-10 text-[#5AB8B6]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke-width="2"/>
                        <line x1="16" y1="2" x2="16" y2="6" stroke-width="2" stroke-linecap="round"/>
                        <line x1="8" y1="2" x2="8" y2="6" stroke-width="2" stroke-linecap="round"/>
                        <line x1="3" y1="10" x2="21" y2="10" stroke-width="2"/>
                    </svg>
                    <span class="text-2xl font-light tracking-wide">MAY 27-29, 2026</span>
                </div>
                
                <!-- Ubicación -->
                <div class="flex items-center gap-3">
                    <svg class="w-10 h-10 text-[#5AB8B6]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke-width="2"/>
                        <circle cx="12" cy="10" r="3" stroke-width="2"/>
                    </svg>
                    <span class="text-2xl font-light tracking-wide">CROWNE PLAZA SAN JOSÉ LA SABANA HOTEL</span>
                </div>
                
            </div>
        </div>
        
    </section>

    <!-- Menú de Navegación -->
    <nav class="mx-4 mb-4 bg-white rounded-b-[2.5rem] shadow-lg">
        <div class="max-w-7xl mx-auto px-8 py-4">
            <ul class="flex flex-wrap justify-center gap-4 lg:gap-8">
                
                <li>
                    <a href="#expotour" class="block px-8 py-4 text-[#4A4E69] font-bold text-lg hover:bg-gray-100 rounded-lg transition-colors">
                        EXPOTUR 2026
                    </a>
                </li>
                
                <li>
                    <a href="#sellers" class="block px-8 py-4 text-[#4A4E69] font-bold text-lg hover:bg-gray-100 rounded-lg transition-colors">
                        SELLERS INFO
                    </a>
                </li>
                
                <!-- Activo -->
                <li>
                    <a href="#buyer" class="block px-8 py-4 bg-gradient-to-r from-[#FF8C42] to-[#FFA07A] text-white font-bold text-lg rounded-lg shadow-md">
                        BE A BUYER
                    </a>
                </li>
                
                <li>
                    <a href="#contact" class="block px-8 py-4 text-[#4A4E69] font-bold text-lg hover:bg-gray-100 rounded-lg transition-colors">
                        CONTACT US
                    </a>
                </li>
                
            </ul>
        </div>
    </nav>

    <!-- Slider de Imágenes -->
    <section class="mx-4">
        @livewire('image-slider')
    </section>

</div>
@endsection
