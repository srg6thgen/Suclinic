<?php $__env->startSection('title', 'Vital Sign'); ?>
<?php $__env->startSection('content'); ?>
    ##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##

<aside class="right-side">
    <!-- Main content -->
    <section class="content-header">
        <h1>Vital Signs</h1>
    </section>
    <section class="content">
        <div class="row">
               <div class="col-lg-12">
                        <div class="panel panel-primary filterable" style="overflow:auto;">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                     <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                        Patient List
                                </h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-bordered" id="table1">
                  <thead>
                                        <tr>
                                            <th style="display:none;"">Id</th>
                                            <th>Patient Code</th>
                                            <th>Patient Name</th>
                                           
                                       
                                        
                                            <th>    </th>
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
                                            <a href="#">
                                                <i class="glyphicon glyphicon-download-alt" data-toggle="modal" data-href="#full-width" href="#responsive_<?php echo e($p->patient_id); ?>" data-c="#f56954" data-hc="#f56954" title="Store"></i>
                                            </a>


                                            <div class="modal fade" id="responsive_<?php echo e($p->patient_id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            <h4 class="modal-title" id="myModalLabel">
                                                                <i class="fa fa-medkit"></i>
                                                                Patient: <?php echo e($p->first_name . " " . $p->last_name); ?>

                                                            </h4>
                                                        </div>
                                                    <div class="modal-body">
                                                        <form method="POST" action="<?php echo e(route('Vitalstore', ['id' =>$p->patient_id])); ?>">
                                                                <?php echo e(csrf_field()); ?>




                                                        <ul class="nav nav-tabs">
                                                            <li class="active">
                                                                <a href="#tab1" data-toggle="tab">General</a>
                                                            </li>
                                                            <li>
                                                                <a href="#tab2" data-toggle="tab">Rate</a>
                                                            </li>
                                                        </ul>

                                                   

                                                            <div class="tab-content">

                                                                <div class="tab-pane active" id="tab1">
                                                                    <br>
                                                                    <div class="form-group">
                                                                
                                                                        <label for="e1" class="control-label">
                                                                            Height
                                                                        </label>
                                                                        <div class="form-group input-group">
                                                                            <input type="text" class="form-control" name="Height" placeholder="Input Patient's Height" onkeypress="return isNumberKey(event)"/>
                                                                            <span class="input-group-addon" >cm</span>
                                                                        </div>
                                                                    </div>
                                                           
                                                                    <div class="form-group">
                                                                        <label for="e1" class="control-label">
                                                                            Weight
                                                                        </label>
                                                                        <div class="form-group input-group">
                                                                            <input type="text" class="form-control" name="Weight" placeholder="Input Patient's Weight" onkeypress="return isNumberKey(event)"/>
                                                                            <span class="input-group-addon" >kg</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="e1" class="control-label">
                                                                            Systolic
                                                                        </label>
                                                                        <div class="form-group input-group">
                                                                            <input type="text" class="form-control" name="Systolic"  placeholder="Input Patient's Systolic" onkeypress="return isNumberKey(event)"/>
                                                                            <span class="input-group-addon" placeholder="height">mm/Hg</span>
                                                                        </div>
                                                                    </div>
                                                                
                                                                    <div class="form-group">
                                                                        <label for="e1" class="control-label">
                                                                            Diastolic
                                                                        </label>
                                                                        <div class="form-group input-group">
                                                                            <input type="text" class="form-control" name="Diastolic" placeholder="Input Patient's Diastolic" onkeypress="return isNumberKey(event)"/>
                                                                            <span class="input-group-addon" placeholder="height">mm/Hg</span>
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group">
                                                                    <label for="e1" class="control-label">
                                                                        Temp
                                                                    </label>
                                                                    <div class="form-group input-group">
                                                                        <input type="text" class="form-control" name="Temp" placeholder="Input Patient's Temperature" onkeypress="return isNumberKey(event)"/>
                                                                        <span class="input-group-addon" placeholder="height">°C</span>
                                                                    </div>
                                                                    </div>
                                                                </div>

                                                                <div class="tab-pane" id="tab2">
                                                                <br>

                                                                <div class="form-group">
                                                                    <label for="e1" class="control-label">
                                                                        Respiration Rate
                                                                    </label>
                                                                    <div class="form-group input-group">
                                                                        <input type="text" class="form-control" name="Respiration" placeholder="Input breaths per minute" onkeypress="return isNumberKey(event)"/>
                                                                        <span class="input-group-addon" >/min</span>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="e1" class="control-label">
                                                                        Pulse Rate
                                                                    </label>
                                                                    <div class="form-group input-group">
                                                                        <input type="text" class="form-control" name="Pulse" placeholder="Input beats per minute" onkeypress="return isNumberKey(event)"/>
                                                                        <span class="input-group-addon">/min</span>
                                                                    </div>
                                                                </div>

                                                                <div class="form-group">
                                                                    <label for="e1" class="control-label">
                                                                        Heart Rate
                                                                    </label>
                                                                    <div class="form-group input-group">
                                                                        <input type="text" class="form-control" name="Heart" placeholder="Input beats per minute"  onkeypress="return isNumberKey(event)"/>
                                                                        <span class="input-group-addon">/min</span>
                                                                    </div>
                                                                </div>
                                                         
                                                            </div>
                                                            </div>
                                                                <!--end bodeh-->
                                                        </div>
                                                          <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary pull-right" value="Submit">
                                                                <i class="glyphicon glyphicon-plus-sign"></i> Add
                                                            </button>
                                                        </div>
                                                        </div>
                                                      
                                                        </form>
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
        <!--MODAL START-------->
    </section>
</aside>

        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.staff.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>