<?php

namespace Acclimate\Api\Container;

use Acclimate\Api\AcclimateException;

/**
 * This exception occurs when an item requested from the container is not found
 */
class NotFoundException extends \RuntimeException implements AcclimateException {}
