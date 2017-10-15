<?php $__env->startSection('title', 'Staff Dashboard'); ?>
<?php $__env->startSection('content'); ?>
    ##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##
<aside class="right-side">
            <!-- Main content -->
            <section class="content-header">
                <h1>Welcome to Dashboard</h1>
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
                     <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInRightBig">
                        <!-- Trans label pie charts strats here-->
                        <div class="lightbluebg no-radius">
                            <div class="panel-body squarebox square_boxs">
                                <div class="col-xs-12 pull-left nopadmar">
                                    <div class="row">   
                                        <div class="square_box col-xs-7 pull-left">
                                            <span>Registered Patients</span>
                                            <div class="number" >
                                                 <?php echo e($countpatient); ?>

                                            </div>
                                        </div>
                                        <i class="livicon pull-right" data-name="users" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                                    </div>
                                        <div class="row">
                                        <div class="col-xs-6">
                                            <small class="stat-label">As of:</small>
                                            <h4 id="myTargetElement4.1"></h4>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <small class="stat-label"><?php echo date("D M d, Y"); ?></small>
                                            <h4 id="myTargetElement4.2"></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInRightBig">
                        <!-- Trans label pie charts strats here-->
                        <div class="lightbluebg no-radius">
                            <div class="panel-body squarebox square_boxs">
                                <div class="col-xs-12 pull-left nopadmar">
                                    <div class="row">
                                        <div class="square_box col-xs-7 pull-left">
                                            <span>Registered Patient</span>
                                            <div class="number" ></div>
                                        </div>
                                        <i class="livicon pull-right" data-name="users" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                                    </div>
                                         <div class="row">
                                        <div class="col-xs-6">
                                            <small class="stat-label">As of:</small>
                                            <h4 id="myTargetElement4.1"></h4>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <small class="stat-label"><?php echo date("D M d, Y"); ?></small>
                                            <h4 id="myTargetElement4.2"></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInRightBig">
                        <!-- Trans label pie charts strats here-->
                        <div class="lightbluebg no-radius">
                            <div class="panel-body squarebox square_boxs">
                                <div class="col-xs-12 pull-left nopadmar">
                                    <div class="row">
                                        <div class="square_box col-xs-7 pull-left">
                                            <span>Registered Faculty</span>
                                            <div class="number" id="myTargetElement4"></div>
                                        </div>
                                        <i class="livicon pull-right" data-name="users" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>

                                    </div>
                                         <div class="row">
                                        <div class="col-xs-6">
                                            <small class="stat-label">As of:</small>
                                            <h4 id="myTargetElement4.1"></h4>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <small class="stat-label"><?php echo date("D M d, Y"); ?></small>
                                            <h4 id="myTargetElement4.2"></h4>
                                        </div>
                                    </div>
                            
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-lg-3 col-md-6 col-sm-6 margin_10 animated fadeInRightBig">
                        <!-- Trans label pie charts strats here-->
                        <div class="palebluecolorbg no-radius">
                            <div class="panel-body squarebox square_boxs">
                                <div class="col-xs-12 pull-left nopadmar">
                                    <div class="row">
                                        <div class="square_box col-xs-7 pull-left">
                                            <span>No. Scheduled Appointments</span>
                                            <div class="number" >
</div>
                                        </div>
                                        <i class="livicon pull-right" data-name="users" data-l="true" data-c="#fff" data-hc="#fff" data-s="70"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <small class="stat-label">As of:</small>
                                            <h4 id="myTargetElement4.1"></h4>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <small class="stat-label"><?php echo date("D M d, Y"); ?></small>
                                            <h4 id="myTargetElement4.2"></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                  
                </div>
                <!--/row-->
            
          
              
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
                                            <th>Date/Time Start</th>
                                            <th>Date/Time End</th>
                                            <th>Patient Code</th>
                                            <th>Patient Name</th>
                                            <th>Doctor</th>
                                            <th>Appointment Reason</th>
                                            <th>Status</th>
                                        
                                            <th>    </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php $__currentLoopData = $appointment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$a): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <tr>

                                           <td>
                                            <?php echo e(Carbon\Carbon::parse($a->appointment_datetime_started)->format('F j, g:i a')); ?></td>   
                                                 <td>
                                            <?php echo e(Carbon\Carbon::parse($a->appointment_datetime_allowance_end)->format('F j, g:i a')); ?></td>   
      
                                           <td><?php echo e($a->patient_account_no); ?></td>                   
                                           <td><?php echo e($a->patient_first ." ". $a->patient_last); ?></td>
                                           <td><?php echo e($a->doctor_first ." ". $a->doctor_last); ?></td>
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
                                                                    <a href="#">
                                                                         <i class="glyphicon glyphicon-download-alt" data-toggle="modal" data-href="#full-width" href="#full-width data-size="18" data-c="#f56954" data-hc="#f56954" title="Store"></i>
                                                                    </a>

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
                                            <th>Level of Emergency</th>
                                            <th>Appointment Reason</th>
                                            <th>Status</th>
                                            <th>    </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                         <?php $__currentLoopData = $walk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$w): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                        <tr>
                                           <td><?php echo e($w->walk_in_no); ?></td>       
                                           <td><?php echo e($w->patient_account_no); ?></td>                   
                                           <td><?php echo e($w->patient_first ." ". $w->patient_last); ?></td>
                                           <td><?php echo e($w->walk_in_level_emergency); ?></td>
                                           <td><?php echo e($w->walk_in_reason); ?></td>
                                           <td>
                                                <?php if($w->walk_in_status === 0): ?>
                                                   <span class="label label-sm label-info">Waiting</span>   
                                                <?php else: ?>
                                                    
                                                <span class="label label-sm label-success">Done</span>
                                                     <?php endif; ?>



                                             </td>
                                            <td>

                                                      
                                                             <div class="col-sm-1">
                                                              
                                                                         <i class="glyphicon glyphicon-eye-open" data-size="18" data-c="#f56954" data-hc="#f56954" title="Store"></i>
                                                           

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
                <!-- row-->
                <!-- Third Basic Table Ends Here-->
                <!--delete modal starts here-->
              
                <!-- /.modal ends here -->
            </section>

        </aside>



        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.staff.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>