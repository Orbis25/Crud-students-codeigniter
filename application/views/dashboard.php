<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url()?>assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?= base_url()?>assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>CRUD</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?= base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?= base_url()?>assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="<?= base_url()?>assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="<?= base_url()?>assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?= base_url()?>assets/css/themify-icons.css" rel="stylesheet">

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
             <div class="logo">
                <a href="#" class="simple-text">
                    Inicio
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="<?= site_url('welcome/index') ?>">
                        <i class="ti-panel"></i>
                        <p>Home</p>
                    </a>
                </li>
                <li>
                    <a href="<?= site_url('welcome/add') ?>">
                        <i class="ti-user"></i>
                        <p>Agregar nuevo</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    <a class="navbar-brand" >Inicio</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
						<li>
                            <a href="#">
								<p>CRUD ESTUDIANTES</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card">
                            <div class="content">
                                <div class="row">
                                    <div class="col-xs-5">
                                        <div class="icon-big icon-warning text-center">
                                            <i class="ti-server"></i>
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        <div class="numbers">
                                            <p>Cantidad</p>
                                            <?=$count?>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer">
                                    <hr />
                                    <div class="stats">
                                       Estudiantes
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                   
                </div>
                <div class="row">
                     <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Estudiantes</h4>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <table class="table table-striped">
                                    <thead>
                                    	<th>Nombre</th>
                                    	<th>Apellido</th>
                                        <th>Email</th>
                                    	<th>Nacimiento</th>                                        
                                        <th>Cedula</th>
                                    	<th>Acciones</th>                                        
                                    </thead>
                                    <tbody>
                                        <?php
                                        foreach ($data as $row) {
                                        ?>
                                        <tr>
                                            <td><?= $row->name ?></td>
                                        	<td><?= $row->lasname ?></td>
                                        	<td><?= $row->email ?></td>
                                        	<td><?= $row->datetime ?></td>
                                            <td><?= $row->dni ?></td> 
                                        	<td>
                                                <a href="<?= site_url("welcome/getUser/$row->id")?>" class="btn btn-primary"><i class="ti-reload"></i></a>
                                                <a href="<?= site_url("welcome/delete/$row->id")?>" class="btn btn-danger"><i class="ti-trash"></i></a>
                                            </td>                                                                                                                                   
                                        </tr>
                                    </tbody>
                                     <?php 
                                    }
                                    ?>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made with <i class="fa fa-heart heart"></i> by <a href="#">Orbis Alonzo G.</a>
                </div>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="<?= base_url()?>assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="<?= base_url()?>assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="<?= base_url()?>assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="<?= base_url()?>assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?= base_url()?>assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
	<script src="<?= base_url()?>assets/js/paper-dashboard.js"></script>

	<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
	<script src="<?= base_url()?>assets/js/demo.js"></script>
</php>
