<?php

namespace App\Service;

use App\DTO\Product\StoreProductDTO;
use App\DTO\Product\UpdateProductDTO;
use App\Models\Product;
use App\Repository\Product\ProductRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class ProductService
{
    public function __construct(
        protected ProductRepositoryInterface $productRepositoryInterface
    ) { }

    public function get(): Collection
    {
        return $this->productRepositoryInterface->get();
    }

    public function show(int $id): Product
    {
        return $this->productRepositoryInterface->show($id);
    }

    public function delete(int $id): void
    {
        $this->productRepositoryInterface->delete($id);
    }

    public function store(StoreProductDTO $storeProductDTO): void
    {
        $this->productRepositoryInterface->store($storeProductDTO);
    }

    public function update(UpdateProductDTO $updateProductDTO, int $id): void
    {
        $this->productRepositoryInterface->update($updateProductDTO, $id);
    }
}
