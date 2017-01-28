<?php declare(strict_types=1);

namespace NhsHd\AccidentalCt\Laravel\Http\Request\Auth;

use NhsHd\AccidentalCt\Laravel\Http\Request\Request;

/**
 * Class Registration
 *
 * @author jrdn hannah <jrdn@jrdnhannah.co.uk>
 */
final class Registration extends Request
{
    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'name'     => 'required|string',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required',
        ];
    }
}