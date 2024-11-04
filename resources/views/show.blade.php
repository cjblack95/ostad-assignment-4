<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Product Manager</title>
</head>
<body>
<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{asset($product->image)}}" alt="{{$product->image}}">
    <div class="card-body">
        <p class="card-text">UPC/Product ID: {{$product->product_id}}</p>
        <h5 class="card-title">{{$product->name}}</h5>
        <p class="card-text">{{$product->description}}</p>
        <p class="card-text">Price: {{$product->price}}</p>
        <p class="card-text">Stock: {{$product->stock}}</p>
    </div>
</div>
</body>
</html>
