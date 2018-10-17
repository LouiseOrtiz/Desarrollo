<!-- login-logo -->
<div class="login-box">

  <div class="login-logo">

    <img src="vistas/img/plantilla/logotipo-DCR-150px.png" class="img-responsive" style="padding: 10px 50px 0px 50px">
  </div>
  <!-- /.login-logo -->

  <div class="login-box-body">

    <h2 class="login-box-msg">Inicio de Sesion</h2>

    <form method="post">

      <div class="form-group has-feedback">

        <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" required>

        <span class="glyphicon glyphicon-user form-control-feedback"></span>

      </div>

      <div class="form-group has-feedback">

        <input type="password" class="form-control" placeholder="Password" name="ingPassword" required>

        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

      </div>

      <div class="row">

        <div class="col-xs-4">

          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>

        </div> 

      </div>
      <?php 

      $login = new ControladorUsuarios();
      $login -> ctrIngresoUsuario();

      ?>

    </form>
    
  </div>
  
</div>
