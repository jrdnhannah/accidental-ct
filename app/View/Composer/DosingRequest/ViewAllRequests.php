<?php declare(strict_types=1);

namespace NhsHd\AccidentalCt\Laravel\View\Composer\DosingRequest;

use Illuminate\Contracts\View\View;
use NhsHd\AccidentalCt\CTDosing\Query\GetAllDoseRequestSubmissions;
use NhsHd\AccidentalCt\Laravel\View\ViewComposer;
use SmoothPhp\QueryBus\QueryBus;

/**
 * Class ViewAllRequests
 *
 * @author jrdn hannah <jrdn@jrdnhannah.co.uk>
 */
final class ViewAllRequests implements ViewComposer
{
    /** @var QueryBus */
    private $queryBus;

    /**
     * ViewAllRequests constructor.
     *
     * @param QueryBus $queryBus
     */
    public function __construct(QueryBus $queryBus)
    {
        $this->queryBus = $queryBus;
    }

    /**
     * @param View $view
     * @return void
     */
    public function compose(View $view): void
    {
        $view->with('requests', $this->queryBus->query(new GetAllDoseRequestSubmissions));
    }
}