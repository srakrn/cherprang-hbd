@extends('main')

@section('content')
    @foreach ($wishes as $wish)
    <div class="card text-white bg-dark bg-dark-translucent">
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <p>{{ $wish->wish }}</p>
                <footer class="blockquote-footer"><cite title="Source Title">{{ $wish->name }}</cite></footer>
            </blockquote>
        </div>
    </div>
    @endforeach
@endsection