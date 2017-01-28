<?php declare(strict_types=1);

namespace NhsHd\AccidentalCt\Infrastructure\Service\Database;

use Illuminate\Database\Connection;
use Illuminate\Database\DatabaseManager;

/**
 * Class MysqlClient
 *
 * @author jrdn hannah <jrdn@jrdnhannah.co.uk>
 */
final class MysqlClient implements DbClient
{
    /** @var DatabaseManager */
    private $db;

    /**
     * MysqlClient constructor.
     *
     * @param DatabaseManager $db
     */
    public function __construct(DatabaseManager $db)
    {
        $this->db = $db;
    }

    /**
     * @return Connection
     */
    public function query(): Connection
    {
        return $this->db->connection();
    }
}