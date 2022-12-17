<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reader</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<form method="post" action="{{route('update', [$person->id, $book->pivot->id])}}">
    @csrf
    <div class="form-group">
        <label for="book">Book</label>
        <input type="text" class="form-control" id="book" name="book" placeholder="Book" value="{{$book->name}}">
    </div>
    <div class="form-group">
        <label for="price">Price</label>
        <input type="number" class="form-control" id="price" name="price" placeholder="Price" value="{{$book->price}}">
    </div>
    <div class="form-group">
        <label for="issue_date">Issue Date</label>
        <input type="date" class="form-control" id="issue_date" name="issue_date" placeholder="Issue Date" value="{{$book->pivot->issue_date}}">
    </div>
    <div class="form-group">
        <label for="return_date">Return Date</label>
        <input type="date" class="form-control" id="return_date" name="return_date" placeholder="Return Date" value="{{$book->pivot->return_date}}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<button class="btn btn-info"><a href="{{route('show', [$person->id, $book->pivot->id])}}">Return back</a></button>
</body>
</html>
