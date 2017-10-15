@extends('layouts.doctor.master')
@section('title', 'Transaction')
@section('content')
    @parent
<aside class="right-side">
            <!-- Main content -->
            <section class="content-header">
                <h1>Transactions</h1>
                <ol class="breadcrumb">
                    <li>
                        <a href="#">
                            <i class="livicon" data-name="home" data-size="18" data-loop="true"></i>
                            Home
                        </a>
                    </li>
                    <li class="active">
                        <a href="#">Transactions</a>
                    </li>
                </ol>
            </section>

            <section class="content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-primary filterable">
                            <div class="panel-heading clearfix  ">
                                <div class="panel-title pull-left">
                                        <div class="caption">
                                            <i class="livicon" data-name="camera-alt" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                            Visit
                                        </div>
                                    
                                </div>
                                

                            </div>
                            <div class="panel-body">
                                <table class="table table-striped table-responsive" id="table1">
                                    <thead>
                                        <tr>
                                            <td><b>Name</b></td>
                                            <td><b>Visit Time</b></td>
                                            <td><b>Visit Date</b></td>
                                            <td>
                                                <b>Vitals</b>
                                            </td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Ezekiel David</td>
                                            <td>09:00 AM</td>
                                            <td>2017-07-15</td>
                                            <td>
                                                <a class="btn primary" style="height: 22px; width: 65px; padding-top: 0px; color: white;" data-toggle="modal" data-href="#stack1" href="#stack1">View</a>        
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Leandro Avena</td>
                                            <td>10:00 AM</td>
                                            <td>
                                                2017-07-16
                                            </td>
                                            <td>
                                                <a href="#" class="btn primary" style="height: 22px; width: 65px;   padding-top: 0px; color: white">View</a>        
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Christian Jeffrey Caramoan</td>
                                            <td>11:00 AM</td>
                                            <td>
                                                2017-07-17
                                            </td>
                                            <td>
                                                <a href="#" class="btn primary" style="height: 22px; width: 65px;   padding-top: 0px; color: white">View</a>        
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Paula Bernal</td>
                                            <td>12:00 PM</td>
                                            <td>
                                                2017-07-18
                                            </td>
                                            <td>
                                                <a href="#" class="btn primary" style="height: 22px; width: 65px;   padding-top: 0px; color: white">View</a>        
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Gleniel Lugtu</td>
                                            <td>01:00 PM</td>
                                            <td>2017-07-19</td>
                                            <td>
                                                <a href="#" class="btn primary" style="height: 22px; width: 65px;   padding-top: 0px; color: white">View</a>        
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Amity Faith Arcega</td>
                                            <td>02:00 PM</td>
                                            <td>
                                                2017-07-20
                                            </td>
                                            <td>
                                                <a href="#" class="btn primary" style="height: 22px; width: 65px;   padding-top: 0px; color: white">View</a>        
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Argie Joseph Bigornia</td>
                                            <td>03:00 PM</td>
                                            <td>2017-07-21</td>
                                            <td>
                                                <a href="#" class="btn primary" style="height: 22px; width: 65px;   padding-top: 0px; color: white">View</a>        
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Carlo Renoria</td>
                                            <td>04:00 PM</td>
                                            <td>
                                                2017-07-22
                                            </td>
                                            <td>
                                                <a href="#" class="btn primary" style="height: 22px; width: 65px;   padding-top: 0px; color: white">View</a>        
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Charlene Damalerio</td>
                                            <td>05:00 PM</td>
                                            <td>
                                                2017-07-23
                                            </td>
                                            <td>
                                                <a href="#" class="btn primary" style="height: 22px; width: 65px;   padding-top: 0px; color: white">View</a>        
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Mariela Aquino</td>
                                            <td>06:00 PM</td>
                                            <td>2017-07-24</td>
                                            <td>
                                                <a href="#" class="btn primary" style="height: 22px; width: 65px;   padding-top: 0px; color: white">View</a>        
                                            </td>
                                        </tr>
                                        
                                        <tr>

                                            <td>King Richwell Sambo</td>
                                            <td>07:00 PM</td>
                                            <td>
                                                2017-07-25
                                            </td>
                                            <td>
                                                <a href="#" class="btn primary" style="height: 22px; width: 65px;   padding-top: 0px; color: white">View</a>        
                                            </td>
                                        </tr>
                                        
                                        <tr>

                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>Markotto</td>
                                            <td>
                                                <a href="#" class="btn primary" style="height: 22px; width: 65px;   padding-top: 0px; color: white">View</a>        
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>
                                                JacobThornton
                                            </td>
                                            <td>
                                                <a href="#" class="btn primary" style="height: 22px; width: 65px;   padding-top: 0px; color: white">View</a>        
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                <a href="#" class="btn primary" style="height: 22px; width: 65px;   padding-top: 0px; color: white">View</a>        
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>
                                                Larrythe Bird
                                            </td>
                                            <td>
                                                <a href="#" class="btn primary" style="height: 22px; width: 65px;   padding-top: 0px; color: white">View</a>        
                                            </td>
                                        </tr>
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                    <!--- stack1 model -->
                <div class="modal fade bs-example-modal-sm in" id="stack1" tabindex="-1" role="dialog" aria-hidden="false" style="display:none;">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h2 class="modal-title">Ezekiel David</h2>
                                <h5><b>Patient Type:</b> Student</h5>

                            </div>
                            <div class="modal-body">
                                <div class="portlet box primary">
                                    <div class="portlet-title">
                                        <div class="caption">
                                            <i class="livicon" data-name="pen" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                            Vitals Result
                                        </div>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="table-scrollable">
                                            <table class="table table-bordered table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Weight</th>
                                                        <th>Height</th>
                                                        <th>Blood Pressure</th>
                                                        <th>Temperature</th>
                                                        <th>Pulse Rate</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>56 kg.</td>
                                                        <td>155 cm</td>
                                                        <td>140/90</td>
                                                        <td>39 degree Celcius</td>
                                                        <td>101 beats per minute</td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <!--lg-6 starts-->
                                    <!--basic form starts-->
                                    <div class="panel panel-info" id="hidepanel1">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                                <i class="livicon" data-name="clock" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                                Symptoms
                                            </h3>
                                            <span class="pull-right">
                                                <i class="glyphicon glyphicon-chevron-up clickable"></i>
                                                <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                                            </span>
                                        </div>
                                        <div class="panel-body">
                                            <form class="form-horizontal" action="#" method="post">
                                                <fieldset>
                                                    <!-- Name input-->
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label" for="name">Name</label>
                                                        <div class="col-md-9">
                                                            <input id="name" name="name" type="text" placeholder="Symptoms name" class="form-control"></div>
                                                    </div>
                                                    
                                                    <!-- Description body -->
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label" for="message">Description</label>
                                                        <div class="col-md-9">
                                                            <textarea class="form-control" id="message" name="message" placeholder="Please enter description here..." rows="5"></textarea>
                                                        </div>
                                                    </div>
                                                    
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <!--lg-6 starts-->
                                    <!--basic form starts-->
                                    <div class="panel panel-info" id="hidepanel1">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                                <i class="livicon" data-name="clock" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                                Diagnosis
                                            </h3>
                                            <span class="pull-right">
                                                <i class="glyphicon glyphicon-chevron-up clickable"></i>
                                                <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                                            </span>
                                        </div>
                                        <div class="panel-body">
                                            <form class="form-horizontal" action="#" method="post">
                                                <fieldset>
                                                    <!-- Name input-->
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label" for="name">Diagnosis Name</label>
                                                        <div class="col-md-9">
                                                            <input id="name" name="name" type="text" placeholder="Your name" class="form-control"></div>
                                                    </div>
                                                    
                                                    <!-- Description body -->
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label" for="message">Description</label>
                                                        <div class="col-md-9">
                                                            <textarea class="form-control" id="message" name="message" placeholder="Please enter description here..." rows="5"></textarea>
                                                        </div>
                                                    </div>
                                                    
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="panel panel-info" id="hidepanel1">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">
                                                <i class="livicon" data-name="clock" data-size="16" data-loop="true" data-c="#fff" data-hc="white"></i>
                                                Prescription
                                            </h3>
                                            <span class="pull-right">
                                                <i class="glyphicon glyphicon-chevron-up clickable"></i>
                                                <i class="glyphicon glyphicon-remove removepanel clickable"></i>
                                            </span>
                                        </div>
                                        <div class="panel-body">
                                            <form class="form-horizontal" action="#" method="post">
                                                <fieldset>
                                                    <!-- Name input-->
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label" for="name">Medicine Name:</label>
                                                        <div class="col-md-9">
                                                            <input id="name" name="name" type="text" placeholder="Medicine name" class="form-control"></div>
                                                    </div>

                                                    <!-- Quantity input-->
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label" for="name">Quantity:</label>
                                                        <div class="col-md-9">
                                                            <input id="name" name="name" type="text" placeholder="Enter quantity" class="form-control"></div>
                                                    </div>
                                                    
                                                    <!-- Description body -->
                                                    <div class="form-group">
                                                        <label class="col-md-3 control-label" for="message">Remarks</label>
                                                        <div class="col-md-9">
                                                            <textarea class="form-control" id="message" name="message" placeholder="Please enter remarks here..." rows="5"></textarea>
                                                        </div>
                                                    </div>
                                                    
                                                </fieldset>
                                            </form>
                                        </div>
                                    </div>
                                </div>

                            <div class="modal-footer">
                                <button type="button" data-dismiss="modal" class="btn">Cancel</button>
                                <button type="button" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </div>
                </div>


                </div>


            </section>

            
             

        </aside>



        @endsection