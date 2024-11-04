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
    <img class="card-img-top" src="<?php echo e(asset($product->image)); ?>" alt="<?php echo e($product->image); ?>">
    <div class="card-body">
        <p class="card-text">UPC/Product ID: <?php echo e($product->product_id); ?></p>
        <h5 class="card-title"><?php echo e($product->name); ?></h5>
        <p class="card-text"><?php echo e($product->description); ?></p>
        <p class="card-text">Price: <?php echo e($product->price); ?></p>
        <p class="card-text">Stock: <?php echo e($product->stock); ?></p>
    </div>
</div>
</body>
</html>
<?php /**PATH C:\laragon\www\module-20-assignment\resources\views/show.blade.php ENDPATH**/ ?>