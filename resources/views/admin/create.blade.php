<x-layout>

    <section>
        <div class="pt-5 pb-5">
            <div class="container-xxl">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card bg-light" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h1 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Create account</h1>

                                <form method="POST" action="/admin/dashboard/movies">
                                    @csrf
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="title">Title</label>

                                        <input class="form-control form-control-lg" type="text" name="title" id="title" required />
                                        @error('title')
                                        <p class="text-danger"><small>{{ $message }}</small></p>
                                        @enderror
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="year">Year</label>

                                        <input class="form-control form-control-lg" type="text" name="year" id="year" required />
                                        @error('year')
                                        <p class="text-danger"><small>{{ $message }}</small></p>
                                        @enderror
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="category">Genre</label>
                                        <select name="category" id="category">
                                            @php

                                            $categories = \App\Models\Category::all();

                                            @endphp

                                            @foreach ($categories as $category)

                                            <option value="{{$category->id}}">{{ucwords($category->name)}}</option>

                                            @endforeach

                                        </select>

                                        @error('body')
                                        <p class="text-danger"><small>{{ $message }}</small></p>
                                        @enderror
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="body">Body</label>
                                        <textarea class="form-control form-control-lg" name="body" id="body" cols="30" rows="7" required></textarea>
                                        @error('body')
                                        <p class="text-danger"><small>{{ $message }}</small></p>
                                        @enderror
                                    </div>


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

    <!-- FORM BEFORE CHANGES  -->


    <!-- <section class="vh-100">
            <h1 class="">Register!</h1>
        
            <form class="form-outline mb-4" method="POST" action="/register">
                @csrf

                <div class="mb-6">
                    <label class=""
                        for="name">Name</label>

                    <input class="" 
                        type="text"
                        name="name"
                        id="name"
                        value="{{ old('name')}}"
                        required
                        >

                    @error('name')
                        <p class="">{{ $message }}</p>
                    @enderror
                </div>
            
                <div class="mb-6">
                    <label class=""
                        for="username">Username</label>

                    <input class="" 
                        type="text"
                        name="username"
                        id="username"
                        value="{{ old('username')}}"
                        required
                        >
                    @error('username')
                        <p class="">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class=""
                        for="email">Email</label>

                    <input class="" 
                        type="email"
                        name="email"
                        id="email"
                        value="{{ old('email')}}"
                        required
                        >
                    @error('email')
                        <p class="">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-6">
                    <label class=""
                        for="password">Password</label>

                    <input class="" 
                        type="password"
                        name="password"
                        id="password"
                        required
                        >
                    @error('password')
                        <p class="">{{ $message }}</p>
                    @enderror
                </div>

                <div class="">
                    <button type="submit"
                        class=""
                        >Submit</button>
                </div>
            </form>
    </section> -->


</x-layout>