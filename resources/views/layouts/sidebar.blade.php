<div class="col-sm-3 offset-sm-1 blog-sidebar">

    <div class="sidebar-module sidebar-module-inset">
        <h4>About</h4>
        <p>I'm Seyfer <br>
            <em>Senior</em> software developer with 6 years of experience.
        </p>
    </div>

    <div class="sidebar-module">
        <h4>Archives</h4>
        <ol class="list-unstyled">
            @foreach($archives as $date)
                <li>
                    <a href="?month={{$date->month}}&year={{$date->year}}">
                        {{$date->month}} {{$date->year}} ({{$date->published}})
                    </a>
                </li>
            @endforeach
        </ol>
    </div>

    <div class="sidebar-module">
        <h4>Tags</h4>
        <ol class="list-unstyled">
            @foreach($tags as $tag)
                <li>
                    <a href="/posts/tags/{{$tag}}">
                        {{$tag}}
                    </a>
                </li>
            @endforeach
        </ol>
    </div>

    <div class="sidebar-module">
        <h4>Elsewhere</h4>
        <ol class="list-unstyled">
            <li><a href="https://github.com/seyfer">GitHub</a></li>
        </ol>
    </div>
</div><!-- /.blog-sidebar -->