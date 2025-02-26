

<?php $__env->startSection('content'); ?>
    <div class="max-w-7xl mx-auto py-10">
        <h1 class="text-2xl font-bold mb-6">Admin: Manage Books</h1>

        <a href="<?php echo e(route('admin.books.create')); ?>" class="bg-blue-500 text-white px-4 py-2 rounded">Add New Book</a>

        <div class="mt-6">
            <table class="min-w-full bg-white border-collapse border border-gray-300">
                <thead>
                    <tr>
                        <th class="border px-4 py-2">ID</th>
                        <th class="border px-4 py-2">Title</th>
                        <th class="border px-4 py-2">Author</th>
                        <th class="border px-4 py-2">Year</th>
                        <th class="border px-4 py-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td class="border px-4 py-2"><?php echo e($book->id); ?></td>
                            <td class="border px-4 py-2"><?php echo e($book->title); ?></td>
                            <td class="border px-4 py-2"><?php echo e($book->author); ?></td>
                            <td class="border px-4 py-2"><?php echo e($book->published_date->year ?? 'N/A'); ?></td>
                            <td class="border px-4 py-2 flex justify-center space-x-2">
                                <a href=""
                                   class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>

                                <form action="<?php echo e(route('admin.books.destroy', $book->id)); ?>" method="POST" onsubmit="return confirm('Are you sure?');">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded">Delete</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Autoformation-Solicode-Mobile\Autoformation-Laravel\Tuto_breeze_blog\library-blog\resources\views/admin/books/index.blade.php ENDPATH**/ ?>