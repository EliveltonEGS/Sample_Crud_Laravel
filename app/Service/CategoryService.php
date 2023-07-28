<?php

namespace App\Service;

use App\Models\Category;
use App\Repository\Category\CategoryRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use App\DTO\Category\StoreCategoryDTO;
use App\DTO\Category\UpdateCategoryDTO;

class CategoryService
{
    public function __construct(
        protected CategoryRepositoryInterface $categoryRepositoryInterface
    ) {}

    public function get(): Collection
    {
        return $this->categoryRepositoryInterface->get();
    }

    public function show(int $id): Category
    {
        return $this->categoryRepositoryInterface->show($id);
    }

    public function store(StoreCategoryDTO $storeCategoryDTO): void
    {
        $this->categoryRepositoryInterface->store($storeCategoryDTO);
    }

    public function update(UpdateCategoryDTO $updateCategoryDTO): void
    {
        $this->categoryRepositoryInterface->update($updateCategoryDTO);
    }

    public function delete(int $id): void
    {
        $this->categoryRepositoryInterface->delete($id);
    }
}
