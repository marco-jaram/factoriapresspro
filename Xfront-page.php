<!DOCTYPE html>
<html lang="es">

   
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inicio</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;700;900&display=swap" rel="stylesheet">

   
    <style>
/* font-family: 'Noto Sans KR', sans-serif; */

:root {
    --color-primario: #38b6ff;
    --color-secundario: #F038B6;
    --color-tercero: #B6F038;
    --color-complementario: #F07238;
}

html {
    box-sizing: border-box;
    scroll-behavior: smooth;
}

body {
    margin: 0px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
}

.contenedor {
    max-width: 1000px;
    width: 95%;
    margin: 0 auto;
}

h1,
h2,
h3,
h4,
h5 {
    font-family: 'Noto Sans KR', sans-serif;
}

img {
    max-width: 100%;
}
.land-menu{
    background: #56CCF2;
    /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #2F80ED, #56CCF2);
    /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #2F80ED, #56CCF2);
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    display: flex;
}
.land-menu_contenido {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.land-menu_contenido img {
    width: 130px;
    padding: 10px;
}
.nav-superior a{
    text-decoration: none;
    color: white;
    margin-left: 10px;

}

.land-header {
    background: #56CCF2;
    /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #2F80ED, #56CCF2);
    /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #2F80ED, #56CCF2);
    /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    height: 100vh;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    position: relative;
    width: 100%; 
     min-height: 600px;
}

.ola {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    fill: white;
    height: 180px;
    /* altura de la ola */
}

.land-header_contenido1 h1 {
    color: white;
    font-size: 3rem;
    line-height: 2.8rem;
    font-weight: 900;
    margin-top: 0px;
}

.land-header_contenido1 h2 {
    color: white;
    font-size: 2rem;
    line-height: 2.5rem;
    font-weight: 300;
}

.land-header_contenido1 h3 {
    color: white;
    font-size: 1.8rem;
    line-height: 1.8rem;
    font-weight: 100;
    margin-top: 0px;
}

.boton-cta {
    cursor: pointer;
    position: relative;
    z-index: 1;
}

.boton-cta a {
    border-radius: 15px;
    border-width: 1px;
    padding: 15px;
    font-size: 1rem;
    margin-bottom: 10px;
    background-color: var(--color-complementario);
    color: white;
    cursor: pointer;
    text-decoration: none;
    display: inline-block;
    margin-top: 20px;
}
.boton-cta a:hover{
background-color: var(--color-secundario);
}
.todo-mundo,

/* .land-imaginate, */

.land-como-se-usa,
.land-titulares,
.cuando-improvizas {
    background-color: var(--color-primario);
}


/* animacion inicial header */

.land-h2,
.land-h3 {
    -webkit-animation-duration: 1s;
    animation-duration: 1s;
    -webkit-animation-name: titulo-principal;
    animation-name: titulo-principal;
}

@-webkit-keyframes titulo-principal {
    from {
        opacity: 0;
        transform: translate3d(-100%, 0, 0);
    }
    to {
        opacity: 1;
        transform: none;
    }
}

@keyframes titulo-principal {
    from {
        opacity: 0;
        transform: translate3d(-100%, 0, 0);
    }
    to {
        opacity: 1;
        transform: none;
    }
}

.land-header_contenido2 {
    padding: 10px;
}

.land-header_contenido2 h3 {
    font-size: 1.5rem;
    color: var(--color-primario);
    text-align: center;
}

.land-header_contenido2 p {
    font-size: 1.2rem;
    line-height: 2.2rem;
}

p {
    font-size: 1.125rem;
    line-height: 1.7rem;
    letter-spacing: .03rem;
    word-spacing: .05rem;
}

.land-header_contenido2 p {
    color: gray;
}

.todo-mundo {
    color: white;
}

.todo-mundo h3 {
    font-size: 1.2rem;
    padding-top: 30px;
    text-align: center;
}

.todo-mundo_contenido {
    padding-top: 15px;
    padding-bottom: 50px;
}

.todo-mundo_contenido img {
    width: 100%;
    text-align: center;
    -webkit-box-shadow: 3px 3px 20px 0px rgba(76, 67, 117, 0.932);
    /* Safari 3-4, iOS 4.0.2 - 4.2, Android 2.3+ */
    -moz-box-shadow: 3px 3px 20px 0px rgba(76, 67, 117, 0.932);
    /* Firefox 3.5 - 3.6 */
    box-shadow: 3px 3px 20px 0px rgba(76, 67, 117, 0.932);
    /* Opera 10.5, IE 9, Firefox 4+, Chrome 6+, iOS 5 */
  
}

.capital::first-letter {
    font-size: 2rem;
}

.todo-mundo-texto {
    margin-left: 10x;
    margin-left: 10px;
    margin-top: 20px;
}

.land-obten-acceso_contenido h3 {
    color: var(--color-primario);
}

.land-obten-acceso_contenido ul li,
.land-que-contiene_contenido ul li,
.land-como-se-usa_contenido ul li,
.es-para-mi_contenido ul li,
.land-titulares_contenido ul li,
.la-creatividad_contendio ul li {
    list-style: none;
    font-size: 1.125rem;
    line-height: 1.8rem;
    color: rgb(65, 64, 64);
}

.land-obten-acceso_contenido {
    margin-bottom: 30px;
}

.land-obten-acceso_contenido ul li span {
    color: var(--color-primario);
}

.land-obten-acceso_contenido h3 {
    margin: 25px;
}

.land-imaginate_contenido h3 {
    color: white;
    text-align: center;
    padding: 100px 0px;
}

.land-imaginate {
    background-color: var(--color-secundario);
}

.land-que-contiene {
    margin-top: 20px;
}

.land-que-contiene_contenido ul li span {
    color: var(--color-tercero);
}

.land-que-contiene_contenido h3 {
    color: var(--color-primario);
    text-align: center;
    padding: 15px;
}

.cuadro1 {
    height: 300px;
    width: 200px;
    border: 5px solid var(--color-primario);
    margin-top: 30px;
    transform: rotate(15deg);
    font-size: 2rem;
    overflow: hidden;
    color: var(--color-secundario);
}

.cta-intermedio {
    margin-top: 50px;
    margin-bottom: 50px;
    text-align: center;
}

.como-se-usa-titulo {
    color: white;
    font-size: 2rem;
    padding-top: 30px;

}

.land-como-se-usa_contenido h4 {
    color: white;
    font-size: 1.8rem;
}

.como-se-usa-cards {
    padding-top: 50px;
    padding-bottom: 90px;
}

.icono-como-se-usa {
    font-size: 5rem;
    color: white;
    display: block;
    padding: 10px;
}

.como-se-usa-tarjeta {
    text-align: center;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.712);
    transition: 0.3s;
    width: 100%;
    height: 300px;
    margin-top: 10px;
    margin-bottom: 10px;
    color: white;
    border-radius: 20px;
}

