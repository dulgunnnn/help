

<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('pages.head2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    

    <div class="container mt-5">
        <?php $__currentLoopData = $topic->getSub; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h4 class="font-weight-bold clearfix mb-3">
                <a href="<?php echo e($item->getPermalink()); ?>" class="text-primary">
                    <?php echo e($item->title); ?>

                </a>
            </h4>
            <?php if($item->getSub ): ?>
                <div class="row">
                <?php $__currentLoopData = $item->getSub; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-6">
                        &nbsp; &bull; <?php echo $item1->permalink(); ?>

                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            <?php endif; ?>
            <hr class="my-4">
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/admin/web/help.esis.edu.mn/public_html/resources/views/categories.blade.php ENDPATH**/ ?>