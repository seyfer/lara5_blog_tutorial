@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>Login</h1>

        <form method="post" action="/login">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email"
                       class="form-control"
                       id="email"
                       placeholder="Enter" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password"
                       class="form-control"
                       id="password"
                       placeholder="Enter" name="password" required>
            </div>

            <button type="submit">Submit</button>

            @include('layouts.errors')
        </form>
    </div>
@endsection