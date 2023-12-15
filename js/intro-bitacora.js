function intro_calcular() {
    var intro = introJs();
    intro.setOptions({
        steps: [
            {
                element: document.getElementById(''),
                intro: '<img class="mt-n5 mb-2" src="../assets/img/1x/jose.png" alt="" style="position:relative; width: 150px; left:20px; z-index: 1;"><strong>¡Hola!</strong> Soy tu asistente de voz<br> <audio autoplay class="w-100 mt-3" style="display: none;" controls><source src="audios/intro.m4a" type="audio/mpeg"></audio>presiona siguiente para avanzar',
                step: 0,
                position: 'right',
                x: 100, // Coordenada X
                y: 0, // Coordenada Y
            },
            {
                element: document.getElementById(''),
                intro: '<strong>Formato F147 bitácoras</strong><br><br><audio autoplay class="w-100 mt-3" style="display: none;" controls><source src="audios/bitacoras/bitacoras.m4a" type="audio/mpeg"></audio>Indicaciones de como diligenciar',
                step: 0,
                position: 'right',
                x: 100, // Coordenada X
                y: 0, // Coordenada Y
            },
            {
                element: document.getElementById('intro1'),
                intro: 'Aquí va la reginal y nombre del centro de formación<audio autoplay class="w-100 mt-3" controls><source src="audios/bitacoras/centro.m4a" type="audio/mpeg"></audio>presiona siguiente para avanzar', step: 1
            },
          
            {
                element: document.getElementById('intro2'),
                intro: 'Aquí vas a escribir los datos de la empresa donde estas haciendo tu etapa productiva <audio autoplay class="w-100 mt-3" controls><source src="audios/bitacoras/ente.m4a" type="audio/mpeg"></audio>presiona siguiente para avanzar', step: 2
            },
            {
                element: document.getElementById('intro13'),
                intro: 'Aquí va el número de la bitácora y el periodo que corresponde a 15 días<audio autoplay class="w-100 mt-3" controls><source src="audios/bitacoras/periodo.m4a" type="audio/mpeg"></audio>presiona siguiente para ver más detalles', step: 1
            },
            {
                element: document.getElementById('intro3'),
                intro: 'En este espacio va la alternativa o modalidad de etapa productiva registrada en Sofia Plus<audio autoplay class="w-100 mt-3" controls><source src="audios/bitacoras/modalidad.m4a" type="audio/mpeg"></audio>presiona siguiente para avanzar', step: 2
            },
            {
                element: document.getElementById('intro4'),
                intro: 'Aquí van los datos personales del aprendiz con el nombre y ficha del programa de formación<br> <audio autoplay class="w-100 mt-3" controls><source src="audios/bitacoras/datosapr.m4a" type="audio/mpeg"></audio>presiona Next para avanzar', step: 4
            },
            {
                element: document.getElementById('intro5'),
                intro: 'Activiades desarrolladas por el aprendiz durante los 15 días <br> <audio autoplay class="w-100 mt-3" controls><source src="audios/bitacoras/actividades1.m4a" type="audio/mpeg"></audio>presiona Next para avanzar', step: 5
            },
            {
                element: document.getElementById('intro6'),
                intro: 'Aqui se van a describir las actividades desarrolladas<br> <audio autoplay class="w-100 mt-3" controls><source src="audios/bitacoras/activiadesdes.m4a" type="audio/mpeg"></audio>presiona Next para avanzar', step: 6
            },
            {
                element: document.getElementById('intro7'),
                intro: 'Aquí va la fecha de inicio y final de los 15 días de la actividad <br> <audio autoplay class="w-100 mt-3" controls><source src="audios/bitacoras/fechaa.m4a" type="audio/mpeg"></audio>presiona Next para avanzar', step: 7
            },
            {
                element: document.getElementById('intro8'),
                intro: 'Describe las evidencias de las activiades realizada en los 15 días <br> <audio autoplay class="w-100 mt-3" controls><source src="audios/bitacoras/evidencias.m4a" type="audio/mpeg"></audio>presiona Next para avanzar', step: 8
            },
            {
                element: document.getElementById('intro9'),
                intro: 'Si hay alguna observación se puede describir en este espacio <br> <audio autoplay class="w-100 mt-3" controls><source src="audios/bitacoras/observaciones.m4a" type="audio/mpeg"></audio>presiona Next para avanzar', step: 9
            },
            {
                element: document.getElementById('intro10'),
                intro: 'Deben de llavar nombres y firmas de los actores del procedimiento <br> <audio autoplay class="w-100 mt-3" controls><source src="audios/bitacoras/firmas.m4a" type="audio/mpeg"></audio>presiona Next para avanzar', step: 10
            },
            {
                element: document.getElementById('intro11'),
                intro: 'Debes de escribir la fecha de entrega de la bitácora <br> <audio autoplay class="w-100 mt-3" controls><source src="audios/bitacoras/fechae.m4a" type="audio/mpeg"></audio>presiona Next para avanzar', step: 11
            },
            // {
            //     element: document.getElementById('intro12'),
            //     intro: 'xxxxxx<br> <audio autoplay class="w-100 mt-3" controls><source src="audios/f023-02/seguimiento.m4a" type="audio/mpeg"></audio>presiona Next para avanzar', step: 12
            // },
            {
                element: document.getElementById(''),
                intro: 'Te deseamos mucho éxito en tu proceso de etapa productiva y certificación. <br> <audio autoplay class="w-100 mt-3" controls><source src="audios/paso12.m4a" type="audio/mpeg"></audio>presiona Done para finalizar', step: 13
            },


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