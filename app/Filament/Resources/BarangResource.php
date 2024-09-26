<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BarangResource\Pages;
use App\Models\Barang;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class BarangResource extends Resource
{
    protected static ?string $model = Barang::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kd_barang')
                    ->required()
                    ->label('Kode Barang')
                    ->maxLength(25),
                Forms\Components\TextInput::make('nama_barang')
                    ->required()
                    ->label('Nama Barang')
                    ->maxLength(50),
                Forms\Components\TextInput::make('satuan')
                    ->required()
                    ->label('Satuan')
                    ->maxLength(10),
                Forms\Components\TextInput::make('harga_jual')
                    ->required()
                    ->label('Harga Jual')
                    ->numeric(),
                Forms\Components\TextInput::make('harga_beli')
                    ->required()
                    ->label('Harga Beli')
                    ->numeric(),
                Forms\Components\TextInput::make('stok')
                    ->required()
                    ->label('Stok')
                    ->numeric(),
                Forms\Components\TextInput::make('status')
                    ->required()
                    ->maxLength(14)
                    ->label('Status'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kd_barang')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('nama_barang')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('satuan')
                    ->sortable(),
                Tables\Columns\TextColumn::make('harga_jual')
                    ->sortable(),
                Tables\Columns\TextColumn::make('harga_beli')
                    ->sortable(),
                Tables\Columns\TextColumn::make('stok')
                    ->sortable(),
                Tables\Columns\TextColumn::make('status')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Created At')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Updated At')
                    ->dateTime(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBarangs::route('/'),
            'create' => Pages\CreateBarang::route('/create'),
            'edit' => Pages\EditBarang::route('/{record}/edit'),
        ];
    }
}
