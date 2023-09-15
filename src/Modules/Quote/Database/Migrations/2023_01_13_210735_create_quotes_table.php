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
        Schema::create((new Modules\Quote\Entities\Quote())->getTable(), function (Blueprint $table) {
            $table->id();

            $table->foreignId('patient_id')->constrained();

            $table->string('title');
            $table->date('date');

            $table->enum('status', \Modules\Quote\Enums\QuoteStatusEnum::toValues())
                ->default(\Modules\Quote\Enums\QuoteStatusEnum::DRAFT->value);

            $table->decimal('total_original', 20, 2)
                ->default(0)
                ->comment('Total antes de descontos ou acréscimos');

            $table->enum('discount_type', \Modules\Quote\Enums\QuoteDiscountTypeEnum::toValues())
                ->default(\Modules\Quote\Enums\QuoteDiscountTypeEnum::FIXED->value);

            $table->decimal('discount', 20, 2)
                ->default(0);

            $table->decimal('total_final', 20, 2)
                ->default(0)
                ->comment('Total após descontos ou acréscimos');

            $table->enum('is_installments_enabled', \Modules\Core\Enums\YesNoEnum::toValues())
                ->default(\Modules\Core\Enums\YesNoEnum::NO->value);

            $table->decimal('entry_value', 20, 2)
                ->nullable()
                ->comment('Valor da Entrada');

            $table->integer('installments')
                ->nullable()
                ->comment('Número de Parcelas');

            $table->enum('print_odontogram_and_hof', \Modules\Core\Enums\YesNoEnum::toValues())
                ->default(\Modules\Core\Enums\YesNoEnum::YES->value);

            $table->enum('print_just_total', \Modules\Core\Enums\YesNoEnum::toValues())
                ->default(\Modules\Core\Enums\YesNoEnum::YES->value);

            $table->enum('gen_contract_on_approve', \Modules\Core\Enums\YesNoEnum::toValues())
                ->default(\Modules\Core\Enums\YesNoEnum::NO->value);

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
        Schema::dropIfExists((new Modules\Quote\Entities\Quote())->getTable());
    }
};
