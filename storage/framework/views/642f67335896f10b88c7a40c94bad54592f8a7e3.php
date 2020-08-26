<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo e($topic->title); ?></title>
        <style type="text/css">
            table {
                width: 100%;
                border: 1px solid #CCC;
                border-left: none;
            }
            table tr td {
                padding: 5px;
                border-bottom: 1px solid #CCC;
                border-left: 1px solid #CCC;
            }
        </style>
    </head>
    <body>

        <?php $__currentLoopData = $topic->getSub; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h4><?php echo e($item->title); ?></h4>
            
            <?php if($item->getContent): ?>
                <?php
                    $content = html_entity_decode($item->getContent->body);
                    $content = preg_replace('/ style=("|\')(.*?)("|\')/','',$content);
                    $content = str_replace('src="/uploads/', 'src="https://svc.esis.edu.mn/uploads/', $content); 
                ?>
                <?php echo $content; ?>

            <?php endif; ?>

            <?php if($item->getSub ): ?>
                <?php $__currentLoopData = $item->getSub; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $content = html_entity_decode($item1->getContent->body);
                        $content = preg_replace('/ style=("|\')(.*?)("|\')/','',$content);
                        $content = str_replace('src="/uploads/', 'src="https://svc.esis.edu.mn/uploads/', $content);   
                    ?>
                    <?php echo $content; ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            <hr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        
    </body>
</html><?php /**PATH /home/admin/web/help.esis.edu.mn/public_html/resources/views/pdfs.blade.php ENDPATH**/ ?>