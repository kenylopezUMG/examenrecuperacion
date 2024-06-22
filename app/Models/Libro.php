<?php

// app/Models/Libro.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    protected $primaryKey = 'isbn';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'isbn',
        'titulo_libro',
        'año_publicacion',
        'autor',
        'clasificación',
        'cantidad_de_páginas',
        'id_tipo_pasta'
    ];

    public function tipopasta()
    {
        return $this->belongsTo(TipoPasta::class, 'id_tipo_pasta');
    }
}
