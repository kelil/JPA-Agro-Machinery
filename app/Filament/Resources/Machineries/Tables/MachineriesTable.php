<?php

namespace App\Filament\Resources\Machineries\Tables;

use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Actions\BulkActionGroup;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class MachineriesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('image')->circular(),
                TextColumn::make('title_en')
                    ->searchable()
                    ->sortable()
                    ->label('Machinery Title'),
                TextColumn::make('tag_en')
                    ->badge()
                    ->label('Category'),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->label('Added On'),
            ])
            ->filters([
                //
            ])
            ->actions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->bulkActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
