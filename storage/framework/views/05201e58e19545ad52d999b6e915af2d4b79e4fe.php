<?php $__env->startSection('title', 'Patient Setup'); ?>
<?php $__env->startSection('content'); ?>
    ##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##

<aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h1>Record List</h1>
             
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
                                                               <div class="row">
                                   <a class="btn btn-primary btn-large pull-right" data-toggle="modal" data-href="#full-width" href="#full-width"><span class="glyphicon glyphicon-plus-sign " ></span> New Patient</a>
                                   
                                    </div>
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
                                                                    <a data-toggle="modal" data-href="#responsive" href="#responsive">

                                                                    <span class="glyphicon glyphicon-eye-open" title="View"></span></a>
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

                     <div class="modal fade in" id="full-width" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Add New Patient</h4>
                            </div>
                            <div class="modal-body">
                            




                                 <div class="row">
                    <div class="col-lg-12">
                        <ul class="nav  nav-tabs ">
                            <li class="active">
                                <a href="#tab1" data-toggle="tab">Employee</a>
                            </li>
                            <li>
                                <a href="#tab2" data-toggle="tab">Student</a>
                            </li>
                                
                            
                           
                        </ul>
                        <div  class="tab-content mar-top">
                            <div id="tab1" class="tab-pane fade active in">
                               <div class="row">
                        
                                                       <div class="col-lg-12">
                       
                       
                            <div class="panel-body">
                                    <table class="table table-striped table-bordered" id="table2">
                                    <thead>
                                        <tr>
                                          <th style="display:none;">Employee Id</th>
                                            <th>Employee No</th>
                                            <th>Name</th>
                                            <th>Birthdate</th>
                                            <th>
                                                Action
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <?php $__currentLoopData = $employee; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$e): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td style="display:none;"><?php echo e($e->employee_id); ?></td>
                                            <td><?php echo e($e->employee_number); ?></td>     
                                            <td><?php echo e($e->employee_firstname . " " . $e->employee_lastname); ?></td>
                                            <td><?php echo e($e->employee_birthdate); ?></td>
                                            

                                            <td>
                                                      
                                                <div class="col-sm-1">
                                                    <a href="#">
                                                        <i class="glyphicon glyphicon-download-alt" data-toggle="modal" data-href="#full-width" href="#responsive_<?php echo e($e->employee_id); ?>" data-c="#f56954" data-hc="#f56954" title="Store"></i>
                                                                    </a>
                                                            <div class="modal fade in" id="responsive_<?php echo e($e->employee_id); ?>" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
                                                             <div class="modal-dialog modal-md">
                                                            <div class="modal-content">
                                                             <div class="modal-body">
                                                                <p>Are you sure you would like to create this patient's account?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                            <button type="button" data-dismiss="modal" class="btn">Cancel</button>
                                                            <a href="<?php echo e(route('AddPatient_employee', ['id' =>$e->employee_id])); ?>" class="btn btn-primary" value="Submit">Create Patient </a>
                                                        </div>
                
                                                        </div>
                                                        </div>
                                                    </div>
            

                                                                </div>
                                                

                                                                <div class="col-sm-1">
                                                                    <a data-toggle="modal" data-href="#responsive" href="#responsive">

                                                                    <span class="glyphicon glyphicon-eye-open" title="View"></span></a>
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
                            <div id="tab2" class="tab-pane fade">
                                <div class="row">
                     
                                                        
                                    <div class="col-lg-12">
                                                 
                                      
                                                     <div class="panel-body">
                                                     <table class="table table-striped table-bordered" id="table3">
                                                        <thead>
                                                    <tr>
                                                       <th style="display:none;">Student Id</th>
                                                        <th>Student No</th>
                                                        <th>Name</th>
                                                 
                                                        <th>Program</th>
                                                        <th>
                                                            Action
                                                        </th>
                                                    </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php $__currentLoopData = $student; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$s): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                         <tr>
                                                                <td style="display:none;"><?php echo e($s->student_id); ?></td>
                                                                <td><?php echo e($s->student_number); ?></td>     
                                                                <td><?php echo e($s->student_firstname . " " . $s->student_lastname); ?></td>                          
                                                        
                                                                <td><?php echo e($s->student_course_name); ?></td>
                                            

                                                                 <td>
                                                      
                                                <div class="col-sm-1">
                                                    <a href="#">
                                                        <i class="glyphicon glyphicon-download-alt" data-toggle="modal" data-href="#full-width" href="#responsive_stud_<?php echo e($s->student_id); ?>" data-c="#f56954" data-hc="#f56954" title="Store"></i>
                                                                    </a>
                                                            <div class="modal fade in" id="responsive_stud_<?php echo e($s->student_id); ?>" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
                                                             <div class="modal-dialog modal-md">
                                                            <div class="modal-content">
                                                             <div class="modal-body">
                                                               <?php echo e(csrf_field()); ?>


                                                                <p>Are you sure you would like to create this patient's account?</p>
                                                            </div>
                                                            <div class="modal-footer">
                                                            <button type="button" data-dismiss="modal" class="btn">Cancel</button>
                                                            <a href="<?php echo e(route('AddPatient_student', ['id' =>$s->student_id])); ?>" class="btn btn-primary" value="Submit">Create Patient </a>
                                                        </div>
                
                                                        </div>
                                                        </div>
                                                    </div>
            

                                                                </div>
                                                

                                                                <div class="col-sm-1">
                                                                    <a data-toggle="modal" data-href="#responsive" href="#responsive">

                                                                    <span class="glyphicon glyphicon-eye-open" title="View"></span></a>
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






                            </div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn">Close</button>
                            
                            </div>
                        </div>
                    </div>
                </div>

            </section>
            <!-- content -->
        </aside>

        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.staff.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>