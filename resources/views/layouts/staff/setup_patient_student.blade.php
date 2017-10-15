@extends('layouts.staff.master')
@section('title', 'Patient Setup')
@section('content')
    @parent

<aside class="right-side">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <!--section starts-->
                <h1>Student Record List</h1>
             
            </section>
            <!--section ends-->
            <section class="content">
             <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-primary filterable" style="overflow:auto;">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                     <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    List of Student
                                </h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-bordered" id="table1">
                                      <thead>
                                        <tr>

                                            <th>Student Name</th>
                                            <th>Student Code</th>
                                            <th>Student Course</th>
                                            <th>Birthdate</th>
                                            <th>    </th>
                                        </tr>
                                    </thead>
                                     <tbody>
                                        <tr>

                                            <td>Mark Ligaya</td>
                                            <td>PT-000-0-A-01</td>
                                            <td>Student</td>
                                            <td>
                                               10/14/97
                                            </td>
                                             <td>
                                                    <a href="#" class="btn default btn-xs red-stripe">Create Account</a>
                                                </td>
                                        </tr>
                                    <tr>

                                            <td>Joseph Samson</td>
                                            <td>PT-000-0-A-02</td>
                                            <td>Faculty</td>
                                            <td>
                                               01/09/98
                                            </td>
                                             <td>
                                                    <a href="#" class="btn default btn-xs red-stripe">Create Account</a>
                                                </td>
                                        </tr>
                                       <tr>

                                            <td>Sony Aguila</td>
                                            <td>PT-000-0-A-03</td>
                                            <td>Admin</td>
                                            <td>
                                               07/19/97
                                            </td>
                                             <td>
                                                    <a href="#" class="btn default btn-xs red-stripe">Create Account</a>
                                                </td>
                                        </tr>
                                    <tr>

                                            <td>Jeffrey Caramoan</td>
                                            <td>PT-000-0-A-05</td>
                                            <td>Student</td>
                                            <td>
                                               07/24/97
                                            </td>
                                             <td>
                                                    <a href="#" class="btn default btn-xs red-stripe">Create Account</a>
                                                </td>
                                        </tr>
                                       
                                    
                                       

                                            
                                       
                                     
                                    
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
               
                <!-- row-->
               
                <!-- row-->
             
              
                <!-- Third Basic Table Ends Here-->
                <!--delete modal starts here-->
                <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title custom_align" id="Heading">
                                    Delete this entry
                                </h4>
                            </div>
                            <div class="modal-body">
                                <div class="alert alert-warning">
                                    <span class="glyphicon glyphicon-warning-sign"></span>
                                    Are you sure you want to delete this Record?
                                </div>
                            </div>
                            <div class="modal-footer ">
                                <button type="button" class="btn btn-warning">
                                    <span class="glyphicon glyphicon-ok-sign"></span>
                                    Yes
                                </button>
                                <button type="button" class="btn btn-warning" data-dismiss="modal">
                                    <span class="glyphicon glyphicon-remove"></span>
                                    No
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.modal ends here -->
            </section>
            <!-- content -->
        </aside>

        @endsection