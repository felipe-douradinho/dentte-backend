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
        Schema::create((new Modules\Pipeline\Entities\Pipeline())->getTable(), function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('description');

            $table->enum( 'is_default', \Modules\Core\Enums\YesNoEnum::toValues() )
                ->default( \Modules\Core\Enums\YesNoEnum::NO->value );

            $table->enum( 'type', \Modules\Pipeline\Enums\PipelineTypesEnum::toValues() );

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
        Schema::dropIfExists((new Modules\Pipeline\Entities\Pipeline())->getTable());
    }
};
