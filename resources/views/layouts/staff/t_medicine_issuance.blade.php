@extends('layouts.staff.master')
@section('title', 'Medicine Issuance')
@section('content')
    @parent

<aside class="right-side">
            <!-- Main content -->
            <section class="content-header">
                <h1>Medicine Issuance</h1>
          
            </section>


            <section class="content">
             <div class="row">
                         <div class="col-lg-12">
                        <div class="panel panel-primary filterable" style="overflow:auto;">
                            <div class="panel-heading">
                                <h3 class="panel-title">
                                     <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                      
                                </h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-bordered" id="table1">
                          <thead>
                                                        <tr>
                                                       <th style="display:none;">Patient Id</th>
                                                        <th>Patient No</th>
                                                        <th>Name</th>
                                                        <th>
                                                            Action
                                                        </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($patient as $key =>$p)
                                                         <tr>
                                                                <td style="display:none;">{{ $p->patient_id}}</td>
                                                                <td>{{ $p->patient_account_no}}</td>     
                                                                <td>{{ $p->first_name . " " . $p->last_name}}</td>
                                                                 <td>
                                                      

                                                                <div class="col-sm-1">
                                                                    <a data-toggle="modal" data-href="#responsive" href="{{ route('Issuance_List', ['patient_id' =>$p->patient_id]) }}">

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


<!--MODAL START-------->
                        <div class="modal fade in" id="full-width" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content md-content-white">
                            <div class="modal-header ">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Item Stored List</h4>
                            </div>
                            <div class="modal-body">
                                <div class="col-lg">
                     
                           
                                <table class="table table-striped table-bordered" id="table2">
                                      <thead>
                                        <tr>

                                            <th>Lot#</th>
                                            <th>Quantity</th>
                                            <th>Expiry Date</th>
                                            <th>    </th>
                                        </tr>
                                    </thead>
                                     <tbody>
                                        <tr>

                                          
                                            
                                            <td>000-01</td>
                                            <td>97</td>
                                            <td>
                                               10/14/17
                                            </td>
                                             <td>
                                                      <a data-toggle="modal" href="#stack2" class="btn default btn-xs red-stripe">Select</a>
                                                </td>
                                        </tr>
                                    <tr>

                                          
                                            <td>000-02</td>
                                            <td>25</td>
                                            <td>
                                               01/09/18
                                            </td>
                                             <td>
                                                   <a data-toggle="modal" href="#stack2" class="btn default btn-xs red-stripe">Select</a>
                                                </td>
                                        </tr>
                                 
                                    </tbody>
                                </table>
                         
                        
                    </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

                  <div class="modal fade bs-example-modal-md in" id="stack2" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
                    <div class="modal-dialog modal-md">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Issuance Details</h4>
                            </div>
                            <div class="modal-body">
                                <p>
                                   
                                            <div class="form-group">
                                    <label for="e1" class="control-label">
                                        Patient
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
                                </p>
                                <p>
                                        <div class="form-group">
                                         <label for="e1" class="control-label">Quantity</label>
                                        <div class="form-group">
                                            <input id="demo_vertical" type="text" value="" name="demo_vertical">
                                        </div>
                                    </div>
                                </p>
                            </div>
                            <div class="modal-footer">
                
                                    <button type="reset" class="btn btn-primary" value="Submit"><span class="glyphicon glyphicon-floppy-disk" title="Submit"></span></button>
                            </div>

                        </div>
                    </div>
                </div>
            </section>

</aside>

        @endsection