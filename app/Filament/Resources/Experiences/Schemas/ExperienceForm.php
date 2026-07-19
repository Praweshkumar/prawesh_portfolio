<?php

namespace App\Filament\Resources\Experiences\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Grid;

class ExperienceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Job Details')
                    ->schema([
                        Grid::make(2)->schema([
                            TextInput::make('company')->required()->maxLength(255),
                            TextInput::make('role')->required()->maxLength(255),
                            Select::make('type')->options([
                                'Full-time' => 'Full-time',
                                'Part-time' => 'Part-time',
                                'Internship' => 'Internship',
                                'Contract' => 'Contract',
                            ])->required(),
                            TextInput::make('location')->maxLength(255),
                        ]),
                    ]),
                    
                Section::make('Timeline')
                    ->schema([
                        Grid::make(2)->schema([
                            TextInput::make('start_date')->required()->placeholder('e.g. APR 2026'),
                            TextInput::make('end_date')->placeholder('e.g. PRESENT'),
                            Toggle::make('is_current')->label('Currently Working Here?'),
                        ]),
                    ]),
                    
                Section::make('Additional Info')
                    ->schema([
                        Textarea::make('description')->columnSpanFull(),
                        TagsInput::make('technologies')->placeholder('Add a technology and press enter'),
                        Select::make('theme_color')->options([
                            'blue' => 'Blue',
                            'purple' => 'Purple',
                            'teal' => 'Teal',
                            'orange' => 'Orange',
                        ])->default('blue'),
                        FileUpload::make('logo_path')->image()->directory('companies'),
                    ]),
            ]);
    }
}
