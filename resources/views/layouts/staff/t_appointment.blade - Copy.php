@extends('layouts.staff.master')
@section('title', 'Appointment')
@section('content')
    @parent
<aside class="right-side">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>Appointment</h1>
                </section>
                <!-- Main content -->
               <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="box">
                                <div class="box-title">
                                    <h3>Setup</h3>
                                    <div class="pull-right box-toolbar">
                                        <a href="#" class="btn btn-link btn-xs" data-toggle="modal" data-target="#myModal">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div id='external-events'>
                            
                                    
                                    </div>
                                </div>
                                <div class="box-footer">
                                    <a href="#" class="btn btn-info btn-block" data-toggle="modal" data-target="#myModal">Create New Appointment</a>
                                </div>
                                      <div class="box-footer">
                                    <a href="#" class="btn btn-warning btn-block" data-toggle="modal" data-target="#myModal">Cancel Appointment</a>
                                </div>
                            </div>
                            <!-- /.box --> </div>
                        <div class="col-md-9">
                            <div class="box">
                                <div class="box-body">
                                    <div id="calendar"></div>
                                </div>
                            </div>
                            <!-- /.box --> </div>
                        <!-- /.col --> </div>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">
                                        <i class="fa fa-plus"></i>
                                        Add Appointment
                                    </h4>
                                </div>
                                <div class="modal-body">
                                      <label for="e1" class="control-label">
                                        Patient
                                    </label>
                                    <div class="input-group">

                                        <input type="text" id="new-event" class="form-control" placeholder="Patient">
                                        <div class="input-group-btn">
                                            <button type="button" id="color-chooser-btn" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                                Type
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu pull-right" id="color-chooser">
                                                <li>
                                                    <a class="palette-primary" href="#">Consult</a>
                                                </li>
                                                <li>
                                                    <a class="palette-success" href="#">Operational</a>
                                                </li>
                                                <li>
                                                    <a class="palette-info" href="#">Info</a>
                                                </li>
                                      
                                            </ul>
                                        </div>
                                        <!-- /btn-group --> </div>

                                            <div class="form-group">
                                    <label for="e1" class="control-label">
                                        Doctor
                                    </label>
                                    <select id="e1" class="form-control select2">
                                        <optgroup label="Employee-Patient">
                                            <option value="AK">Ezekiel Cruz</option>
                                            <option value="HI">Jose Luna</option>
                                        </optgroup>
                                        <optgroup label="Student-Patient">
                                            <option value="CA">Ruby Melchor</option>
                                            <option value="NV">Richard Santos</option>
                                            <option value="OR">Marckus Oregon</option>
                                            <option value="WA">Marck Washington</option>
                                        </optgroup>
                                   
                                    </select>
                                </div>
                      
                                <div class="form-group">
                                        <label>Time:</label>
                                        <input id="timepicker1" type="text" class="input-small form-control">
                                        <span class="add-on">
                                            <i class="icon-time"></i>
                                        </span>
                                    </div>
                          </div>
                                <div class="modal-footer">
                                        <button type="button" class="btn btn-primary pull-right"  data-dismiss="modal">
                                        <i class="glyphicon glyphicon-plus-sign"></i>
                                            Add
                                            
                                        </button>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </aside>

        @endsection