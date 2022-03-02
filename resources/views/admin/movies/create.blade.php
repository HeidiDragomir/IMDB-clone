<x-layout>
    <x-admin-navbar />

    <section>
    <h1 class="mb-4 mt-5 pb-2 pb-md-0 mb-md-5 text-center">Publish New Movie</h1>
        <div class="pt-5 pb-5">
            <div class="container-xxl">
                <div class="row d-flex justify-content-start h-100">
                    <div class="column-admin col-12 col-md-9 col-lg-7 col-xl-6">

                        <aside>
                            <ul class="list-unstyled">
                                
                            <li>
                                    <a class="btn btn-secondary me-3 custom" href="/admin/dashboard/movies">All Movies</a>

                                </li>
                                <li class="mt-2">
                                    <a class="btn btn-secondary me-3 custom" href="/admin/dashboard/movies/create">New Movie</a>

                                </li>
                            </ul>
                        </aside>
                    </div>

                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card bg-light" style="border-radius: 15px;">
                            <div class="card-body p-5">

                                <form method="POST" action="/admin/dashboard/movies">
                                    @csrf

                                    <x-form-movie.input name="title" />

                                    <x-form-movie.input name="slug" />

                                    <x-form-movie.input name="year" />


                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="category_id">Genre</label>
                                        <select name="category_id" id="category_id">
                                            @php

                                            $categories = \App\Models\Category::all();

                                            @endphp

                                            @foreach ($categories as $category)

                                            <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ ucwords($category->name) }}</option>

                                            @endforeach

                                        </select>

                                        @error('category_id')
                                        <p class="text-danger"><small>{{ $message }}</small></p>
                                        @enderror
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="body">Body</label>
                                        <textarea class="form-control form-control-lg" name="body" id="body" cols="30" rows="7" required>{{ old('body') }}</textarea>

                                        <x-form-movie.error name='body' />

                                    </div>

                                    <x-form-movie.input name="photo_poster" />

                                    <x-form-movie.input name="photo_bg" />

                                    <x-form-movie.input name="trailer_url" />


                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn btn-outline-success btn-lg">Publish</button>
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