@extends('layouts.staff.master')
@section('title', 'Room Setup')
@section('content')
    @parent

<aside class="right-side">
            <!-- Main content -->
            <section class="content-header">
                <h1>Room Setup</h1>
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
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                    <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i>
                                        Room Details
                                </h3>
                                <span class="pull-right">
                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                </span>
                            </div>
                            <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <form method="POST" class="form-horizontal" action="{{ url('ManageRoom') }}">
                                    {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>Room Number:</label>
                                           
                                                    <input type="text" name="room_number" class="form-control" id="room_number" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label>Room Name:</label>
                                        
                                                    <input type="text" name="room_name" class="form-control" id="room_name" placeholder="">
                                 
                                        </div>
                                        <div class="form-group">
                                            <label>
                                                Status
                                            </label>
                                       
                                                <select id="e1" name="roleselect" class="form-control select2">
                                                    <option value="1">Active</option>
                                                    <option value="2">Inactive</option>
                                                </select>
                                      
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

                                </div>


                            </div>
                            </div>
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
                                    List of Room
                                </h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-bordered" id="table1">
                                    <thead>
                                        <tr>
                                            <th>Room Number</th>
                                            <th>Room Name</th>
                                            <th> </th>
                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($room as $key =>$r)

                                        <tr>
                                           <td>{{ $r->room_number}}</td>                          
                                           <td>{{ $r->room_name}}</td>
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