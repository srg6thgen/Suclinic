@extends('layouts.staff.master')
@section('title', 'Medicine Setup')
@section('content')
    @parent

<aside class="right-side">
            <!-- Main content -->
            <section class="content-header">
                <h1>Medicine Setup</h1>
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
                                                    Medicine Details
                                                </h3>
                                                <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                   
                                                </span>
                                            </div>
                                            <div class="panel-body">
                                             <form method="POST" class="form-horizontal" action="{{ url('ManageMedicine') }}">
                                             {{ csrf_field() }}
                                                <div class="row">
                             
                                                  
                                                            <div class="form-group col-md-6" >
                                                                <label class="control-label col-md-3" for="firstname">Generic Name:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" name="generic_name" class="form-control" id="generic_name" placeholder="" required=""></div>
                                                            </div>
                                                            
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label col-md-3" for="inputEmail">Precautions:</label>
                                                                <div class="col-md-9">
                                                                    <textarea type="text" name="medicine_precautions" class="form-control" id="medicine_precautions" placeholder="" required=""></textarea></div>
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <label class="control-label col-md-3" for="middlename">Branded Name:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" name="branded_name" class="form-control" id="branded_name" placeholder=""></div>
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <label class="control-label col-md-3" for="lastname">Company:</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" name="medicine_branded"class="form-control" id="medicine_branded" placeholder="" required=""></div>
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <label class="control-label col-md-3">Select Packaging:</label>
                                                                 <div class="col-md-9">
                                                                <select id="medicine_packaging" class="form-control select2" name="medicine_packaging">
                                      
                                                                    <option value="Blister Packs">Blister Packs</option>
                                                                    <option value="Bottles">Bottles</option>
                                                                    <option value="Temperature">Temperature</option>
                                                                    <option value="Counterfeiting">Counterfeiting</option>
            
                                                                </select>
                                
                                                                </div>
                                                            </div>

                                                            <div class="form-group col-md-6">
                                                                <label class="control-label col-md-3" for="ZipCode">Dosage</label>
                                                                <div class="col-md-9">
                                                                    <input type="text" class="form-control" name="medicine_dosage" id="medicine_dosage" placeholder="" required=""></div>
                                                            </div>
                                                            
                        
                                                               

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




      
                     
            



            </section>


            <section class="content">
             <div class="row">
                         <div class="col-lg-12">
                        <div class="panel panel-primary filterable" style="overflow:auto;">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                     <i class="livicon" data-name="list-ul" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                    List of Medicine
                                </h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-bordered" id="table1">
                                      <thead>
                                        <tr>

                                            <th>Generic Name</th>
                                            <th>Branded Name</th>
                                            <th>Medicine Dosage</th>
                                            <th>Date Added</th>
                                          
                              
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($medicine as $key =>$m)
                                        <tr>
                                            <td>{{ $m->medicine_generic_name}}</td>                          
                                            <td>{{ $m->medicine_branded_name}}</td>                       
                                            <td>{{ $m->medicine_dosage}}</td>
                                            <td>{{ $m->medicine_date_added}}</td>                          
                                        
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