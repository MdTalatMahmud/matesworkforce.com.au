<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequirementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requirements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('company_name');
            $table->string('address');
            $table->string('website');
            $table->string('contact_person');
            $table->string('email');
            $table->string('phone');
            $table->string('type_of_employment');
            $table->string('job_title');
            $table->string('job_description');
            $table->string('no_of_employees');
            $table->string('hours_per_week');
            $table->string('commencement_date');
            $table->string('message');
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
        Schema::dropIfExists('requirements');
    }
}
