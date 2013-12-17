<?php

namespace Acclimate\Api\Acclimator;

interface AcclimatorInterface
{
    /**
     * Registers a custom adapter for a class by mapping the fully qualified class name (FQCN) of one to the other
     *
     * @param string $adapterFqcn The FQCN of the adapter class
     * @param string $adapteeFqcn The FQCN of the class being adapted
     *
     * @return AcclimatorInterface
     */
    public function registerAdapter($adapterFqcn, $adapteeFqcn);

    /**
     * Adapts an object by wrapping it with a registered adapter class that implements an Acclimate interface
     *
     * @param mixed $object A third-party object to be acclimated
     *
     * @return mixed Whatever the specific acclimator handles. The return type should be overridden by implementors
     * @throws AdapterMissingException if there is no adapter found for the provided object
     */
    public function acclimate($object);

}
