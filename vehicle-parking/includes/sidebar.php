<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="https://www.w3schools.com/howto/img_avatar.png" width="50" class="img-responsive" alt="Icon">
			</div>
			<div class="profile-usertitle">
				<div class="profile-usertitle-name">Admin</div>
				<div class="profile-usertitle-status"><span class="indicator label-success"></span>Online</div>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>

		<form role="search" action="search-results.php" name="search" method="POST" enctype="multipart/form-data">

			<!--  -->

			<div class="form-group">
				<input type="text" class="form-control" id="searchdata" name="searchdata" placeholder="Buscar registro-vehículo">
			</div>

		</form>
		<ul class="nav menu">
			<li class="<?php if($page=="dashboard") {echo "active";}?>"><a href="dashboard.php"><em class="fa fa-dashboard">&nbsp;</em> Dashboard</a></li>
			<li class="<?php if($page=="vehicle-category") {echo "active";}?>"><a href="vehicle-category.php"><em class="fa fa-th-large">&nbsp;</em> Categoría de vehículo</a></li>
			<li class="<?php if($page=="manage-vehicles") {echo "active";}?>"><a href="manage-vehicles.php"><em class="fa fa-car">&nbsp;</em> Registrar vehículo</a></li>
			<li class="<?php if($page=="in-vehicle") {echo "active";}?>"><a href="in-vehicles.php"><em class="fa fa-toggle-on">&nbsp;</em> Vehículos entrantes</a></li>
            <li class="<?php if($page=="out-vehicle") {echo "active";}?>"><a href="out-vehicles.php"><em class="fa fa-toggle-off">&nbsp;</em> Vehículos salientes</a></li>
			<li class="<?php if($page=="reports") {echo "active";}?>"><a href="reports.php"><em class="fa fa-file">&nbsp;</em> Visualizar reportes</a></li>
			<!-- <li class="<?php if($page=="about") {echo "active";}?>"><a href="about.php"><em class="fa fa-info">&nbsp;</em> About Page</a></li> -->
			
		</ul>
		
	</div><!--/.sidebar-->