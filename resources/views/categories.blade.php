<x-layout>

<h1>categories page</h1>
@foreach($movies as $movie)
<p>{{ $movie->title }}</p>


@endforeach

</x-layout>