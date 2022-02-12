<x-layout>
    <section class="greybg">
        <div class="pt-5 pb-5">
            <div class="container-xxl">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h1 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Login</h1>

                                <form method="POST" action="/login">
                                    @csrf
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="username">Username</label>
                                        <input class="form-control form-control-lg" type="text" name="name" id="name" value="{{ old('name')}}" required />
                                        @error('name')
                                        <p class="">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="password">Password</label>
                                        <input class="form-control form-control-lg" type="password" name="password" id="password" required />
                                        @error('password')
                                        <p class="">{{ $message }}</p>
                                        @enderror
                                    </div>

                                    <div class="form-check d-flex justify-content-center mb-3">
                                        <label class="form-check-label" for="passwordforgot">
                                            Forgot your password? <a href="#!" class="fw-bold text-body"><u>Click here</u></a>
                                        </label>
                                        
                                    </div>

                                    <div class="form-check d-flex justify-content-center mb-5">
                                        <label class="form-check-label" for="signup">
                                            Don't have an account yet? <a href="#!" class="fw-bold text-body"><u>Sign up</u></a>
                                        </label>
                                    </div>

                                    <div class="d-flex justify-content-center">
                                        <button type="button" class="btn btn btn-outline-success btn-lg">Login</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-layout>