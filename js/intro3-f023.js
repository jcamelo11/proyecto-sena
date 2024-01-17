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
                intro: '<div class="btn bg-white mb-0 subtitulos"><br><br><strong><h4 class="text-success">Formato F023 evaluación (final)</h4></strong><br><audio autoplay class="audio-intro" style="display: none;" controls><source src="audios/f023-03/evaluacionf.m4a" type="audio/mpeg"></audio>',
                step: 0,
                position: 'bottom',
                x: 100, // Coordenada X
                y: 0, // Coordenada Y
            },
            {
                element: document.getElementById('intro1'),
                intro: ' <div class="btn bg-white mb-0 subtitulos">Aquí va la regional, nombre del centro, nombre y ficha del programa de formación <br> <audio autoplay class="audio-intro" controls><source src="audios/paso1.m4a" type="audio/mpeg"></audio></div>', step: 1,
                position: 'bottom',
                x: 100, // Coordenada X
                y: 0, // Coordenada Y
                        },
            {
                element: document.getElementById('intro2'),
                intro: '<div class="btn bg-white mb-0 subtitulos">En este espacio vas a diligenciar tus datos personales <br> presiona siguiente para avanzar <br> <audio autoplay class="audio-intro" controls><source src="audios/paso2.m4a" type="audio/mpeg"></audio></div>', step: 2,
                position: 'bottom',
                x: 100, // Coordenada X
                y: 0, // Coordenada Y
                        },
            {
                element: document.getElementById('intro4'),
                intro: '<div class="btn bg-white mb-0 subtitulos">En este espacio va la alternativa registrada en Sofia Plus <br> presiona siguiente para avanzar <br> <audio autoplay class="audio-intro" controls><source src="audios/paso3.m4a" type="audio/mpeg"></audio></div>', step: 4,
                position: 'bottom',
                x: 100, // Coordenada X
                y: 0, // Coordenada Y
                        },
            {
                element: document.getElementById('intro5'),
                intro: '<div class="btn bg-white mb-0 subtitulos">Aquí vas a escribir los datos de la empresa donde estas haciendo tu etapa productiva<br> presiona siguiente para avanzar <br> <audio autoplay class="audio-intro" controls><source src="audios/paso4.m4a" type="audio/mpeg"></audio></div>', step: 5,
                position: 'bottom',
                x: 100, // Coordenada X
                y: 0, // Coordenada Y
            },
            {
                element: document.getElementById('intro6'),
                intro: '<div class="btn bg-white mb-0 subtitulos">Aquí va la misma información que dilienciaste en el formato de planeacion (F023 concertación) <br> <audio autoplay class="audio-intro" controls><source src="audios/f023-02/planeacionep.m4a" type="audio/mpeg"></audio></div>', step: 6,
                position: 'bottom',
                x: 100, // Coordenada X
                y: 0, // Coordenada Y
            },
            {
                element: document.getElementById('intro11'),
                intro: ' <div class="btn bg-white mb-0 subtitulos">Deben de llavar nombres y firmas de los actores del procedimiento  <br> <audio autoplay class="audio-intro" controls><source src="audios/paso10.m4a" type="audio/mpeg"></audio></div>', step: 11,
                position: 'bottom',
                x: 100, // Coordenada X
                y: 0, // Coordenada Y

            },
            {
                element: document.getElementById('intro12'),
                intro: ' <div class="btn bg-white mb-0 subtitulos">En esta fase se evalúa junto con el ente conformador competencias actitudinales, comportamentales y técnica del aprendiz  <br> <audio autoplay class="audio-intro" controls><source src="audios/f023-02/seguimiento.m4a" type="audio/mpeg"></audio></div>', step: 12,
                position: 'bottom',
                x: 100, // Coordenada X
                y: 0, // Coordenada Y

            },
            {
                element: document.getElementById('intro13'),
                intro: ' <div class="btn bg-white mb-0 subtitulos"> Marcamos el tipo de informe, para este caso marcamos parcial <br> <audio autoplay class="audio-intro" controls><source src="audios/f023-03/tipo-informe.m4a" type="audio/mpeg"></audio></div>', step: 13,
                position: 'bottom',
                x: 100, // Coordenada X
                y: 0, // Coordenada Y

            },
            {
                element: document.getElementById('intro14'),
                intro: ' <div class="btn bg-white mb-0 subtitulos">En el periodo evaluado va la fecha de inicio y final de etapa productiva  <br> <audio autoplay class="audio-intro" controls><source src="audios/f023-03/Período.m4a" type="audio/mpeg"></audio></div>', step: 14,
                position: 'bottom',
                x: 100, // Coordenada X
                y: 0, // Coordenada Y

            },
            {
                element: document.getElementById('intro15'),
                intro: ' <div class="btn bg-white mb-0 subtitulos"> En esta fase se evalúa junto con el ente conformador competencias actitudinales, comportamentales y técnica del aprendiz <br> <audio autoplay class="audio-intro" controls><source src="audios/f023-02/factores.m4a" type="audio/mpeg"></audio></div>', step: 15,
                position: 'bottom',
                x: 100, // Coordenada X
                y: 0, // Coordenada Y

            },
            
            {
                element: document.getElementById('intro17'),
                intro: ' <div class="btn bg-white mb-0 subtitulos">Aquí no podrán quedar aspectos por mejorar, ya que has finalizado tu proceso. <br> <audio autoplay class="audio-intro" controls><source src="audios/f023-03/aspectos.m4a" type="audio/mpeg"></audio></div>', step: 16,
                position: 'bottom',
                x: 100, // Coordenada X
                y: 0, // Coordenada Y

            },
            {
                element: document.getElementById('intro23'),
                intro: ' <div class="btn bg-white mb-0 subtitulos">El juicio evaluado lo marcará tu instructor de seguimiento cuando hayas terminado tu etapa productiva <br> <audio autoplay class="audio-intro" controls><source src="audios/f023-03/juicioev.m4a" type="audio/mpeg"></audio></div>',step: 17,
                position: 'bottom',
                x: 100, // Coordenada X
                y: 0, // Coordenada Y

            },
            {
                element: document.getElementById('intro19'),
                intro: ' <div class="btn bg-white mb-0 subtitulos">En este espacio también debe de llavar nombres y firmas de los actores del procedimiento  <br> <audio autoplay class="audio-intro" controls><source src="audios/paso10.m4a" type="audio/mpeg"></audio></div>',step: 17,
                position: 'bottom',
                x: 100, // Coordenada X
                y: 0, // Coordenada Y

            },
          
            {
                element: document.getElementById('intro20'),
                intro: ' <div class="btn bg-white mb-0 subtitulos"> No te olvides de colocar la cuidad y ciudad de elaboracion del formato <br> <audio autoplay class="audio-intro" controls><source src="audios/paso11.m4a" type="audio/mpeg"></audio></div>', step: 18,
                position: 'bottom',
                x: 100, // Coordenada X
                y: 0, // Coordenada Y

            },
            {
                element: document.getElementById('intro22'),
                intro: ' <div class="btn bg-white mb-0 subtitulos">Debes de solicitar la constacia laboral poco después de que hayas terminado las prácticas  <br> <audio autoplay class="audio-intro" controls><source src="audios/f023-03/constancia.m4a" type="audio/mpeg"></audio></div>', step: 13,
                position: 'bottom',
                x: 100, // Coordenada X
                y: 0, // Coordenada Y

            },
            {
                element: document.getElementById(''),
                intro: '<div class="btn bg-white mb-0 subtitulos"><strong><h5>¡ÉXITO!</h5></strong> Te deseamos mucho éxito en tu proceso de etapa productiva y certificación<br> <br><audio autoplay class="audio-intro" controls><source src="audios/paso12.m4a" type="audio/mpeg"></audio></div><img src="imagenes/undraw/senabot.png" width="280px" alt="">',
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
