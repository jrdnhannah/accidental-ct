<?php declare(strict_types=1);

namespace NhsHd\AccidentalCt\Infrastructure\Service\Database;

use Illuminate\Database\Connection;

/**
 * Interface DbClient
 *
 * @author jrdn hannah <jrdn@jrdnhannah.co.uk>
 */
interface DbClient
{
    /**
     * @return Connection
     */
    public function query(): Connection;
}