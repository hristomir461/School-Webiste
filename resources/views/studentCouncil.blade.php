<x-app-layout>
    <style>
        h1{
            color: #1c68b3 ;
            font-size:clamp(2.5rem, 10vw, 5rem);
            font-family: 'Parisienne', cursive;
        }
        .card-pink{
            border-radius: 6px;
            border-bottom:4px solid #ff2c95!important;
        }
        .card-blue{
            border-radius: 6px;
            border-bottom:4px solid #e31b1b !important;
        }

        .col .card img{
            width: 100%; /* Ensure the image takes the full width of its container */
            height: auto; /* Maintain aspect ratio */
            object-fit: contain; /* Ensure the entire image is visible without being cropped */
            border-top-left-radius: 6px; /* Match the card's border radius */
            border-top-right-radius: 6px;
        }
        .card-body{
            padding:1rem 1.5rem;
        }
        .card-body p{
            color:#4B5563;
        }
        .card-blue svg{
            fill: #e31b1b;
        }
        .card-pink svg{
            fill:#ff2c95;
        }
        .card-blue .card-footer p{
            color:#e31b1b ;
        }
        .card-pink .card-footer p{
            color: #ff2c95;
        }
        .card-shape{
            position:relative;
        }

        .custom-shape-divider-bottom-1634717805 {
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
            transform: rotate(180deg);
        }

        .custom-shape-divider-bottom-1634717805 svg {
            position: relative;
            display: block;
            width: 100%;
            height: 50px;
        }

        .custom-shape-divider-bottom-1634717805 .shape-fill {
            fill: #FFFFFF;
        }
    </style>

    <div class="container py-5">


        <div class="row row-cols-1 row-cols-md-4 g-4 justify-content-center">
            @foreach($studentCouncil as $student)
                <div class="col">
                    <div class="card card-blue overflow-hidden shadow bg-white border-0 px-0">
                        <div class="card-shape">
                            <img src="./storage/{{$student->image}}" class="card-img-top" alt="Thomas">
                            <div class="custom-shape-divider-bottom-1634717805">
                                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                                    <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                                    <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                                    <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
                                </svg>
                            </div>
                        </div>

                        <div class="card-footer" >
                            <p class="mb-0 font-weight-bolder" style="font-size: large">{{$student->name}}</p>
                            <small class="text-muted"style="font-size: medium">{{$student->student_role}}</small>
                            <small class="text-muted" style="font-size: medium">{{$student->class}} клас</small>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>


</x-app-layout>


