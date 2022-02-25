<x-layout>

  <!-- CARUSELL -->
  <x-movie-carousel />

  <!-- DROPDOWN FOR CATEGORIES -->
  <div class="container">
    <div class="d-flex align-items-center mt-3">
      <x-category-dropdown />

      <!-- SEARCH BAR -->
      <div class=" col-md-10 ">
        <div class="col-auto">
          <form method="GET" action="/">
            @if(request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
            @endif
            <input type="search" name="search" class="form-control col-lg-auto fs-5 pt-2 pb-2" placeholder="Search..." aria-label="Search" value="{{ request('search') }}">
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- GRID FOR POSTERS -->
  <!-- <div class="container mt-3 border-bottom d-flex justify-content-between">
        <p class="fs-3">Featured Movies</p>
      </div> -->

  <div class="container mt-4">
    <div class="row text-center mt-4">
      @if($movies->count())
      @foreach ($movies as $movie)
      <div class="col-6 col-md-5 offset-md-1 offset-lg-0 col-lg-3 brightness">
        <a class="text-decoration-none" href="/movies/{{ $movie->slug }}">
          <div class="fade-in">
            <img src="{{ $movie->photo_poster }}" class="img-fluid rounded" alt="{{ $movie->title }}">
            <p class="fs-4 mb-0 link-dark">{{ $movie->title }}</p>
            <p class="link-dark">{{ $movie->year }}</p>
          </div>
        </a>
      </div>
      @endforeach
      {{ $movies->links() }} <!-- RENDER THE PAGINATIONS LINKS -->
      @else
      <p>No movies. Please check back later.</p>
      @endif
    </div>
  </div>
  </div>

</x-layout>