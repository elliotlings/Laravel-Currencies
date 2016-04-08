<?php

/*
 * This file is part of Laravel Currencies.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Currencies\Console;

use DB;
use DraperStudio\Currencies\Models\Currency;
use Illuminate\Console\Command;

/**
 * Class SeedCurrencies.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class SeedCurrencies extends Command
{
    /**
     * @var string
     */
    protected $signature = 'currencies:seed';

    /**
     * @var string
     */
    protected $description = 'Command description.';

    public function fire()
    {
        DB::table('currencies')->delete();

        $data = base_path('vendor/draperstudio/laravel-currencies/resources/currencies.json');
        $data = json_decode(file_get_contents($data), true);

        foreach ($data as $country) {
            Currency::create($country);
        }

        $this->info('Currencies seeded!');
    }
}
