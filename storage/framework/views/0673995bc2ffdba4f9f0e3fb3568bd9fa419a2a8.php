   <aside class="left-side sidebar-offcanvas">
            <section class="sidebar ">
                <div class="page-sidebar  sidebar-nav">
                    <div class="nav_icons">
                         <ul class="sidebar_threeicons">
                            <li>
                                <a href="<?php echo e(route('ManageUsers.index')); ?>">
                                    <i class="livicon" data-name="users-add" title="Users Management" data-loop="true" data-color="#f6bb42" data-hc="#f6bb42" data-s="25"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('ManageEmployee.index')); ?>">
                                    <i class="livicon" data-name="user" title="Employee" data-loop="true" data-color="#e9573f" data-hc="#e9573f" data-s="25"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('ManageStudent.index')); ?>">
                                    <i class="livicon" data-name="users" title="Student" data-loop="true" data-color="#42aaca" data-hc="#42aaca" data-s="25"></i>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo e(route('ManageAppointmentType.index')); ?>">
                                    <i class="livicon" data-name="calendar" title="Appointment Type" data-loop="true" data-color="#37bc9b" data-hc="#37bc9b" data-s="25"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <!-- BEGIN SIDEBAR MENU -->
                    <ul id="menu" class="page-sidebar-menu">
                        <li class="active">
                            <a href="<?php echo e(route('dashboard')); ?>">
                                <i class="livicon" data-name="home" data-size="18" data-c="#5bc0de" data-hc="#5bc0de" data-loop="true"></i>
                                <span class="title" ">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="gears" data-size="18" data-c="#5bc0de" data-hc="#5bc0de" data-loop="true"></i>
                                <span class="title">System Setup</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="<?php echo e(route('ManageUsers.index')); ?>"">
                                        <i  class="livicon" data-name="users" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                                        Users Management
                                    </a>
                                </li>
                                  <li>
                                    <a href="<?php echo e(route('ManageEmployee.index')); ?>"">
                                        <i  class="livicon" data-name="user" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                                        Employee
                                    </a>
                                </li>
                                  <li>
                                    <a href="<?php echo e(route('ManageStudent.index')); ?>">
                                         <i  class="livicon" data-name="user" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                                       Student
                                    </a>
                                </li>

                                      <li>
                                    <a href="<?php echo e(route('ManageAppointmentType.index')); ?>"">
                                        <i  class="livicon" data-name="user" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                                        Appointment Type
                                    </a>
                                </li>

                                   
                               
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">
                                <i class="livicon" data-name="wrench" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                                <span class="title">Utilities</span>
                                <span class="fa arrow"></span>
                            </a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="blog_list.html">
                                         <i  class="livicon" data-name="inbox-in" data-c="#5bc0de" data-hc="#5bc0de" data-size="18" data-loop="true"></i>
                                        Backup & Restore
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