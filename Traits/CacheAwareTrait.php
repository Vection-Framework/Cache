<?php

/**
 * This file is part of the Vection project.
 * Visit project at https://www.vection.org
 *
 * (c) Vection <project@vection.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Vection\Component\Cache\Traits;

use Vection\Contracts\Cache\CacheInterface;

/**
 * Trait CacheAwareTrait
 *
 * @package Vection\Component\Cache\Traits
 */
trait CacheAwareTrait
{
    /** @var CacheInterface */
    protected $cache;

    /**
     * @return CacheInterface
     */
    public function getCache(): CacheInterface
    {
        return $this->cache;
    }

    /**
     * @param CacheInterface $cache
     */
    public function setCache(CacheInterface $cache): void
    {
        $this->cache = $cache;
    }

}