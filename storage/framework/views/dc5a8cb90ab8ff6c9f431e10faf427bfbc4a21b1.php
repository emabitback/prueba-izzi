 

<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<div class="offset-md-4 col-md-4">
			<form id="formProduct">
				<div class="form-group">
					<label for="exampleInputEmail1">Nombre del producto</label>
					<input type="text" class="form-control" id="producto" name="producto">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Descripción</label>
					<input type="text" class="form-control" id="descripcion" name="descripcion">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Categoria</label>
					<select class="form-control select2" id="categoria" name="categoria"></select>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Sucursal</label>
					<select class="form-control select2" id="sucursal" name="sucursal"></select>
				</div>
				<div class="form-group">
					<label for="exampleInputEmail1">Precio</label>
					<input type="text" class="form-control" id="precio" name="precio">
				</div>
				<div class="row justify-center mt-4">
					<button type="button" class="btn btn-primary" onclick="Product.register('<?php echo e(url('/product/add')); ?>')">Registrar</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		Product.init('<?php echo e(url('/category/all')); ?>','<?php echo e(url('/office/all')); ?>'); 
	});
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH H:\xampp\htdocs\prueba-izzi\resources\views/add_product.blade.php ENDPATH**/ ?>