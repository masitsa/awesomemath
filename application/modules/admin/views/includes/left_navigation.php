
    <!-- Sidebar -->
    <div class="sidebar sidebar-fixed">
        <div class="sidebar-dropdown"><a href="#">Navigation</a></div>

        <div class="sidebar-inner">
        
            <!--- Sidebar navigation -->
            <!-- If the main navigation has sub navigation, then add the class "has_submenu" to "li" of main navigation. -->
            <ul class="navi">

                <!-- Use the class nred, ngreen, nblue, nlightblue, nviolet or norange to add background color. You need to use this in <li> tag. -->

                <li><a href="<?php echo base_url()."admin";?>"><i class="icon-desktop"></i> Dashboard</a></li>

                <!-- Start: Admin Menu -->
                <li class="has_submenu">
                    <a href="#">
                        <!-- Menu name with icon -->
                        <i class="icon-th"></i> Reports
                        <!-- Icon for dropdown -->
                    </a>
                    <ul>
                        <!-- <li><a href="<?php echo base_url()."admin/payments";?>">Payment Reports</a></li>
                        <li><a href="<?php echo base_url()."admin/usage";?>">Usage Reports</a></li> -->
                        <li><a href="<?php echo base_url()."all-subscriptions";?>">Subscriptions</a></li>
                    </ul>
                </li>
				<!-- End: Admin Menu -->

                <!-- Start: Products Menu -->
                <li class="has_submenu">
                    <a href="#">
                        <!-- Menu name with icon -->
                        <i class="icon-th"></i> School
                        <!-- Icon for dropdown -->
                    </a>
                    <ul>
                        <li><a href="<?php echo base_url()."all-districts";?>">School Districts</a></li>
                        <li><a href="<?php echo base_url()."all-schools";?>">Schools</a></li>
                        <li><a href="<?php echo base_url()."all-grades";?>">Grades</a></li>
                        <li><a href="<?php echo base_url()."all-topics";?>">Topics</a></li>
                    </ul>
                </li>
				<!-- End: Products Menu -->

                <!-- Start: Products Menu -->
                <li class="has_submenu">
                    <a href="#">
                        <!-- Menu name with icon -->
                        <i class="icon-th"></i> Users
                        <!-- Icon for dropdown -->
                    </a>
                    <ul>
                        <li><a href="<?php echo base_url()."all-users";?>">Users</a></li>
                        <li><a href="<?php echo base_url()."all-user_types";?>">User Types</a></li>
                    </ul>
                </li>
				<!-- End: Products Menu -->

                <!-- Start: Products Menu -->
                <li>
                    <a href="<?php echo base_url()."email-campaign";?>">
                        <!-- Menu name with icon -->
                        <i class="icon-th"></i> Email Campaign
                        <!-- Icon for dropdown -->
                    </a>
                </li>
				<!-- End: Products Menu -->

            </ul>
        </div>
    </div>
    <!-- Sidebar ends -->
