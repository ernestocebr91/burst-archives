<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Autor" content="Ernesto Cebrián">
    <!-- CDN de Bootstrap --> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">  
    <link href="https://fonts.googleapis.com/css2?family=Charm:wght@400;700&display=swap" rel="stylesheet">
    <!-- Fontawesome --> 
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/logonuevonuevo.png') }}" type="image/x-icon">
    <title>Nueva instrumento - Burst Archives</title>
</head>
<body class="d-flex flex-column min-vh-100">
    
    <!-- Header -->
    <header>
        <!-- Top -->
        <div id="top" class="container-fluid d-flex justify-content-center p-2 d-sm-flex">
            <span><i class="fas fa-book"></i>&nbsp;&nbsp;¡La primera enciclopedia online colaborativa de <a href="https://es.wikipedia.org/wiki/Gibson_Les_Paul" target="_blank"><span class="logo ink">Gibson&nbsp;<span> Les Paul</span> </span></a>&nbsp;del mundo!&nbsp;&nbsp;<i class="fas fa-book"></i></span>
        </div>
    </header>
    <!-- Flecha para subir -->
    <div id="contenedorFlecha" class="d-flex justify-content-end fixed-bottom pb-3">
        <a id="flecha" href="#"><i class="fas fa-chevron-circle-up px-4"></i></a>
    </div>
    <!-- Registro de usuario -->
    <section id="perfilUsuario">
        <div class="texto container mt-5 mb-5 pt-2 pb-5">
            <div class="container px-5">
                <h3 class="ink px-4 pt-3 display-3 mt-3 text-center">Nuevo <span>instrumento</span></h3>
                <div class="row">
                    <!-- Ajustes del perfil -->
                    <div class="container col-12 p-4 text-center mt-0">
                        <div class="card py-4">
                            <div class="row">
                                <div class="container col-12 col-lg-7 p-5 pt-3 mt-1">
                                    <h4 class="ink pb-2 mt-2"><strong><span>Inserte los datos del instrumento</span></strong></h4>
                                    <!-- Formulario -->   
                                    <form class="php-email-form" action="{{ url('/instrumento') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <p class="m-2 text-muted px-2">Datos del instrumento</p>
                                        <div class="form-row p-3 pt-0">
                                            <!-- Nombre del instrumento -->
                                            <div class="form-group pb-2">
                                                <input type="text" name="nombre" class="form-control text-center" id="nombre" placeholder="Introduzca un nombre" required>
                                            </div>
                                            <!-- Número de serie -->
                                            <div class="form-group pb-2">
                                                <input type="text" name="numeroSerie" class="form-control text-center" id="numeroSerie" placeholder="Introduzca un número de serie" required>
                                            </div>
                                            <!-- Año de fabricación -->
                                            <div class="form-group pb-2">
                                                <input type="text" name="anioFabricacion" class="form-control text-center" id="anioFabricacion" placeholder="Introduzca el año de fabricación" required>
                                            </div>
                                            <!-- Descripción -->
                                            <div class="form-group py-2">
                                                <textarea class="form-control text-center" name="descripcion" rows="3" id="descripcion" placeholder="Introduzca una descripción"></textarea>
                                            </div>
                                            <p class="m-2 text-muted px-2">Imágenes</p>
                                            <!-- Imagen principal -->
                                            <div class="form-group py-2">
                                                <input type="file" class="form-control" name="imagenPrincipal" id="imagenPrincipal" required>
                                            </div>
                                            <!-- Imagen(1) -->
                                            <div class="form-group py-2">
                                                <input type="file" class="form-control" name="imagenUno" id="imagenUno" required>
                                            </div>
                                            <!-- Imagen(2) -->
                                            <div class="form-group py-2">
                                                <input type="file" class="form-control" name="imagenDos" id="imagenDos" required>
                                            </div>
                                            <!-- Imagen(3) -->
                                            <div class="form-group py-2">
                                                <input type="file" class="form-control" name="imagenTres" id="imagenTres" required>
                                            </div>
                                            <!-- Imagen(4) -->
                                            <div class="form-group py-2">
                                                <input type="file" class="form-control" name="imagenCuatro" id="imagenCuatro" required>
                                            </div>
                                            <!-- Imagen(5) -->
                                            <div class="form-group py-2">
                                                <input type="file" class="form-control" name="imagenCinco" id="imagenCinco" required>
                                            </div>
                                            <!-- Imagen(6) -->
                                            <div class="form-group py-2">
                                                <input type="file" class="form-control" name="imagenSeis" id="imagenSeis" required>
                                            </div>
                                            <p class="m-2 text-muted px-2">Datos del dueño</p>
                                            <!-- Nombre del dueño -->
                                            <div class="form-group pb-2">
                                                <input type="text" name="nombreOwner" class="form-control text-center" id="nombreOwner" placeholder="Introduzca el nombre del dueño" required>
                                            </div>
                                            <!-- Foto del dueño -->
                                            <div class="form-group py-2">
                                                <input type="file" class="form-control" name="imagenOwner" id="imagenOwner" required>
                                            </div>
                                            <p class="m-2 text-muted px-2">Datos de componentes</p>
                                            <!-- Componente -->
                                            <div class="form-group pb-2">
                                                <input type="text" name="componente" class="form-control text-center" id="componente" placeholder="Introduzca un componente" required>
                                            </div>
                                            <!-- Imagen del componente -->
                                            <div class="form-group py-2">
                                                <input type="file" class="form-control" name="imagenComponente" id="imagenComponente" required>
                                            </div>
                                            <p class="m-2 text-muted px-2">Contenido multimedia</p>
                                            <!-- Vídeo -->
                                            <div class="form-group pb-2">
                                                <input type="text" name="video" class="form-control text-center" id="video" placeholder="Introduzca la url de un vídeo" required>
                                            </div>
                                            <!-- Descripción del vídeo -->
                                            <div class="form-group py-2">
                                                <textarea class="form-control text-center" name="descripcionVideo" rows="3" id="descripcionVideo" placeholder="Introduzca la descripción del vídeo"></textarea>
                                            </div>
                                            <p class="m-2 text-muted px-2">Imagen disco</p>
                                            <!-- Imagen del disco -->
                                            <div class="form-group py-2">
                                                <input type="file" class="form-control" name="imagenDisco" id="imagenDisco" required>
                                            </div>
                                            <!-- Título del disco -->
                                            <div class="form-group pb-2">
                                                <input type="text" name="tituloDisco" class="form-control text-center" id="tituloDisco" placeholder="Introduzca un título de disco" required>
                                            </div>
                                        </div>
                                        <div class="btns mt-5 container d-flex justify-content-center">
                                            <input id="registrar" type="submit" class="px-5 mx-2" value="Publicar">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Perfil de usuario -->
        <div class="btns container d-flex justify-content-center mt-5 mb-5">
            <a href="../usuario" class="btn col-lg-3 px-3">&nbsp;Perfil de usuario&nbsp;</a>
        </div>
    </section>
    <!-- Footer -->
    <footer class="text-center">
        <div class="container-fluid p-2">
            <p class="pt-3">&copy;&nbsp;Copyright <b>Burst Archives</b>. Todos los derechos reservados.</p>
            <p>Diseñado por <a href="https://www.linkedin.com/in/ernestocebr/" class="text-decoration-none" target="_blank">Ernesto Cebrián</a></p>
        </div>
    </footer>
    <script src="js/main.js"></script>
    <!-- Scripts de JS y jQuery -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Script para que aparezca el menú al hacer scroll -->
    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 85) {
                $('#flecha').addClass('fadeIn');
                $('#flecha').removeClass('fadeOut');
                $('#flecha').css('display', 'block');
            } else if ($(document).scrollTop() < 85) {
                $('#flecha').addClass('fadeOut');
                if ($('#flecha').hasClass('fadeIn')) {
                    $('#flecha').removeClass('fadeIn');
                    setTimeout(function() {
                        $('#flecha').css('display', 'none'); 
                    }, 1000);
                }
            }
        });
    </script>
</body>
</html>