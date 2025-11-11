@extends('layouts.app')

@section('content')
<!-- Página Sellers Info -->
<div class="w-full min-h-screen">
    <!-- Header Global provisto por layouts.app -->

    <!-- Hero con Navegación Flotante -->
    @include('components.hero-navigation', [
        'heroImage' => 'https://res.cloudinary.com/dspoaxmvn/image/upload/v1762109289/header_SellersInfo_wumuaj.webp',
        'heroTitle' => '',
        'heroSubtitle' => '',
        'showEventInfo' => false,
        'activeTab' => 'sellers'
    ])

    <!-- Sección Información General -->
    <section class="mt-16 mx-4 lg:mx-16">
        <div class="bg-white rounded-[2.5rem] px-8 lg:px-16">
            <div class="max-w-7xl mx-auto">
                
                <!-- Header con título y botón -->
                <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center mb-12">
                    <h2 class="text-[#045e7c] text-4xl lg:text-5xl font-bold mb-6 lg:mb-0">
                        {{ __('messages.sellers.title') }}
                    </h2>
                    <button class="bg-gradient-to-r from-[#E67E22] to-[#D35400] hover:from-[#D35400] hover:to-[#C0392B] text-white font-bold py-4 px-8 rounded-full text-lg transition-all shadow-lg">
                        <a href="https://registro.aplicacionesincontacto.com/#/formview/68ff964010f8f1627c1c30f4" target="_blank">{{ __('messages.common.reservation_form') }}</a>
                    </button>
                </div>
                
                <!-- Grid de Información Principal -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-0 mb-12 border-t-[3px] border-[#045e7c]">
                    
                    <!-- Columna Izquierda - Labels con degradado redondeado -->
                    <div class="lg:col-span-3 bg-gradient-to-b from-[#4EAAA8] via-[#045e7c] to-[#08254f] rounded-b-[6rem] p-8 text-white relative">
                        <!-- Fecha -->
                        <div class="mb-6">
                            <p class="font-bold text-lg mb-1">{{ __('messages.sellers.date_label') }}</p>
                        </div>
                        
                        <!-- Sede -->
                        <div class="mb-6">
                            <p class="font-bold text-lg mb-1">{{ __('messages.sellers.venue_label') }}</p>
                        </div>
                        
                        <!-- Edición -->
                        <div class="mb-6">
                            <p class="font-bold text-lg mb-1">{{ __('messages.sellers.edition_label') }}</p>
                        </div>
                        
                        <!-- Inicio -->
                        <div class="mb-6">
                            <p class="font-bold text-lg mb-1">{{ __('messages.sellers.start_label') }}</p>
                        </div>
                        
                        <!-- Frecuencia -->
                        <div class="mb-6">
                            <p class="font-bold text-lg mb-1">{{ __('messages.sellers.frequency_label') }}</p>
                        </div>
                        
                        <!-- Enfoque -->
                        <div class="mb-6">
                            <p class="font-bold text-lg mb-1">{{ __('messages.sellers.focus_label') }}</p>
                        </div>
                        
                        <!-- Carácter -->
                        <div class="mb-8">
                            <p class="font-bold text-lg mb-1">{{ __('messages.sellers.character_label') }}</p>
                        </div>
                        
                        <!-- Resumen -->
                        <div>
                            <p class="font-bold text-lg mb-1">{{ __('messages.sellers.summary_label') }}</p>
                        </div>
                    </div>
                    
                    <!-- Columna Derecha - Valores -->
                    <div class="lg:col-span-9 bg-white p-8 space-y-6">
                        <!-- Línea superior -->
                        <div class="">
                            <p class="text-gray-700 text-lg">{{ __('messages.sellers.date_value') }}</p>
                        </div>
                        
                        <div class="">
                            <p class="text-gray-700 text-lg">{{ __('messages.sellers.venue_value') }}</p>
                        </div>
                        
                        <div class="">
                            <p class="text-gray-700 text-lg">{{ __('messages.sellers.edition_value') }}</p>
                        </div>
                        
                        <div class="">
                            <p class="text-gray-700 text-lg">{{ __('messages.sellers.start_value') }}</p>
                        </div>
                        
                        <div class="">
                            <p class="text-gray-700 text-lg">{{ __('messages.sellers.frequency_value') }}</p>
                        </div>
                        
                        <div class="">
                            <p class="text-gray-700 text-lg">{{ __('messages.sellers.focus_value') }}</p>
                        </div>
                        
                        <div class="">
                            <p class="text-gray-700 text-lg text-justify leading-relaxed">
                                {{ __('messages.sellers.character_value') }}
                            </p>
                        </div>
                        
                        <div class="">
                            <p class="text-gray-700 text-lg text-justify leading-relaxed">
                                {{ __('messages.sellers.summary_value') }}
                            </p>
                        </div>
                    </div>
                    
                </div>
                
                <!-- ¿Qué es Expotur? -->
                <div class="mb-12">
                    <h3 class="text-[#045e7c] text-3xl lg:text-4xl font-bold mb-6">
                        {{ __('messages.sellers.what_is_expotur') }}
                    </h3>
                    <p class="text-gray-700 text-lg text-justify leading-relaxed mb-4">
                        {!! __('messages.sellers.what_is_expotur_text') !!}
                    </p>
                </div>
                
                <!-- Línea separadora -->
                <div class="w-full h-[3px] bg-[#045e7c] mb-8"></div>
                
                <!-- Edición 2026 -->
                <div class="mb-12">
                    <h3 class="text-[#045e7c] text-2xl lg:text-3xl font-bold mb-6">
                        {{ __('messages.sellers.edition_2026') }}
                    </h3>
                    <p class="text-gray-700 text-lg text-justify leading-relaxed mb-8">
                        {!! __('messages.sellers.edition_2026_text') !!}
                    </p>
                </div>

                <!-- Barra Azul Final -->
                <div class="bg-[#08254f] rounded-2xl py-8 px-8 mb-12 text-center shadow-lg">
                    <h3 class="text-white text-4xl lg:text-5xl font-bold">
                        {{ __('messages.sellers.slogan') }}
                    </h3>
                </div>
                
                <!-- ¿Quiénes exponen? -->
                <div class="mb-12">
                    <h3 class="text-[#045e7c] text-3xl lg:text-4xl font-bold mb-6">
                        {{ __('messages.sellers.who_exhibits') }}
                    </h3>
                    <p class="text-gray-700 text-lg text-justify leading-relaxed mb-8">
                        {{ __('messages.sellers.who_exhibits_text') }}
                    </p>
                </div>
                
                <!-- Línea separadora -->
                <div class="w-full h-[3px] bg-[#045e7c] mb-8"></div>
                
                <!-- Networking -->
                <div class="mb-12">
                    <h3 class="text-[#045e7c] text-3xl lg:text-4xl font-bold mb-6">
                        {{ __('messages.sellers.networking') }}
                    </h3>
                    <p class="text-gray-700 text-lg text-justify leading-relaxed mb-8">
                        {!! __('messages.sellers.networking_text') !!}
                    </p>
                </div>
                
                <!-- Línea separadora -->
                <div class="w-full h-[3px] bg-[#045e7c] mb-8"></div>
                <!-- Trayectoria - Innovación - Comercialización -->
                <div class="mb-12">
                    <h3 class="text-[#045e7c] text-2xl lg:text-3xl font-bold mb-6">
                        {{ __('messages.sellers.trajectory_title') }}
                    </h3>
                    <p class="text-gray-700 text-lg text-justify leading-relaxed mb-8">
                        {!! __('messages.sellers.trajectory_text') !!}
                    </p>
                </div>
                
                <!-- Categorías de participación -->
                <div class="mb-16">
                    <h3 class="text-[#045e7c] text-3xl lg:text-4xl font-bold mb-6">
                        {{ __('messages.sellers.participation_categories') }}
                    </h3>
                    <p class="text-gray-700 text-lg mb-12">
                        {!! __('messages.sellers.participation_intro') !!}
                    </p>
                    
                    <!-- Grid de Tarjetas de Precios -->
                    <div class="flex flex-col lg:flex-row justify-center gap-8 mb-8">
                        
                        <!-- Tarjeta 1: Tarifas de pronto pago -->
                        <div class="bg-gradient-to-b from-[#08254f] to-[#0baabf] rounded-3xl p-3 shadow-lg w-full max-w-sm">
                            <div class="bg-white rounded-3xl h-full pb-6">
                                <!-- Header de la tarjeta -->
                                <div class="bg-[#08254f] text-white text-center py-4 px-6 mb-6">
                                    <h4 class="font-bold text-lg">{{ __('messages.sellers.early_bird_rates') }}</h4>
                                    <p class="text-sm">{{ __('messages.sellers.early_bird_until') }}</p>
                                </div>
                                
                                <!-- Mesa de negociación -->
                                <div class="text-center mb-6 pb-6 border-b border-gray-200">
                                    <h5 class="font-bold text-lg text-gray-800 mb-2">{{ __('messages.sellers.negotiation_table') }}</h5>
                                    <p class="text-2xl font-bold text-gray-700">{{ __('messages.sellers.price_1700') }}</p>
                                    <p class="text-gray-600">{{ __('messages.sellers.price_1700_text') }}</p>
                                </div>
                                
                                <!-- Hospitality suite -->
                                <div class="text-center mb-6 pb-6 border-b border-gray-200">
                                    <h5 class="font-bold text-lg text-gray-800 mb-2">{{ __('messages.sellers.hospitality_suite') }}</h5>
                                    <p class="text-2xl font-bold text-gray-700">{{ __('messages.sellers.price_4000') }}</p>
                                    <p class="text-gray-600">{{ __('messages.sellers.price_4000_text') }}</p>
                                </div>
                                
                                <!-- Cámaras y asociaciones -->
                                <div class="text-center">
                                    <h5 class="font-bold text-lg text-gray-800 mb-2">{{ __('messages.sellers.chambers_associations') }}</h5>
                                    <p class="text-2xl font-bold text-gray-700">{{ __('messages.sellers.price_500') }}</p>
                                    <p class="text-gray-600">{{ __('messages.sellers.price_500_text') }}</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Tarjeta 2: Tarifas a partir del 01 de enero 2025 -->
                        <div class="bg-gradient-to-b from-[#08254f] to-[#0baabf] rounded-3xl p-3 shadow-lg w-full max-w-sm">
                            <div class="bg-white rounded-3xl h-full">
                                <!-- Header de la tarjeta -->
                                <div class="bg-[#08254f] text-white text-center py-4 px-6 mb-6">
                                    <h4 class="font-bold text-lg">{{ __('messages.sellers.rates_from') }}</h4>
                                    <p class="text-sm">{{ __('messages.sellers.rates_from_date') }}</p>
                                </div>
                                
                                <!-- Mesa de negociación -->
                                <div class="text-center mb-6 pb-6 border-b border-gray-200">
                                    <h5 class="font-bold text-lg text-gray-800 mb-2">{{ __('messages.sellers.negotiation_table') }}</h5>
                                    <p class="text-2xl font-bold text-gray-700">{{ __('messages.sellers.price_1900') }}</p>
                                    <p class="text-gray-600">{{ __('messages.sellers.price_1900_text') }}</p>
                                </div>
                                
                                <!-- Hospitality suite -->
                                <div class="text-center mb-6 pb-6 border-b border-gray-200">
                                    <h5 class="font-bold text-lg text-gray-800 mb-2">{{ __('messages.sellers.hospitality_suite') }}</h5>
                                    <p class="text-2xl font-bold text-gray-700">{{ __('messages.sellers.price_4500') }}</p>
                                    <p class="text-gray-600">{{ __('messages.sellers.price_4500_text') }}</p>
                                </div>
                                
                                <!-- Cámaras y asociaciones -->
                                <div class="text-center">
                                    <h5 class="font-bold text-lg text-gray-800 mb-2">{{ __('messages.sellers.chambers_associations') }}</h5>
                                    <p class="text-2xl font-bold text-gray-700">{{ __('messages.sellers.price_500') }}</p>
                                    <p class="text-gray-600">{{ __('messages.sellers.price_500_text') }}</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                    <!-- Nota al pie -->
                    <p class="text-center text-gray-600 text-sm mb-8">
                        {{ __('messages.sellers.confirmation_note') }}
                    </p>
                    
                    <!-- Barra azul final de sección -->
                    <div class="bg-[#08254f] py-6 px-8 text-center mb-12">
                        <h4 class="text-white text-2xl lg:text-3xl font-bold">
                            {{ __('messages.sellers.distribution_plans') }}
                        </h4>
                    </div>
                </div>
                
                <!-- Mapa de Hospitality Suites -->
                <div class="mb-16">
                    @livewire('hospitality-suites-map')
                </div>
                
                <!-- Mapa de Mesas de Negociación -->
                <div class="mb-16">
                    @livewire('negotiation-tables-map')
                </div>
                
                <!-- Mapa de Destinos & Cámaras de Turismo -->
                <div class="mb-16">
                    @livewire('tourism-destinations-map')
                </div>
                
                <!-- Características de los espacios -->
                <div class="">
                    <div class="max-w-5xl mx-auto">
                        <!-- Línea superior -->
                        <div class="border-t-2 border-[#045e7c] mb-8"></div>
                        
                        <!-- Título -->
                        <h3 class="text-[#045e7c] text-2xl font-bold mb-8">
                            {{ __('messages.sellers.space_characteristics') }}
                        </h3>
                        
                        <!-- Tabla de características -->
                        <div class="space-y-6">
                            
                            <!-- Mesa de negociación -->
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 pb-6 border-b border-gray-300">
                                <div class="md:col-span-1">
                                    <h4 class="text-gray-700 font-semibold text-lg">{{ __('messages.sellers.negotiation_table') }}</h4>
                                </div>
                                <div class="md:col-span-2">
                                    <p class="text-gray-700 text-base leading-relaxed text-justify">
                                        {{ __('messages.sellers.negotiation_table_desc') }}
                                    </p>
                                </div>
                            </div>
                            
                            <!-- Hospitality Suite -->
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 pb-6 border-b border-gray-300">
                                <div class="md:col-span-1">
                                    <h4 class="text-gray-700 font-semibold text-lg">{{ __('messages.sellers.hospitality_suite') }}</h4>
                                </div>
                                <div class="md:col-span-2">
                                    <p class="text-gray-700 text-base leading-relaxed text-justify">
                                        {{ __('messages.sellers.hospitality_suite_desc') }}
                                    </p>
                                </div>
                            </div>
                            
                            <!-- Cámaras y asociaciones sectoriales -->
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4 pb-6">
                                <div class="md:col-span-1">
                                    <h4 class="text-gray-700 font-semibold text-lg">{{ __('messages.sellers.chambers_associations') }}</h4>
                                </div>
                                <div class="md:col-span-2">
                                    <p class="text-gray-700 text-base leading-relaxed text-justify">
                                        {{ __('messages.sellers.chambers_desc') }}
                                    </p>
                                </div>
                            </div>
                            
                        </div>
                        
                        <!-- Botón de reservación -->
                        <div class="flex justify-center mt-12">
                            <button class="bg-gradient-to-r from-[#E67E22] to-[#D35400] hover:from-[#D35400] hover:to-[#C0392B] text-white font-bold py-4 px-8 rounded-full text-lg transition-all shadow-lg">
                        <a href="https://registro.aplicacionesincontacto.com/#/formview/68ff964010f8f1627c1c30f4" target="_blank">{{ __('messages.common.reservation_form') }}</a>
                    </button>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

</div>
@endsection
