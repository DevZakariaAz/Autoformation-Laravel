

<?php $__env->startSection('content'); ?>
    <h2>Liste des Articles</h2>
    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if (isset($component)) { $__componentOriginalc197a308f8f389d8eec7ce56253b9544 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalc197a308f8f389d8eec7ce56253b9544 = $attributes; } ?>
<?php $component = App\View\Components\ArticleCard::resolve(['article' => $article] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('article-card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\ArticleCard::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalc197a308f8f389d8eec7ce56253b9544)): ?>
<?php $attributes = $__attributesOriginalc197a308f8f389d8eec7ce56253b9544; ?>
<?php unset($__attributesOriginalc197a308f8f389d8eec7ce56253b9544); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc197a308f8f389d8eec7ce56253b9544)): ?>
<?php $component = $__componentOriginalc197a308f8f389d8eec7ce56253b9544; ?>
<?php unset($__componentOriginalc197a308f8f389d8eec7ce56253b9544); ?>
<?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('partials.flash-message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php $__env->startSection('sidebar'); ?>
    <h3>Catégories</h3>
    <ul>
        <li>Laravel</li>
        <li>PHP</li>
        <li>Programmation Web</li>
    </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Autoformation-Solicode-Mobile\Laravel\Tuto_8\resources\views/articles/index.blade.php ENDPATH**/ ?>