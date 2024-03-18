
<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php if(session('success')): ?>
            <div class="alert alert-success mt-3">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <?php if(session('error')): ?>
            <div class="alert alert-danger mt-3">
                <?php echo e(session('error')); ?>

                
            </div>
        <?php endif; ?>

        <div class="card">
            <div class="card-header bg-info text-white">Ajouter un Candidat</div>
            <div class="card-body">
                <form action="<?php echo e(route('store.candidat')); ?>" method="post">
                    <?php echo csrf_field(); ?>
                    <div class="form-group">
                        <label for="">Nom:</label>
                        <input type="text" name="nom" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Prenom:</label>
                        <input type="text" name="prenom" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Date Naissance:</label>
                        <input type="date" name="dateNaissance" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Parti:</label>
                        <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="parti">
                            
                            <option selected>Open this select menu</option>
                            <?php $__currentLoopData = $parti; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                            <option value="<?php echo e($partis->id); ?>" > <?php echo e($partis->nom); ?> </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                          </select>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">Enregistrer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\GestionVote\resources\views/candidat/ajouter.blade.php ENDPATH**/ ?>