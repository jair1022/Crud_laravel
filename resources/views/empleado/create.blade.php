


  @vite(['resources/css/app.css', 'resources/js/app.js'])
Formulario de creacion de empleado

    <form action="{{url('/empleado')}}" method="post" enctype="multipart/form-data">
        @csrf

        @include('empleado.form')



    </form>



