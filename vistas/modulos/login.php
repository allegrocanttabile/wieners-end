<div class="login-box">

  <div class="login-logo">
    <img src="vistas/img/plantilla/logo.png" class="img-responsive" style="padding:10px 50px;">
  </div>
  <!-- /.login-logo -->

  <div class="login-box-body">
    
    <p class="login-box-msg">Ingresar al sistema</p>

    <form  method="post">

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Id" name="ingEmail" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>

      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="ingPassword" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>

      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Ingresar</button>
        </div>
        <!-- /.col -->
      </div>

      <?php

        $login = new ControladorAdministradores();
        $login -> ctrIngresoAdministrador();

      ?>

    </form>

  </div>
  <!-- /.login-box-body -->

</div>
<!-- /.login-box -->
