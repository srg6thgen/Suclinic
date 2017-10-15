<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>MedSys | Setup Appointment Type</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="vendors/font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/styles/black.css" rel="stylesheet" type="text/css" id="colorscheme" />
    <link href="css/panel.css" rel="stylesheet" type="text/css"/>
    <link href="css/metisMenu.css" rel="stylesheet" type="text/css"/>
    <!-- end of global css -->
    <!--page level css -->
        <link href="vendors/daterangepicker/css/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!--select css-->
    <link href="vendors/select2/select2.css" rel="stylesheet" />
    <link rel="stylesheet" href="vendors/select2/select2-bootstrap.css" />


    <link href="vendors/fullcalendar/css/fullcalendar.css" rel="stylesheet" type="text/css" />
    <link href="css/pages/calendar_custom.css" rel="stylesheet" type="text/css" />

    <link href="vendors/clockface/css/clockface.css" rel="stylesheet" />
    <link href="vendors/colorpicker/css/bootstrap-colorpicker.min.css" rel="stylesheet" />
    <link href="vendors/timepicker/css/bootstrap-timepicker.min.css" rel="stylesheet" />
    <link href="vendors/datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen" />
    <link href="vendors/touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" media="all" />
    <link href="vendors/multiselect/css/bootstrap-multiselect.css" rel="stylesheet" type="text/css" />
    <link href="vendors/switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" />
    <link href="vendors/spinner/dist/bootstrap-spinner.css" rel="stylesheet" />

    <script src="js/jquery213.js"></script>
    <script src="js/moment.js"></script>
   
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>

</head>

