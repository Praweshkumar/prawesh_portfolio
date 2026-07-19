<?php

namespace App\Filament\Resources\Skills\Schemas;

use Filament\Schemas\Schema;

use Filament\Schemas\Components\Section;
use Filament\Forms\Components\TextInput;

class SkillForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Skill Details')
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('icon')
                            ->placeholder('e.g. fa-brands fa-html5')
                            ->maxLength(255),
                        TextInput::make('color')
                            ->placeholder('e.g. text-[#F16529] or text-blue-500')
                            ->maxLength(255),
                    ]),
            ]);
    }
}
