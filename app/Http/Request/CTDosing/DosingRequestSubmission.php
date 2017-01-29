<?php declare(strict_types=1);

namespace NhsHd\AccidentalCt\Laravel\Http\Request\CTDosing;

use NhsHd\AccidentalCt\Laravel\Http\Request\Request;

/**
 * Class DosingRequestSubmission
 *
 * @author jrdn hannah <jrdn@jrdnhannah.co.uk>
 */
final class DosingRequestSubmission extends Request
{
    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'ct_scanner_name'               => 'required|string',
            'patient_name'                  => 'required|string',
            'patient_dob'                   => 'required|date_format:d/m/Y',
            'patient_id'                    => 'required|string',
            'patient_sex'                   => 'required|string',
            'request_reason'                => 'required|string',
            'scan_protocol'                 => 'required|string',
            'kV'                            => 'required|numeric',
            'mA'                            => 'required|numeric',
            'ma_modulation'                 => 'required|boolean',
            'rotation_time'                 => 'required|numeric',
            'collimation'                   => 'required|string',
            'irradiated_slice_width'        => 'required',
            'is_helical_scan'               => 'required|boolean',
            'couch_feed_per_rotation'       => 'required|numeric',
            'couch_increment'               => 'required|numeric',
            'pitch'                         => 'required|numeric',
            'total_number_of_images'        => 'required|integer',
            'image_thickness'               => 'required|numeric',
            'ctdi'                          => 'required|numeric',
            'total_mas'                     => 'required|numeric',
            'dlp'                           => 'required|numeric',
            'notes'                         => 'string',
        ];
    }
}