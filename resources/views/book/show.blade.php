@php
    /** @var \App\Models\Book $book */
@endphp

@extends('layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="/books">Get back</a>
                <h1>{{ $book->getName() }}</h1>
                <p class="title">{{ $book->getAuthor() }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2>Comments:</h2>

                @foreach($comments as $comment)
                    <div class="card">
                        <div class="card-body">
                            {{ $comment->getBody() }}
                        </div>
                    </div>
                @endforeach

                <h2>Leave comment:</h2>
                <form action="http://localhost:8001/comments" method="POST">
                    <div class="mb-3">
                        <label for="author">Your name:</label>
                        <input type="text" class="form-control" id="author" name="author" placeholder="Author">
                    </div>
                    <div class="mb-3">
                        <label for="body">Your comment:</label>
                        <textarea class="form-control" placeholder="Comment" id="body" name="body"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Comment</button>
                </form>
            </div>
        </div>
    </div>
@endsection