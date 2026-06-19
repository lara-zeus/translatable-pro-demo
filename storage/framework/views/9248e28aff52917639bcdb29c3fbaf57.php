<div class="container mx-auto px-5 py-10">

    <h5 class="mb-4">Queries Details</h5>
    <div class="prose grid grid-cols-2 gap-3 mb-20">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $queries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $query): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
            <div class="bg-sky-100 rounded-2xl shadow overflow-scroll py-3 px-4 space-y-2">
                <p class="font-semibold">Query: <span class="text-sm">(<?php echo e($query['time']); ?> ms)</span></p>
                <pre><code><?php echo e($query['query']); ?></code></pre>
            </div>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-3 gap-2">
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
            <div class="w-full -m-4 flex flex-wrap">
                <div class="w-full p-4">
                    <a class="block aspect-video">
                        <img alt="cover"
                             class="block h-full w-full object-cover object-center rounded-lg shadow-lg"
                             src="<?php echo e($book->cover ?? 'https://picsum.photos/420/260?random=1'); ?>" />
                    </a>
                    <div class="mt-4">
                        <h3 class="title-font mb-1 text-xs tracking-widest text-gray-500">
                            <?php echo e($book->cat->name ?? ''); ?>

                        </h3>
                        <h2 class="title-font text-lg font-medium text-gray-900">
                            <?php echo e($book->title ?? ''); ?>

                        </h2>
                        <p class="mt-1"><?php echo e($book->created_at ?? ''); ?></p>
                    </div>
                </div>
            </div>
        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
    </div>

    <div class="my-10">
        <?php echo e($books->links()); ?>

    </div>

</div>
<?php /**PATH /Users/ahmedkhalid/Documents/laravel/larazeus/translatable-pro-demo/resources/views/livewire/books.blade.php ENDPATH**/ ?>