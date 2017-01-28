<?php declare(strict_types=1);

namespace NhsHd\AccidentalCt\User\Command;

use Carbon\Carbon;
use Illuminate\Auth\SessionGuard;
use Illuminate\Contracts\Auth\Guard;
use NhsHd\AccidentalCt\Infrastructure\Service\Database\DbClient;
use SmoothPhp\QueryBus\QueryBus;

/**
 * Class RegisterUserHandler
 *
 * @author jrdn hannah <jrdn@jrdnhannah.co.uk>
 */
final class RegisterUserHandler
{
    /** @var DbClient */
    private $client;
    /** @var Guard */
    private $guard;

    /**
     * RegisterUserHandler constructor.
     *
     * @param DbClient $client
     * @param Guard    $guard
     */
    public function __construct(DbClient $client, Guard $guard)
    {
        $this->client = $client;
        $this->guard = $guard;
    }

    /**
     * @param RegisterUser $command
     * @return void
     */
    public function handle(RegisterUser $command): void
    {
        $this->client->query()->table('users')->insert([
            'user_id'       => $command->getUserId(),
            'email'         => $command->getEmail(),
            'password'      => $encryptedPass = bcrypt($command->getPassword()),
            'created_at'    => Carbon::now(),
            'updated_at'    => Carbon::now(),
        ]);

        if ($this->guard instanceof SessionGuard) {
            $this->guard->attempt(['email' => $command->getEmail(), 'password' => $encryptedPass]);
        }
    }
}