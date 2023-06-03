<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('/todo') }}" method="post">
        @csrf
        <div>
            <label for="title">title</label>
            <input type="text" name="title">
        </div>
        <div>
            <label for="description">description</label>
            <textarea type="text" name="description"> </textarea>
        </div>
        <button type="submit">Create</button>
    </form>
</body>
</html>