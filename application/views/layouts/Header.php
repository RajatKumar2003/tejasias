<div class="row border-bottom">
    <nav class="navbar navbar-static-top white-bg" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn" style="background:#160B00; color:white" href="#"><i class="fa fa-bars"></i> </a>

        </div>
        <ul class="nav navbar-top-links navbar-right">


            <li class="dropdown">
                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell"></i> <span class="label label-primary"><?php echo  $contactnotify->total_rows;; ?></span>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    
                    <li class="divider"></li>
                    <li>
                        <a href="<?php echo site_url('Inquiry') ?>">
                            <div>
                                <i class="fa fa-wechat"></i> <?php echo $contactnotify->total_rows; ?> Contact Inquiries
                               
                            </div>
                        </a>
                    </li>


                </ul>
            </li>


            <li>
                <a href="<?php echo site_url('logout') ?>">
                    <i class="fa fa-sign-out"></i> Log out
                </a>
            </li>

        </ul>

    </nav>
</div>