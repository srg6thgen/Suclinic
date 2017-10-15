   <aside class="left-side sidebar-offcanvas">
            <section class="sidebar ">
                <div class="page-sidebar  sidebar-nav">
                    <div class="nav_icons">
                        <ul class="sidebar_threeicons">
                            <li>
                                <a href="form_builder.html">
                                    <i class="livicon" data-name="hammer" title="Form Builder 1" data-loop="true" data-color="#42aaca" data-hc="#42aaca" data-s="25"></i>
                                </a>
                            </li>
                            <li>
                                <a href="form_builder2.html">
                                    <i class="livicon" data-name="list-ul" title="Form Builder 2" data-loop="true" data-color="#e9573f" data-hc="#e9573f" data-s="25"></i>
                                </a>
                            </li>
                            <li>
                                <a href="buttonbuilder.html">
                                    <i class="livicon" data-name="vector-square" title="Button Builder" data-loop="true" data-color="#f6bb42" data-hc="#f6bb42" data-s="25"></i>
                                </a>
                            </li>
                            <li>
                                <a href="gridmanager.html">
                                    <i class="livicon" data-name="new-window" title="Page Builder" data-loop="true" data-color="#37bc9b" data-hc="#37bc9b" data-s="25"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <!-- BEGIN SIDEBAR MENU -->
                    <ul id="menu" class="page-sidebar-menu">
                        
                        <li class="active">
                            <a href="{{ route('doctor_dashboard') }}">
                                <i class="livicon" data-name="home" data-size="18" data-c="#418BCA" data-hc="#418BCA" data-loop="true"></i>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>

                         <li>
                            <a href="{{ route('doctor_transaction') }}">
                                <i class="livicon" data-name="retweet" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                                <span class="title">Transactions</span>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="livicon" data-name="gears" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                                <span class="title">Queries</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ route('doctor_listofpatients') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        List of Patient
                                    </a>
                                </li>
                                    <li>
                                    <a href="{{ route('doctor_listofappointments') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        List of Appointments
                                    </a>
                                </li>
                                    <li>
                                    <a href="{{ route('setup_utility') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        List of Visit
                                    </a>
                                </li>
                                </li>
                                    <li>
                                    <a href="{{ route('setup_utility') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Patient History
                                    </a>
                                </li>
                            
                        
                            </ul>
                        </li>

                        <li>
                            <a href="#">
                                <i class="livicon" data-name="doc-portrait" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                                <span class="title">Reports</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ route('setup_patient_emp') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Appointment Details
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('setup_patient_stud') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Visit Details
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('setup_patient_stud') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Prescription Details
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('setup_patient_stud') }}">
                                        <i class="fa fa-angle-double-right"></i>
                                        Laboratory Request
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