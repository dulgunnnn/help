<?php $__env->startSection('content'); ?>
    
    <?php echo $__env->make('pages.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Set up your HTML -->
    <div class="container mt-sm-4 my-lg-3 mt-4 mb-3 mt-lg-5">

    <nav>
        <!-- <h4 class="mb-0 text-center">Гарын авлага</h4> -->
        <div class="nav home-nav d-flex justify-content-center" id="nav-tab" role="tablist">
            <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">ЕБС</a>
            <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">СӨБ</a>
            <a class="nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Эцэг эх</a>
            <a class="nav-link" id="nav-contact2-tab" data-toggle="tab" href="#nav-contact2" role="tab" aria-controls="nav-contact2" aria-selected="false">НТБ</a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"> <?php echo $__env->make('pages.cat-2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab"> <?php echo $__env->make('pages.cat-1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab"> <?php echo $__env->make('pages.cat-3', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
        <div class="tab-pane fade" id="nav-contact2" role="tabpanel" aria-labelledby="nav-contact2-tab"> <?php echo $__env->make('pages.cat-4', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?></div>
    </div>

    </div>

    <div class="bg-white border-top py-xl-4 py-lg-3  border-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                <h4 class="mb-xl-3 text-center">Шинээр нэмэгдсэн</h4>
                <hr class="divider my-lg-2">
                <?php $i=0;?>
                <?php $__currentLoopData = $lastTopic; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(isset($item->getTitle->title) && $i < 8): ?>
                    <div class="list-last p-2">
                        <div class="row d-flex align-items-center">
                            <div class="col-md-9">
                                <div class="w-100 border-0">
                                    <a href="<?php echo $item->getPermalink(); ?>"><?php echo $item->getTitle->title; ?></a>
                                    <div class="mt-xl-2 mt-lg-1">
                                        <ul class="list-inline m-0 text-muted">
                                            <li class="list-inline-item"><i class="task-list-icon"></i></li>
                                            <li class="list-inline-item"><?php echo $item->getRole->getCategory->getParent->permalink('text-muted'); ?></li>
                                            <?php echo $item->getTitle->treeList(); ?>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 text-md-right">
                                <?php
                                    $dt = new \Carbon\Carbon($item->created);
                                ?>
                                <span class="text-muted"><i class="far fa-clock small"></i> <?php echo e($dt->format('Y/m/d')); ?></span>
                            </div>
                        </div>
                    </div>
                    <hr class="m-0">
                    <?php $i++; ?>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\help\resources\views/index.blade.php ENDPATH**/ ?>