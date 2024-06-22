<!-- resources/views/libros/index.blade.php -->
<!-- resources/views/libros/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libros</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1>Libros</h1>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ISBN</th>
            <th>Título</th>
            <th>Año de Publicación</th>
            <th>Autor</th>
            <th>Clasificación</th>
            <th>Cantidad de Páginas</th>
            <th>Tipo de Pasta</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($libros as $libro)
            <tr>
                <td>{{ $libro->isbn }}</td>
                <td>{{ $libro->titulo_libro }}</td>
                <td>{{ $libro->año_publicacion }}</td>
                <td>{{ $libro->autor }}</td>
                <td>{{ $libro->clasificación }}</td>
                <td>{{ $libro->cantidad_de_páginas }}</td>
                <td>{{ $libro->tipoPasta->descripcion }}</td>
                <td>
                    <form action="{{ url('/libros/' . $libro->isbn) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                    <form action="{{ url('/libros/' . $libro->isbn) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('PUT')
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal{{ $libro->isbn }}">Actualizar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@foreach($libros as $libro)
    <!-- Modal -->
    <div class="modal fade" id="editModal{{ $libro->isbn }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $libro->isbn }}" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel{{ $libro->isbn }}">Actualizar Libro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/libros/' . $libro->isbn) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="titulo_libro">Título</label>
                            <input type="text" class="form-control" id="titulo_libro" name="titulo_libro" value="{{ $libro->titulo_libro }}">
                        </div>
                        <div class="form-group">
                            <label for="año_publicacion">Año de Publicación</label>
                            <input type="text" class="form-control" id="año_publicacion" name="año_publicacion" value="{{ $libro->año_publicacion }}">
                        </div>
                        <div class="form-group">
                            <label for="autor">Autor</label>
                            <input type="text" class="form-control" id="autor" name="autor" value="{{ $libro->autor }}">
                        </div>
                        <div class="form-group">
                            <label for="clasificación">Clasificación</label>
                            <input type="text" class="form-control" id="clasificación" name="clasificación" value="{{ $libro->clasificación }}">
                        </div>
                        <div class="form-group">
                            <label for="cantidad_de_páginas">Cantidad de Páginas</label>
                            <input type="text" class="form-control" id="cantidad_de_páginas" name="cantidad_de_páginas" value="{{ $libro->cantidad_de_páginas }}">
                        </div>
                        <div class="form-group">
                            <label for="id_tipo_pasta">Tipo de Pasta</label>
                            <select class="form-control" id="id_tipo_pasta" name="id_tipo_pasta">
                                @foreach(App\Models\TipoPasta::all() as $tipo)
                                    <option value="{{ $tipo->id }}" {{ $libro->id_tipo_pasta == $tipo->id ? 'selected' : '' }}>{{ $tipo->descripcion }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endforeach

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
