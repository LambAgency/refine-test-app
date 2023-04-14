<?php

namespace App\Conditions;

use App\Models\User;
use Hammerstone\Refine\Conditions\OptionCondition;

class UserOptionCondition extends OptionCondition
{
    public $id = 'User';

    public $attribute = 'user_id';

    protected function boot()
    {
        parent::boot();

        $this->options = User::query()->pluck('name', 'id')->toArray();
    }
}
