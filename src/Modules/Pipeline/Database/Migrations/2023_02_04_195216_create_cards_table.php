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
        Schema::create((new Modules\Pipeline\Entities\Card())->getTable(), function (Blueprint $table) {
            $table->id();

            $table->foreignId('stage_id')->constrained();
            $table->foreignId('user_id')->comment('Usuário responsável pelo card')->constrained();

            $table->foreignId('patient_id')
                ->nullable()
                ->comment('Este card está ou não vinculado a um paciente')
                ->constrained(
                    (new Modules\Patient\Entities\Patient())->getTable()
                );

            $table->string('name');
            $table->string('description')->nullable();


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
        Schema::dropIfExists((new Modules\Pipeline\Entities\Card())->getTable());
    }
};
