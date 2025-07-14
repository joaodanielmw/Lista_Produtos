<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo $__env->yieldContent('title', 'Atividade de Sistema de Produtos em PHP M2 '); ?></title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

    <style>
      body {
        background-color: white;
        color: #f3f4f6;
        min-height: 100vh;
        display: flex;
        flex-direction: column;
      }

      header {
        background: black;
        padding: 1rem 2rem;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        display: flex;
        align-items: center;
        justify-content: space-between;
      }

      header h1 {
        font-size: 1.5rem;
        font-weight: bold;
        color: #fff;
        display: flex;
        gap: 0.6rem;
        align-items: center;
      }

      main {
        padding: 2rem;
        width: 100%;
        max-width: 1280px;
        margin: 0 auto;
        flex: 1;
      }

      footer {
        text-align: center;
        padding: 15px;
        color: black;
        font-size: 0.9rem;
      }
    </style>
  </head>
  <body>
    <header>
      <h1>Estoque lojas M2</h1>
    </header>

    <main>
      <?php if(session('success')): ?>
        <div class="alert">
          <i class="fas fa-check-circle"></i>
          <?php echo e(session('success')); ?>

        </div>
      <?php endif; ?>

      <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer>
      &copy; <?php echo e(date('Y')); ?> João Daniel Machado Weng, Miguel Ribas Junior
    </footer>
  </body>
</html>
<?php /**PATH C:\Users\joaom\Downloads\Lista_Produtos\Lista_Produtos\resources\views/layouts/app.blade.php ENDPATH**/ ?>