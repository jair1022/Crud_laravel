Mostrar la lista de empleados
@vite(['resources/css/app.css', 'resources/js/app.js'])

<table class="mx-auto border border-gray-300 shadow-md rounded-lg w-1/2">
    <thead class="thead-light">
        <tr>
            <th class="border-2 border-gray-500 p-2 bg-gray-200 text-blue-700">ID</th>
            <th class="border-2 border-gray-500 p-2 bg-gray-200 text-blue-700">Foto</th>
            <th class="border-2 border-gray-500 p-2 bg-gray-200 text-blue-700">Nombre</th>
            <th class="border-2 border-gray-500 p-2 bg-gray-200 text-blue-700">Apellido Paterno</th>
            <th class="border-2 border-gray-500 p-2 bg-gray-200 text-blue-700">Apellido Materno</th>
            <th class="border-2 border-gray-500 p-2 bg-gray-200 text-blue-700">Correo</th>
            <th class="border-2 border-gray-500 p-2 bg-gray-200 text-blue-700">Acciones</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($empleados as $empleado)
            <tr class="border-2 border-gray-500 p-2">
                <td class="border-2 border-gray-500 p-2">{{ $empleado->id }}</td>
                <td class="border-2 border-gray-500 p-2">{{ $empleado->foto }}</td>
                <td class="border-2 border-gray-500 p-2">{{ $empleado->nombre }}</td>
                <td class="border-2 border-gray-500 p-2">{{ $empleado->ApellidoPaterno }}</td>
                <td class="border-2 border-gray-500 p-2">{{ $empleado->ApellidoMaterno }}</td>
                <td class="border-2 border-gray-500 p-2">{{ $empleado->correo }}</td>

                <td class="px-4 py-2">
                    <div class="flex justify-center gap-3">
                        <!-- Botón Editar como <button> -->
                        <form action="{{ url('/empleado/' . $empleado->id . '/edit') }}" method="get">
                            <button type="submit"
                                class="w-24 border-2 border-gray-500 px-4 py-2 rounded hover:bg-gray-500 hover:text-white transition">
                                Editar
                            </button>
                        </form>

                        <!-- Botón Borrar -->
                        <form action="{{ url('/empleado/' . $empleado->id) }}" method="post"
                            onsubmit="return confirm('¿Quieres borrar?')">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button type="submit"
                                class="w-24 border-2 border-gray-500 px-4 py-2 rounded hover:bg-red-700 hover:text-white transition">
                                Borrar
                            </button>
                        </form>

                    </div>
                </td>







            </tr>
        @endforeach
    </tbody>

</table>
