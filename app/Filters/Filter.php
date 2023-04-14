<?php

namespace App\Filters;

abstract class Filter extends \Hammerstone\Refine\Filter
{

    public function toArray()
    {
        return [
            'type' => static::getAlias(),
            'blueprint' => $this->getBlueprint(),
            'conditions' => $this->conditionsToArray(),
            'stable_id' => $this->toOptionalStableId(),
            'errors' => $this->validationErrors
        ];
    }
}
