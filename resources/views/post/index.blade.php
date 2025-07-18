<x-app-layout>

    <div class="py-4">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900">

                    <x-category-tabs></x-category-tabs>

                </div>
            </div>

            <div class="text-gray-900 mt-8">
                @forelse($posts as $p)
                    <x-post-item :post="$p"> </x-post-item>
                @empty
                    <div class="text-center text-gray-400 py-16">No Post Found</div>
                @endforelse
            </div>

            {{ $posts->onEachSide(0)->links() }}

        </div>
    </div>
</x-app-layout>
