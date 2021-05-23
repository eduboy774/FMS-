<nav id="sidebar" class='mx-lt-5 bg-dark' >
		<span onclick="toggleNavs()" id="nav-icon" class="icon-field"><i style="color:white;position:relative; left:10px; height:20px; width:20px; cursor:pointer;" class="fa fa-bars" aria-hidden="true"></i></span>
		<div class="sidebar-list">

				<a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'><i class="fa fa-home"></i></span> Home</a>
				<a href="index.php?page=files" class="nav-item nav-files"><span class='icon-field'><i class="fa fa-file-pdf"></i></span> Contract</a>
				<a href="index.php?page=cv" class="nav-item nav-cv"><span class='icon-field'><i class="fa fa-file"></i></span> CV</a>
				<?php if($_SESSION['login_type'] == 1): ?>
				<a href="index.php?page=users" class="nav-item nav-users"><span class='icon-field'><i class="fa fa-users"></i></span> Users</a>
			<?php endif; ?>
		</div>

</nav>
<script>
	$('.nav-<?php echo isset($_GET['page']) ? $_GET['page'] : '' ?>').addClass('active')
</script>