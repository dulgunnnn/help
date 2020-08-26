    <div class="text-center">
        <h5>ЕБС-ийн цахим гарын авлага</h5>
        <hr class="divider my-0 my-xl-3 my-lg-1">
    </div>

    <div class="row my-xl-3 my-2 d-flex align-items-stretch">
        <div class="col-md-4 d-flex align-items-stretch">
            <div class="card card-body my-xl-3 my-lg-2 p-xl-3 py-lg-2 px-lg-3  my-2 help-block text-center shadow">
                <?php echo $__env->make('svg.icon-1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <h5 class="mt-xl-3 mt-lg-2"><a href="<?php echo e(url('cat/220')); ?>" class="text-primary">Мэргэжилтэн (ЕБС)</a></h5>
                <p class="m-0"><?php echo \App\Rolemenu::list(11); ?></p>
            </div>
        </div>
        <div class="col-md-4 d-flex align-items-stretch">
            <div class="card card-body my-xl-3 my-lg-2 p-xl-3 py-lg-2 px-lg-3  my-2 help-block text-center shadow">
                <?php echo $__env->make('svg.icon-2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <h5 class="mt-xl-3 mt-lg-2"><a href="<?php echo e(url('cat/218')); ?>"  class="text-primary">Сургалтын менежер</a></h5>
                <p class="m-0"><?php echo \App\Rolemenu::list(10); ?></p>
            </div>
        </div>
        <div class="col-md-4 d-flex align-items-stretch">
            <div class="card card-body my-xl-3 my-lg-2 p-xl-3 py-lg-2 px-lg-3  my-2 help-block text-center shadow">
                <?php echo $__env->make('svg.icon-3', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <h5 class="mt-xl-3 mt-lg-2"><a href="<?php echo e(url('cat/262')); ?>" class="text-primary">Багш</a></h5>
                <p class="m-0"><?php echo \App\Rolemenu::list(8); ?></p>
            </div>
        </div>
    </div><?php /**PATH /home/admin/web/help.esis.edu.mn/public_html/resources/views/pages/cat-2.blade.php ENDPATH**/ ?>