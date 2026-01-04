<?php

namespace App\Filament\Resources;

use App\Filament\Resources\NicheResource\Pages;
use App\Filament\Resources\NicheResource\RelationManagers;
use App\Models\Niche;
use Filament\Forms;
use Filament\Forms\Components\CheckboxList;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class NicheResource extends Resource
{
    protected static ?string $model = Niche::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->columns(12)
            ->schema([
                Section::make()
                    ->columnSpan(9)
                    ->schema([
                        TextInput::make('title')
                            ->label('Título')
                    ]),
                Section::make('Modelos')
                    ->columnSpan(9)
                    ->schema([
                        CheckboxList::make('templates')
                            ->label('Modelos')
                            ->relationship('templates', 'title')
                    ]),
                Section::make('Planos')
                    ->columnSpan(9)
                    ->schema([
                        CheckboxList::make('plans')
                            ->label('Planos')
                            ->relationship('plans', 'title')
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->label('Título')
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
            'index' => Pages\ListNiches::route('/'),
            'create' => Pages\CreateNiche::route('/create'),
            'edit' => Pages\EditNiche::route('/{record}/edit'),
        ];
    }
}
