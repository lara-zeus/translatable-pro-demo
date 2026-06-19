<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php echo e($title ?? 'Translatable Pro Demo'); ?></title>
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    </head>
    <body>

        <?php if (isset($component)) { $__componentOriginal9e79cd15ec5b5957133f9c0a985abe76 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9e79cd15ec5b5957133f9c0a985abe76 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.nav','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.nav'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9e79cd15ec5b5957133f9c0a985abe76)): ?>
<?php $attributes = $__attributesOriginal9e79cd15ec5b5957133f9c0a985abe76; ?>
<?php unset($__attributesOriginal9e79cd15ec5b5957133f9c0a985abe76); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9e79cd15ec5b5957133f9c0a985abe76)): ?>
<?php $component = $__componentOriginal9e79cd15ec5b5957133f9c0a985abe76; ?>
<?php unset($__componentOriginal9e79cd15ec5b5957133f9c0a985abe76); ?>
<?php endif; ?>

        <div class="bg-sky-50 max-w-6xl mx-auto rounded-b-2xl shadow-md">

            <section class="text-sky-700">
                <?php echo e($slot); ?>

            </section>

            <footer class="text-center py-4">
                Create By &copy;
                <a href="https://larazeus.com" target="_blank">
                    <link rel="stylesheet" href="https://still-code.com/css/still-sign.css"><span class="still-font-koho still-group"><span class="still-font-koho still-font-semibold still-text-zprimary-500 group-hover:still-text-zsecondary-500 still-transition still-ease-in-out still-duration-300">Lara&nbsp;<span class="still-font-koho still-line-through still-italic still-text-zsecondary-500 group-hover:still-text-zprimary-500 still-transition still-ease-in-out still-duration-300">Z</span>eus</span></span>
                </a>
            </footer>
        </div>

    <!-- no tags for you -->

    </body>
</html>
<?php /**PATH /Users/ahmedkhalid/Documents/laravel/larazeus/translatable-pro-demo/resources/views/components/layouts/app.blade.php ENDPATH**/ ?>