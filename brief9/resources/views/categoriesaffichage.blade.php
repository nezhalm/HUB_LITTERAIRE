

<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <a href="/add_categorie"  class="m-4  bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
            add
          </a>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">




                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">



                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    id
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    categorie
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    description
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    created_at
                                </th>

                                <th scope="col" class="px-6 py-3">
                                    update
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    delete
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($categories as $categorie )
                            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $categorie->id }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $categorie->nom }}

                                </td>
                                <td class="px-6 py-4">
                                    {{ $categorie->description }}

                                </td>
                                <td class="px-6 py-4">
                                    {{ $categorie->created_at }}

                                </td>

                                <td class="px-6 py-4">
                                    <a href="/edit_categorie/{{ $categorie->id }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                                        update
                                      </a>
                                </td>
                                <td class="px-6 py-4">
                                    <a href="/delete_categorie/{{ $categorie->id }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                                        delete
                                      </a>
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












