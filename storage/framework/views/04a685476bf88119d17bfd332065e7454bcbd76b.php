<!DOCTYPE HTML>
<!--
Imagination by TEMPLATED
templated.co @templatedco
Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
<head>
	<title>Imagination by TEMPLATED</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="keywords" content="" />



	<!-- Bootstrap Core CSS -->
	<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

	<!-- MetisMenu CSS -->
	<link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

	<!-- Custom CSS -->
	<link href="dist/css/sb-admin-2.css" rel="stylesheet">

	<!-- Morris Charts CSS -->
	<link href="vendor/morrisjs/morris.css" rel="stylesheet">

	<!-- Custom Fonts -->
	<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- DataTables CSS -->
	<link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

	<!-- DataTables Responsive CSS -->
	<link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/skel-noscript.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/style-desktop.css" />
</head>
<body class="homepage">

	<div id="header-wrapper">

		<!-- Header -->
		<div id="header">
			<div class="container">

				<!-- Logo -->
				<div id="logo">
					<h1><a href="#">EA DOCUMENT REPOSITORY</a></h1>
				</div>

				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li class="active"><a href="index.html">ข้อมูล 4 ระดับ</a></li>
						<li><a href="left-sidebar.html">ตารางความสัมพันธ์</a></li>

					</ul>
				</nav>

			</div>
		</div>
		<!-- Header -->

		<!-- Banner -->
		<div id="banner">

		</div>
		<!-- /Banner -->

	</div>

	<!-- Extra -->
	<div id="extra">
		<div class="container">
			<div class="row">
				<section class="3u">
					<header>
						<h2>Bussiness</h2>
					</header>
					<span class="fa fa-sitemap"></span>
					<p>Integer nisl risus, sagittis convallis, rutrum id, elementum congue, nibh. Suspendisse dictum porta lectus.</p>
				</section>
				<section class="3u">
					<header>
						<h2>DATA</h2>
					</header>
					<span class="fa fa-file-text-o"></span>
					<p>Pellentesque tristique ante ut risus. Integer risus congue. Suspendisse dictum porta lectus.</p>
				</section>
				<section class="3u">
					<header>
						<h2>APPLICATION</h2>
					</header>
					<span class="fa fa-laptop"></span>
					<p>Suspendisse dictum porta lectus. Integer nisl risus, sagittis convallis, rutrum congue nibh. </p>
				</section>
				<section class="3u">
					<header>
						<h2>TECHNOLOGY</h2>
					</header>
					<span class="fa fa-tasks"></span>
					<p>In posuere eleifend odio quisque semper augue mattis wisi maecenas ligula augue praesent.</p>
				</section>
			</div>
		</div>
	</div>

	<!-- /Extra -->

			<!-- Main -->
	<div id="main">
		<div class="container">
			<div class="form-group"><h1 style="font-size:38px;">APPICATION</h1></div>
			<div class="form-group">
		<div class="bs-example" data-example-id="bordered-table">

		<div class="panel panel-default" >
				<div class="panel-heading">
						DataTables Advanced Tables
				</div>
				<!-- /.panel-heading -->
				<div class="panel-body" style="margin-right:20px;">
						<table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
								<thead>
										<tr>
												<th><center>ลำดับ</th>
												<th><center>ชื่อ</th>
												<th><center>ภาษา</th>
												<th><center>หน่วนความจำ</th>
										</tr>
								</thead>
								<tbody>
								<?php $__currentLoopData = $apps; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $app): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
								<tr>
									<th scope="row"><?php echo e($app->id); ?></th>
									<td><?php echo e($app->name); ?></td>
									<td><?php echo e($app->develop_language); ?></td>
									<td><?php echo e($app->app_database); ?></td>
								</tr>
								<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
								</tbody>
						</table>

				</div>
				<!-- /.panel-body -->
		</div>
		<!-- /.panel -->
	</div>



</div>
</div>
</div>
	<!-- /Main -->



	<!-- Copyright -->
	<div id="copyright">
		<div class="container">
			Design: <a href="http://templated.co">TEMPLATED</a> Images: <a href="http://unsplash.com">Unsplash</a> (<a href="http://unsplash.com/cc0">CC0</a>)
		</div>
	</div>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="js/skel.min.js"></script>
	<script src="js/skel-panels.min.js"></script>
	<script src="js/init.js"></script>
	<!-- jQuery -->
	<script src="vendor/jquery/jquery.min.js"></script>

	<!-- Bootstrap Core JavaScript -->
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<!-- Metis Menu Plugin JavaScript -->
	<script src="vendor/metisMenu/metisMenu.min.js"></script>

	<!-- Morris Charts JavaScript -->
	<script src="vendor/raphael/raphael.min.js"></script>
	<script src="vendor/morrisjs/morris.min.js"></script>
	<script src="data/morris-data.js"></script>
	<!-- DataTables JavaScript -->
	<script src="vendor/datatables/js/jquery.dataTables.min.js"></script>
	<script src="vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
	<script src="vendor/datatables-responsive/dataTables.responsive.js"></script>
	<!-- Custom Theme JavaScript -->
	<script src="dist/js/sb-admin-2.js"></script>
	<!-- Page-Level Demo Scripts - Tables - Use for reference -->
	<script>
	$(document).ready(function() {
		$('#dataTables-example').DataTable({
			responsive: true

		});
	});
	</script>

</body>
</html>
