<?php

namespace App\Transformers;


class VisitTransformer extends Transformer
{
    /**
     * @param $review
     * @param array $relationships
     * @return mixed
     */
    public function transform($review, $relationships = [])
    {
        return [
            'id' => $review->id,
            'name' => $review->name,
        ];
    }
}
