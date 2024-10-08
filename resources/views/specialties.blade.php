<x-app-layout>
    <link rel="stylesheet" href="{{ asset('css/specialties.css') }}">

    <div class="tabs">
        <center>
            <div class="buttons">
                @foreach($specialties as $specialty)
                    <button class="tab {{ 'tab-' . $specialty->slug }}" onclick="makeActiveTab('{{ $specialty->slug }}')">{{ $specialty->title }}</button>
                @endforeach
            </div>
        </center>
        <div class="content">
            @foreach($specialties as $specialty)
            <div class="{{'inner content-' . $specialty->slug }}">
                <h1>{{$specialty->title}}</h1>
                {!! $specialty->description !!}
            </div>
            @endforeach
        </div>
    </div>


</x-app-layout>

<script>
        // Function to make the clicked tab active
        function makeActiveTab(num) {
        // Remove 'active' class from all buttons and tabs
        $('.buttons button').removeClass('active');
        $('.inner').removeClass('active');

        // Add 'active' class to the clicked button and corresponding tab
        $('.buttons .tab-' + num).addClass('active');
        $('.tabs .content-' + num).addClass('active');

        // Update URL with query parameter
        window.history.replaceState({}, '', window.location.pathname + '?specialty=' + num);
    }

        // Function to activate tab based on query parameter in URL
        function activateTabFromUrl() {
        // Get the value of the 'specialty' query parameter from the URL
        let urlParams = new URLSearchParams(window.location.search);
        let specialty = urlParams.get('specialty');


        // If 'specialty' query parameter exists and is a valid tab number, activate the corresponding tab
        if (specialty != null) {
        makeActiveTab(specialty);
        }else{
            let slug = document.getElementsByClassName('tab')[0].classList[1].replace("tab-", "");
            makeActiveTab(slug);
        }
    }

        // Call the function to activate tab based on query parameter when the page loads
        $(document).ready(function() {
        activateTabFromUrl();
    });

</script>
