<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Public Hangouts | Chat | Video chat </title>
    <link href="/css/bootstrap.css" rel='stylesheet' type='text/css'/>
    <link href="/css/bootstrap.min.css" rel='stylesheet' type='text/css'/>
    <link href="/css/chat.css" rel='stylesheet' type='text/css'/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="/images/fav-icon.png"/>
    <style>
        .modal-backdrop
        {
            opacity:0 !important;
        }
    </style>
    <!----webfonts---->
    <link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800"
          rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="//fonts.googleapis.com/css?family=Fauna+One" rel="stylesheet">
    <!----//webfonts---->

</head>
<body>
<!----start-bg---->

<!----start-top-grids---->
<div id="rooms" class="top-grids">
    <div class="container-fluid">

        <div class="top-grid-center">
            <a id="create-room" class="btn btn-warning pull-right">Crear Sala</a>

            <h2>Salas Disponibles</h2>
            <hr>
            <div id="div-table"></div>
        </div>

    </div>
</div>



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
                        <option>Tecnolog&iacutea</option>
                     {{--    <option>Acerca de la UN</option>
                        <option>C&aacute;lculo</option>
                        <option>F&iacute;sica</option>
                        <option>Estad&iacute;stica</option>
                        --}}
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
<script src="/js/chat2.js"></script>
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

