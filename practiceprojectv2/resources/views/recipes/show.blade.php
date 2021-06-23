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
    <h1>ID: #{{$recipe->id}}</h1>
    <label for="title">Title</label>
    <p>{{$recipe->name}}</p>
</div>

<div class="item buttons">
    <a class="btn" id="card_btn-edit" href="{{route('recipes.edit', $recipe->id)}}">Edit Recipe</a>
    <form action="{{route('recipes.destroy', $recipe->id)}}" method="post">
        @method('delete')
        @csrf
        <input class="link" id="card_btn-del" type="submit" value="Delete Recipe">
    </form>
</div>
</body>
</html>
