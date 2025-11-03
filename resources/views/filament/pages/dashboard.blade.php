<x-filament-panels::page>
    <div class="flex flex-col lg:flex-row gap-6">
        
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
                    <p class="text-teal-700">Panel de administración de Expoturs 2026</p>
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

    </div>

    <!-- Estadísticas rápidas -->
    <div class="mt-8">
        <h3 class="text-lg font-semibold text-gray-900 mb-4">Estadísticas Rápidas</h3>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            @php
                $totalSuites = \App\Models\HospitalitySuite::count();
                $reservedSuites = \App\Models\HospitalitySuite::where('is_reserved', true)->count();
                $availableSuites = $totalSuites - $reservedSuites;
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
        </div>
    </div>

</x-filament-panels::page>
