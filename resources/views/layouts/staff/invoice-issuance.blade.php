<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SUClinic | Issuance</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

     {!!Html::style('css/bootstrap.css')!!}
  
    {!!Html::style('css/styles/black.css')!!}
    {!!Html::style('css/panel.css')!!}
    {!!Html::style('css/metisMenu.css')!!}
  <!-- Bootstrap 3.3.6 -->
   {!!Html::style('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css')!!}
  
    {!!Html::style('https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css')!!}
    {!!Html::style('dist/css/AdminLTE.min.css')!!}
    {!!Html::style('css/pages/tables.css')!!}

  <!-- Ionicons -->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <i class="fa fa-globe"></i> SUClinic, Inc.
          <small class="pull-right">Date: 2/10/2017</small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
 <div class="col-xs-4 invoice-col">

   {{ HTML::image('dist/img/rx.png') }}
      </div>

      <div class="col-sm-4 invoice-col">

        From
        <address>
          <strong>Polytechnic University of the Philippines Quezon City Branch.</strong><br>
           Don Fabian, Quezon City<br>
          1121 Metro Manila, Philippines<br>
          Phone: (804) 123-5432<br>
          Email: gs@pup.edu.ph
        </address>
      </div>
      <!-- /.col -->
      <div class="col-sm-4 invoice-col">
         Recipient
        <address>
        <strong> {{ $patient->patient_last .', '. $patient->patient_first}}<br></strong>

       
        </address>
      </div>
      <!-- /.col -->

      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <!-- /.row -->
    <br>
    <br>
    <div class="row">
      <!-- accepted payments column -->
        <div class="col-md-12">
                                <div class="panel panel-primary">
                                    <div class="panel-heading">
                                        <strong>Issuance Order</strong>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table class="table table-condensed">
                                                <thead>
                                                    <tr>
                                                        <td>
                                                            <strong>Stock No</strong>
                                                        </td>
                                                        <td class="text-center">
                                                            <strong>Medicine Name</strong>
                                                        </td>
                                                        <td class="text-center">
                                                            <strong>Quantity</strong>
                                                        </td>
                                              
                                                    </tr>
                                                </thead>
                                                <tbody>
                                    
                                                     @foreach($issuemedvalue as $key =>$i)
                                        <tr>
                                            <td>{{ $i->medicine_stored_no}}</td>     
                                              <td class="text-center">{{ $i->medicine_branded_name}}</td>     
                                              <td class="text-center">{{ $i->medicine_issuance_value_qty}}</td>  
                                        </tr>
                                        @endforeach
                                     
                                               
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
      <!-- /.col -->


      <div class="col-xs-6">
       
    
  
       <h3>{{ $staff->last_name .', '. $staff->first_name}}<br></h3>
        </div>
      </div>

              <div class="row">
                
                            <div class="pull-right" style="margin:10px 20px;" href="{{ url('staff-dashboard') }}">
                             <a  id="printPageButton"  href="{{ url('staff-dashboard') }}" class="btn btn-responsive button-alignment btn-success" value="Submit">Done</a>


                            </div>
                        </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>


     {!!Html::script('js/jquery-1.11.1.min.js')!!}
     {!!Html::script('js/bootstrap.min.js')!!}
    
    <!--livicons-->
    {!!Html::script('vendors/livicons/minified/raphael-min.js')!!}
    {!!Html::script('vendors/livicons/minified/livicons-1.4.min.js')!!}
    {!!Html::script('js/josh.js')!!}
    {!!Html::script('js/metisMenu.js')!!}
    {!!Html::script('vendors/holder-master/holder.js')!!}
<!-- ./wrapper -->
</body>
</html>
