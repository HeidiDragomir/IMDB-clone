<x-layout>
    <x-admin-navbar />
    <section>
        <div class="container">
            <h2 class="text-dark pt-5" style="width: 100%; border-bottom: 1px solid rgb(214, 214, 214); line-height: 0.1em; margin: 10px 0px 30px;">
                <span style="background: rgb(255, 255, 255); padding-right: 14px;">Manage Actors</span>
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

                                <!-- Table -->
                                <table class="table w-100 table-striped custab">
                                    @foreach($actors as $actor)
                                    <tr>
                                        <td class="align-middle">
                                            <p class="link-dark text-decoration-none">{{ $actor->name }}</p>
                                        </td>
                                        <td class="text-center">
                                            <div class="container d-flex justify-content-end p-2 gap-3">
                                                <a class='btn btn-info btn-xs' href="/admin/dashboard/actors/{{ $actor->id }}/edit">Edit</a>
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-danger btn-xs" data-bs-toggle="modal" data-bs-target="#exampleModal-{{ $actor->id }}">
                                                    Delete
                                                </button>
                                                <!-- Button trigger modal end-->

                                                <!-- Modal -->
                                                <div class="modal fade" id="exampleModal-{{ $actor->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                Are you sure you want to delete the movie: <br><strong class="text-danger">{{ $actor->movie }}</strong>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <form method="POST" action="/admin/dashboard/actors/{{ $actor->id }}">
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
                                {{ $actors->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout>