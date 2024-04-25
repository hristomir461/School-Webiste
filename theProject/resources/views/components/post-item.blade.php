<article class="flex flex-col shadow my-4">
    <!-- Article Image -->
    <a class="hover:opacity-75">
        <center> <img src="./storage/{{$post->image}}"></center>
    </a>
    <div class="bg-white flex flex-col justify-start p-6">
        @foreach($post->categories as $category)
            <a class="text-blue-700 text-sm font-bold uppercase pb-4">{{$category->title}}</a>
        @endforeach
        <a class="text-3xl font-bold hover:text-gray-700 pb-4">{{$post->title}}</a>
        <p class="text-sm pb-3">
            By <a class="font-semibold hover:text-gray-800">{{$post->user->name}}</a>, Published on {{$post->getFormattedDate()}}
        </p>
        <a class="pb-6">{{$post->shortDescription()}}</a>
        <a href="{{route('details', $post)}}" class="uppercase text-gray-800 hover:text-black">Continue Reading <i class="fas fa-arrow-right"></i></a>
    </div>
</article>
