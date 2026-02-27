<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    <h1>Posts</h1>

    <p><a href="{{ route('web.posts.create') }}">Create New Post</a></p>

    @if ($posts->isEmpty())
        <p>No posts yet.</p>
    @else
        <ul>
            @foreach ($posts as $post)
                <li>
                    <h3>{{ $post->title }}</h3>
                    <p>{{ $post->content }}</p>
                    <a href="{{ route('web.posts.edit', $post) }}">Edit</a>

                    <form method="POST" action="{{ route('web.posts.destroy', $post) }}" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @endif
</body>
</html>
