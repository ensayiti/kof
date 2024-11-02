<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PendaftarBalikpapanResource\Pages;
use App\Filament\Resources\PendaftarBalikpapanResource\RelationManagers;
use App\Models\PendaftarBalikpapan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PendaftarBalikpapanResource extends Resource
{
    protected static ?string $model = PendaftarBalikpapan::class;

    protected static ?string $navigationIcon = 'heroicon-s-users';

    protected static ?int $navigationSort = 2;

    protected static ?string $navigationLabel = 'Balikpapan';

    protected static ?string $navigationGroup = 'Database';

    protected static ?string $modelLabel = "Balikpapan";

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nama')
                    ->required(),
                Forms\Components\DatePicker::make('tanggal_lahir')
                    ->label('Tanggal Lahir')
                    ->required(),
                Forms\Components\TextInput::make('no_handphone')
                    ->label('No. Whatsapp')
                    ->required()
                    ->tel()
                    ->telRegex('/^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\.\/0-9]*$/'),
                Forms\Components\TextInput::make('email')
                    ->label('Email')
                    ->required()
                    ->email(),
                Forms\Components\Select::make('daerah')
                    ->label('Asal Daerah')
                    ->required()
                    ->options([
                        'balikpapan' => 'BALIKPAPAN',
                        'samarinda' => 'SAMARINDA',
                        'bontang' => 'BONTANG',
                        'kutai_kartanegara' => 'KUTAI KARTANEGARA',
                        'kutai_timur' => 'KUTAI TIMUR',
                        'kutai_barat' => 'KUTAI BARAT',
                        'paser' => 'PASER',
                        'berau' => 'BERAU',
                        'penajam_paser_utara' => 'PENAJAM PASER UTARA',
                        'mahakam_ulu' => 'MAHAKAM ULU',
                    ]),
                Forms\Components\Textarea::make('pesan')
                    ->label('Harapan untuk Kaltim ke depan')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama'),
                Tables\Columns\TextColumn::make('tanggal_lahir')
                    ->label('Tanggal Lahir'),
                Tables\Columns\TextColumn::make('no_handphone')
                    ->label('No. Whatsapp'),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email'),
                Tables\Columns\TextColumn::make('daerah')
                    ->label('Asal Daerah'),
                Tables\Columns\TextColumn::make('pesan')
                    ->label('Harapan untuk Kaltim ke depan')
                    ->wrap()
            ])
            ->defaultPaginationPageOption(25)
            ->paginated([25, 50, 100, 200, 500])

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
            'index' => Pages\ListPendaftarBalikpapans::route('/'),
            'create' => Pages\CreatePendaftarBalikpapan::route('/create'),
            'edit' => Pages\EditPendaftarBalikpapan::route('/{record}/edit'),
        ];
    }
}
