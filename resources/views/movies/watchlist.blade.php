<x-layout>

    <section class="container my-4 d-flex justify-content-center align-items-center flex-column">

       @foreach ($watchlists as $watchlist)
            <div class="card shadow-lg p-3 mb-5 bg-light rounded" style="max-width: 540px;">
            <div class="row g-0 justify-content-center">
                <div class="col-md-4">
                    <img src="{{ $watchlist->movie->photo_poster }}" class="w-100" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">{{ $watchlist->movie->title }}</h5>
                        <p class="card-text">{{ \Illuminate\Support\Str::limit($watchlist->movie->body, 200, '...') }}</p>
                    </div>
                </div> 
            </div>
            <form method="POST" action="/movie/watchlist/delete">
                @csrf
                @method('DELETE')
                <input type="hidden" name="id" value="{{ $watchlist->id }}">
                <button type="submit" class="btn btn-outline-danger btn-sm mt-2 w-100" data-mdb-ripple-color="#000000">Remove from watchlist</button>
            </form>
        </div>
        @endforeach

<!-- 


        <div class="card shadow-lg p-3 mb-5 bg-light rounded" style="max-width: 540px;">
            <div class="row g-0 justify-content-center">
                <div class="col-md-4">
                    <img src="https://image.tmdb.org/t/p/w500/i0z8g2VRZP3dhVvvSMilbOZMKqR.jpg" class="w-100" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">The Requin (2022)</h5>
                        <p class="card-text">A couple on a romantic getaway find themselves stranded at sea when a tropical storm sweeps away their villa. In order to survive, they are forced to fight the elements, while sharks circle below.</p>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-outline-danger btn-sm mt-2" data-mdb-ripple-color="#000000">Remove from watchlist</button>
        </div>


        <div class="card shadow-lg p-3 mb-5 bg-light rounded" style="max-width: 540px;">
            <div class="row g-0 justify-content-center">
                <div class="col-md-4">
                    <img src="https://image.tmdb.org/t/p/w500/zzXFM4FKDG7l1ufrAkwQYv2xvnh.jpg" class="w-100" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">The Ice Age Adventures of Buck Wild (2022)</h5>
                        <p class="card-text">The fearless one-eyed weasel Buck teams up with mischievous possum brothers Crash & Eddie as they head off on a new adventure into Buck's home: The Dinosaur World.</p>
                    </div>
                </div>
            </div>
            <button type="button" class="btn btn-outline-danger btn-sm mt-2" data-mdb-ripple-color="#000000">Remove from watchlist</button>
        </div> -->

    </section>



</x-layout>