<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail recibido</title>
</head>
<body>
    <p>Mensaje recibido de:  {{$mensaje['name']}}</p>
    <p>Email: {{$mensaje['email']}}</p>
    <p>Asunto: {{$mensaje['subject']}}</p>
    <p>  {{$mensaje['content']}}</p>
</body>
</html>