<x-layout>

    <!-- CARUSELL -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active slider-container">
          <img src="https://image.tmdb.org/t/p/original/VuukZLgaCrho2Ar8Scl9HtV3yD.jpg" alt="..." class="slider-image" />
          <div class="carousel-caption d-none d-md-block">
            <h5>First slide label</h5>
            <p>Some representative placeholder content for the first slide.</p>
          </div>
        </div>
        <div class="carousel-item slider-container">
          <img src="https://image.tmdb.org/t/p/original/VuukZLgaCrho2Ar8Scl9HtV3yD.jpg" alt="..." class="slider-image" />
          <div class="carousel-caption d-none d-md-block">
            <h5>Second slide label</h5>
            <p>Some representative placeholder content for the second slide.</p>
          </div>
        </div>
        <div class="carousel-item slider-container">
          <img src="https://image.tmdb.org/t/p/original/VuukZLgaCrho2Ar8Scl9HtV3yD.jpg" alt="..." class="slider-image" />
          <div class="carousel-caption d-none d-md-block">
            <h5>Third slide label</h5>
            <p>Some representative placeholder content for the third slide.</p>
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
    <div class="container">      
      <div class=" d-flex align-items-center mt-3">
        <div class="dropdown">
          <a class="btn btn-dark dropdown-toggle btn-lg px-4 gap-3 m-3" href="#" id="dropdown01" data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
          <ul class="dropdown-menu" aria-labelledby="dropdown01">
            <li><a class="dropdown-item" href="#">All</a></li>
            <li><hr class="dropdown-divider"></li>
            @foreach ($movies as $movie)
            <li><a class="dropdown-item" href="/categories/{{ $movie->id }}">{{ $movie->name }}</a></li>
            @endforeach
          </ul>
        </div>

      <!-- SEARCH BAR -->
       <div class=" col-md-10 ">
          <form class="col-auto">
            <input type="search" class="form-control col-lg-auto fs-5 pt-2 pb-2" placeholder="Search..." aria-label="Search">
          </form>
        </div>
      </div> 

      <!-- GRID FOR POSTERS -->
      <!-- <div class="container mt-3 border-bottom d-flex justify-content-between">
        <p class="fs-3">Featured Movies</p>
      </div> -->

      <div class="container mt-4">
        <div class="row text-center">
          @foreach ($movies as $movie)
          <div class="col-6 col-md-5 offset-md-1 offset-lg-0 col-lg-3">
            <a class="text-decoration-none" href="#">
              <div>
                <img src="{{ $movie->photo_poster }}" class="img-fluid rounded" alt="{{ $movie->title }}">
                <p class="fs-4 mb-0 link-dark">{{ $movie->title }}</p><p class="link-dark">{{ $movie->year }}</p>
              </div>
            </a>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  
</x-layout>