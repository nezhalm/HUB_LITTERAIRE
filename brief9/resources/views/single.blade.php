

<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">




                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <h2>{{ $categorie->nom }}</h2>
                <p>{{ $categorie->description }}</p>

                </div>














            </div>
        </div>
    </div>
</x-app-layout>












