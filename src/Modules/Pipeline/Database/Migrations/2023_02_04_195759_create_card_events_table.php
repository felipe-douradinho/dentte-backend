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
        Schema::create((new Modules\Pipeline\Entities\CardEvent())->getTable(), function (Blueprint $table) {
            $table->id();

            $table->foreignId('card_id')->constrained();
            $table->foreignId('author_id')->constrained( (new Modules\Patient\Entities\Patient())->getTable() );

            $table->enum('type', \Modules\Pipeline\Enums\CardEventTypesEnum::toValues())
                ->default(\Modules\Pipeline\Enums\CardEventTypesEnum::CREATION->value);

            $table->string('old_value')->nullable();
            $table->string('new_value')->nullable();

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
        Schema::dropIfExists((new Modules\Pipeline\Entities\CardEvent())->getTable());
    }
};
