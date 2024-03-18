
<?php $__env->startSection('content'); ?>
    <div class ="container mt-3">
        <div class ="card">
            <div class ="card-header bg-info text-white">liste des candidact</div>
                <div class ="card-body"> 
                    <form action="<?php echo e(route('liste.candidat')); ?>" method="GET" class="d-flex" role="search">
                        <input type="text" name="q" class="form-control me-2" placeholder="Search...">
                        <button type="submit" class="btn btn-outline-success">Search</button>
                    </form>
                    <table class ="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nom</th>
                            <th scope="col">Prenom</th>
                            <th scope="col">Date Naissance</th>
                            <th scope="col">ID Parti</th>
                            <th scope="col">Nom de Parti</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $candidat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $candidats): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td> <?php echo e($candidats->id); ?></td>
                            <td> <?php echo e($candidats->nom); ?></td>
                            <td> <?php echo e($candidats->prenom); ?></td>
                            <td> <?php echo e($candidats->dateNaissance); ?></td>
                            <td> <?php echo e($candidats->parti); ?></td>
                            
                            <?php $__currentLoopData = $parti; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($partis->id == $candidats->parti): ?>
                            <td value="<?php echo e($partis->id); ?>" class="text-center">
                                    <?php echo e($partis->nom ?? 'No name provided'); ?>

                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td> 

                            <td> 
                                <a href="<?php echo e(route('edit-candidat',$candidats->id)); ?>" class ="btn btn-warning" >Editer</a>
                                <a  onclick="return confirm('Do you want to delete it ');" href="<?php echo e(route('delete-candidat',$candidats->id )); ?>" class ="btn btn-danger">Supprimer</a>
                            </td>
                        </tr>
                        </tbody>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                    <?php echo e($candidat->links()); ?>

                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\GestionVote\resources\views/candidat/liste.blade.php ENDPATH**/ ?>