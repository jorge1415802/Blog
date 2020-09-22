@extends("layout")
@section("contenido")
    <div class="container">
        <br>
            <div class="card">
                <div class="card-header">
                    <h4>{{$post->Titulo}}</h4>
                </div>
                <div class="card-body">
                    <br>
                    <div>
                    <img src="{{$post->Imagen}}" alt="{{$post->Imagen}}">
                    </div>
                    <div>{{$post->Contenido}}</div>
                    <br>
                    <div>
                       Categoria: {{$post->Categoria}}
                    </div>
                    <div>
                        Fecha: {{$post->FechaCreacion}}
                    </div>
                    <br>

                </div>
            </div>
        <br>
        <div>
            <a href="/" class="btn btn-outline-primary">Volver</a>
        </div>
    </div>

@endsection
