<x-layout>
<div class="container my-4">
<h2 class="featurette-heading">Your Watchlist</h2>
</div>
        @if($watchlists->count())
        <div class="album">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-4 g-3">
                    @foreach ($watchlists as $watchlist)
                    <div class="col">
                        <div class="card shadow-sm">
                            <a href="/movies/{{ $watchlist->movie->slug }}">
                                <img src="{{ $watchlist->movie->photo_poster }}" class="card-img-top brightness"></img>
                            </a>
                            <div class="card-body">
                                <a class="text-decoration-none text-dark" href="/movies/{{ $watchlist->movie->slug }}">
                                    <h4 class="card-text mb-2">{{ $watchlist->movie->title }}</h4>
                                    <p class="card-text mb-4">{{ \Illuminate\Support\Str::limit($watchlist->movie->body, 40, '...') }}</p>
                                </a>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <form method="POST" action="/movie/watchlist/delete">
                                            @csrf
                                            @method('DELETE')
                                            <input type="hidden" name="id" value="{{ $watchlist->id }}">
                                            <button type="submit" class="btn btn-sm btn-outline-danger d-flex align-items-center"><ion-icon class="me-1" style="padding-top: 0.8px;" name="close-outline"></ion-icon>Remove</button>
                                        </form>
                                    </div>
                                    <small class="text-muted">{{ $watchlist->created_at->diffForHumans() }}</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="mt-4">
                    {{ $watchlists->links() }} <!-- RENDER THE PAGINATIONS LINKS -->
                </div>
            </div>
        </div>
        @else
        <div class="container mt-4">
            <p>No movies in your Watchlist.</p>
        </div>
        @endif



</x-layout>