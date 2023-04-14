<?php

namespace App\Providers;

use App\Filters\Filter;
use Hammerstone\Refine\Conditions\Clause;
use Hammerstone\Refine\Frontend\Vue2Frontend;
use Hammerstone\Refine\Stabilizers\CacheStabilizer;
use Hammerstone\Refine\Stabilizers\HybridStabilizer;
use Hammerstone\Refine\Stabilizers\SessionStabilizer;
use Hammerstone\Refine\Stabilizers\UrlEncodedStabilizer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Hammerstone\Refine\Conditions\DateCondition;
use Hammerstone\Refine\Stabilizers\DatabaseStabilizer;

class RefineServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Clause::$resolveComponentUsing = app(Vue2Frontend::class);

         Filter::register([
            'user' => \App\Filters\UserFilter::class
         ]);
    }
}
