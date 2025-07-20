
<a href="#" class="mb-4 flex flex-col w-full bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row md:items-stretch md:justify-between  hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">

    <div class="flex flex-col justify-between p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $post->title }}</h5>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ Str::words($post->content, 20) }}</p>
    </div>
    <img class="object-cover w-full rounded h-48 md:h-auto md:w-48 md:rounded-none" src="{{ Storage::url($post->image) }}" alt="">
</a>
