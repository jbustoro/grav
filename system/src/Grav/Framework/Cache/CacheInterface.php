<?php
/**
 * @package    Grav\Framework\Cache
 *
 * @copyright  Copyright (C) 2014 - 2017 RocketTheme, LLC. All rights reserved.
 * @license    MIT License; see LICENSE file for details.
 */

namespace Grav\Framework\Cache;

use Psr\SimpleCache\CacheInterface as SimpleCacheInterface;

/**
 * PSR-16 compatible "Simple Cache" interface.
 * @package Grav\Framework\Object\Storage
 */
interface CacheInterface extends SimpleCacheInterface
{
    public function doGet($key);
    public function doSet($key, $value, $ttl);
    public function doDelete($key);
    public function doClear();
    public function doGetMultiple($keys);
    public function doSetMultiple($values, $ttl);
    public function doDeleteMultiple($keys);
    public function doHas($key);
}
