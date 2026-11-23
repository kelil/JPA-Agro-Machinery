<?php

namespace App\Filament\Resources\Inquiries\Tables;

use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class InquiriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('full_name')
                    ->searchable()
                    ->sortable()
                    ->label('Client / Organization Name'),
                TextColumn::make('organization_type')
                    ->badge()
                    ->label('Type'),
                TextColumn::make('phone')
                    ->label('Phone'),
                TextColumn::make('email')
                    ->label('Email'),
                TextColumn::make('message')
                    ->limit(50)
                    ->label('Inquiry Summary'),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->label('Received At'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                DeleteAction::make(),
            ])
            ->toolbarActions([
                DeleteBulkAction::make(),
            ]);
    }
}
