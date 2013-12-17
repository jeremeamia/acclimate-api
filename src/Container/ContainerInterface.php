<?php

namespace Acclimate\Api\Container;

/**
 * A simple, readonly interface for any container object (e.g., service locator, DIC)
 */
interface ContainerInterface
{
    /**
     * Retrieves an item from the container
     *
     * @param string $identifier The identifier or name of the item in the container
     *
     * @return mixed
     * @throws NotFoundException If there is no item in the container that matches the provided name
     */
    public function get($identifier);

    /**
     * Determines if an item is in the container
     *
     * @param string $identifier The identifier or name of the item in the container to look for
     *
     * @return bool
     */
    public function has($identifier);
}
