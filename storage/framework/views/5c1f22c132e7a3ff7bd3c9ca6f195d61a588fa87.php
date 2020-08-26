<!doctype html>
<html lang="mn">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php echo e($pageTitle); ?></title>

        <!-- Fonts -->

        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        
        <?php echo $__env->yieldContent('search'); ?>
        <!-- Styles -->
        <link href="<?php echo e(asset('/css/app.css?v=0.001')); ?>" rel="stylesheet">
    </head>
    <body>
    <div id="top"></div>

    <?php echo $__env->yieldContent('content'); ?>

    <footer class="bg-muted m-0 py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    2019 - 2020 © Боловсрол, соёл, шинжлэх ухаан, спортын яам.
                </div>
            </div>
        </div>
    </footer>

    <span class="btn btn-primary toTop"><i class="fas fa-chevron-up"></i></span>

    <script type="text/javascript" src="<?php echo e(asset('/js/app.js')); ?>"></script>
    </body>
</html>
<?php /**PATH C:\xampp\htdocs\help\resources\views/layout.blade.php ENDPATH**/ ?>