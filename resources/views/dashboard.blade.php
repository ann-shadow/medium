<x-app-layout>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900">

                    <ul class="flex flex-wrap text-sm font-medium text-center text-gray-500 dark:text-gray-400 justify-center">

                        <li class="me-2">
                            <a href="#"  class="inline-block px-4 py-2 text-white bg-blue-600 rounded-lg active">All</a>
                        </li>

                        @foreach($categories as $category)
                            <li class="me-2">
                                <a href="#" class="inline-block px-4 py-2 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>

                </div>
            </div>

            <div class="text-gray-900 mt-8">
                @foreach($posts as $post)

                    <a href="#" class="mb-4 flex flex-col w-full bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row md:items-stretch md:justify-between  hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">

                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->title }}</h5>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ Str::words($post->content, 20) }}</p>
                        </div>
                        <img class="object-cover w-full rounded h-48 md:h-auto md:w-48 md:rounded-none" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="">
                    </a>

                @endforeach

                    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700 mb-8">
                        <a href="#">
                            {{-- object-cover --}}
                            <img class="rounded-t-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="" />
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->title }}</h5>
                            </a>
                            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ Str::words($post->content, 20) }}</p>
                            <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Read more
                                <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                </svg>
                            </a>
                        </div>
                    </div>


                {{--@endforeach--}}
            </div>

        </div>
    </div>
</x-app-layout>
