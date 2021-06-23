<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
</head>
<body>


<form method=POST action="{{route('customers.store')}}">
    @csrf
    <div>
        <label for="label">Customer name</label>
        <input name="name" type="text" placeholder="Name of customer">
    </div>
    <input type="submit" value="submit">
</form>

<a class="btn" href="{{route('customers.index')}}">Terug naar het overzicht</a>
</body>
</html>
