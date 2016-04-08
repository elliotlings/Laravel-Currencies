<?php

/*
 * This file is part of Laravel Currencies.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Currencies\Models;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $fillable = [
        'name', 'iso', 'symbol', 'units', 'format'
    ];

    protected $casts = [
        'iso' => 'array',
        'symbol' => 'array',
        'units' => 'array',
    ];
}
