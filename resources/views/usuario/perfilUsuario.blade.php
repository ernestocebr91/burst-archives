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
    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <link rel="shortcut icon" href="{{ asset('img(logonuevonuevo.png') }}" type="image/x-icon">
    <title>Perfil de usuario - Burst Archives</title>  
</head>
<body class="d-flex flex-column min-vh-100">
    <!-- Mensaje -->
    @if(Session::has('mensaje'))
        <?php $mensaje = Session::get('mensaje') ?>
        <script type="text/javascript">
            const mensaje = {!! json_encode($mensaje) !!};
            alert(mensaje);
        </script>
    @endif
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
    <!-- Panel de administración -->
    <section id="administracion">
        <div class="texto container mt-5 mb-5 pt-2 pb-5">
            <div class="container px-5 panelControl">
                <h3 class="ink px-4 pt-3 display-3 mt-3 text-center">Perfil de <span>usuario</span></h3>
                <div class="row">
                    <!-- Añadir instrumento -->
                    <div class="container col-xl-4 col-md-6  col-sm-10 p-4 text-center mt-0">
                        <a href="{{ url('/usuario/nuevoInstrumento') }}">
                            <div class="card py-4 cardSocial">
                                <div class="container d-flex justify-content-center p-3 pb-2">
                                    <i class="fas fa-guitar display-3"></i>
                                </div>
                                <div class="container p-3 pb-3">
                                    <h4 class="ink pb-2"><strong>Añadir <span>instrumento</span></strong></h4>
                                    <p class="text-muted small px-1">Crea una ficha de instrumento.</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Página principal -->
        <div class="btns container d-flex justify-content-center mt-5 mb-5">
            <a href="../home" class="btn col-lg-3 px-3">&nbsp;Página principal&nbsp;</a>
        </div>
    </section>
    <!-- Footer -->
    <footer class="text-center">
        <div class="container-fluid p-2">
            <p class="pt-3">&copy;&nbsp;Copyright <b>Burst Archives</b>. Todos los derechos reservados.</p>
            <p>Diseñado por <a href="https://www.linkedin.com/in/ernestocebr/" class="text-decoration-none" target="_blank">Ernesto Cebrián</a></p>
        </div>
    </footer>
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