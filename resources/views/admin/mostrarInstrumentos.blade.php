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
    <title>Listado de instrumentos - Burst Archives</title>
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
    <!-- Mensaje -->
    @if(Session::has('mensaje'))
        <?php $mensaje = Session::get('mensaje') ?>
        <script type="text/javascript">
            const mensaje = {!! json_encode($mensaje) !!};
            alert(mensaje);
        </script>
    @endif
    <!-- Registro de usuario -->
    <section id="perfilUsuario">
        <div class="texto container mt-5 mb-5 pt-2 pb-5">
            <div class="container px-5">
                <h3 class="ink px-4 pt-3 display-3 mt-3 text-center">Listado de <span>instrumentos</span></h3>
                <div class="row">
                    <!-- Ajustes del perfil -->
                    <div class="container col-12 p-4 text-center mt-0">
                        <div class="card">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Imagen</th>
                                        <th>Nombre</th>
                                        <th>Número serie</th>
                                        <th>Descripción</th>
                                        <th>Imagen disco</th>
                                        <th>Título disco</th>
                                        <th>Editar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($instrumentos as $instrumento)
                                    <tr>
                                        <td><img class="w-100" src="{{ asset('storage') . '/' . $instrumento->imagenPrincipal }}" alt="{{ $instrumento->nombre }}"></td>
                                        <td>{{ $instrumento->nombre }}</td>
                                        <td>{{ $instrumento->numeroSerie }}</td>
                                        <td>{{ $instrumento->descripcion }}</td>
                                        <td><img class="w-100" src="{{ asset('storage') . '/' . $instrumento->imagenDisco }}" alt="{{ $instrumento->tituloDisco }}"></td>
                                        <td>{{ $instrumento->tituloDisco }}</td>
                                        <td><a id="editar" href="{{ url('/instrumento/' . $instrumento->id . '/edit') }}">Editar</a></td> 
                                    </tr>    
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Página principal -->
        <div class="btns container d-flex justify-content-center mt-5 mb-5">
            <a href="../admin" class="btn col-lg-3 px-3">&nbsp;Panel de administración&nbsp;</a>
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