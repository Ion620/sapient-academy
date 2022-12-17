<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reader</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Address</th>
        <th scope="col">Ticket number</th>
        <th scope="col">Book</th>
        <th scope="col">Price</th>
        <th scope="col">Issue date</th>
        <th scope="col">Return date</th>
        <th scope="col">Update</th>
    </tr>
    </thead>
    <tbody>

        <tr>
            <td>{{$person->name}}</td>
            <td>{{$person->address}}</td>
            <td>{{$person->ticket_number}}</td>
            <td>{{$book->name}}</td>
            <td>{{$book->price}}</td>
            <td>{{$book->pivot->issue_date}}</td>
            <td>{{$book->pivot->return_date}}</td>
            <td><a href="{{route('edit', [$person->id, $book->pivot->id])}}">Update</a></td>
        </tr>

    </tbody>
</table>
<button class="btn btn-info"><a href="{{route('index')}}">Return back</a></button>
</body>
</html>
