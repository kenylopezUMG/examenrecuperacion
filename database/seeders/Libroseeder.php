<?php
// app/Http/Controllers/LibroController.php

namespace Database\Seeders;

use App\Models\Libro;
use Illuminate\Database\Seeder;

class Libroseeder extends Seeder
{
    public function run()
    {
        Libro::factory()->count(50)->create();
    }
}