<body class="skin-josh">
 <header class="header">
        <a href="index.html" class="logo">
            <img src="img/logoMed.png" alt="Logo">
        </a>
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <div>
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <div class="responsive_nav"></div>
                </a>
            </div>
            <div class="navbar-right">
                <ul class="nav navbar-nav">
                   
                    </li>
                    <li class="dropdown notifications-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="livicon" data-name="bell" data-loop="true" data-color="#e9573f" data-hovercolor="#e9573f" data-size="28"></i>
                            <span class="label label-warning">7</span>
                        </a>
                        <ul class=" notifications dropdown-menu">
                            <li class="dropdown-title">You have 7 notifications</li>
                            <li>
                                <!-- inner menu: contains the actual data -->
                                <ul class="menu">
                                    <li>
                                        <i class="livicon danger" data-n="timer" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">after a long time</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            Just Now
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon success" data-n="gift" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">Jef's Birthday today</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            Few seconds ago
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon warning" data-n="dashboard" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">out of space</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            8 minutes ago
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon bg-aqua" data-n="hand-right" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">New friend request</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            An hour ago
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon danger" data-n="shopping-cart-in" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">On sale 2 products</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            3 Hours ago
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon success" data-n="image" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">Lee Shared your photo</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            Yesterday
                                        </small>
                                    </li>
                                    <li>
                                        <i class="livicon warning" data-n="thumbs-up" data-s="20" data-c="white" data-hc="white"></i>
                                        <a href="#">David liked your photo</a>
                                        <small class="pull-right">
                                            <span class="livicon paddingright_10" data-n="timer" data-s="10"></span>
                                            2 July 2014
                                        </small>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="#">View all</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown user user-menu">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <img data-src="holder.js/35x35/#fff:#000" width="35" class="img-circle img-responsive pull-left" height="35" alt="riot">
                            <div class="riot">
                                <div>
                                    Riot
                                    <span>
                                        <i class="caret"></i>
                                    </span>
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- User image -->
                            <li class="user-header bg-light-blue">
                                <img data-src="holder.js/90x90/#fff:#000" class="img-responsive img-circle" alt="User Image">
                                <p class="topprofiletext">{{ Auth::user()->first_name }}</p>
                            </li>
                            <!-- Menu Body -->
                            <li>
                                <a href="#">
                                    <i class="livicon" data-name="user" data-s="18"></i>
                                    My Profile
                                </a>
                            </li>
                            <li role="presentation"></li>
                            <li>
                                <a href="#">
                                    <i class="livicon" data-name="gears" data-s="18"></i>
                                    Account Settings
                                </a>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">
                                <div class="pull-left">
                                    <a href="lockscreen.html">
                                        <i class="livicon" data-name="lock" data-s="18"></i>
                                        Lock
                                    </a>
                                </div>
                                <div class="pull-right">
                                    <a href="{{ route('logout') }}">
                                        <i class="livicon" data-name="sign-out" data-s="18"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

  <div class="wrapper row-offcanvas row-offcanvas-left">
   <aside class="left-side sidebar-offcanvas">
            <section class="sidebar ">
                <div class="page-sidebar  sidebar-nav">
                    <div class="nav_icons">
                                <ul class="sidebar_threeicons">
                            <li>
                                <a href="{{ route('Appointment.index') }}">
                                    <i class="livicon" data-name="calendar" title="Appointment" data-loop="true" data-color="#f6bb42" data-hc="#f6bb42" data-s="25"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('ManageWalkin.index') }}">
                                    <i class="livicon" data-name="inbox-in" title="Walk-In" data-loop="true" data-color="#37bc9b" data-hc="#37bc9b" data-s="25"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('Issuance.index') }}">
                                    <i class="livicon" data-name="edit" title="Issuance" data-loop="true" data-color="#42aaca" data-hc="#42aaca" data-s="25"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('ManageVitals.index') }}">
                                    <i class="livicon" data-name="heart" title="Vital Sign" data-loop="true" data-color="#e9573f" data-hc="#e9573f" data-s="25"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
               
                    <ul id="menu" class="page-sidebar-menu">
                        <li class="active">
                            <a href="{{ route('staff_dashboard') }}">
                                <i class="livicon" data-name="home" data-size="18" data-c="#5bc0de" data-hc="#5bc0de" data-loop="true"></i>
                                <span class="title" ">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="gears" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                                <span class="title">System Setup</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                             
                            <li>
                            <a href="{{ route('AddPatient.index') }}">
                                <i class="livicon" data-name="user" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                                <span class="title">New Patient</span>
                            </a>
                 
                            </li>

                                <li>
                                    <a href="{{ route('ManageMedicine.index') }}">
                                        <i  class="livicon" data-name="lab" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                                        Medicine
                                    </a>
                                </li>
                                   
                                    <li>
                                    <a href="{{ route('ManageUtility.index') }}">
                                        <i  class="livicon" data-name="wrench" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                                        Utility
                                    </a>
                                </li>

                                <li>
                                    <a href="{{ route('ManageRoom.index') }}">
                                        <i  class="livicon" data-name="crop" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                                        Room
                                    </a>
                                </li>
                            
                        
                            </ul>
                        </li>
                           
                            <li>
                            <a href="#">
                                <i class="livicon" data-name="dropbox" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                                <span class="title">Inventory</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                            <li>
                                    <a href="{{ route('ManageMedicineStored.index') }}">
                                        <i  class="livicon" data-name="lab" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                                        Medicine Management
                                    </a>
                                </li>
                                   
                                    <li>
                                    <a href="{{ route('ManageUtilityStored.index') }}">
                                        <i  class="livicon" data-name="wrench" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                                        Utility Management
                                    </a>
                                </li>

                            </ul>
                        </li>

                         <li>
                            <a href="#">
                                <i class="livicon" data-name="retweet" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                                <span class="title">Transactions</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                  <li>
                                    <a href="{{ route('Appointment.index') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Appointment
                                    </a>
                                </li>

                                   <li>
                                    <a href="{{ route('ManageWalkin.index') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Walk-In
                                    </a>
                                </li>
                                   
                            <li>
                                    <a href="{{ route('Issuance.index') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Issuance
                                    </a>
                                </li>
                                 <li>
                                    <a href="{{ route('ManageVitals.index') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Vital Sign
                                    </a>
                                </li>
                          

                            </ul>
                        </li>
             
                     
                    </ul>
                    <!-- END SIDEBAR MENU -->
                </div>
            </section>
            <!-- /.sidebar -->
        </aside>
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
 @if ($errors->any())
                                      <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                   <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                     </div>
                                    @endif
                                    
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
                                     {!! $calendar->calendar() !!}
                                     {!! $calendar->script() !!}
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
                                 <div class="form-group">
                                    <form method="POST" class="form-horizontal" action="{{ url('Appointment') }}">
                                         {{ csrf_field() }}
                                    <label for="e1" class="control-label">
                                        Doctor
                                    </label>
                                    <select id="e1" name="doctor" class="form-control select2">
                                          
                                           
                                             @foreach($doctor as $key =>$d)
                                             <option value= "{{ $d->doctor_id}}"> {{ $d->first_name .' '.$d->last_name}}</option>
                                         @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="e1" class="control-label">
                                        Patient
                                    </label>
                                    <select id="e1" name="patient" class="form-control select2">
                                        <optgroup label="Employee">
                                    @foreach($patient_employee as $key =>$pe)
                                             <option value= "{{ $pe->patient_id}}"> {{ $pe->employee_firstname .' '.$pe->employee_lastname}} (<i>{{ $pe->patient_account_no}}</i>)</option>
                                         @endforeach
                                        </optgroup>

                                        <optgroup label="Student">
                                        @foreach($patient_student as $key =>$ps)
                                            <option value= "{{ $ps->patient_id}}"> {{ $ps->student_firstname .' '.$ps->student_lastname}} (<i>{{ $ps->patient_account_no}}</i>)</option>
                                         @endforeach
                                        </optgroup>
                                   
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="e1" class="control-label">
                                        Appointment Type
                                    </label>
                                    <select id="e1" name="appointment_type" class="form-control select2">
                                         @foreach($apptype as $key =>$a)
                                             <option value= "{{ $a->appointment_type_id}}"> {{ $a->appointment_type_title}} (<i>{{ $a->appointment_type_duration}}mins</i>)</option>
                                         @endforeach
                                    </select>
                                </div>
                      
                                <div class="form-group">
                                   <label>Appointment Time</label>
                                        <div class="input-group date form_datetime" data-date="{{Carbon\Carbon::now()}}" id="datetimepickers" >
                                            <input size="16" type="text" value=""  id="datetimepicker5" class="form-control" name="appointment_time" onkeypress="return isNumberKey(event)"/>

                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-remove"></span>
                                            </span>

                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-th"></span>
                                            </span>

                                        </div>

