@extends('layouts.staff.master')
@section('title', 'Medicine Issuance')
@section('content')
    @parent

<aside class="right-side">
            <!-- Main content -->
            <section class="content-header">
                <h1></h1>
          
            </section>
    <section class="content">
     
              <div class="row">

                                    <div class="col-lg-12">
                                        <div class="panel panel-primary">
                                            <div class="panel-heading">
                                                <h3 class="panel-title">
                                                    <i class="livicon" data-name="doc-portrait" data-c="#fff" data-hc="#fff" data-size="18" data-loop="true"></i>
                                                Issue Medicine
                                                </h3>
                                                <span class="pull-right">
                                                    <i class="fa fa-fw fa-chevron-up clickable"></i>
                                                   
                                                </span>
                                            </div>
                                            <div class="panel-body">
             <form method="POST" action="{{ url('Issue_Med', ['Issuance' =>$Issuance, 'patient_id'=>$patient_id]) }}">
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
                                        <label>Stock Medicine</label>
                                                         <select id="e1" name="medstock" class="form-control select2">
                                                           <optgroup label="Near Expiration">
                                    @foreach($stocked_near_expired as $key =>$pe)
                                             <option value= "{{ $pe->medicine_stored_id}}"> <strong>{{ $pe->medicine_branded_name}}</strong> {{Carbon\Carbon::parse($pe->medicine_expiry_date)->format('F j, Y') }} (<i>Quantity: {{  $pe->medicine_stored_qty }}</i>)</option>
                                         @endforeach
                                        </optgroup>


                                                 <optgroup label="Stocked Medicine">
                                    @foreach($stocked_medicine as $key =>$sm)
                                             <option value= "{{ $sm->medicine_stored_id}}"> <strong>{{ $sm->medicine_branded_name}}</strong> {{Carbon\Carbon::parse($sm->medicine_expiry_date)->format('F j, Y') }} (<i>Quantity:{{  $sm->medicine_stored_qty }}</i>)</option>
                                         @endforeach
                                        </optgroup>
                                   
                                    </select>
                                    </div>
                            
                                                  <div class="form-group">
                                        <label>Quantity</label>
                            


                                    <input class="form-control" placeholder="Input medicine quantity" name="quantity" id="utility_number" required>
                                       
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
                                     <i class="livicon" data-name="responsive" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                      
                                </h3>
                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-bordered" id="table1">
                          <thead>
                                                        <tr>
                              
                                                        <th>Stock No</th>
                                                        <th>Medicine</th>
                                                        <th>
                                                            Quantity
                                                        </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($issuemedvalue as $key =>$i)
                                                         <tr>
                                
                                                                <td>{{ $i->medicine_stored_no}}</td>     
                                                                <td>{{ $i->medicine_branded_name}}</td>
                                                                <td>{{ $i->medicine_issuance_value_qty}}</td>
                                                              
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
                                                            <a href="" class="btn btn-primary" value="Submit">Create Issuance </a>
                                                        </div>
                            </div>
                            </div>
                
                        </div>
                    </div>
                </div>


                        <div class="modal fade in" id="full-widthdone" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content md-content-white">
                            <div class="modal-header ">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">Item Stored List</h4>
                            </div>
                            <div class="modal-body">
                                <div class="col-lg">
                           
                                                                <h4>Are you sure you are done in patient's issuance?</h4>
                                                  
                                      
                                 <div class="modal-footer">
                                                            <button type="button" data-dismiss="modal" class="btn" href="">No</button>
                                                            <a  href="{{ url('staff-dashboard') }}" class="btn btn-primary" value="Submit">Yes</a>
                                                        </div>
                            </div>
                            </div>
                
                        </div>
                    </div>
                </div>

                                    <div class="row">
                                       <div class="col-lg-12">

                                  <a class="btn btn-primary btn-large pull-right" data-toggle="modal" data-href="#full-widthdone" href="#full-widthdone"><span class="glyphicon glyphicon-check " ></span>Done</a>

                                            <a class=" pull-right"></a>

                                   <a class="btn btn-success btn-large pull-right"  href="{{ route('invoice-issuance', ['Issuance'=>$Issuance, 'patient_id'=>$patient_id]) }}"><span class="glyphicon glyphicon-print " ></span>Print</a>
                                    

                                   </div>
                                    </div>

            </section>

</aside>

        @endsection