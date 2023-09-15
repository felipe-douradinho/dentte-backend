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
        Schema::create((new Modules\Plan\Entities\PlanExpertiseProcedure())->getTable(), function (Blueprint $table) {
            $table->id();

            $table->foreignId('plan_expertise_id')->constrained();

            $table->string('name');

            $table->decimal('price')->default('0.00');
            $table->decimal('cost')->default('0.00');

            $table->enum( 'faces_enabled', \Modules\Core\Enums\YesNoEnum::toValues() )
                ->default( \Modules\Core\Enums\YesNoEnum::NO->value );

            $table->enum( 'is_enabled', \Modules\Core\Enums\YesNoEnum::toValues() )
                ->default( \Modules\Core\Enums\YesNoEnum::YES->value );

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
        Schema::dropIfExists((new Modules\Plan\Entities\PlanExpertiseProcedure())->getTable());
    }
};
