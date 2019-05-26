<?php
namespace Pandora3\Libs\Database\Exceptions;

use Throwable;
use RuntimeException;
use Pandora3\Core\Interfaces\Exceptions\CoreException;

/**
 * Class ConnectionFailedException
 * @package Pandora3\Libs\Database\Exceptions
 */
class ConnectionFailedException extends RuntimeException implements CoreException {

	/**
	 * @param Throwable|null $previous
	 */
	public function __construct(?Throwable $previous = null) {
		$message = 'Failed to connect database';
		parent::__construct($message, E_WARNING, $previous);
	}

}