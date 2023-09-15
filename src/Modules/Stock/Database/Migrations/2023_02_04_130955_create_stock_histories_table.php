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
        Schema::create((new Modules\Stock\Entities\StockHistory())->getTable(), function (Blueprint $table) {
            $table->id();

            $table->foreignId('stock_id')->constrained();

            $table->foreignId('created_by')->constrained(
                (new Modules\User\Entities\User())->getTable()
            );

            $table->foreignId('authorized_by')->nullable()->constrained(
                (new Modules\User\Entities\User())->getTable()
            );

            $table->enum('action', \Modules\Stock\Enums\StockHistoryActionEnum::toValues());

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
        Schema::dropIfExists((new Modules\Stock\Entities\StockHistory())->getTable());
    }
};
