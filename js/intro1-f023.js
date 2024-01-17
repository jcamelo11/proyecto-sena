function intro_calcular() {
    
    var intro = introJs();
    intro.setOptions({
        steps: [
            {
                element: document.getElementById(''),
                intro: '<div class="btn bg-white mb-0 subtitulos"><strong><h5>¡Hola!</h5></strong> Soy tu asistente Senabot<br> presiona siguiente para avanzar <br><audio autoplay class="audio-intro" controls><source src="audios/inicio.m4a" type="audio/mpeg"></audio></div><img src="imagenes/undraw/senabot.png" width="280px" alt="">',
                step: 0,
                position: 'right',
                x: 100, // Coordenada X
                y: 0, // Coordenada Y
            },
            {
                element: document.getElementById(''),
                intro: '<div class="btn bg-white mb-0 subtitulos"><br><br><strong><h4 class="text-success">Formato F023 planeación (concertación)</h4></strong><br><audio autoplay class="audio-intro" style="display: none;" controls><source src="audios/planeacion.m4a" type="audio/mpeg"></audio></div>',
                step: 0,
                position: 'right',
                x: 100, // Coordenada X
                y: 0, // Coordenada Y
            },
            {
                element: document.getElementById('intro1'),
                intro: '<div class="btn bg-white mb-0 subtitulos">Aquí va la reginal, nombre del centro, nombre y ficha del programa de formación <br><audio autoplay class="audio-intro" controls><source src="audios/paso1.m4a" type="audio/mpeg"></audio></div>', step: 1
            },
            {
                element: document.getElementById('intro2'),
                intro: '<div class="btn bg-white mb-0 subtitulos">En este espacio vas a diligenciar tus datos personales <br><audio autoplay class="audio-intro" controls><source src="audios/paso2.m4a" type="audio/mpeg"></audio></div>', step: 2
            },
            {
                element: document.getElementById('intro4'),
                intro: '<div class="btn bg-white mb-0 subtitulos">En este espacio va la alternativa registrada en Sofia Plus <br> <audio autoplay class="audio-intro" controls><source src="audios/paso3.m4a" type="audio/mpeg"></audio></div>', step: 4
            },
            {
                element: document.getElementById('intro5'),
                intro: '<div class="btn bg-white mb-0 subtitulos">Aquí vas a escribir los datos de la empresa donde estas haciendo tu etapa productiva <br> <audio autoplay class="audio-intro" controls><source src="audios/paso4.m4a" type="audio/mpeg"></audio></div>', step: 5
            },
            {
                element: document.getElementById('intro6'),
                intro: '<div class="btn bg-white mb-0 subtitulos">En este segmento, se especificarán las tareas que consensuarás con tu supervisor durante tu periodo de etapa productiva <br> <audio autoplay class="audio-intro" controls><source src="audios/paso5.m4a" type="audio/mpeg"></audio></div>', step: 6
            },
            {
                element: document.getElementById('intro7'),
                intro: '<div class="btn bg-white mb-0 subtitulos">Aquí se describirán las actividades que llevarás a cabo durante tu período de etapa productiva <br> <audio autoplay class="audio-intro" controls><source src="audios/paso6.m4a" type="audio/mpeg"></audio></div>', step: 7
            },
            {
                element: document.getElementById('intro8'),
                intro: '<div class="btn bg-white mb-0 subtitulos">Aqui vas a describir como presentarás la evidencia <br> <audio autoplay class="audio-intro" controls><source src="audios/paso7.m4a" type="audio/mpeg"></audio></div>', step: 8
            },
            {
                element: document.getElementById('intro9'),
                intro: '<div class="btn bg-white mb-0 subtitulos">En este espacio se indicará la fecha de  inicio y finalización de los 6 meses de etapa productiva. <br> <audio autoplay class="audio-intro" controls><source src="audios/paso8.m4a" type="audio/mpeg"></audio></div>', step: 9
            },
            {
                element: document.getElementById('intro10'),
                intro: '<div class="btn bg-white mb-0 subtitulos">Aqui va el lugar donde desarrollaste las activiadades concertadas <br> <audio autoplay class="audio-intro" controls><source src="audios/paso9.m4a" type="audio/mpeg"></audio></div>', step: 10
            },
            {
                element: document.getElementById('intro11'),
                intro: '<div class="btn bg-white mb-0 subtitulos">Deben de llavar nombres y firmas de los actores del procedimiento <br> <audio autoplay class="audio-intro" controls><source src="audios/paso10.m4a" type="audio/mpeg"></audio></div>', step: 11
            },
            
            {
                element: document.getElementById('intro20'),
                intro: '<div class="btn bg-white mb-0 subtitulos">No te olvides de colocar la cuidad y ciudad de elaboracion del formato <br> <audio autoplay class="audio-intro" controls><source src="audios/paso11.m4a" type="audio/mpeg"></audio></div>', step: 13
            },
            {
                element: document.getElementById(''),
                intro: '<div class="btn bg-white mb-0 subtitulos">Aquí ya habrás terminado de diliginciar la planeación de tu etapa productiva. Te invito a que revises este mismo formato en la fase de seguimiento<br> <br><audio autoplay class="audio-intro" controls><source src="audios/finplaneacion.m4a" type="audio/mpeg"></audio></div><img src="imagenes/undraw/senabot.png" width="280px" alt="">',
                step: 0,
                position: 'right',
                x: 100, // Coordenada X
                y: 0, // Coordenada Y
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