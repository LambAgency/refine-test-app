<?php

namespace App\Filters;

use App\Models\User;
use Hammerstone\Refine\Conditions\OptionCondition;
use Hammerstone\Refine\Conditions\TextCondition;
use Hammerstone\Refine\Filter;

class UserFilter extends Filter
{
    public function initialQuery()
    {
        return User::query();
    }

    public function conditions()
    {
        return [
            TextCondition::make('name'),
            TextCondition::make('email'),
        ];
    }
}
{

}
