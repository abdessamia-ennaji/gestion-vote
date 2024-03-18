
<?php $__env->startSection('content'); ?>
    <div class ="container mt-3">
        <div class ="card">
            <div class ="card-header bg-info text-white">liste des Electeurs</div>
                <div class ="card-body"> 
                    <table class ="table">
                        <thead>
                            <tr>
                                <th scope="col">Id Electeur</th>
                                <th scope="col">Nom</th>
                                <th scope="col">Prenom</th>
                                <th scope="col">CNI</th>
                                <th scope="col">Candidat Id</th>
                                <th scope="col">Nom de Candidat</th>
                                <th scope="col">Actions</th>
                                
                            </tr>
                        </thead>
                        <tbody>

                    <?php if(!empty($electeur) && $electeur->count()): ?>
                            <?php $__currentLoopData = $electeur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $electeurs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td> <?php echo e($electeurs->id); ?></td>
                                <td> <?php echo e($electeurs->nom); ?></td>
                                <td> <?php echo e($electeurs->prenom); ?></td>
                                <td> <?php echo e($electeurs->cni); ?></td>
                                <td> <?php echo e($electeurs->candidat_id); ?></td>

                                
                                <?php $__currentLoopData = $candidat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $candidats): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($candidats->id == $electeurs->candidat_id): ?>
                                <td value="<?php echo e($candidats->id); ?>" class="text-center">
                                        <?php echo e($candidats->nom ?? 'No name provided'); ?>

                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </td> 
                                    
                                <td> 
                                    <a href="<?php echo e(route('edit-electeur',$electeurs->id)); ?>" class ="btn btn-warning" >Editer</a>
                                    <a  onclick="return confirm('Do you want to delete it ');" href="<?php echo e(route('delete-electeur',$electeurs->id)); ?>" class ="btn btn-danger">Supprimer</a>
                                </td>
                            </tr>
                        </tbody>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                    <?php echo e($electeur->links()); ?>

                    <?php else: ?> 
                        <tr>
                            <td colspan="7">THERE ARE NO DATA !!</td>
                        </tr>
                    <?php endif; ?>
                    
                </div>
            </div>
        </div>
    </div>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\GestionVote\resources\views/electeur/liste.blade.php ENDPATH**/ ?>