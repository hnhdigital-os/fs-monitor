<?php

declare(strict_types=1);

/**
 * This file is part of Laravel Console Summary.
 *
 * (c) Nuno Maduro <enunomaduro@gmail.com>
 *
 *  For the full copyright and license information, please view the LICENSE
 *  file that was distributed with this source code.
 */

namespace App\Providers;

use App\Commands\SummaryCommand;
use App\Contracts\Describer;
use App\Contracts\DescriberContract;
use Illuminate\Support\ServiceProvider;

/**
 * This is an Laravel Console Summary Service Provider implementation.
 */
class LaravelConsoleSummaryServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot()
    {
        $this->commands(SummaryCommand::class);
    }

    /**
     * {@inheritdoc}
     */
    public function register()
    {
        $this->app->singleton(DescriberContract::class, Describer::class);
    }
}
