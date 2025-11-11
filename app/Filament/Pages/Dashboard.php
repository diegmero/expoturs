<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    protected static ?string $navigationIcon = 'heroicon-o-home';
    
    protected static string $view = 'filament.pages.dashboard';
    
    public function getTitle(): string
    {
        return 'Panel de Administración - Expoturs';
    }
    
    public function getHeading(): string
    {
        return 'Bienvenido al Panel de Administración';
    }
    
    public function getSubheading(): ?string
    {
        return 'Gestiona las reservas de Hospitality Suites y demás configuraciones del sistema.';
    }
}
