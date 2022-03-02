<x-layout>
    <x-admin-navbar />

    <section>
        <h1 class="mb-4 mt-5 pb-2 pb-md-0 mb-md-5 text-center">Manage Comments</h1>

        <div class="pt-5 pb-5">
            <div class="container-lg table-responsive-lg">

                <table class="table mx-auto w-auto table-striped custab">
                    <thead>
                        <tr>
                            <th>
                                User
                            </th>
                            <th>
                                Movie
                            </th>
                            <th>
                                Comment
                            </th>
                            <th>
                                Created at
                            </th>
                            <th>
                                Status
                            </th>
                            <th colspan="2" class="text-center">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($comments as $comment)
                        <tr>
                            <td class="align-middle">
                                {{ $comment->user->username}}

                            </td>
                            <td class="align-middle">
                                {{ $comment->movie->title }}

                            </td>

                            <td class="align-middle">
                                {{ $comment->body }}

                            </td>
                            <td class="align-middle">
                                {{ $comment->created_at }}
                            </td>
                            @if ($comment->approved == true)
                            <td class="align-middle">
                                <span class="p-1 leading-5 font-semibold inline-flex text-xs rounded bg-secondary text-light">Approved</span>
                            </td>
                            @else
                            <td class="align-middle">
                                <span class="p-1 leading-5 font-semibold inline-flex text-xs rounded bg-warning text-light">Waiting</span>
                            </td>
                            @endif
                            <td class="align-middle">

                                <form class="form-check form-check-inline" action="/admin/dashboard/comments/{{ $comment->id }}" method="POST">
                                    @csrf
                                    @method('PATCH')
                                    <input class="btn btn-success" type="submit" value="Approve">


                                </form>
                            </td>
                            <td class="align-middle">

                                <form method="POST" action="/admin/dashboard/comments/{{ $comment->id }}">
                                    @csrf
                                    @method('DELETE')

                                    <input class="btn btn-danger" type="submit" value="Delete">
                                </form>
                            </td>

                        </tr>

                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>



    </section>
</x-layout>