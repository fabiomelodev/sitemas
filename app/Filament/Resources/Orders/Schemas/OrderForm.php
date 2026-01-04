<?php

namespace App\Filament\Resources\Orders\Schemas;

use App\Enums\PaymentStatus;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class OrderForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('uuid')
                    ->label('UUID')
                    ->required(),
                TextInput::make('step_current'),
                Select::make('payment_status')
                    ->options(PaymentStatus::class)
                    ->default('pending')
                    ->required(),
                Select::make('customer_id')
                    ->relationship('customer', 'id'),
                Select::make('domain_id')
                    ->relationship('domain', 'name'),
                Select::make('plan_id')
                    ->relationship('plan', 'title'),
                Select::make('template_id')
                    ->relationship('template', 'title'),
            ]);
    }
}
