<?php

namespace Database\Seeders;

use App\Models\TipoPasta;
use Illuminate\Database\Seeder;

class TipoPastaseeder extends Seeder
{
    public function run()
    {
        TipoPasta::factory()->count(50)->create();
    }
}
