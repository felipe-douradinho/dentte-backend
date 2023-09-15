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
        Schema::create((new Modules\Tooth\Entities\Tooth())->getTable(), function (Blueprint $table) {
            $table->id();

            $table->string('name')
                ->comment('Nome do dente, ex: 11, 12, Face, Arcadas');

            $table->enum( 'type', \Modules\Tooth\Enums\ToothTypeEnum::toValues())
                ->comment('Tipo do dente, ex: T = Dente, R => Região');

            $table->enum( 'category', \Modules\Tooth\Enums\ToothCategoryEnum::toValues())
                ->comment('Categoria do dente, ex: P = Permanente, D => Decíduo');

            $table->index([
                'type', 'category'
            ]);

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
        Schema::dropIfExists((new Modules\Tooth\Entities\Tooth())->getTable());
    }
};
