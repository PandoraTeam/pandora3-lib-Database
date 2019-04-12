<?php
namespace Pandora3\Libs\Database\Exception;

use RuntimeException;
use Pandora3\Core\Application\Exception\CoreException;

class ConnectionFailedException extends RuntimeException implements CoreException {

}