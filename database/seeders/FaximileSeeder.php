<?php

namespace Database\Seeders;

use App\Models\Faximile;
use Illuminate\Database\Seeder;

class FaximileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Faximile::factory()->count(1)->create();
    }
}
