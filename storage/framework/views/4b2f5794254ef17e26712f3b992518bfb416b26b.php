<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.show')); ?> <?php echo e(trans(' global.commande.title')); ?>

    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped">
            <tbody>
                <tr>
                    <th>
                        <?php echo e(trans('global.commande.fields.name')); ?>

                    </th>
                    <td>
                        <?php echo e($commande->user->name); ?>

                    </td>
                </tr>
                <tr>
                    <th>
                        <?php echo e(trans('global.commande.fields.email')); ?>

                    </th>
                    <td>
                        <?php echo e($commande->user->email); ?>

                    </td>
                </tr>
                <tr>
                    <th>
                        <?php echo e(trans('global.commande.fields.article')); ?>

                    </th>
                    <td>
                        <?php echo e($commande->article->titre); ?>

                    </td>
                </tr>
                <tr>
                    <th>
                        <?php echo e(trans('global.commande.fields.format')); ?>

                    </th>
                    <td>
                        <?php echo e($commande->format->nom); ?>

                    </td>
                </tr>
                <tr>
                    <th>
                        <?php echo e(trans('global.commande.fields.papier')); ?>

                    </th>
                    <td>
                        <?php echo e($commande->papier); ?>

                    </td>
                </tr>
                <tr>
                    <th>
                        <?php echo e(trans('global.commande.fields.impression')); ?>

                    </th>
                    <td>
                        <?php echo e($commande->impression); ?>

                    </td>
                </tr>
                <tr>
                    <th>
                        <?php echo e(trans('global.commande.fields.pelliculage')); ?>

                    </th>
                    <td>
                        <?php echo e($commande->pelliculage); ?>

                    </td>
                </tr>
                <tr>
                    <th>
                        <?php echo e(trans('global.commande.fields.nbr_couleur')); ?>

                    </th>
                    <td>
                        <?php echo e($commande->nbr_couleur); ?>

                    </td>
                </tr>
                <tr>
                    <th>
                        <?php echo e(trans('global.commande.fields.nbr_exemplaire')); ?>

                    </th>
                    <td>
                        <?php echo e($commande->nbr_exemplaire); ?>

                    </td>
                </tr>
                <tr>
                    <th>
                        <?php echo e(trans('global.commande.fields.qte')); ?>

                    </th>
                    <td>
                        <?php echo e($commande->qte); ?>

                    </td>
                </tr>
                <tr>
                    <th>
                        <?php echo e(trans('global.commande.fields.prix_unitaire')); ?>

                    </th>
                    <td>
                        <?php echo e($commande->prix_unitaire); ?>

                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel-AdminLTE3\resources\views/admin/commandes/show.blade.php ENDPATH**/ ?>