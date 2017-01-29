<?php declare(strict_types=1);

namespace NhsHd\AccidentalCt\CTDosing\Query;

use NhsHd\AccidentalCt\Infrastructure\Service\Database\DbClient;

/**
 * Class GetAllDoseRequestSubmissionsHandler
 *
 * @author jrdn hannah <jrdn@jrdnhannah.co.uk>
 */
final class GetAllDoseRequestSubmissionsHandler
{
    /** @var DbClient */
    private $client;

    /**
     * GetAllDoseRequestSubmissionsHandler constructor.
     *
     * @param DbClient $client
     */
    public function __construct(DbClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param GetAllDoseRequestSubmissions $query
     * @return \Illuminate\Support\Collection
     */
    public function handle(GetAllDoseRequestSubmissions $query)
    {
        return $this->client->query()->table('ct_dose_requests')->get();
    }
}