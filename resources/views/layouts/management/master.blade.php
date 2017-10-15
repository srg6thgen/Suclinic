<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>SUClinic | @yield('title')</title>
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
    {!!Html::style('vendors/fullcalendar/css/fullcalendar.css')!!}
    {!!Html::style('css/pages/calendar_custom.css')!!}
    {!!Html::style('vendors/jvectormap/jquery-jvectormap.css')!!}
    {!!Html::style('vendors/animate/animate.min.css')!!}
    {!!Html::style('css/only_dashboard.css')!!}

    <!--end of page level css-->
    {!!Html::style('css/pages/form2.css')!!}
    {!!Html::style('css/pages/form3.css')!!}
    {!!Html::style('vendors/jasny-bootstrap/css/jasny-bootstrap.min.css')!!}
    {!!Html::style('vendors/validation/dist/css/bootstrapValidator.min.css')!!}


    <!--tables-->
    {!!Html::style('vendors/datatables/css/dataTables.colReorder.min.css')!!}
    {!!Html::style('vendors/datatables/css/dataTables.scroller.min.css')!!}
    {!!Html::style('vendors/datatables/css/dataTables.bootstrap.css')!!}
    
    {!!Html::style('vendors/modal/css/component.css')!!}

    {!!Html::style('css/pages/tables.css')!!}
    {!!Html::style('css/pages/form_layouts.css')!!}
    

         {!!Html::style('vendors/clockface/css/clockface.css')!!}
     {!!Html::style('vendors/colorpicker/css/bootstrap-colorpicker.min.css')!!}
     {!!Html::style('vendors/timepicker/css/bootstrap-timepicker.min.css')!!}
     {!!Html::style('vendors/datetimepicker/css/bootstrap-datetimepicker.min.css')!!}
     {!!Html::style('vendors/touchspin/dist/jquery.bootstrap-touchspin.css')!!}

    {!!Html::style('vendors/select2/select2.css')!!}
    {!!Html::style('vendors/select2/select2-bootstrap.css')!!}

    {!!Html::style('css/pages/icon.css')!!}



</head>

<body class="skin-josh">
@include('layouts.management.header')

  <div class="wrapper row-offcanvas row-offcanvas-left">
  @include('layouts.management.sidebar')
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

    {!!Html::script('vendors/jasny-bootstrap/js/jasny-bootstrap.min.js')!!}
    {!!Html::script('vendors/validation/dist/js/bootstrapValidator.min.js')!!}
    {!!Html::script('js/pages/validation.js')!!}

        <!-- end of page level js -->

    {!!Html::script('js/todolist.js')!!}
    <!-- EASY PIE CHART JS -->
    
    {!!Html::script('vendors/fullcalendar/fullcalendar.min.js')!!}
    {!!Html::script('vendors/fullcalendar/calendarcustom.min.js')!!}
    


 
    {!!Html::script('vendors/charts/easypiechart.min.js')!!}
    {!!Html::script('vendors/charts/jquery.easypiechart.min.js')!!}
    
    <!--for calendar-->
    <!--   Realtime Server Load  --

    <!--Sparkline Chart-->
    {!!Html::script('vendors/charts/jquery.sparkline.js')!!}


    <!-- Back to Top-->
    {!!Html::script('vendors/countUp/countUp.js')!!}
    <!--   maps -->
    {!!Html::script('vendors/jvectormap/jquery-jvectormap-1.2.2.min.js')!!}
    {!!Html::script('vendors/jvectormap/jquery-jvectormap-world-mill-en.js')!!}
    {!!Html::script('vendors/jscharts/Chart.js')!!}


    {!!Html::script('vendors/modal/js/classie.js')!!}
    {!!Html::script('vendors/modal/js/modalEffects.js')!!}
    
         {!!Html::script('vendors/daterangepicker/daterangepicker.js')!!}
     {!!Html::script('vendors/select2/select2.js')!!}
     {!!Html::script('vendors/iCheck/icheck.js')!!}
     {!!Html::script('vendors/iCheck/demo/js/custom.min.js')!!}
     {!!Html::script('vendors/autogrow/js/jQuery-autogrow.js')!!}
     {!!Html::script('vendors/maxlength/bootstrap-maxlength.min.js')!!}
     {!!Html::script('vendors/card/jquery.card.js')!!}
    {!!Html::script('js/pages/formelements.js')!!}



      {!!Html::script('vendors/datatables/jquery.dataTables.min.js')!!}
     {!!Html::script('vendors/datatables/dataTables.tableTools.min.js')!!}
     {!!Html::script('vendors/datatables/dataTables.colReorder.min.js')!!}
     {!!Html::script('vendors/datatables/dataTables.scroller.min.js')!!}
     {!!Html::script('vendors/datatables/dataTables.bootstrap.js')!!}
     {!!Html::script('js/pages/table-advanced.js')!!}


     <!--tables-->

        

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
        <script src="js/echarts.js" type="text/javascript"></script>
    <script src="js/sample.js" type="text/javascript"></script>
        <script language="javascript" type="text/javascript" src="vendors/charts/jquery.flot.min.js"></script>
    <script language="javascript" type="text/javascript" src="vendors/charts/jquery.flot.stack.js"></script>
    <script language="javascript" type="text/javascript" src="vendors/charts/jquery.flot.crosshair.js"></script>
    <script language="javascript" type="text/javascript" src="vendors/charts/jquery.flot.time.js"></script>
    <script language="javascript" type="text/javascript" src="vendors/charts/jquery.flot.selection.js"></script>
    <script language="javascript" type="text/javascript" src="vendors/charts/jquery.flot.symbol.js"></script>
    <script language="javascript" type="text/javascript" src="vendors/charts/jquery.flot.resize.js"></script>
    <script language="javascript" type="text/javascript" src="vendors/charts/jquery.flot.categories.js" ></script>
    <script  language="javascript" type="text/javascript" src="vendors/charts/jquery.flot.spline.js" ></script>
    <script language="javascript" type="text/javascript" src="vendors/charts/jquery.flot.tooltip.js" ></script>
    <script language="javascript" type="text/javascript" src="js/pages/customcharts.js"></script>
    <!-- end of page level js -->
    <!--end tables-->



    <script type="text/javascript">
    $(document).ready(function() {
        var composeHeight = $('#calendar').height() +21 - $('.adds').height();
        $('.list_of_items').slimScroll({
            color: '#A9B6BC',
            height: composeHeight + 'px',
            size: '5px'
        });
    });
    </script>
</body>
</html>