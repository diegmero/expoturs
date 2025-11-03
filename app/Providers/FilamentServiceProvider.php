<?php

namespace App\Providers;

use Filament\Facades\Filament;
use Filament\Navigation\UserMenuItem;
use Illuminate\Support\ServiceProvider;
use Filament\Support\Facades\FilamentView;
use Illuminate\Contracts\View\View;

class FilamentServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Personalizar los elementos del menú de usuario
        Filament::serving(function () {
            // Remover el elemento de perfil por defecto y agregar solo logout
            Filament::registerUserMenuItems([
                UserMenuItem::make()
                    ->label('Cerrar Sesión')
                    ->url(route('filament.admin.auth.logout'))
                    ->icon('heroicon-o-arrow-right-on-rectangle'),
            ]);
        });

        // Registrar vista personalizada para el dashboard
        FilamentView::registerRenderHook(
            'panels::page.start',
            fn (): View => view('filament.dashboard.custom-welcome'),
        );
    }
}
