<?php

namespace Modules\Tenant\Filament\Resources\DomainResource\Pages;

use Modules\Tenant\Filament\Resources\DomainResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDomain extends EditRecord
{
    protected static string $resource = DomainResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
