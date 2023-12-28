// Función para mostrar el div durante 4 segundos
function mostrarDivTemporal() {
    var popup = document.getElementById('popup');
    popup.style.display = 'block';

    setTimeout(function() {
      popup.style.display = 'none';

      // Programar la ocultación del div durante 5 segundos
      setTimeout(ocultarDivTemporal, 1000);
    }, 7000); // 4000 ms (4 segundos)
  }

  // Función para ocultar el div durante 5 segundos
  function ocultarDivTemporal() {
    var popup = document.getElementById('popup');
    popup.style.display = 'none';

    // Programar la aparición del div nuevamente después de 5 segundos
    setTimeout(mostrarDivTemporal, 2000); // 5000 ms (5 segundos)
  }

  // Llamar a la función para mostrar el div inicialmente
  mostrarDivTemporal();

 