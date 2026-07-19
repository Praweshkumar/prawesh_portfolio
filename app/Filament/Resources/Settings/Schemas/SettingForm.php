<?php

namespace App\Filament\Resources\Settings\Schemas;

use Filament\Schemas\Schema;

use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\FileUpload;

class SettingForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Setting')
                    ->schema([
                        TextInput::make('key')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->live(), // Important to trigger visibility updates

                        TextInput::make('text_value')
                            ->label('Value')
                            ->visible(fn ($get): bool => !str_contains((string) $get('key'), 'image') && !str_contains((string) $get('key'), 'text')),
                            
                        Textarea::make('textarea_value')
                            ->label('Value')
                            ->rows(5)
                            ->visible(fn ($get): bool => str_contains((string) $get('key'), 'text')),

                        FileUpload::make('image_value')
                            ->label('Value')
                            ->image()
                            ->directory('settings')
                            ->visible(fn ($get): bool => str_contains((string) $get('key'), 'image')),
                    ]),
            ]);
    }
}
