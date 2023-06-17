<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.show')); ?> <?php echo e(trans('global.article.title')); ?>

    </div>

    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        <?php echo e(trans('global.article.fields.titre')); ?>

                    </th>
                    <td>
                        <?php echo e($article->titre); ?>

                    </td>
                </tr>
                <tr>
                    <th>
                        <?php echo e(trans('global.article.fields.prix')); ?>

                    </th>
                    <td>
                        <?php echo e($article->prix); ?>

                    </td>
                </tr>
                <tr>
                    <th>
                        <?php echo e(trans('global.article.fields.formats')); ?>

                    </th>
                    <td>
                        <?php $__empty_1 = true; $__currentLoopData = $article->formats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <?php echo e($item->nom . ' (' . (!is_null($item->pivot->prix) ? ('prix: ' . $item->pivot->prix) : '') . (!is_null($item->pivot->nomber) ? (', nombres: ' . $item->pivot->nomber) : '') . ')'); ?><br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?php echo e(trans('global.article.fields.papiers')); ?>

                    </th>
                    <td>
                        <?php $__empty_1 = true; $__currentLoopData = $article->papiers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <?php echo e($item->nom . ' (' . (!is_null($item->pivot->prix) ? ('prix: ' . $item->pivot->prix) : '') . (!is_null($item->pivot->nomber) ? (', nombres: ' . $item->pivot->nomber) : '') . ')'); ?><br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?php echo e(trans('global.article.fields.impressions')); ?>

                    </th>
                    <td>
                        <?php $__empty_1 = true; $__currentLoopData = $article->impressions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <?php echo e($item->nom . ' (' . (!is_null($item->pivot->prix) ? ('prix: ' . $item->pivot->prix) : '') . (!is_null($item->pivot->nomber) ? (', nombres: ' . $item->pivot->nomber) : '') . ')'); ?><br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?php echo e(trans('global.article.fields.pelliculages')); ?>

                    </th>
                    <td>
                        <?php $__empty_1 = true; $__currentLoopData = $article->pelliculages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <?php echo e($item->nom . ' (' . (!is_null($item->pivot->prix) ? ('prix: ' . $item->pivot->prix) : '') . (!is_null($item->pivot->nomber) ? (', nombres: ' . $item->pivot->nomber) : '') . ')'); ?><br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?php echo e(trans('global.article.fields.nbr_couleurs')); ?>

                    </th>
                    <td>
                        <?php $__empty_1 = true; $__currentLoopData = $article->nbr_couleurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <?php echo e($item->nbr_coul . ' (' . (!is_null($item->pivot->prix) ? ('prix: ' . $item->pivot->prix) : '') . (!is_null($item->pivot->nomber) ? (', nombres: ' . $item->pivot->nomber) : '') . ')'); ?><br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php endif; ?>
                    </td>
                </tr>
                <tr>
                    <th>
                        <?php echo e(trans('global.article.fields.nbr_exemplaires')); ?>

                    </th>
                    <td>
                        <?php $__empty_1 = true; $__currentLoopData = $article->nbr_exemplaires; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                            <?php echo e($item->nbr_exp . ' (' . (!is_null($item->pivot->prix) ? ('prix: ' . $item->pivot->prix) : '') . (!is_null($item->pivot->nomber) ? (', nombres: ' . $item->pivot->nomber) : '') . ')'); ?><br>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <?php endif; ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel-AdminLTE3\resources\views/admin/articles/show.blade.php ENDPATH**/ ?>