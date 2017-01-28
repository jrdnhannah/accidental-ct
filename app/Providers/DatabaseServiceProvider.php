<?php declare(strict_types=1);

namespace NhsHd\AccidentalCt\Laravel\Providers;

use Illuminate\Support\ServiceProvider;
use NhsHd\AccidentalCt\Infrastructure\Service\Database\DbClient;
use NhsHd\AccidentalCt\Infrastructure\Service\Database\MysqlClient;

/**
 * Class DatabaseServiceProvider
 *
 * @author jrdn hannah <jrdn@jrdnhannah.co.uk>
 */
final class DatabaseServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function register(): void
    {
        $this->app->bind(DbClient::class, MysqlClient::class);
    }
}