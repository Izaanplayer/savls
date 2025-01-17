<!doctype html>
<html lang="es">

<head>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="./componentes/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="./componentes/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="./componentes/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="./componentes/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="./componentes/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="./componentes/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="./componentes/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="./componentes/plugins/summernote/summernote-bs4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="./componentes/plugins/select2/css/select2.min.css">
    <title>Registros | <?php echo $data["titulo"]; ?></title>
</head>

<body class="hold-transition login-page">
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="register-box">
                <div class="card card-outline card-primary">
                    <div class="card-header text-center">
                        <a href="#" class="h1"><b>Registros </b><?php echo $data["titulo"]; ?></a>
                    </div>
                    <div class="card-body">
                        <p class="login-box-msg"><?php echo $data["titulo"]; ?></p>

                        <form action="./?c=usuario&a=ActualizarUsuario" method="post" autocomplete="off">
                            <input type="hidden" name="hdnIdUsuario" value="<?php echo $data["idUsuario"]; ?>">
                            <div class="form-group">
                                <label>Usuario</label>
                                <input type="text" class="form-control" name="txtUsuario" value="<?php echo $data["usuario"]["usuario"]; ?>" placeholder="Ingresa tu usuario" maxlength="20" required>
                            </div>
                            <div class="form-group">
                                <label>Contraseña</label>
                                <input type="text" class="form-control" name="txtContrasena" placeholder="Ingresa una nueva contraseña" maxlength="20" required>
                            </div>
                            <div class="form-group">
                                <label>Fecha Expiración</label>
                                <input type="date" class="form-control" name="dtFechaExpiracion" value="<?php echo $data["usuario"]["fecha_expiracion"]; ?>" required>
                            </div>
                            <div class="form-group">
                                <label>Persona</label>
                                <select name="slcidPersona" class="form-control js-buscador" required>
                                    <option value="" selected disabled><?php echo $data["usuario"]["nombre"]." ".$data["usuario"]["apellido"]; ?></option>
                                    <?php
                                    $this->db = Conectar::conexion();
                                    $sqlPersonas = "SELECT * FROM persona WHERE estado > 0";
                                    $resultado = $this->db->query($sqlPersonas);
                                    while ($row = $resultado->fetch_array()) { ?>
                                        <option value="<?php echo $row['id_persona']; ?>"><?php echo $row['nombre'] . " " . $row['apellido']; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <button class="btn btn-block btn-primary">Actualizar </button>
                                </div>
                                <div class="col">
                                    <a href="./?c=usuario&a=ListarUsuarios"><button type="button" class="btn btn-block btn-danger">Regresar</button></a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- /.form-box -->
                </div><!-- /.card -->
            </div>
            <!-- /.register-box -->
        </div>
    </div>
</body>
<!-- jQuery -->
<script src="./componentes/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="./componentes/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="./componentes/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="./componentes/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="./componentes/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="./componentes/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="./componentes/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="./componentes/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="./componentes/plugins/moment/moment.min.js"></script>
<script src="./componentes/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="./componentes/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="./componentes/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="./componentes/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- Select2 -->
<script src="./componentes/plugins/select2/js/select2.min.js"></script>
<!-- AdminLTE App -->
<script src="./componentes/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="./componentes/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="./componentes/dist/js/pages/dashboard.js"></script>
<!-- JS Funciones -->
<script src="./js/main.js"></script>

</html>