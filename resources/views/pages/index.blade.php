<ul>
    @foreach($movies as $movie)
        <li>{{ $movie-> original_title  }}</li>
    @endforeach
</ul>
