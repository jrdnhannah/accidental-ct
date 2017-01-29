@extends('components.master')

@section('content')
        <div id="main-wrapper" class="section-wrapper clearfix">
            <table>
                <tbody>
                @foreach($requests as $request)
                    <tr>
                        <td id="ct_scanner_name">
                            <strong>ct_scanner_name</strong> <br />
                            {{ $request->ct_scanner_name }}
                        </td>
                        <td id="patient_name">
                            <strong>patient_name</strong> <br />
                            {{ $request->patient_name }}
                        </td>
                        <td id="patient_dob">
                            <strong>patient_dob</strong> <br />
                            {{ $request->patient_dob }}
                        </td>
                        <td id="patient_id">
                            <strong>patient_id</strong> <br />
                            {{ $request->patient_id }}
                        </td>
                    </tr>
                    <tr>
                        <td id="patient_sex">
                            <strong>patient_sex</strong> <br />
                            {{ $request->patient_sex }}
                        </td>
                        <td id="request_reason">
                            <strong>request_reason</strong> <br />
                            {{ $request->request_reason }}
                        </td>
                        <td id="scan_protocol">
                            <strong>scan_protocol</strong> <br />
                            {{ $request->scan_protocol }}
                        </td>
                        <td id="kV">
                            <strong>kV</strong> <br />
                            {{ $request->kv }}
                        </td>
                    </tr>
                    <tr>
                        <td id="mA">
                            <strong>mA</strong> <br />
                            {{ $request->mA }}
                        </td>
                        <td id="ma_modulation">
                            <strong>ma_modulation</strong> <br />
                            {{ $request->ma_modulation }}
                        </td>
                        <td id="rotation_time">
                            <strong>rotation_time</strong> <br />
                            {{ $request->rotation_time }}
                        </td>
                        <td id="collimation">
                            <strong>collimation</strong> <br />
                            {{ $request->collimation }}
                        </td>
                    </tr>
                    <tr>
                        <td id="irradiated_slice_width">
                            <strong>irradiated_slice_width</strong> <br />
                            {{ $request->irradiated_slice_width }}
                        </td>
                        <td id="is_helical_scan">
                            <strong>is_helical_scan</strong> <br />
                            {{ $request->is_helical_scan }}
                        </td>
                        <td id="couch_feed_per_rotation">
                            <strong>couch_feed_per_rotation</strong> <br />
                            {{ $request->couch_feed_per_rotation }}
                        </td>
                        <td id="couch_increment">
                            <strong>couch_increment</strong> <br />
                            {{ $request->couch_increment }}
                        </td>
                    </tr>
                    <tr>
                        <td id="pitch">
                            <strong>pitch</strong> <br />
                            {{ $request->pitch }}
                        </td>
                        <td id="total_number_of_images">
                            <strong>total_number_of_images</strong> <br />
                            {{ $request->total_number_of_images }}
                        </td>
                        <td id="image_thickness">
                            <strong>image_thickness</strong> <br />
                            {{ $request->image_thickness }}
                        </td>
                        <td id="ctdi">
                            <strong>ctdi</strong> <br />
                            {{ $request->ctdi }}
                        </td>
                    </tr>
                    <tr>
                        <td id="total_mas">
                            <strong>total_mas</strong> <br />
                            {{ $request->total_mas }}
                        </td>
                        <td id="dlp">
                            <strong>dlp</strong> <br />
                            {{ $request->dlp }}
                        </td>
                        <td id="notes">
                            <strong>notes</strong> <br />
                            {{ $request->notes }}
                        </td>
                        <td id="hospital">
                            <strong>hospital</strong> <br />
                            {{ $request->requester_id }}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
@stop
