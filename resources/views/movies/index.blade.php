<x-layout>

  <!-- CARUSELL -->
  <div id="carouselExampleCaptions" class="carousel slide fade-in" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active slider-container">
        <img src="https://image.tmdb.org/t/p/original/iQFcwSGbZXMkeyKrxbPnwnRo5fl.jpg" alt="Spider Man No Way Home movie poster" class="slider-image" />
        <div class="carousel-caption d-none d-md-block">
          <h5>Spider-Man: No Way Home</h5>
          <p>2021</p>
        </div>
      </div>
      <div class="carousel-item slider-container">
        <img src="https://image.tmdb.org/t/p/original/eNI7PtK6DEYgZmHWP9gQNuff8pv.jpg" alt="The Matrix movie poster" class="slider-image" />
        <div class="carousel-caption d-none d-md-block">
          <h5>The Matrix Resurrections</h5>
          <p>2021</p>
        </div>
      </div>
      <div class="carousel-item slider-container">
        <img src="https://image.tmdb.org/t/p/original/9yBVqNruk6Ykrwc32qrK2TIE5xw.jpg" alt="Mortal Kombat movie poster" class="slider-image" />
        <div class="carousel-caption d-none d-md-block">
          <h5>Mortal Kombat</h5>
          <p>2021</p>
        </div>
      </div>
      <div class="carousel-item slider-container">
        <img src="https://image.tmdb.org/t/p/original/jdLsmpqmP1wTdFUPtmxMnYgoifT.jpg" alt="House Of Gucci movie poster" class="slider-image" />
        <div class="carousel-caption d-none d-md-block">
          <h5>House of Gucci</h5>
          <p>2021</p>
        </div>
      </div>
      <div class="carousel-item slider-container">
        <img src="https://image.tmdb.org/t/p/original/eVSa4TpyXbOdk9fXSD6OcORJGtv.jpg" alt="The Requin movie poster" class="slider-image" />
        <div class="carousel-caption d-none d-md-block">
          <h5>The Requin</h5>
          <p>2022</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- DROPDOWN FOR CATEGORIES -->
  <div class="container ">
    <div class="d-flex align-items-center mt-4">
      <x-category-dropdown />
      <!-- SEARCH BAR -->
       <div class="col-xs-7 col-sm-6 col-lg-10 " style="margin-left:25px">
      <form class="d-flex" method="GET" action="/">
              @if(request('category'))
              <input type="hidden" name="category" value="{{ request('category') }}">
              @endif
              <input type="search" name="search" class="form-control col-lg-auto fs-5 pt-2 pb-2" placeholder="Search..." aria-label="Search" value="{{ request('search') }}" type="submit" style=""> 
              <button class="btn btn-dark " type="submit">Search</button>
          </form>    
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
      <div class="mt-4">
        {{ $movies->links() }} <!-- RENDER THE PAGINATIONS LINKS -->
      </div>
      @else
      <p>No movies. Please check back later.</p>
      @endif
    </div>
  </div>
  </div>

</x-layout>