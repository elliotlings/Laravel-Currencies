<?php

/*
 * This file is part of Laravel Currencies.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Currencies;

use DraperStudio\ServiceProvider\ServiceProvider as BaseProvider;
use DraperStudio\Currencies\Console\SeedCurrencies;
use DraperStudio\Currencies\Models\Country;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;

/**
 * Class ServiceProvider.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class ServiceProvider extends BaseProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishMigrations();
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        parent::register();

        $this->commands([SeedCurrencies::class]);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return string[]
     */
    public function provides()
    {
        return array_merge(parent::provides(), ['command.currencies.seed']);
    }

    /**
     * Get the default package name.
     *
     * @return string
     */
    public function getPackageName()
    {
        return 'currencies';
    }
}
