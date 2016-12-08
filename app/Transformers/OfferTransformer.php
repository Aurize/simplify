<?php

namespace App\Transformers;


class OfferTransformer extends Transformer
{
    /**
     * @param $offer
     * @param array $relationships
     * @return mixed
     */
    public function transform($offer, $relationships = [])
    {
        return [
            'id' => $offer->id,
            'place_id' => $offer->place_id,
            'category_id' => $offer->category_id,
            'name' => $offer->name,
        ];
    }
}
