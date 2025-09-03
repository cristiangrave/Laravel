<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    @turnstileScripts()
</head>
<body>
    <div class="container">
        <h1>Bienvenido a Laravel usando bootstrap</h1>
        <li>
            <a href="/">Inicio</a>
        </li>
        <li>
            <a href="/login">login</a>
        </li>
        <li>
            <a href="/suma">Suma</a>
        </li>
            <li>
                <a href="/resta">Resta</a>
            </li>
            <li>
                <a href="/multiplicacion">Multiplicacion</a>
            </li>
              <li>
                <a href="/division">Division</a>
            </li>
              <li>
                <a href="/productos">Productos</a>
            </li>
        <!-- yield es una forma de definir secciones que pueden ser llenadas por las vistas hijas y desde las hijas se manda a llamar -->
        @yield('content')
    </div>
 <!--    <script
  src="https://challenges.cloudflare.com/turnstile/v0/api.js"
  async
  defer
></script> -->
</body>
</html>