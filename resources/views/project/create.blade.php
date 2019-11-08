<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>add projects</h1>
    <form action="/project" method="POST">
        @csrf
        <input type="text" name="title" id="title" required>
        <textarea name="description" id="" cols="30" rows="10"></textarea>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
