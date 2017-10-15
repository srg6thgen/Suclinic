<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>SUClinic | @yield('title')</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <!-- global css -->
    {!!Html::style('css/bootstrap.min.css')!!}
   
    <!-- font Awesome -->
    {!!Html::style('vendors/font-awesome-4.2.0/css/font-awesome.min.css')!!}
    {!!Html::style('css/styles/black.css')!!}
    {!!Html::style('css/panel.css')!!}
    {!!Html::style('css/metisMenu.css')!!}
 
    <!-- end of global css -->    
    <!--page level css -->
    {!!Html::style('vendors/fullcalendar/css/fullcalendar.css')!!}
    {!!Html::style('css/pages/calendar_custom.css')!!}
    {!!Html::style('vendors/jvectormap/jquery-jvectormap.css')!!}
    {!!Html::style('vendors/animate/animate.min.css')!!}
    {!!Html::style('css/only_dashboard.css')!!}

    <!--end of page level css-->
    {!!Html::style('css/pages/form2.css')!!}
    {!!Html::style('css/pages/form3.css')!!}
    {!!Html::style('vendors/jasny-bootstrap/css/jasny-bootstrap.min.css')!!}
    {!!Html::style('vendors/validation/dist/css/bootstrapValidator.min.css')!!}


    <!--tables-->
    {!!Html::style('vendors/datatables/css/dataTables.colReorder.min.css')!!}
    {!!Html::style('vendors/datatables/css/dataTables.scroller.min.css')!!}
    {!!Html::style('vendors/datatables/css/dataTables.bootstrap.css')!!}
    {!!Html::style('css/pages/tables.css')!!}
    {!!Html::style('css/pages/form_layouts.css')!!}

    {!!Html::style('css/pages/icon.css')!!}
    
    {!!Html::style('css/pages/buttons.css')!!}

    <link rel="stylesheet" type="text/css" href="vendors/datatables/css/dataTables.colReorder.min.css" />
    <link rel="stylesheet" type="text/css" href="vendors/datatables/css/dataTables.scroller.min.css" />
    <link rel="stylesheet" type="text/css" href="vendors/datatables/css/dataTables.bootstrap.css" />
    <link href="css/pages/tables.css" rel="stylesheet" type="text/css">

    <link href="vendors/modal/css/component.css" rel="stylesheet" />



</head>

<body class="skin-josh">
@include('layouts.doctor.header')

  <div class="wrapper row-offcanvas row-offcanvas-left">
  @include('layouts.doctor.sidebar')
    @section ('content')



  @show
  </div>


    
     <a id="back-to-top" href="#" class="btn btn-primary btn-lg back-to-top" role="button" title="Return to top" data-toggle="tooltip" data-placement="left">
        <i class="livicon" data-name="plane-up" data-size="18" data-loop="true" data-c="#fff" data-hc="white"></i>
    </a>

     {!!Html::script('js/jquery-1.11.1.min.js')!!}
     {!!Html::script('js/bootstrap.min.js')!!}
    
    <!--livicons-->
    {!!Html::script('vendors/livicons/minified/raphael-min.js')!!}
    {!!Html::script('vendors/livicons/minified/livicons-1.4.min.js')!!}
    {!!Html::script('js/josh.js')!!}
    {!!Html::script('js/metisMenu.js')!!}
    {!!Html::script('vendors/holder-master/holder.js')!!}
  
    <!-- end of global js -->
    <!-- begining of page level js -->
    <!--  todolist-->

    {!!Html::script('vendors/jasny-bootstrap/js/jasny-bootstrap.min.js')!!}
    {!!Html::script('vendors/validation/dist/js/bootstrapValidator.min.js')!!}
    {!!Html::script('js/pages/validation.js')!!}

        <!-- end of page level js -->
    {!!Html::script('js/todolist.js')!!}
    <!-- EASY PIE CHART JS -->

    {!!Html::script('vendors/charts/easypiechart.min.js')!!}
    {!!Html::script('vendors/charts/jquery.easypiechart.min.js')!!}
    
    <!--for calendar-->
    {!!Html::script('vendors/fullcalendar/fullcalendar.min.js')!!}
    {!!Html::script('vendors/fullcalendar/calendarcustom.min.js')!!}

    <!--   Realtime Server Load  -->
    {!!Html::script('vendors/charts/jquery.flot.min.js')!!}
    {!!Html::script('vendors/charts/jquery.flot.resize.min.js')!!}

    <!--Sparkline Chart-->
    {!!Html::script('vendors/charts/jquery.sparkline.js')!!}


    <!-- Back to Top-->
    {!!Html::script('vendors/countUp/countUp.js')!!}
    <!--   maps -->
    {!!Html::script('vendors/jvectormap/jquery-jvectormap-1.2.2.min.js')!!}
    {!!Html::script('vendors/jvectormap/jquery-jvectormap-world-mill-en.js')!!}
    {!!Html::script('vendors/jscharts/Chart.js')!!}


     <!--tables-->
     {!!Html::script('vendors/datatables/jquery.dataTables.min.js')!!}
     {!!Html::script('vendors/datatables/dataTables.tableTools.min.js')!!}
     {!!Html::script('vendors/datatables/dataTables.colReorder.min.js')!!}
     {!!Html::script('vendors/datatables/dataTables.scroller.min.js')!!}
     {!!Html::script('vendors/datatables/dataTables.bootstrap.js')!!}
     {!!Html::script('js/pages/table-advanced.js')!!}
        

    <!--end tables-->


   <script type="text/javascript">
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
            events: [{
                title: 'Client Meeting',
                start: new Date(y, m, 10),
                backgroundColor: "#5bc0de"
            }],
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
    });
    </script>
</body>
</html>