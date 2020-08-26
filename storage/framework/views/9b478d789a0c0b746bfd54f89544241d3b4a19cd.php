

<?php $__env->startSection('search'); ?>
<script>
        (function() {
          var cx = '000535734843300142401:spy8ljghslc';
          var gcse = document.createElement('script');
          gcse.type = 'text/javascript';
          gcse.async = true;
          gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
          var s = document.getElementsByTagName('script')[0];
          s.parentNode.insertBefore(gcse, s);
        })();
</script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    
    <?php echo $__env->make('pages.head2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <div class="container mt-5" style="padding-top: 75px;">
        <h5><?php echo e($pageTitle); ?></h5>
        <hr>
        <gcse:searchresults-only></gcse:searchresults-only>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/admin/web/help.esis.edu.mn/public_html/resources/views/search.blade.php ENDPATH**/ ?>