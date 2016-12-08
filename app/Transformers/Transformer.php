<?php

namespace App\Transformers;


abstract class Transformer
{
    /**
     * @param $items
     * @return array
     */
    public function transformCollection($items)
    {
        $collection = collect();

        foreach ($items as $item) {
            $collection->push($this->transform($item));
        }

        return $collection;
    }

    /**
     * @param $item
     * @param $relationships
     * @return mixed
     */
    public abstract function transform($item, $relationships = []);
}
