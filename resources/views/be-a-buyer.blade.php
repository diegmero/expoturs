@extends('layouts.app')

@section('content')
<!-- Página Be a Buyer -->
<div class="w-full min-h-screen">
    <!-- Header Global provisto por layouts.app -->

    <!-- Hero con Navegación Flotante -->
    @include('components.hero-navigation', [
        'heroImage' => 'https://res.cloudinary.com/dspoaxmvn/image/upload/v1762109289/header_Beabuyer_f1e3k9.webp',
        'heroTitle' => '',
        'heroSubtitle' => '',
        'showEventInfo' => false,
        'activeTab' => 'buyer'
    ])

    <!-- Sección Información General -->
    <section class="mt-16 mx-4 lg:mx-16">
        <div class="bg-white rounded-[2.5rem]  px-8 lg:px-16">
            <div class="max-w-7xl mx-auto">
                
                <!-- Header con título y botón -->
                <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center mb-12">
                    <h2 class="text-[#045e7c] text-4xl lg:text-5xl font-bold mb-6 lg:mb-0">
                        General Information
                    </h2>
                    <button class="bg-gradient-to-r from-[#E67E22] to-[#D35400] hover:from-[#D35400] hover:to-[#C0392B] text-white font-bold py-4 px-8 rounded-full text-lg transition-all shadow-lg">
                        <a href="https://registro.aplicacionesincontacto.com/#/formview/6900d0b36d269fab62e3c9d4" target="_blank">APPLICANT PROFILE</a>
                    </button>
                </div>
                
                <!-- Grid de Información Principal -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-0 mb-12 border-t-[3px] border-[#045e7c]">
                    
                    <!-- Columna Izquierda - Labels con degradado redondeado -->
                    <div class="lg:col-span-3 bg-gradient-to-b from-[#4EAAA8] via-[#045e7c] to-[#08254f] rounded-b-[6rem] p-8 text-white relative">
                        <!-- Event Dates -->
                        <div class="mb-6">
                            <p class="font-bold text-lg mb-1">Event Dates</p>
                        </div>
                        
                        <!-- Site -->
                        <div class="mb-6">
                            <p class="font-bold text-lg mb-1">Site</p>
                        </div>
                        
                        <!-- Edition -->
                        <div class="mb-6">
                            <p class="font-bold text-lg mb-1">Edition</p>
                        </div>
                        
                        <!-- First held -->
                        <div class="mb-6">
                            <p class="font-bold text-lg mb-1">First held</p>
                        </div>
                        
                        <!-- Frequency -->
                        <div class="mb-6">
                            <p class="font-bold text-lg mb-1">Frequency</p>
                        </div>
                        
                        <!-- Type of event -->
                        <div class="mb-6">
                            <p class="font-bold text-lg mb-1">Type of event</p>
                        </div>
                        
                        <!-- Character -->
                        <div class="mb-8">
                            <p class="font-bold text-lg mb-1">Character</p>
                        </div>
                        
                        <!-- Summary -->
                        <div>
                            <p class="font-bold text-lg mb-1">Summary</p>
                        </div>
                    </div>
                    
                    <!-- Columna Derecha - Valores -->
                    <div class="lg:col-span-9 bg-white p-8 space-y-6">
                        <!-- Event Dates -->
                        <div class="">
                            <p class="text-gray-700 text-lg">May 27 - 29, 2025</p>
                        </div>
                        
                        <div class="">
                            <p class="text-gray-700 text-lg">Crowne Plaza San José - La Sabana</p>
                        </div>
                        
                        <div class="">
                            <p class="text-gray-700 text-lg">39th</p>
                        </div>
                        
                        <div class="">
                            <p class="text-gray-700 text-lg">1985</p>
                        </div>
                        
                        <div class="">
                            <p class="text-gray-700 text-lg">Annual</p>
                        </div>
                        
                        <div class="">
                            <p class="text-gray-700 text-lg">B2B</p>
                        </div>
                        
                        <div class="">
                            <p class="text-gray-700 text-lg text-justify leading-relaxed">
                                The Costa Rica Tourism Travel Mart portrays national tourism attractions, products and services to a select group of international buyers with pre-arranged appointments between buyers and sellers.
                            </p>
                        </div>
                        
                        <div class="">
                            <p class="text-gray-700 text-lg text-justify leading-relaxed">
                                Twenty four (24) pre-arranged appointments of 20 minutes. Appointments are guaranteed in which priority is given to "perfect match" and buyers requests.
                            </p>
                        </div>
                    </div>
                    
                </div>
                
                <!-- What is Expotur? -->
                <div class="mb-12">
                    <h3 class="text-[#045e7c] text-3xl lg:text-4xl font-bold mb-6">
                        What is Expotur?
                    </h3>
                    <p class="text-gray-700 text-lg text-justify leading-relaxed mb-4">
                        It is the official commercialization event with the longest history of shows in Latin America. It has contributed to the development of tourism in Costa Rica.
                    </p>
                </div>
                
                <!-- Línea separadora -->
                <div class="w-full h-[3px] bg-[#045e7c] mb-8"></div>
                
                <!-- 2026 Edition -->
                <div class="mb-12">
                    <h3 class="text-[#045e7c] text-2xl lg:text-3xl font-bold mb-6">
                        2026 Edition
                    </h3>
                    <p class="text-gray-700 text-lg text-justify leading-relaxed mb-8">
                        <span class="font-semibold">"Where opportunities become business"</span> EXPOTUR 2026 presents a show focussed on the essence of business meetings, human interactions, and of nature. It is a program of highly effective dealings which will benefit all participants.
                    </p>
                </div>
                
                <!-- Línea separadora -->
                <div class="w-full h-[3px] bg-[#045e7c] mb-8"></div>
                
                <!-- Networking -->
                <div class="mb-12">
                    <h3 class="text-[#045e7c] text-3xl lg:text-4xl font-bold mb-6">
                        Networking
                    </h3>
                    <p class="text-gray-700 text-lg text-justify leading-relaxed mb-4">
                        <span class="font-semibold">Expotur 2026</span> offers great opportunities for <span class="font-semibold">networking</span>, whether you are new to this market or if you want to increase or renovate your business. Pre-arranged appointments aim a high return on investment. This is the only event suited for getting familiar with the best of Costa Rica's tourism offer.
                    </p>
                    <p class="text-gray-700 text-lg text-justify leading-relaxed mb-8">
                        <span class="font-semibold">Expotur</span> is the official travel mart, declared of public interest by Decree No.17563-MEIC on June 17, 1987. This year, comes with a renovated concept, going back to the essence of business, creating a match of selected companies of Costa Rica's traditional and emerging markets with qualified buyers with proven interest in Costa Rica.
                    </p>
                </div>
                
                <!-- Línea separadora -->
                <div class="w-full h-[3px] bg-[#045e7c] mb-8"></div>
                
                <!-- Who are the sellers? -->
                <div class="mb-12">
                    <h3 class="text-[#045e7c] text-3xl lg:text-4xl font-bold mb-6">
                        Who are the sellers?
                    </h3>
                    <p class="text-gray-700 text-lg text-justify leading-relaxed mb-8">
                        This edition will bring hoteliers, tour operators, DMCs, car rentals, thematic parks, adventure parks and other companies that complement the Costa Rica tourism product.
                    </p>
                </div>
                
                <!-- Barra Azul -->
                <div class="bg-[#08254f] py-8 px-8 mb-12 text-center shadow-lg">
                    <h3 class="text-white text-4xl lg:text-5xl font-bold">
                        ¡PURA VIDA...<span class="font-normal">PUROS NEGOCIOS!</span>
                    </h3>
                </div>
                
                <!-- Línea separadora -->
                <div class="w-full h-[3px] bg-[#045e7c] mb-8"></div>
                
                <!-- Participation categories -->
                <div class="mb-12">
                    <h3 class="text-[#045e7c] text-3xl lg:text-4xl font-bold mb-6">
                        Participation categories
                    </h3>
                    <p class="text-gray-700 text-lg text-justify leading-relaxed mb-4">
                        <span class="font-semibold">Expotur 2026</span> offers 3 categories of participation, each of which guarantees a detailed program of appointments.
                    </p>
                    <p class="text-gray-700 text-lg text-justify leading-relaxed mb-6">
                        It includes the participation of 2 delegates from the selling company, program of appointments, furniture, table signage, material and food for the delegates.
                    </p>
                    
                    <!-- Lista de categorías -->
                    <div class="space-y-2 mb-8">
                        <p class="text-gray-700 text-lg"><span class="font-semibold">1. Negotiating tables</span></p>
                        <p class="text-gray-700 text-lg"><span class="font-semibold">2. Hospitality suites</span></p>
                        <p class="text-gray-700 text-lg"><span class="font-semibold">3. Destinations</span></p>
                    </div>
                </div>
                
                <!-- Línea separadora -->
                <div class="w-full h-[3px] bg-[#045e7c] mb-8"></div>
                
                <!-- Hosted buyer longue & experiences 2026 -->
                <div class="mb-12">
                    <h3 class="text-[#045e7c] text-3xl lg:text-4xl font-bold mb-6">
                        Hosted buyer longue & experiences 2026
                    </h3>
                    <p class="text-gray-700 text-lg text-justify leading-relaxed mb-8">
                        In <span class="font-semibold">EXPOTUR 2026</span> you will enjoy entertainment functions as music, folk dancers, animal characters, and much more.
                    </p>
                </div>
                
                <!-- Línea separadora -->
                <div class="w-full h-[3px] bg-[#045e7c] mb-8"></div>
                
                <!-- For more information, contact -->
                <div class="mb-12">
                    <h3 class="text-[#045e7c] text-3xl lg:text-4xl font-bold mb-6">
                        For more information, contact:
                    </h3>
                    
                    <div class="space-y-2 mb-8">
                        <p class="text-gray-700 text-lg font-semibold">Mrs. Daniela Ruiz</p>
                        <p class="text-gray-700 text-lg">Hosted Buyer Coordinator</p>
                        <p class="text-gray-700 text-lg">Expotur Travel Mart</p>
                        <p class="text-gray-700 text-lg">buyers@expotur.com</p>
                    </div>
                    
                    <!-- Redes sociales y botón -->
                    <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center gap-6">
                        <!-- Redes sociales -->
                        <div class="flex items-center gap-4">
                            <a href="#" class="w-12 h-12 border-2 border-[#1877F2] rounded flex items-center justify-center bg-white hover:bg-[#1877F2] text-[#1877F2] hover:text-white transition-colors duration-200">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                </svg>
                            </a>
                            <a href="#" class="w-12 h-12 border-2 border-[#E4405F] rounded flex items-center justify-center bg-white hover:bg-gradient-to-br hover:from-[#833AB4] hover:via-[#E4405F] hover:to-[#FCAF45] text-[#E4405F] hover:text-white transition-all duration-200">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                                </svg>
                            </a>
                            <span class="text-[#045e7c] text-lg font-semibold">expoturcrc</span>
                        </div>
                        
                        <!-- Botón APPLICANT PROFILE -->
                        <button class="bg-gradient-to-r from-[#E67E22] to-[#D35400] hover:from-[#D35400] hover:to-[#C0392B] text-white font-bold py-4 px-12 rounded-full text-xl transition-all shadow-lg">
                            <a href="https://registro.aplicacionesincontacto.com/#/formview/6900d0b36d269fab62e3c9d4" target="_blank">APPLICANT PROFILE</a>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>

</div>
@endsection
