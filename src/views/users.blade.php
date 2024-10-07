@extends('app')
@section('contend')
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Gerenciamento de Usuários</h1>
        <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Adicionar Usuário</a>
    </div>

    <div class="overflow-hidden rounded-lg shadow-md">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-200">
                <tr>
                    <th class="py-3 px-4 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">#</th>
                    <th class="py-3 px-4 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Nome</th>
                    <th class="py-3 px-4 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Email</th>
                    <th class="py-3 px-4 text-left text-xs font-medium text-gray-600 uppercase tracking-wider">Ações</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($users as $user)
                    <tr>
                        <td class="py-4 px-4 text-sm text-gray-800">{{ $user->id }}</td>
                        <td class="py-4 px-4 text-sm text-gray-800">{{ $user->name }}</td>
                        <td class="py-4 px-4 text-sm text-gray-800">{{ $user->email }}</td>
                        <td class="py-4 px-4 text-sm text-gray-800">
                            <a href="/users/edit/{{ $user->id }}"
                                class="bg-yellow-400 text-white px-3 py-1 rounded hover:bg-yellow-500">Editar</a>
                            <a href="/users/delete/{{ $user->id }}"
                                class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 ml-2">Excluir</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
