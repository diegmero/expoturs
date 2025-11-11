<?php

namespace App\Filament\Resources;

use App\Filament\Resources\HospitalitySuiteResource\Pages;
use App\Models\HospitalitySuite;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Section;
use Filament\Tables\Filters\SelectFilter;

class HospitalitySuiteResource extends Resource
{
    protected static ?string $model = HospitalitySuite::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office';
    
    protected static ?string $navigationLabel = 'Reservas Hospitality Suites';
    
    protected static ?string $modelLabel = 'Suite';
    
    protected static ?string $pluralModelLabel = 'Hospitality Suites';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Información de la Suite')
                    ->schema([
                        Forms\Components\Select::make('suite_number')
                            ->label('Número de Suite')
                            ->options(collect(range(1, 17))->mapWithKeys(fn($num) => [$num => str_pad($num, 2, '0', STR_PAD_LEFT)]))
                            ->required()
                            ->searchable(),
                            
                        Forms\Components\Toggle::make('is_reserved')
                            ->label('¿Está Reservada?')
                            ->default(false)
                            ->reactive(),
                    ])->columns(2),
                    
                Section::make('Datos de la Reserva')
                    ->schema([
                        Forms\Components\TextInput::make('company_name')
                            ->label('Nombre de la Empresa')
                            ->maxLength(255)
                            ->visible(fn (Forms\Get $get) => $get('is_reserved')),
                            
                        Forms\Components\TextInput::make('person_name')
                            ->label('Nombre de la Persona')
                            ->maxLength(255)
                            ->visible(fn (Forms\Get $get) => $get('is_reserved')),
                            
                        Forms\Components\DatePicker::make('entry_date')
                            ->label('Fecha de Ingreso a la Suite')
                            ->visible(fn (Forms\Get $get) => $get('is_reserved')),
                    ])->columns(2)
                    ->visible(fn (Forms\Get $get) => $get('is_reserved')),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('suite_number')
                    ->label('Suite #')
                    ->formatStateUsing(fn (string $state): string => str_pad($state, 2, '0', STR_PAD_LEFT))
                    ->sortable(),
                    
                Tables\Columns\IconColumn::make('is_reserved')
                    ->label('Estado')
                    ->boolean()
                    ->trueIcon('heroicon-o-check-circle')
                    ->falseIcon('heroicon-o-x-circle')
                    ->trueColor('success')
                    ->falseColor('gray'),
                    
                Tables\Columns\TextColumn::make('company_name')
                    ->label('Empresa')
                    ->searchable()
                    ->placeholder('No reservada'),
                    
                Tables\Columns\TextColumn::make('person_name')
                    ->label('Persona')
                    ->searchable()
                    ->placeholder('No asignada'),
                    
                Tables\Columns\TextColumn::make('entry_date')
                    ->label('Fecha Ingreso')
                    ->date()
                    ->placeholder('No definida'),
                    
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Creado')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                SelectFilter::make('is_reserved')
                    ->label('Estado')
                    ->options([
                        '1' => 'Reservadas',
                        '0' => 'Disponibles',
                    ]),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('suite_number');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListHospitalitySuites::route('/'),
            'create' => Pages\CreateHospitalitySuite::route('/create'),
            'edit' => Pages\EditHospitalitySuite::route('/{record}/edit'),
        ];
    }
}
