<x-app-layout>

    <!-- Carousel Start -->
    <div class="container-fluid p-0 m-0">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-bg-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start" style="margin-bottom: 200px;">
                                    <h6 style="font-size: 15px;" class="text-white mb-3 animated slideInDown">Учим днес, за да можем утре!</h6>
                                    <h1 style="font-size: 30px;" class="display-3 text-white mb-4 pb-3 animated slideInDown">Професионална гимназия по механотехника, електроника, телекумуникации и транспорт "Христо Ботев" Шумен</h1>
                                    <a href="{{url('/news')}}" style="font-size: large;" class="btn-lg btn-primary py-3 px-5 animated slideInLeft">Научете повече<i class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <video width="600" poster="video/poster.jpg" controls style="margin-bottom: 200px;">
                                        <source src="video/video.mp4" type="video/mp4">
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
</x-app-layout>

