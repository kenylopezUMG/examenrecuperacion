<?php

// database/factories/TipoPastaFactory.php

use App\Models\TipoPasta;
use Illuminate\Database\Eloquent\Factories\Factory;

class TipoPastaFactory extends Factory
{
    protected $model = TipoPasta::class;

    public function definition()
    {
        return [
            'descripcion' => $this->faker->word,
        ];
    }
}
