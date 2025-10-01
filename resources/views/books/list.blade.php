<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIST</title>
</head>

<body>

    <h1>List Of Books</h1>

    @foreach($books as $book)
    <h2>ID: {{$book->id}}</h2>
    <p><strong>Title:</strong> {{$book->title}}</p>
    <p><strong>Content:</strong> {{$book->content}}</p>
    <br />
    @endforeach

</body>

</html>