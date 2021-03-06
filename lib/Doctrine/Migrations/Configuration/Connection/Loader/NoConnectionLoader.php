<?php

declare(strict_types=1);

namespace Doctrine\Migrations\Configuration\Connection\Loader;

use Doctrine\DBAL\Connection;
use Doctrine\Migrations\Configuration\Connection\ConnectionLoader;
use Doctrine\Migrations\Tools\Console\Exception\ConnectionNotSpecified;

/**
 * @internal
 */
final class NoConnectionLoader implements ConnectionLoader
{
    public function getConnection() : Connection
    {
        throw ConnectionNotSpecified::new();
    }
}
