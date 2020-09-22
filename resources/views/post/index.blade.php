@extends("layout")
@section("contenido")
    <div class="container">
        @foreach($post as $valor)
        <br>
            <div class="card">
                <div class="card-header">
                    <h4>{{$valor->Titulo}}</h4>
                </div>
                <div class="card-body">
                    <br>
                    <div>
                    <img src="{{$valor->Imagen}}" alt="{{$valor->Imagen}}">
                    </div>
                    <br>
                    <div>
                       Categoria: {{$valor->Categoria}}
                    </div>
                    <div>
                        Fecha: {{$valor->FechaCreacion}}
                    </div>
                    <br>
                    <a href="{{ route('post.mostrar', ['id'=> $valor->Id]) }}" class="btn btn-outline-primary">Ver</a>
                    <a href="{{ route('post.editar', ['id'=> $valor->Id]) }}" class="btn btn-outline-warning">Editar</a>
                    <a href="{{ route('post.borrar', ['id'=> $valor->Id]) }}" class="btn btn-outline-danger">Borrar</a>
                </div>
            </div>
        @endforeach
        <br>
        <div>
            <a href="/post/crear" class="btn btn-outline-primary">Crear Nuevo Post</a>
        </div>
    </div>

@endsection
