<?php declare(strict_types=1);

namespace NhsHd\AccidentalCt\CTDosing\Command;

use SmoothPhp\CommandBus\BaseCommand;

/**
 * Class CompletePatientCtDoseRequestForm
 *
 * @author jrdn hannah <jrdn@jrdnhannah.co.uk>
 */
final class CompletePatientCtDoseRequestForm extends BaseCommand
{
    /** @var string */
    private $requesterId;
    /** @var string */
    private $ctScannerName;
    /** @var string */
    private $patientName;
    /** @var string */
    private $patientDoB;
    /** @var string */
    private $patientId;
    /** @var string */
    private $patientSex;
    /** @var string */
    private $requestReason;
    /** @var string */
    private $scanProtocol;
    /** @var float */
    private $kv;
    /** @var float */
    private $mA;
    /** @var bool */
    private $maModulation;
    /** @var float */
    private $rotationTime;
    /** @var string */
    private $collimation;
    /** @var float */
    private $irradiatedSliceWidth;
    /** @var bool */
    private $isHelicalScan;
    /** @var float */
    private $couchFeedPerRotation;
    /** @var float */
    private $couchIncrement;
    /** @var float */
    private $pitch;
    /** @var int */
    private $totalNumberOfImages;
    /** @var float */
    private $imageThickness;
    /** @var float */
    private $ctdi;
    /** @var float */
    private $totalMAs;
    /** @var float */
    private $dlp;
    /** @var string */
    private $notes;

    /**
     * CompletePatientCtDoseRequestForm constructor.
     *
     * @param string $requesterId
     * @param string $ctScannerName
     * @param string $patientName
     * @param string $patientDoB
     * @param string $patientId
     * @param string $patientSex
     * @param string $requestReason
     * @param string $scanProtocol
     * @param float  $kv
     * @param float  $mA
     * @param bool   $maModulation
     * @param float  $rotationTime
     * @param string $collimation
     * @param float  $irradiatedSliceWidth
     * @param bool   $isHelicalScan
     * @param float  $couchFeedPerRotation
     * @param float  $couchIncrement
     * @param float  $pitch
     * @param int    $totalNumberOfImages
     * @param float  $imageThickness
     * @param float  $ctdi
     * @param float  $totalMAs
     * @param float  $dlp
     * @param string $notes
     */
    public function __construct(
        string $requesterId,
        string $ctScannerName,
        string $patientName,
        string $patientDoB,
        string $patientId,
        string $patientSex,
        string $requestReason,
        string $scanProtocol,
        float $kv,
        float $mA,
        bool $maModulation,
        float $rotationTime,
        string $collimation,
        float $irradiatedSliceWidth,
        bool $isHelicalScan,
        float $couchFeedPerRotation,
        float $couchIncrement,
        float $pitch,
        int $totalNumberOfImages,
        float $imageThickness,
        float $ctdi,
        float $totalMAs,
        float $dlp,
        string $notes
    ) {
        $this->requesterId = $requesterId;
        $this->ctScannerName = $ctScannerName;
        $this->patientName = $patientName;
        $this->patientDoB = $patientDoB;
        $this->patientId = $patientId;
        $this->patientSex = $patientSex;
        $this->requestReason = $requestReason;
        $this->scanProtocol = $scanProtocol;
        $this->kv = $kv;
        $this->mA = $mA;
        $this->maModulation = $maModulation;
        $this->rotationTime = $rotationTime;
        $this->collimation = $collimation;
        $this->irradiatedSliceWidth = $irradiatedSliceWidth;
        $this->isHelicalScan = $isHelicalScan;
        $this->couchFeedPerRotation = $couchFeedPerRotation;
        $this->couchIncrement = $couchIncrement;
        $this->pitch = $pitch;
        $this->totalNumberOfImages = $totalNumberOfImages;
        $this->imageThickness = $imageThickness;
        $this->ctdi = $ctdi;
        $this->totalMAs = $totalMAs;
        $this->dlp = $dlp;
        $this->notes = $notes;
    }

    /**
     * @return string
     */
    public function getRequesterId(): string
    {
        return $this->requesterId;
    }

    /**
     * @return string
     */
    public function getCtScannerName(): string
    {
        return $this->ctScannerName;
    }

    /**
     * @return string
     */
    public function getPatientName(): string
    {
        return $this->patientName;
    }

    /**
     * @return string
     */
    public function getPatientDoB(): string
    {
        return $this->patientDoB;
    }

    /**
     * @return string
     */
    public function getPatientId(): string
    {
        return $this->patientId;
    }

    /**
     * @return string
     */
    public function getPatientSex(): string
    {
        return $this->patientSex;
    }

    /**
     * @return string
     */
    public function getRequestReason(): string
    {
        return $this->requestReason;
    }

    /**
     * @return string
     */
    public function getScanProtocol(): string
    {
        return $this->scanProtocol;
    }

    /**
     * @return float
     */
    public function getKv(): float
    {
        return $this->kv;
    }

    /**
     * @return float
     */
    public function getMA(): float
    {
        return $this->mA;
    }

    /**
     * @return bool
     */
    public function hasMaModulation(): bool
    {
        return $this->maModulation;
    }

    /**
     * @return float
     */
    public function getRotationTime(): float
    {
        return $this->rotationTime;
    }

    /**
     * @return string
     */
    public function getCollimation(): string
    {
        return $this->collimation;
    }

    /**
     * @return float
     */
    public function getIrradiatedSliceWidth(): float
    {
        return $this->irradiatedSliceWidth;
    }

    /**
     * @return bool
     */
    public function isHelicalScan(): bool
    {
        return $this->isHelicalScan;
    }

    /**
     * @return float
     */
    public function getCouchFeedPerRotation(): float
    {
        return $this->couchFeedPerRotation;
    }

    /**
     * @return float
     */
    public function getCouchIncrement(): float
    {
        return $this->couchIncrement;
    }

    /**
     * @return float
     */
    public function getPitch(): float
    {
        return $this->pitch;
    }

    /**
     * @return int
     */
    public function getTotalNumberOfImages(): int
    {
        return $this->totalNumberOfImages;
    }

    /**
     * @return float
     */
    public function getImageThickness(): float
    {
        return $this->imageThickness;
    }

    /**
     * @return float
     */
    public function getCtdi(): float
    {
        return $this->ctdi;
    }

    /**
     * @return float
     */
    public function getTotalMAs(): float
    {
        return $this->totalMAs;
    }

    /**
     * @return float
     */
    public function getDlp(): float
    {
        return $this->dlp;
    }

    /**
     * @return string
     */
    public function getNotes(): string
    {
        return $this->notes;
    }
}