.como-se-usa-tarjeta_contenido {
    padding: 2px 16px;
    text-align: left;
}

.como-se-usa-tarjeta_contenido p {
    font-size: 1rem;
}

.como-se-usa-tarjeta_contenido h3 {
    color: var(--color-tercero); 
    font-size: 1.5rem;
   
}



.es-para-mi_contenido h3 {
    color: var(--color-primario);
    font-size: 1.6rem;
    margin-top: 30px;
    margin-bottom: 25px;
}

.es-para-mi {
    margin-bottom: 30px;
}

.es-para-mi_contenido span {
    color: var(--color-primario);
}

.land-titulares_contenido h3 {
    font-size: 1.6rem;
    color: white;
}

.land-titulares_contenido span,
.land-titulares_contenido p {
    color: white;
}

.land-titulares_contenido ul li {
    color: white;
}

.land-titulares_contenido img {
    width: 100%;
    text-align: center;
    -webkit-box-shadow: 3px 3px 20px 0px rgba(76, 67, 117, 0.932);
    /* Safari 3-4, iOS 4.0.2 - 4.2, Android 2.3+ */
    -moz-box-shadow: 3px 3px 20px 0px rgba(76, 67, 117, 0.932);
    /* Firefox 3.5 - 3.6 */
    box-shadow: 3px 3px 20px 0px rgba(76, 67, 117, 0.932);
    /* Opera 10.5, IE 9, Firefox 4+, Chrome 6+, iOS 5 */
}

