@extends('layouts.app')

@section('content')
<!-- Página ExpoTur 2026 -->
<div class="w-full min-h-screen">
    <!-- Header Global provisto por layouts.app -->

    <!-- Hero con Navegación Flotante -->
    @include('components.hero-navigation', [
        'heroImage' => 'https://res.cloudinary.com/dspoaxmvn/image/upload/v1762109289/header_Expotur_zwgumw.webp',
        'heroTitle' => '',
        'heroSubtitle' => '',
        'showEventInfo' => false,
        'activeTab' => 'expotur'
    ])

    <!-- Sección Información General -->
    <section class="mt-16 mx-4 lg:mx-16">
        <div class="bg-white rounded-[2.5rem]  px-8 lg:px-16">
            <div class="max-w-7xl mx-auto">
                
                <!-- Header con título y botón -->
                <div class="flex flex-col lg:flex-row justify-between items-start lg:items-center mb-12">
                    <h2 class="text-[#045e7c] text-4xl lg:text-5xl font-bold mb-6 lg:mb-0">
                        Información General
                    </h2>
                    <button class="bg-gradient-to-r from-[#E67E22] to-[#D35400] hover:from-[#D35400] hover:to-[#C0392B] text-white font-bold py-4 px-8 rounded-full text-lg transition-all shadow-lg">
                        DESCARGAR FICHA TÉCNICA
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
                <div class="bg-gradient-to-r from-[#1B365D] to-[#2C5282] rounded-2xl py-8 px-8 mb-12 text-center shadow-lg">
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
                
                <!-- Botón centrado -->
                <div class="text-center">
                    <button class="bg-gradient-to-r from-[#E67E22] to-[#D35400] hover:from-[#D35400] hover:to-[#C0392B] text-white font-bold py-4 px-12 rounded-full text-xl transition-all shadow-lg">
                        DESCARGAR FICHA TÉCNICA
                    </button>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
