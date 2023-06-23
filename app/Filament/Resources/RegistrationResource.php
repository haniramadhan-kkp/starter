<?php

namespace App\Filament\Resources;

use App\Filament\Resources\RegistrationResource\Pages;
use App\Filament\Resources\RegistrationResource\RelationManagers;
use App\Models\Registration;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class RegistrationResource extends Resource
{
    protected static ?string $model = Registration::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_lengkap'),
                Forms\Components\TextInput::make('gelar_depan'),
                Forms\Components\TextInput::make('gelar_belakang'),
                Forms\Components\TextInput::make('tempat_lahir'),
                Forms\Components\Textarea::make('alamat_domisili'),
                Forms\Components\TextInput::make('kabupaten_domisili'),
                Forms\Components\TextInput::make('provinsi_domisili'),
                Forms\Components\TextInput::make('pekerjaan'),
                Forms\Components\TextInput::make('bidang_keahlian'),
                Forms\Components\Select::make('is_lama')
                    ->options([
                        1 => 'Lama',
                        0 => 'Baru'
                    ])
                    ->label('Apakah anggota lama?'),
                Forms\Components\Select::make('is_approved')
                    ->options([
                        1 => 'Disetujui',
                        0 => 'Tidak disetujui'
                    ])
                    ->label('Apakah pengguna disetujui keanggotaannya?'),
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
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
            'index' => Pages\ListRegistrations::route('/'),
            'create' => Pages\CreateRegistration::route('/create'),
            'edit' => Pages\EditRegistration::route('/{record}/edit'),
        ];
    }    
}
