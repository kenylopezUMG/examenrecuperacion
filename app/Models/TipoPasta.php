<?php

// app/Models/TipoPasta.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoPasta extends Model
{
    use HasFactory;

    protected $table = 'tipo_pasta';

    protected $fillable = [
        'descripcion',
    ];

    public function libros()
    {
        return $this->hasMany(Libro::class, 'id_tipo_pasta');
    }
}
