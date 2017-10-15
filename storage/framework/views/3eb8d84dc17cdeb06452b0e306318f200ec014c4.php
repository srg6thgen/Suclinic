<?php $__env->startSection('title', 'Management Dashboard'); ?>
<?php $__env->startSection('content'); ?>
    ##parent-placeholder-040f06fd774092478d450774f5ba30c5da78acc8##
<aside class="right-side">
            <!-- Main content -->
            <section class="content-header">
                <h1>SUClinic Analysis</h1>
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
              
                <!--/row-->
            
                <div class="clearfix"></div>
                <div class="row">               
                        <div class="row">
                    <div class="col-lg-12">
                        <!-- Interacting charts strats here-->
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="linechart" data-size="16" data-loop="true" data-c="#000" data-hc="#000"></i>
                                   Top Medical Cases
                                </h3>
                                <span class="pull-right">
                                    <i class="glyphicon glyphicon-chevron-up showhide clickable"></i>
                                    <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                              <div id="medical_cases_chart" style="height:350px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- To do list -->
           
                </div>
            
         
            </section>
        </aside>

        <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.management.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>