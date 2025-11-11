<x-filament-panels::page>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        
        <!-- Tarjeta de Bienvenida -->
        <div class="flex-1 bg-gradient-to-br from-teal-50 to-teal-100 rounded-xl p-6 border border-teal-200">
            <div class="flex items-center gap-4">
                <div class="bg-teal-500 p-3 rounded-full">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-4m-5 0H9m0 0H5m0 0h2M7 7h10M7 11h10M7 15h10"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-teal-900">¡Bienvenido!</h3>
                    <p class="text-teal-700">Panel de administración de Expotur 2026</p>
                </div>
            </div>
        </div>

        <!-- Tarjeta de Hospitality Suites -->
        <div class="flex-1 bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-6 border border-blue-200">
            <div class="flex items-center gap-4">
                <div class="bg-blue-500 p-3 rounded-full">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-4m-5 0H9m0 0H5m0 0h2M7 7h10M7 11h10M7 15h10"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-blue-900">Hospitality Suites</h3>
                    <p class="text-blue-700">Gestiona las reservas de las 17 suites disponibles</p>
                    <a href="{{ route('filament.admin.resources.hospitality-suites.index') }}" 
                       class="inline-flex items-center mt-2 text-sm font-medium text-blue-600 hover:text-blue-800">
                        Ver reservas
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Tarjeta de Mesas de Negociación -->
        <div class="flex-1 bg-gradient-to-br from-green-50 to-green-100 rounded-xl p-6 border border-green-200">
            <div class="flex items-center gap-4">
                <div class="bg-green-500 p-3 rounded-full">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-green-900">Mesas de Negociación</h3>
                    <p class="text-green-700">Gestiona las reservas de las 112 mesas disponibles</p>
                    <a href="{{ route('filament.admin.resources.negotiation-tables.index') }}" 
                       class="inline-flex items-center mt-2 text-sm font-medium text-green-600 hover:text-green-800">
                        Ver reservas
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Tarjeta de Destinos & Cámaras -->
        <div class="flex-1 bg-gradient-to-br from-purple-50 to-purple-100 rounded-xl p-6 border border-purple-200">
            <div class="flex items-center gap-4">
                <div class="bg-purple-500 p-3 rounded-full">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <div>
                    <h3 class="text-xl font-bold text-purple-900">Destinos & Cámaras</h3>
                    <p class="text-purple-700">Gestiona las reservas de los 24 destinos disponibles</p>
                    <a href="{{ route('filament.admin.resources.tourism-destinations.index') }}" 
                       class="inline-flex items-center mt-2 text-sm font-medium text-purple-600 hover:text-purple-800">
                        Ver reservas
                        <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

    </div>

    <!-- Estadísticas rápidas -->
    <div class="mt-8">
        <h3 class="text-lg font-semibold text-gray-900 mb-4">Estadísticas Rápidas</h3>
        
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-9 gap-4">
            @php
                $totalSuites = \App\Models\HospitalitySuite::count();
                $reservedSuites = \App\Models\HospitalitySuite::where('is_reserved', true)->count();
                $availableSuites = $totalSuites - $reservedSuites;
                
                $totalTables = \App\Models\NegotiationTable::count();
                $reservedTables = \App\Models\NegotiationTable::where('is_reserved', true)->count();
                $availableTables = $totalTables - $reservedTables;
                
                $totalDestinations = \App\Models\TourismDestination::count();
                $reservedDestinations = \App\Models\TourismDestination::where('is_reserved', true)->count();
                $availableDestinations = $totalDestinations - $reservedDestinations;
            @endphp
            
            <!-- Total Suites -->
            <div class="bg-black rounded-lg p-4 border border-gray-200 shadow-sm">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-white">Total Suites</p>
                        <p class="text-3xl font-bold text-white">{{ $totalSuites }}</p>
                    </div>
                    <div class="bg-black p-2 rounded-full">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-4m-5 0H9m0 0H5m0 0h2M7 7h10M7 11h10M7 15h10"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Suites Reservadas -->
            <div class="bg-black rounded-lg p-4 border border-gray-200 shadow-sm">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-white">Reservadas</p>
                        <p class="text-3xl font-bold text-white">{{ $reservedSuites }}</p>
                    </div>
                    <div class="bg-black p-2 rounded-full">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Suites Disponibles -->
            <div class="bg-black rounded-lg p-4 border border-gray-200 shadow-sm">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-white">Disponibles</p>
                        <p class="text-3xl font-bold text-white">{{ $availableSuites }}</p>
                    </div>
                    <div class="bg-black p-2 rounded-full">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Total Mesas -->
            <div class="bg-black rounded-lg p-4 border border-gray-200 shadow-sm">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-white">Total Mesas</p>
                        <p class="text-3xl font-bold text-white">{{ $totalTables }}</p>
                    </div>
                    <div class="bg-black p-2 rounded-full">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Mesas Reservadas -->
            <div class="bg-black rounded-lg p-4 border border-gray-200 shadow-sm">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-white">Mesas Reservadas</p>
                        <p class="text-3xl font-bold text-white">{{ $reservedTables }}</p>
                    </div>
                    <div class="bg-black p-2 rounded-full">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Mesas Disponibles -->
            <div class="bg-black rounded-lg p-4 border border-gray-200 shadow-sm">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-white">Mesas Disponibles</p>
                        <p class="text-3xl font-bold text-white">{{ $availableTables }}</p>
                    </div>
                    <div class="bg-black p-2 rounded-full">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Total Destinos -->
            <div class="bg-black rounded-lg p-4 border border-gray-200 shadow-sm">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-white">Total Destinos</p>
                        <p class="text-3xl font-bold text-white">{{ $totalDestinations }}</p>
                    </div>
                    <div class="bg-black p-2 rounded-full">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Destinos Reservados -->
            <div class="bg-black rounded-lg p-4 border border-gray-200 shadow-sm">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-white">Destinos Reservados</p>
                        <p class="text-3xl font-bold text-white">{{ $reservedDestinations }}</p>
                    </div>
                    <div class="bg-black p-2 rounded-full">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Destinos Disponibles -->
            <div class="bg-black rounded-lg p-4 border border-gray-200 shadow-sm">
                <div class="flex items-center justify-between">
                    <div>
                        <p class="text-sm font-medium text-white">Destinos Disponibles</p>
                        <p class="text-3xl font-bold text-white">{{ $availableDestinations }}</p>
                    </div>
                    <div class="bg-black p-2 rounded-full">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-filament-panels::page>
