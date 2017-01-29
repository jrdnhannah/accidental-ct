<?php declare(strict_types=1);

namespace NhsHd\AccidentalCt\Laravel\Http\Controllers\Api;

use NhsHd\AccidentalCt\CTDosing\Query\GetAllDoseRequestSubmissions;
use NhsHd\AccidentalCt\Laravel\Http\Controllers\Controller;
use SmoothPhp\QueryBus\QueryBus;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class ResultsApiController
 *
 * @author jrdn hannah <jrdn@jrdnhannah.co.uk>
 */
final class ResultsApiController extends Controller
{
    /** @var QueryBus */
    private $queryBus;

    /**
     * ResultsApiController constructor.
     *
     * @param QueryBus $queryBus
     */
    public function __construct(QueryBus $queryBus)
    {
        $this->queryBus = $queryBus;
    }

    /**
     * @return Response
     */
    public function showAllResults(): Response
    {
        return response()->json($this->queryBus->query(new GetAllDoseRequestSubmissions));
    }
}