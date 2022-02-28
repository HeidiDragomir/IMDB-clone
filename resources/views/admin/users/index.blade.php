<x-layout>
    <x-admin-navbar />
    
    <section>
        
        <div class="pt-5 pb-5">
            <div class="container-xl">
                <div class="row d-flex justify-content-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">

                        <aside>
                            <h1 class="mb-4 mt-5 pb-2 pb-md-0 mb-md-5 text-left">Manage Users</h1>
                            <ul class="list-unstyled">
                                <li>
                                    <a href="/admin/dashboard/users" class="link-dark text-decoration-none">All Users</a>
                                </li>
                                <li>
                                    <a href="/admin/dashboard/users/create" class="link-dark text-decoration-none">New User</a>
                                </li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card bg-light" style="border-radius: 15px;">
                            <div class="card-body p-5">

                                <!-- Table -->

                                <table class="table table-striped custab">

                                    @foreach($users as $user)
                                    <tr>

                                        <td class="align-middle">
                                            <p class="link-dark text-decoration-none">{{ $user->username }}</p>

                                        </td>
                                        <td class=" text-center">
                                            <div class="container d-flex p-2 gap-1">
                                                <a class='btn btn-info btn-xs' href="/admin/dashboard/users/{{ $user->id }}/edit">Edit</a>
                                                <form method="POST" action="/admin/dashboard/users/{{ $user->id }}">

                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-danger btn-xs">Delete</button>
                                                </form>
                                            </div>


                                        </td>
                                    </tr>

                                    @endforeach
                                </table>
                                {{ $users->links() }}

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

</x-layout>