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
        Schema::create((new Modules\Patient\Entities\PatientSponsor())->getTable(), function (Blueprint $table) {
            $table->id();

            $table->foreignId('patient_id')->constrained();

            $table->string('name');

            $table->string( 'document_type', 20 )
                ->default( \Modules\Patient\Enums\DocumentTypeEnum::CPF->value );

            $table->string('document_number', 50)
                ->comment('Document of Identification');

            $table->date('birth')->nullable();
            $table->string('phone', 50)->nullable();

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
        Schema::dropIfExists((new Modules\Patient\Entities\PatientSponsor())->getTable());
    }
};
