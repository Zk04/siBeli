<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DMasukResource\Pages;
use App\Filament\Resources\DMasukResource\RelationManagers;
use App\Models\d_masuk;
use App\Models\Masuk;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class DMasukResource extends Resource
{
    protected static ?string $model = d_masuk::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            Forms\Components\TextInput::make('id_masuk')
                ->label('ID Masuk')
                ->maxLength(12)
                ->required(),
            Select::make('kd_masuk')
                ->relationship('masuk', 'kd_masuk')
                ->getOptionLabelUsing(fn ($record) => $record->kd_masuk . ' - ' . $record->kd_masuk)
                ->label('Kode Masuk')
                ->required()
                ->searchable()
                ->placeholder('Select Kode Masuk'),
            Forms\Components\TextInput::make('kd_barang_beli')
                ->label('Kode Barang Beli')
                ->maxLength(12)
                ->required(),
            Forms\Components\TextInput::make('jumlah')
                ->numeric()
                ->required()
                ->label('Jumlah'),
            Forms\Components\TextInput::make('subtotal')
                ->numeric()
                ->required()
                ->label('Subtotal'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id_masuk')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('masuk.kd_masuk')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('kd_barang_beli')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('jumlah')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('subtotal')->sortable()->searchable(),
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
            'index' => Pages\ListDMasuks::route('/'),
            'create' => Pages\CreateDMasuk::route('/create'),
            'edit' => Pages\EditDMasuk::route('/{record}/edit'),
        ];
    }
}
