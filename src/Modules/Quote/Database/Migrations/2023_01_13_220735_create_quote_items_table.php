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
        Schema::create((new Modules\Quote\Entities\QuoteItem())->getTable(), function (Blueprint $table) {
            $table->id();

            $table->foreignId('quote_id')->constrained();

            $table->foreignId('plan_id')->constrained();
            $table->foreignId('plan_expertise_procedure_id')->constrained();

            $table->foreignId( 'user_id')->constrained();

            $table->foreignId('tooth_id')->constrained();

            $table->decimal('price', 20, 2)
                ->default(0)
                ->comment('Valor do tratamento');

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
        Schema::dropIfExists((new Modules\Quote\Entities\QuoteItem())->getTable());
    }
};
