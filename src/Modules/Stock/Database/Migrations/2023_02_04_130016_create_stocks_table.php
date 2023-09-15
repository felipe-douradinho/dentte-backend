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
        Schema::create((new Modules\Stock\Entities\Stock())->getTable(), function (Blueprint $table) {
            $table->id();

            $table->foreignId('product_id')->constrained();

            $table->integer('quantity')->default(0);
            $table->integer('ideal_quantity')->default(0);

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
        Schema::dropIfExists((new Modules\Stock\Entities\Stock())->getTable());
    }
};
