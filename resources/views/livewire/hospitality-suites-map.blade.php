<div class="w-full">
    <!-- Título -->
    <div class="text-center mb-8">
        <h3 class="text-[#0094a7] text-3xl lg:text-4xl font-bold mb-2">
            Hospitality <span class="text-[#045e7c]">Suites</span>
        </h3>
    </div>

    <!-- Contenedor del plano -->
    <div class="max-w-4xl mx-auto bg-white p-8 rounded-2xl shadow-lg">
        
        <!-- Pasillos superiores -->
        <div class="grid grid-cols-2 gap-8 mb-6">
            <!-- Pasillo izquierdo -->
            <div class="relative">
                <div class="absolute -top-4 left-0 w-full h-8 bg-gray-200 rounded-t-lg flex items-center justify-center">
                    <span class="text-xs font-semibold text-gray-600">PASILLOS / HALL</span>
                </div>
                <div class="h-16 bg-gray-100 border-2 border-gray-300 rounded-lg"></div>
                <div class="absolute -bottom-4 left-0 w-full h-8 bg-gray-200 rounded-b-lg flex items-center justify-center">
                    <span class="text-xs font-semibold text-gray-600">PASILLOS / HALL</span>
                </div>
            </div>
            
            <!-- Pasillo derecho -->
            <div class="relative">
                <div class="absolute -top-4 left-0 w-full h-8 bg-gray-200 rounded-t-lg flex items-center justify-center">
                    <span class="text-xs font-semibold text-gray-600">PASILLOS / HALL</span>
                </div>
                <div class="h-16 bg-gray-100 border-2 border-gray-300 rounded-lg"></div>
                <div class="absolute -bottom-4 left-0 w-full h-8 bg-gray-200 rounded-b-lg flex items-center justify-center">
                    <span class="text-xs font-semibold text-gray-600">PASILLOS / HALL</span>
                </div>
            </div>
        </div>

        <!-- Estructura principal del plano -->
        <div class="relative bg-gray-200 rounded-lg p-4">
            
            <!-- Bordes laterales -->
            <div class="absolute left-0 top-0 w-4 h-full bg-gray-400 rounded-l-lg"></div>
            <div class="absolute right-0 top-0 w-4 h-full bg-gray-400 rounded-r-lg"></div>
            
            <!-- Estructura superior con conectores -->
            <div class="flex justify-between items-start mb-4">
                <!-- Conector izquierdo -->
                <div class="w-8 h-8 bg-gray-400 rounded"></div>
                
                <!-- Línea superior -->
                <div class="flex-1 h-2 bg-gray-400 mx-2"></div>
                
                <!-- Conector derecho -->
                <div class="w-8 h-8 bg-gray-400 rounded"></div>
            </div>

            <!-- Grid de suites -->
            <div class="grid grid-cols-17 gap-1 mb-4">
                @foreach($suites as $suite)
                    <div class="relative group">
                        <!-- Suite individual -->
                        <div class="w-12 h-16 {{ $suite->is_reserved ? 'bg-red-500 hover:bg-red-600' : 'bg-gray-300 hover:bg-gray-400' }} 
                                    border-2 border-gray-500 rounded-lg flex flex-col items-center justify-center 
                                    transition-colors duration-200 cursor-pointer">
                            
                            <!-- Número de la suite -->
                            <span class="text-xs font-bold {{ $suite->is_reserved ? 'text-white' : 'text-gray-700' }}">
                                {{ str_pad($suite->suite_number, 2, '0', STR_PAD_LEFT) }}
                            </span>
                            
                            <!-- Conector superior -->
                            <div class="absolute -top-3 left-1/2 transform -translate-x-1/2 w-1 h-3 bg-gray-500"></div>
                        </div>

                        <!-- Tooltip para suites reservadas -->
                        @if($suite->is_reserved && $suite->company_name)
                            <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 
                                        opacity-0 group-hover:opacity-100 transition-opacity duration-200 
                                        bg-gray-800 text-white text-xs rounded px-2 py-1 whitespace-nowrap z-10">
                                {{ $suite->company_name }}
                                <!-- Flecha del tooltip -->
                                <div class="absolute top-full left-1/2 transform -translate-x-1/2 
                                           border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800"></div>
                            </div>
                        @endif
                    </div>
                @endforeach
            </div>

            <!-- Línea inferior -->
            <div class="h-2 bg-gray-400 rounded"></div>
        </div>
    </div>

    <!-- Leyenda -->
    <div class="flex justify-center gap-8 mt-6">
        <div class="flex items-center gap-2">
            <div class="w-4 h-4 bg-gray-300 border border-gray-500 rounded"></div>
            <span class="text-sm text-gray-600">Disponible</span>
        </div>
        <div class="flex items-center gap-2">
            <div class="w-4 h-4 bg-red-500 border border-gray-500 rounded"></div>
            <span class="text-sm text-gray-600">Reservado</span>
        </div>
    </div>

    <style>
        .grid-cols-17 {
            grid-template-columns: repeat(17, minmax(0, 1fr));
        }
        
        @media (max-width: 768px) {
            .grid-cols-17 {
                grid-template-columns: repeat(8, minmax(0, 1fr));
            }
        }
    </style>
</div>
