<?php $__env->startSection('content'); ?>

<div class="card">
    <div class="card-header">
        <?php echo e(trans('global.edit')); ?> <?php echo e(trans('global.commande.title_singular')); ?>

    </div>

    <div class="card-body">
        <form action="<?php echo e(route("admin.commandes.update", [$commande->id])); ?>" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group <?php echo e($errors->has('user_id') ? 'has-error' : ''); ?>">
                <label for="user_id"><?php echo e(trans('global.commande.fields.client')); ?><span class="text-danger">*</span></label>
                <select id="user_id" name="user_id" class="form-control m-input select2 w-100">
                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($user->id); ?>" <?php if($commande->user_id == $user->id): ?> selected <?php endif; ?>><?php echo e($user->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <p class="helper-block">
                     <?php echo e(trans('global.commande.fields.client_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('article_id') ? 'has-error' : ''); ?>">
                <label for="article_id"><?php echo e(trans('global.commande.fields.article')); ?><span class="text-danger">*</span></label>
                <select id="article_id" name="article_id" class="form-control m-input select2 w-100">
                    <?php $__currentLoopData = $articles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $article): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($article->id); ?>" <?php if($commande->article_id == $article->id): ?> selected <?php endif; ?>><?php echo e($article->titre); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
                <p class="helper-block">
                     <?php echo e(trans('global.commande.fields.article_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('format_id') ? 'has-error' : ''); ?>">
                <label for="format_id"><?php echo e(trans('global.commande.fields.format')); ?></label>
                <select id="format_id" name="format_id" class="form-control m-input select2 w-100"></select>
                <input id="prix_format_id" name="prix_format_id" type="hidden" value="0">               
                <p class="helper-block">
                    <?php echo e(trans('global.commande.fields.format_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('papier_id') ? 'has-error' : ''); ?>">
                <label for="papier_id"><?php echo e(trans('global.commande.fields.papier')); ?></label>
                <select  id="papier_id"  name="papier_id" class="form-control m-input select2 w-100"></select>
                <input id="prix_papier_id" name="prix_papier_id" type="hidden" value="0">               
                <p class="helper-block">
                    <?php echo e(trans('global.commande.fields.papier_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('impression_id') ? 'has-error' : ''); ?>">
                <label for="impression_id"><?php echo e(trans('global.commande.fields.impression')); ?></label>
                <select  id="impression_id" name="impression_id" class="form-control m-input select2 w-100"></select>
                <input id="prix_impression_id" name="prix_impression_id" type="hidden" value="0">               
                <p class="helper-block">
                    <?php echo e(trans('global.commande.fields.impression_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('pelliculage_id') ? 'has-error' : ''); ?>">
                <label for="pelliculage_id"><?php echo e(trans('global.commande.fields.pelliculage')); ?></label>
                <select  id="pelliculage_id" name="pelliculage_id" class="form-control m-input select2 w-100"></select>
                <input id="prix_pelliculage_id" name="prix_pelliculage_id" type="hidden" value="0">               
                <p class="helper-block">
                    <?php echo e(trans('global.commande.fields.pelliculage_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('couleur_id') ? 'has-error' : ''); ?>">
                <label for="couleur_id"><?php echo e(trans('global.commande.fields.nbr_couleur')); ?></label>
                <select  id="couleur_id" name="couleur_id" class="form-control m-input select2 w-100">  </select>
                <input id="prix_nbr_couleur_id" name="prix_nbr_couleur_id" type="hidden" value="0">               
                <p class="helper-block">
                    <?php echo e(trans('global.commande.fields.nbr_couleur_helper')); ?>

                </p>
            </div>
            <div class="form-group <?php echo e($errors->has('exp_id') ? 'has-error' : ''); ?>">
                <label for="exp_id"><?php echo e(trans('global.commande.fields.nbr_exemplaire')); ?></label>
                <select  id="exp_id" name="exp_id" class="form-control m-input select2 w-100"></select>
                <input id="prix_nbr_exemplaire_id" name="prix_nbr_exemplaire_id" class="form-control" type="hidden" value="0">               
                <p class="helper-block">
                    <?php echo e(trans('global.commande.fields.nbr_exemplaire_helper')); ?>

                </p>
            </div>
            <div class="form-group">
               <label for="prix_unitaire">prix_unitaire:</label>
               <input type="text" id="prix_unitaire" class="form-control" name="prix_unitaire" readonly>
            </div>
            <div class="form-group <?php echo e($errors->has('qte') ? 'has-error' : ''); ?>">
                <label for="qte"><?php echo e(trans('global.commande.fields.qte')); ?></label>
                <input type="number" min="1000" step="1" id="qte" name="qte" class="form-control" value="<?php echo e(old('qte', isset($commande) ? $commande->qte : '')); ?>" step="0.01">
                    <?php if($errors->has('qte')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('qte')); ?>

                        </p>
                    <?php endif; ?>
                        <p class="helper-block">
                           <?php echo e(trans('global.commande.fields.qte_helper')); ?>

                        </p>
            </div>
            <div class="form-group">
               <label for="totale">Totale</label>
               <input type="text" id="totale" class="form-control" name="totale" readonly>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="<?php echo e(trans('global.save')); ?>">
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script>
     //calcule prix unitaire pour article
        function get_all_select_price()
        {
            let somme = parseInt($('#prix_nbr_exemplaire_id').val()) + parseInt($('#prix_nbr_couleur_id').val()) + parseInt($('#prix_pelliculage_id').val()) + parseInt($('#prix_impression_id').val()) + parseInt($('#prix_papier_id').val()) + parseInt($('#prix_format_id').val());
            $('#prix_unitaire').val(somme);
        }
         //choix par defaut
        $(document).ready(function() {
           
            $('.select2').select2({
                theme: 'bootstrap4',
                placeholder: "Choisir",
                allowClear: true,
                width: "100%"
            });
            // $(".select2").val(null).trigger('change');
            // calcul prix relation
            $("#format_id").change(function() {
                var $prix = $('option:selected',this).data("prix");
                var $nomber = $('option:selected',this).data("nomber");
                if(($nomber != null) && ($prix != null)){
                    $('#prix_format_id').val(parseInt($nomber) * parseInt($prix));
                } else if($prix != null){
                    $('#prix_format_id').val(parseInt($prix));
                } else {
                    $('#prix_format_id').val(0);
                }
                get_all_select_price();
            });

            $("#papier_id").change(function() {
                var $prix = $('option:selected',this).data("prix");
                var $nomber = $('option:selected',this).data("nomber");
                if(($nomber != null) && ($prix != null)){
                    $('#prix_papier_id').val(parseInt($nomber) * parseInt($prix));
                } else if($prix != null){
                    $('#prix_papier_id').val(parseInt($prix));
                } else {
                    $('#prix_papier_id').val(0);
                }
                get_all_select_price();
            });
            $("#impression_id").change(function() {
                var $prix = $('option:selected',this).data("prix");
                var $nomber = $('option:selected',this).data("nomber");
                if(($nomber != null) && ($prix != null)){
                    $('#prix_impression_id').val(parseInt($nomber) * parseInt($prix));
                } else if($prix != null){
                    $('#prix_impression_id').val(parseInt($prix));
                } else {
                    $('#prix_impression_id').val(0);
                }
                get_all_select_price();
            });
            $("#pelliculage_id").change(function() {
                var $prix = $('option:selected',this).data("prix");
                var $nomber = $('option:selected',this).data("nomber");
                if(($nomber != null) && ($prix != null)){
                    $('#prix_pelliculage_id').val(parseInt($nomber) * parseInt($prix));
                } else if($prix != null){
                    $('#prix_pelliculage_id').val(parseInt($prix));
                } else {
                    $('#prix_pelliculage_id').val(0);
                }
                get_all_select_price();
            });
            $("#couleur_id").change(function() {
                var $prix = $('option:selected',this).data("prix");
                var $nomber = $('option:selected',this).data("nomber");
                if(($nomber != null) && ($prix != null)){
                    $('#prix_nbr_couleur_id').val(parseInt($nomber) * parseInt($prix));
                } else if($prix != null){
                    $('#prix_nbr_couleur_id').val(parseInt($prix));
                } else {
                    $('#prix_nbr_couleur_id').val(0);
                }
                get_all_select_price();
            });
            $("#exp_id").change(function() {
                var $prix = $('option:selected',this).data("prix");
                var $nomber = $('option:selected',this).data("nomber");
                if(($nomber != null) && ($prix != null)){
                    $('#prix_nbr_exemplaire_id').val(parseInt($nomber) * parseInt($prix));
                } else if($prix != null){
                    $('#prix_nbr_exemplaire_id').val(parseInt($prix));
                } else {
                    $('#prix_nbr_exemplaire_id').val(0);
                }
                get_all_select_price();
            });

            <?php if(!is_null($commande->article_id)): ?>
                $("#article_id").val(<?php echo e($commande->article_id); ?>).trigger('change');
                article_change(<?php echo e($commande->article_id); ?>);
            <?php endif; ?>

            $("#article_id").change(function() {
                let id = $(this).val();
                article_change(id);
                console.log('done');
            });
            
             //calcul total
            $("#qte").keyup(function() {
                $('#totale').val(parseInt($('#prix_unitaire').val()) * parseInt($(this).val()));
                
                $('#totale').val(addCommas($('#totale').val()));
            });

        });

        function article_change($id){
            let articles = <?php echo json_encode($articles, 15, 512) ?>;
                $.each(articles, function(){ 
                    if(this['id'] == $id){
                        let article = this;
                        $("#format_id").empty();
                        $("#format_id").append('<option value="">Choisir</option>');
                        $.each(article['formats'], function(){
                            $("#format_id").append('<option value="'+this['id']+'" data-prix="'+this['pivot']['prix']+'" data-nomber="'+this['pivot']['nomber']+'">'+this['nom']+'</option>');
                        });
                        
                        $("#papier_id").empty();
                        $("#papier_id").append('<option value="">Choisir</option>');
                        $.each(article['papiers'], function(){
                            $("#papier_id").append('<option value="'+this['id']+'" data-prix="'+this['pivot']['prix']+'" data-nomber="'+this['pivot']['nomber']+'">'+this['nom']+'</option>');
                        });

                        $("#impression_id").empty();
                        $("#impression_id").append('<option value="">Choisir</option>');
                        $.each(article['impressions'], function(){
                            $("#impression_id").append('<option value="'+this['id']+'" data-prix="'+this['pivot']['prix']+'" data-nomber="'+this['pivot']['nomber']+'">'+this['nom']+'</option>');
                        });

                        $("#pelliculage_id").empty();
                        $("#pelliculage_id").append('<option value="">Choisir</option>');
                        $.each(article['pelliculages'], function(){
                            $("#pelliculage_id").append('<option value="'+this['id']+'" data-prix="'+this['pivot']['prix']+'" data-nomber="'+this['pivot']['nomber']+'">'+this['nom']+'</option>');
                        });

                        $("#couleur_id").empty();
                        $("#couleur_id").append('<option value="">Choisir</option>');
                        $.each(article['nbr_couleurs'], function(){
                            $("#couleur_id").append('<option value="'+this['id']+'" data-prix="'+this['pivot']['prix']+'" data-nomber="'+this['pivot']['nomber']+'">'+this['nbr_coul']+'</option>');
                        });

                        $("#exp_id").empty();
                        $("#exp_id").append('<option value="">Choisir</option>');
                        $.each(article['nbr_exemplaires'], function(){
                            $("#exp_id").append('<option value="'+this['id']+'" data-prix="'+this['pivot']['prix']+'" data-nomber="'+this['pivot']['nomber']+'">'+this['nbr_exp']+'</option>');
                        });
            
                        $('#prix_unitaire').val(0);
                    } 
                });
        }
        //format prix
        function addCommas(nStr)
        {
            nStr += '';
            x = nStr.split('.');
            x1 = x[0];
            x2 = x.length > 1 ? '.' + x[1] : '';
            var rgx = /(\d+)(\d{3})/;
            while (rgx.test(x1)) {
                x1 = x1.replace(rgx, '$1' + ',' + '$2');
            }
            return x1 + x2;
        }
    </script>
<?php $__env->stopSection(); ?>   

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel-AdminLTE3\resources\views/admin/commandes/edit.blade.php ENDPATH**/ ?>