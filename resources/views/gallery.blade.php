<x-app-layout>
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 style="font-size: 60px;" class="display-3 text-white mb-3 animated slideInDown">Галерия</h1>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <style>
        /* Image gallery styling */
        .image-gallery {
            max-width: 900px;
            margin: 80px auto 0;
            text-align: center;
        }

        .image-gallery__img-holder {
            max-width: 280px;
            display: inline-block;
            vertical-align: top;
            margin-bottom: 20px;
            margin-left: 16px;
            cursor: pointer;
        }



        .image-gallery__img-holder img {
            width: 100%;
            height: 220px;
            display: block;
        }


    </style>

    <div class="image-gallery">
        @foreach($images as $image)
            <a href="/gallery/{{$image->id}}">
                <div class="image-gallery__img-holder">
                    <img src="./storage/{{$image->images[0]}}" alt="Image">
                    @foreach($image->categories as $category)
                        <h2>{{$category->title}}</h2>
                    @endforeach
                </div>
            </a>
        @endforeach
    </div>



</x-app-layout>

