

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('pages.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container my-5">
        <div class="text-center">
            <h1 class="display-3 font-weight-bold">Алдаа 500</h1>
            <p>Уучлаарай таны хандалт амжилтгүй боллоо.</p>
            <p>Та хандалтай шинэчилнэ үү. <span class="badge badge-primary">Click F5<span></p>
        </div>
    </div>

    <div class="container mt-5">
        <hr>
        <?php echo $__env->make('pages.cat-2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="p-3"></div>
        <?php echo $__env->make('pages.cat-1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', ['pageTitle' => 'Сервэрийн алдаа'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/admin/web/help.esis.edu.mn/public_html/resources/views/errors/500.blade.php ENDPATH**/ ?>