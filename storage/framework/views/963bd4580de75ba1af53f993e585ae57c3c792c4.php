<?php $__env->startSection('title', 'Visit'); ?>
<?php $__env->startSection('content'); ?>
    ##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##
<aside class="right-side">
            <!-- Main content -->
            <section class="content-header">
                <h1> 
                                        Records of <?php echo e($patient->patient_last  . ", " . $patient->patient_first); ?> 
                                 
                               
                                    </h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="#">
                            <i class="livicon" data-name="home" data-size="16" data-color="#333" data-hovercolor="#333"></i>
                            Home
                        </a>
                    </li>
                    <li class="active">
                        <a href="#">List of Patients</a>
                    </li>
                </ol>
            </section>
                        <section class="content">
                <div class="row">
              
                     <div class="col-lg-12">


                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">
                                                    <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i>
                                                   Record Visit
                                                </h3>
                                                <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                   
                                                </span>
                                            </div>
                                            <div class="panel-body">

                                              <form method="POST" class="form-horizontal" action="<?php echo e(route('Visit', ['appointment_id'=>$appointment_id,'walk_in_id'=>$walk_in_id,])); ?>">
                                                     <?php echo e(csrf_field()); ?>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                              <div class="form-group">
                                                                <label class="control-label col-md-3" for="postalAddress">Symptoms</label>
                                                                <div class="col-md-9">
                                                                    <textarea rows="3" class="form-control" name="visit_patient_symptomps" id="address" placeholder="Input patient Symptoms" required></textarea>
                                                                </div>
                                                            </div>

                                            <div class="form-group">
                                                        <label class="control-label col-md-3" for="postalAddress">Diagnosis</label>

                                                             <div class="col-md-9 input-group select2-bootstrap-append">
                                                            <?php echo Form::select('diagnosis_id[]',$diagnosis,null,['id'=>'multiple','class'=>'form-control select2-multiple', 'name'=>'diagnosis[]', 'multiple'=>'true']); ?>

                                            <span class="input-group-btn">
                                            <button class="btn btn-default" type="button" data-select2-open="single-append-text" data-toggle="modal" data-href="#responsive" href="#responsive">
                                                <span class="glyphicon glyphicon-plus"></span>
                                            </button>
                                        </span>
                                                            </div>
                                                    </div>
                                                           
                                                
                                </div>
                                                    <div class="col-md-6">       
                                                      <div class="form-group">
                                                                <label class="control-label col-md-3" for="postalAddress">Remarks</label>
                                                                <div class="col-md-9">
                                                                    <textarea rows="3" class="form-control" name="visit_remarks" id="address" placeholder="Input your  remarks" required=""></textarea>
                                                                </div>
                                                            </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3" for="postalAddress">Prescription</label>
                                                             <div class="col-md-9 input-group select2-bootstrap-append">
                                                             <?php echo Form::select('medicine_id[]',$medicine,'null',['id'=>'multiple','class'=>'form-control select2-multiple', 'name'=>'medicine[]', 'multiple'=>'true']); ?>

                                                              <span class="input-group-btn">
                                            <button class="btn btn-default" type="button" data-select2-open="single-append-text"  data-toggle="modal" data-href="#responsivemed" href="#responsivemed">
                                                <span class="glyphicon glyphicon-plus"></span>
                                            </button>
                                        </span>
                                                            </div>
                                                    </div>
                         
                            
                                </div>
                                                  
                                                </div>
                                                    <div class="row">
                                                        <hr>
                                                        <div style="float: right" >

                                                           <button type="reset" class="btn btn-default" value="Reset"><span class="glyphicon glyphicon-off" title="Reset" ></span>
                                                            </button>
                                                            <a class="btn btn-primary" data-toggle="modal" data-href="#responsivefin" href="#responsivefin"><span class="glyphicon glyphicon-floppy-disk"></span></a>
                                                            </div>
                                                    </div>

    <div class="modal fade in" id="responsivefin" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title"></h4>
                            </div>
                            <div class="modal-body">
                             
                                <div class="row">     
                                       
                                        <p>
                                           Patient consultation done?
                                        </p>                               
         
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn">No</button>
                                <button type="button_diag_save"  type="submit" value="Submit"  class="btn btn-primary">Yes</button>
                            </div>
           
                        </div>
                    </div>
                </div>
            
                                            </form>
                                            </div>
                                        </div>
                                    </div>

                </div>
                <!--/row-->

                <div class="modal fade in" id="responsive" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Add Diagnosis</h4>
                            </div>
                            <div class="modal-body">
                                <form method="POST" class="form-horizontal" action="<?php echo e(url('Visit-diag')); ?>">
                                                     <?php echo e(csrf_field()); ?>

                                <div class="row">
                              
                                        <h4>Diagnosis</h4>
                                        <p>
                                            <input id="diagnosis_name" name="diagnosis_name" type="text" placeholder="Input diagnosis" class="form-control" required>
                                        </p>


                                              <h4>Description</h4>
                                        <p>
                                            <textarea rows="2" class="form-control" name="diagnosis_description" id="diagnosis_description" placeholder="Input diagnosis description" required></textarea>
                                        </p>

                               
         
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn">Close</button>
                                <button type="button_diag_save" type="submit" value="Submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            

              <div class="modal fade in" id="responsivemed" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Add Medicine</h4>
                            </div>
                                                             <div class="panel-body">
                                             <form method="POST" class="form-horizontal" action="<?php echo e(url('Visit-med')); ?>">
                                             <?php echo e(csrf_field()); ?>

                                                <div class="row">
                             
                                                  
                                                            <div class="form-group col-md-6" >
                                                                <label class="control-label col-md-3" for="firstname">Generic Name:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" name="generic_name" class="form-control" id="generic_name" placeholder="" required=""></div>
                                                            </div>
                                                            
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label col-md-3" for="inputEmail">Prescribe:</label>
                                                                <div class="col-md-9">
                                                                    <textarea type="text" name="medicine_precautions" class="form-control" id="medicine_precautions" placeholder="" required=""></textarea></div>
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <label class="control-label col-md-3" for="middlename">Branded Name:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" name="branded_name" class="form-control" id="branded_name" placeholder=""></div>
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <label class="control-label col-md-3" for="lastname">Medicine Brand:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" name="medicine_branded"class="form-control" id="medicine_branded" placeholder="" required=""></div>
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <label class="control-label col-md-3">Select Packaging:</label>
                                                                 <div class="col-md-9">
                                                                <select id="medicine_packaging" class="form-control select2" name="medicine_packaging">
                                      
                                                                    <option value="Blister Packs">Blister Packs</option>
                                                                    <option value="Bottles">Bottles</option>
                                                                    <option value="Temperature">Temperature</option>
                                                                    <option value="Counterfeiting">Counterfeiting</option>
            
                                                                </select>
                                
                                                                </div>
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <label class="control-label col-md-3" for="ZipCode">Dosage</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control" name="medicine_dosage" id="medicine_dosage" placeholder="" required=""></div>
                                                            </div>
                                                            
                        
                                                               

                                                </div>
                                                   

                                             

                                                    <div class="row">
                                                        <hr>
                                                        <div style="float: right" >

                                                           <button type="reset" class="btn btn-default" value="Reset"><span class="glyphicon glyphicon-off" title="Reset" ></span>
                                                            </button>
                                                            <button type="submit" class="btn btn-primary" value="Submit"><span class="glyphicon glyphicon-floppy-disk" title="Submit"></span></button>
                                                        </div>
                                                    </div>
                                              
                                                
                                            </form>
                                            </div>
                        </div>
                    </div>
                </div>

      
          
              
            </section>


            <section>
                <div class="row">
                    <div class="col-lg-12">

                        <div class="panel panel-info filterable">
                            <div class="panel-heading clearfix  ">
                                <div class="panel-title pull-left">
                                        <div class="caption">
                                            <i class="livicon" data-name="camera-alt" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                             Vitals Sign Record
                                        </div> 
                                </div>

                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-responsive" id="table1">
                                    <thead>
                                        <tr>
                                            <td><b>Date Recorded</td>
                                            <td><b>Weight</b> <i>(kg)</i></td>
                                            <td><b>Height</b> <i>(cm)</i></td>
                                            <td><b>BP</b><i>(mmHg)</i></td></td>
                                            <td><b>Temperature</b>  <i>(°C)</i></td>
                                            <td><b>Respiratory Rate</b> <i>(\min)</i></td>
                                            <td><b>Pulse Rate</b> <i>(\min)</i></td>
                                            <td><b>Heart Rate</b> <i>(\min)</i></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $vitals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$v): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($v->vitals_date_time); ?></td>
                                            <td><?php echo e($v->vitals_patient_weight_kilos); ?></td>
                                            <td><?php echo e($v->vitals_patient_height_cm); ?></td></td>
                                            <td><?php echo e($v->vitals_patient_bpsystoli  . "/" . $v->vitals_patient_diastolic); ?></td>
                                            <td><?php echo e($v->vitals_patient_temp_celsius); ?></td>
                                            <td><?php echo e($v->vitals_patient_respiration_rate_min); ?></td>
                                             <td><?php echo e($v->vitals_patient_pulse_rate_min); ?></td>
                                              <td><?php echo e($v->vitals_patient_heart_rate_min); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>  
            </section>


            <section>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-info filterable">
                            <div class="panel-heading clearfix  ">
                                <div class="panel-title pull-left">
                                        <div class="caption">
                                            <i class="livicon" data-name="camera-alt" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                            Medical Records
                                        </div> 
                                </div>

                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-responsive" id="table2">
                                    <thead>
                                        <tr>
                                            <td><b>Date Recorded</b></td>
                                            <td><b>Symptoms</b></td>
                                            <td><b>Remarks</b></td>
                                            <td><b>         </b></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                       <?php $__currentLoopData = $phistoryapp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td><?php echo e($p->visit_date_time); ?></td>
                                            <td><?php echo e($p->visit_patient_symptomps); ?></td>
                                            <td><?php echo e($p->visit_remarks); ?></td>
                                                                 <td>
                                                      


                                                                <div class="col-sm-1">
                                                                    <a data-toggle="modal" data-href="#responsive" href="#responsive">

                                                                    <span class="glyphicon glyphicon-eye-open" title="View"></span></a>
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