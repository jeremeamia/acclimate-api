<?php

namespace Acclimate\Api\Acclimator;

use Acclimate\Api\AcclimateException;

/**
 * This exception occurs when there is no adapter class for a provided object
 */
class AdapterMissingException extends \RuntimeException implements AcclimateException {}
