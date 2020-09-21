@extends("layout")
@section("contenido")
    <div class="container">
        @foreach($post as $valor)
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

                </div>
            </div>
        @endforeach
    </div>

@endsection
