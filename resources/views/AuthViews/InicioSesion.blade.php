<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sistema Almacén</title>

  {{--Zona para registrar archivos CSS --}}
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <p class="h1"><b>Almacén</b>PLUS</p>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Ingresa para iniciar sesión</p>

      <form action="{{route('login.post')}}" method="post">
          @csrf
        <div class="input-group mb-3">
          <input type="text" id="usuario" name="usuario" class="form-control" required placeholder="Nombre de Usuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">

          <input type="password" id="contrasennia" name="contrasennia" class="form-control" required placeholder="Contraseña">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">

            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Ingresar</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        <a href="{{route('password.request')}}">Recupera tu contraseña</a>
      </p>
      <p class="mb-0">
        <a href="{{route('register.create')}}" class="text-center">Crea un nuevo registro</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

{{--*******************************************--}}
{{--Zona para registrar archivos JS de Jascript--}}
{{--*******************************************--}}
<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- SweetAlert2 -->
<script src="plugins/sweetalert2/sweetalert2.min.js"></script>

{{--************************************************--}}
{{--Zona para cargar mensajes de error de tipo Toast--}}
{{--************************************************--}}
<script>
    $(function() {
        var Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000
        });
        @if (session('sessionInsertado') == 'true')
            Toast.fire({
                icon: 'success',
                title: '{{session('mensaje')}}'
            })
        @endif

        @if (session('loginCorecto') == 'false')
        Toast.fire({
            icon: 'error',
            title: '{{session('mensaje')}}'
        })
        @endif

        @if (session('sessionRecuperarContrasennia') == 'true')
        Toast.fire({
            icon: 'success',
            title: '{{session('mensaje')}}'
        })
        @endif

        @if (session('sessionCambiarContrasennia') == 'false')
        Toast.fire({
            icon: 'error',
            title: '{{session('mensaje')}}'
        })
        @endif

        @if (session('sessionCambiarContrasennia') == 'true')
        Toast.fire({
            icon: 'success',
            title: '{{session('mensaje')}}'
        })
        @endif
    });
</script>
</body>
</html>
