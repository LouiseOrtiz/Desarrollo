<header class="main-header">
	<!--=====================================
	=            LOGOTIPO           =
	======================================-->
	
	<a href="inicio" class="logo">
		<!-- logo mini -->
		<span class="logo-mini">
			<img src="vistas/img/plantilla/icono-refa90px.png" class="img-responsive" style="padding:10px 0px">
		</span>

		<!-- logo normal -->
		<span class="logo-lg">
			
			<img src="vistas/img/plantilla/logotipo-DCR-75px.png" class="img-responsive" style="padding: 0px 0px">
		</span>
	</a>
	
	<!--====  End of LOGOTIPO  ====-->
	
	<!--=========================================
	=            BARRA DE NAVEGACION            =
	==========================================-->
	
	<nav class="navbar navbar-static-top" role="navigation" >
		
		<!-- boton de navegacion -->

		  <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">

	     <span class="sr-only">Toggle navigation</span>

	    </a>

	    <!-- perfil de usuario -->
	    <div class="navbar-custom-menu">

        <ul class="nav navbar-nav">

          <li class="dropdown user user-menu">

            <a href="#" class="dropdown-toggle" aria-expanded="true" data-toggle="dropdown">

              <?php 
              if ($_SESSION["foto"] != "") {
                echo '<img src="'.$_SESSION["foto"].'" class="user-image">';
              }else {
                echo '<img src="vistas/img/usuarios/default/avatar.jpg" class="user-image">';
              }
              
              ?>

              <span class="hidden-xs"><?php echo $_SESSION["nombre"]; ?></span>

            </a>

             <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header bg-aqua-active">

              	<?php 

              		if ($_SESSION["foto"] !="") {

              			echo '<img class="img-circle" alt="User Image" src="'.$_SESSION["foto"].'">';

              		} else {

              			echo '<img class="img-circle" alt="User Image" src="vistas/img/usuarios/default/avatar.jpg">';
              		}

              	?>
                

                <p>
                  <h4><?php echo $_SESSION["nombre"]; ?></h4>
                  <h4>Perfil: <?php echo $_SESSION["perfil"]; ?></h4>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <div class="pull-right center-block">
                  
                 <a href="salir" class="btn btn-github btn-social-icon">
                   <i class="fa fa-power-off" style="color: #fff"></i>
                 </a>

                </div>
                
              </li>
                  
            </ul>
	</nav>
	
	<!--====  End of BARRA DE NAVEGACION  ====-->
</header>