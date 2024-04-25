<x-app-layout :categories="$categories" :images="$images">

    <div class="container mx-auto flex flex-wrap justify-center items-center py-6">

        <!-- Posts Section -->
        <section class="w-full md:w-2/3 flex flex-col items-center px-3">
            <h1>Posts: {{$posts->total()}}</h1>
            @foreach($posts as $post)
                <x-post-item :post="$post"></x-post-item>
            @endforeach

            {{$posts->appends(request()->except('page'))->links()}}

        </section>
    </div>
</x-app-layout>

