function intro_calcular() {
    var intro = introJs();
    intro.setOptions({
            steps: [
                { element: document.getElementById(''),
                intro: '<img class="mt-n5 mb-2" src="../assets/img/1x/jose.png" alt="" style="position:relative; width: 150px; left:20px; z-index: 1;"><strong>¡Hola!</strong> Soy tu asistente de voz<br> <audio autoplay class="w-100 mt-3" style="display: none;" controls><source src="audios/intro.m4a" type="audio/mpeg"></audio>presiona siguiente para avanzar',
                step: 0,
                 position: 'right',
                 x: 100, // Coordenada X
                 y: 0, // Coordenada Y
                 },
                 { element: document.getElementById(''),
                 intro: '<strong>Informe F023 concertación</strong><br><br><audio autoplay class="w-100 mt-3" style="display: none;" controls><source src="audios/concertacion.m4a" type="audio/mpeg"></audio>Indicaciones de como diligenciar',
                 step: 0,
                  position: 'right',
                  x: 100, // Coordenada X
                  y: 0, // Coordenada Y
                  },
                { element: document.getElementById('intro1'), 
                intro: 'Este es el formulario que debes diligenciar con las características de tus suelos<audio autoplay class="w-100 mt-3" controls><source src="audios/paso1.m4a" type="audio/mpeg"></audio>presiona siguiente para ver más detalles', step: 1 },
                { element: document.getElementById('intro2'),
                 intro: 'En el formulario nos encontramos con las diferentes características del suelo<audio autoplay class="w-100 mt-3" controls><source src="audios/paso2.m4a" type="audio/mpeg"></audio>presiona siguiente para avanzar', step: 2 },
                 { element: document.getElementById('intro4'),
                 intro: 'Luego de llenar todos los campos presiona "CALCULAR PROCESO" para que el sistema verifique la información digitada <br> <audio autoplay class="w-100 mt-3" controls><source src="audios/paso3.m4a" type="audio/mpeg"></audio>presiona Next para avanzar', step: 4 },
                 { element: document.getElementById('intro5'),
                 intro: 'El sistema arrojará el resultado con la información de como están clasificado tu suelo, según la información digitada <br> <audio autoplay class="w-100 mt-3" controls><source src="audios/paso4.m4a" type="audio/mpeg"></audio>presiona Next para avanzar', step: 5 },
                 { element: document.getElementById('intro6'),
                 intro: 'El sistema arrojará el resultado con la información de como están clasificado tu suelo, según la información digitada <br> <audio autoplay class="w-100 mt-3" controls><source src="audios/paso5.m4a" type="audio/mpeg"></audio>presiona Next para avanzar', step: 6 },
                 { element: document.getElementById('intro7'),
                 intro: 'El sistema arrojará el resultado con la información de como están clasificado tu suelo, según la información digitada <br> <audio autoplay class="w-100 mt-3" controls><source src="audios/paso6.m4a" type="audio/mpeg"></audio>presiona Next para avanzar', step: 7 },
                 { element: document.getElementById('intro8'),
                 intro: 'El sistema arrojará el resultado con la información de como están clasificado tu suelo, según la información digitada <br> <audio autoplay class="w-100 mt-3" controls><source src="../assets/mp3/example.mp3" type="audio/mpeg"></audio>presiona Next para avanzar', step: 8 },
                 { element: document.getElementById('intro9'),
                 intro: 'El sistema arrojará el resultado con la información de como están clasificado tu suelo, según la información digitada <br> <audio autoplay class="w-100 mt-3" controls><source src="../assets/mp3/example.mp3" type="audio/mpeg"></audio>presiona Next para avanzar', step: 9 },
                 { element: document.getElementById('intro10'),
                 intro: 'El sistema arrojará el resultado con la información de como están clasificado tu suelo, según la información digitada <br> <audio autoplay class="w-100 mt-3" controls><source src="../assets/mp3/example.mp3" type="audio/mpeg"></audio>presiona Next para avanzar', step: 10 },
                 { element: document.getElementById('intro11'),
                 intro: 'El sistema arrojará el resultado con la información de como están clasificado tu suelo, según la información digitada <br> <audio autoplay class="w-100 mt-3" controls><source src="../assets/mp3/example.mp3" type="audio/mpeg"></audio>presiona Next para avanzar', step: 11 },
                 { element: document.getElementById('intro12'),
                 intro: 'El sistema arrojará el resultado con la información de como están clasificado tu suelo, según la información digitada <br> <audio autoplay class="w-100 mt-3" controls><source src="../assets/mp3/example.mp3" type="audio/mpeg"></audio>presiona Next para avanzar', step: 12 },
                 { element: document.getElementById(''),
                 intro: 'El sistema arrojará el resultado con la información de como están clasificado tu suelo, según la información digitada <br> <audio autoplay class="w-100 mt-3" controls><source src="../assets/mp3/calcular2.mp3" type="audio/mpeg"></audio>presiona Next para avanzar', step: 13 },

                 ]
           });
           intro.start();
       }
// Estilo personalizado para el tooltip */ es un CSS personalizado para que pueda modificarce el toltip
//.introjs-custom-tooltip {
//    max-width: 400px; /* Ancho máximo del tooltip */
//    font-size: 16px; /* Tamaño de fuente personalizado */
//    /* Otros estilos personalizados, como el fondo, el color de texto, el margen, etc. */
//}
intro_calcular()