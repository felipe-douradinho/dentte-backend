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
        Schema::create((new Modules\Patient\Entities\PatientPlan())->getTable(), function (Blueprint $table) {
            $table->id();

            $table->foreignId('patient_id')->constrained();
            $table->foreignId('plan_id')->constrained();

            $table->string('number')->nullable()->comment('Número da Carteirinha');
            $table->string('sponsor_name')->nullable()->comment('Nome do Titular do Plaon');

            $table->string( 'sponsor_document_type', 20 )
                ->default( \Modules\Patient\Enums\DocumentTypeEnum::CPF->value )
                ->nullable()
                ->comment('Tipo de Documento do Titular do Plano');

            $table->string('sponsor_document_number', 50)
                ->nullable()
                ->comment('Número do Documento do Titular do Plano');

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
        Schema::dropIfExists((new Modules\Patient\Entities\PatientPlan())->getTable());
    }
};
