<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Readers</title>
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
    </tr>
    </thead>
    <tbody>
    @foreach($persons as $person)
        @foreach($person->books as $book)
    <tr>
        <td><a href="{{route('show', [$person->id, $book->pivot->id])}}">{{$person->name}}</a></td>
        <td>{{$person->address}}</td>
        <td>{{$person->ticket_number}}</td>
        <td>{{$book->name}}</td>
        <td>{{$book->price}}</td>
        <td>{{$book->pivot->issue_date}}</td>
        <td>{{$book->pivot->return_date}}</td>
    </tr>
        @endforeach
    @endforeach
    </tbody>
</table>
</body>
</html>
