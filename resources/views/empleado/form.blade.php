@vite(['resources/css/app.css', 'resources/js/app.js'])
<label for="Nombre">Nombre</label>
        <input type="text" name="Nombre" value="{{$empleado->Nombre }}"  id="Nombre" class="border-2 border-gray-500 p-2">
        <br>

        <label for="ApellidoPaterno">Apellido Paterno</label>
        <input type="text" name="ApellidoPaterno" value="{{$empleado->ApellidoPaterno }}" id="ApellidoPaterno" class="border-2 border-gray-500 p-2">
        <br>

        <label for="ApellidoMaterno">Apellido Materno</label>
        <input type="text" name="ApellidoMaterno" value="{{$empleado->ApellidoMaterno }}" id="ApellidoMaterno" class="border-2 border-gray-500 p-2">
        <br>

        <label for="Correo">Correo</label>
        <input type="email" name="Correo" value="{{$empleado->Correo }}" id="Correo" class="border-2 border-gray-500 p-2">
        <br>


        <label for="Foto">Foto</label>
        {{$empleado->Foto }}
        <input type="file" name="Foto" value="" id="Foto" class="border-2 border-gray-500 p-2">
        <br>


        <input type="submit" value="Guardar datos" class="border-2 border-gray-500 p-2">
