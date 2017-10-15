<?php $__env->startSection('title', 'Walk-In'); ?>
<?php $__env->startSection('content'); ?>
    ##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##

<aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h1>Walk-In</h1>
                <a>Record List</a>
             
            </section>
            <!--section ends-->
              <section class="content">

                <div class="row">
                     
                        <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul>
                             <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                         <div class="col-lg-12">
                                                       
                                        <div class="panel panel-primary filterable" style="overflow:auto;">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">
                                                    <i class="livicon" data-name="list" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                                Patient List
                                            </h3>
                                                        </div>
                                                     <div class="panel-body">
                                                     <table class="table table-striped table-bordered" id="table1">
                                                        <thead>
                                                    <tr>
                                                       <th style="display:none;">Student Id</th>
                                                        <th>Patient No</th>
                                                        <th>Name</th>
                                                        <th>
                                                            Action
                                                        </th>
                                                    </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php $__currentLoopData = $patient; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                         <tr>
                                                                <td style="display:none;"><?php echo e($p->patient_id); ?></td>
                                                                <td><?php echo e($p->patient_account_no); ?></td>     
                                                                <td><?php echo e($p->first_name . " " . $p->last_name); ?></td>
                                                                 <td>
                                                      

                                                                <div class="col-sm-1">
                                                                    <a data-toggle="modal" data-href="#responsive" href="#responsive_<?php echo e($p->patient_id); ?>">

                                                                    <span class="glyphicon glyphicon-eye-open" title="View"></span></a>
                                                                </div> 


                                                        <div class="modal fade in" id="responsive_<?php echo e($p->patient_id); ?>" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
                                                                 <div class="modal-dialog modal-lg">
                                                                     <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                                            <h4 class="modal-title">Patient: <?php echo e($p->first_name . " " . $p->last_name); ?> </h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                          <form method="POST" action="<?php echo e(route('ManageWalkin_store', ['patientid' =>$p->patient_id])); ?>">
                                                                            <?php echo e(csrf_field()); ?>

                                                                                       <div class="form-group">
                                                                            <form method="POST" class="form-horizontal" action="<?php echo e(url('Appointment')); ?>">
                                                                                <?php echo e(csrf_field()); ?>

                                                                            <label for="e1" class="control-label">
                                                                            Doctor
                                                                            </label>
                                                                            <select id="e1" name="doctor" class="form-control select2">
                                          
                                           
                                                                                    <?php $__currentLoopData = $doctor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$d): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <option value= "<?php echo e($d->doctor_id); ?>"> <?php echo e($d->first_name .' '.$d->                                    last_name); ?></option>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                            </select>
                                                                        </div>

                                                                            <div class="form-group">
                                                                                <label for="e1" class="control-label">
                                                                                     Level of Emergency
                                                                                </label>
                                                                                <select id="e1" name="lvlemergency" class="form-control select">
                                                                                        <option value= "Minor">Minor</option>
                                                                                        <option value= "Minor">Major</option>
                                                                                        <option value= "Emergency">Emergency</option>
                                                                                </select>
                                                                            </div>


                                                                            <div class="form-group">
                                                                                <label for="e1" class="control-label">
                                                                                    Reason for Visit
                                                                                </label>
                                                                                <textarea class="form-control" id="message" name="reason" placeholder="Please enter your message here..." rows="3"></textarea>
                                                                            </div>

                                                                        </div>
                            
                                                                        <div class="modal-footer">
                                                                                <button type="submit" class="btn btn-primary pull-right"   value="Submit" title="Submit">
                                                                                <i class="glyphicon glyphicon-plus-sign"></i>
                                                                                Add
                                            
                                                                                </button>


                                
                                                                        </div>
                   
                                                                    </form>

                                                                        </div>
                                                                    </div>
                                                        
                                                        </div>




                                                                <div class="col-sm-1">
                                                                    <a data-toggle="modal" data-href="#responsive" href="#responsive">

                                                                    <span class="glyphicon glyphicon-trash" title="View"></span></a>
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



                         
                        </div>
                    </div>
                </div>

            </section>
            <!-- content -->
        </aside>

        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.staff.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>