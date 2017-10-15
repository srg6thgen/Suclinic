<?php $__env->startSection('title', 'Medicine Management'); ?>
<?php $__env->startSection('content'); ?>
    ##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##

<aside class="right-side">
    <!-- Main content -->
    <section class="content-header">
        <h1>Medicine Management</h1>
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
                                List of Medicine
                        </h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped table-bordered" id="table1">
                            <thead>
                                <tr>
                                <th style="display:none;">Medicine Id</th>
                                    <th>Medicine Name</th>
                                    <th>Generic Name</th>
                                    <th>Date Added</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $medicine; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>$ms): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                   <td style="display:none;"><?php echo e($ms->medicine_id); ?></td>
                                    <td><?php echo e($ms->medicine_generic_name); ?></td>
                                    <td><?php echo e($ms->medicine_packaging); ?></td>
                                    <td><?php echo e($ms->medicine_date_added); ?></td>
                                    <td><?php echo e($ms->medicine_active); ?></td>
                                    <td>
                                        <div class="col-sm-1">
                                            <a href="#">
                                                <i class="glyphicon glyphicon-download-alt" data-toggle="modal" data-href="#full-width" href="#responsive_<?php echo e($ms->medicine_id); ?>" data-c="#f56954" data-hc="#f56954" title="Store"></i>
                                            </a>
                                            <div class="modal fade" id="responsive_<?php echo e($ms->medicine_id); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                            <h4 class="modal-title" id="myModalLabel">
                                        <i class="fa fa-medkit"></i>
                                        Medicine Name: <?php echo e($ms->medicine_generic_name); ?>

                                    </h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <form method="POST" class="form-horizontal" action="<?php echo e(route('ManageMedicineStored_med', ['id' =>$ms->medicine_id])); ?>">
                                                                    <?php echo e(csrf_field()); ?>

                                                                    <label for="e1" class="control-label">
                                                                        Quantity
                                                                    </label>
                                                                    <input type="text" class="form-control" id="quantity" onkeypress="return isNumberKey(event)" name="quantity" placeholder="Please enter your message here..." rows="3" required=""></input>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Received Date</label>
                                        <div class="input-group date form_datetime" data-date="<?php echo e(Carbon\Carbon::now()); ?>" " >
                                  <input size="16" type="text" value="" id="datetimepicker6" class="form-control" name="medicine_received"  required>

                                            <span class="input-group-addon ">
                                                <span class="glyphicon glyphicon-remove "></span>
                                            </span>

                                            <span class="input-group-addon ">
                                                <span class="glyphicon glyphicon-th "></span>
                                            </span>

                                        </div>



                                    </div>
                                               <div class="form-group ">
                                   <label>Expiration  Date</label>
                                        <div class="input-group date form_datetime " data-date="<?php echo e(Carbon\Carbon::now()); ?> "">
                                                                    <input size="16" type="text" value="" id="datetimepicker6" class="form-control" name="medicine_expiry"  required>
                                                                    <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-remove"></span>
                                                                    </span>
                                                                    <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-th"></span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="submit" class="btn btn-primary pull-right" value="Submit">
                                                                <i class="glyphicon glyphicon-plus-sign"></i> Add
                                                            </button>
                                                        </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-1">
                                            <a href="#">
                                                <i class="glyphicon glyphicon-eye-open" data-toggle="modal" data-href="#full-width" href="#full-width" data-c="#f56954" data-hc="#f56954" title="View"></i>
                                            </a>
                                           <!--      wag muna gawin yung view need pa ng json ata haha XD -->
                                    <!--         <div class="modal fade in" id="full-width" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content md-content-white">
                                                        <div class="modal-header ">
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                            <h4 class="modal-title">Item Stored List</h4>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="col-lg">
                                                                <table class="table table-striped table-bordered" id="table2">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Lot#</th>
                                                                            <th>Quantity</th>
                                                                            <th>Expiry Date</th>
                                                                            <th> </th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>000-01</td>
                                                                            <td>97</td>
                                                                            <td>
                                                                                10/14/17
                                                                            </td>
                                                                            <td>
                                                                                <a data-toggle="modal" href="#stack2" class="btn default btn-xs red-stripe">Select</a>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td>000-02</td>
                                                                            <td>25</td>
                                                                            <td>
                                                                                01/09/18
                                                                            </td>
                                                                            <td>
                                                                                <a data-toggle="modal" href="#stack2" class="btn default btn-xs red-stripe">Select</a>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" data-dismiss="modal" class="btn">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> -->
                                        </div>
                                        <div class="col-sm-1">
                                            <a data-toggle="modal" data-href="#responsive" href="#responsive">
                                                <span class="glyphicon glyphicon-trash" title="View"></span>
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
<?php echo $__env->make('layouts.staff.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>