<x-app-layout>
    <br><br><br>
    @foreach($publicCouncil as $council)
        <h1 style="text-align: center;">{{$council->title}}</h1>
        <br>
        <div class="row">
            <div class="col-md-6 offset-md-3" style="font-size: 20px">{!! $council->description !!}</div>
        </div>
    @endforeach
</x-app-layout>


