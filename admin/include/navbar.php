<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="ai-icon" href="Dashboard" aria-expanded="false">
                    <i class="flaticon-381-networking"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <?php if ($_SESSION['role'] == 'seo' || $_SESSION['role'] == 'admin') { ?>
                <li><a class="ai-icon" href="Activity-Log" aria-expanded="false">
                        <i class="flaticon-381-help"></i>
                        <span class="nav-text">Activity Log</span>
                    </a>
                </li>
            <?php }
            if ($_SESSION['role'] == 'sell' || $_SESSION['role'] == 'admin') { ?>
                <li><a class="ai-icon" href="Pending-Package-Sell-Data" aria-expanded="false">
                        <i class="flaticon-381-earth-globe"></i>
                        <span class="nav-text">Pending</span>
                    </a>
                </li>
                <li><a class="ai-icon" href="Package-Sell-Data" aria-expanded="false">
                        <i class="flaticon-381-controls-3"></i>
                        <span class="nav-text">Package Sell Data</span>
                    </a>
                </li>
                <li><a class="ai-icon" href="Contact-Data" aria-expanded="false">
                        <i class="flaticon-381-internet"></i>
                        <span class="nav-text">Appointment Data</span>
                    </a>
                </li>
                <li><a class="ai-icon" href="Newsletter-Data" aria-expanded="false">
                        <i class="flaticon-381-heart"></i>
                        <span class="nav-text">Newsletter Data</span>
                    </a>
                </li>
            <?php } ?>
            <li><a href="Change-Password" class="ai-icon" aria-expanded="false">
                    <i class="flaticon-381-settings-2"></i>
                    <span class="nav-text">Change Password</span>
                </a>
            </li>
        </ul>
    </div>
</div>