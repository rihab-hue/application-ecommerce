<?php $__env->startSection('content'); ?>
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('article_create')): ?>
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="<?php echo e(route("admin.articles.create")); ?>">
                <?php echo e(trans('global.add')); ?> <?php echo e(trans('global.article.title_singular')); ?>

            </a>
        </div>
    </div>
<?php endif; ?>
<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.article.title_singular')); ?> <?php echo e(trans('global.list')); ?>

    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            <?php echo e(trans('global.article.fields.titre')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('global.article.fields.prix')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('global.article.fields.statut')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('global.article.fields.formats')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('global.article.fields.papiers')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('global.article.fields.impressions')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('global.article.fields.pelliculages')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('global.article.fields.nbr_couleurs')); ?>

                        </th>
                        <th>
                            <?php echo e(trans('global.article.fields.nbr_exemplaires')); ?>

                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr data-entry-id="<?php echo e($article->id); ?>">
                            <td>

                            </td>
                            <td>
                                <?php echo e($article->titre ?? ''); ?>

                            </td>
                            <td>
                                <?php echo e($article->prix ?? ''); ?>

                            </td>
                            <td>
                                <?php echo ($article->statut == 1) ? '<span class="text-success">Active</span>' : '<span class="text-danger">Desactive</span>'; ?>

                            </td>
                             
                            <td>
                                <?php $__empty_1 = true; $__currentLoopData = $article->formats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <?php echo e($item->nom . ' (' . (!is_null($item->pivot->prix) ? ('prix: ' . $item->pivot->prix) : '') . (!is_null($item->pivot->nomber) ? (', nombres: ' . $item->pivot->nomber) : '') . ')'); ?><br>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <?php endif; ?>

                            </td>
                            <td>
                                <?php $__empty_1 = true; $__currentLoopData = $article->papiers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <?php echo e($item->nom . ' (' . (!is_null($item->pivot->prix) ? ('prix: ' . $item->pivot->prix) : '') . (!is_null($item->pivot->nomber) ? (', nombres: ' . $item->pivot->nomber) : '') . ')'); ?><br>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php $__empty_1 = true; $__currentLoopData = $article->impressions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <?php echo e($item->nom . ' (' . (!is_null($item->pivot->prix) ? ('prix: ' . $item->pivot->prix) : '') . (!is_null($item->pivot->nomber) ? (', nombres: ' . $item->pivot->nomber) : '') . ')'); ?><br>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php $__empty_1 = true; $__currentLoopData = $article->pelliculages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <?php echo e($item->nom . ' (' . (!is_null($item->pivot->prix) ? ('prix: ' . $item->pivot->prix) : '') . (!is_null($item->pivot->nomber) ? (', nombres: ' . $item->pivot->nomber) : '') . ')'); ?><br>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <?php endif; ?>

                            </td>
                            <td>
                                <?php $__empty_1 = true; $__currentLoopData = $article->nbr_couleurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <?php echo e($item->nbr_coul . ' (' . (!is_null($item->pivot->prix) ? ('prix: ' . $item->pivot->prix) : '') . (!is_null($item->pivot->nomber) ? (', nombres: ' . $item->pivot->nomber) : '') . ')'); ?><br>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <?php endif; ?>

                            </td>
                            <td>
                                <?php $__empty_1 = true; $__currentLoopData = $article->nbr_exemplaires; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                    <?php echo e($item->nbr_exp . ' (' . (!is_null($item->pivot->prix) ? ('prix: ' . $item->pivot->prix) : '') . (!is_null($item->pivot->nomber) ? (', nombres: ' . $item->pivot->nomber) : '') . ')'); ?><br>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                <?php endif; ?>
                            </td>
                            <td>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('article_show')): ?>
                                    <a class="btn btn-xs btn-primary" href="<?php echo e(route('admin.articles.show', $article->id)); ?>">
                                        <?php echo e(trans('global.view')); ?>

                                    </a>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('article_edit')): ?>
                                    <a class="btn btn-xs btn-info" href="<?php echo e(route('admin.articles.edit', $article->id)); ?>">
                                        <?php echo e(trans('global.edit')); ?>

                                    </a>
                                <?php endif; ?>
                                <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('article_delete')): ?>
                                    <form action="<?php echo e(route('admin.articles.destroy', $article->id)); ?>" method="POST" onsubmit="return confirm('<?php echo e(trans('global.areYouSure')); ?>');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                        <input type="submit" class="btn btn-xs btn-danger" value="<?php echo e(trans('global.delete')); ?>">
                                    </form>
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
##parent-placeholder-16728d18790deb58b3b8c1df74f06e536b532695##
<script>
    $(function () {
  let deleteButtonTrans = '<?php echo e(trans('global.datatables.delete')); ?>'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "<?php echo e(route('admin.articles.massDestroy')); ?>",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('<?php echo e(trans('global.datatables.zero_selected')); ?>')

        return
      }

      if (confirm('<?php echo e(trans('global.areYouSure')); ?>')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
<?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('article_delete')): ?>
  dtButtons.push(deleteButton)
<?php endif; ?>

  $('.datatable:not(.ajaxTable)').DataTable({ buttons: dtButtons })
})

</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel-AdminLTE3\resources\views/admin/articles/index.blade.php ENDPATH**/ ?>