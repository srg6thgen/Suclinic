<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>SUClinic | <?php echo $__env->yieldContent('title'); ?></title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <?php echo Html::style('css/bootstrap.min.css'); ?>

   
    <!-- font Awesome -->
    <?php echo Html::style('vendors/font-awesome-4.2.0/css/font-awesome.min.css'); ?>

    <?php echo Html::style('css/styles/black.css'); ?>

    <?php echo Html::style('css/panel.css'); ?>

    <?php echo Html::style('css/metisMenu.css'); ?>

 
    <!-- end of global css -->    
    <!--page level css -->
    <?php echo Html::style('vendors/fullcalendar/css/fullcalendar.css'); ?>

    <?php echo Html::style('css/pages/calendar_custom.css'); ?>

    <?php echo Html::style('vendors/jvectormap/jquery-jvectormap.css'); ?>

    <?php echo Html::style('vendors/animate/animate.min.css'); ?>


    <!--end of page level css-->
    <?php echo Html::style('vendors/daterangepicker/css/daterangepicker-bs3.css'); ?>


    <!--select css-->
    <?php echo Html::style('vendors/select2/select2.css'); ?>

    <?php echo Html::style('vendors/select2/select2-bootstrap.css'); ?>

    <!--clock face css-->
    <?php echo Html::style('vendors/iCheck/skins/all.css'); ?>

    <?php echo Html::style('css/pages/formelements.css'); ?>


    <!--tables-->
    <?php echo Html::style('vendors/datatables/css/dataTables.colReorder.min.css'); ?>

    <?php echo Html::style('vendors/datatables/css/dataTables.scroller.min.css'); ?>

    <?php echo Html::style('vendors/datatables/css/dataTables.bootstrap.css'); ?>

    <?php echo Html::style('css/pages/tables.css'); ?>

    <?php echo Html::style('vendors/modal/css/component.css'); ?>





</head>

<body class="skin-josh">
<?php echo $__env->make('layouts.doctor.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <div class="wrapper row-offcanvas row-offcanvas-left">
  <?php echo $__env->make('layouts.doctor.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php $__env->startSection('content'); ?>



  <?php echo $__env->yieldSection(); ?>
  </div>


    
     <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>

     <?php echo Html::script('js/jquery-1.11.1.min.js'); ?>

     <?php echo Html::script('js/bootstrap.min.js'); ?>

    
    <!--livicons-->
    <?php echo Html::script('vendors/livicons/minified/raphael-min.js'); ?>

    <?php echo Html::script('vendors/livicons/minified/livicons-1.4.min.js'); ?>

    <?php echo Html::script('js/josh.js'); ?>

    <?php echo Html::script('js/metisMenu.js'); ?>

    <?php echo Html::script('vendors/holder-master/holder.js'); ?>

  
    <!-- end of global js -->
    <!-- begining of page level js -->
    <!--  todolist-->

    <?php echo Html::script('vendors/jasny-bootstrap/js/jasny-bootstrap.min.js'); ?>

    <?php echo Html::script('vendors/validation/dist/js/bootstrapValidator.min.js'); ?>

    <?php echo Html::script('js/pages/validation.js'); ?>


        <!-- end of page level js -->
    <!-- Back to Top-->
    <!-- date-range-picker -->


     <?php echo Html::script('vendors/daterangepicker/daterangepicker.js'); ?>

     <?php echo Html::script('vendors/select2/select2.js'); ?>

     <?php echo Html::script('vendors/iCheck/icheck.js'); ?>

     <?php echo Html::script('vendors/iCheck/demo/js/custom.min.js'); ?>

     <?php echo Html::script('vendors/autogrow/js/jQuery-autogrow.js'); ?>

     <?php echo Html::script('vendors/maxlength/bootstrap-maxlength.min.js'); ?>

     <?php echo Html::script('vendors/card/jquery.card.js'); ?>

     <?php echo Html::script('js/pages/formelements.js'); ?>


     <!--tables-->
     <?php echo Html::script('vendors/datatables/jquery.dataTables.min.js'); ?>

     <?php echo Html::script('vendors/datatables/dataTables.tableTools.min.js'); ?>

     <?php echo Html::script('vendors/datatables/dataTables.colReorder.min.js'); ?>

     <?php echo Html::script('vendors/datatables/dataTables.scroller.min.js'); ?>

     <?php echo Html::script('vendors/datatables/dataTables.bootstrap.js'); ?>

     <?php echo Html::script('js/pages/table-advanced.js'); ?>



        

    <!--end tables-->


</body>
</html>