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
                        {{ __('messages.buyer.title') }}
                    </h2>
                    <button class="bg-gradient-to-r from-[#E67E22] to-[#D35400] hover:from-[#D35400] hover:to-[#C0392B] text-white font-bold py-4 px-8 rounded-full text-lg transition-all shadow-lg">
                        <a href="https://registro.aplicacionesincontacto.com/#/formview/6900d0b36d269fab62e3c9d4" target="_blank">{{ __('messages.common.applicant_profile') }}</a>
                    </button>
                </div>
                
                <!-- Grid de Información Principal -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-0 mb-12 border-t-[3px] border-[#045e7c]">
                    
                    <!-- Columna Izquierda - Labels con degradado redondeado -->
                    <div class="lg:col-span-3 bg-gradient-to-b from-[#4EAAA8] via-[#045e7c] to-[#08254f] rounded-b-[6rem] p-8 text-white relative">
                        <!-- Event Dates -->
                        <div class="mb-6">
                            <p class="font-bold text-lg mb-1">{{ __('messages.buyer.event_dates_label') }}</p>
                        </div>
                        
                        <!-- Site -->
                        <div class="mb-6">
                            <p class="font-bold text-lg mb-1">{{ __('messages.buyer.site_label') }}</p>
                        </div>
                        
                        <!-- Edition -->
                        <div class="mb-6">
                            <p class="font-bold text-lg mb-1">{{ __('messages.buyer.edition_label') }}</p>
                        </div>
                        
                        <!-- First held -->
                        <div class="mb-6">
                            <p class="font-bold text-lg mb-1">{{ __('messages.buyer.first_held_label') }}</p>
                        </div>
                        
                        <!-- Frequency -->
                        <div class="mb-6">
                            <p class="font-bold text-lg mb-1">{{ __('messages.buyer.frequency_label') }}</p>
                        </div>
                        
                        <!-- Type of event -->
                        <div class="mb-6">
                            <p class="font-bold text-lg mb-1">{{ __('messages.buyer.type_label') }}</p>
                        </div>
                        
                        <!-- Character -->
                        <div class="mb-8">
                            <p class="font-bold text-lg mb-1">{{ __('messages.buyer.character_label') }}</p>
                        </div>
                        
                        <!-- Summary -->
                        <div>
                            <p class="font-bold text-lg mb-1">{{ __('messages.buyer.summary_label') }}</p>
                        </div>
                    </div>
                    
                    <!-- Columna Derecha - Valores -->
                    <div class="lg:col-span-9 bg-white p-8 space-y-6">
                        <!-- Event Dates -->
                        <div class="">
                            <p class="text-gray-700 text-lg">{{ __('messages.buyer.event_dates_value') }}</p>
                        </div>
                        
                        <div class="">
                            <p class="text-gray-700 text-lg">{{ __('messages.buyer.site_value') }}</p>
                        </div>
                        
                        <div class="">
                            <p class="text-gray-700 text-lg">{{ __('messages.buyer.edition_value') }}</p>
                        </div>
                        
                        <div class="">
                            <p class="text-gray-700 text-lg">{{ __('messages.buyer.first_held_value') }}</p>
                        </div>
                        
                        <div class="">
                            <p class="text-gray-700 text-lg">{{ __('messages.buyer.frequency_value') }}</p>
                        </div>
                        
                        <div class="">
                            <p class="text-gray-700 text-lg">{{ __('messages.buyer.type_value') }}</p>
                        </div>
                        
                        <div class="">
                            <p class="text-gray-700 text-lg text-justify leading-relaxed">
                                {{ __('messages.buyer.character_value') }}
                            </p>
                        </div>
                        
                        <div class="">
                            <p class="text-gray-700 text-lg text-justify leading-relaxed">
                                {{ __('messages.buyer.summary_value') }}
                            </p>
                        </div>
                    </div>
                    
                </div>
                
                <!-- What is Expotur? -->
                <div class="mb-12">
                    <h3 class="text-[#045e7c] text-3xl lg:text-4xl font-bold mb-6">
                        {{ __('messages.buyer.what_is_expotur') }}
                    </h3>
                    <p class="text-gray-700 text-lg text-justify leading-relaxed mb-4">
                        {{ __('messages.buyer.what_is_expotur_text') }}
                    </p>
                </div>
                
                <!-- Línea separadora -->
                <div class="w-full h-[3px] bg-[#045e7c] mb-8"></div>
                
                <!-- 2026 Edition -->
                <div class="mb-12">
                    <h3 class="text-[#045e7c] text-2xl lg:text-3xl font-bold mb-6">
                        {{ __('messages.buyer.edition_2026') }}
                    </h3>
                    <p class="text-gray-700 text-lg text-justify leading-relaxed mb-8">
                        {!! __('messages.buyer.edition_2026_text') !!}
                    </p>
                </div>
                
                <!-- Línea separadora -->
                <div class="w-full h-[3px] bg-[#045e7c] mb-8"></div>
                
                <!-- Networking -->
                <div class="mb-12">
                    <h3 class="text-[#045e7c] text-3xl lg:text-4xl font-bold mb-6">
                        {{ __('messages.buyer.networking') }}
                    </h3>
                    <p class="text-gray-700 text-lg text-justify leading-relaxed mb-4">
                        {!! __('messages.buyer.networking_text_1') !!}
                    </p>
                    <p class="text-gray-700 text-lg text-justify leading-relaxed mb-8">
                        {!! __('messages.buyer.networking_text_2') !!}
                    </p>
                </div>
                
                <!-- Línea separadora -->
                <div class="w-full h-[3px] bg-[#045e7c] mb-8"></div>
                
                <!-- Who are the sellers? -->
                <div class="mb-12">
                    <h3 class="text-[#045e7c] text-3xl lg:text-4xl font-bold mb-6">
                        {{ __('messages.buyer.who_are_sellers') }}
                    </h3>
                    <p class="text-gray-700 text-lg text-justify leading-relaxed mb-8">
                        {{ __('messages.buyer.who_are_sellers_text') }}
                    </p>
                </div>
                
                <!-- Barra Azul -->
                <div class="bg-[#08254f] py-8 px-8 mb-12 text-center shadow-lg">
                    <h3 class="text-white text-4xl lg:text-5xl font-bold">
                        {!! __('messages.buyer.slogan') !!}
                    </h3>
                </div>
                
                <!-- Línea separadora -->
                <div class="w-full h-[3px] bg-[#045e7c] mb-8"></div>
                
                <!-- Participation categories -->
                <div class="mb-12">
                    <h3 class="text-[#045e7c] text-3xl lg:text-4xl font-bold mb-6">
                        {{ __('messages.buyer.participation_categories') }}
                    </h3>
                    <p class="text-gray-700 text-lg text-justify leading-relaxed mb-4">
                        {!! __('messages.buyer.participation_intro_1') !!}
                    </p>
                    <p class="text-gray-700 text-lg text-justify leading-relaxed mb-6">
                        {{ __('messages.buyer.participation_intro_2') }}
                    </p>
                    
                    <!-- Lista de categorías -->
                    <div class="space-y-2 mb-8">
                        <p class="text-gray-700 text-lg">{!! __('messages.buyer.category_1') !!}</p>
                        <p class="text-gray-700 text-lg">{!! __('messages.buyer.category_2') !!}</p>
                        <p class="text-gray-700 text-lg">{!! __('messages.buyer.category_3') !!}</p>
                    </div>
                </div>
                
                <!-- Línea separadora -->
                <div class="w-full h-[3px] bg-[#045e7c] mb-8"></div>
                
                <!-- Hosted buyer longue & experiences 2026 -->
                <div class="mb-12">
                    <h3 class="text-[#045e7c] text-3xl lg:text-4xl font-bold mb-6">
                        {{ __('messages.buyer.hosted_buyer_title') }}
                    </h3>
                    <p class="text-gray-700 text-lg text-justify leading-relaxed mb-8">
                        {!! __('messages.buyer.hosted_buyer_text') !!}
                    </p>
                </div>
                
                <!-- Línea separadora -->
                <div class="w-full h-[3px] bg-[#045e7c] mb-8"></div>
                
                <!-- For more information, contact -->
                <div class="mb-12">
                    <h3 class="text-[#045e7c] text-3xl lg:text-4xl font-bold mb-6">
                        {{ __('messages.buyer.contact_title') }}
                    </h3>
                    
                    <div class="space-y-2 mb-8">
                        <p class="text-gray-700 text-lg font-semibold">{{ __('messages.buyer.contact_name') }}</p>
                        <p class="text-gray-700 text-lg">{{ __('messages.buyer.contact_position') }}</p>
                        <p class="text-gray-700 text-lg">{{ __('messages.buyer.contact_company') }}</p>
                        <p class="text-gray-700 text-lg">{{ __('messages.buyer.contact_email') }}</p>
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
                            <span class="text-[#045e7c] text-lg font-semibold">{{ __('messages.buyer.social_handle') }}</span>
                        </div>
                        
                        <!-- Botón APPLICANT PROFILE -->
                        <button class="bg-gradient-to-r from-[#E67E22] to-[#D35400] hover:from-[#D35400] hover:to-[#C0392B] text-white font-bold py-4 px-12 rounded-full text-xl transition-all shadow-lg">
                            <a href="https://registro.aplicacionesincontacto.com/#/formview/6900d0b36d269fab62e3c9d4" target="_blank">{{ __('messages.common.applicant_profile') }}</a>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>

</div>
@endsection
