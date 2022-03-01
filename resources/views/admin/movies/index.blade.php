<x-layout>
    <x-admin-navbar />
    <section>
        <div class="pt-5 pb-5">
            <div class="container-xl">
                <div class="row d-flex justify-content-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">

                        <aside>
                            <h1 class="mb-4 mt-5 pb-2 pb-md-0 mb-md-5 text-left">Manage Movies</h1>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="/admin/dashboard/movies" class="link-dark text-decoration-none">All Movies</a>
                                </li>
                                <li>
                                    <a href="/admin/dashboard/movies/create" class="link-dark text-decoration-none">New Movie</a>
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
                                        <td class="align-middle">
                                            <a href="/movies/{{ $movie->slug }}" class="link-dark text-decoration-none">{{ $movie->title }}</a>
                                        </td>
                                        <td class=" text-center">
                                            <div class="container d-flex p-2 gap-1">
                                                <a class='btn btn-info btn-xs' href="/admin/dashboard/movies/{{ $movie->id }}/edit">Edit</a>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $movie->id }}">
                                                    Delete
                                                </button>
                                                <!-- Button trigger modal end-->

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal-{{ $movie->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Are you sure you want to delete the movie: <br><strong class="text-danger">{{ $movie->title }}</strong>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <form method="POST" action="/admin/dashboard/movies/{{ $movie->id }}">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-danger">Delete</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Modal end-->

                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                                {{ $movies->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>