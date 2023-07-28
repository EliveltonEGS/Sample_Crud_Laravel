<?php

namespace App\DTO\Product;

use App\Http\Requests\ProductRequest;

class UpdateProductDTO
{
    public function __construct(
        public string $name,
        public string $ean,
        public int $amount,
        public float $price,
        public int $category_id
    ) { }

    public static function makeFromRequest(ProductRequest $request): self
    {
        $price = (float) $request->price;
        return new self(
            $request->name,
            $request->ean,
            $request->amount,
            (float) $price,
            $request->category_id
        );
    }
}
