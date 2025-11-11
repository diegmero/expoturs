<!-- Selector de Idioma Anclado Superior -->
<div class="absolute top-2 right-2 sm:top-4 sm:right-4 z-50">
    <div class="bg-white px-1 sm:px-2 mr-2 sm:mr-10 py-1 sm:py-2 flex items-center gap-1 sm:gap-2 shadow-lg rounded-b-[.5rem] border-gray-200">
        <a href="{{ route('language.switch', 'en') }}" class="flex items-center gap-1 cursor-pointer hover:bg-gray-50 px-1 sm:px-2 py-1 rounded-full transition-colors {{ app()->getLocale() === 'en' ? 'bg-blue-50 ring-2 ring-blue-300' : '' }}">
            <img src="https://flagcdn.com/w20/us.png" alt="EN" class="w-4 h-3 sm:w-5 sm:h-4 rounded-sm">
            <span class="text-xs sm:text-sm font-medium {{ app()->getLocale() === 'en' ? 'text-blue-700' : 'text-gray-700' }}">EN</span>
        </a>
        <span class="text-gray-300 text-xs sm:text-sm">|</span>
        <a href="{{ route('language.switch', 'es') }}" class="flex items-center gap-1 cursor-pointer hover:bg-gray-50 px-1 sm:px-2 py-1 rounded-full transition-colors {{ app()->getLocale() === 'es' ? 'bg-blue-50 ring-2 ring-blue-300' : '' }}">
            <img src="https://flagcdn.com/w20/es.png" alt="ESP" class="w-4 h-3 sm:w-5 sm:h-4 rounded-sm">
            <span class="text-xs sm:text-sm font-medium {{ app()->getLocale() === 'es' ? 'text-blue-700' : 'text-gray-700' }}">ESP</span>
        </a>
    </div>
</div>

<header class="bg-gradient-to-r from-[#4EAAA8] to-[#5AB8B6] py-3 sm:py-6 px-4 sm:px-8 rounded-t-[2.5rem] mx-2 sm:mx-4 mt-2 sm:mt-4 relative mb-1">
    <div class="flex justify-center">
        <a href="{{ route('home') }}" class="cursor-pointer hover:opacity-90 transition-opacity duration-200">
            <img src="{{ asset('img/PNG/logo_Expotur.png') }}" alt="Expotur Costa Rica" class="h-16 sm:h-20 lg:h-24">
        </a>
    </div>
</header>