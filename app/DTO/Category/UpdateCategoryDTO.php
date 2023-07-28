<?php

namespace App\DTO\Category;

use App\Http\Requests\CategoryRequest;

class UpdateCategoryDTO
{
    public function __construct(
        public int $id,
        public string $name
    ) {}

    public static function makeFromRequest(CategoryRequest $request): self
    {
        return new self($request->id, $request->name);
    }
}
