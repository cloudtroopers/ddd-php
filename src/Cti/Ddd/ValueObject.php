<?php

/*
 * This file is part of the DDD for PHP.
 *
 * (c) Cloudtroopers <office@cloudtroopers.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cti\Ddd;

interface ValueObject
{
    public function sameValueAs($other);
}
