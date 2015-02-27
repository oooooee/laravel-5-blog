    @foreach ($posts as $post)
        <div class="post">
            <h1>{{ $post->name }}</h1>
        </div>
    @endforeach
    {{ $posts->render() }}
