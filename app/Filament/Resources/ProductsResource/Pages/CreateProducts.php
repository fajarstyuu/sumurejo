<?php

namespace App\Filament\Resources\ProductsResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use App\Filament\Resources\ProductsResource;

class CreateProducts extends CreateRecord
{
    protected static string $resource = ProductsResource::class;
}
