<?php

namespace Modules\User\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Modules\User\Entities\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name'          => 'Felipe Douradinho',
            'email'         => 'feliped1987@gmail.com',
        ]);

        User::factory()->create([
            'name'          => 'Felipe D. 2',
            'email'         => 'feliped1987.2@gmail.com',
        ]);

        User::factory()
            ->count(20)
            //->hasPosts(1)
            ->create();
    }
}
