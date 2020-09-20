@extends("layout")
@section('contenido')
    <div class="col-6 mx-auto">
        <form action="post" enctype="multipart/formdata">
            @csrf
            <div class="form-group">
                <h3>Crear nuevo post</h3>
            </div>
            <div class="form-group">
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" id="titulo" placeholder="Titulo" class="form-control">
            </div>
            <div class="form-group">
                <label for="contenido">Contenido</label>
                <input type="text" name="contenido" id="contenido" placeholder="Contenido" class="form-control">
            </div>
            <div class="form-group">
                <label for="imagen">Imagen</label>
                <input type="file" name="imagen" id="imagen">
            </div>
            <div class="form-group">
                <label for="categoria">Categoria</label>
                <input type="text" name="categoria" id="categoria" placeholder="Categoria" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-outline-primary">Enviar</button>
            </div>
        </form>
    </div>

@endsection
