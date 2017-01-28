<?php

namespace NhsHd\AccidentalCt\Laravel\Http\Controllers\Auth;

use Illuminate\Http\Request;
use NhsHd\AccidentalCt\Laravel\Http\Request\Auth\Registration;
use NhsHd\AccidentalCt\Laravel\User;
use NhsHd\AccidentalCt\Laravel\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use NhsHd\AccidentalCt\User\Command\RegisterUser;
use SmoothPhp\Contracts\CommandBus\CommandBus;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /** @var CommandBus */
    private $bus;

    /**
     * Create a new controller instance.
     *
     * @param CommandBus $bus
     */
    public function __construct(CommandBus $bus)
    {
        $this->middleware('guest');
        $this->bus = $bus;
    }

    /**
     * Handle a registration request for the application.
     *
     * @param Registration $request
     * @return \Illuminate\Http\Response
     */
    public function register(Registration $request): \Illuminate\Http\Response
    {
        $this->bus->execute(new RegisterUser(
            uuid(),
            $request->request->get('email'),
            $request->request->get('password')
        ));

        return redirect()->route('');
    }
}
