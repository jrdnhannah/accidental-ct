<?php declare(strict_types=1);

namespace NhsHd\AccidentalCt\Laravel\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class RedirectToLogin
 *
 * @author jrdn hannah <jrdn@jrdnhannah.co.uk>
 */
final class RedirectToLogin
{
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::guard()->check()) {
            return redirect()->route('auth.login');
        }

        return $next($request);
    }
}