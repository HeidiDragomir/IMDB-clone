<x-layout>

    <section>
        <h1 class="mb-4 pb-2 pb-md-0 mb-md-5 text-center">Manage Movies</h1>
        <div class="pt-5 pb-5">
            <div class="container-xxl">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div>
                        <aside class="w-48">
                            <ul>
                                <li>
                                    <a href="/admin/dashboard/movies">All Movies</a>
                                </li>
                                <li>
                                    <a href="/admin/dashboard/movies/create">New Movie</a>
                                </li>
                            </ul>
                        </aside>

                    </div>
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card bg-light" style="border-radius: 15px;">
                            <div class="card-body p-5">

                                <!-- Table -->

                                <table class="table table-striped custab">

                                    @foreach($movies as $movie)
                                    <tr>

                                        <td>
                                            <a href="/movies/{{ $movie->slug }}">{{ $movie->title }}</a>

                                        </td>
                                        <td class="text-center"><a class='btn btn-info btn-xs' href="/admin/dashboard/movies/{{ $movie->id }}/edit"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                            <form method="POST" action="/admin/dashboard/movies/{{ $movie->id }}">

                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-remove"></span> Del</button>
                                            </form>

                                        </td>
                                    </tr>

                                    @endforeach
                                </table>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

</x-layout>