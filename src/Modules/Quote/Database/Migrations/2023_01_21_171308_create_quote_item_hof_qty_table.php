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
        Schema::create((new Modules\Quote\Entities\QuoteItemHofQty())->getTable(), function (Blueprint $table) {
            $table->id();

            $table->foreignId('quote_item_id')->constrained();

            $table->integer('qty')
                ->default(0)
                ->comment('Quantidade de UI/MLs');

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
        Schema::dropIfExists((new Modules\Quote\Entities\QuoteItemHofQty())->getTable());
    }
};
