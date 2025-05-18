<?php

namespace App\Filament\Resources\StudentResource\Pages;

use App\Filament\Resources\StudentResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateStudent extends CreateRecord
{
    protected static string $resource = StudentResource::class;

        protected function mutateFormDataBeforeCreate(array $data): array
    {
        // Set users_id otomatis sebelum simpan
        $data['users_id'] = auth()->id();

        return $data;
    }
}
