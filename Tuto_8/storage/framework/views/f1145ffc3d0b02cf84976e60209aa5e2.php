

<?php $__env->startSection('content'); ?>
    <h3> Modifier Un Article </h1>
    <form action="/articles/<?php echo e($article['id']); ?>" method="POST">
        <?php echo csrf_field(); ?>
          <?php if(isset($article)): ?>
            <?php echo method_field('PUT'); ?>
        <?php endif; ?>

        <label for="title">Titre :</label>
        <input type="text" name="title" value="<?php echo e($article['title']); ?>" required>
        <label for="content">Contenu :</label>
        <input name="content" value="<?php echo e($article['content']); ?>" type="text" required>
        <button type="submit">Edit</button>
    </form>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Autoformation-Solicode-Mobile\Laravel\Tuto_8\resources\views/articles/edit.blade.php ENDPATH**/ ?>