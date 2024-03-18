
<?php $__env->startSection('content'); ?>
    <div class="container ">
        <?php if(session ('success')): ?>
            <div class="alert alert-success mt-3 ">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>

        <div class= "card">
            <div class="card-header bg-info text-white">Editer un Candidat </div>
                <div class="card-body ">
                    <form action="<?php echo e(route('update.electeur',$electeur->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                         <div class="form-group">
                            <label for="">Nom</label>
                            <input type="text" name ="nom" id="" class="form-control"  value="<?php echo e($electeur->nom); ?>" >
                        </div>

                        <div class="form-group">
                            <label for="">prenom</label>
                            <input type="text" name ="prenom" id="" class="form-control" value="<?php echo e($electeur->prenom); ?>">
                        </div>


                        <div class="form-group">
                            <label for="">CNI</label>
                            <input type="number" name ="cni" id="" class="form-control" value="<?php echo e($electeur->cni); ?>">
                        </div>

                        <div class="form-group">
                            <label for="">candidat Id</label>
                            
                            <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="candidat_id">
                            
                                <option selected>Open this select menu</option>
                                <?php $__currentLoopData = $candidat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $candidats): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                                <option value="<?php echo e($candidats->id); ?>" > <?php echo e($candidats->nom); ?> </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                              </select>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-success">Modifier</button>
                        </div>
                    </form>  
                </div>
            </div>
        </div>
   </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\GestionVote\resources\views/electeur/editer.blade.php ENDPATH**/ ?>