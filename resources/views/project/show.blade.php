<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>{{$project->title}}</h1>
    <p>{{$project->description}}</p>
    <p>{{$project->tasks}}

    @if ($project->tasks->count())

        @foreach ($project->tasks as $task)
        <form action="/project/{{$project->id}}/task" method="POST">
            @if ($task->completed)
                @method('PATCH')
            @endif
        <div>
        <input type="checkbox" value="1" name="completed" onchange="this.form.submit()" {{$task->completed ? "checked": ""}}>
        {{$task->name}}</div>
        </form>

        @endforeach
    @endif
    <h3> Add tasks </h3>
    <form action="/project/{{$project->id}}/task" method="post">
        <input type="text" name="name" id="name" placeholder="enter task">
        <button type="submit">Add task</button>
    </form>

</body>
</html>
