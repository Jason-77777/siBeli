<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MasukResource\Pages;
use App\Filament\Resources\MasukResource\RelationManagers;
use App\Models\Masuk;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class MasukResource extends Resource
{
    protected static ?string $model = Masuk::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kd_masuk')
                    ->required()
                    ->label('Kode Masuk')
                    ->maxLength(25),
                Forms\Components\DatePicker::make('tgl_masuk')
                    ->required()
                    ->label('Tanggal Masuk')
                    ->unique(),
                Forms\Components\TextInput::make('kd_admin')
                    ->required()
                    ->label('Kode Admin')
                    ->maxLength(25),
                Forms\Components\TextInput::make('kd_supplier')
                    ->required()
                    ->label('Kode Supplier')
                    ->maxLength(25),
                Forms\Components\TextInput::make('total_masuk')
                    ->required()
                    ->label('Total Masuk')
                    ->numeric(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kd_masuk')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('tgl_masuk')
                    ->sortable()
                    ->date(),
                Tables\Columns\TextColumn::make('kd_admin')
                    ->sortable(),
                Tables\Columns\TextColumn::make('kd_supplier')
                    ->sortable(),
                Tables\Columns\TextColumn::make('total_masuk')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Updated At')
                    ->dateTime(),
            ])
            ->filters([
                
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMasuks::route('/'),
            'create' => Pages\CreateMasuk::route('/create'),
            'edit' => Pages\EditMasuk::route('/{record}/edit'),
        ];
    }
}
