<?php $__env->startSection('title', 'Doctor Dashboard'); ?>
<?php $__env->startSection('content'); ?>
    ##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##
<aside class="right-side">
            <!-- Main content -->
            <section class="content-header">
                <h1>Welcome Dr. <?php echo e(Auth::user()->last_name .', '.Auth::user()->first_name); ?></h1>
                <ol class="breadcrumb">
                    <li class="active">
                        <a href="#">
                            <i class="livicon" data-name="home" data-size="16" data-color="#333" data-hovercolor="#333"></i>
                            Home
                        </a>
                    </li>
                </ol>
            </section>
            
            <section class="content">
               <div class="row">
                
                  <div class="col-lg-12">
                        <div class="panel panel-primary filterable" style="overflow:auto;">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                     <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                        Scheduled List
                                </h3>
                            </div>
                            <div class="panel-body">
                            
                                <table class="table table-striped table-bordered" id="table1">
                                    <thead>
                                        <tr>
                                            <th>Appointment Time</th>
                                            <th>Patient Code</th>
                                            <th>Patient Name</th>
                                            <th>Appointment Reason</th>
                                            <th>Status</th>
                                            <th>    </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php $__currentLoopData = $appointment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <tr>
                                           <td><?php echo e($a->appointment_datetime_started); ?></td>       
                                           <td><?php echo e($a->patient_account_no); ?></td>                   
                                           <td><?php echo e($a->patient_first ." ". $a->patient_last); ?></td>
                                           <td><?php echo e($a->appointment_reason); ?></td>
                                                                                       <td>
                                                <?php if($a->appointment_status_done === 0): ?>
                                                   <span class="label label-sm label-info">Waiting</span>   
                                                <?php else: ?>
                                                    
                                                <span class="label label-sm label-success">Done</span>
                                                     <?php endif; ?>



                                             </td>
                                            <td>

                                                      
                                                             <div class="col-sm-1">
                                                                    <a href="<?php echo e(route('Visit_dis', ['id' =>$a->patient_id, 'appointment_id'=>$a->appointment_id,'walk_in_id' =>0])); ?>">
                                                                         <i class="glyphicon glyphicon-eye-open" data-size="18" data-c="#f56954" data-hc="#f56954" title="Store"></i>
                                                                    </a>

                                                                </div>
                                           

                                                                                                                                                                                                 
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                       <div class="col-lg-12">
                        <div class="panel panel-primary filterable" style="overflow:auto;">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                     <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                        Walk-in List
                                </h3>
                            </div>
                            <div class="panel-body">
                            
                                <table class="table table-striped table-bordered" id="table2">
                                    <thead>
                                        <tr>
                                            <th>Walkin No</th>
                                            <th>Patient Code</th>
                                            <th>Patient Name</th>
                                            <th>Appointment Reason</th>
                                            <th>    </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php $__currentLoopData = $walk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$w): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <tr>
                                           <td><?php echo e($w->walk_in_no); ?></td>       
                                           <td><?php echo e($w->patient_account_no); ?></td>                   
                                           <td><?php echo e($w->patient_first ." ". $w->patient_last); ?></td>
                                           <td><?php echo e($w->walk_in_reason); ?></td>
                                            <td>

                                                      
                                                             <div class="col-sm-1">
                                                                        <a href="<?php echo e(route('Visit_dis', ['id' =>$w->patient_id, 'walk_in_id'=>$w->walk_in_id, 'appointment_id' =>0])); ?>">
                                                                         <i class="glyphicon glyphicon-eye-open" data-size="18" data-c="#f56954" data-hc="#f56954" title="Store"></i>
                                                                        </a>

                                                                </div>
                                           

                                                                                                                                                                                                 
                                            </td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

              

              
                </div>

            </section>
             

</aside>



        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.doctor.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>