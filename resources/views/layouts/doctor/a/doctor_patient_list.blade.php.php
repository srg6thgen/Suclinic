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
                        <a href="#">
                            List of Patients
                        </a>
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
                                            List of Patients
                                        </div> 
                                </div>

                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-responsive" id="table1">
                                    <thead>
                                        <tr>

                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Type</th>
                                            <th>Date Started</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                            <td>Ezekiel</td>
                                            <td>David</td>
                                            <td>Student</td>
                                            <td>
                                                2017-06-11
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Ian</td>
                                            <td>Avena</td>
                                            <td>
                                                Student
                                            </td>
                                            <td>
                                                2017-06-11
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Sinisira na</td>
                                            <td>Ang office</td>
                                            <td>Employee</td>
                                            <td>
                                                2017-06-12
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Irynne</td>
                                            <td>Gatchalian</td>
                                            <td>
                                                Employee
                                            </td>
                                            <td>
                                                2017-06-12
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Christian Jeffrey</td>
                                            <td>Caramoan</td>
                                            <td>
                                                Student
                                            </td>
                                            <td>
                                                2017-06-14
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Paula</td>
                                            <td>Bernal</td>
                                            <td>
                                                Student
                                            </td>
                                            <td>
                                                2017-06-14
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Amity</td>
                                            <td>Arcega</td>
                                            <td>Student</td>
                                            <td>
                                                2017-06-15
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Rosey</td>
                                            <td>Rosicar</td>
                                            <td>
                                                Employee
                                            </td>
                                            <td>
                                                2017-06-15
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Argie</td>
                                            <td>Bigornia</td>
                                            <td>
                                                Student
                                            </td>
                                            <td>
                                                2017-06-16
                                            </td>
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