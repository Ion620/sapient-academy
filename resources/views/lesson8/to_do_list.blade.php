<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body class="m-5">
<h1>To do:</h1>
<table>
    @if(\Illuminate\Support\Facades\Session::has('tasks'))
            @foreach($tasks as $key => $task)
            <tr>
                <td>{{$task[0]}}</td>
                <td>
                    @if($task[1] == true)
                        <form action="{{route('done', $key)}}" method="post">
                            @csrf
                            <button type="submit" class="btn btn-success btn-sm ">Not done</button>
                        </form>
                    @endif
                    @if($task[1] == false)
                        <form action="{{route('notDone', $key)}}" method="post">
                             @csrf
                             <button type="submit" class="btn btn-success btn-sm ">Done</button>
                        </form>
                    @endif
                </td>
                <td>
                    <form action="{{route('delete', $key)}}" method="post">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
    @endif
</table>

<form action="{{route('store')}}" method="post">
    @csrf
    <label for="add_task">Task</label>
    <input type="text" id="add_task" name="task">
    <input type="submit" value="Save Item" class="m-4">
</form>
<form action="{{route('invalidate')}}" method="post">
    @csrf
    <button type="submit" class="btn btn-primary mt-1">Reset</button>
</form>
<h2>Done:</h2>
<table>
    @if(\Illuminate\Support\Facades\Session::has('tasks'))
    @foreach($tasks as $task)
        @if($task[1] == true)
            <tr>
                <td>{{$task[0]}}</td>
            </tr>
        @endif
    @endforeach
    @endif
</table>
</body>
</html>
