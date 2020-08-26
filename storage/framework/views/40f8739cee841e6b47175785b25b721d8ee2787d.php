

<?php $__env->startSection('content'); ?>

<style type="text/css">
	body {
		background: #FFF;
	}
</style>

<div class="container">
	<!-- <h5> <?php echo $main->title; ?> </h5> -->
	<?php
		$content = html_entity_decode($main->body);
		$content = str_replace('samp>','div>',$content);
		//$content = preg_replace('/ style=("|\')(.*?)("|\')/','',$content);
		$content = str_replace('src="/uploads/', 'src="https://svc.esis.edu.mn/uploads/', $content);
	?>
	<?php echo $content; ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', ['pageTitle' => $main->title], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/admin/web/help.esis.edu.mn/public_html/resources/views/announce.blade.php ENDPATH**/ ?>