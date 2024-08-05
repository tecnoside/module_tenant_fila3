<?php

declare(strict_types=1);
/**
 * ---.
 */

namespace Modules\Tenant\Filament\Resources\DomainResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Modules\Tenant\Filament\Resources\DomainResource;
use Modules\UI\Enums\TableLayoutEnum;
use Modules\UI\Filament\Actions\Table\TableLayoutToggleTableAction;

class ListDomains extends ListRecords
{
    protected static string $resource = DomainResource::class;

    public TableLayoutEnum $layoutView = TableLayoutEnum::GRID;

    protected function getTableHeaderActions(): array
    {
        return [
            TableLayoutToggleTableAction::make(),
        ];
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
