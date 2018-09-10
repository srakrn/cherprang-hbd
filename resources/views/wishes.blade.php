@extends('main')

@php
    $n = count($wishes);
@endphp

@section('content')
    @foreach ($wishes as $wish)
    <div class="card text-white bg-dark bg-dark-translucent">
        <div class="card-body">
            <blockquote class="blockquote mb-0">
                <p>{{ $wish->wish }}</p>
                <footer class="blockquote-footer"><cite title="Message ID: {{ $wish->id }}">{{ $wish->name }}</cite></footer>
            </blockquote>
        </div>
        <div class="message-count">{{ $n }}</div>
    </div>
    @php
        $n--;
    @endphp
    @endforeach
@endsection

@section('sidebar')
<a class="btn btn-lg btn-danger btn-block" href="new">เขียนอวยพรวันเกิด~</a>
<p style="text-align:center"><small>ร่วมอวยพรเฌอปรางแล้ว {{ count($wishes) }} คน</small></p>
@endsection
