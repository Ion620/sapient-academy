<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="{{route('lesson.book.store')}}" method="post">
    @csrf
    <label for="book">Book name</label>
    <input type="text" name="book">
    <label for="pages">Pages</label>
    <input type="number" name="pages">
    <input type="submit" value="Send">
</form>
</body>
</html>
