<x-layout>

    <div class="container my-4">
        <!--Grid row-->
        <div class="row">
            <!--Grid column-->
            @foreach($movies as $movie)
            <div class="col-lg-4 col-md-12 mb-4">
                <img src="{{ $movie->photo_poster }}" class="img-fluid mb-4" alt="">
            </div>
            @endforeach

</x-layout>