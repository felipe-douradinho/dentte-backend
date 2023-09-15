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
        Schema::create((new Modules\Patient\Entities\Patient())->getTable(), function (Blueprint $table) {
            $table->id();

            $table->foreignId('referer_id')->constrained();

            $table->string('name');
            $table->enum('gender', \Modules\Core\Enums\GenderEnum::toValues());
            $table->date('birth')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();

            $table->string('chart_number')->nullable()->comment('Prontuário');

            $table->text('notes')->nullable();

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
        Schema::dropIfExists((new Modules\Patient\Entities\Patient())->getTable());
    }
};
