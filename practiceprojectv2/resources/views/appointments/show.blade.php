<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div class="container">
    <h1>ID: #{{$appointment->id}}</h1>
    <label for="beschrijving">beschrijving</label>
    <p>{{$appointment->beschrijving}}</p>
</div>
<div class="item buttons">
    <a class="btn" id="card_btn-edit" href="{{route('appointments.edit', $appointment->id)}}">Edit appointment</a>
    <form action="{{route('appointments.destroy', $appointment->id)}}" method="post">
        @method('delete')
        @csrf
        <input class="link" id="card_btn-del" type="submit" value="Delete appointment">
    </form>
</div>
</body>
</html>
