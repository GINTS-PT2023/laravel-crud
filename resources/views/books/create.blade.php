<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE</title>
</head>

<body>

    <h1>Create A Book</h1>

    <form method="post" action="/store">
        @csrf
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" placeholder="title">
        </div>
        <div>
            <label for="content">Content</label>
            <input type="text" name="content" placeholder="content">
        </div>
        <div>
            <input type="submit" value="Create Book">
        </div>
    </form>


</body>

</html>