<!--                                         <div class="form-group">
            <div class="input-group date" id="datetimepicker">
                <input type="text" class="form-control" />  <span class="input-group-addon"><span class="glyphicon-calendar glyphicon"></span></span>
            </div> -->



                                    </div>
                                <div class="form-group">
                                    <label for="e1" class="control-label">
                                        Reason for Appointment
                                    </label>
                                     <textarea class="form-control" id="message" name="reason" placeholder="Please enter your message here..." rows="3"></textarea>
                                </div>

                                        
                          </div>
                                <div class="modal-footer">
                                        <button type="submit" class="btn btn-primary pull-right"  value="Submit">
                                        <i class="glyphicon glyphicon-plus-sign"></i>
                                            Add
                                            
                                        </button>


                                
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </section>
            </aside>
  </div>


    
     <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>

         <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!--livicons-->
        <script src="vendors/livicons/minified/raphael-min.js"></script>
        <script src="vendors/livicons/minified/livicons-1.4.min.js"></script>
        <script src="js/josh.js" type="text/javascript"></script>
        <script src="js/metisMenu.js" type="text/javascript"></script>
        <script src="vendors/holder-master/holder.js"></script>
        <!-- end of global js -->
        <!-- begining of page level js -->
    <!-- date-range-picker -->
    <script src="vendors/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <script src="vendors/select2/select2.js" type="text/javascript"></script>

     <script src="vendors/iCheck/icheck.js" type="text/javascript"></script>
    <script src="vendors/iCheck/demo/js/custom.min.js" type="text/javascript"></script>
    <script src="vendors/autogrow/js/jQuery-autogrow.js" type="text/javascript"></script>
    <script src="vendors/maxlength/bootstrap-maxlength.min.js" type="text/javascript"></script>
    <script src="vendors/card/jquery.card.js" type="text/javascript"></script>
    <script src="js/pages/formelements2.js" type="text/javascript"></script>

    <script src="vendors/fullcalendar/fullcalendar.js" type="text/javascript"></script>
    <script src="vendors/fullcalendar/calendarcustom.js" type="text/javascript"></script> <!-- aaack -->


        <script src="vendors/colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!--time picker-->
    <script src="vendors/timepicker/js/bootstrap-timepicker.min.js"></script>
    <!--datetime picker-->
    <script type="text/javascript" src="vendors/datetimepicker/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript" src="vendors/datetimepicker/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
    <!--clockface-->
    <script src="vendors/clockface/js/clockface.js"></script>
    <!--touchspin-->
    <script src="vendors/touchspin/dist/jquery.bootstrap-touchspin.js"></script>
    <script type="text/javascript" src="vendors/multiselect/js/bootstrap-multiselect.js"></script>
    <!--switch-->
    <script src="vendors/switch/dist/js/bootstrap-switch.js"></script>
    <!--spinner-->
    <script src="vendors/spinner/dist/jquery.spinner.js"></script>
    <script src="js/pages/pickers.js"></script>


