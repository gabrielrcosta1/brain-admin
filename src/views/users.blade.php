@extends('brainadmin.app')
@section('content')
<section class="py-8">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg">
            <div class="p-6">
                <!-- Search and Actions -->
                <div class="flex flex-col md:flex-row md:justify-between space-y-4 md:space-y-0 md:items-center">
                    <!-- Search Bar -->
                    <div class="w-full md:w-1/2">
                        <form class="flex items-center">
                            <label for="simple-search" class="sr-only">Search</label>
                            <div class="relative w-full">
                                <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                                <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Buscar produtos..." required>
                            </div>
                        </form>
                    </div>
                    <!-- Action Buttons -->
                    <div class="flex space-x-3">
                        <button type="button" class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-500 dark:hover:bg-blue-600 focus:outline-none">Adicionar Produto</button>
                        <button type="button" class="text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-200 font-medium rounded-lg text-sm px-4 py-2 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:bg-gray-700 focus:outline-none">Filtrar</button>
                    </div>
                </div>
            </div>
            <!-- Table -->
            <div class="overflow-x-auto p-6">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">Nome do Usuario</th>
                            <th scope="col" class="px-6 py-3">E-mail</th>
                            <th scope="col" class="px-6 py-3">tipo</th>
                            <th scope="col" class="px-6 py-3 text-right">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{$user->name}}</th>
                            <td class="px-6 py-4">{{$user->email}}</td>
                            <td class="px-6 py-4">Apple</td>
                        
                            <td class="px-6 py-4 text-right">
                                <button class="text-blue-600 hover:text-blue-900">Editar</button>
                                <button class="text-red-600 hover:text-red-900 ml-3">Excluir</button>
                            </td>
                        </tr>
                        @endforeach
                       
                        <!-- Repita as linhas conforme necessário -->
                    </tbody>
                </table>
            </div>
            <!-- Pagination -->
            <div class="p-6 border-t border-gray-200 dark:border-gray-700">
                <nav class="flex items-center justify-between">
                    <span class="text-sm text-gray-500 dark:text-gray-400">Mostrando 1-10 de 1000</span>
                    <ul class="inline-flex -space-x-px">
                        <li><a href="#" class="px-3 py-2 ml-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700">Anterior</a></li>
                        <li><a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700">1</a></li>
                        <li><a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700">2</a></li>
                        <li><a href="#" class="px-3 py-2 leading-tight text-blue-600 bg-blue-50 border border-blue-300 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700">3</a></li>
                        <li><a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700">Próxima</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
@endsection
