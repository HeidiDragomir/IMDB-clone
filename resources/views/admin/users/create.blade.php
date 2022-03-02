<x-layout>
    <x-admin-navbar />

    <section>
    <h1 class="mb-4 mt-5 pb-2 pb-md-0 mb-md-5 text-center">Add New User</h1>
        <div class="pt-5 pb-5">
            <div class="container-xxl">
                <div class="row d-flex justify-content-start h-100">
                    <div class="column-admin col-12 col-md-9 col-lg-7 col-xl-6">
                        
                        <aside>
                            <ul class="list-unstyled">
                                
                            <li>
                                    <a class="btn btn-secondary me-3 custom" href="/admin/dashboard/users">All Users</a>

                                </li>
                                <li class="mt-2">
                                    <a class="btn btn-secondary me-3 custom" href="/admin/dashboard/users/create">New User</a>

                                </li>
                            </ul>
                        </aside>
                    </div>

                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card bg-light" style="border-radius: 15px;">
                            <div class="card-body p-5">

                                <form method="POST" action="/admin/dashboard/users">
                                    @csrf

                                    <x-form-movie.input name="username" />

                                    <x-form-movie.input name="name" />

                                    <x-form-movie.input name="email" />

                                    <x-form-movie.input name="password" />

                                    <label class="form-label" for="admin">Admin</label>
                                    <select class="form-select form-select-lg" aria-label="Default select example" name="is_admin" id="admin">
                                        <option value="0" selected>No</option>
                                        <option value="1">Yes</option>
                                    </select>
                                    <div class="d-flex justify-content-center mt-4">
                                        <button type="submit" class="btn btn btn-outline-success btn-lg">Add User</button>
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