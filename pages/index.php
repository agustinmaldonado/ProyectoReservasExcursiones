<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Reserva de Excursiones</title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Reservas de Excursiones V1.0</a>
            </div>
            <!-- /.navbar-header -->
			
			<!-- -------------------------- manejo del usuario arriba a la izq -------------------------------------------------------------------- -->

            <ul class="nav navbar-top-links navbar-right">  
    
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i> 
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
			<!-- fin manejo de usuario---------------------------------------------------------------------------------------------------------------- -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
					<!--
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
							
                            <!-- /input-group 
                        </li> -->
	<!-- -------------------------------------  ----------------------------------------------------------------------------------------------------->
                        <li>
                            <a href="index.html"> <i class="fa fa-pencil fa-fw"></i> Administrar perfil</a>  <!--<i class="fa fa-dashboard fa-fw"></i> para el icono  -->
                        </li>
 <!-- -------------------------------------  ----------------------------------------------------------------------------------------------------->				
                       <li>
                            <a href="#"> <i class="fa fa-users fa-fw"></i> Administar Clientes</a>  <!--<i class="fa fa-dashboard fa-fw"></i> para el icono  -->
                        </li>
						
						<li>
                            <a href="#"> <i class="fa fa-calendar fa-fw"></i> Reservar Excursion</a>  <!--<i class="fa fa-dashboard fa-fw"></i> para el icono  -->
                        </li>
						
						<li>
                            <a href="#">  <i class="fa fa-check-square fa-fw"></i>Registrar Pago</a>  <!--<i class="fa fa-dashboard fa-fw"></i> para el icono  -->
                        </li>
						
						<li>
                            <a href="#"> <i class="fa fa-desktop fa-fw"></i> Informes de salidas</a>  <!--<i class="fa fa-dashboard fa-fw"></i> para el icono  -->
                        </li>
 <!-- ------------------------------------- - ----------------------------------------------------------------------------------------------------->
                        <li>
                            <a href="#"><i class="fa fa-align-center fa-fw"></i> Administrar Excursiones<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="">Alta</a>
                                </li>
                                <li>
                                    <a href="#">Baja</a>
                                </li>
								 <li>
                                    <a href="#">Moficacion</a>
                                </li>
								 <li>
                                    <a href="#">Consulta</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
	<!-- ----------------------------------------------------------------------------------------------------------------------------------------  -->					
						<li>
                            <a href="#"><i class="fa fa-cogs fa-fw"></i> Administrar usuarios<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                 <li>
                                    <a href=""> <i class="fa fa-building-o fa-fw"></i>	Lista de Usuarios</a>
                                </li>
                                <li>
                                    <a href="#"> <i class="fa fa-plus fa-fw"></i> Alta de Usuario</a>  
                                </li>
								 <li>
                                    <a href="#"> <i class="fa fa-minus fa-fw"></i> Eliminar Usuario</a> 
                                </li>
								 <li>
                                    <a href="#">Resetear Contraseñas</a>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>


                    </ul>
		<!-- ----------------------------------------------------------------------------------------------------------------------------------------  -->	
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
	<!--    ------------------------------------------------------------------------------------------------------------------   -->
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
            <div class="row">
                
				
				
               
                </div>
               
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

   
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>

