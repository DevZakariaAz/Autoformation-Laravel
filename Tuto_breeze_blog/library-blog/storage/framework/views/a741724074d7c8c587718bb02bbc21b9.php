<?php if (isset($component)) { $__componentOriginal69dc84650370d1d4dc1b42d016d7226b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b = $attributes; } ?>
<?php $component = App\View\Components\GuestLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\GuestLayout::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="max-w-7xl mx-auto py-10">
        <h1 class="text-3xl font-bold mb-8">Library Books</h1>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8">
            <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-white border rounded-lg shadow-md overflow-hidden">
                    <!-- Dynamically generated image based on the book title -->
                    <img src="https://fakeimg.pl/250x250/?text=<?php echo e(urlencode(explode(' ', $book->title)[0] . ' ' . explode(' ', $book->title)[count(explode(' ', $book->title)) - 1])); ?>&font=arial" class="card-img-top object-cover w-full h-56" alt="Generated Image">

                    <div class="p-4">
                        <h2 class="text-xl font-semibold text-gray-800"><?php echo e($book->title); ?></h2>
                        <p class="text-sm text-gray-500"><?php echo e($book->author); ?></p>
                        <p class="mt-2 text-gray-700"><?php echo e(Str::limit($book->description, 70)); ?></p>
                        <div class="mt-4">
                            <a href="" class="inline-block bg-blue-500 text-white text-sm px-4 py-2 rounded hover:bg-blue-600">View Details</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $attributes = $__attributesOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__attributesOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b)): ?>
<?php $component = $__componentOriginal69dc84650370d1d4dc1b42d016d7226b; ?>
<?php unset($__componentOriginal69dc84650370d1d4dc1b42d016d7226b); ?>
<?php endif; ?>
<?php /**PATH C:\Autoformation-Solicode-Mobile\Autoformation-Laravel\Tuto_breeze_blog\library-blog\resources\views/books/index.blade.php ENDPATH**/ ?>