<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/teachers.css') }}">

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 p-0" style="background-image: url(img/carousel-bg-1.jpg);">
    <div class="container-fluid page-header-inner py-5">
        <div class="container text-center">
            <h1 style="font-size: 60px;" class="display-3 text-white mb-3 animated slideInDown">Учители</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-uppercase" style="font-size: 15px;">
                    <li class="breadcrumb-item"><a href="#">За училището</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Учители</li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<!-- Page Header End -->


<div class="sections" style="--length: 5" role="list">
    <div class="section" style="--i: 1">
        <h3>Задължителна професионална подготвка (ЗПП)</h3>
        <div class="row" style="font-size: 15px; color: rgb(70 70 70);">
            <div class="col">
                @php
                    $teachers1 = $teachers->where('class',  'PROFESSIONAL_PREPARATION');
                    $total = $teachers1->count();
                    $half = ceil($total / 2); // Calculate half of the total records
                    $firstHalf = $teachers1->slice(0, $half); // Get the first half of records
                @endphp

                @foreach($firstHalf as $teacher)
                    {{ $teacher->names }}
                    <br/>
                @endforeach
            </div>
            <div class="col">
                @php
                    $secondHalf = $teachers1->slice($half); // Get the second half of records
                @endphp

                @foreach($secondHalf as $teacher)
                    {{ $teacher->names }}
                    <br/>
                @endforeach
            </div>
        </div>
    </div>
    <div class="section" style="--i: 2">
        <h3>Физическо възпитание и спорт</h3>
        <div class="row" style="font-size: 15px; color: rgb(70 70 70);">
            <div class="col">
                @foreach($teachers->where('class', 'PHYSICAL_EDUCATION') as $teacher)
                    {{ $teacher->names }}
                    <br/>
                @endforeach
            </div>
        </div>
    </div>
    <div class="section" style="--i: 3">
        <h3>Природни науки и екология</h3>
        <div class="row" style="font-size: 15px; color: rgb(70 70 70);">
            <div class="col">
                @foreach($teachers->where('class', 'NATURAL_SCIENCES') as $teacher)
                    {{ $teacher->names }}
                    <br/>
                @endforeach
            </div>
        </div>
    </div>
    <div class="section" style="--i: 4">
        <h3>Математика, информатика и информационни технологии</h3>
        <div class="row" style="font-size: 15px; color: rgb(70 70 70);">
            <div class="col">
                @foreach($teachers->where('class', 'MATHEMATICS_INFORMATICS') as $teacher)
                    {{ $teacher->names }}
                    <br/>
                @endforeach
            </div>
        </div>
    </div>
    <div class="section" style="--i: 5">
        <h3>Български език и литература</h3>
        <div class="row" style="font-size: 15px; color: rgb(70 70 70);">
            <div class="col">
                @foreach($teachers->where('class', 'BG_LANGUAGE_LITERATURE') as $teacher)
                    {{ $teacher->names }}
                    <br/>
                @endforeach
            </div>
        </div>
    </div>
    <div class="section" style="--i: 6">
        <h3>Чужди езици</h3>
        <div class="row" style="font-size: 15px; color: rgb(70 70 70);">
            <div class="col">
                @foreach($teachers->where('class', 'FOREIGN_LANGUAGES') as $teacher)
                    {{ $teacher->names }}
                    <br/>
                @endforeach
            </div>
        </div>
    </div>
    <div class="section" style="--i: 7">
        <h3>Обществени науки, гражданско образование и религия</h3>
        <div class="row" style="font-size: 15px; color: rgb(70 70 70);">
            <div class="col">
                @foreach($teachers->where('class', 'SOCIAL_SCIENCES') as $teacher)
                    {{ $teacher->names }}
                    <br/>
                @endforeach
            </div>
        </div>
    </div>
    <div class="section" style="--i: 7">
        <h3>Списък на педагогическия състав</h3>
        <div class="row" style="font-size: 15px; color: rgb(70 70 70);">
            <div class="col">
                @foreach($teachers->where('class', 'TEACHER_STAFF') as $teacher)
                    {{ $teacher->names }}
                    <br/>
                @endforeach
            </div>
        </div>
    </div>
</div>
</x-app-layout>
