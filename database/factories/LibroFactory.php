<?php

// database/factories/LibroFactory.php

use App\Models\Libro;
use App\Models\TipoPasta;
use Illuminate\Database\Eloquent\Factories\Factory;

class LibroFactory extends Factory
{
    protected $model = Libro::class;

    public function definition()
    {
        return [
            'isbn' => $this->faker->isbn13,
            'titulo_libro' => $this->faker->sentence,
            'año_publicacion' => $this->faker->year,
            'autor' => $this->faker->name,
            'clasificación' => $this->faker->word,
            'cantidad_de_páginas' => $this->faker->numberBetween(100, 500),
            'id_tipo_pasta' => TipoPasta::factory(),
        ];
    }
}
