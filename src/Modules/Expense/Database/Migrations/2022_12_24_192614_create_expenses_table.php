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
        Schema::create((new Modules\Expense\Entities\Expense())->getTable(), function (Blueprint $table) {
            $table->id();

            $table->foreignId('expense_category_id')->constrained();

            $table->string('title');
            $table->decimal('value');

            $table->date('due_date');

            $table->text('notes')->nullable();

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
        Schema::dropIfExists((new Modules\Expense\Entities\Expense())->getTable());
    }
};
