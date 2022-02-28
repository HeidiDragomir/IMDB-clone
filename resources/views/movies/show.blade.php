<x-layout>
    <div class="fade-in" style="background-image: linear-gradient(to right, rgb(0, 0, 0), rgba(2, 2, 2, 0.75)), url('{{$movie->photo_bg}}'); background-size: cover;">
        <div class="container">
            <div class="row py-3">
                <div class="col-12 col-md-4 m-0 p-0">
                    <div class="fade__in"><img src="{{ $movie->photo_poster }}" class="img-fluid p-2 rounded" alt="{{ $movie->title }}"></div>
                </div>
                <div class="col d-flex flex-column text-white justify-content-center pt-2 pt-lg-0">
                    <h2 class="font-weight-bold">{{ $movie->title }} <span class="text-muted small">({{ $movie->year }})</span></h2>
                    <ul class="list-inline">
                        <li class="list-inline-item text-muted">{{ ucwords($movie->category->name) }}</li>
                    </ul>
                    <h5 class="font-weight-bold pt-3">Overview</h5>
                    <p>{{$movie->body}}</p>
                    @if($watchlist->where('movie_id', $movie->id)->exists())
                    <form method="POST" action="/movie/watchlist/delete">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="movie_id" value="{{ $movie->id }}">
                        <button class="btn btn-outline-warning d-flex align-items-center" type="submit">
                            <ion-icon name="checkmark-outline" class="me-2"></ion-icon> Added to Watchlist
                        </button>
                    </form>
                    @else
                    <form method="POST" action="/movie/{{ $movie->slug}}/add">
                        @csrf
                        <input type="hidden" name="movie_id" value="{{ $movie->id }}">
                        <button class="btn btn-warning btn-md d-flex align-items-center" type="submit">
                            <ion-icon name="add-outline" class="me-2"></ion-icon> Add to Watchlist
                        </button>
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- ACTORS SECTION -->
    @if(!$movie->actors->isEmpty())
    <div class="container">
        <h6 class="text-dark pt-4" style="width: 100%; border-bottom: 1px solid rgb(214, 214, 214); line-height: 0.1em; margin: 10px 0px 30px;">
            <span style="background: rgb(255, 255, 255); padding-right: 14px;">Top Cast</span>
        </h6>
        <div class="row pt-2">
            @foreach($movie->actors as $actor)
            <div class="text-center col-4 col-md-3 col-lg-2 mb-sm-2">
                <div class="fade-in brightness">
                    <img class="img-fluid cast-image" src="{{ $actor->photo_url }}" alt="{{ $actor->name }}">
                    <p class="mt-2">{{ $actor->name }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @endif

    <!-- RECOMMENDED MOVIES AND TRAILER -->
    @if(!$categories->isEmpty())
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-7">
                <h6 class="text-dark pt-4" style="width: 100%; border-bottom: 1px solid rgb(214, 214, 214); line-height: 0.1em; margin: 10px 0px 30px;"><span style="background: rgb(255, 255, 255); padding-right: 14px;">Recommended {{ ucwords($movie->category->name) }} Movies</span></h6>
                <div class="row text-center">
                    @foreach($categories->take(4) as $category)
                    <div class="container-movie col-6 col-md-3 col-lg-3">
                        <a class="text-decoration-none" href="/movies/{{ $category->slug }}">
                            <div class="fade-in brightness"><img src="{{ $category->photo_poster}}" class="img-fluid movie-recs-poster rounded" alt="{{ $category->name }}">
                                <h6 class="text-dark mt-2">{{ $category->title }}</h6>
                                <p class="text-dark">{{ $category->year }}</p>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col">
                <h6 class="text-dark pt-4" style="width: 100%; border-bottom: 1px solid rgb(214, 214, 214); line-height: 0.1em; margin: 10px 0px 30px;"><span style="background: rgb(255, 255, 255); padding-right: 14px;">Trailer</span></h6>
                <div class="mb-3 d-flex justify-content-center"><iframe width="460" height="215" class="rounded" allowfullscreen src="https://www.youtube.com/embed/j9Okx5teGBQ" title=""></iframe></div>
            </div>
        </div>
    </div>
    @endif


    <!-- REVIEW MOVIE SECTION   -->     
    <div class="container">
        <h6 class="text-dark pt-4" style="width: 100%; border-bottom: 1px solid rgb(214, 214, 214); line-height: 0.1em; margin: 10px 0px 30px;">
            <span style="background: rgb(255, 255, 255); padding-right: 14px;">Reviews</span>
        </h6>
        <div class="container">

            <div class="container my-5 p-0 d-flex flex-column align-items-center">

                @auth
                <div class="border border-gray-400 p-4 rounded" style="min-width: 80%">
                    <form method="POST" action="/movies/{{ $movie->slug }}/comments">
                        @csrf

                        <header class="d-flex align-items-center ">
                            <!-- items-center -->
                            <img class="rounded-circle" src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="profile picture" width="40" height="40">
                            <h4 class="ms-4">Leave a review!</h4>
                        </header>

                        <select name="stars" class="form-select mt-3" aria-label="Default select example" required>
                            <option value="0" selected>Rate {{ $movie->title }}</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>

                        <div class="mt-3">
                            <textarea class="w-100 text-sm form-control" name="body" rows="5" placeholder="Write your review!" required></textarea>

                            @error('body')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror

                        </div>

                        <div class="d-flex justify-content-end mt-3 pt-3 border-top border-gray-400">
                            <button class="btn btn-secondary text-uppercase py-1 px-5" type="submit">Post </button>
                        </div>
                    </form>
                </div>
                @else
                <p class="fw-bold">
                    <a class="link-dark" href="/register">Register</a> or <a class="link-dark" href="/login">log in</a> to leave a comment.
                </p>
                @endauth



                <!-- COMMENTS SECTION   -->  
                @foreach ($movie->comments->reverse() as $comment)
                @if($comment->approved == 1)
                <div class="border border-gray-400 p-4 rounded bg-light mt-1" style="min-width: 80%;">
                    <article class="d-flex ">
                        <div class="flex-shrink-0">
                            <img class="rounded-circle" src="https://i.pravatar.cc/60?u={{ $comment->user_id }}" alt="" width="60" height="60">
                        </div>
                        <div class="ms-4 w-100">
                            <header class="mb-2">
                                <h5 class="fw-bold">{{ ucwords($comment->user->username) }}</h5>
                                @if ($comment->stars == 0)
                                <p class="badge bg-dark text-wrap">
                                    Rated: <ion-icon name="star"></ion-icon> No rating
                                </p>
                                @else
                                <p class="badge bg-warning text-wrap">
                                    Rated: <ion-icon name="star"></ion-icon> {{ $comment->stars }}/5
                                </p>
                                @endif
                            </header>
                            <p class="fs-6">
                                {{ $comment->body }}
                            </p>
                            <div class="mt-3 pt-3 border-top border-gray-400">
                                <p class="fs-6 text-muted">Posted
                                    <time>{{ $comment->created_at->diffForHumans() }}</time>
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
                @endif
                @endforeach


            </div>
</x-layout>