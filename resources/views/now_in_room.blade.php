@extends('layouts.main')

@section('main-contents')
    <section id="movie-in-room">
        <div class="container">
            <h1 class="text-center my-4 text-white">Movie in Room</h1>
            <div class="row row-cols-3 gy-4">
                @foreach ($movies as $movie)
                    <div class="col">
                        @include('movie.card')
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
