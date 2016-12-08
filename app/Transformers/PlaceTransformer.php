<?php

namespace App\Transformers;


class PlaceTransformer extends Transformer
{
    /**
     * @param $user
     * @param array $relationships
     * @return mixed
     */
    public function transform($user, $relationships = [])
    {
        return [
            'id' => $user->id,
            'name' => $user->name,
        ];
    }
}
