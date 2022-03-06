<x-layout>
    <x-admin-navbar />

    <section>
        <div class="container">
            <h2 class="text-dark pt-5" style="width: 100%; border-bottom: 1px solid rgb(214, 214, 214); line-height: 0.1em; margin: 10px 0px 30px;">
                <span style="background: rgb(255, 255, 255); padding-right: 14px;">Edit Actor: {{ $actor->name }}</span>
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
                                    <a class="btn btn-secondary me-3 custom" href="/admin/dashboard/actors/create">New Actor</a>
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

                                <form method="POST" action="/admin/dashboard/actors/{{ $actor->id }}">
                                    @csrf
                                    @method('PATCH')

                                    <x-form-movie.input name="name" :value="old('name', $actor->name)" />

                                    <x-form-movie.input name="photo_url" :value="old('photo_url', $actor->photo_url)" />


                                    <div class="d-flex justify-content-center mt-4">
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