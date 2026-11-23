<?php

namespace App\Filament\Resources\Machineries\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;

class MachineryForm
{
   public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('tag_en')
                    ->required()
                    ->label('Tag (English) e.g., Tractors'),
                TextInput::make('tag_am')
                    ->required()
                    ->label('Tag (Amharic) e.g., ትራክተሮች'),
                TextInput::make('title_en')
                    ->required()
                    ->label('Title (English)'),
                TextInput::make('title_am')
                    ->required()
                    ->label('Title (Amharic)'),
                Textarea::make('desc_en')
                    ->required()
                    ->label('Description (English)'),
                Textarea::make('desc_am')
                    ->required()
                    ->label('Description (Amharic)'),
                FileUpload::make('image')
                    ->image()
                    ->disk('public')
                    ->directory('machinery')
                    ->imageEditor()
                    ->maxSize(4096)
                    ->nullable(),
            ]);
    }
}
