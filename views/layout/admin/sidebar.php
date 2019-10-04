<aside class="app-aside app-aside-expand-md app-aside-light">
	<div class="aside-content">
	  <header class="aside-header d-block d-md-none">
	    <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside"><span class="user-avatar user-avatar-lg"><img src="<?php echo base_url('site_link'); ?>assets/user_photo/salman.jpg" alt=""></span> <span class="account-icon"><span class="fa fa-caret-down fa-lg"></span></span> <span class="account-summary"><span class="account-name"><?php echo $_SESSION['user_id']!=''?$_SESSION['fullname']:''; ?></span> <span class="account-description">Marketing Manager</span></span></button>
	    <div id="dropdown-aside" class="dropdown-aside collapse">
	      <div class="pb-3">
	        <a class="dropdown-item" href="user-profile.html"><span class="dropdown-icon oi oi-person"></span> Profile</a> <a class="dropdown-item" href="auth-signin-v1.html"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
	      </div>
	    </div>
	  </header>
	  <div class="aside-menu overflow-hidden">
	    <nav id="stacked-menu" class="stacked-menu">
	      <ul class="menu">
	        <li class="menu-item has-active">
	          <a href="<?php echo url('dashboard'); ?>" class="menu-link"><span class="menu-icon fa fa-home"></span> <span class="menu-text">Dashboard</span></a>
	        </li>
		<?php
			if ($_SESSION['user_type']=='Master Admin' || $_SESSION['user_type']=='Super Admin') {
		?>
	        <li class="menu-item has-child">
	          <a href="#" class="menu-link"><span class="menu-icon fa fa-puzzle-piece"></span> <span class="menu-text">Settings</span></a>
	          <ul class="menu">
	            <li class="menu-item">
	              <a href="<?php echo url('modules/create'); ?>" class="menu-link">Make New Module</a>
	            </li>
	            <li class="menu-item">
	              <a href="<?php echo url('modules/all'); ?>" class="menu-link">All Modules</a>
	            </li>
	            <li class="menu-item has-child">
	              <a href="#" class="menu-link">Entry Form</a>
	              <ul class="menu">
	                <li class="menu-item">
	                  <a href="<?php echo url('fields/create'); ?>" class="menu-link">Create New Field</a>
	                </li>
	                <li class="menu-item">
	                  <a href="<?php echo url('fields/find'); ?>" class="menu-link">All Fields</a>
	                </li>
	              </ul>
	            </li>
	            <li class="menu-item has-child">
	              <a href="#" class="menu-link">Users</a>
	              <ul class="menu">
	                <li class="menu-item">
	                  <a href="<?php echo url('users/create'); ?>" class="menu-link">Create User</a>
	                </li>
	                <li class="menu-item">
	                  <a href="<?php echo url('users/all'); ?>" class="menu-link">All Users</a>
	                </li>
	              </ul>
	            </li>
	          </ul>
	        </li>
	    <?php
	    	}
	    ?>
	        <hr>
	        <li class="menu-item has-child">
	        	<a href="#" class="menu-link"><i class="menu-icon fas fa-lira-sign"></i> <span class="menu-text"> Heads of Accounts</span></a>
	        	<ul class="menu">
	                <li class="menu-item">
	                	<a href="<?php echo url('acc_group_head/all'); ?>" class="menu-link"><i class="menu-icon fas fa-credit-card"></i> Group Head</a>
	                </li>
	                <li class="menu-item">
	                	<a href="<?php echo url('acc_sub_head/all'); ?>" class="menu-link"><i class="menu-icon far fa-credit-card"></i> Sub Head</a>
	                </li>
	                <li class="menu-item">
	                	<a href="<?php echo url('category/all'); ?>" class="menu-link"><i class="menu-icon fas fa-receipt"></i> Ledger Head</a>
	                </li>
            	</ul>
	        </li>
	        <li class="menu-item has-child">
	        	<a href="#" class="menu-link"><i class="menu-icon fas fa-building"></i> <span class="menu-text"> Bank Info</span></a>
	        	<ul class="menu">
	                <li class="menu-item">
	                	<a href="<?php echo url('category/create'); ?>" class="menu-link"><i class="menu-icon fas fa-university"></i> Add New Bank </a>
	                </li>
	                <li class="menu-item">
	                	<a href="<?php echo url('category/all'); ?>" class="menu-link"><i class="menu-icon fas fa-money-check"></i> Check Book Entry</a>
	                </li>
	                <li class="menu-item">
	                	<a href="<?php echo url('category/all'); ?>" class="menu-link"><i class="menu-icon fas fa-chart-line"></i> Check Report</a>
	                </li>
            	</ul>
	        </li>
	        <li class="menu-item has-child">
	        	<a href="#" class="menu-link"><i class="menu-icon fas fa-poll-h"></i> <span class="menu-text"> Voucher Entry</span></a>
	        	<ul class="menu">
	                <li class="menu-item">
	                	<a href="<?php echo url('category/create'); ?>" class="menu-link"><i class="menu-icon fas fa-tags"></i> Journal Entry</a>
	                </li>
	                <li class="menu-item">
	                	<a href="<?php echo url('category/all'); ?>" class="menu-link"><i class="menu-icon fas fa-cash-register"></i> Sales Invoice</a>
	                </li>
	                <li class="menu-item">
	                	<a href="<?php echo url('category/all'); ?>" class="menu-link"><i class="menu-icon fas fa-money-bill-alt"></i> Receive Entry</a>
	                </li>
	                <li class="menu-item">
	                	<a href="<?php echo url('category/create'); ?>" class="menu-link"><i class="menu-icon fas fa-money-check"></i> Purchases Entry </a>
	                </li>
	                <li class="menu-item">
	                	<a href="<?php echo url('category/all'); ?>" class="menu-link"><i class="menu-icon fas fa-money-bill"></i> Payment Entry </a>
	                </li>
            	</ul>
	        </li>
	        <li class="menu-item has-child">
	        	<a href="#" class="menu-link"><i class="menu-icon fas fa-chart-bar"></i> <span class="menu-text"> Reports</span></a>
	        	<ul class="menu">
	                <li class="menu-item">
	                	<a href="<?php echo url('category/create'); ?>" class="menu-link"><i class="menu-icon fas fa-chart-area"></i> Trial Balance</a>
	                </li>
	                <li class="menu-item">
	                	<a href="<?php echo url('category/all'); ?>" class="menu-link"><i class="menu-icon fas fa-chart-bar"></i> Profit & Loss</a>
	                </li>
	                <li class="menu-item">
	                	<a href="<?php echo url('category/all'); ?>" class="menu-link"><i class="menu-icon fas fa-chart-pie"></i> Graphical View</a>
	                </li>
            	</ul>
	        </li>
	      </ul>
	    </nav>
	  </div>
	  <footer class="aside-footer border-top p-3">
	    <div class="copyright"> Copyright © <?php echo date('Y'); ?>. <b style="color: darkcyan;">SIMEC System</b>. </div>
	  </footer>
	</div>
</aside>