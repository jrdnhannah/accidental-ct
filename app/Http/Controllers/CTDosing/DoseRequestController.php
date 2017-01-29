<?php declare(strict_types=1);

namespace NhsHd\AccidentalCt\Laravel\Http\Controllers\CTDosing;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\View\View;
use NhsHd\AccidentalCt\CTDosing\Command\CompletePatientCtDoseRequestForm;
use NhsHd\AccidentalCt\Laravel\Http\Controllers\Controller;
use NhsHd\AccidentalCt\Laravel\Http\Request\CTDosing\DosingRequestSubmission;
use SmoothPhp\Contracts\CommandBus\CommandBus;
use Symfony\Component\HttpFoundation\Response;

/**
 * Class DoseRequestController
 *
 * @author jrdn hannah <jrdn@jrdnhannah.co.uk>
 */
final class DoseRequestController extends Controller
{
    /** @var CommandBus */
    private $commandBus;
    /** @var Guard */
    private $guard;

    /**
     * DoseRequestController constructor.
     *
     * @param CommandBus $commandBus
     * @param Guard      $guard
     */
    public function __construct(CommandBus $commandBus, Guard $guard)
    {
        $this->commandBus = $commandBus;
        $this->guard = $guard;
    }

    /**
     * @return View
     */
    public function showDosingRequestForm(): View
    {
        return view('dosing_requests.form');
    }

    /**
     * @return View
     */
    public function showDosingRequests(): View
    {
        return view('dosing_requests.all');
    }

    /**
     * @param DosingRequestSubmission $request
     * @return Response
     */
    public function submitDosingRequest(DosingRequestSubmission $request): Response
    {
        $this->commandBus->execute(
            new CompletePatientCtDoseRequestForm(
                $this->guard->id(),
                $request->request->get('ct_scanner_name'),
                $request->request->get('patient_name'),
                $request->request->get('patient_dob'),
                $request->request->get('patient_id'),
                $request->request->get('patient_sex'),
                $request->request->get('request_reason'),
                $request->request->get('scan_protocol'),
                (float) $request->request->get('kV'),
                (float) $request->request->get('mA'),
                (bool) $request->request->get('ma_modulation'),
                (float) $request->request->get('rotation_time'),
                $request->request->get('collimation'),
                (float) $request->request->get('irradiated_slice_width'),
                (bool) $request->request->get('is_helical_scan'),
                (float) $request->request->get('couch_feed_per_rotation'),
                (float) $request->request->get('couch_increment'),
                (float) $request->request->get('pitch'),
                $request->request->getInt('total_number_of_images'),
                (float) $request->request->get('image_thickness'),
                (float) $request->request->get('ctdi'),
                (float) $request->request->get('total_mas'),
                (float) $request->request->get('dlp'),
                $request->request->get('notes')
            )
        );

        return redirect('/');
    }
}