

<x-app-layout>
    <x-slot name="header">

    </x-slot>
<h1 class="text-white ml-4 mt-4">MODIFIER UNE CATEGORIE</h1>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">

                <form action="/update_categorie/{{ $cat->id }}" method="post">
                    @csrf
                    <div class="mb-6">
                      <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">name</label>
                      <input type="text" id="nom" value="{{ $cat->nom }}" name="nom" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name" required>
                    </div>
                    <div class="mb-6">
                        <label for="text" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">name</label>
                        <input type="text" id="nom" value="{{ $cat->description }}" name="description" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name" required>
                      </div>

                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">update</button>
                  </form>
            </div>
        </div>
    </div>
</x-app-layout>












