<?php

namespace App\Filament\Resources;

use App\Filament\Resources\SiteSettingResource\Pages;
use App\Models\SiteSetting;
use BackedEnum;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Resource;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SiteSettingResource extends Resource
{
    protected static ?string $model = SiteSetting::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCog6Tooth;

    protected static ?string $navigationLabel = 'Site Settings';

    protected static ?string $modelLabel = 'Site Settings';

    protected static ?string $pluralModelLabel = 'Site Settings';

    public static function form(Schema $schema): Schema
    {
        return $schema->components([
            Tabs::make('PortalSettingsTabs')
                ->tabs([
                    Tab::make('Hero Banner')
                        ->schema([
                            TextInput::make('hero_badge_en')->label('Badge (EN)'),
                            TextInput::make('hero_badge_am')->label('Badge (AM)'),
                            TextInput::make('hero_title_en')->label('Hero Headline (EN)'),
                            TextInput::make('hero_title_am')->label('Hero Headline (AM)'),
                            Textarea::make('hero_subtitle_en')->label('Hero Subtitle (EN)')->rows(3),
                            Textarea::make('hero_subtitle_am')->label('Hero Subtitle (AM)')->rows(3),
                            FileUpload::make('hero_image')
                                ->label('Hero Background Image')
                                ->image()
                                ->disk('public')
                                ->directory('hero')
                                ->imageEditor()
                                ->maxSize(6144)
                                ->columnSpanFull(),
                        ])
                        ->columns(2),

                    Tab::make('Business Scope (3 Cards)')
                        ->schema([
                            TextInput::make('cap1_title_en')->label('Card 1 Title (EN)'),
                            TextInput::make('cap1_title_am')->label('Card 1 Title (AM)'),
                            Textarea::make('cap1_desc_en')->label('Card 1 Description (EN)')->rows(2),
                            Textarea::make('cap1_desc_am')->label('Card 1 Description (AM)')->rows(2),

                            TextInput::make('cap2_title_en')->label('Card 2 Title (EN)'),
                            TextInput::make('cap2_title_am')->label('Card 2 Title (AM)'),
                            Textarea::make('cap2_desc_en')->label('Card 2 Description (EN)')->rows(2),
                            Textarea::make('cap2_desc_am')->label('Card 2 Description (AM)')->rows(2),

                            TextInput::make('cap3_title_en')->label('Card 3 Title (EN)'),
                            TextInput::make('cap3_title_am')->label('Card 3 Title (AM)'),
                            Textarea::make('cap3_desc_en')->label('Card 3 Description (EN)')->rows(2),
                            Textarea::make('cap3_desc_am')->label('Card 3 Description (AM)')->rows(2),
                        ])
                        ->columns(2),

                    Tab::make('Company & Contact')
                        ->schema([
                            TextInput::make('company_name_en')->label('Company Name (EN)'),
                            TextInput::make('company_name_am')->label('Company Name (AM)'),
                            TextInput::make('office_location_en')->label('Office Location (EN)'),
                            TextInput::make('office_location_am')->label('Office Location (AM)'),
                            TextInput::make('business_hours_en')->label('Business Hours (EN)'),
                            TextInput::make('business_hours_am')->label('Business Hours (AM)'),
                            TextInput::make('contact_phone')->label('Phone Number'),
                            TextInput::make('contact_email')->label('Email')->email(),
                        ])
                        ->columns(2),
                ])
                ->columnSpanFull(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                ImageColumn::make('hero_image')->disk('public')->label('Hero Image'),
                TextColumn::make('company_name_en')->label('Company (EN)')->searchable(),
                TextColumn::make('office_location_en')->label('Location (EN)'),
                TextColumn::make('updated_at')->dateTime()->sortable(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListSiteSettings::route('/'),
            'create' => Pages\CreateSiteSetting::route('/create'),
            'edit' => Pages\EditSiteSetting::route('/{record}/edit'),
        ];
    }
}
