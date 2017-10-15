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