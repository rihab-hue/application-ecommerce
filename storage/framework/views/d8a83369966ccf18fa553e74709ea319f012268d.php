<?php $__env->startSection('styles'); ?>
    <style>
        .select2{
            width: 100% !important;
        }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="card">
        <div class="card-header p-2">
            <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Infos</a></li>
                <li class="nav-item"><a class="nav-link" href="#formats" data-toggle="tab">Formats</a></li>
                <li class="nav-item"><a class="nav-link" href="#papiers" data-toggle="tab">Papiers</a></li>
                <li class="nav-item"><a class="nav-link" href="#impressions" data-toggle="tab">Impressions</a></li>
                <li class="nav-item"><a class="nav-link" href="#pelliculages" data-toggle="tab">Pelliculages</a></li>
                <li class="nav-item"><a class="nav-link" href="#nbr_couleurs" data-toggle="tab">Nbr_couleurs</a></li>
                <li class="nav-item"><a class="nav-link" href="#nbr_exemplaires" data-toggle="tab">Nbr_exemplaires</a></li>
            </ul>
        </div>
        <div class="card-body">
            <form action="<?php echo e(route("admin.articles.update", [$article->id])); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <?php echo method_field('PUT'); ?>
                <div class="tab-content">
                    <div class="tab-pane active" id="activity">
                        <div class="">
                            <div class="form-group <?php echo e($errors->has('titre') ? 'has-error' : ''); ?>">
                                <label for="titre"><?php echo e(trans('global.article.fields.titre')); ?>*</label>
                                <input type="text" id="titre" name="titre" class="form-control" value="<?php echo e(old('titre', isset($article) ? $article->titre : '')); ?>">
                                <?php if($errors->has('titre')): ?>
                                    <p class="help-block">
                                        <?php echo e($errors->first('titre')); ?>

                                    </p>
                                <?php endif; ?>
                                <p class="helper-block">
                                    <?php echo e(trans('global.article.fields.titre_helper')); ?>

                                </p>
                            </div>

                            <div class="form-group <?php echo e($errors->has('meta_titre') ? 'has-error' : ''); ?>">
                                <label for="meta_titre"><?php echo e(trans('global.article.fields.meta_titre')); ?></label>
                                <input type="text" id="meta_titre" name="meta_titre" class="form-control" value="<?php echo e(old('meta_titre', isset($article) ? $article->meta_titre : '')); ?>">
                                <?php if($errors->has('titre')): ?>
                                    <p class="help-block">
                                        <?php echo e($errors->first('meta_titre')); ?>

                                    </p>
                                <?php endif; ?>
                                <p class="helper-block">
                                    <?php echo e(trans('global.article.fields.meta_titre_helper')); ?>

                                </p>
                            </div>
                            <div class="form-group <?php echo e($errors->has('description') ? 'has-error' : ''); ?>">
                                <label for="description"><?php echo e(trans('global.article.fields.description')); ?></label>
                                <textarea id="description" name="description" class="form-control "><?php echo e(old('description', isset($article) ? $article->description : '')); ?></textarea>
                                <?php if($errors->has('description')): ?>
                                    <p class="help-block">
                                        <?php echo e($errors->first('description')); ?>

                                    </p>
                                <?php endif; ?>
                                <p class="helper-block">
                                    <?php echo e(trans('global.article.fields.description_helper')); ?>

                                </p>
                            </div>

                            <div class="form-group <?php echo e($errors->has('meta_description') ? 'has-error' : ''); ?>">
                                <label for="meta_description"><?php echo e(trans('global.article.fields.meta_description')); ?></label>
                                <textarea id="meta_description" name="meta_description" class="form-control "><?php echo e(old('meta_description', isset($article) ? $article->meta_description : '')); ?></textarea>
                                <?php if($errors->has('meta_description')): ?>
                                    <p class="help-block">
                                        <?php echo e($errors->first('meta_description')); ?>

                                    </p>
                                <?php endif; ?>
                                <p class="helper-block">
                                    <?php echo e(trans('global.article.fields.meta_description_helper')); ?>

                                </p>
                            </div>
                            <div class="form-group <?php echo e($errors->has('prix') ? 'has-error' : ''); ?>">
                                <label for="prix"><?php echo e(trans('global.article.fields.prix')); ?>*</label>
                                <input type="number" id="prix" name="prix" class="form-control" value="<?php echo e(old('prix', isset($article) ? $article->prix : '')); ?>" step="0.01">
                                <?php if($errors->has('prix')): ?>
                                    <p class="help-block">
                                        <?php echo e($errors->first('prix')); ?>

                                    </p>
                                <?php endif; ?>
                                <p class="helper-block">
                                    <?php echo e(trans('global.article.fields.prix_helper')); ?>

                                </p>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" <?php echo e((isset($article) && $article->statut == 1 ) ? 'checked' : ''); ?> name="statut">
                                <label class="form-check-label" for="statut">
                                <b><?php echo e(trans('global.article.fields.statut')); ?></b>
                                </label>
                            </div>
                            <div>
                                <input class="btn btn-danger" type="submit" value="<?php echo e(trans('global.save')); ?>">
                            </div>            
                        </div>
                    </div>
                    <div class="tab-pane" id="formats">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Ajouter les formats possible</h3>
                                <div class="card-tools">
                                    <button id="addRow_format" type="button" class="btn btn-info">Add Row</button>
                                </div>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Select</th>
                                            <th>Prix</th>
                                            <th>Nombres</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="newRow_format">
                                        <?php $__empty_1 = true; $__currentLoopData = $article->formats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $format): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <tr class="inputFormRow_format">
                                                <td>
                                                    <select name="select_format[]" class="form-control m-input select2 w-100">
                                                        <?php $__currentLoopData = $formats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($item->id); ?>" <?php if($format->id == $item->id): ?> selected <?php endif; ?> ><?php echo e($item->nom); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="number" name="prix_format[]" class="form-control m-input" placeholder="Enter prix" autocomplete="off" value="<?php echo e($format->pivot->prix); ?>">
                                                </td>
                                                <td>
                                                    <input type="number" name="nomber_format[]" class="form-control m-input" placeholder="Enter nomber" autocomplete="off" value="<?php echo e($format->pivot->nomber); ?>">
                                                </td>
                                                <td>
                                                    <button id="removeRow_format" type="button" class="btn btn-danger">Remove</button>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <tr class="inputFormRow_format">
                                                <td>
                                                    <select name="select_format[]" class="form-control m-input select2 w-100">
                                                        <option value="">Choisir</option>
                                                        <?php $__currentLoopData = $formats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->nom); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="number" name="prix_format[]" class="form-control m-input" placeholder="Enter prix" autocomplete="off">
                                                </td>
                                                <td>
                                                    <input type="number" name="nomber_format[]" class="form-control m-input" placeholder="Enter nomber" autocomplete="off">
                                                </td>
                                                <td>
                                                    <button id="removeRow_format" type="button" class="btn btn-danger">Remove</button>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="papiers">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Ajouter les papiers possible</h3>
                                <div class="card-tools">
                                    <button id="addRow_papier" type="button" class="btn btn-info">Add Row</button>
                                </div>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Select</th>
                                            <th>Prix</th>
                                            <th>Nombres</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="newRow_papier">
                                    <?php $__empty_1 = true; $__currentLoopData = $article->papiers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $papier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <tr class="inputFormRow_papier">
                                                <td>
                                                    <select name="select_papier[]" class="form-control m-input select2 w-100">
                                                        <?php $__currentLoopData = $papiers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($item->id); ?>" <?php if($papier->id == $item->id): ?> selected <?php endif; ?> ><?php echo e($item->nom); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="number" name="prix_papier[]" class="form-control m-input" placeholder="Enter prix" autocomplete="off" value="<?php echo e($papier->pivot->prix); ?>">
                                                </td>
                                                <td>
                                                    <input type="number" name="nomber_papier[]" class="form-control m-input" placeholder="Enter nomber" autocomplete="off" value="<?php echo e($papier->pivot->nomber); ?>">
                                                </td>
                                                <td>
                                                    <button id="removeRow_papier" type="button" class="btn btn-danger">Remove</button>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <tr class="inputFormRow_papier">
                                                <td>
                                                    <select name="select_papier[]" class="form-control m-input select2 w-100">
                                                        <option value="">Choisir</option>
                                                        <?php $__currentLoopData = $papiers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->nom); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="number" name="prix_papier[]" class="form-control m-input" placeholder="Enter prix" autocomplete="off">
                                                </td>
                                                <td>
                                                    <input type="number" name="nomber_papier[]" class="form-control m-input" placeholder="Enter nomber" autocomplete="off">
                                                </td>
                                                <td>
                                                    <button id="removeRow_papier" type="button" class="btn btn-danger">Remove</button>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="impressions">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Ajouter les impressions possible</h3>
                                <div class="card-tools">
                                    <button id="addRow_impression" type="button" class="btn btn-info">Add Row</button>
                                </div>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Select</th>
                                            <th>Prix</th>
                                            <th>Nombres</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="newRow_impression">
                                    <?php $__empty_1 = true; $__currentLoopData = $article->impressions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $impression): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <tr class="inputFormRow_impression">
                                                <td>
                                                    <select name="select_impression[]" class="form-control m-input select2 w-100">
                                                        <?php $__currentLoopData = $impressions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($item->id); ?>" <?php if($impression->id == $item->id): ?> selected <?php endif; ?> ><?php echo e($item->nom); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="number" name="prix_impression[]" class="form-control m-input" placeholder="Enter prix" autocomplete="off" value="<?php echo e($impression->pivot->prix); ?>">
                                                </td>
                                                <td>
                                                    <input type="number" name="nomber_impression[]" class="form-control m-input" placeholder="Enter nomber" autocomplete="off" value="<?php echo e($impression->pivot->nomber); ?>">
                                                </td>
                                                <td>
                                                    <button id="removeRow_impression" type="button" class="btn btn-danger">Remove</button>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <tr class="inputFormRow_impression">
                                                <td>
                                                    <select name="select_impression[]" class="form-control m-input select2 w-100">
                                                        <option value="">Choisir</option>
                                                        <?php $__currentLoopData = $impressions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->nom); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="number" name="prix_impression[]" class="form-control m-input" placeholder="Enter prix" autocomplete="off">
                                                </td>
                                                <td>
                                                    <input type="number" name="nomber_impression[]" class="form-control m-input" placeholder="Enter nomber" autocomplete="off">
                                                </td>
                                                <td>
                                                    <button id="removeRow_impression" type="button" class="btn btn-danger">Remove</button>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="pelliculages">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Ajouter les pelliculages possible</h3>
                                <div class="card-tools">
                                    <button id="addRow_pelliculage" type="button" class="btn btn-info">Add Row</button>
                                </div>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Select</th>
                                            <th>Prix</th>
                                            <th>Nombres</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="newRow_pelliculage">
                                    <?php $__empty_1 = true; $__currentLoopData = $article->pelliculages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pelliculage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <tr class="inputFormRow_pelliculage">
                                                <td>
                                                    <select name="select_pelliculage[]" class="form-control m-input select2 w-100">
                                                        <?php $__currentLoopData = $pelliculages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($item->id); ?>" <?php if($pelliculage->id == $item->id): ?> selected <?php endif; ?> ><?php echo e($item->nom); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="number" name="prix_pelliculage[]" class="form-control m-input" placeholder="Enter prix" autocomplete="off" value="<?php echo e($pelliculage->pivot->prix); ?>">
                                                </td>
                                                <td>
                                                    <input type="number" name="nomber_pelliculage[]" class="form-control m-input" placeholder="Enter nomber" autocomplete="off" value="<?php echo e($pelliculage->pivot->nomber); ?>">
                                                </td>
                                                <td>
                                                    <button id="removeRow_pelliculage" type="button" class="btn btn-danger">Remove</button>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <tr class="inputFormRow_pelliculage">
                                                <td>
                                                    <select name="select_pelliculage[]" class="form-control m-input select2 w-100">
                                                        <option value="">Choisir</option>
                                                        <?php $__currentLoopData = $pelliculages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->nom); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="number" name="prix_pelliculage[]" class="form-control m-input" placeholder="Enter prix" autocomplete="off">
                                                </td>
                                                <td>
                                                    <input type="number" name="nomber_pelliculage[]" class="form-control m-input" placeholder="Enter nomber" autocomplete="off">
                                                </td>
                                                <td>
                                                    <button id="removeRow_pelliculage" type="button" class="btn btn-danger">Remove</button>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="nbr_couleurs">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Ajouter les nbr_couleurs possible</h3>
                                <div class="card-tools">
                                    <button id="addRow_nbr_couleur" type="button" class="btn btn-info">Add Row</button>
                                </div>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Select</th>
                                            <th>Prix</th>
                                            <th>Nombres</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="newRow_nbr_couleur">
                                    <?php $__empty_1 = true; $__currentLoopData = $article->nbr_couleurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nbr_couleur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <tr class="inputFormRow_nbr_couleur">
                                                <td>
                                                    <select name="select_nbr_couleur[]" class="form-control m-input select2 w-100">
                                                        <?php $__currentLoopData = $nbr_couleurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($item->id); ?>" <?php if($nbr_couleur->id == $item->id): ?> selected <?php endif; ?> ><?php echo e($item->nbr_coul); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="number" name="prix_nbr_couleur[]" class="form-control m-input" placeholder="Enter prix" autocomplete="off" value="<?php echo e($nbr_couleur->pivot->prix); ?>">
                                                </td>
                                                <td>
                                                    <input type="number" name="nomber_nbr_couleur[]" class="form-control m-input" placeholder="Enter nomber" autocomplete="off" value="<?php echo e($nbr_couleur->pivot->nomber); ?>">
                                                </td>
                                                <td>
                                                    <button id="removeRow_nbr_couleur" type="button" class="btn btn-danger">Remove</button>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <tr class="inputFormRow_nbr_couleur">
                                                <td>
                                                    <select name="select_nbr_couleur[]" class="form-control m-input select2 w-100">
                                                        <option value="">Choisir</option>
                                                        <?php $__currentLoopData = $nbr_couleurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->nbr_coul); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="number" name="prix_nbr_couleur[]" class="form-control m-input" placeholder="Enter prix" autocomplete="off">
                                                </td>
                                                <td>
                                                    <input type="number" name="nomber_nbr_couleur[]" class="form-control m-input" placeholder="Enter nomber" autocomplete="off">
                                                </td>
                                                <td>
                                                    <button id="removeRow_nbr_couleur" type="button" class="btn btn-danger">Remove</button>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="nbr_exemplaires">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Ajouter les nbr_exemplaires possible</h3>
                                <div class="card-tools">
                                    <button id="addRow_nbr_exemplaire" type="button" class="btn btn-info">Add Row</button>
                                </div>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Select</th>
                                            <th>Prix</th>
                                            <th>Nombres</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody id="newRow_nbr_exemplaire">
                                    <?php $__empty_1 = true; $__currentLoopData = $article->nbr_exemplaires; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nbr_exemplaire): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                                            <tr class="inputFormRow_nbr_exemplaire">
                                                <td>
                                                    <select name="select_nbr_exemplaire[]" class="form-control m-input select2 w-100">
                                                        <?php $__currentLoopData = $nbr_exemplaires; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($item->id); ?>" <?php if($nbr_exemplaire->id == $item->id): ?> selected <?php endif; ?> ><?php echo e($item->nbr_exp); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="number" name="prix_nbr_exemplaire[]" class="form-control m-input" placeholder="Enter prix" autocomplete="off" value="<?php echo e($nbr_exemplaire->pivot->prix); ?>">
                                                </td>
                                                <td>
                                                    <input type="number" name="nomber_nbr_exemplaire[]" class="form-control m-input" placeholder="Enter nomber" autocomplete="off" value="<?php echo e($nbr_exemplaire->pivot->nomber); ?>">
                                                </td>
                                                <td>
                                                    <button id="removeRow_nbr_exemplaire" type="button" class="btn btn-danger">Remove</button>
                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                                            <tr class="inputFormRow_nbr_exemplaire">
                                                <td>
                                                    <select name="select_nbr_exemplaire[]" class="form-control m-input select2 w-100">
                                                        <option value="">Choisir</option>
                                                        <?php $__currentLoopData = $nbr_exemplaires; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($item->id); ?>"><?php echo e($item->nbr_exp); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="number" name="prix_nbr_exemplaire[]" class="form-control m-input" placeholder="Enter prix" autocomplete="off">
                                                </td>
                                                <td>
                                                    <input type="number" name="nomber_nbr_exemplaire[]" class="form-control m-input" placeholder="Enter nomber" autocomplete="off">
                                                </td>
                                                <td>
                                                    <button id="removeRow_nbr_exemplaire" type="button" class="btn btn-danger">Remove</button>
                                                </td>
                                            </tr>
                                        <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
    <script>
        //Initialize Select2 Elements
        $('.select2').select2({
            theme: 'bootstrap4',
            placeholder: "Choisir",
            allowClear: true,
            width: "100%"
        });
        // $(".select2").val(null).trigger('change');
        // add row
        $("#addRow_format").click(function () {
            var html = '';
            html += '<tr class="inputFormRow_format">';
            html += '<td><select name="select_format[]" class="form-control m-input select2 w-100">';
            <?php $__currentLoopData = $formats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                html += '<option value="<?php echo e($item->id); ?>"><?php echo e($item->nom); ?></option>';
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            html += '</select>';
            html += '<td><input type="number" name="prix_format[]" class="form-control m-input" placeholder="Enter prix" autocomplete="off"></td>';
            html += '<td><input type="number" name="nomber_format[]" class="form-control m-input" placeholder="Enter nomber" autocomplete="off"></td>';
            html += '<td><button id="removeRow_format" type="button" class="btn btn-danger">Remove</button></td>';
            html += '</tr>';

            $('#newRow_format').append(html);
        });

        // remove row
        $(document).on('click', '#removeRow_format', function () {
            $(this).closest('.inputFormRow_format').remove();
        });

        // add row
        $("#addRow_papier").click(function () {
            var html = '';
            html += '<tr class="inputFormRow_papier">';
            html += '<td><select name="select_papier[]" class="form-control m-input select2 w-100">';
            <?php $__currentLoopData = $papiers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                html += '<option value="<?php echo e($item->id); ?>"><?php echo e($item->nom); ?></option>';
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            html += '</select>';
            html += '<td><input type="number" name="prix_papier[]" class="form-control m-input" placeholder="Enter prix" autocomplete="off"></td>';
            html += '<td><input type="number" name="nomber_papier[]" class="form-control m-input" placeholder="Enter nomber" autocomplete="off"></td>';
            html += '<td><button id="removeRow_papier" type="button" class="btn btn-danger">Remove</button></td>';
            html += '</tr>';

            $('#newRow_papier').append(html);
        });

        // remove row
        $(document).on('click', '#removeRow_papier', function () {
            $(this).closest('.inputFormRow_papier').remove();
        });

        // add row
        $("#addRow_impression").click(function () {
            var html = '';
            html += '<tr class="inputFormRow_impression">';
            html += '<td><select name="select_impression[]" class="form-control m-input select2 w-100">';
            <?php $__currentLoopData = $impressions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                html += '<option value="<?php echo e($item->id); ?>"><?php echo e($item->nom); ?></option>';
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            html += '</select>';
            html += '<td><input type="number" name="prix_impression[]" class="form-control m-input" placeholder="Enter prix" autocomplete="off"></td>';
            html += '<td><input type="number" name="nomber_impression[]" class="form-control m-input" placeholder="Enter nomber" autocomplete="off"></td>';
            html += '<td><button id="removeRow_impression" type="button" class="btn btn-danger">Remove</button></td>';
            html += '</tr>';

            $('#newRow_impression').append(html);
        });

        // remove row
        $(document).on('click', '#removeRow_impression', function () {
            $(this).closest('.inputFormRow_impression').remove();
        });

        // add row
        $("#addRow_pelliculage").click(function () {
            var html = '';
            html += '<tr class="inputFormRow_pelliculage">';
            html += '<td><select name="select_pelliculage[]" class="form-control m-input select2 w-100">';
            <?php $__currentLoopData = $pelliculages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                html += '<option value="<?php echo e($item->id); ?>"><?php echo e($item->nom); ?></option>';
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            html += '</select>';
            html += '<td><input type="number" name="prix_pelliculage[]" class="form-control m-input" placeholder="Enter prix" autocomplete="off"></td>';
            html += '<td><input type="number" name="nomber_pelliculage[]" class="form-control m-input" placeholder="Enter nomber" autocomplete="off"></td>';
            html += '<td><button id="removeRow_pelliculage" type="button" class="btn btn-danger">Remove</button></td>';
            html += '</tr>';

            $('#newRow_pelliculage').append(html);
        });

        // remove row
        $(document).on('click', '#removeRow_pelliculage', function () {
            $(this).closest('.inputFormRow_pelliculage').remove();
        });

        // add row
        $("#addRow_nbr_couleur").click(function () {
            var html = '';
            html += '<tr class="inputFormRow_nbr_couleur">';
            html += '<td><select name="select_nbr_couleur[]" class="form-control m-input select2 w-100">';
            <?php $__currentLoopData = $nbr_couleurs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                html += '<option value="<?php echo e($item->id); ?>"><?php echo e($item->nbr_coul); ?></option>';
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            html += '</select>';
            html += '<td><input type="number" name="prix_nbr_couleur[]" class="form-control m-input" placeholder="Enter prix" autocomplete="off"></td>';
            html += '<td><input type="number" name="nomber_nbr_couleur[]" class="form-control m-input" placeholder="Enter nomber" autocomplete="off"></td>';
            html += '<td><button id="removeRow_nbr_couleur" type="button" class="btn btn-danger">Remove</button></td>';
            html += '</tr>';

            $('#newRow_nbr_couleur').append(html);
        });

        // remove row
        $(document).on('click', '#removeRow_nbr_couleur', function () {
            $(this).closest('.inputFormRow_nbr_couleur').remove();
        });

        // add row
        $("#addRow_nbr_exemplaire").click(function () {
            var html = '';
            html += '<tr class="inputFormRow_nbr_exemplaire">';
            html += '<td><select name="select_nbr_exemplaire[]" class="form-control m-input select2 w-100">';
            <?php $__currentLoopData = $nbr_exemplaires; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                html += '<option value="<?php echo e($item->id); ?>"><?php echo e($item->nbr_exp); ?></option>';
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            html += '</select>';
            html += '<td><input type="number" name="prix_nbr_exemplaire[]" class="form-control m-input" placeholder="Enter prix" autocomplete="off"></td>';
            html += '<td><input type="number" name="nomber_nbr_exemplaire[]" class="form-control m-input" placeholder="Enter nomber" autocomplete="off"></td>';
            html += '<td><button id="removeRow_nbr_exemplaire" type="button" class="btn btn-danger">Remove</button></td>';
            html += '</tr>';

            $('#newRow_nbr_exemplaire').append(html);
        });

        // remove row
        $(document).on('click', '#removeRow_nbr_exemplaire', function () {
            $(this).closest('.inputFormRow_nbr_exemplaire').remove();
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel-AdminLTE3\resources\views/admin/articles/edit.blade.php ENDPATH**/ ?>