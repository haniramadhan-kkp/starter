<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InovationResource\Pages;
use App\Filament\Resources\InovationResource\RelationManagers;
use App\Models\Inovation;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class InovationResource extends Resource
{
    protected static ?string $model = Inovation::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul'),
                Forms\Components\TextInput::make('tahun'),
                Forms\Components\TextInput::make('pemberi')->label('Pemberi Penghargaan'),
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->label('User')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('judul'),
                Tables\Columns\TextColumn::make('tahun'),
                Tables\Columns\TextColumn::make('pemberi')->label('Pemberi Penghargaan'),
                Tables\Columns\TextColumn::make('user_id')->label('User'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListInovations::route('/'),
            'create' => Pages\CreateInovation::route('/create'),
            'edit' => Pages\EditInovation::route('/{record}/edit'),
        ];
    }    
}
