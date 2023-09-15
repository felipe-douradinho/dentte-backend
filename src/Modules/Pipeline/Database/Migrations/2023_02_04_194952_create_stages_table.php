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
        Schema::create((new Modules\Pipeline\Entities\Stage())->getTable(), function (Blueprint $table) {
            $table->id();

            $table->foreignId('pipeline_id')->constrained();

            $table->string('name');

            $table->enum('icon', \Modules\Pipeline\Enums\StageIconsEnum::toValues())
                ->default(\Modules\Pipeline\Enums\StageIconsEnum::ICON_DEFAULT->value);

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
        Schema::dropIfExists((new Modules\Pipeline\Entities\Stage())->getTable());
    }
};
