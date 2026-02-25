<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
</head>
<body>
    <h1>All Blog Posts</h1>

    <ul>
        @foreach ($posts as $post)
            <li>{{ $post }}</li>
        @endforeach
    </ul>
</body>
</html>