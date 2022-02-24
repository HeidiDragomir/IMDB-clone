<x-layout>

    <section class="container my-4 d-flex justify-content-center align-items-center flex-column">

        @foreach ($watchlists as $watchlist)
        <div class="card shadow-lg p-3 mb-5 bg-light rounded" style="max-width: 540px;">
                <div class="row g-0 justify-content-center">
                    <div class="col-md-4">


                        <img src="https://image.tmdb.org/t/p/w500/1g0dhYtq4irTY1GPXvft6k4YLjm.jpg" class="w-100" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{ ucwords($watchlist->movie->title) }}</h5>
                            <p class="card-text">Peter Parker is unmasked and no longer able to separate his normal life from the high-stakes of being a super-hero. When he asks for help from Doctor Strange the stakes become even more dangerous, forcing him to discover what it truly means to be Spider-Man.</p> 
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-outline-danger btn-sm mt-2" data-mdb-ripple-color="#000000">Remove from watchlist</button>
        </div>


        @endforeach


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
        </div>

    </section>



</x-layout>