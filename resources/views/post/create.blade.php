@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">

        <h1>Publish a post</h1>

        <form action="{{ url('post') }}" method="post">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text"
                       class="form-control"
                       id="title"
                       aria-describedby="titleHelp"
                       placeholder="Enter title" name="title" required>
                <small id="titleHelp"
                       class="form-text text-muted">Imagine something unique
                </small>
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" id="body" name="body" placeholder="Body" required></textarea>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

            @include('layouts.errors')
        </form>
    </div>
@endsection
