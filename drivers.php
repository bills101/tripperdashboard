<!DOCTYPE html>
<html lang="en">

<head>
	<?php include 'components/head.php' ?>
</head>

<body class="sb-nav-fixed">
	<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
		<?php include 'components/header.php' ?>
	</nav>
	<div id="layoutSidenav">
		<div id="layoutSidenav_nav">
			<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">

				<?php include 'components/sidebar.php' ?>

			</nav>
		</div>
		<div id="layoutSidenav_content">
			<main>
				<div class="container-fluid px-4">
					<h1 class="mt-4">Drivers</h1>
					<ol class="breadcrumb mb-4">
						<li class="breadcrumb-item active">Drivers Page</li>
					</ol>
					<?php include 'components/staff.php' ?>
				</div>
			</main>

			<footer class="py-4 bg-light mt-auto">
				<?php include 'components/footer.php' ?>
			</footer>
		</div>
	</div>
	<?php include 'components/scripts.php' ?>
</body>

</html>