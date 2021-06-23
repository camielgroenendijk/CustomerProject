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
    <h1>ID: #{{$customer->id}}</h1>
    <label for="title">Title</label>
    <p>{{$customer->name}}</p>
</div>

<div class="item buttons">
    <a class="btn" id="card_btn-edit" href="{{route('customers.edit', $customer->id)}}">Edit Customer</a>
    <form action="{{route('customers.destroy', $customer->id)}}" method="post">
        @method('delete')
        @csrf
        <input class="link" id="card_btn-del" type="submit" value="Delete Customer">
    </form>
</div>
</body>
</html>
