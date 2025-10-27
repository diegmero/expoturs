@extends('layouts.app')

@section('content')
<!-- Página ExpoTur 2026 -->
<div class="w-full min-h-screen">
    <!-- Header Global provisto por layouts.app -->

    <!-- Sección Hero: Costa Rica Travel Mart -->
    <section class="mx-4">
        <div class="relative rounded-b-[2.5rem] overflow-hidden shadow-lg">
            
            <!-- Imagen de Fondo con Texto -->
            <div class="relative h-[400px] lg:h-[500px]">
                
                <!-- Overlay Oscuro -->
                <div class="absolute inset-0 bg-black bg-opacity-30 z-10"></div>
                
                <!-- Texto Centrado -->
                <div class="absolute inset-0 z-20 flex items-center justify-center">
                    <h1 class="text-white font-extrabold text-5xl lg:text-7xl tracking-wider text-center px-4">
                        COSTA RICA TRAVEL MART
                    </h1>
                </div>
                
            </div>
            
        </div>
    </section>

    <!-- Contenido de la Página -->
    <section class="mx-4 mt-8">
        <div class="bg-white rounded-[2.5rem] shadow-lg overflow-hidden">
            
            <div class="px-8 lg:px-16 py-16">
                <div class="max-w-7xl mx-auto">
                    
                    <!-- Aquí irá el contenido adicional de ExpoTur 2026 -->
                    <div class="text-center">
                        <h2 class="text-4xl lg:text-5xl font-bold text-[#4A4E69] mb-8">
                            EXPOTUR 2026
                        </h2>
                        
                        <p class="text-lg text-gray-700 mb-6">
                            Contenido de la página ExpoTur 2026
                        </p>
                    </div>
                    
                </div>
            </div>
            
        </div>
    </section>

</div>
@endsection
