<?php

// app/Http/Controllers/LibroController.php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index()
    {
        $libros = Libro::with('tipoPasta')->get();
        return view('libros.index', compact('libros'));
    }

    public function destroy($isbn)
    {
        Libro::where('isbn', $isbn)->delete();
        return redirect()->route('libros.index');
    }

    public function update(Request $request, $isbn)
    {
        $libro = Libro::where('isbn', $isbn)->first();
        $libro->update($request->all());
        return redirect()->route('libros.index');
    }
}
