<?php declare(strict_types=1);

namespace NhsHd\AccidentalCt\Laravel\Providers;

use Illuminate\Support\ServiceProvider;
use NhsHd\AccidentalCt\Laravel\View\Composer;

/**
 * Class ViewServiceProvider
 *
 * @author jrdn hannah <jrdn@jrdnhannah.co.uk>
 */
final class ViewServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function boot(): void
    {
        /** @var \Illuminate\Contracts\View\Factory $factory */
        $factory = $this->app->make(\Illuminate\Contracts\View\Factory::class);

        $factory->composer('dosing_requests.results', Composer\DosingRequest\ViewAllRequests::class);
    }
}