@extends('components.master')

@section('content')
    <div id="main">
        <div id="main-wrapper" class="section-wrapper clearfix">
            <form id="ct-data-form">
                <div class="row clearfix">
                    <div class="one-third">
                        <label class="form-label">
                            Hospital name
                            <input type="text" id="hospital-name" disabled="disabled"/>
                        </label>
                    </div>
                    <div class="one-third">
                        <label class="form-label">
                            CT Scanner Details
                            <input type="text" name="ct_scanner_name" id="ct-scanner-details"/>
                        </label>
                    </div>
                    <div class="one-third">
                        <label class="form-label">
                            Patient name
                            <input type="text" name="patient_name" id="patient-name"/>
                        </label>
                    </div>
                    <div class="one-third">
                        <label class="form-label">
                            Patient D.O.B.
                            <input type="text" name="patient_dob" id="patient-dob"/>
                        </label>
                    </div>
                    <div class="one-third">
                        <label class="form-label">
                            Patient ID#
                            <input type="text" name="patient_id" id="patient-id"/>
                        </label>
                    </div>
                    <div class="one-third">
                        <label class="form-label">Patient sex</label>
                        <br/>
                        <label><input type="radio" name="patient_sex" id="patient-sex-male"/>Male</label>
                        <br/>
                        <label><input type="radio" name="patient_sex" id="patient-sex-female"/>Female</label>
                        <br/>
                        <label><input type="radio" name="patient_sex" id="patient-sex-other"/>Other</label>
                    </div>
                    <div class="full-width">
                        <label>Reason for requesting estimate <strong>(include stage of pregnancy if
                                applicable)</strong></label>
                        <textarea rows="4" id="reason" name="request_reason"></textarea>
                    </div>
                    <div class="one-third">
                        <label class="form-label">Scan protocol description</label><br/>
                        <select name="scan_protocol">
                            <option value="head">Head</option>
                            <option value="thorax">Thorax</option>
                            <option value="legs">Legs</option>
                        </select>
                    </div>
                    <div class="one-third">
                        <label class="form-label">kV<input type="text" id="kV" name="kV"/></label>
                    </div>
                    <div class="one-third">
                        <label class="form-label">mA<input type="text" id="mA" name="mA"/></label>
                    </div>
                    <div class="one-third">
                        <label class="form-label">mA modulation</label><br/>
                        <select name="ma_modulation">
                            <option value="smartma">SmartmA</option>
                            <option value="automa">AutomA</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    <div class="one-third">
                        <label class="form-label">
                            Rotation time (secs)
                            <input type="text" id="rotation-time" name="rotation_time"/>
                        </label>
                    </div>
                    <div class="one-third">
                        <label class="form-label">Collimation</label><br/>
                        <select name="collimation">
                            <option value="1x3mm">1x3mm</option>
                            <option value="2x3mm">2x3mm</option>
                            <option value="3x3mm">3x3mm</option>
                            <option value="4x3mm">4x3mm</option>
                        </select>
                    </div>
                    <div class="one-third">
                        <label class="form-label">Irradiated slice width</label><br/>
                        <select name="irradiated_slice_width">
                            <option value="1x3mm">1x3mm</option>
                            <option value="2x3mm">2x3mm</option>
                            <option value="3x3mm">3x3mm</option>
                            <option value="4x3mm">4x3mm</option>
                        </select>
                    </div>
                    <div class="one-third">
                        <label class="form-label">Helical scan</label>
                        <br/>
                        <label><input type="radio" name="is_helical_scan" id="helical-yes"/>Yes</label>
                        <br/>
                        <label><input type="radio" name="is_helical_scan" id="helical-no"/>No</label>
                    </div>
                    <div class="one-third">
                        <label class="form-label">
                            Couch feed per rotation (mm)
                            <input type="text" id="couch-feed-per-rotation" name="couch_feed_per_rotation"/>
                        </label>
                    </div>
                    <div class="one-third">
                        <label class="form-label">
                            Couch increment (mm)
                            <input type="text" id="couch-increment" name="couch_increment"/>
                        </label>
                    </div>
                    <div class="one-third">
                        <label class="form-label">
                            Pitch
                            <input type="text" id="pitch" name="pitch"/>
                        </label>
                    </div>
                    <div class="one-third">
                        <label class="form-label">
                            Total number of images
                            <input type="text" id="total-number-of-images" name="total_number_of_images"/>
                        </label>
                    </div>
                    <div class="one-third">
                        <label class="form-label">
                            Image thickness
                            <input type="text" id="image-thickness" name="image_thickness"/>
                        </label>
                    </div>
                    <div class="one-third"></div>
                    <div class="one-third"></div>
                    <div class="one-third">
                        <label class="form-label">
                            CTDI<input type="text" id="image-thickness" name="ctdi"/>
                        </label>
                    </div>
                    <div class="one-third">
                        <label class="form-label">
                            Total mAs
                            <input type="text" id="image-thickness" name="total_mas"/>
                        </label>
                    </div>
                    <div class="one-third">
                        <label class="form-label">
                            DLP
                            <input type="text" id="image-thickness" name="dlp"/>
                        </label>
                    </div>
                    <div class="full-width">
                        <label class="form-label">Other notes</label>
                        <textarea rows="4" id="reason" name="notes"></textarea>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop