<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TbarangResource\Pages;
use App\Filament\Resources\TbarangResource\RelationManagers;
use App\Models\Tbarang;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TbarangResource extends Resource
{
    protected static ?string $model = Tbarang::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Forms\Components\TextInput::make('kdBarang')
            ->label('Kode Barang')
            ->maxLength(12)
            ->required(),

            Forms\Components\TextInput::make('namaBarang')
            ->label('Nama Barang')
            ->maxLength(50)
            ->required(),

            Forms\Components\TextInput::make('satuan')
            ->label('Satuan')
            ->required(),

            Forms\Components\TextInput::make('hargaJual')
            ->label('Harga Jual')
            ->numeric()
            ->required(),

            Forms\Components\TextInput::make('hargaBeli')
            ->label('Harga Beli')
            ->numeric()
            ->required(),

            Forms\Components\TextInput::make('stok')
            ->label('Stok')
            ->numeric()
            ->required(),

            Forms\Components\Select::make('status')
            ->label('Status')
            ->required()
            ->options([
            'Aktif' => 'Aktif',
            'Tidak Aktif' => 'Tidak Aktif',
        ])
        ->default('Aktif'),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kdBarang')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('namaBarang')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('satuan')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('hargaJual')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('hargaBeli')->sortable()->searchable(),
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
            'index' => Pages\ListTbarangs::route('/'),
            'create' => Pages\CreateTbarang::route('/create'),
            'edit' => Pages\EditTbarang::route('/{record}/edit'),
        ];
    }
}
