<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(../img/carousel-bg-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 style="font-size: 60px;" class="display-3 text-white mb-3 animated slideInDown">Новини</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center text-uppercase" style="font-size: 15px;">
                        <li class="breadcrumb-item text-white active" aria-current="page">{{$post->title}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <div class="flex justify-center">
        <!-- Post Section -->
        <section class="w-full md:w-2/3 flex flex-col px-3 items-center">

            <article class="flex flex-col shadow my-4">
                <!-- Article Image -->

                    <center>
                        <div class="bg-white flex flex-col justify-start p-6">
                            <div class="flex gap-4">
                                <div class="new_image"><img width="600" height="600" src="../storage/{{$post->image}}">
                                    @foreach($post->categories as $category)
                                        <span class="note">{{$category->title}}</span>
                                    @endforeach
                                </div>
                            </div>



                            <div style="text-align: justify;margin-left: 200px;margin-right: 200px;margin-top: 50px;font-size: 20px">
                                {!! $post->description !!}
                            </div>
                        </div>
                        <p style="margin-top: 50px;font-size: 15px">Публикубано на {{$post->getFormattedDate()}}</p>
                    </center>


            </article>

        </section>

    </div>


</x-app-layout>

