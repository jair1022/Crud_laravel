Formulario de edicion de empleado

<form action="{{ url ('/empleado/'.$empleado->id)}}">
    @csrf
    {{ method_field('PATCH') }}
@include('empleado.form')
</form>


