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
<div class="row row-cols-1 row-cols-md-4 g-4">
    <div class="col">
        @foreach($recipes as $recipe)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$recipe->name}}</h5>
                    <a type="button" class="btn btn-outline-primary" href="{{route('recipes.show', $recipe->id)}}">Show details</a>
                </div>
            </div>
    </div>
    <div class="col">
        @endforeach
    </div>
</div>
{{--
<a class="btn" href="{{route('recipes.create')}}">Create a new customer</a>
--}}
</div>
</body>
</html>
