<?php

namespace App\Repository\Product;

use App\DTO\Product\StoreProductDTO;
use App\DTO\Product\UpdateProductDTO;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

interface ProductRepositoryInterface
{
    public function get(): Collection;
    public function show(int $id): Product;
    public function store(StoreProductDTO $storeProductDTO): void;
    public function update(UpdateProductDTO $updateProductDTO, int $id): void;
    public function delete(int $id): void;
}
