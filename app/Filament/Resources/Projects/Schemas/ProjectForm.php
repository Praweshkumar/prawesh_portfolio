<?php

namespace App\Filament\Resources\Projects\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;

class ProjectForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Project Details')
                    ->schema([
                        TextInput::make('title')->required()->maxLength(255),
                        Textarea::make('description')->required()->columnSpanFull(),
                        TagsInput::make('tags')->placeholder('Add a tag (e.g. Laravel, React)'),
                        TextInput::make('demo_link')->url()->maxLength(255),
                        TextInput::make('github_link')->url()->maxLength(255),
                        FileUpload::make('image_path')->image()->directory('projects'),
                    ]),
            ]);
    }
}
