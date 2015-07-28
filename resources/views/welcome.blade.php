<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Flat-Mate Website Template | Home :: w3layouts</title>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css'/>
    <link href="css/theme-style.css" rel='stylesheet' type='text/css'/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="images/fav-icon.png"/>

    <!----webfonts---->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Fauna+One' rel='stylesheet' type='text/css'>
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
                        <a href="#" id="texto-logo"><img src="/images/logo.png" title="Flatmate" width="100px"/> Public Hangouts</a>
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

                <h1>Lorem ipsum dolor sit amet</h1>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. </p>

                <p><a class="btn btn-primary btn-lg b-btn" href="#"> Read More</a></p>
            </div>
            <div class="well slide-banner-right col-md-4">
                <img src="images/slider-img.png" class="img-responsive" alt=""/>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-----//slide-banner---->
    </div>
</div>
<!----start-top-grids---->
<div class="top-grids">
    <div class="container">

        <div class="top-grid-center">
            <a id="create-room" class="btn btn-warning pull-right">Crear Sala</a>
            <h2>Salas Disponibles</h2>

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
            <form>
                <div class="col-md-6 contact-text-box">
                    <div>
                        <span>Name<label>*</label></span>
                        <input type="text" required/>
                    </div>
                    <div>
                        <span>Email<label>*</label></span>
                        <input type="text" required/>
                    </div>
                </div>
                <div class="col-md-6 contact-text-textarea">
                    <div>
                        <span>Message<label>*</label></span>
                        <textarea> </textarea>
                    </div>
                    <input class="btn btn-danger btn-lg" type="submit" Value="send"/>
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
                    <li><a href="#"><img src="images/footer-logo.png" title="logo" /></a></li>
                    <li><p>Template by <a href="http://w3layouts.com/">W3layouts</a></p></li>
                </ul>
            </div>
            <div class="col-md-6 footer-right">
                <ul>
                    <li><a class="twitter" href="#"><span> </span></a></li>
                    <li><a class="facebook" href="#"><span> </span></a></li>
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
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Crear Sala</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="name">Elige el tema que deseas tratar en la sala</label>
                    <select id="topic" class="form-control" required="1" name="quizTypeID">
                        <option value="">Seleccionar</option>
                        <option>Idiomas</option>
                        <option>Política</option>
                        <option>Deportes</option>
                        <option>Tecnología</option>
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
<!----//requred-js-files---->
</body>
</html>

