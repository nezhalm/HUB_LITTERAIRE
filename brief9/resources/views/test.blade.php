<x-app-layout>
    <x-slot name="header">

    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __('l9ititha!') }}
                </div>


                <body class="antialiased bg-gray-200 text-gray-900 font-sans p-6">
                    <div class="container mx-auto">
                        @foreach ($livres as $livre)
                            <div class="flex flex-wrap -mx-4">
                                <div class="w-full sm:w-1/2 md:w-1/2 xl:w-1/4 p-4">
                                    <a href=""
                                        class="c-card block bg-white shadow-md hover:shadow-xl rounded-lg overflow-hidden">
                                        <div class="relative pb-48 overflow-hidden">
                                            <img class="absolute inset-0 h-full w-full object-cover"
                                                src="https://images.unsplash.com/photo-1475855581690-80accde3ae2b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80"
                                                alt="">
                                        </div>
                                        <div class="p-4">
                                            <span
                                                class="inline-block px-2 py-1 leading-none bg-orange-200 text-orange-800 rounded-full font-semibold uppercase tracking-wide text-xs">Highlight</span>
                                            <h2 class="mt-2 mb-2  font-bold">Purus Ullamcorper Inceptos Nibh</h2>
                                            <p class="text-sm">Cras justo odio, dapibus ac facilisis in, egestas eget
                                                quam. Donec ullamcorper nulla non metus auctor fringilla.</p>
                                            <div class="mt-3 flex items-center">
                                                <span class="text-sm font-semibold">ab</span>&nbsp;<span
                                                    class="font-bold text-xl">{{ $livre->title }}</span>&nbsp;<span
                                                    class="text-sm font-semibold">€</span>
                                            </div>
                                        </div>
                                        <div class="p-4 border-t border-b text-xs text-gray-700">
                                            <span class="flex items-center mb-1">
                                                <i
                                                    class="far fa-clock fa-fw mr-2 text-gray-900"></i>{{ $livre->categorie }}
                                            </span>
                                            <span class="flex items-center">
                                                <i class="far fa-address-card fa-fw text-gray-900 mr-2"></i>
                                                {{ $livre->contente }}
                                            </span>
                                        </div><a href="/favoris/{{ $livre->id }}" type="button"
                                            class="inline-block rounded bg-red-700 px-6 pt-2.5 pb-2 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#dc4c64] transition duration-150 ease-in-out hover:bg-danger-600 hover:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:bg-danger-600 focus:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)] focus:outline-none focus:ring-0 active:bg-danger-700 active:shadow-[0_8px_9px_-4px_rgba(220,76,100,0.3),0_4px_18px_0_rgba(220,76,100,0.2)]">
                                            add to favoris
                                        </a>
                                        <div class="flex">



                                        <div class="p-4 flex items-center text-sm text-gray-600"><svg
                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 fill-current text-yellow-500">
                                                <path
                                                    d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                                                </path>
                                            </svg><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 fill-current text-yellow-500">
                                                <path
                                                    d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                                                </path>
                                            </svg><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 fill-current text-yellow-500">
                                                <path
                                                    d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                                                </path>
                                            </svg><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 fill-current text-yellow-500">
                                                <path
                                                    d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                                                </path>
                                            </svg><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                class="h-4 w-4 fill-current text-gray-400">
                                                <path
                                                    d="M8.128 19.825a1.586 1.586 0 0 1-1.643-.117 1.543 1.543 0 0 1-.53-.662 1.515 1.515 0 0 1-.096-.837l.736-4.247-3.13-3a1.514 1.514 0 0 1-.39-1.569c.09-.271.254-.513.475-.698.22-.185.49-.306.776-.35L8.66 7.73l1.925-3.862c.128-.26.328-.48.577-.633a1.584 1.584 0 0 1 1.662 0c.25.153.45.373.577.633l1.925 3.847 4.334.615c.29.042.562.162.785.348.224.186.39.43.48.704a1.514 1.514 0 0 1-.404 1.58l-3.13 3 .736 4.247c.047.282.014.572-.096.837-.111.265-.294.494-.53.662a1.582 1.582 0 0 1-1.643.117l-3.865-2-3.865 2z">
                                                </path>
                                            </svg><span class="ml-2">34 Bewertungen</span></div></div>
                                    </a>

                                </div>
                            </div>

                    </div>
                    @endforeach

            </div>





            </body>














        </div>
    </div>
    </div>
</x-app-layout>
