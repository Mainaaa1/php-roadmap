<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
</head>
<body>
    <h1>Edit Post</h1>

    <form method="POST" action="{{ route('web.posts.update', $post) }}">
        @csrf
        @method('PUT')

        <p>
            <label for="title">Title</label><br>
            <input id="title" type="text" name="title" value="{{ old('title', $post->title) }}" required>
        </p>

        <p>
            <label for="content">Content</label><br>
            <textarea id="content" name="content" rows="5" required>{{ old('content', $post->content) }}</textarea>
        </p>

        <button type="submit">Update</button>
        <a href="{{ route('web.posts.index') }}">Back</a>
    </form>
</body>
</html>
