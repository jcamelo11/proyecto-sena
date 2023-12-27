function intro_calcular() {
    ocultarImagen()
    var intro = introJs();
    intro.setOptions({
        steps: [
            {
                element: document.getElementById(''),
                intro: '<div class="btn bg-white mb-0 subtitulos"><strong><h5>¡Hola!</h5></strong> Soy tu asistente Senabot<br> presiona siguiente para avanzar <br><audio autoplay class="audio-intro" controls><source src="audios/intro.m4a" type="audio/mpeg"></audio></div><img src="imagenes/undraw/robot (1).gif" width="280px" alt="">',
                step: 0,
                position: 'right',
                x: 100, // Coordenada X
                y: 0, // Coordenada Y
            },
            {
                element: document.getElementById(''),
                intro: '<div class="btn bg-white mb-0 subtitulos"><br><br><strong><h4>Informe F023 Parcial</h4></strong><br><audio autoplay class="audio-intro" style="display: none;" controls><source src="audios/f023-02/parcial.m4a" type="audio/mpeg"></audio>',
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
                intro: '<div class="btn bg-white mb-0 subtitulos">En este espacio se indicará el período de inicio y fin de tu etapa productiva. <br> <audio autoplay class="audio-intro" controls><source src="audios/paso8.m4a" type="audio/mpeg"></audio></div>', step: 9
            },
            {
                element: document.getElementById('intro10'),
                intro: '<div class="btn bg-white mb-0 subtitulos">Aqui va el lugar donde desarrollaste la actividad planteanda <br> <audio autoplay class="audio-intro" controls><source src="audios/paso9.m4a" type="audio/mpeg"></audio></div>', step: 10
            },
            {
                element: document.getElementById('intro11'),
                intro: '<div class="btn bg-white mb-0 subtitulos">Deben de llavar nombres y firmas de los actores del procedimiento <br> <audio autoplay class="audio-intro" controls><source src="audios/paso10.m4a" type="audio/mpeg"></audio></div>', step: 11
            },
            {
                element: document.getElementById('intro12'),
                intro: '<div class="btn bg-white mb-0 subtitulos">En esta fase se evalúa junto con el ente conformador competencias actitudinales, comportamentales y técnica del aprendiz<br> <audio autoplay class="audio-intro" controls><source src="audios/f023-02/seguimiento.m4a" type="audio/mpeg"></audio></div>', step: 12
            },
            {
                element: document.getElementById('intro13'),
                intro: '<div class="btn bg-white mb-0 subtitulos">Marcamos el tipo de informe, para este caso marcamos parcial <br> <audio autoplay class="audio-intro" controls><source src="audios/f023-02/tipo-informe.m4a" type="audio/mpeg"></audio></div>', step: 13
            },
            {
                element: document.getElementById('intro14'),
                intro: '<div class="btn bg-white mb-0 subtitulos">En el periodo evaluado va la fecha de inicio y final de los tres meses de etapa productiva  <br> <audio autoplay class="audio-intro" controls><source src="audios/f023-02/periodo.m4a" type="audio/mpeg"></audio></div>', step: 13
            },
            {
                element: document.getElementById('intro15'),
                intro: '<div class="btn bg-white mb-0 subtitulos">En esta fase se evalúa junto con el ente conformador competencias actitudinales, comportamentales y técnica del aprendiz <br> <audio autoplay class="audio-intro" controls><source src="audios/f023-02/factores.m4a" type="audio/mpeg"></audio></div>', step: 13
            },
            
            {
                element: document.getElementById('intro17'),
                intro: '<div class="btn bg-white mb-0 subtitulos">Se marca con una x en la columna de satisfactorio, si le falta un mayor desempeño se marca x en la columna por mejorar y en la observación se deja lo aspectos mas relevantes a resaltar o a subsanar. <br> <audio autoplay class="audio-intro" controls><source src="audios/f023-02/valoracion.m4a" type="audio/mpeg"></audio></div>', step: 13
            },
            {
                element: document.getElementById('intro19'),
                intro: '<div class="btn bg-white mb-0 subtitulos">En este espacio también debe de llavar nombres y firmas de los actores del procedimiento <br> <audio autoplay class="audio-intro" controls><source src="audios/paso10.m4a" type="audio/mpeg"></audio></div>', step: 13
            },
            {
                element: document.getElementById('intro20'),
                intro: '<div class="btn bg-white mb-0 subtitulos">No te olvides de colocar la cuidad y ciudad de elaboracion del formato <br> <audio autoplay class="audio-intro" controls><source src="audios/paso11.m4a" type="audio/mpeg"></audio></div>', step: 13
            },
            {
                element: document.getElementById('intro21'),
                intro: '<div class="btn bg-white mb-0 subtitulos">Si la evidencia que planeas presentar se compone de fotografías, se debe situarla al final del documento  <br> <audio autoplay class="audio-intro" controls><source src="audios/f023-02/evidencias.m4a" type="audio/mpeg"></audio></div>', step: 13
            },
            {
                element: document.getElementById(''),
                intro: '<div class="btn bg-white mb-0 subtitulos">Te deseamos mucho éxito en tu proceso de etapa productiva y certificación <br> <audio autoplay class="audio-intro" controls><source src="audios/paso12.m4a" type="audio/mpeg"></audio></div>', step: 13
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
