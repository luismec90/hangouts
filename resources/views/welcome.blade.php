<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Public Hangouts | Chat | Video chat </title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css'/>
    <link href="css/theme-style.css" rel='stylesheet' type='text/css'/>
    <link href="/css/chat.css" rel='stylesheet' type='text/css'/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="/images/fav-icon.png"/>

    <!----webfonts---->
    <link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800"
          rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Fauna+One" rel="stylesheet">
    <!----//webfonts---->

</head>
<body>
<!----start-bg---->
<div class="bg">
    <!----start-container---->
    <div class="container">
        <!---- start-header---->
        <div class="row header">
            <div class="row">
                <div class="col-md-6">
                    <!----start-logo---->
                    <div class="well logo">
                        <a href="#" id="texto-logo"><img src="/images/logo.png" title="Flatmate" width="100px"/> Public
                            Hangouts</a>
                    </div>
                    <!----//End-logo---->
                </div>
                <div class="well col-md-6">
                    <!---start-header-right--->
                    <div class="login-info well header-right">
                        <!--<p><i><a href="#">Have an Account ?</a></i><a class="login btn-primary" href="#">Login</a></p> -->
                    </div>
                    <!---//End-header-right--->
                </div>
            </div>
        </div>
        <!---- //End-header---->
        <!-----slide-banner---->
        <div class="well slide-banner row">
            <div class="slide-banner-left col-md-8">
                <span> </span>

                <h1>Bienvenido!</h1>

                <p>Ahora podr&aacute;s crear salas de chat o unirte a alguna sala disponible basados en t&oacute;picos
                    de discusi&oacute;n, todo esto soportado por <a href="http://www.google.com/+/learnmore/hangouts/"
                                                                    style="color:#fff;" target="_blank">Google
                        Hangouts</a></p>

                <p>
                    <a id="entry" class="btn btn-primary btn-lg b-btn" href="#rooms">
                        <i class="glyphicon glyphicon-facetime-video" aria-hidden="true"></i>
                       Entrar
                    </a>

                    <a id="create" class="btn btn-primary btn-lg b-btn">
                        <i class="glyphicon glyphicon-facetime-video" aria-hidden="true"></i>
                        Crear
                    </a>
                </p>
            </div>
            <div class="well slide-banner-right col-md-4 hidden-sm">
                <img src="/images/slider-img.png" class="img-responsive" alt=""/>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-----//slide-banner---->
    </div>
</div>
<!----start-top-grids---->
<div id="rooms" class="top-grids">
    <div class="container">

        <div class="top-grid-center">
            <a id="create-room" class="btn btn-warning pull-right">Crear Sala</a>

            <h2>Salas Disponibles</h2>
            <hr>
            <div id="div-table"></div>
        </div>

    </div>
</div>
<!----//End-top-grids---->

<!----start-contact---->
<div class="contact">
    <div class="container">
        <p><i> </i></p>

        <div class="row">
            <form action="/contact" method="POST">
                <div class="col-md-6 contact-text-box">
                    <div>
                        <span>Nombre<label>*</label></span>
                        <input type="text" name="name" required/>
                    </div>
                    <div>
                        <span>Email<label>*</label></span>
                        <input type="email" name="email" required/>
                    </div>
                </div>
                <div class="col-md-6 contact-text-textarea">
                    <div>
                        <span>Mensaje<label>*</label></span>
                        <textarea name="message" required></textarea>
                    </div>
                    <input class="btn btn-danger btn-lg" type="submit" Value="Enviar"/>
                </div>
            </form>
        </div>
    </div>
</div>
<!----//End-contact---->

<!----start-footer--->
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 footer-left">
                <ul>
                    <li><a href="#"><img src="images/logo.png" title="logo" width="30px"/></a></li>
                    <li><p>Powered by <a href="https://luisfer.co" target="_blank">Luis F. Montoya</a></p></li>
                </ul>
            </div>
            <div class="col-md-6 footer-right">
                <ul>
                    <li><a class="facebook" href="https://www.facebook.com/publichangouts" target="_blank"><span> </span></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!----//End-footer--->
<!----//End-container---->


<div class="modal fade" id="modal-create-room">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                <h4 class="modal-title">Crear Sala</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="name">Elige el tema que deseas tratar en la sala</label>
                    <select id="topic" class="form-control" required="1" name="quizTypeID">
                        <option value="">Seleccionar</option>
                        <option>Abierto (cualquier tema)</option>
                        <option>Arte</option>
                        <option>Cine</option>
                        <option>Deportes</option>
                        <option>Ingl&eacute;s</option>
                        <option>M&uacute;sica</option>
                        <option>Portugu&eacute;s</option>
                        <option>Tecnolog&iacute;a</option>
                        <option>Otros</option>
                    </select>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                <a id="create-hangout" href="#" target="_blank" type="button" class="btn btn-primary">Crear</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>


<!----requred-js-files---->
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/chat.js"></script>
<script>
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
        a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-42717766-7', 'auto');
    ga('send', 'pageview');

</script>
<!----//requred-js-files---->
</body>
</html>

