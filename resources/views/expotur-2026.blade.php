@extends('layouts.app')

@section('content')
<!-- Página ExpoTur 2026 -->
<div class="w-full min-h-screen">
    <!-- Header Global provisto por layouts.app -->

    <!-- Sección Hero: Costa Rica Travel Mart -->
    <section class="mx-4">
        <div class="relative h-[400px] lg:h-[500px] rounded-b-[2.5rem] overflow-hidden shadow-lg">
            
            <!-- Imagen de Fondo -->
            <img src="https://res.cloudinary.com/dspoaxmvn/image/upload/v1761612387/header_Beabuyer_gzh5xg.webp" 
                 alt="Costa Rica Travel Mart" 
                 class="absolute inset-0 w-full h-full object-cover">
            
        </div>
    </section>

    <!-- Sección General Information -->
    <section class="mt-16 mb-16">
        <div class="bg-white px-8 lg:px-16 py-12">
            <div class="max-w-7xl mx-auto">
                
                <!-- Título Principal -->
                <h2 class="text-[#0B7A8F] text-4xl lg:text-5xl font-bold mb-8">
                    General Information
                </h2>
                <div class="w-full h-[2px] bg-gradient-to-r from-[#0B7A8F] to-transparent mb-12"></div>
                
                <!-- Grid de Información -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 mb-12">
                    
                    <!-- Columna Izquierda - Labels -->
                    <div class="lg:col-span-3 bg-gradient-to-br from-[#0B7A8F] to-[#1A4D5C] rounded-3xl p-8 text-white space-y-6">
                        <div>
                            <p class="font-bold text-lg">Event Dates:</p>
                        </div>
                        <div>
                            <p class="font-bold text-lg">Site</p>
                        </div>
                        <div>
                            <p class="font-bold text-lg">Edition</p>
                        </div>
                        <div>
                            <p class="font-bold text-lg">First held</p>
                        </div>
                        <div>
                            <p class="font-bold text-lg">Frequency</p>
                        </div>
                        <div>
                            <p class="font-bold text-lg">Type of event</p>
                        </div>
                        <div>
                            <p class="font-bold text-lg">Character</p>
                        </div>
                    </div>
                    
                    <!-- Columna Derecha - Valores -->
                    <div class="lg:col-span-9 space-y-6 text-gray-700">
                        <div>
                            <p class="text-lg">May 7 - 10, 2025</p>
                        </div>
                        <div>
                            <p class="text-lg">Crowne Plaza San José - La Sabana</p>
                        </div>
                        <div>
                            <p class="text-lg">38th</p>
                        </div>
                        <div>
                            <p class="text-lg">1985</p>
                        </div>
                        <div>
                            <p class="text-lg">Annual</p>
                        </div>
                        <div>
                            <p class="text-lg">B2B</p>
                        </div>
                        <div>
                            <p class="text-lg text-justify">
                                The Costa Rica Tourism Travel Mart portrays national tourism attractions, products and services to a select group of international buyers with pre-arranged appointments between buyers and sellers.
                            </p>
                            <p class="text-lg text-justify mt-4">
                                Twenty four (24) pre-arranged appointments of 20 minutes. Appointments are guaranteed in which priority is given to "perfect match" and buyers requests.
                            </p>
                        </div>
                    </div>
                    
                </div>
                
                <!-- What is Expotur? -->
                <div class="mb-12">
                    <h3 class="text-[#0B7A8F] text-3xl lg:text-4xl font-bold mb-6">
                        What is Expotur?
                    </h3>
                    <p class="text-gray-700 text-lg text-justify leading-relaxed">
                        It is the official commercialization event with the longest history of shows in Latin America. It has contributed to the development of tourism in Costa Rica.
                    </p>
                </div>
                
                <div class="w-full h-[1px] bg-gradient-to-r from-[#0B7A8F] to-transparent mb-8"></div>
                
                <!-- 2026 Edition -->
                <div>
                    <h3 class="text-[#4A5C8A] text-2xl lg:text-3xl font-bold mb-6">
                        2026 Edition
                    </h3>
                    <p class="text-gray-700 text-lg text-justify leading-relaxed mb-4">
                        <span class="font-semibold">"Where opportunities become business"</span> EXPOTUR 2025 presents a renovated show focussed on the essence of business meetings, human interactions, and of nature. It is a program of highly effective dealings which will benefit all participants.
                    </p>
                </div>
                
            </div>
        </div>
    </section>

</div>
@endsection
