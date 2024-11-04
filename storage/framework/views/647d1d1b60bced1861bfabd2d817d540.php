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
<?php if($errors->any()): ?>
    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div><?php echo e($error); ?></div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php endif; ?>
<form method="post" action="<?php echo e(route('products.store')); ?>" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <div class="form-group">
        <label>Product ID / UPC</label>
        <input type="text" class="form-control" name="product_id">
    </div>
    <div class="form-group">
        <label>Product Name</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label>Product Description</label>
        <input type="text" class="form-control" name="description">
    </div>
    <div class="form-group">
        <label>Price</label>
        <input type="text" class="form-control" name="price">
    </div>
    <div class="form-group">
        <label>Stock</label>
        <input type="text" class="form-control" name="stock">
    </div>
    <div class="form-group">
        <label>Image</label>
        <input type="file" class="form-control-file" name="image">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>
<?php /**PATH C:\laragon\www\module-20-assignment\resources\views/create.blade.php ENDPATH**/ ?>