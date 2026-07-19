<?php

namespace App\Filament\Resources\Settings\Pages;

use App\Filament\Resources\Settings\SettingResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSetting extends EditRecord
{
    protected static string $resource = SettingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        if (str_contains($data['key'], 'image')) {
            $data['image_value'] = $data['value'];
        } elseif (str_contains($data['key'], 'text')) {
            $data['textarea_value'] = $data['value'];
        } else {
            $data['text_value'] = $data['value'];
        }
        return $data;
    }

    protected function mutateFormDataBeforeSave(array $data): array
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
