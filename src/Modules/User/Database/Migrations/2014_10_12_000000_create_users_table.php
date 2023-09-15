<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();

            $table->foreignId('city_id')->nullable()->constrained(
                env('DB_DATABASE_BASE') . '.' . (new Modules\Localization\Entities\City())->getTable()
            );

            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');

            $table->enum('gender', \Modules\Core\Enums\GenderEnum::toValues())->nullable();

            $table->string('cpf', 11)->unique()->nullable();
            $table->string('cro')->unique()->nullable();

            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();

            $table->string('address')->nullable();
            $table->string('address_number')->nullable();
            $table->string('address_complement')->nullable();
            $table->string('address_neighborhood')->nullable();
            $table->string('address_zipcode')->nullable();

            $table->rememberToken();

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
        Schema::dropIfExists('users');
    }
};
