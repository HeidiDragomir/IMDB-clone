<x-layout>
    <x-admin-navbar />

    <section>
        <h1 class="mb-4 mt-5 pb-2 pb-md-0 mb-md-5 text-center">Edit User: {{ $user->username }}</h1>
        <div class="pt-5 pb-5">
            <div class="container-xxl">
                <div class="row d-flex justify-content-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">

                        <aside>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="/admin/dashboard/users" class="link-dark text-decoration-none">All Users</a>
                                </li>
                                <li>
                                    <a href="/admin/dashboard/user/create" class="link-dark text-decoration-none">New User</a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card bg-light" style="border-radius: 15px;">
                            <div class="card-body p-5">

                                <form method="POST" action="/admin/dashboard/users/{{ $user->id }}">
                                    @csrf
                                    @method('PATCH')

                                    <x-form-movie.input name="username" :value="old('username', $user->username)" required />

                                    <x-form-movie.input name="name" :value="old('name', $user->name)" required />

                                    <x-form-movie.input name="email" :value="old('email', $user->email)" required />
                                    <div>
                                    <label for="admin">Admin</label>
                                    <input type="checkbox" id="scales" name="scales" checked>
                                    </div>


                                    {{-- <div class="form-outline mb-4">
                                        <label class="form-label" for="category_id">Genre</label>
                                        <select name="category_id" id="category_id">
                                            @php

                                            $categories = \App\Models\Category::all();

                                            @endphp

                                            @foreach ($categories as $category)

                                            <option value="{{ $category->id }}" {{ old('category_id', $movie->category_id) == $category->id ? 'selected' : '' }}>{{ ucwords($category->name) }}</option>

                                            @endforeach

                                        </select>

                                        <x-form-movie.error name='category_id' />
                                    </div> 

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="body">Body</label>
                                        <textarea class="form-control form-control-lg" name="body" id="body" cols="30" rows="7" required>{{ old('body', $movie->body) }}</textarea>

                                        <x-form-movie.error name='body' />

                                    </div>

                                    <x-form-movie.input name="photo_poster" :value="old('photo_poster', $movie->photo_poster)" required />

                                    <x-form-movie.input name="photo_bg" :value="old('photo_bg', $movie->photo_bg)" required />

                                        --}}
                                    <div class="d-flex justify-content-center">
                                        <button type="submit" class="btn btn btn-outline-success btn-lg">Update</button>
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