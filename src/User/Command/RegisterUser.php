<?php declare(strict_types=1);

namespace NhsHd\AccidentalCt\User\Command;

use SmoothPhp\CommandBus\BaseCommand;

/**
 * Class RegisterUser
 *
 * @author jrdn hannah <jrdn@jrdnhannah.co.uk>
 */
final class RegisterUser extends BaseCommand
{
    /** @var string */
    private $userId;
    /** @var string */
    private $email;
    /** @var string */
    private $password;
    /** @var string */
    private $name;

    /**
     * RegisterUser constructor.
     *
     * @param string $userId
     * @param string $name
     * @param string $email
     * @param string $password
     */
    public function __construct(string $userId, string $name, string $email, string $password)
    {
        $this->userId = $userId;
        $this->email = $email;
        $this->password = $password;
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getUserId(): string
    {
        return $this->userId;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}