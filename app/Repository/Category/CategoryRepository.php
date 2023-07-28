<?php

namespace App\Repository\Category;

use App\DTO\Category\StoreCategoryDTO;
use App\DTO\Category\UpdateCategoryDTO;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function __construct(
        protected Category $category
    ) {}

    public function get(): Collection
    {
        return $this->category->orderBy('id', 'desc')->get();
    }

    public function show(int $id): Category
    {
        return $this->category->find($id);
    }

    public function store(StoreCategoryDTO $storeCategoryDTO): void
    {
        $this->category->create((array) $storeCategoryDTO);
    }

    public function update(UpdateCategoryDTO $updateCategoryDTO): void
    {
        $category = $this->category->find($updateCategoryDTO->id);
        $category->update((array) $updateCategoryDTO);
    }

    public function delete(int $id): void
    {
        $this->category->destroy($id);
    }
}
