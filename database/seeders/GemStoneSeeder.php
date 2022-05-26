<?php

namespace Database\Seeders;

use App\Models\GemStone;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GemStoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GemStone::factory(100)->create();
    }
}
