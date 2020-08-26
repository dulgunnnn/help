    <header>
        <div id="head-one" class="fixed-top">
            <div class="container-fluid py-3">
                <div class="row d-flex align-items-center">
                    <div class="col-md-4 col-4">
                        <a href="<?php echo e(url('/')); ?>" class="logo">
                            <?php echo $__env->make('svg.logo-yam', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </a>
                    </div>
                    <div class="col-md-4 col-4 text-center">
                        <a href="<?php echo e(url('/')); ?>" class="logo">
                            <?php echo $__env->make('svg.logo-esis', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </a>
                    </div>
                    <div class="col-md-4 col-4 text-right">
                        <ul class="list-inline text-white m-0">
                            <li class="list-inline-item text-nowrap mr-md-3 m-0">
                                <i class="far fa-envelope"></i> 
                                <a href="mailto:info@edu.mn" class="text-white">info@edu.mn</a>
                            </li>
                            <li class="list-inline-item text-nowrap">
                                <i class="fas fa-phone"></i>
                                <a href="tel:75778080" class="text-white"> 7577 8080</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="head-two" class="fixed-top bg-white shadow border-bottom d-none">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-4 col-md-5 col-sm-6 col-4 text-nowrap">
                        <a href="<?php echo e(url('/')); ?>" class="logo">
                            <?php echo $__env->make('svg.logo-esis', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </a>
                        <!-- <a href="<?php echo e(url('/')); ?>" class="d-inline-block ml-3 font-weight-bold bg-primary text-white px-2">Цахим гарын авлага</a> -->
                    </div>
                    <div class="col-lg-8 col-md-7 col-sm-6 col-8">
                    <form action="<?php echo e(url('search')); ?>">
                        <div class="input-group my-3 border rounded">
                            <div class="input-group-prepend border-0">
                                <button type="submit" class="input-group-text border-0 bg-white">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                            <input type="text" name="q" class="form-control border-0" required placeholder="Хайх ...">
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="bg-primary text-white head-big">
        <div class="container search-head">
            <div class="row d-flex align-items-center">
                <div class="col-md-8 offset-md-2 text-center py-xl-4 py-lg-2">
                    <h1 class="head-title">Цахим гарын авлага</h1>
                    <form action="<?php echo e(url('search')); ?>">
                    <div class="input-group head-input input-group-lg my-xl-4 my-lg-3 mt-1 mb-3 shadow">
                        <input type="text" required name="q" class="form-control border-0" placeholder="Хайх ...">
                        <div class="input-group-append border-0">
                            <button class="input-group-text border-0 bg-white">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                    </form>
                    
                </div>
            </div>
        </div>
    </div><?php /**PATH C:\xampp\htdocs\help\resources\views/pages/head.blade.php ENDPATH**/ ?>