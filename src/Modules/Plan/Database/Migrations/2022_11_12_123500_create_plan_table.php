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
        Schema::create((new Modules\Plan\Entities\Plan())->getTable(), function (Blueprint $table) {
            $table->id();

            $table->string('name');

            $table->enum( 'is_default', \Modules\Core\Enums\YesNoEnum::toValues() )
                ->default( \Modules\Core\Enums\YesNoEnum::NO->value );

            $table->enum( 'paid_by_the_agreement', \Modules\Core\Enums\YesNoEnum::toValues() )
                ->default( \Modules\Core\Enums\YesNoEnum::NO->value )
                ->comment('Pago pelo plano/convênio');

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
        Schema::dropIfExists((new Modules\Plan\Entities\Plan())->getTable());
    }
};
