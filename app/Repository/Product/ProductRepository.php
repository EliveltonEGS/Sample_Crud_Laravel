<?php

namespace App\Repository\Product;

use App\DTO\Product\StoreProductDTO;
use App\DTO\Product\UpdateProductDTO;
use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class ProductRepository implements ProductRepositoryInterface
{
    public function __construct(
        protected Product $product
    ) { }

    public function get(): Collection
    {
        return $this->product->orderBy('id', 'desc')->get();
    }

    public function show(int $id): Product
    {
        return $this->product->find($id);
    }

    public function delete(int $id): void
    {
        $this->product->destroy($id);
    }

    public function store(StoreProductDTO $storeProductDTO): void
    {
        $this->product->create((array) $storeProductDTO);
    }

    public function update(UpdateProductDTO $updateProductDTO, int $id): void
    {
       $this->product->find($id)->update((array) $updateProductDTO);
    }
}
