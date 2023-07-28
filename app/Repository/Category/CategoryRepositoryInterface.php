<?php

namespace App\Repository\Category;

use App\DTO\Category\StoreCategoryDTO;
use App\DTO\Category\UpdateCategoryDTO;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;

interface CategoryRepositoryInterface
{
    public function get(): Collection;
    public function show(int $id): Category;
    public function store(StoreCategoryDTO $storeCategoryDTO): void;
    public function update(UpdateCategoryDTO $updateCategoryDTO): void;
    public function delete(int $id): void;
}
