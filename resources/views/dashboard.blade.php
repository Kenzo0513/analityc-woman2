<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    
    <title>Analytika Women</title>
    <!-- favicon -->
    <link rel="icon" type="image/png" href="{{asset('assets/assets/images/logo.png')}}"/> 
    
    <!-- Fonts and Stylesheets -->
    <link href="{{asset('assets/css/bootstrap.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/css/coming-sssoon.css')}}" rel="stylesheet" />  
</head>

<body>
<!-- Navigation -->
<nav class="navbar navbar-transparent navbar-fixed-top" role="navigation">
  <div class="container">
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
            <li>
                <a href="#">
                    <i class="fa fa-facebook-square"></i>
                    Login
                </a>
            </li>

            <li>
                <a href="resources/home/servicios.blade.php">
                    <i class="fa fa-facebook-square"></i>
                    Servicios
                </a>
            </li>
             <li>
                <a href="resources/home/eventos.blade.php">
                    <i class="fa fa-twitter"></i>
                    Eventos
                </a>
            </li>
             <li>
                <a href="#">
                    <i class="fa fa-gittip"></i>
                    Equipo de liderazgo
                </a>
            </li>
       </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container -->
</nav>

<!-- Main Section -->
<div class="main" style="background-image: url('{{asset('assets/assets/images/mujer.jpg')}}')">
    <div class="cover black" data-color="black"></div>
    <div class="container">
        <h1 class="logo cursive">
        Analytika Women
        </h1>

        <!-- About Us Section -->
        <div class="content">
            <h4 class="motto">Somos una empresa conformada por un grupo multidisciplinario de mujeres profesionales 
              de diferentes provincias del país, con una trayectoria importante de trabajo y experiencia en empresas
              públicas y privadas; tenemos un recorrido amplio de trabajo social con grupos de atención prioritaria. 
              Somos multifacéticas y creemos que la mujer está preparada para hacer que las cosas sucedan.</h4>
            <div class="subscribe">
                <h5 class="info-text">
                Transformamos datos en información, para la toma de decisiones.
                </h5>
            </div>
        </div>
    </div> 

    <!-- Vision, Mission, and Organizational Culture Sections -->
    <div class="container">
        <div class="row">
            <!-- Vision Section -->
            <div class="col-md-4 vision-section" style="background-image: url('{{ asset('assets/assets/images/glamorosa.jpg') }}');"> 
                <h3>VISIÓN</h3>
                <p>Ser una compañía ecuatoriana referente en el ámbito de la investigación financiera, económica, social
                  y política, aportando al bienestar y desarrollo humano, cumpliendo estándares de calidad, buenas prácticas
                  y aplicando metodologías innovadoras en la investigación y análisis de información.</p>
            </div>

            <!-- Mission Section -->
            <div class="col-md-4 mision-section" style="background-image: url('{{ asset('assets/assets/images/sonrisa.jpg') }}');">
                <h3>MISIÓN</h3>
                <p>Transformar data en información mediante conceptos innovadores y ágiles, para que las organizaciones e
                  instituciones públicas y privadas, cuenten con las mejores soluciones en la toma de decisiones a nivel técnico,
                    económico, político y social; considerando enfoques de tipo intergeneracional, intersectorial, intercultural,
                    ambiental, de género y movilidad.</p>
            </div>

            <!-- Organizational Culture Section -->
            <div class="col-md-4 cultura-section" style="background-image: url('{{ asset('assets/assets/images/cinco.jpg') }}');">
                <h3>CULTURA ORGANIZACIONAL</h3>
                <p>Nuestra empresa promueve la cultura de la integridad personal, para proponer las mejores alternativas frente a 
                  las necesidades o requerimientos solicitados; para lo cual nos apoyamos de un equipo multidisciplinario de profesionales
                  con equidad de género.</p>
            </div>  
        </div>  
    </div>

    <!-- Our Leader Section -->
    <div class="container">
        <div class="row">
            <div class="col-md-12 new-section" style="background-image: url('{{ asset('assets/assets/images/lider.jpg') }}');">
                <h3>NUESTRA LÍDER</h3>
                <p>"Las mujeres debemos prepararnos constantemente en diferentes áreas del conocimiento, para aprovechar las oportunidades y enfrentar los desafíos"</p>
            </div>
        </div>
    </div>
</div>  

<!-- Footer -->
<footer>
    <div class="container" style="background-image: url('{{ asset('assets/assets/images/logo.png') }}');" >
        <div class="contact-info">
            <h2>Contacto</h2>
            <p><strong>Teléfono:</strong> 0999785416 - 0990902380</p>
            <p><strong>Email:</strong> analytikawomen@gmail.com</p>
            <p><strong>Dirección:</strong> Matriz
                Quito /
                Sucursales: Pujilí / Guayaquil
            </p>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="{{asset('assets/js/jquery-1.10.2.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>

</body>
</html>
