<?php

namespace Jasny\Meta;

use Jasny\Meta\MetaClass;

/**
 * Caching MetaClass
 */
interface Cache
{
    /**
     * Store meta in cache
     *
     * @param string      $key
     * @param MetaClass   $meta
     * @return void
     */
    public function set($key, MetaClass $meta);

    /**
     * Get meta from cache
     *
     * @param string $key
     * @return MetaClass|null
     */
    public function get($key);

    /**
     * Check if meta exists in cache
     *
     * @param string $key
     * @return boolean
     */
    public function has($key);
}