.land-titulares {
    padding-top: 30px;
    padding-bottom: 30px;
}

.vs-mitos {
    background-color: var(--color-secundario);
    margin-top: 50px;
}

.vs-mitos_contenido h3 {
    text-align: center;
    color: white;
    padding: 50px 0px 50px 0px;
    font-size: 1rem;
}

.la-creatividad_contendio {
    margin-top: 50px;
    margin-bottom: 50px;
}

.la-creatividad_contendio h3 {
    color: var(--color-primario);
    font-size: 1.6rem;
}

.la-creatividad_contendio p {
    color: rgb(65, 64, 64);
}

.la-creatividad_contendio ul li span {
    color: var(--color-primario);
}

.cuando-improvizas_contenido h3 {
    font-size: 1rem;
    color: white;
    padding-top: 50px;
    padding-bottom: 50px;
}

.porque-cree_contenido {
    margin-top: 30px;
    margin-bottom: 30px;
}

.porque-cree_contenido h3 {
    font-size: 1.6rem;
    color: var(--color-primario);
}

.porque-cree_contenido .texto-rey {
    color: var(--color-primario);
}

.porque-cree_contenido p {
    color: gray;
}

.porque-cree_contenido img {
    border-radius: 20px;
    width: 100%;
    text-align: center;
    -webkit-box-shadow: 3px 3px 20px 0px rgba(76, 67, 117, 0.932);
    /* Safari 3-4, iOS 4.0.2 - 4.2, Android 2.3+ */
    -moz-box-shadow: 3px 3px 20px 0px rgba(76, 67, 117, 0.932);
    /* Firefox 3.5 - 3.6 */
    box-shadow: 3px 3px 20px 0px rgba(76, 67, 117, 0.932);
    /* Opera 10.5, IE 9, Firefox 4+, Chrome 6+, iOS 5 */
}

@media (min-width: 768px) {
    .land-header {
        height: 75vh;
    }
    .land-header_contenido1 h2 {
        max-width: 700px;
    }
    .land-header_contenido2 {
        padding: 50px;
        text-align: center;
    }
    .land-header_contenido1 h1 {
        font-size: 4rem;
        line-height: 3.5rem;
    }
    .land-header_contenido2 h3 {
        font-size: 2.3rem;
    }
    .todo-mundo h3 {
        font-size: 2.5rem;
    }
    .todo-mundo_contenido {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        column-gap: 2rem;
        align-items: center;
    }
    .todo-mundo_contenido img {
        width: 100%;
        text-align: center;
        margin-top: 35px;
    }
    .land-que-contiene_contenido h3,
    .land-imaginate_contenido h3,
    .land-obten-acceso_contenido h3,
    .cuando-improvizas_contenido h3 {
        font-size: 2rem;
    }
    .land-que-contiene_contenido {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        column-gap: 2rem;
    }
    .cuadro1 {
        height: 300px;
        width: 200px;
        border: 3px solid var(--color-primario);
        margin-top: 100px;
        transform: rotate(15deg);
        font-size: 2rem;
        overflow: hidden;
        color: var(--color-secundario);
    }
    .como-se-usa-cards {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        column-gap: 2rem;
    }
    .como-se-usa-tarjeta {
        height: 350px;
    }
    .icono-como-se-usa {
        padding-top: 30px;
    }
    .land-titulares_contenido {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        column-gap: 2rem;
        align-items: center;
    }
    .vs-mitos_contenido h3 {
        font-size: 2rem;
    }
    .porque-cree_contenido {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        column-gap: 2rem;
        align-items: center;
    }
}

    </style>
</head>

