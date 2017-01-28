<?php declare(strict_types=1);

namespace NhsHd\AccidentalCt\CTDosing\Command;

use Carbon\Carbon;
use NhsHd\AccidentalCt\Infrastructure\Service\Database\DbClient;

/**
 * Class CompletePatientCtDoseRequestFormHandler
 *
 * @author jrdn hannah <jrdn@jrdnhannah.co.uk>
 */
final class CompletePatientCtDoseRequestFormHandler
{
    /** @var DbClient */
    private $client;

    /**
     * CompletePatientCtDoseRequestFormHandler constructor.
     *
     * @param DbClient $client
     */
    public function __construct(DbClient $client)
    {
        $this->client = $client;
    }

    /**
     * @param CompletePatientCtDoseRequestForm $command
     * @return void
     * @throws \InvalidArgumentException
     */
    public function handle(CompletePatientCtDoseRequestForm $command): void
    {
        $this->client->query()->table('ct_dose_requests')->insert([
            'request_id'                => uuid(),
            'requester_id'              => $command->getRequesterId(),
            'ct_scanner_name'           => $command->getCtScannerName(),
            'patient_name'              => $command->getPatientName(),
            'patient_dob'               => Carbon::createFromFormat('d/m/Y', $command->getPatientDoB()),
            'patient_id'                => $command->getPatientId(),
            'patient_sex'               => $command->getPatientSex(),
            'request_reason'            => $command->getRequestReason(),
            'scan_protocol'             => $command->getScanProtocol(),
            'kv'                        => $command->getKv(),
            'mA'                        => $command->getMA(),
            'ma_modulation'             => $command->hasMaModulation(),
            'rotation_time'             => $command->getRotationTime(),
            'collimation'               => $command->getCollimation(),
            'irradiated_slice_width'    => $command->getIrradiatedSliceWidth(),
            'is_helical_scan'           => $command->isHelicalScan(),
            'couch_feed_per_rotation'   => $command->getCouchFeedPerRotation(),
            'couch_increment'           => $command->getCouchIncrement(),
            'pitch'                     => $command->getPitch(),
            'total_number_of_images'    => $command->getTotalNumberOfImages(),
            'image_thickness'           => $command->getImageThickness(),
            'ctdi'                      => $command->getCtdi(),
            'total_mas'                 => $command->getTotalMAs(),
            'dlp'                       => $command->getDlp(),
            'notes'                     => $command->getNotes(),
        ]);
    }
}