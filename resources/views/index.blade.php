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
<form method="post" action="{{ route('products.search') }}" enctype="multipart/form-data">
@csrf
<div class="form-group">
    <label>Search By UPC/Product ID</label>
    <input type="text" class="form-control" name="search">
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
<a href="{{route('products.sort_by_name')}}" class="btn btn-primary">Sort By Name</a>
<a href="{{route('products.sort_by_price')}}" class="btn btn-primary">Sort By Price</a>
<table class="table table-bordered">
    <thead>
    <tr>
        <th>ID/UPC</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Stock</th>
        <th>Image</th>
    </tr>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>{{ $product->product_id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->description }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->stock }}</td>
            <td><img src="{{asset($product->image)}}" height="100" width="100"></td>
        </tr>
    @endforeach
    </tbody>
</table>
{!! $products->links() !!}
</body>
</html>
