

<!-- ==========================  SideBar ================-->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header text-center" style="color: #9c6411;">MAIN NAVIGATION</li>


            <!--====== Category========-->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-sitemap"></i> <span> Pages / Menu</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
<!--                    <li><a href="--><?php //echo base_url('user-admin/add-main-category'); ?><!--"><i class="fa fa-edit"></i>Add Main Category</a></li>-->
<!--                    <li><a href="--><?php //echo base_url('user-admin/view-all-category'); ?><!--"><i class="fa fa-eye"></i>Manage Main Category </a></li>-->

                    <li><a href="<?php echo base_url('user-admin/add-sub-category'); ?>"><i class="fa
                    fa-edit"></i>Add Menu </a></li>

                    <li><a href="<?php echo base_url('user-admin/view-sub-category'); ?>"><i class="fa
                    fa-eye"></i>Manage Menu  </a></li>

                </ul>
            </li>


            <!--====== News========-->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-envelope"></i> <span> News</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('user-admin/add-news'); ?>"><i class="fa fa-edit"></i>Add All News</a></li>
                    <li><a href="<?php echo base_url('user-admin/view-news'); ?>"><i class="fa fa-eye"></i>Manage All News </a></li>
                </ul>
            </li>


            <!--====== Common Page========-->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file"></i> <span>Other Page</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url('user-admin/add-common-page'); ?>"><i class="fa fa-edit"></i>Add Other Page</a></li>
                    <li><a href="<?php echo base_url('user-admin/view-common-page'); ?>"><i class="fa fa-eye"></i>Manage Other Page </a></li>
                </ul>
            </li>



        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
