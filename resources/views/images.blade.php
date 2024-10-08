<x-app-layout>
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(../img/carousel-bg-1.jpg);">
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

        .image-gallery .image-gallery__img-holder:nth-child(3n+1) {
            margin-left: 0;
        }

        .image-gallery__img-holder img {
            width: 100%;
            height: 220px;
            display: block;
        }

        /* Popup Styling */
        .img-popup {
            position: fixed;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: rgba(255, 255, 255, .5);
            display: flex;
            justify-content: center;
            align-items: center;
            display: none;
            z-index: 2;
        }

        .img-popup img {
            max-width: 90%; /* Adjust as needed */
            max-height: 90vh; /* Adjust as needed */
            object-fit: contain; /* Maintain aspect ratio */
            margin: 0 auto; /* Center horizontally */
        }

        .close-btn {
            width: 35px;
            height: 30px;
            display: flex;
            justify-content: center;
            flex-direction: column;
            position: absolute;
            top: 20px;
            right: 60px;
            cursor: pointer;
        }

        .close-btn .bar {
            height: 4px;
            background: #333;
        }

        .close-btn .bar:nth-child(1) {
            transform: rotate(45deg);
        }

        .close-btn .bar:nth-child(2) {
            transform: translateY(-4px) rotate(-45deg);
        }

        .opened {
            display: flex;
        }

        .opened img {
            animation: animatepopup 1s ease-in-out .8s;
            -webkit-animation: animatepopup .3s ease-in-out forwards;
        }

        @keyframes animatepopup {
            to {
                opacity: 1;
                transform: translateY(0);
                -webkit-transform: translateY(0);
                -moz-transform: translateY(0);
                -ms-transform: translateY(0);
                -o-transform: translateY(0);
            }
        }

        @media screen and (max-width: 880px) {

            .image-gallery .image-gallery__img-holder:nth-child(3n+1) {
                margin-left: 16px;
            }

        }
     </style>

    <div class="image-gallery">
        @foreach($images as $image)
            @foreach($image->images as $img)
            <div class="image-gallery__img-holder">
                <img src="../storage/{{$img}}" alt="Image">
            </div>
            @endforeach
        @endforeach
    </div>

    <div class="img-popup">
        <img src="" alt="Popup Image">
        <div class="close-btn">
            <div class="bar"></div>
            <div class="bar"></div>
        </div>
    </div>

</x-app-layout>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.4/gsap.min.js'></script>
<script>
    $(document).ready(function() {

        // required elements
        var imgPopup = $('.img-popup');
        var imgCont  = $('.image-gallery__img-holder');
        var popupImage = $('.img-popup img');
        var closeBtn = $('.close-btn');

        // handle events
        imgCont.on('click', function() {
            var img_src = $(this).children('img').attr('src');
            imgPopup.children('img').attr('src', img_src);
            imgPopup.addClass('opened');
        });

        $(imgPopup, closeBtn).on('click', function() {
            imgPopup.removeClass('opened');
            imgPopup.children('img').attr('src', '');
        });

        popupImage.on('click', function(e) {
            e.stopPropagation();
        });

    });

    const selectContainer = document.querySelector(".select");
    const animateSelectIn = () => {
        gsap.from(
            [
                selectContainer,
                selectContainer.querySelector(".select-label"),
                selectContainer.querySelector(".select-value"),
                selectContainer.querySelector(".select-chevron")
            ],
            {
                duration: 1,
                opacity: 0,
                y: 5,
                stagger: 0.2,
                ease: "power4"
            }
        );
    };

    const handleEvents = () => {
        selectContainer.addEventListener("click", () => {
            if (selectContainer.classList.contains("active")) {
                selectContainer.classList.remove("active");
            } else {
                gsap.from([...selectContainer.querySelectorAll(".select-options-item")], {
                    duration: 0.1,
                    y: 10,
                    opacity: 0,
                    ease: "circle",
                    stagger: 0.05
                });
                selectContainer.classList.add("active");
            }
        });
    };
    handleEvents();
    animateSelectIn();
    function selectCategory(category){
        let url = new URL(window.location.href);
        url.searchParams.set("category", category);
        window.history.replaceState({}, "", url.href);
        location.reload();
    }
    function removeCategory(){
        let url = new URL(window.location.href);
        url.searchParams.delete("category");
        window.history.replaceState({}, "", url.href);
        location.reload();
    }
</script>
