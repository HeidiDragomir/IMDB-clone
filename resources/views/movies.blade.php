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

    <!-- ADD DROPDOWN FOR CATEGORIES AND SEARCH BAR -->
    <div class="container">      
      <div class=" d-flex flex-wrap align-items-center mt-3">
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
       <div class=" col-md-10 ">
          <form class="col-auto">
            <input type="search" class="form-control col-lg-auto fs-5 pt-2 pb-2" placeholder="Search..." aria-label="Search">
          </form>
        </div>
      </div> 

      <!-- ADD GRID FOR POSTERS -->
      <div class="container mt-3 d-flex justify-content-between">
        <p class="fs-3">Featured Movies</p>
        <div>
          <button class="btn btn-dark"><</button>
          <button class="btn btn-dark">></button>
        </div>
      </div>

      <div class="grid m-3">
        <div class="row text-center">
          <div class="container col-6 col-md-5 offset-md-1 offset-lg-0 col-lg-3">
            <a class="text-decoration-none" href="#">
              <div>
                <img src="https://image.tmdb.org/t/p/w500/1g0dhYtq4irTY1GPXvft6k4YLjm.jpg" class="img-fluid rounded" alt="Spider-Man: No Way Home">
                <p class="fs-4 mb-0 link-dark">Spider-Man: No Way Home</p><p class="link-dark">2021</p>
              </div>
            </a>
          </div>
          <div class="container col-6 col-md-5 offset-md-1 offset-lg-0 col-lg-3">
            <a class="text-decoration-none" href="#">
              <div>
                <img src="https://image.tmdb.org/t/p/w500/4j0PNHkMr5ax3IA8tjtxcmPU3QT.jpg" class="img-fluid rounded" alt="Encanto">
                <p class="fs-4 mb-0 link-dark">Encanto</p><p class="link-dark">2021</p>
              </div>
            </a>
          </div>
          <div class="container col-6 col-md-5 offset-md-1 offset-lg-0 col-lg-3">
            <a class="text-decoration-none" href="#">
              <div>
                <img src="https://image.tmdb.org/t/p/w500/i0z8g2VRZP3dhVvvSMilbOZMKqR.jpg" class="img-fluid rounded" alt="The Requin">
                <p class="fs-4 mb-0 link-dark">The Requin</p><p class="link-dark">2022</p>
              </div>
            </a>
          </div>
          <div class="container col-6 col-md-5 offset-md-1 offset-lg-0 col-lg-3">
            <div class="content rounded">
              <a class="text-decoration-none" href="#">
                <div class="content-overlay"></div>
                  <div>
                    <img src="https://image.tmdb.org/t/p/w500/xef9Ht77B2igqZv754HNdW8qZCk.jpg" class="img-fluid rounded" alt="The 355">
                    <div class="content-details">
                      <p class="fs-4 mb-0">The 355</p><p>2022</p>
                    </div>
                  </div>
              </a>
            </div>
          </div>
          
        </div>
      </div>
    </div>
  
</x-layout>