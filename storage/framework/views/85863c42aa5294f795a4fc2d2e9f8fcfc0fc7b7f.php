

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('pages.head2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container my-5" style="padding-top: 75px;">
        <?php echo $__env->make('pages.cat-'.$id, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/admin/web/help.esis.edu.mn/public_html/resources/views/category.blade.php ENDPATH**/ ?>