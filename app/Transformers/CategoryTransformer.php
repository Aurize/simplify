<?php

namespace App\Transformers;


class CategoryTransformer extends Transformer
{
    /**
     * @param $category
     * @param array $relationships
     * @return mixed
     */
    public function transform($category, $relationships = [])
    {
        return [
            'id' => $category->id,
            'name' => $category->name,
        ];
    }
}
