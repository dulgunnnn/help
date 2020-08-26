<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('pages.head2', ['items' => $leftitems], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container mt-5">
        <div class="row">
            
            <div class="col-md-9">
                <div class="card card-body mb-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>">Эхлэл</a></li>
                            <?php $__currentLoopData = array_reverse($topic->getTree()); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="breadcrumb-item"><a href="<?php echo e(url('cat/'.$item->id)); ?>"><?php echo e($item->title); ?></a></li>
                                <?php
                                    $mainId = $item->id;
                                    $mainTitle = $item->title;
                                ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ol>
                    </nav>
                    <div class="single-content" id="content">
                        <?php if($topic->getContent ): ?>
                            <div class="row mb-4 d-flex align-items-center">
                                <div class="col-10">
                                    <h4 class="font-weight-bold"><?php echo $topic->title; ?></h4>
                                </div>
                                <div class="col-2">
                                    <div class="btn-group float-right" id="hidden-print" role="group" aria-label="Хэвлэх, Татах">
                                        <span class="btn btn-outline-dark print-btn" data-toggle="tooltip" data-placement="top" title="Хэвлэх"><i class="fas fa-print"></i></span>
                                        <a href="<?php echo e(url('pdf/'.$id)); ?>" class="btn btn-outline-dark" data-toggle="tooltip" data-placement="top" title="PDF татах" download><i class="fas fa-file-pdf"></i></a>
                                    </div>
                                </div>
                            </div>
                                <hr>
                                <?php
                                    $content = html_entity_decode($topic->getContent->body);
                                    $content = str_replace('samp>','div>',$content);
                                    $content = preg_replace('/ style=("|\')(.*?)("|\')/','',$content);

                                    $content = str_replace('src="/uploads/', 'src="https://svc.esis.edu.mn/uploads/', $content);

                                    // $dom = new \DomDocument;
                                    // $dom->loadHTML($content);
                                    // $images = $dom->getElementsByTagName('img');
                                    // foreach ($images as $image) {
                                    //     $src = $image->getAttribute('src');
                                    //     $url = parse_url($src);
                                    //     $image->setAttribute('src', 'https://help.esis.edu.mn/'.$url['path'] );
                                    //     //$image->setAttribute('src', http_build_url( 'http://www.example.com/', $url ) );
                                    // }
                                    // $html = $dom->saveHTML();
                                ?>
                                
                                <?php echo $content; ?>

                        <?php else: ?>
                            <div class="alert alert-warning">
                                Тусламж бичигдээгүй байна..
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="sticky-sidebar">

                    <div class="list-group">
                        <?php $__currentLoopData = $topic->getParant; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <a href="<?php echo e($item->getPermalink()); ?>" class="list-group-item list-group-item-action <?php echo e(( in_array($item->id, $active) ? 'active':'' )); ?>"><?php echo e($item->title); ?></a>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <div class="text-center mt-3">
                        <a href="<?php echo e(url('pdfs/'.$mainId)); ?>" class="btn btn-primary" download> <i class="fas fa-file-pdf mr-2"></i> Гарын авлагыг бүлгээр татах</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\help\resources\views/content.blade.php ENDPATH**/ ?>