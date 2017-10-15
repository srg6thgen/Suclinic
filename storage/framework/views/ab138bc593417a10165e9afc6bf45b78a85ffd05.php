<?php $__env->startSection('title', 'Utility Setup'); ?>
<?php $__env->startSection('content'); ?>
    ##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##

<aside class="right-side">
    <!-- Main content -->
    <section class="content-header">
        <h1>Utility Setup</h1>
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
                            <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                            List of Utility
                        </h3>
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped table-bordered" id="table1">
                            <thead>
                                <tr>
                                    <th>Utility Name</th>
                                    <th>Description</th>
                                    <th>Issued Date</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $ustored; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$us): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($us->utility_name); ?></td>                          
                                    <td><?php echo e($us->utility_description); ?></td>
                                    <td><?php echo e($us->utility_issued_date); ?></td>                          
                                    <td><?php echo e($us->utility_active); ?></td>
                                    <td>
                                        <div class="col-sm-1">
                                            <a href="#">
                                                <i class="glyphicon glyphicon-download-alt" data-toggle="modal" data-href="#full-width" href="#responsive_<?php echo e($us->utility_id); ?>" data-c="#f56954" data-hc="#f56954" title="Store"></i>
                                            </a>

                                            <div class="modal fade in" id="responsive_<?php echo e($us->utility_id); ?>" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
                                            <div class="modal-dialog modal-md">
                                                <div class="modal-content">
                                                        <form method="POST" class="form-horizontal" action="<?php echo e(url('ManageUtility')); ?>">
                                                         <?php echo e(csrf_field()); ?>


                                                            <div class="modal-header">
                                                                <h5><b>Utility Name:</b> <?php echo e($us->utility_name); ?></h5>
                                                            </div>

                                                            <div class="modal-body">
                                                                    <div class="" style="margin-left: 20px; width:360px;">
                                                                        <label>Code Number:</label>
                                                                            <input type="text" name="utility_stored_code_number" class="form-control" id="utility_stored_code_number" placeholder="" required="">
                                                                    </div>
                                                                    <br>
                                                                    <div class="" style="margin-left: 20px;">
                                                                    <label>Received Date:</label>
                                                                        <div class="input-group date form_datetime0 col-md-8" data-date="2012-12-21T15:25:00Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">

                                                                            <input size="16" type="text" id="medicine_received" value="" readonly class="form-control">
                                                                            <span class="input-group-addon">
                                                                                <span class="glyphicon glyphicon-th"></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <div class="" style="margin-left: 20px;">
                                                                    <label>Expiry Date:</label>
                                                                        <div class="input-group date form_datetime0 col-md-8" data-date="2012-12-21T15:25:00Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">

                                                                            <input size="16" type="text" id="medicine_received" value="" readonly class="form-control">
                                                                            <span class="input-group-addon">
                                                                                <span class="glyphicon glyphicon-th"></span>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                    <br>
                                                                    <div class="" style="margin-left:20px; width:360px;">
                                                                        <label>Status:</label>
                                                                            <select id="utility_stored_status" class="form-control select2" name="utility_stored_status">
                                                                                <option value="1">Available</option>
                                                                                <option value="0">Unavailable</option>
                                                                            </select>
                                                                    </div>
                                                            </div>

                                                            <div class="modal-footer">
                                                                <div style="float: right" >
                                                                    <button type="button" data-dismiss="modal" class="btn">Cancel</button>
                                                                    <a type="submit" href="<?php echo e(route('ManageUtilityStored_uti', ['id' =>$us->utility_id])); ?>" class="btn btn-primary" value="Submit" title="Submit">Store</a>
                                                            </div>
                                                            </div>

                                                        </form>
                                                </div>
                                            </div>
                                        </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <a data-toggle="modal" data-href="#responsive" href="#responsive">
                                            <span class="glyphicon glyphicon-eye-open" title="View Inventory"></span></a>
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
<?php echo $__env->make('layouts.staff.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>