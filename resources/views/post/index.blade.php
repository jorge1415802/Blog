@extends("layout")
@section("contenido")
    <div>
        <h1>Hola desde la vista de controlador post</h1>
    </div>
    <div>
        <form action="post">
            @csrf
        </form>
    </div>

@endsection
