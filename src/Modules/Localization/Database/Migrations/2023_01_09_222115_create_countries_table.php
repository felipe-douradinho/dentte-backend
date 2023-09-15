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
        Schema::create((new Modules\Localization\Entities\Country())->getTable(), function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('iso_code')->nullable();
            $table->string('iso_code3')->nullable();
            $table->string('phone_code')->nullable();
            $table->string('currency_code')->nullable();
            $table->string('currency_name')->nullable();
            $table->string('currency_symbol')->nullable();
            $table->string('currency_symbol_native')->nullable();
            $table->string('currency_decimal_digits')->nullable();
            $table->string('currency_rounding')->nullable();
            $table->string('currency_code_numeric')->nullable();
            $table->string('flag')->nullable();
            $table->string('flag_emoji')->nullable();
            $table->string('flag_emoji_unicode')->nullable();

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
        Schema::dropIfExists((new Modules\Localization\Entities\Country())->getTable());
    }
};
