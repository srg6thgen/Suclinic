<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>MedSys | @yield('title')</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    {!!Html::style('css/bootstrap.min.css')!!}
   
    <!-- font Awesome -->
    {!!Html::style('vendors/font-awesome-4.2.0/css/font-awesome.min.css')!!}
    {!!Html::style('css/styles/black.css')!!}
    {!!Html::style('css/panel.css')!!}
    {!!Html::style('css/metisMenu.css')!!}
 
    <!-- end of global css -->    
    <!--page level css -->

    {!!Html::style('vendors/jvectormap/jquery-jvectormap.css')!!}
    {!!Html::style('vendors/animate/animate.min.css')!!}



    <!--end of page level css-->
    {!!Html::style('css/pages/form2.css')!!}
    {!!Html::style('css/pages/form3.css')!!}
    {!!Html::style('vendors/jasny-bootstrap/css/jasny-bootstrap.min.css')!!}
    {!!Html::style('vendors/validation/dist/css/bootstrapValidator.min.css')!!}

    {!!Html::style('vendors/select2/select2.css')!!}
    {!!Html::style('vendors/select2/select2-bootstrap.css')!!}

     {!!Html::style('vendors/clockface/css/clockface.css')!!}
     {!!Html::style('vendors/colorpicker/css/bootstrap-colorpicker.min.css')!!}
     {!!Html::style('vendors/timepicker/css/bootstrap-timepicker.min.css')!!}
     {!!Html::style('vendors/datetimepicker/css/bootstrap-datetimepicker.min.css')!!}

    <!--tables-->
    {!!Html::style('vendors/datatables/css/dataTables.colReorder.min.css')!!}
    {!!Html::style('vendors/datatables/css/dataTables.scroller.min.css')!!}
    {!!Html::style('vendors/datatables/css/dataTables.bootstrap.css')!!}
    {!!Html::style('css/pages/tables.css')!!}
    {!!Html::style('css/pages/form_layouts.css')!!}

     {!!Html::style('css/pages/icon.css')!!}
    <link rel="stylesheet" href="vendors/wizard/jquery-steps/css/wizard.css">
    <link rel="stylesheet" href="vendors/wizard/jquery-steps/css/jquery.steps.css">
    <link href="vendors/touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" media="all" />

      

</head>

<body class="skin-josh">
@include('layouts.admin.header')

  <div class="wrapper row-offcanvas row-offcanvas-left">
  @include('layouts.admin.sidebar')
    @section ('content')



  @show
  </div>


    
     <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>

     {!!Html::script('js/jquery-1.11.1.min.js')!!}
     {!!Html::script('js/bootstrap.min.js')!!}
    
    <!--livicons-->
    {!!Html::script('vendors/livicons/minified/raphael-min.js')!!}
    {!!Html::script('vendors/livicons/minified/livicons-1.4.min.js')!!}
    {!!Html::script('js/josh.js')!!}
    {!!Html::script('js/metisMenu.js')!!}
    {!!Html::script('vendors/holder-master/holder.js')!!}
  
    <!-- end of global js -->
    <!-- begining of page level js -->
    <!--  todolist-->



    <!-- EASY PIE CHART JS -->
        {!!Html::script('vendors/jasny-bootstrap/js/jasny-bootstrap.min.js')!!}
    {!!Html::script('vendors/validation/dist/js/bootstrapValidator.min.js')!!}
    {!!Html::script('js/pages/validation.js')!!}
     <!--tables-->
     {!!Html::script('vendors/datatables/jquery.dataTables.min.js')!!}
     {!!Html::script('vendors/datatables/dataTables.tableTools.min.js')!!}
     {!!Html::script('vendors/datatables/dataTables.colReorder.min.js')!!}
     {!!Html::script('vendors/datatables/dataTables.scroller.min.js')!!}
     {!!Html::script('vendors/datatables/dataTables.bootstrap.js')!!}
     {!!Html::script('js/pages/table-advanced.js')!!}


       {!!Html::script('vendors/daterangepicker/daterangepicker.js')!!}

     {!!Html::script('vendors/select2/select2.js')!!}
     {!!Html::script('vendors/iCheck/icheck.js')!!}
     {!!Html::script('vendors/iCheck/demo/js/custom.min.js')!!}
     {!!Html::script('vendors/autogrow/js/jQuery-autogrow.js')!!}
     {!!Html::script('vendors/maxlength/bootstrap-maxlength.min.js')!!}
     {!!Html::script('js/pages/formelements.js')!!}

     {!!Html::script('vendors/wizard/jquery-steps/js/jquery.validate.min.js')!!}
     {!!Html::script('vendors/wizard/jquery-steps/js/wizard.js')!!}
     {!!Html::script('vendors/wizard/jquery-steps/js/jquery.steps.js')!!}
     {!!Html::script('vendors/wizard/jquery-steps/js/form_wizard.js')!!}
     {!!Html::script('vendors/touchspin/dist/jquery.bootstrap-touchspin.js')!!}

 <script src="vendors/colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!--time picker-->
    <script src="vendors/timepicker/js/bootstrap-timepicker.min.js"></script>
    <!--datetime picker-->
    <script type="text/javascript" src="vendors/datetimepicker/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript" src="vendors/datetimepicker/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
    <!--clockface-->
    <script src="vendors/clockface/js/clockface.js"></script>
    <!--touchspin-->
    <script src="vendors/touchspin/dist/jquery.bootstrap-touchspin.js"></script>
    <script type="text/javascript" src="vendors/multiselect/js/bootstrap-multiselect.js"></script>
    <!--switch-->
    <script src="vendors/switch/dist/js/bootstrap-switch.js"></script>
    <!--spinner-->
    <script src="vendors/spinner/dist/jquery.spinner.js"></script>
    <script src="js/pages/pickers.js"></script>
</body>
</html>