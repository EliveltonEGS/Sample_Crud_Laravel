<?php

namespace App\DTO\Category;

use App\Http\Requests\CategoryRequest;

class StoreCategoryDTO
{
    public function __construct(
        public string $name
    ) {}

    public static function makeFromRequest(CategoryRequest $request): self
    {
        return new self($request->name);
    }
}
