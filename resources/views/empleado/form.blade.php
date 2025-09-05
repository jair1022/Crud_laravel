@vite(['resources/css/app.css', 'resources/js/app.js'])
<label for="Nombre">Nombre</label>
        <input type="text" name="Nombre" value="{{isset($empleado->Nombre)?$empleado->Nombre:'' }}"  id="Nombre" class="border-2 border-gray-500 p-2">
        <br>

        <label for="ApellidoPaterno">Apellido Paterno</label>
        <input type="text" name="ApellidoPaterno" value="{{ isset($empleado->ApellidoPaterno)?$empleado->ApellidoPaterno:'' }}" id="ApellidoPaterno" class="border-2 border-gray-500 p-2">
        <br>

        <label for="ApellidoMaterno">Apellido Materno</label>
        <input type="text" name="ApellidoMaterno" value="{{ isset($empleado->ApellidoMaterno)?$empleado->ApellidoMaterno:'' }}" id="ApellidoMaterno" class="border-2 border-gray-500 p-2">
        <br>

        <label for="Correo">Correo</label>
        <input type="email" name="Correo" value="{{isset($empleado->Correo)?$empleado->Correo:'' }}" id="Correo" class="border-2 border-gray-500 p-2">
        <br>


        <label for="Foto">Foto</label>

        @if (isset($empleado->Foto))
        <img src="{{ asset ('storage').'/' . $empleado->Foto }}" alt="">
        @endif


        <!-- set ($empleado-?Foto) ? $empleado-?Foto : ??-->

        <input type="file" name="Foto" value="" id="Foto" class="border-2 border-gray-500 p-2">
        <br>


        <input type="submit" value="Guardar datos" class="border-2 border-gray-500 p-2">
