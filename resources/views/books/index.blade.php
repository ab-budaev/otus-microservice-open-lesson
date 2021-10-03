@php
/** @var \App\Models\Book $book */
@endphp

@extends('layout')

@section('content')
    <div class="container pt-3">
        <div class="row">
            @foreach($books as $book)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $book->getName() }}</h5>
                            <p class="card-text">{{ $book->getAuthor() }}</p>
                            <a href="/books/{{ $book->getId() }}" class="btn btn-primary">
                                Посмотреть
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection