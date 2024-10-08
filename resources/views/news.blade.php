<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/news.css') }}">
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-1.jpg);">
        <div class="container-fluid page-header-inner py-5">
            <div class="container text-center">
                <h1 style="font-size: 60px;" class="display-3 text-white mb-3 animated slideInDown">Новини</h1>
            </div>
        </div>
    </div>
    <!-- Page Header End -->
    <div id="search">

        <svg viewBox="0 0 420 60" xmlns="http://www.w3.org/2000/svg">
            <rect class="bar"/>

            <g class="magnifier">
                <circle class="glass"/>
                <line class="handle" x1="32" y1="32" x2="44" y2="44"></line>
            </g>

            <g class="sparks">
                <circle class="spark"/>
                <circle class="spark"/>
                <circle class="spark"/>
            </g>

            <g class="burst pattern-one">
                <circle class="particle circle"/>
                <path class="particle triangle"/>
                <circle class="particle circle"/>
                <path class="particle plus"/>
                <rect class="particle rect"/>
                <path class="particle triangle"/>
            </g>
            <g class="burst pattern-two">
                <path class="particle plus"/>
                <circle class="particle circle"/>
                <path class="particle triangle"/>
                <rect class="particle rect"/>
                <circle class="particle circle"/>
                <path class="particle plus"/>
            </g>
            <g class="burst pattern-three">
                <circle class="particle circle"/>
                <rect class="particle rect"/>
                <path class="particle plus"/>
                <path class="particle triangle"/>
                <rect class="particle rect"/>
                <path class="particle plus"/>
            </g>
        </svg>
            <input id="typeSomething" type="search" name="q" aria-label="Search for inspiration"/>
    </div>

    <br>
    <center>
        <div class="select" style="z-index: 1; ">
            <div class="select-label">Избери категория</div>
            <div class="select-value">новина</div>
            <div class="select-options">
                @foreach($categories as $category)
                <div class="select-options-item" onclick="selectCategory('{{$category->slug}}')">{{$category->title}}</div>
                @endforeach
                <div class="select-options-item" onclick="removeCategory()">Без</div>
            </div>
            <div class="select-chevron"></div>
        </div>
    </center>
    <br><br><br>

    <div class="main">

        <ul class="news">
            @php
                $count = 1;
            @endphp
            @foreach($posts as $post)
            <li class="news_item news_item_{{$count}}">
                <div class="new">
                    <div class="new_image"><img src="./storage/{{$post->image}}">
                        @foreach($post->categories as $category)
                        <span class="note">{{$category->title}}</span>
                        @endforeach
                    </div>
                    <div class="new_content">
                        <h2 class="new_title">{{$post->title}}</h2>
                        <div class="new_text">
                            <p>{{$post->shortDescription()}}</p>
                        </div>
                        <br>
                        <center><a href="{{route('details', $post)}}" style="font-size: small;background-color: #ffdb45;color:black;font-weight: bold;" class="btn-lg btn-primary py-3 px-5 animated slideInLeft">Научете повече</a></center>
                    </div>

                </div>
            </li>
                @php
                    $count++;
                @endphp
            @endforeach
        </ul>
        {{$posts->appends(request()->except('page'))->links()}}
    </div>
</x-app-layout>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.3.4/gsap.min.js'></script>

<script>
    function typeSomething() {
        let el = document.getElementById("typeSomething");
        el.placeholder = "Потърси тук ..."
    }

    setTimeout(typeSomething, 4000);

    document.getElementById("typeSomething").addEventListener("keypress", function(event) {
        if (event.key === "Enter") {
            search();
        }
    });
    function search(){
        let text = document.getElementById('typeSomething');

        let url = new URL(window.location.href);

        url.searchParams.set("search", text.value);

        window.history.replaceState({}, "", url.href);
        location.reload();
    }

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


    handleEvents();
    animateSelectIn();
</script>
