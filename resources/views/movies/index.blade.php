@extends("layouts.app")

@section("page-title", "Movies")

@section("main-content")

    <div class="container">
        <h1 class="fw-bold text-center p-5">Movies</h1>
        <div class="row justify-content-center">
            @forelse ( $movies as $movie )
                <div class="card col-5 m-2">
                    <div class="card-body">
                        <h4 class="card-title"> {{ $movie->title }} </h4>
                        <p class="card-text"> <span class="fw-bold">Original Name:</span> {{ $movie->original_title }} </p>
                        <p class="card-text"> <span class="fw-bold">Nationality:</span> {{ $movie->nationality }} </p>
                        <p class="card-text"> <span class="fw-bold">Date:</span> {{ $movie->date }} </p>
                        <p class="card-text"> <span class="fw-bold">Vote:</span> {{ $movie->vote }} </p>
                    </div>
                </div>
            @empty
                <p>movies are not available</p>
            @endforelse
        </div>
    </div>

@endsection
