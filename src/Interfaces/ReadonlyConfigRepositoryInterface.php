<?php
declare(strict_types=1);

namespace CodeFoundation\FlowConfig\Interfaces;

/**
 * Defines a readonly config interface. Mostly used for type hinting.
 */
interface ReadonlyConfigRepositoryInterface
{
    /**
     * Get the config value defined by $key.
     *
     * @param string                                       $key
     *   Configuration key string.
     * @param mixed                                        $default
     *   Default to return if configuration key is not found. Default to null.
     *
     * @return mixed
     *   Returns the configuration item. If it is not found, the value specified
     *   in $default will be returned.
     */
    public function get(string $key, $default = null);

    /**
     * Defines if the implementation supports setting config values.
     *
     * @return bool
     *   TRUE if the implementation supports setting a configuration item.
     */
    public function canSet() : bool;
}