<!-- inicio de home -->
<body>

    <div class="land-menu">
        <div class="land-menu_contenido contenedor">
            <img src="https://escribeweb.com/wp-content/uploads/2021/03/escribeweb-blanco-sinfondo.png" alt="">
            <div class="nav-superior">
                <a href="">Login</a>
                <a href="">Soporte</a>
            </div>
        </div>

    </div>

    <!-- inica landing -->
    <section>
        <!--1 header -->
        <div class="land-header">
            <div class="land-header_contenido1 contenedor">
                <h1 class="land-h1">Crea confianza y vende con palabras.&#9998;</h1>
                <!-- <h1>Usa el poder de las palabras para vender</h1> -->
                <!-- <h1>El poder de las palabras en tu web</h1> -->

                <h2 class="land-h2">Si estás en internet porque quieres vender utiliza esta aplicación web.</h2>
                <h3 class="land-h3">Contesta 12 preguntas y obtén al instante más de 300 resultados.</h3>
                <div class="boton-cta">
                    <a href="https://escribeweb.com/membership-join/">Acceder ahora</a>
                </div>
            </div>

            <svg class="ola" viewBox="0 0 500 150" preserveAspectRatio="none">
                <path d="M-0.84,128.78 C171.27,188.97 417.89,55.75 504.79,121.88 L500.00,150.00 L0.00,150.00 Z"></path>
            </svg>

        </div>
    </section>
    <!-- 2 -->
    <div class="land-header_contenido2 contenedor">

        <h3>Es fácil vender cuando hay confianza.</h3>
        <p> Dale la <strong>seguridad </strong> a tu prospecto de que tú solucionas su problema.</p>

        <p>Este programa (Escribeweb) está bajo la sombra del árbol de <strong>las fórmulas más usadas por copywriters</strong>.</p>
        <p> Fórmulas de textos para el comercio, <strong>textos para vender</strong>.</p>
        <p> <strong>Hay muchas variables</strong> de una sola fórmula y <strong>no las puedes pensar todas</strong> al mismo tiempo.</p>
        <p>El programa permite que puedas procesar <strong>300 resultados con muchas variables en una hora</strong>. Si lo hicieras a mano demorarías cinco días o más. Aparte de la demora seguro te faltaría pensar una que otra variable.</p>


        <!-- <p>Convence escribiendo las palabras exactas. </p> -->
    </div>
    <!-- 3 nueva seccion -->
    <section>
        <div class="todo-mundo">
            <h3 class="contenedor">Conecta escribiendo las palabras exactas.</h3>
            <div class="todo-mundo_contenido contenedor">
                <div><img src="https://escribeweb.com/wp-content/uploads/2021/02/todo-mundo1.png" alt="foto-buscando-en-internet"></div>
                <div class="todo-mundo-texto">
                    <p class="capital"> <strong> Ahora</strong>, todo mundo, primero <strong>investigan en internet</strong>.</p>
                    <p>Dentro de las tiendas <strong>sacan su celular y equiparan</strong>.</p>
                    <p>Si es tienda online más aún.</p>
                    <p>Cuando encuentran un producto identico, <strong>la diferencia está en las palabras</strong> que presentan los beneficios.</p>
                    <p>Es cuando <strong>el texto es el rey</strong>.&#9820;</p>
                    <p>El que mejor conecta se lleva la venta.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- 4 seccion -->
    <section>
        <div class="land-obten-acceso">
            <div class="land-obten-acceso_contenido contenedor">
                <h3>Obtén el acceso a <i>Escribeweb</i> </h3>
                <ul>
                    <li> <span>&#x261B;</span> Más de 300 frases armadas a partir de tus propias respuestas.</li>
                    <li> <span>&#x261B;</span> Creación de la propuesta de valor,</li>
                    <li> <span>&#x261B;</span> Estructuras de landing pages.</li>
                    <li> <span>&#x261B;</span> Tips para tu textos de venta por correo (newsletters).</li>
                </ul>
            </div>
        </div>
    </section>
    <!--  5tipoc cita -->
    <section>
        <div class="land-imaginate">
            <div class="land-imaginate_contenido contenedor">
                <h3>Imaginate ser capaz de escribir textos potentes que vendan.</h3>
            </div>
        </div>
    </section>
    <section>
        <div class="land-que-contiene">
            <div class="land-que-contiene_contenido contenedor">
                <!--6 que contiene -->
                <div>
                    <h3>¿Qué contiene <i>Escribeweb</i> ?</h3>
                    <ul>
                        <li> <span>&#10003;</span> Menú amigable</li>
                        <li> <span>&#10003;</span> Soporte</li>
                        <li> <span>&#10003;</span> Cuestionario con explicación y ejemplos</li>
                        <li> <span>&#10003;</span> Seccion de frases y titulares:</li>
                        <li> <span>&#10003;</span> Para presentar problema</li>
                        <li> <span>&#10003;</span> Para presentar la solución </li>
                        <li> <span>&#10003;</span> Para crear urgencia </li>
                        <li> <span>&#10003;</span> Para llamada a la acción (CTA)</li>
                        <li> <span>&#10003;</span> Sección fórmula pas</li>
                        <li> <span>&#10003;</span> Secció fórmula aida</li>
                        <li> <span>&#10003;</span> Sección power words</li>
                        <li> <span>&#10003;</span> Recursos:</li>
                        <li> <span>&#10003;</span> Propuesta de valor</li>
                        <li> <span>&#10003;</span> Guia para crear landing pages</li>
                        <li> <span>&#10003;</span> Tips para texto de venta por correo electrónico</li>
                    </ul>
                </div>
                <div class="cuadro1">&#9858;&#9858;&#9858;&#9858;&#9858;&#9858;&#9858;&#9858;</div>
            </div>
        </div>
    </section>
    <!-- cta -->
    <div class="cta-intermedio">
        <div class="land-cta">
            <div class="land-cta_contenido contenedor">
                <div class="boton-cta">
                    <a href="https://escribeweb.com/membership-join/">Accede ahora</a>
                </div>
            </div>
        </div>
    </div>
    <!-- como se usa -->
    <section>
        <div class="land-como-se-usa">
            <div class="land-como-se-usa_contenido contenedor">
                <h3 class="como-se-usa-titulo">¿Cómo se usa?</h3>
                <h4>-Muy fácil</h4>
                <div class="como-se-usa-cards">
                    <div class="como-se-usa-tarjeta">
                        <span class="icono-como-se-usa">&#10112;</span>
                        <div class="como-se-usa-tarjeta_contenido">
                            <h3>Contestas</h3>
                            <p>Contestas 12 preguntas clave que apuntan a los beneficios, puntos de dolor, valor diferencial, etc.</p>
                        </div>
                    </div>
                    <div class="como-se-usa-tarjeta">
                        <span class="icono-como-se-usa">&#10113;</span>
                        <div class="como-se-usa-tarjeta_contenido">
                            <h3>Cargas</h3>
                            <p>Cargas y generas más de 300 respuestas bien ordenadas.</p>
                        </div>
                    </div>

                    <div class="como-se-usa-tarjeta">
                        <span class="icono-como-se-usa">&#10114;</span>
                        <div class="como-se-usa-tarjeta_contenido">
                            <h3>Guardas</h3>
                            <p>Guardar los resultados en pdf, analizas y ajustas.</p>
                        </div>
                    </div>
                </div>
                <div class="video-container">
                    <video width="100%" controls autoplay>
                        <source src="https://escribeweb.com/wp-content/uploads/2021/02/asi-de-facil-home.m4v" type="video/mp4">
                    </video>


                </div>
            </div>
        </div>
    </section>
    <!-- es para mi? -->
    <section>
        <div class="es-para-mi">
            <div class="es-para-mi_contenido contenedor">
                <h3>¿<i>Escribeweb</i> es para mi?</h3>
                <ul>
                    <li><span>&#9733;</span> Es para personas que quieran escribir los textos de su web, landing page y anuncios. Textos para vender.</li>
                    <li><span>&#9733;</span> Para quien ya tiene un tiempo con su sitio web y no tiene buenos resultados</li>
                    <li><span>&#9733;</span> Para quien escribió los textos de su web de manera más o menos improvisada </li>
                    <li><span>&#9733;</span> Para quien quiere vender y conoce a su cliente potencial</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- sobre los titulares -->
    <section>
        <div class="land-titulares">
            <div class="land-titulares_contenido contenedor">
                <div>
                    <h3>Los titulares son la puerta de la ventas digitales.</h3>
                    <p>Son lo primero que se ve en los buscadores de internet, de un anuncio, y un correo.</p>
                    <p>Los titulares te indican qué debe contener el cuerpo del texto.</p>
                    <ul>
                        <li> <span>&#9746;</span> Deja de cerrar esa puerta con frases inútiles de relleno (improvisadas).</li>
                        <li> <span>&#9745;</span> Pon un buen título y llegarán solos a tu puerta.</li>
                        <li> <span>&#9745;</span> Arma una landing page que vaya al grano de los problema que solucionas.</li>
                    </ul>
                </div>
                <img src="https://escribeweb.com/wp-content/uploads/2021/02/puerta-abierta.jpg" alt="">
            </div>
        </div>

    </section>
    <!-- desruir mitos -->
    <section>
        <div class="vs-mitos">
            <div class="vs-mitos_contenido contenedor">
                <h3>No se trata de una determinada cantidad de texto, se trata de la calidad. De evitar los textos de relleno. </h3>
            </div>
        </div>
    </section>
    <!-- la creatividad donde queda -->
    <section>
        <div class="la-creatividad">
            <div class="la-creatividad_contendio contenedor">
                <h3>¿Y la creatividad?</h3>
                <p>¡Por supuesto que sí! Pero una vez que tienes la base. Tu creatividad va a funcionar en base a lo que obtendrás con <i>Escribeweb</i>. </p>

                <p>Escribir los textos de tu web no tiene que convertirse en un tormento. Y no será así porque ya sabrás hacia dónde vas.</p>

                <h3> <i>Escribeweb</i> </h3>
                <ul>
                    <li>No es copiar y pegar, no es una fría plantilla rellenable .</li>
                </ul>
                <ul>
                    <li> <span>&#9755;</span> Es una herramienta para que logres escribir con ejemplos claros y armados con tus propias respuestas.</li>
                    <li> <span>&#9755;</span> Es una herramienta dinámica para vender.</li>
                    <li> <span>&#9755;</span> Es para que escribas tus textos sin paja.</li>
                    <li> <span>&#9755;</span> Para que no inicies con una temible hoja en blanco. </li>
                    <li> <span>&#9755;</span> Para que inicies con las bases hechas.</li>
                </ul>
            </div>
        </div>
    </section>
    <section>
        <div class="cuando-improvizas">
            <div class="cuando-improvizas_contenido contenedor">

                <h3>Cuando improvisas estás siempre a tientas, ¡ya no estés a tientas! Ve a paso seguro con <i>escribeweb.</i> </h3>
            </div>
        </div>
    </section>
    <!-- cta -->
    <section>
        <div class="porque-cree">
            <div class="porque-cree_contenido contenedor">
                <div>
                    <h3>¿Quién creó Escribeweb?</h3>
                    <p>Soy Marco Jaram estudié desarrollo web y copywriting.</p>
                    <p>Cuando hago sitios web el problema principal son los textos.
                    </p>
                    <p>Para mi, la estructura y el diseño giran en torno al texto.
                    </p>
                    <p class="texto-rey"><strong>El texto es el rey</strong>.&#9820;</p>
                    <p>No importa si es un sitio lleno de video e imágenes.
                    </p>
                    <p>Aprovechando mis conocimientos pude crear esta aplicación.</p>
                    <p>Mis clientes sin saberlo difrutan esta herramienta.</p>
                    <p>Pero ahora la he abierto a todos.
                    </p>
                </div>
                <div>
                    <img src="https://escribeweb.com/wp-content/uploads/2021/02/marcojaram.png" alt="imagen-marco">
                </div>
            </div>
        </div>
    </section>
    <div class="land-cta">
        <div class="land-cta_contenido contenedor">
            <div class="boton-cta">
                <a href="https://escribeweb.com/membership-join/">Accede ahora</a>

            </div>
        </div>
    </div>



<?php get_footer( ); ?>