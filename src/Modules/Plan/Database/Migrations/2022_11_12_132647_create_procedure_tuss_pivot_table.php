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
        Schema::create((new Modules\Plan\Entities\ProcedureTussPivot())->getTable(), function (Blueprint $table) {
            $table->id();

            $table->foreignId('plan_expertise_procedure_id')->constrained();
            $table->foreignId('tuss_id')->constrained();

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
        Schema::dropIfExists((new Modules\Plan\Entities\ProcedureTussPivot())->getTable());
    }
};
