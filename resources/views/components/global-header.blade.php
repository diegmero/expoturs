<!-- Selector de Idioma Anclado Superior -->
<div class="absolute top-4 right-4 z-50">
    <div class="bg-white px-2 mr-10 py-2 flex items-center gap-2 shadow-lg rounded-b-[.5rem] border-gray-200">
        <div class="flex items-center gap-1 cursor-pointer hover:bg-gray-50 px-2 py-1 rounded-full transition-colors">
            <img src="https://flagcdn.com/w20/us.png" alt="EN" class="w-5 h-4 rounded-sm">
            <span class="text-sm font-medium text-gray-700">EN</span>
        </div>
        <span class="text-gray-300 text-sm">|</span>
        <div class="flex items-center gap-1 cursor-pointer hover:bg-gray-50 px-2 py-1 rounded-full transition-colors">
            <img src="https://flagcdn.com/w20/es.png" alt="ESP" class="w-5 h-4 rounded-sm">
            <span class="text-sm font-medium text-gray-700">ESP</span>
        </div>
    </div>
</div>

<header class="bg-gradient-to-r from-[#4EAAA8] to-[#5AB8B6] py-6 px-8 rounded-t-[2.5rem] mx-4 mt-4 relative mb-1">
    <div class="flex justify-center">
        <a href="{{ route('home') }}" class="cursor-pointer hover:opacity-90 transition-opacity duration-200">
            <img src="{{ asset('img/PNG/logo_Expotur.png') }}" alt="ExpoTour Costa Rica" class="h-24">
        </a>
    </div>
</header>