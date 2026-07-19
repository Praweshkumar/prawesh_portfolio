<?php

namespace App\Filament\Resources\Settings\Pages;

use App\Filament\Resources\Settings\SettingResource;
use Filament\Resources\Pages\CreateRecord;

class CreateSetting extends CreateRecord
{
    protected static string $resource = SettingResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        if (str_contains($data['key'], 'image')) {
            $data['value'] = $data['image_value'] ?? null;
        } elseif (str_contains($data['key'], 'text')) {
            $data['value'] = $data['textarea_value'] ?? null;
        } else {
            $data['value'] = $data['text_value'] ?? null;
        }
        
        unset($data['image_value'], $data['textarea_value'], $data['text_value']);
        
        return $data;
    }
}
