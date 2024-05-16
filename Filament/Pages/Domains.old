<?php
/**
 * @see https://laraveldaily.com/post/filament-load-table-data-from-3rd-party-api
 * @see https://filamentphp.com/community/how-to-consume-an-external-api-with-filament-tables
 */

declare(strict_types=1);

namespace Modules\Tenant\Filament\Pages;

use Filament\Pages\Page;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Http;
use Filament\Forms\Contracts\HasForms;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Contracts\HasTable;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Tables\Concerns\InteractsWithTable;

class Domains extends Page implements HasTable
{
    use InteractsWithTable;
    

    protected static ?string $navigationIcon = 'heroicon-o-globe-alt';

    protected static string $view = 'tenant::filament.pages.dashboard';

    public function table(Table $table): Table
    {
        $url=config('app.url') . '/api/subscription';
        $url = 'https://jsonplaceholder.typicode.com/posts';
        $apiCall = Http::asJson()
            ->acceptJson()
            ->get($url);

        return $table
            //->query(Product::query())
            ->viewData($apiCall->json())
            ->columns([
                TextColumn::make('name'),
            ])
            ->filters([
                // ...
            ])
            ->actions([
                // ...
            ])
            ->bulkActions([
                // ...
            ]);
    }
}
