<x-layout>

    <section class="container my-4 d-flex justify-content-center align-items-center flex-column">
        @if($watchlists->count())
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
        @else
        <p>No movies in your Watchlist.</p>
        @endif
    </section>



</x-layout>