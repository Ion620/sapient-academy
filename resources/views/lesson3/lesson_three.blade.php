<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="{{route('lesson.store', ['id' => $id])}}" method="post">
    @csrf
    <div class="form-group col-sm-3 my-1">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group col-sm-3 my-1">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    </div>
    <button type="submit" class="btn btn-primary mb-2 ml-3">Відправити</button>
</form>
</body>
</html>
