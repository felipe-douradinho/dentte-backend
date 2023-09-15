<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create((new Modules\Patient\Entities\PatientDocument())->getTable(), function (Blueprint $table) {
            $table->id();

            $table->foreignId('patient_id')->constrained();

            $table->string('name');   // -> eg: "RG"
            $table->string('value');  // -> eg: "123456789"

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
        Schema::dropIfExists((new Modules\Patient\Entities\PatientDocument())->getTable());
    }
};
