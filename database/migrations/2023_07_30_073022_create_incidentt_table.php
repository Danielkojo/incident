<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('incident', function (Blueprint $table) {
            $table->id();
            $table->String('number');
            $table->String('contact_type');
            $table->String('caller');
            $table->String('state');
            $table->String('category');
            $table->String('impact');
            $table->String('sub_category');
            $table->String('urgency');
            $table->String('business_service');
            $table->String('priority');
            $table->String('configuration_item');
            $table->String('assignment_group');
            $table->String('assignment_to');
            $table->String('short_description');
            $table->String('description');
            $table->String('userid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('incidentt');
    }
};
