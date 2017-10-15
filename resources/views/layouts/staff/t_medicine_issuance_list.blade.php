@extends('layouts.staff.master')
@section('title', 'Medicine Issuance')
@section('content')
    @parent

<aside class="right-side">
            <!-- Main content -->
            <section class="content-header">
                <h1>{{ $patient->last_name .', '. $patient->first_name }}'s Issuance List </h1>
          
            </section>


            <section class="content">
             <div class="row">
                         <div class="col-lg-12">
                            <div class="row">
                                   <a class="btn btn-primary btn-large pull-right" data-toggle="modal" data-href="#full-width" href="#full-width"><span class="glyphicon glyphicon-plus-sign " ></span>Issue New Medicine</a>
                                   
                            </div>
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
                              
                                                        <th>Issuance No</th>
                                                        <th>Date</th>
                                                        <th>
                                                            Action
                                                        </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($Issuance as $key =>$p)
                                                         <tr>
                                
                                                                <td>{{ $p->medicine_issuance_no}}</td>     
                                                                <td>{{ $p->medicine_issued_date}}</td>
                                                                 <td>
                                                      

                                                                <div class="col-sm-1">
                                                                    <a data-toggle="modal" data-href="#responsive" href="#responsive_{{ $p->patient_id}}">

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
                           
                                                                <h4>Are you sure you would like to add new issuance to this patient?</h4>
                                                  
                                      
                                 <div class="modal-footer">
                                                            <button type="button" data-dismiss="modal" class="btn" href="">Cancel</button>
                                                            <a href="{{ route('Create_Issue', ['patient_id' =>$patient_id]) }}" class="btn btn-primary" value="Submit">Create Issuance </a>
                                                        </div>
                            </div>
                            </div>
                
                        </div>
                    </div>
                </div>

            </section>

</aside>

        @endsection