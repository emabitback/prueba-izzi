 

<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<div class="offset-md-3 col-md-6">
			<div class="row">
				<table id="productsTable" class="table table-hover" cellspacing="0" width="100%"></table>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		Product.showAll('<?php echo e(url('/product/all')); ?>');
	});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\xampp\htdocs\prueba-izzi\resources\views/list_products.blade.php ENDPATH**/ ?>