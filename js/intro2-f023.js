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
                intro: '<strong>Informe F023 concertación</strong><br><br><audio autoplay class="w-100 mt-3" style="display: none;" controls><source src="audios/concertacion.m4a" type="audio/mpeg"></audio>Indicaciones de como diligenciar',
                step: 0,
                position: 'right',
                x: 100, // Coordenada X
                y: 0, // Coordenada Y
            },
            {
                element: document.getElementById('intro1'),
                intro: 'Aquí va la reginal, nombre del centro, nombre y ficha del programa de formación<audio autoplay class="w-100 mt-3" controls><source src="audios/paso1.m4a" type="audio/mpeg"></audio>presiona siguiente para ver más detalles', step: 1
            },
            {
                element: document.getElementById('intro2'),
                intro: 'En este espacio vas a diligenciar tus datos personales<audio autoplay class="w-100 mt-3" controls><source src="audios/paso2.m4a" type="audio/mpeg"></audio>presiona siguiente para avanzar', step: 2
            },
            {
                element: document.getElementById('intro4'),
                intro: 'En este espacio va la alternativa registrada en Sofia Plus <br> <audio autoplay class="w-100 mt-3" controls><source src="audios/paso3.m4a" type="audio/mpeg"></audio>presiona Next para avanzar', step: 4
            },
            {
                element: document.getElementById('intro5'),
                intro: 'Aquí vas a escribir los datos de la empresa donde estas haciendo tu etapa productiva <br> <audio autoplay class="w-100 mt-3" controls><source src="audios/paso4.m4a" type="audio/mpeg"></audio>presiona Next para avanzar', step: 5
            },
            {
                element: document.getElementById('intro6'),
                intro: 'En este segmento, se especificarán las tareas que consensuarás con tu supervisor durante tu periodo de etapa productiva <br> <audio autoplay class="w-100 mt-3" controls><source src="audios/paso5.m4a" type="audio/mpeg"></audio>presiona Next para avanzar', step: 6
            },
            {
                element: document.getElementById('intro7'),
                intro: 'Aquí se describirán las actividades que llevarás a cabo durante tu período de etapa productiva <br> <audio autoplay class="w-100 mt-3" controls><source src="audios/paso6.m4a" type="audio/mpeg"></audio>presiona Next para avanzar', step: 7
            },
            {
                element: document.getElementById('intro8'),
                intro: 'Aqui vas a describir como presentarás la evidencia <br> <audio autoplay class="w-100 mt-3" controls><source src="audios/paso7.m4a" type="audio/mpeg"></audio>presiona Next para avanzar', step: 8
            },
            {
                element: document.getElementById('intro9'),
                intro: 'En este espacio se indicará el período de inicio y fin de tu etapa productiva. <br> <audio autoplay class="w-100 mt-3" controls><source src="audios/paso8.m4a" type="audio/mpeg"></audio>presiona Next para avanzar', step: 9
            },
            {
                element: document.getElementById('intro10'),
                intro: 'Aqui va el lugar donde desarrollaste la actividad planteanda <br> <audio autoplay class="w-100 mt-3" controls><source src="audios/paso9.m4a" type="audio/mpeg"></audio>presiona Next para avanzar', step: 10
            },
            {
                element: document.getElementById('intro11'),
                intro: 'Deben de llavar nombres y firmas de los actores del procedimiento <br> <audio autoplay class="w-100 mt-3" controls><source src="audios/paso10.m4a" type="audio/mpeg"></audio>presiona Next para avanzar', step: 11
            },
            {
                element: document.getElementById('intro12'),
                intro: 'xxxxxx<br> <audio autoplay class="w-100 mt-3" controls><source src="audios/f023-02/seguimiento.m4a" type="audio/mpeg"></audio>presiona Next para avanzar', step: 12
            },
            {
                element: document.getElementById('intro13'),
                intro: 'El sistema arrojará el resultado con la información de como están clasificado tu suelo, según la información digitada <br> <audio autoplay class="w-100 mt-3" controls><source src="audios/f023-02/tipo-informe.m4a" type="audio/mpeg"></audio>presiona Next para avanzar', step: 13
            },
            {
                element: document.getElementById('intro14'),
                intro: 'El sistema arrojará el resultado con la información de como están clasificado tu suelo, según la información digitada <br> <audio autoplay class="w-100 mt-3" controls><source src="audios/f023-02/periodo.m4a" type="audio/mpeg"></audio>presiona Next para avanzar', step: 13
            },
            {
                element: document.getElementById('intro15'),
                intro: 'El sistema arrojará el resultado con la información de como están clasificado tu suelo, según la información digitada <br> <audio autoplay class="w-100 mt-3" controls><source src="audios/paso12.m4a" type="audio/mpeg"></audio>presiona Next para avanzar', step: 13
            },
            {
                element: document.getElementById('intro16'),
                intro: 'El sistema arrojará el resultado con la información de como están clasificado tu suelo, según la información digitada <br> <audio autoplay class="w-100 mt-3" controls><source src="audios/paso12.m4a" type="audio/mpeg"></audio>presiona Next para avanzar', step: 13
            },
            {
                element: document.getElementById('intro17'),
                intro: 'El sistema arrojará el resultado con la información de como están clasificado tu suelo, según la información digitada <br> <audio autoplay class="w-100 mt-3" controls><source src="audios/paso12.m4a" type="audio/mpeg"></audio>presiona Next para avanzar', step: 13
            },
            {
                element: document.getElementById('intro18'),
                intro: 'El sistema arrojará el resultado con la información de como están clasificado tu suelo, según la información digitada <br> <audio autoplay class="w-100 mt-3" controls><source src="audios/paso12.m4a" type="audio/mpeg"></audio>presiona Next para avanzar', step: 13
            },
            {
                element: document.getElementById('intro19'),
                intro: 'El sistema arrojará el resultado con la información de como están clasificado tu suelo, según la información digitada <br> <audio autoplay class="w-100 mt-3" controls><source src="audios/paso12.m4a" type="audio/mpeg"></audio>presiona Next para avanzar', step: 13
            },
            {
                element: document.getElementById('intro20'),
                intro: 'El sistema arrojará el resultado con la información de como están clasificado tu suelo, según la información digitada <br> <audio autoplay class="w-100 mt-3" controls><source src="audios/paso12.m4a" type="audio/mpeg"></audio>presiona Next para avanzar', step: 13
            },
            {
                element: document.getElementById('intro21'),
                intro: 'El sistema arrojará el resultado con la información de como están clasificado tu suelo, según la información digitada <br> <audio autoplay class="w-100 mt-3" controls><source src="audios/paso12.m4a" type="audio/mpeg"></audio>presiona Next para avanzar', step: 13
            },
            {
                element: document.getElementById(''),
                intro: 'El sistema arrojará el resultado con la información de como están clasificado tu suelo, según la información digitada <br> <audio autoplay class="w-100 mt-3" controls><source src="audios/paso12.m4a" type="audio/mpeg"></audio>presiona Next para avanzar', step: 13
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