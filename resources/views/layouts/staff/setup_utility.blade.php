@extends('layouts.staff.master')
@section('title', 'Utility Setup')
@section('content')
    @parent

<aside class="right-side">
            <!-- Main content -->
            <section class="content-header">
                <h1>Utility Setup</h1>
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

    <div class="col-md-12">
                <div class="panel panel-primary" id="hidepanel6">
                            <div class="panel-heading">
                                        <h3 class="panel-title">
                                            <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i>
                                                 Add New Utility
                                        </h3>
                                     <span class="pull-right">
                                          <i class="fa fa-fw fa-chevron-up clickable"></i>         
                                        </span>
                                            </div>
                            <div class="panel-body">
                                   <form method="POST" action="{{ url('ManageUtility') }}">
                                     {{ csrf_field() }}
                                     @if ($errors->any())
                                      <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                   <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                     </div>
                                    @endif
                                    <div class="form-group">
                                        <label>Utility No</label>
                                        <input class="form-control" placeholder="Enter Utility Number" name="utility_number" id="utility_number" required>
                                       
                                    </div>
                                    <div class="form-group">
                                        <label>Utility Name</label>
                                        <input class="form-control" placeholder="Enter Utility Name" name="utility_name" id="utility_name" required>
                                       
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea rows="3" class="form-control" name="utility_description" id="utility_description" placeholder="Enter Utility Description" required></textarea>
                                        </div>
                                   
                                                   <div class="row">
                                                        <hr>
                                                        <div style="float: right" >

                                                           <button type="reset" class="btn btn-default" value="Reset"><span class="glyphicon glyphicon-off" title="Reset" ></span>
                                                            </button>
                                                            <button type="submit" class="btn btn-primary" value="Submit"><span class="glyphicon glyphicon-floppy-disk" title="Submit"></span></button>
                                                        </div>
                                                    </div>
                                </form>                  
                             </form>
                            </div>
                    </div>
      

              </div>
                     
            </section>

            <section class="content">
             <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-primary filterable" style="overflow:auto;">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                     <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    List of Utility
                                </h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-bordered" id="table1">
                                      <thead>
                                        <tr>

                                            <th>Utility No</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>    </th>
                                        </tr>
                                    </thead>
                             <tbody>
                                        @foreach($utility as $key =>$u)

                                        <tr>
                                           <td>{{ $u->utility_number}}</td>                          
                                           <td>{{ $u->utility_name}}</td>
                                            <td>{{ $u->utility_description}}</td>
                                            <td>

                                                      
                                                             <div class="col-sm-1">
                                                                    <a href="#">
                                                                         <i class="glyphicon glyphicon-download-alt" data-toggle="modal" data-href="#full-width" href="#full-width data-size="18" data-c="#f56954" data-hc="#f56954" title="Store"></i>
                                                                    </a>

                                                                </div>
                                                

                                                                <div class="col-sm-1">
                                                                    <a data-toggle="modal" data-href="#responsive" href="#responsive">

                                                                    <span class="glyphicon glyphicon-eye-open" title="View"></span></a>
                                                                </div> 



                                                                <div class="col-sm-1">
                                                                    <a data-toggle="modal" data-href="#responsive" href="#responsive">

                                                                    <span class="glyphicon glyphicon-trash" title="View"></span></a>
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