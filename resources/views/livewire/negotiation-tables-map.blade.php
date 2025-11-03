<div class="w-full">
    <!-- Título -->
    <div class="text-center mb-8">
        <h3 class="text-[#0094a7] text-3xl lg:text-4xl font-bold mb-2">
            Mesas de <span class="text-[#045e7c]">Negociación</span>
        </h3>
    </div>

    <!-- Contenedor del plano -->
    <div class="max-w-6xl mx-auto bg-white p-8 rounded-2xl shadow-lg">
        
        <!-- Estructura del plano completo -->
        <div class="relative bg-gray-100 rounded-lg p-6">
            
            <!-- Sección superior del plano -->
            <div class="relative mb-8">
                
                <!-- Área gris superior -->
                <div class="bg-gray-400 h-16 rounded-t-lg mb-4 relative">
                    <!-- Elementos decorativos superiores -->
                    <div class="absolute top-2 left-1/4 w-8 h-8 bg-white rounded border-2 border-gray-600"></div>
                    <div class="absolute top-2 right-1/4 w-8 h-8 bg-white rounded border-2 border-gray-600"></div>
                </div>
                
                <!-- Área principal de mesas -->
                <div class="bg-white rounded-lg p-6 border-2 border-gray-300 relative">
                    
                    <!-- Sección izquierda de mesas -->
                    <div class="grid grid-cols-2 gap-8">
                        
                        <!-- Columna izquierda -->
                        <div class="space-y-2">
                            @php
                                $leftTables = [
                                    [79, 62, 61, 44],
                                    [78, 63, 60, 45],
                                    [80, 77, 64, 59, 46],
                                    [81, 76, 65, 58, 47],
                                    [82, 75, 66, 57, 48],
                                    [83, 74, 67, 56, 49],
                                    [84, 73, 68, 55, 50],
                                    [85, 72, 69, 54, 51],
                                    [86, 71, 70, 53, 52]
                                ];
                            @endphp
                            
                            @foreach($leftTables as $row)
                                <div class="flex gap-1 justify-center">
                                    @foreach($row as $tableNum)
                                        @php $table = $tables->get($tableNum); @endphp
                                        <div class="relative group">
                                            <div class="w-10 h-8 {{ $table && $table->is_reserved ? 'bg-red-500 hover:bg-red-600' : 'bg-gray-300 hover:bg-gray-400' }} 
                                                        border border-gray-500 rounded flex items-center justify-center 
                                                        transition-colors duration-200 cursor-pointer">
                                                <span class="text-xs font-bold {{ $table && $table->is_reserved ? 'text-white' : 'text-gray-700' }}">
                                                    {{ str_pad($tableNum, 2, '0', STR_PAD_LEFT) }}
                                                </span>
                                            </div>
                                            
                                            @if($table && $table->is_reserved && $table->company_name)
                                                <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 
                                                            opacity-0 group-hover:opacity-100 transition-opacity duration-200 
                                                            bg-gray-800 text-white text-xs rounded px-2 py-1 whitespace-nowrap z-10">
                                                    {{ $table->company_name }}
                                                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 
                                                               border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800"></div>
                                                </div>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                        
                        <!-- Columna derecha -->
                        <div class="space-y-2">
                            @php
                                $rightTables = [
                                    [43, 26, 25, 8],
                                    [42, 27, 24, 9],
                                    [41, 28, 23, 10, 7],
                                    [40, 29, 22, 11, 6],
                                    [39, 30, 21, 12, 5],
                                    [38, 31, 20, 13, 4],
                                    [37, 32, 19, 14, 3],
                                    [36, 33, 18, 15, 2],
                                    [35, 34, 17, 16, 1]
                                ];
                            @endphp
                            
                            @foreach($rightTables as $row)
                                <div class="flex gap-1 justify-center">
                                    @foreach($row as $tableNum)
                                        @php $table = $tables->get($tableNum); @endphp
                                        <div class="relative group">
                                            <div class="w-10 h-8 {{ $table && $table->is_reserved ? 'bg-red-500 hover:bg-red-600' : 'bg-gray-300 hover:bg-gray-400' }} 
                                                        border border-gray-500 rounded flex items-center justify-center 
                                                        transition-colors duration-200 cursor-pointer">
                                                <span class="text-xs font-bold {{ $table && $table->is_reserved ? 'text-white' : 'text-gray-700' }}">
                                                    {{ str_pad($tableNum, 2, '0', STR_PAD_LEFT) }}
                                                </span>
                                            </div>
                                            
                                            @if($table && $table->is_reserved && $table->company_name)
                                                <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 
                                                            opacity-0 group-hover:opacity-100 transition-opacity duration-200 
                                                            bg-gray-800 text-white text-xs rounded px-2 py-1 whitespace-nowrap z-10">
                                                    {{ $table->company_name }}
                                                    <div class="absolute top-full left-1/2 transform -translate-x-1/2 
                                                               border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800"></div>
                                                </div>
                                            @endif
                                        </div>
                                    @endforeach
                                </div>
                            @endforeach
                        </div>
                    </div>
                    
                    <!-- Flechas direccionales en el centro -->
                    <div class="absolute left-1/2 top-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <div class="flex items-center gap-2">
                            <svg class="w-6 h-6 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                            </svg>
                            <div class="flex flex-col gap-1">
                                <svg class="w-4 h-4 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M14.707 12.707a1 1 0 01-1.414 0L10 9.414l-3.293 3.293a1 1 0 01-1.414-1.414l4-4a1 1 0 011.414 0l4 4a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                                </svg>
                                <svg class="w-4 h-4 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <svg class="w-6 h-6 text-red-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Sección inferior del plano -->
            <div class="relative">
                
                <!-- Área de mesas inferiores -->
                <div class="bg-white rounded-lg p-6 border-2 border-gray-300 mb-4">
                    <div class="grid grid-cols-6 gap-1 justify-center max-w-md mx-auto">
                        @php
                            $bottomTables = [
                                [87, 88, 89, 90, 91, 92],
                                [98, 97, 96, 95, 94, 93]
                            ];
                        @endphp
                        
                        @foreach($bottomTables as $row)
                            @foreach($row as $tableNum)
                                @php $table = $tables->get($tableNum); @endphp
                                <div class="relative group">
                                    <div class="w-10 h-8 {{ $table && $table->is_reserved ? 'bg-red-500 hover:bg-red-600' : 'bg-gray-300 hover:bg-gray-400' }} 
                                                border border-gray-500 rounded flex items-center justify-center 
                                                transition-colors duration-200 cursor-pointer">
                                        <span class="text-xs font-bold {{ $table && $table->is_reserved ? 'text-white' : 'text-gray-700' }}">
                                            {{ str_pad($tableNum, 2, '0', STR_PAD_LEFT) }}
                                        </span>
                                    </div>
                                    
                                    @if($table && $table->is_reserved && $table->company_name)
                                        <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 
                                                    opacity-0 group-hover:opacity-100 transition-opacity duration-200 
                                                    bg-gray-800 text-white text-xs rounded px-2 py-1 whitespace-nowrap z-10">
                                            {{ $table->company_name }}
                                            <div class="absolute top-full left-1/2 transform -translate-x-1/2 
                                                       border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800"></div>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        @endforeach
                    </div>
                </div>
                
                <!-- Área final inferior -->
                <div class="grid grid-cols-4 gap-8 max-w-lg mx-auto">
                    @php
                        $finalTables = [
                            [112, 105, 104],
                            [111, 106, 103],
                            [110, 107, 102, 99],
                            [109, 108, 101, 100]
                        ];
                    @endphp
                    
                    @foreach($finalTables as $row)
                        <div class="flex flex-col gap-1">
                            @foreach($row as $tableNum)
                                @php $table = $tables->get($tableNum); @endphp
                                <div class="relative group">
                                    <div class="w-10 h-8 {{ $table && $table->is_reserved ? 'bg-red-500 hover:bg-red-600' : 'bg-gray-300 hover:bg-gray-400' }} 
                                                border border-gray-500 rounded flex items-center justify-center 
                                                transition-colors duration-200 cursor-pointer">
                                        <span class="text-xs font-bold {{ $table && $table->is_reserved ? 'text-white' : 'text-gray-700' }}">
                                            {{ str_pad($tableNum, 2, '0', STR_PAD_LEFT) }}
                                        </span>
                                    </div>
                                    
                                    @if($table && $table->is_reserved && $table->company_name)
                                        <div class="absolute bottom-full left-1/2 transform -translate-x-1/2 mb-2 
                                                    opacity-0 group-hover:opacity-100 transition-opacity duration-200 
                                                    bg-gray-800 text-white text-xs rounded px-2 py-1 whitespace-nowrap z-10">
                                            {{ $table->company_name }}
                                            <div class="absolute top-full left-1/2 transform -translate-x-1/2 
                                                       border-l-4 border-r-4 border-t-4 border-transparent border-t-gray-800"></div>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                </div>
                
                <!-- Área gris inferior -->
                <div class="bg-gray-400 h-12 rounded-b-lg mt-4"></div>
            </div>
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
            <span class="text-sm text-gray-600">Reservada</span>
        </div>
    </div>
</div>
