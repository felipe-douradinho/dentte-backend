<?php

namespace Modules\User\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Modules\Auth\Services\RoleProfileService;
use Modules\Core\Enums\GenderEnum;
use Modules\Localization\Entities\City;
use Modules\User\Entities\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\Modules\User\Entities\User>
 */
class UserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var class-string<\Illuminate\Database\Eloquent\Model|TModel>
     */
    protected $model = User::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'                  => fake()->name(),
            'email'                 => fake()->unique()->safeEmail(),
            'email_verified_at'     => now(),
            'password'              => Hash::make('mudar123'), //'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token'        => Str::random(10),

            'city_id'               => City::inRandomOrder()->first()->id,
            'gender'                => fake()->randomElement(GenderEnum::toValues()),
            'cpf'                   => fake()->numberBetween(11111111111, 99999999999),
            'cro'                   => fake()->numberBetween(11111111111, 99999999999),
            'phone'                 => fake()->phoneNumber(),
            'mobile'                => fake()->phoneNumber(),
            'address'               => fake()->streetName(),
            'address_number'        => fake()->numberBetween(1, 9999),
            'address_complement'    => fake()->randomElement(['Apto', 'Casa', 'Sala', 'Loja']),
            'address_neighborhood'  => fake()->randomElement(['Centro', 'Bairro', 'Vila', 'Jardim']),
            'address_zipcode'      => fake()->numberBetween(10000000, 99999999),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }

    /**
     * Configure the model factory.
     *
     * @return $this
     */
    public function configure()
    {
        return $this->afterMaking(function (User $user) {
            //
        })->afterCreating(function (User $user) {

            if( $user->id == 1 ) {
                $user->assignRole( RoleProfileService::DENTIST_ADMIN );
            } else {
                $user->assignRole( RoleProfileService::DENTIST );
            }

        });
    }
}
