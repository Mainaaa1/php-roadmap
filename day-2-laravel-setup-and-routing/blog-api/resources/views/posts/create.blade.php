<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
</head>
<body>
    <h1>Create Post</h1>

    <form method="POST" action="{{ route('web.posts.store') }}">
        @csrf

        <p>
            <label for="title">Title</label><br>
            <input id="title" type="text" name="title" value="{{ old('title') }}" required>
        </p>

        <p>
            <label for="content">Content</label><br>
            <textarea id="content" name="content" rows="5" required>{{ old('content') }}</textarea>
        </p>

        <button type="submit">Save</button>
        <a href="{{ route('web.posts.index') }}">Back</a>
    </form>
</body>
</html>
