<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Title</title>
</head>
<body>
<h2>Form with class Validator</h2>
<form action="{{route('lessonFive.validator.store')}}" enctype="multipart/form-data" method="post">
    @csrf
    <div class="form-group col-sm-3 my-1">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group col-sm-3 my-1">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" name="email">
    </div>
    <div class="form-group col-sm-3 my-1">
        <label for="avatar">Avatar</label>
        <input type="file" class="form-control-file" id="avatar" name="avatar">
    </div>
    <button type="submit" class="btn btn-primary mb-2 ml-3">Відправити</button>
</form>
@if(count($errors) > 0)
    <ul style="color: red">
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif
</body>
</html>
