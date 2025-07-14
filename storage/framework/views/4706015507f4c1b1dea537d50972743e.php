

<?php $__env->startSection('title', 'Cadastrar Produto'); ?>

<?php $__env->startSection('content'); ?>
  <div>
    <div class="flex justify-between items-center mb-4">
      <h2 class="text-2xl font-semibold text-black">Novo Produto</h2>
      <a href="<?php echo e(route('produtos.index')); ?>"
         class="text-sm text-black">
         ← Voltar
      </a>
    </div>

    <form action="<?php echo e(route('produtos.store')); ?>" method="POST" class="space-y-4">
      <?php echo csrf_field(); ?>
      <div>
        <label class="block text-sm text-black">Nome:</label>
        <input type="text" name="nome" class="w-full px-4 py-2 rounded bg-gray-300  text-black" required>
      </div>

      <div>
        <label class="block text-sm text-black">Preço:</label>
        <input type="number" step="0.01" name="preco" class="w-full px-4 py-2 rounded bg-gray-300 text-black" required>
      </div>

      <div>
        <label class="block text-sm text-black">Estoque:</label>
        <input type="number" name="estoque" class="w-full px-4 py-2 rounded bg-gray-300 text-black" required>
      </div>

      <div>
        <label class="block text-sm text-black">Categoria:</label>
        <select name="categoria_id" class="w-full px-4 py-2 rounded bg-gray-300 required text-black" required>
          <option value="">Selecione uma categoria</option>
          <?php $__currentLoopData = $categorias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categoria): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($categoria->id); ?>"><?php echo e($categoria->nome); ?></option>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
      </div>

      <button type="submit" class="bg-black text-white px-6 py-2 rounded-md">
        Salvar
      </button>
    </form>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\joaom\Downloads\Lista_Produtos\Lista_Produtos\resources\views/produtos/create.blade.php ENDPATH**/ ?>