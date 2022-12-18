<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="{{route('delete', $key)}}">
    @csrf
    @method("Delete")

</form>
</body>
</html>
