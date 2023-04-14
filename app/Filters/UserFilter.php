<?php

namespace App\Filters;

use App\Conditions\UserOptionCondition;
use App\Models\User;
use Hammerstone\Refine\Conditions\OptionCondition;
use Hammerstone\Refine\Conditions\TextCondition;

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
            UserOptionCondition::make(),
        ];
    }
}
