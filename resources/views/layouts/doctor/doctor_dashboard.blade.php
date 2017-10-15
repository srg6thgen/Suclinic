@extends('layouts.doctor.master')
@section('title', 'Doctor Dashboard')
@section('content')
    @parent
<aside class="right-side">
            <!-- Main content -->
            <section class="content-header">
                <h1>Welcome Dr. {{ Auth::user()->last_name .', '.Auth::user()->first_name }}</h1>
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
                                     <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                        Scheduled List
                                </h3>
                            </div>
                            <div class="panel-body">
                            
                                <table class="table table-striped table-bordered" id="table1">
                                    <thead>
                                        <tr>
                                            <th>Appointment Time</th>
                                            <th>Patient Code</th>
                                            <th>Patient Name</th>
                                            <th>Appointment Reason</th>
                                            <th>Status</th>
                                            <th>    </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach($appointment as $key =>$a)

                                        <tr>
                                           <td>{{ $a->appointment_datetime_started}}</td>       
                                           <td>{{ $a->patient_account_no}}</td>                   
                                           <td>{{ $a->patient_first ." ". $a->patient_last}}</td>
                                           <td>{{ $a->appointment_reason}}</td>
                                                                                       <td>
                                                @if ($a->appointment_status_done === 0)
                                                   <span class="label label-sm label-info">Waiting</span>   
                                                @else
                                                    
                                                <span class="label label-sm label-success">Done</span>
                                                     @endif



                                             </td>
                                            <td>

                                                      
                                                             <div class="col-sm-1">
                                                                    <a href="{{ route('Visit_dis', ['id' =>$a->patient_id, 'appointment_id'=>$a->appointment_id,'walk_in_id' =>0]) }}">
                                                                         <i class="glyphicon glyphicon-eye-open" data-size="18" data-c="#f56954" data-hc="#f56954" title="Store"></i>
                                                                    </a>

                                                                </div>
                                           

                                                                                                                                                                                                 
                                            </td>
                                        </tr>
                                        @endforeach
                            
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
                                            <th>Appointment Reason</th>
                                            <th>    </th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                         @foreach($walk as $key =>$w)

                                        <tr>
                                           <td>{{ $w->walk_in_no}}</td>       
                                           <td>{{ $w->patient_account_no}}</td>                   
                                           <td>{{ $w->patient_first ." ". $w->patient_last}}</td>
                                           <td>{{ $w->walk_in_reason}}</td>
                                            <td>

                                                      
                                                             <div class="col-sm-1">
                                                                        <a href="{{ route('Visit_dis', ['id' =>$w->patient_id, 'walk_in_id'=>$w->walk_in_id, 'appointment_id' =>0]) }}">
                                                                         <i class="glyphicon glyphicon-eye-open" data-size="18" data-c="#f56954" data-hc="#f56954" title="Store"></i>
                                                                        </a>

                                                                </div>
                                           

                                                                                                                                                                                                 
                                            </td>
                                        </tr>
                                        @endforeach
                            
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

              

              
                </div>

            </section>
             

</aside>



        @endsection