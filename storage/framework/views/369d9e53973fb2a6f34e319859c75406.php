<?php $__env->startSection('title', 'Lista de Produtos'); ?>

<?php $__env->startSection('content'); ?>
  <div class="flex justify-between items-center mb-6">
    <h2 class="text-2xl font-semibold text-black">Estoque</h2>
    <a href="<?php echo e(route('produtos.create')); ?>" class="text-green-600 ">
      + Adicionar Produto
    </a>
  </div>

  <div class="grid md:grid-cols-2 lg:grid-cols-1 gap-5">
    <?php $__currentLoopData = $produtos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="bg-gray-200 p-5" >
        <h3 class="text-xl font-semibold text-black mb-1"><?php echo e($produto->nome); ?></h3>
        <p class="text-black">R$ <?php echo e(number_format($produto->preco, 2, ',', '.')); ?></p>

        <div class="mt-4 flex gap-2">
          <a href="<?php echo e(route('produtos.edit', $produto->id)); ?>" class=" bg-black text-white font-medium px-4 py-2 rounded-lg text-center">
            Editar
          </a>

          <form action="<?php echo e(route('produtos.destroy', $produto->id)); ?>" method="POST" class="flex-1">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button type="submit" class=" bg-red-500 text-white font-medium px-4 py-2 rounded-lg">
              Remover
            </button>
          </form>
        </div>
      </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </div>

  
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\joaom\Downloads\Lista_Produtos\Lista_Produtos\resources\views/produtos/index.blade.php ENDPATH**/ ?>