<script type="text/javascript">
             function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false;
  
    return true;
    }
     $(document).ready(function() {
     /* initialize the external events
                 -----------------------------------------------------------------*/

        function ini_events(ele) {
            ele.each(function() {

                // create an Event Object (http://arshaw.com/fullcalendar/docs/event_data/Event_Object/)
                // it doesn't need to have a start or end
                var eventObject = {
                    title: $.trim($(this).text()) // use the element's text as the event title
                };

                // store the Event Object in the DOM element so we can get to it later
                $(this).data('eventObject', eventObject);

                // make the event draggable using jQuery UI
                $(this).draggable({
                    zIndex: 1070,
                    revert: true, // will cause the event to go back to its
                    revertDuration: 0 //  original position after the drag
                });

            });
        }
        ini_events($('#external-events div.external-event'));

        /* initialize the calendar
                 -----------------------------------------------------------------*/
        //Date for the calendar events (dummy data)
        var date = new Date();
        var d = date.getDate(),
            m = date.getMonth(),
            y = date.getFullYear();
        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            buttonText: {
                prev: "<span class='fa fa-caret-left'></span>",
                next: "<span class='fa fa-caret-right'></span>",
                today: 'today',
                month: 'month',
                week: 'week',
                day: 'day'
            },
            //Random events
            editable: true,
            droppable: true, // this allows things to be dropped onto the calendar !!!
            drop: function(date, allDay) { // this function is called when something is dropped

                // retrieve the dropped element's stored Event Object
                var originalEventObject = $(this).data('eventObject');

                // we need to copy it, so that multiple events don't have a reference to the same object
                var copiedEventObject = $.extend({}, originalEventObject);

                // assign it the date that was reported
                copiedEventObject.start = date;
                copiedEventObject.allDay = allDay;
                copiedEventObject.backgroundColor = $(this).css("background-color");
                copiedEventObject.borderColor = $(this).css("border-color");

                // render the event on the calendar
                // the last `true` argument determines if the event "sticks" (http://arshaw.com/fullcalendar/docs/event_rendering/renderEvent/)
                $('#calendar').fullCalendar('renderEvent', copiedEventObject, true);

                // is the "remove after drop" checkbox checked?
                if ($('#drop-remove').is(':checked')) {
                    // if so, remove the element from the "Draggable Events" list
                    $(this).remove();
                }

            }
        });

        /* ADDING EVENTS */
        var currColor = "#418BCA"; //default
        //Color chooser button
        var colorChooser = $("#color-chooser-btn");
        $("#color-chooser > li > a").click(function(e) {
            e.preventDefault();
            //Save color
            currColor = $(this).css("background-color");
            //Add color effect to button
            colorChooser
                .css({
                    "background-color": currColor,
                    "border-color": currColor
                })
                .html($(this).text() + ' <span class="caret"></span>');
        });
        $("#add-new-event").click(function(e) {
            e.preventDefault();
            //Get value and make sure it is not null
            var val = $("#new-event").val();
            if (val.length == 0) {
                return;
            }

            //Create event
            var event = $("<div />");
            event.css({
                "background-color": currColor,
                "border-color": currColor,
                "color": "#fff"
            }).addClass("external-event");
            event.html(val);
            $('#external-events').prepend(event);

            //Add draggable funtionality
            ini_events(event);

            //Remove event from text input
            $("#new-event").val("");
        });



         $(".form_datetime").datetimepicker({
         format: 'yyyy-mm-dd hh:mm:ss'

    });

         

    });




$(function () {

                 $('#datetimepicker').datetimepicker({  minDate:new Date()});
           });

    </script>





</body>
</html>


        