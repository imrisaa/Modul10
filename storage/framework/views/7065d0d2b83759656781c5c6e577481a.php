<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>
<body>
    

    <?php $__env->startSection('content'); ?>

   <div class="container mt-4">
        <h4>Profile</h4>
        <hr>
        <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3 border">
            <div class="bi-person-circle me-3 fs-1"></div>
            <h4 class="mb-0">Well done! this is Profile.</h4>
        </div>
    </div>
    <?php $__env->stopSection(); ?>

    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>
</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/dewinahrisaamelia/Latihan Modul08/resources/views/profile.blade.php ENDPATH**/ ?>