<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CtDoseRequests extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'ct_dose_requests',
            function (Blueprint $table) {
                $table->char('request_id', 36)->index();
                $table->char('requester_id', 36);

                $table->string('ct_scanner_name');
                $table->string('patient_name');
                $table->date('patient_dob');
                $table->string('patient_id');
                $table->string('patient_sex');
                $table->string('request_reason');
                $table->string('scan_protocol');
                $table->float('kv');
                $table->float('mA');
                $table->boolean('ma_modulation');
                $table->float('rotation_time');
                $table->float('collimation');
                $table->float('irradiated_slice_width');
                $table->boolean('is_helical_scan');
                $table->float('couch_feed_per_rotation');
                $table->float('couch_increment');
                $table->float('pitch');
                $table->integer('total_number_of_images');
                $table->float('image_thickness');
                $table->float('ctdi');
                $table->float('total_mas');
                $table->float('dlp');
                $table->string('notes');

                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ct_dose_requests');
    }
}
