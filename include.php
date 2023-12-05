
    <!-- MENU -->
<nav class="navbar navbar-expand-sm navbar-light">
  <div class="container">
      <a href=""><img class="logosena" src="imagenes/logo/logosena.png" alt="" ></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                  <a href="index.php" class="nav-link"><span data-hover="Inicio">Inicio</span></a>
              </li>
              <li class="nav-item">
                  <a href="caprendizaje.php" class="nav-link"><span data-hover="Caprendizaje">Caprendizaje</span></a>
              </li>
              <li class="nav-item">
                  <a href="generador.php" class="nav-link"><span data-hover="Generador">Generador</span></a>
              </li>
              <li class="nav-item">
                  <a href="menu-formatos.php" class="nav-link"><span data-hover="Formatos de Seguimiento"style="width: 110px;">Formatos de Seguimiento</span></a>
              </li>
              <li class="nav-item">
                  <a href="req-certificacion.php" class="nav-link"><span data-hover="Requisitos de certificación"style="width: 110px;">Requisitos de certificación</span></a>
              </li>
              <li class="nav-item">
                <a href="Egresado.php" class="nav-link"><span data-hover="Egresados" style="width: 110px;">Egresado</span></a>
                </li>
          </ul>

          <ul class="navbar-nav ml-lg-auto">
              <div class="ml-lg-4">
                <div class="color-mode d-lg-flex justify-content-center align-items-center">
                  <i class="color-mode-icon"></i>
                  Temas
                </div>
              </div>
          </ul>
      </div>
  </div>
</nav>
<div id="contenedor_carga">
        <div id="carga"></div>
    </div>
    <script>
        window.onload = function(){
            var contenedor = document.getElementById('contenedor_carga');
            contenedor.style.visibility = 'hidden';
            contenedor.style.opacity = '0';
        }
    </script>