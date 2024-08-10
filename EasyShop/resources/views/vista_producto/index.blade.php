<!-- resources/views/vista_producto/index.blade.php -->

<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Lista de Productos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('vista_producto.create') }}" class="px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                        Crear Nuevo Producto
                    </a>
                    <table class="min-w-full mt-4">
                        <thead>
                            <tr>
                                <th class="px-6 py-3 text-left">Nombre</th>
                                <th class="px-6 py-3 text-left">Descripción</th>
                                <th class="px-6 py-3 text-left">Precio</th>
                                <th class="px-6 py-3 text-left">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($Productos as $producto)
                                <tr>
                                    <td class="px-6 py-4">{{ $producto->Nombre_Producto }}</td>
                                    <td class="px-6 py-4">{{ $producto->descripcion }}</td>
                                    <td class="px-6 py-4">{{ $producto->precio }}</td>
                                    <td class="px-6 py-4">
                                        <a href="{{ route('vista_producto.show', $producto->id) }}" class="text-blue-600">Ver</a>
                                        <a href="{{ route('vista_producto.edit', $producto->id) }}" class="ml-2 text-yellow-600">Editar</a>
                                        <form action="{{ route('vista_producto.destroy', $producto->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="ml-2 text-red-600">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

