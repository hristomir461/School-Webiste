<x-app-layout>
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 style="font-size: 60px;" class="display-3 text-white mb-3 animated slideInDown">Училищни документи</h1>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <style>
        @import "https://fonts.googleapis.com/css?family=Montserrat:300,400,700";

        /* RESET RULES
         –––––––––––––––––––––––––––––––––––––––––––––––––– */
        :root {
            --lightgray: #efefef;
            --blue: steelblue;
            --white: #fff;
            --black: rgba(0, 0, 0, 0.8);
            --bounceEasing: cubic-bezier(0.51, 0.92, 0.24, 1.15);
        }

        /* X-APP-LAYOUT
        –––––––––––––––––––––––––––––––––––––––––––––––––– */
        .x-app-layout {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: var(--black);
            cursor: pointer;
            visibility: hidden;
            opacity: 0;
            transition: all 0.35s ease-in;
        }

        .x-app-layout.is-visible {
            visibility: visible;
            opacity: 1;
        }

        .x-app-layout-dialog {
            position: relative;
            width: 100%;
            height: 100%;
            display: flex;
            background: var(--white);
            overflow: auto;
            cursor: default;
        }

        .x-app-layout-dialog .x-app-layout-content {
            display: flex;
        }

        .x-app-layout-dialog .x-app-layout-content > * {
            flex: 1;
        }

        .x-app-layout-dialog .x-app-layout-content img {
            display: block;
            width: 100%;
            height: 100%;
            -o-object-fit: cover;
            object-fit: cover;
            background: var(--lightgray);
        }

        .x-app-layout-dialog .x-app-layout-content .text {
            display: grid;
            place-items: center;
            padding: 40px;
        }

        .x-app-layout-dialog .x-app-layout-content .text *:not(:last-child) {
            margin-bottom: 20px;
        }

        .x-app-layout-dialog .x-app-layout-content .text .cta {
            margin-bottom: 0;
        }

        .x-app-layout-dialog .close-x-app-layout {
            position: absolute;
            right: 2rem;
            font-size: 4rem;
            border: none;
        }

        /* ANIMATIONS
        –––––––––––––––––––––––––––––––––––––––––––––––––– */
        [data-animation] .x-app-layout-dialog {
            opacity: 0;
            transition: all 0.5s var(--bounceEasing);
        }

        [data-animation].is-visible .x-app-layout-dialog {
            opacity: 1;
            transition-delay: 0.2s;
        }

        [data-animation="slideInOutDown"] .x-app-layout-dialog {
            transform: translateY(100%);
        }

        [data-animation="slideInOutTop"] .x-app-layout-dialog {
            transform: translateY(-100%);
        }

        [data-animation="slideInOutLeft"] .x-app-layout-dialog {
            transform: translateX(-100%);
        }

        [data-animation="slideInOutRight"] .x-app-layout-dialog {
            transform: translateX(100%);
        }

        [data-animation="zoomInOut"] .x-app-layout-dialog {
            transform: scale(0.2);
        }

        [data-animation="rotateInOutDown"] .x-app-layout-dialog {
            transform-origin: top left;
            transform: rotate(-1turn);
        }

        [data-animation="mixInAnimations"].is-visible .x-app-layout-dialog {
            -webkit-animation: mixInAnimations 2s 0.2s linear forwards;
            animation: mixInAnimations 2s 0.2s linear forwards;
        }

        [data-animation="slideInOutDown"].is-visible .x-app-layout-dialog,
        [data-animation="slideInOutTop"].is-visible .x-app-layout-dialog,
        [data-animation="slideInOutLeft"].is-visible .x-app-layout-dialog,
        [data-animation="slideInOutRight"].is-visible .x-app-layout-dialog,
        [data-animation="zoomInOut"].is-visible .x-app-layout-dialog,
        [data-animation="rotateInOutDown"].is-visible .x-app-layout-dialog {
            transform: none;
        }

        @-webkit-keyframes mixInAnimations {
            0% {
                transform: translateX(-100%);
            }

            10% {
                transform: translateX(0);
            }

            20% {
                transform: rotate(20deg);
            }

            30% {
                transform: rotate(-20deg);
            }

            40% {
                transform: rotate(15deg);
            }

            50% {
                transform: rotate(-15deg);
            }

            60% {
                transform: rotate(10deg);
            }

            70% {
                transform: rotate(-10deg);
            }

            80% {
                transform: rotate(5deg);
            }

            90% {
                transform: rotate(-5deg);
            }

            100% {
                transform: rotate(0deg);
            }
        }

        @keyframes mixInAnimations {
            0% {
                transform: translateX(-100%);
            }

            10% {
                transform: translateX(0);
            }

            20% {
                transform: rotate(20deg);
            }

            30% {
                transform: rotate(-20deg);
            }

            40% {
                transform: rotate(15deg);
            }

            50% {
                transform: rotate(-15deg);
            }

            60% {
                transform: rotate(10deg);
            }

            70% {
                transform: rotate(-10deg);
            }

            80% {
                transform: rotate(5deg);
            }

            90% {
                transform: rotate(-5deg);
            }

            100% {
                transform: rotate(0deg);
            }
        }

        /* MQ
        –––––––––––––––––––––––––––––––––––––––––––––––––– */
        @media (max-width: 850px) {
            .x-app-layout-dialog .x
            .x-app-layout-dialog .x-app-layout-content {
                flex-direction: column;
            }
        }
        @media (max-width: 850px) {
            .table{
                max-width: 300px;
            }
        }
        .table{
            max-width: 900px;
            font-size: 14px;
        }
    </style>
    <center>
        <table class="table table-dark">
            <tr>
                <th style="text-align: center">Име</th>
                <th style="text-align: center">Отвори</th>
            </tr>
            @php
                $counter = 1;
            @endphp
            @foreach($monDocuments as $monDocument)
                <tr>
                    <td style="text-align: center">{{$monDocument->title}}</td>
                    <td style="text-align: center">   <!-- partial:index.partial.html -->
                        <button type="button" class="btn btn-primary" data-open="x-app-layout{{$counter}}">
                            Отвори
                        </button>

                        <div class="x-app-layout" id="x-app-layout{{$counter}}">
                            <div class="x-app-layout-dialog">
                                <button class="close-x-app-layout" aria-label="close x-app-layout" data-close>
                                    ✕
                                </button>
                                <section class="x-app-layout-content" style="width: 90%;">
                                    <div style="display: flex; justify-content: center; align-items: center; height: 100vh;">
                                        <iframe style="width: 100%; height: 90vh; border: 1px solid black;margin-left: 100px" src="./storage/{{$monDocument->file}}"></iframe>
                                    </div>
                                </section>
                            </div>
                        </div>
                        @php
                            $counter++;
                        @endphp
                    </td>
                </tr>
            @endforeach
        </table>
    </center>




    <script>
        const openEls = document.querySelectorAll("[data-open]");
        const closeEls = document.querySelectorAll("[data-close]");
        const isVisible = "is-visible";

        for (const el of openEls) {
            el.addEventListener("click", function () {
                const modalId = this.dataset.open;
                document.getElementById(modalId).classList.add(isVisible);
            });
        }

        for (const el of closeEls) {
            el.addEventListener("click", function () {
                this.parentElement.parentElement.classList.remove(isVisible);
            });
        }

        document.addEventListener("click", (e) => {
            if (e.target == document.querySelector(".x-app-layout.is-visible")) {
                document.querySelector(".x-app-layout.is-visible").classList.remove(isVisible);
            }
        });

        document.addEventListener("keyup", (e) => {
            // if we press the ESC
            if (e.key == "Escape" && document.querySelector(".x-app-layout.is-visible")) {
                document.querySelector(".x-app-layout.is-visible").classList.remove(isVisible);
            }
        });
    </script>
</x-app-layout>
