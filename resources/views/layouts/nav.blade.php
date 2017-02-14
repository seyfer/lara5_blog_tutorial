<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="/">Home</a>

            <a class="nav-link" href="/posts/create">Create post</a>

            @if (auth()->check())
                <div class="nav-link ml-auto">
                    <a style="color: white; margin-right: 10px;" href="#">{{ auth()->user()->name }}</a>
                    <a style="color: white" href="/logout">Logout</a>
                </div>
            @else
                <div class="nav-link ml-auto">
                    <a style="color: white; margin-right: 10px;" href="/login">Login</a>
                    <a style="color: white" href="/register">Register</a>
                </div>
            @endif
        </nav>
    </div>
</div>