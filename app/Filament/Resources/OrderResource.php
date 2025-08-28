<?php

namespace App\Filament\Resources;

use App\Enums\PaymentStatus;
use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Models\Order;
use Filament\Forms;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

    protected static ?string $label = 'Pedido';

    protected static ?string $pluralLabel = 'Pedidos';

    protected static ?int $navigationSort = 1;

    public static function getNavigationGroup(): ?string
    {
        return __('Pedidos e Domínios');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->columns(12)
            ->schema([
                Section::make('Dados')
                    ->columnSpan(9)
                    ->schema([
                        Select::make('domain_id')
                            ->label('Domínio')
                            ->relationship('domain', 'title'),
                        TextInput::make('company')
                            ->label('Empresa'),
                        TextInput::make('website')
                            ->label('Nome do site'),
                    ]),
                Section::make()
                    ->columnSpan(3)
                    ->schema([
                        DatePicker::make('created_at')
                            ->label('Criado em')
                            ->disabled()
                            ->hiddenOn('create'),
                        Select::make('plan_id')
                            ->label('Plano')
                            ->relationship('plan', 'title'),
                        Select::make('payment_status')
                            ->label('Status do pagamento')
                            ->options([
                                PaymentStatus::PENDING->value => 'Aguardando pagamento',
                                PaymentStatus::PAID->value    => 'Pagamento concluído'
                            ])
                    ]),
                Section::make('Contato')
                    ->columnSpan(9)
                    ->schema([
                        TextInput::make('email')
                            ->label('E-mail'),
                        TextInput::make('phone')
                            ->label('Telefone ou Whatsapp com DDD')
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('domain.title')
                    ->label('Domínio'),
                Tables\Columns\TextColumn::make('company')
                    ->label('Empresa'),
                Tables\Columns\TextColumn::make('email')
                    ->label('E-mail'),
                Tables\Columns\TextColumn::make('payment_status')
                    ->label('Pagamento')
                    ->badge()
                    ->color(fn($state): string => match ($state->value) {
                        PaymentStatus::PENDING->value => 'gray',
                        PaymentStatus::PAID->value    => 'success'
                    })
                    ->formatStateUsing(fn($state): string => match ($state->value) {
                        PaymentStatus::PENDING->value => 'Aguardando',
                        PaymentStatus::PAID->value    => 'Concluído'
                    }),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Criado em')
                    ->dateTime('d/m/Y'),
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
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }
}
