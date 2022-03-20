<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e(config('app.name')); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <header class="py-3 bg-dark text-white">
        <div class="container">
            <h1 class="h3"><?php echo e(config('app.name')); ?></h1>
        </div>
    </header>
    <div class="container">

        <div class="row">
            <aside class="col-md-3">
                <h4>Navigation</h4>
                <nav>
                    <ul class="nav flex-column">
                        <li class="nav-item"><a href="" class="nav-link">Dashboard</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Categories</a></li>
                        <li class="nav-item"><a href="" class="nav-link">Products</a></li>
                    </ul>
                </nav>
            </aside>
            <main class="col-md-9">
                <div class="mb-4">
                    <?php if(session()->has('success')): ?>
                    <div class="alert alert-success m-4">
                        <?php echo e(session()->get('success')); ?>

                    </div>
                    <?php endif; ?>
                    <?php if(session()->has('delete')): ?>
                    <div class="alert alert-danger m-4">
                        <?php echo e(session()->get('delete')); ?>

                    </div>
                    <?php endif; ?>
                    <h2>
                        <?php echo $__env->yieldContent('title', 'Default'); ?>
                    </h2>
                </div>
                <?php echo $__env->yieldContent('content'); ?>
            </main>
        </div>
    </div>
</body>

</html><?php /**PATH C:\Users\moham\Downloads\Laravel\training\Pallancer-Store\resources\views/layouts/dashboard.blade.php ENDPATH**/ ?>