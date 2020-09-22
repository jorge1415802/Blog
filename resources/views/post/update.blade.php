@extends("layout")
@section('contenido')
    <div class="col-6 mx-auto">
        <form action="/post/crear" method="post" enctype="multipart/formdata">
            @csrf
            <div class="form-group">
                <h3>Modificar post</h3>
            </div>
            <div class="form-group">
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" id="titulo" placeholder="Titulo" class="form-control" value="{{$post->titulo}}">
            </div>
            <div class="form-group">
                <label for="contenido">Contenido</label>
                <textarea name="contenido" id="contenido" cols="30" rows="10" class="form-control"></textarea>
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
                <a href="/" class="btn btn-outline-warning">Cancelar</a>
            </div>
        </form>
    </div>

@endsection
