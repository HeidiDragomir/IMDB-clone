<x-layout>

    <section class="greybg">
        <div class="pt-5 pb-5">
            <div class="container-xxl">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                                <form method="POST" action="/register">
                                @csrf
                                    <div class="form-outline mb-4">
                                        <input type="text" class="form-control form-control-lg" />
                                        <label class="form-label" for="username">Your Username</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="email" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example3cg">Your Email</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example4cg">Password</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                                    </div>

                                    <div class="form-check d-flex justify-content-center mb-5">
                                        <label class="form-check-label" for="form2Example3g">
                                            Forgot your password? <a href="#!" class="text-body"><u>Terms of service</u></a>
                                        </label>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="button" class="btn btn btn-outline-success btn-lg">Register</button>
                                    </div>

                                    <p class="text-center text-muted mt-5 mb-0">Already have an account? <a href="#!" class="fw-bold text-body"><u>Login here</u></a></p>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>








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