<?php

namespace App\Filament\Resources\Education\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Grid;

class EducationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Education Details')
                    ->schema([
                        Grid::make(2)->schema([
                            TextInput::make('institution')->required()->maxLength(255),
                            TextInput::make('degree')->required()->maxLength(255),
                            TextInput::make('type')->placeholder('e.g. UG Degree'),
                            TextInput::make('location')->maxLength(255),
                        ]),
                    ]),
                    
                Section::make('Timeline & Score')
                    ->schema([
                        Grid::make(3)->schema([
                            TextInput::make('start_date')->required()->placeholder('e.g. 2023'),
                            TextInput::make('end_date')->placeholder('e.g. 2026 (Expected)'),
                            TextInput::make('meta_info')->placeholder('e.g. CGPA: 7.2 / 10.0'),
                        ]),
                    ]),
                    
                Section::make('Additional Info')
                    ->schema([
                        Textarea::make('description')->columnSpanFull(),
                        TagsInput::make('coursework')->placeholder('Add coursework/subject'),
                        Select::make('icon_type')->options([
                            'university' => 'University (College)',
                            'school' => 'School (10th/12th)',
                        ])->default('university'),
                        Select::make('theme_color')->options([
                            'blue' => 'Blue',
                            'purple' => 'Purple',
                        ])->default('blue'),
                    ]),
            ]);
    }
}
