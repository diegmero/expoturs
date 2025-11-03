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
                        Información General
                    </h2>
                    <button class="bg-gradient-to-r from-[#E67E22] to-[#D35400] hover:from-[#D35400] hover:to-[#C0392B] text-white font-bold py-4 px-8 rounded-full text-lg transition-all shadow-lg">
                        RESERVATION FORM
                    </button>
                </div>
                
                <!-- Grid de Información Principal -->
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-0 mb-12 border-t-[3px] border-[#045e7c]">
                    
                    <!-- Columna Izquierda - Labels con degradado redondeado -->
                    <div class="lg:col-span-3 bg-gradient-to-b from-[#4EAAA8] via-[#045e7c] to-[#08254f] rounded-b-[6rem] p-8 text-white relative">
                        <!-- Fecha -->
                        <div class="mb-6">
                            <p class="font-bold text-lg mb-1">Fecha</p>
                        </div>
                        
                        <!-- Sede -->
                        <div class="mb-6">
                            <p class="font-bold text-lg mb-1">Sede</p>
                        </div>
                        
                        <!-- Edición -->
                        <div class="mb-6">
                            <p class="font-bold text-lg mb-1">Edición</p>
                        </div>
                        
                        <!-- Inicio -->
                        <div class="mb-6">
                            <p class="font-bold text-lg mb-1">Inicio</p>
                        </div>
                        
                        <!-- Frecuencia -->
                        <div class="mb-6">
                            <p class="font-bold text-lg mb-1">Frecuencia</p>
                        </div>
                        
                        <!-- Enfoque -->
                        <div class="mb-6">
                            <p class="font-bold text-lg mb-1">Enfoque</p>
                        </div>
                        
                        <!-- Carácter -->
                        <div class="mb-8">
                            <p class="font-bold text-lg mb-1">Carácter</p>
                        </div>
                        
                        <!-- Resumen -->
                        <div>
                            <p class="font-bold text-lg mb-1">Resumen</p>
                        </div>
                    </div>
                    
                    <!-- Columna Derecha - Valores -->
                    <div class="lg:col-span-9 bg-white p-8 space-y-6">
                        <!-- Línea superior -->
                        <div class="">
                            <p class="text-gray-700 text-lg">27-29 de mayo, 2026</p>
                        </div>
                        
                        <div class="">
                            <p class="text-gray-700 text-lg">Hotel Crowne Plaza San José - La Sabana</p>
                        </div>
                        
                        <div class="">
                            <p class="text-gray-700 text-lg">39</p>
                        </div>
                        
                        <div class="">
                            <p class="text-gray-700 text-lg">1985</p>
                        </div>
                        
                        <div class="">
                            <p class="text-gray-700 text-lg">Anual</p>
                        </div>
                        
                        <div class="">
                            <p class="text-gray-700 text-lg">B2B</p>
                        </div>
                        
                        <div class="">
                            <p class="text-gray-700 text-lg text-justify leading-relaxed">
                                Bolsa de Comercialización Turística de Costa Rica que muestra el producto turístico nacional a un selecto grupo de compradores internacionales invitados.
                            </p>
                        </div>
                        
                        <div class="">
                            <p class="text-gray-700 text-lg text-justify leading-relaxed">
                                Citas pre establecidas entre compradores y vendedores. La participación garantiza 24 citas pre establecidas de 20 minutos, priorizando el Perfect Match y Buyer Request.
                            </p>
                        </div>
                    </div>
                    
                </div>
                
                <!-- ¿Qué es Expotur? -->
                <div class="mb-12">
                    <h3 class="text-[#045e7c] text-3xl lg:text-4xl font-bold mb-6">
                        ¿Qué es Expotur?
                    </h3>
                    <p class="text-gray-700 text-lg text-justify leading-relaxed mb-4">
                        <span class="font-semibold">Expotur,</span> es el evento oficial comercialización turística de mayor trayectoria del país y el más antiguo de la región latinoamericana. Se realiza de forma anual desde 1985 y a lo largo de estas décadas ha generado un invaluable aporte al desarrollo turístico de Costa Rica.
                    </p>
                </div>
                
                <!-- Línea separadora -->
                <div class="w-full h-[3px] bg-[#045e7c] mb-8"></div>
                
                <!-- Edición 2026 -->
                <div class="mb-12">
                    <h3 class="text-[#045e7c] text-2xl lg:text-3xl font-bold mb-6">
                        Edición 2026
                    </h3>
                    <p class="text-gray-700 text-lg text-justify leading-relaxed mb-8">
                        <span class="font-semibold">"Where opportunities become business"</span> Expotur 2026 representa una edición enfocada en la esencia del negocio y en garantizar un programa de citas altamente efectivo, que se traducirá en negocios concretos para las empresas vendedoras participantes.
                    </p>
                </div>

                <!-- Barra Azul Final -->
                <div class="bg-[#08254f] rounded-2xl py-8 px-8 mb-12 text-center shadow-lg">
                    <h3 class="text-white text-4xl lg:text-5xl font-bold">
                        ¡PURA VIDA...PUROS NEGOCIOS!
                    </h3>
                </div>
                
                <!-- ¿Quiénes exponen? -->
                <div class="mb-12">
                    <h3 class="text-[#045e7c] text-3xl lg:text-4xl font-bold mb-6">
                        ¿Quiénes exponen?
                    </h3>
                    <p class="text-gray-700 text-lg text-justify leading-relaxed mb-8">
                        Hoteleros, Tour Operadores, DMCs, Autorrentistas, Parques temáticos y de aventura, y otras empresas relacionadas directamente con el producto turístico nacional.
                    </p>
                </div>
                
                <!-- Línea separadora -->
                <div class="w-full h-[3px] bg-[#045e7c] mb-8"></div>
                
                <!-- Networking -->
                <div class="mb-12">
                    <h3 class="text-[#045e7c] text-3xl lg:text-4xl font-bold mb-6">
                        Networking
                    </h3>
                    <p class="text-gray-700 text-lg text-justify leading-relaxed mb-8">
                        El enfoque renovado de <span class="font-semibold">Expotur 2026,</span> asegura a las empresas participantes, altas oportunidades de Networking y un programa de citas pre establecidas garantizando un amplio retorno a la inversión.
                    </p>
                </div>
                
                <!-- Línea separadora -->
                <div class="w-full h-[3px] bg-[#045e7c] mb-8"></div>
                <!-- Trayectoria - Innovación - Comercialización -->
                <div class="mb-12">
                    <h3 class="text-[#045e7c] text-2xl lg:text-3xl font-bold mb-6">
                        Trayectoria - Innovación - Comercialización
                    </h3>
                    <p class="text-gray-700 text-lg text-justify leading-relaxed mb-8">
                        <span class="font-semibold">Expotur es el evento oficial de comercialización turística de Costa Rica,</span> declarado de interés público bajo el decreto #17563-MEC del 17 junio de 1987 y representa el evento turístico de mayor trayectoria del país. Su edición 2026 presenta un concepto innovador, con un regreso a lo esencial, la comercialización turística y citas de negocios altamente efectivas con un grupo de compradores internacionales seleccionados bajo un estricto proceso de calificación, según su volumen de negocios a Costa Rica, así como representantes tanto de mercados tradicionales como emergentes de nuestro producto turístico.
                    </p>
                </div>
                
                <!-- Categorías de participación -->
                <div class="mb-16">
                    <h3 class="text-[#045e7c] text-3xl lg:text-4xl font-bold mb-6">
                        Categorías de participación
                    </h3>
                    <p class="text-gray-700 text-lg mb-12">
                        <span class="font-semibold">Expotur 2026</span> ofrece 3 categorías de participación, garantizando en ambas un programa de citas detallado.
                    </p>
                    
                    <!-- Grid de Tarjetas de Precios -->
                    <div class="flex flex-col lg:flex-row justify-center gap-8 mb-8">
                        
                        <!-- Tarjeta 1: Tarifas de pronto pago -->
                        <div class="bg-gradient-to-b from-[#08254f] to-[#0baabf] rounded-3xl p-3 shadow-lg w-full max-w-sm">
                            <div class="bg-white rounded-3xl h-full pb-6">
                                <!-- Header de la tarjeta -->
                                <div class="bg-[#08254f] text-white text-center py-4 px-6 mb-6">
                                    <h4 class="font-bold text-lg">Tarifas de pronto pago</h4>
                                    <p class="text-sm">(hasta el 31 de diciembre 2025)</p>
                                </div>
                                
                                <!-- Mesa de negociación -->
                                <div class="text-center mb-6 pb-6 border-b border-gray-200">
                                    <h5 class="font-bold text-lg text-gray-800 mb-2">Mesa de negociación</h5>
                                    <p class="text-2xl font-bold text-gray-700">USD 1,700 + IVA</p>
                                    <p class="text-gray-600">Mil setecientos dólares</p>
                                </div>
                                
                                <!-- Hospitality suite -->
                                <div class="text-center mb-6 pb-6 border-b border-gray-200">
                                    <h5 class="font-bold text-lg text-gray-800 mb-2">Hospitality suite</h5>
                                    <p class="text-2xl font-bold text-gray-700">USD 4,000 + IVA</p>
                                    <p class="text-gray-600">Cuatro mil dólares</p>
                                </div>
                                
                                <!-- Cámaras y asociaciones -->
                                <div class="text-center">
                                    <h5 class="font-bold text-lg text-gray-800 mb-2">Cámaras y asociaciones</h5>
                                    <p class="text-2xl font-bold text-gray-700">USD 500 + IVA</p>
                                    <p class="text-gray-600">Quinientos dólares</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Tarjeta 2: Tarifas a partir del 01 de enero 2025 -->
                        <div class="bg-gradient-to-b from-[#08254f] to-[#0baabf] rounded-3xl p-3 shadow-lg w-full max-w-sm">
                            <div class="bg-white rounded-3xl h-full">
                                <!-- Header de la tarjeta -->
                                <div class="bg-[#08254f] text-white text-center py-4 px-6 mb-6">
                                    <h4 class="font-bold text-lg">Tarifas a partir del</h4>
                                    <p class="text-sm">01 de enero 2025</p>
                                </div>
                                
                                <!-- Mesa de negociación -->
                                <div class="text-center mb-6 pb-6 border-b border-gray-200">
                                    <h5 class="font-bold text-lg text-gray-800 mb-2">Mesa de negociación</h5>
                                    <p class="text-2xl font-bold text-gray-700">USD 1,900 + IVA</p>
                                    <p class="text-gray-600">Mil novecientos dólares</p>
                                </div>
                                
                                <!-- Hospitality suite -->
                                <div class="text-center mb-6 pb-6 border-b border-gray-200">
                                    <h5 class="font-bold text-lg text-gray-800 mb-2">Hospitality suite</h5>
                                    <p class="text-2xl font-bold text-gray-700">USD 4,500 + IVA</p>
                                    <p class="text-gray-600">Cuatro mil quinientos dólares</p>
                                </div>
                                
                                <!-- Cámaras y asociaciones -->
                                <div class="text-center">
                                    <h5 class="font-bold text-lg text-gray-800 mb-2">Cámaras y asociaciones</h5>
                                    <p class="text-2xl font-bold text-gray-700">USD 500 + IVA</p>
                                    <p class="text-gray-600">Quinientos dólares</p>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    
                    <!-- Nota al pie -->
                    <p class="text-center text-gray-600 text-sm mb-8">
                        (*) Confirmación sujeta a aprobación de la Comisión Organizadora
                    </p>
                    
                    <!-- Barra azul final de sección -->
                    <div class="bg-[#08254f] py-6 px-8 text-center mb-12">
                        <h4 class="text-white text-2xl lg:text-3xl font-bold">
                            PLANOS DE DISTRIBUCIÓN Y DISPONIBILIDAD DE ESPACIOS
                        </h4>
                    </div>
                </div>
                
                <!-- Mapa de Hospitality Suites -->
                <div class="mb-16">
                    @livewire('hospitality-suites-map')
                </div>
                
            </div>
        </div>
    </section>

</div>
@endsection
