

<?php $__env->startSection('content'); ?>
    <h1><?php echo e($article['title']); ?></h1>
    <p><?php echo e($article['content']); ?></p>
    <button>    <a href="/articles/<?php echo e($article['id']); ?>/edit">Modifier</a></button>
    <form action="/articles/<?php echo e($article['id']); ?>" method="POST" style="display:inline;">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="submit">Supprimer</button>
    </form>
    <div>
            <a href="/articles/">Retour à la liste</a>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Autoformation-Solicode-Mobile\Laravel\Tuto_7\resources\views/articles/show.blade.php ENDPATH**/ ?>