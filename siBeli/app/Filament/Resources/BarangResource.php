<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BarangResource\Pages;
use App\Filament\Resources\BarangResource\RelationManagers;
use App\Models\Barang;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BarangResource extends Resource
{
    protected static ?string $model = Barang::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('kd_barang')
            ->label('Kode Barang')
            ->maxLength(12)
            ->required(),

            Forms\Components\TextInput::make('nama_barang')
            ->label('Nama Barang')
            ->maxLength(50)
            ->required(),

            Forms\Components\Select::make('satuan')
            ->options([
                "Pcs" => "Pcs",
                "Buah" => "Buah",
                "Lembar" => "Lembar",
                "Lusin" => "Lusin",
                "Unit" => "Unit",
                "Box" => "Box",
            ])
            ->searchable()
            ->native(false),

            Forms\Components\TextInput::make('harga_jual')
            ->label('Harga Jual')
            ->numeric()
            ->required(),

            Forms\Components\TextInput::make('harga_beli')
            ->label('Harga Beli')
            ->numeric()
            ->required(),

            Forms\Components\TextInput::make('stok')
            ->label('Stok')
            ->numeric()
            ->required(),

            Forms\Components\Select::make('status')
            ->options([
                "True" => "True",
                "False" => "False",
            ])
            ->searchable()
            ->native(false),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kd_barang')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('nama_barang')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('satuan')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('harga_jual')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('harga_beli')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('stok')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('status')->sortable()->searchable(),
            ])
            ->filters([
                //
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
            //
        ];
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
