

<?php $__env->startSection('title', 'Editar Produto'); ?>

<?php $__env->startSection('content'); ?>
  <div>
    <div class="flex justify-between items-center mb-4">
      <h2 class="text-2xl font-semibold text-black">Editar</h2>
      <a href="<?php echo e(route('produtos.index')); ?>"
         class="text-sm text-black">
         ← Voltar
      </a>
    </div>

    <form action="<?php echo e(route('produtos.update', $produto)); ?>" method="POST" class="space-y-4">
      <?php echo csrf_field(); ?>
      <?php echo method_field('PUT'); ?>

      <div>
        <label class="block text-sm text-black">Nome:</label>
        <input type="text" name="nome" value="<?php echo e($produto->nome); ?>" class="w-full px-4 py-2 rounded bg-gray-300 text-black" required>
      </div>

      <div>
        <label class="block text-sm  text-black">Preço:</label>
        <input type="number" step="0.01" name="preco" value="<?php echo e($produto->preco); ?>" class="w-full px-4 py-2 rounded bg-gray-300 text-black" required>
      </div>

      <div>
        <label class="block text-sm text-black">Estoque:</label>
        <input type="number" name="estoque" value="<?php echo e($produto->estoque); ?>" class="w-full px-4 py-2 rounded bg-gray-300 text-black"required>
      </div>

      <button type="submit"
              class="bg-black text-white px-6 py-2 rounded-md shadow-md">
        Atualizar
      </button>
    </form>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\joaom\Downloads\Lista_Produtos\Lista_Produtos\resources\views/produtos/edit.blade.php ENDPATH**/ ?>