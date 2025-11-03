<div class="w-full">
    <!-- Título -->
    <div class="text-center mb-8">
        <h3 class="text-[#0094a7] text-3xl lg:text-4xl font-bold mb-2">
            Destinos & <span class="text-[#045e7c]">Cámaras de Turismo</span>
        </h3>
    </div>

    <!-- Contenedor del plano -->
    <div class="max-w-3xl mx-auto bg-white p-8 rounded-2xl shadow-lg">
        
        <!-- Estructura del plano completo -->
        <div class="relative bg-gray-100 rounded-lg p-6">
            
            <!-- Contorno del plano con forma irregular -->
            <div class="relative border-4 border-gray-400 rounded-lg" style="min-height: 650px; padding: 40px 30px;">
                
                <!-- Destino 01 - Esquina superior derecha -->
                <div class="absolute" style="top: 30px; right: 50px;">
                    @php $destination = $destinations->get(1); @endphp
                    <div class="relative group">
                        <div class="w-14 h-12 {{ $destination && $destination->is_reserved ? 'bg-red-500 hover:bg-red-600' : 'bg-gray-400 hover:bg-gray-500' }} 
                                    border-2 border-gray-600 rounded flex items-center justify-center 
                                    transition-colors duration-200 cursor-pointer">
                            <span class="text-sm font-bold {{ $destination && $destination->is_reserved ? 'text-white' : 'text-white' }}">
                                01
                            </span>
                        </div>
                        
                        @if($destination && $destination->is_reserved && $destination->company_name)
                            <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 
                                        opacity-0 group-hover:opacity-100 transition-opacity duration-200 
                                        bg-gray-800 text-white text-xs rounded px-2 py-1 whitespace-nowrap z-10">
                                {{ $destination->company_name }}
                                <div class="absolute top-full left-1/2 transform -translate-x-1/2 
                                           border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800"></div>
                            </div>
                        @endif
                    </div>
                </div>
                
                <!-- Primera fila - 04, 03, 02 -->
                <div class="absolute" style="top: 100px; left: 50%; transform: translateX(-50%);">
                    <div class="flex gap-3">
                        @foreach([4, 3, 2] as $num)
                            @php $destination = $destinations->get($num); @endphp
                            <div class="relative group">
                                <div class="w-14 h-12 {{ $destination && $destination->is_reserved ? 'bg-red-500 hover:bg-red-600' : 'bg-gray-400 hover:bg-gray-500' }} 
                                            border-2 border-gray-600 rounded flex items-center justify-center 
                                            transition-colors duration-200 cursor-pointer">
                                    <span class="text-sm font-bold {{ $destination && $destination->is_reserved ? 'text-white' : 'text-white' }}">
                                        {{ str_pad($num, 2, '0', STR_PAD_LEFT) }}
                                    </span>
                                </div>
                                
                                @if($destination && $destination->is_reserved && $destination->company_name)
                                    <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 
                                                opacity-0 group-hover:opacity-100 transition-opacity duration-200 
                                                bg-gray-800 text-white text-xs rounded px-2 py-1 whitespace-nowrap z-10">
                                        {{ $destination->company_name }}
                                        <div class="absolute top-full left-1/2 transform -translate-x-1/2 
                                                   border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800"></div>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
                
                <!-- Segunda fila - 05, 06, 07 -->
                <div class="absolute" style="top: 180px; left: 50%; transform: translateX(-50%);">
                    <div class="flex gap-3">
                        @foreach([5, 6, 7] as $num)
                            @php $destination = $destinations->get($num); @endphp
                            <div class="relative group">
                                <div class="w-14 h-12 {{ $destination && $destination->is_reserved ? 'bg-red-500 hover:bg-red-600' : 'bg-gray-400 hover:bg-gray-500' }} 
                                            border-2 border-gray-600 rounded flex items-center justify-center 
                                            transition-colors duration-200 cursor-pointer">
                                    <span class="text-sm font-bold {{ $destination && $destination->is_reserved ? 'text-white' : 'text-white' }}">
                                        {{ str_pad($num, 2, '0', STR_PAD_LEFT) }}
                                    </span>
                                </div>
                                
                                @if($destination && $destination->is_reserved && $destination->company_name)
                                    <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 
                                                opacity-0 group-hover:opacity-100 transition-opacity duration-200 
                                                bg-gray-800 text-white text-xs rounded px-2 py-1 whitespace-nowrap z-10">
                                        {{ $destination->company_name }}
                                        <div class="absolute top-full left-1/2 transform -translate-x-1/2 
                                                   border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800"></div>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
                
                <!-- Tercera fila - 12, 11, 10, 09, 08 -->
                <div class="absolute" style="top: 270px; left: 50%; transform: translateX(-50%);">
                    <div class="flex gap-3">
                        @foreach([12, 11, 10, 9, 8] as $num)
                            @php $destination = $destinations->get($num); @endphp
                            <div class="relative group">
                                <div class="w-14 h-12 {{ $destination && $destination->is_reserved ? 'bg-red-500 hover:bg-red-600' : 'bg-gray-400 hover:bg-gray-500' }} 
                                            border-2 border-gray-600 rounded flex items-center justify-center 
                                            transition-colors duration-200 cursor-pointer">
                                    <span class="text-sm font-bold {{ $destination && $destination->is_reserved ? 'text-white' : 'text-white' }}">
                                        {{ str_pad($num, 2, '0', STR_PAD_LEFT) }}
                                    </span>
                                </div>
                                
                                @if($destination && $destination->is_reserved && $destination->company_name)
                                    <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 
                                                opacity-0 group-hover:opacity-100 transition-opacity duration-200 
                                                bg-gray-800 text-white text-xs rounded px-2 py-1 whitespace-nowrap z-10">
                                        {{ $destination->company_name }}
                                        <div class="absolute top-full left-1/2 transform -translate-x-1/2 
                                                   border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800"></div>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
                
                <!-- Cuarta fila - 13, 14, 15, 16, 17 -->
                <div class="absolute" style="top: 350px; left: 50%; transform: translateX(-50%);">
                    <div class="flex gap-3">
                        @foreach([13, 14, 15, 16, 17] as $num)
                            @php $destination = $destinations->get($num); @endphp
                            <div class="relative group">
                                <div class="w-14 h-12 {{ $destination && $destination->is_reserved ? 'bg-red-500 hover:bg-red-600' : 'bg-gray-400 hover:bg-gray-500' }} 
                                            border-2 border-gray-600 rounded flex items-center justify-center 
                                            transition-colors duration-200 cursor-pointer">
                                    <span class="text-sm font-bold {{ $destination && $destination->is_reserved ? 'text-white' : 'text-white' }}">
                                        {{ str_pad($num, 2, '0', STR_PAD_LEFT) }}
                                    </span>
                                </div>
                                
                                @if($destination && $destination->is_reserved && $destination->company_name)
                                    <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 
                                                opacity-0 group-hover:opacity-100 transition-opacity duration-200 
                                                bg-gray-800 text-white text-xs rounded px-2 py-1 whitespace-nowrap z-10">
                                        {{ $destination->company_name }}
                                        <div class="absolute top-full left-1/2 transform -translate-x-1/2 
                                                   border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800"></div>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
                
                <!-- Quinta fila - 20, 19, 18 -->
                <div class="absolute" style="top: 440px; left: 50%; transform: translateX(-50%);">
                    <div class="flex gap-3">
                        @foreach([20, 19, 18] as $num)
                            @php $destination = $destinations->get($num); @endphp
                            <div class="relative group">
                                <div class="w-14 h-12 {{ $destination && $destination->is_reserved ? 'bg-red-500 hover:bg-red-600' : 'bg-gray-400 hover:bg-gray-500' }} 
                                            border-2 border-gray-600 rounded flex items-center justify-center 
                                            transition-colors duration-200 cursor-pointer">
                                    <span class="text-sm font-bold {{ $destination && $destination->is_reserved ? 'text-white' : 'text-white' }}">
                                        {{ str_pad($num, 2, '0', STR_PAD_LEFT) }}
                                    </span>
                                </div>
                                
                                @if($destination && $destination->is_reserved && $destination->company_name)
                                    <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 
                                                opacity-0 group-hover:opacity-100 transition-opacity duration-200 
                                                bg-gray-800 text-white text-xs rounded px-2 py-1 whitespace-nowrap z-10">
                                        {{ $destination->company_name }}
                                        <div class="absolute top-full left-1/2 transform -translate-x-1/2 
                                                   border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800"></div>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
                
                <!-- Sexta fila inferior - 21, 22, 23, 24 -->
                <div class="absolute" style="top: 530px; left: 50%; transform: translateX(-50%);">
                    <div class="flex gap-3">
                        @foreach([21, 22, 23, 24] as $num)
                            @php $destination = $destinations->get($num); @endphp
                            <div class="relative group">
                                <div class="w-14 h-12 {{ $destination && $destination->is_reserved ? 'bg-red-500 hover:bg-red-600' : 'bg-gray-400 hover:bg-gray-500' }} 
                                            border-2 border-gray-600 rounded flex items-center justify-center 
                                            transition-colors duration-200 cursor-pointer">
                                    <span class="text-sm font-bold {{ $destination && $destination->is_reserved ? 'text-white' : 'text-white' }}">
                                        {{ str_pad($num, 2, '0', STR_PAD_LEFT) }}
                                    </span>
                                </div>
                                
                                @if($destination && $destination->is_reserved && $destination->company_name)
                                    <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 
                                                opacity-0 group-hover:opacity-100 transition-opacity duration-200 
                                                bg-gray-800 text-white text-xs rounded px-2 py-1 whitespace-nowrap z-10">
                                        {{ $destination->company_name }}
                                        <div class="absolute top-full left-1/2 transform -translate-x-1/2 
                                                   border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800"></div>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <!-- Leyenda -->
    <div class="flex justify-center gap-8 mt-6">
        <div class="flex items-center gap-2">
            <div class="w-5 h-5 bg-gray-400 border-2 border-gray-600 rounded"></div>
            <span class="text-sm font-medium text-gray-700">Disponible</span>
        </div>
        <div class="flex items-center gap-2">
            <div class="w-5 h-5 bg-red-500 border-2 border-gray-600 rounded"></div>
            <span class="text-sm font-medium text-gray-700">Reservado</span>
        </div>
    </div>
</div>
