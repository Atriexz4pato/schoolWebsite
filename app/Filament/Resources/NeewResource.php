<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NeewResource\Pages;
use App\Filament\Resources\NeewResource\RelationManagers;
use App\Models\Neew;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NeewResource extends Resource
{
    protected static ?string $model = Neew::class;

    protected static ?string $navigationIcon = 'heroicon-o-megaphone';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title')
                ->label('Title')
                ->required(),
                FileUpload::make('image_url')
                ->label('Image')
                    ->directory('storage/assets/news')
                    ->image()
                ->required()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Title')->searchable(),
                Tables\Columns\ImageColumn::make('image_url')->label('Image')->circular(),
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
            'index' => Pages\ListNeews::route('/'),
            'create' => Pages\CreateNeew::route('/create'),
            'edit' => Pages\EditNeew::route('/{record}/edit'),
        ];
    }
}
