<?php

namespace App\Transformers;


class ReviewTransformer extends Transformer
{
    /**
     * @param $review
     * @param array $relationships
     * @return mixed
     */
    public function transform($review, $relationships = [])
    {
        return [
            'offer_id' => $review->offer_id,
            'title' => $review->title,
            'comment' => $review->comment,
        ];
    }
}
