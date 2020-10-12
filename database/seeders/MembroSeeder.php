<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Membro;

class MembroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Membro::factory(50)->create();
    }
}
