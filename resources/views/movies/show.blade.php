<x-layout>

    <div>
        <div class="fade__in" style="background-image: linear-gradient(to right, rgb(0, 0, 0), rgba(2, 2, 2, 0.75)), url({{$movie->photo_bg}}); background-size: cover;">
            <div class="container">
                <div class="row py-3">
                    <div class="col-12 col-md-4 m-0 p-0">
                        <div class="fade__in"><img src="{{$movie->photo_poster}}" class="img-fluid p-2 rounded" alt="{{$movie->title}}"></div>
                    </div>
                    <div class="col d-flex flex-column text-white justify-content-center pt-2 pt-lg-0">
                        <h2 class="font-weight-bold">{{$movie->title}} <span class="text-muted small">({{$movie->year}})</span></h2>
                        <ul class="list-inline">
                            <li class="list-inline-item text-muted">Action</li>
                            <li class="list-inline-item text-muted">Drama</li>
                            <li class="list-inline-item text-muted">Science Fiction</li>
                        </ul>
                        <h5 class="font-weight-bold pt-3">Overview</h5>
                        <p>{{$movie->body}}</p>
                        <a href="" id="btn-watchlist" class="btn btn-warning btn-md" role="button">Watchlist</a>
                        <a href="/" class="btn-home">&#8249;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container my-4">

        <div class="border border-gray-400 p-4 rounded">
            <form method="POST" action="#">
                @csrf

                <header class="d-flex align-items-center">
                    <!-- items-center -->
                    <img class="rounded-circle" src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" width="40" height="40">
                    <h4 class="ms-4">Leave a review!</h4>
                </header>

                <div class="mt-3">
                    <textarea class="w-100 text-sm form-control" name="body" rows="5" placeholder="Write your review!" required></textarea>

                    @error('body')
                    <span class="text-xs text-danger">{{ $message }}</span>
                    @enderror

                </div>

                <div class="d-flex justify-content-end mt-3 pt-3 border-top border-gray-400">
                    <button class="btn btn-primary text-uppercase py-1 px-5" type="submit">Post </button>
                </div>
            </form>
        </div>

        <div class="border border-gray-400 p-4 rounded bg-light mt-3">
            <article class="d-flex ">
                <div class="flex-shrink-0">
                    <img class="rounded-circle" src="https://i.pravatar.cc/60?u={{ auth()->id() }}" alt="" width="60" height="60">
                </div>
                <div class="ms-4">
                    <header class="mb-4">
                        <h5 class="fw-bold">Username</h5>
                        <p class="font-sm">Posted
                            <time>Date</time>
                        </p>
                    </header>
                    <p>
                        This is a hardcoded test comment
                    </p>
                </div>
            </article>
        </div>
    </div>
</x-layout>