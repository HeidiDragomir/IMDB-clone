<x-layout>
    <x-admin-navbar />

    <section>
        <div class="container">
            <h2 class="text-dark pt-5" style="width: 100%; border-bottom: 1px solid rgb(214, 214, 214); line-height: 0.1em; margin: 10px 0px 30px;">
                <span style="background: rgb(255, 255, 255); padding-right: 14px;">Create connection</span>
            </h2>
        </div>
        <div class="pt-5 pb-5">
            <div class="container">
                <div class="row d-flex justify-content-start h-100">
                    <div class="column-admin col-12 col-md-9 col-lg-7 col-xl-6">

                        <aside>
                            <ul class="list-unstyled">
                                <li>
                                    <a class="btn btn-secondary me-3 custom" href="/admin/dashboard/actors">All Actors</a>
                                </li>
                                <li class="mt-2">
                                    <a class="btn btn-secondary me-3 custom" href="/admin/dashboard/movies">All Movies</a>
                                </li>
                                <li class="mt-2">
                                    <a class="btn btn-secondary me-3 custom" href="/admin/dashboard/createconnection">Connect</a>
                                </li>
                            </ul>
                        </aside>
                    </div>

                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card bg-light" style="border-radius: 15px;">
                            <div class="card-body p-5">

                                <form method="POST" action="/admin/dashboard/createconnection">
                                    @csrf

                                    <div class="form-outline mb-4">
                                        <label class="form-label form-control-lg d-flex" for="name">Actor</label>
                                        <select class="form-control form-control-lg" name="actor_id" id="name">
                                            @php

                                            $actors = \App\Models\Actor::all();

                                            @endphp

                                            @foreach ($actors as $act)

                                            <option value="{{ $act->id }}">{{ ucwords($act->name) }}</option>

                                            @endforeach

                                        </select>

                                        @error('name')
                                        <p class="text-danger"><small>{{ $message }}</small></p>
                                        @enderror
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label form-control-lg d-flex" for="title">Movie</label>
                                        <select class="form-control form-control-lg" name="movie_id" id="title">
                                            @php

                                            $movies = \App\Models\Movie::all();

                                            @endphp

                                            @foreach ($movies as $movie)

                                            <option value="{{ $movie->id }}">{{ ucwords($movie->title) }}</option>

                                            @endforeach

                                        </select>

                                        @error('name')
                                        <p class="text-danger"><small>{{ $message }}</small></p>
                                        @enderror
                                    </div>
                                    <!-- 
    
                                    <x-form-movie.input name="actor_id" required/>

                                    <x-form-movie.input name="movie_id" required/> -->

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn btn-outline-success btn-lg">Create</button>
                                    </div>

                                </form>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</x-layout>