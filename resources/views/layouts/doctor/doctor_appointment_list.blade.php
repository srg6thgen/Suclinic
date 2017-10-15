@extends('layouts.doctor.master')
@section('title', 'Appointment List')
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
                        <a href="#">List of Appointments</a>
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
                                            List of Appointments
                                        </div> 
                                </div>

                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-responsive" id="table1">
                                    <thead>
                                        <tr>
                                            <td><b>Patient Name</b></td>
                                            <td><b>Appointment Type</b></td>
                                            <td><b>Appointment Number</b></td>
                                            <td><b>Reason</b></td>
                                            <td><b>Assigned Doctor</b></td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Ekel David</td>
                                            <td>Check-up</td>
                                            <td>2017-01</td>
                                            <td>Clearance</td>
                                            <td>David Ezekiel</td>
                                        </tr>
                                        <tr>
                                            <td>Ian Avena</td>
                                            <td>Medical</td>
                                            <td>2017-02</td>
                                            <td>Enrollee Requirement</td>
                                            <td>Leandro Ravena</td>
                                        </tr>
                                        <tr>
                                            <td>Chris Caramoan</td>
                                            <td>Medical</td>
                                            <td>2017-03</td>
                                            <td>Clearance</td>
                                            <td>Jeffre Cara</td>
                                        </tr>
                                        <tr>
                                            <td>Paula Bernal</td>
                                            <td>Check-up</td>
                                            <td>2017-04</td>
                                            <td>Enrollee Requirement</td>
                                            <td>Pola Campos</td>
                                        </tr>
                                        <tr>
                                            <td>Amity Arcega</td>
                                            <td>Medical</td>
                                            <td>2017-05</td>
                                            <td>Clearance</td>
                                            <td>Faith Gaden</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>  
            </section>
</aside>
@endsection