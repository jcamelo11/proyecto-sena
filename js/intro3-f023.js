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
                intro: '<div class="btn bg-white mb-0 subtitulos"><br><br><strong><h4>Informe F023 Final</h4></strong><br><audio autoplay class="audio-intro" style="display: none;" controls><source src="audios/f023-03/final.m4a" type="audio/mpeg"></audio>',
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
                intro: '<div class="btn bg-white mb-0 subtitulos">Aquí vas a escribir los datos de la empresa donde estas haciendo tu etapa productiva los datos de la empresa donde estas haciendo tu etapa productiva, presiona siguiente para avanzar <br> <audio autoplay class="audio-intro" controls><source src="audios/paso3.m4a" type="audio/mpeg"></audio></div>', step: 5,
                position: 'bottom',
                x: 100, // Coordenada X
                y: 0, // Coordenada Y
                        },
            {
                element: document.getElementById('intro6'),
                intro: ' <div class="btn bg-white mb-0 subtitulos"> En este segmento, se especificarán las tareas que consensuarás con tu supervisor durante tu periodo de etapa productiva <br> <audio autoplay class="audio-intro" controls><source src="audios/paso5.m4a" type="audio/mpeg"></audio></div>', step: 6,
                position: 'bottom',
                x: 100, // Coordenada X
                y: 0, // Coordenada Y
                        },
            {
                element: document.getElementById('intro7'),
                intro: ' <div class="btn bg-white mb-0 subtitulos"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, cupiditate alias illo numquam ea incidunt ipsam excepturi minima non nulla. <br> <audio autoplay class="audio-intro" controls><source src="audios/" type="audio/mpeg"></audio></div>', step: 7,
                position: 'bottom',
                x: 100, // Coordenada X
                y: 0, // Coordenada Y
                        },
            {
                element: document.getElementById('intro8'),
                intro: ' <div class="btn bg-white mb-0 subtitulos"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, cupiditate alias illo numquam ea incidunt ipsam excepturi minima non nulla. <br> <audio autoplay class="audio-intro" controls><source src="audios/" type="audio/mpeg"></audio></div>', step: 8,
                position: 'bottom',
                x: 100, // Coordenada X
                y: 0, // Coordenada Y
                        },
            {
                element: document.getElementById('intro9'),
                intro: ' <div class="btn bg-white mb-0 subtitulos"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, cupiditate alias illo numquam ea incidunt ipsam excepturi minima non nulla. <br> <audio autoplay class="audio-intro" controls><source src="audios/" type="audio/mpeg"></audio></div>', step: 9,
                position: 'bottom',
                x: 100, // Coordenada X
                y: 0, // Coordenada Y
                        },
            {
                element: document.getElementById('intro10'),
                intro: ' <div class="btn bg-white mb-0 subtitulos"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, cupiditate alias illo numquam ea incidunt ipsam excepturi minima non nulla. <br> <audio autoplay class="audio-intro" controls><source src="audios/" type="audio/mpeg"></audio></div>', step: 10,
                position: 'bottom',
                x: 100, // Coordenada X
                y: 0, // Coordenada Y

            },
            {
                element: document.getElementById('intro11'),
                intro: ' <div class="btn bg-white mb-0 subtitulos"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, cupiditate alias illo numquam ea incidunt ipsam excepturi minima non nulla. <br> <audio autoplay class="audio-intro" controls><source src="audios/" type="audio/mpeg"></audio></div>', step: 11,
                position: 'bottom',
                x: 100, // Coordenada X
                y: 0, // Coordenada Y

            },
            {
                element: document.getElementById('intro12'),
                intro: ' <div class="btn bg-white mb-0 subtitulos"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, cupiditate alias illo numquam ea incidunt ipsam excepturi minima non nulla. <br> <audio autoplay class="audio-intro" controls><source src="audios/" type="audio/mpeg"></audio></div>', step: 12,
                position: 'bottom',
                x: 100, // Coordenada X
                y: 0, // Coordenada Y

            },
            {
                element: document.getElementById('intro13'),
                intro: ' <div class="btn bg-white mb-0 subtitulos"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, cupiditate alias illo numquam ea incidunt ipsam excepturi minima non nulla. <br> <audio autoplay class="audio-intro" controls><source src="audios/" type="audio/mpeg"></audio></div>', step: 13,
                position: 'bottom',
                x: 100, // Coordenada X
                y: 0, // Coordenada Y

            },
            {
                element: document.getElementById('intro14'),
                intro: ' <div class="btn bg-white mb-0 subtitulos"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, cupiditate alias illo numquam ea incidunt ipsam excepturi minima non nulla. <br> <audio autoplay class="audio-intro" controls><source src="audios/" type="audio/mpeg"></audio></div>', step: 13,
                position: 'bottom',
                x: 100, // Coordenada X
                y: 0, // Coordenada Y

            },
            {
                element: document.getElementById('intro15'),
                intro: ' <div class="btn bg-white mb-0 subtitulos"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, cupiditate alias illo numquam ea incidunt ipsam excepturi minima non nulla. <br> <audio autoplay class="audio-intro" controls><source src="audios/" type="audio/mpeg"></audio></div>', step: 13,
                position: 'bottom',
                x: 100, // Coordenada X
                y: 0, // Coordenada Y

            },
            
            {
                element: document.getElementById('intro17'),
                intro: ' <div class="btn bg-white mb-0 subtitulos"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, cupiditate alias illo numquam ea incidunt ipsam excepturi minima non nulla. <br> <audio autoplay class="audio-intro" controls><source src="audios/" type="audio/mpeg"></audio></div>', step: 13,
                position: 'bottom',
                x: 100, // Coordenada X
                y: 0, // Coordenada Y

            },
            {
                element: document.getElementById('intro19'),
                intro: ' <div class="btn bg-white mb-0 subtitulos"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, cupiditate alias illo numquam ea incidunt ipsam excepturi minima non nulla. <br> <audio autoplay class="audio-intro" controls><source src="audios/" type="audio/mpeg"></audio></div>',step: 13,
                position: 'bottom',
                x: 100, // Coordenada X
                y: 0, // Coordenada Y

            },
            {
                element: document.getElementById('intro20'),
                intro: ' <div class="btn bg-white mb-0 subtitulos"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, cupiditate alias illo numquam ea incidunt ipsam excepturi minima non nulla. <br> <audio autoplay class="audio-intro" controls><source src="audios/" type="audio/mpeg"></audio></div>', step: 13,
                position: 'bottom',
                x: 100, // Coordenada X
                y: 0, // Coordenada Y

            },
            {
                element: document.getElementById('intro21'),
                intro: ' <div class="btn bg-white mb-0 subtitulos"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, cupiditate alias illo numquam ea incidunt ipsam excepturi minima non nulla. <br> <audio autoplay class="audio-intro" controls><source src="audios/" type="audio/mpeg"></audio></div>', step: 13,
                position: 'bottom',
                x: 100, // Coordenada X
                y: 0, // Coordenada Y

            },
            {
                element: document.getElementById(''),
                intro: ' <div class="btn bg-white mb-0 subtitulos"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor, cupiditate alias illo numquam ea incidunt ipsam excepturi minima non nulla. <br> <audio autoplay class="audio-intro" controls><source src="audios/" type="audio/mpeg"></audio></div><img src="imagenes/undraw/senabot.png" width="280px" alt="">', step: 13,
                position: 'bottom',
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
