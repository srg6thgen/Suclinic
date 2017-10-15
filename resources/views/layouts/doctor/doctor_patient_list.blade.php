@extends('layouts.doctor.master')
@section('title', 'Doctor Dashboard')
@section('content')
    @parent
<aside class="right-side">
            <!-- Main content -->
            <section class="content-header">
                <h1>Queries</h1>
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
            
            <section>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-primary filterable">
                            <div class="panel-heading clearfix  ">
                                <div class="panel-title pull-left">
                                        <div class="caption">
                                            <i class="livicon" data-name="camera-alt" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                            List of Employee Patients
                                        </div> 
                                </div>

                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-responsive" id="table1">
                                    <thead>
                                        <tr>
                                            <td><b>Account Number</b></td>
                                            <td><b>Employee Number</b></td>
                                            <td><b>Patient Name</b></td>
                                            <td><b>Position</b></td>
                                            <td><b>Date Registered</b></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($patient_emplist as $key =>$pe)
                                        <tr>
                                            <td>{{ $pe->patient_account_no}}</td>
                                            <td>{{ $pe->employee_number}}</td>
                                            <td>{{ $pe->employee_firstname . " " . $pe->employee_lastname}}</td>
                                            <td>{{ $pe->employee_position}}</td>
                                            <td>{{ $pe->patient_reg_date}}</td>
                                        </tr>
                                    @endforeach
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
                        <div class="panel panel-primary filterable">
                            <div class="panel-heading clearfix  ">
                                <div class="panel-title pull-left">
                                        <div class="caption">
                                            <i class="livicon" data-name="camera-alt" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                            List of Student Patients
                                        </div> 
                                </div>

                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-responsive" id="table1">
                                    <thead>
                                        <tr>
                                            <td><b>Account Number</b></td>
                                            <td><b>Student Number</b></td>
                                            <td><b>Patient Name</b></td>
                                            <td><b>Date Registered</b></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($patient_studlist as $key =>$ps)
                                        <tr>
                                            <td>{{ $ps->patient_account_no}}</td>
                                            <td>{{ $ps->student_number}}</td>
                                            <td>{{ $ps->student_firstname . " " . $ps->student_lastname}}</td>
                                            <td>{{ $ps->patient_reg_date}}</td>
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