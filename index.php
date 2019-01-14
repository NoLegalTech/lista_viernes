<?php
    session_start();

    function generateFormToken($form) {
        $token = md5(uniqid(microtime(), true));
        $_SESSION[$form.'_token'] = $token;
        return $token;
    }

    $token_registro = generateFormToken('form_registro');
    $token_login = generateFormToken('form_login');

?>

<!DOCTYPE HTML>
<!--
    Massively by HTML5 UP
    html5up.net | @ajlkn
    Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
    <head>
        <title>Lista Viernes</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css" />
        <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
    </head>
    <body class="is-loading">

        <!-- Wrapper -->
            <div id="wrapper" class="fade-in">

                <!-- Intro -->
                    <div id="intro">
                        <h1>Lista<br />
                        Viernes</h1>
                        <p>Una herramienta de mitigación preventiva del riesgo.</p>
                        <ul class="actions">
                            <li><a href="#header" class="button icon solo fa-arrow-down scrolly">Continuar</a></li>
                        </ul>
                    </div>

                <!-- Header -->
                    <header id="header">
                        <a href="index.php" class="logo">Lista viernes</a>
                    </header>

                <!-- Nav -->
                    <nav id="nav">
                        <ul class="links">
                            <li class="active"><a href="index.php">Lista Viernes</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                            <li><a href="presentacion.html">Presentación</a></li>
                        </ul>
                        <ul class="icons">
                            <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                            <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                            <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                            <li><a href="#" class="icon fa-github"><span class="label">GitHub</span></a></li>
                        </ul>
                    </nav>

                <!-- Main -->
                    <div id="main">

                        <!-- Featured Post -->
                            <article class="post featured">
                                <dl>
                                    <dt>¿Por qué hace falta una “Lista Viernes”?</dt>
                                    <dd>
                                        <p>El pasado 6 de diciembre de 2018 se cambió la ley electoral y ahora permite que los partidos políticos traten tus datos de formas antes no permitidas para enviarte propaganda electoral. Por ejemplo, ahora pueden utilizar tus comentarios en redes sociales para saber qué piensas, hacer perfiles y enviarte mensajes a tu email o teléfono con consignas personalizadas para ti.</p>
                                        <p>Para evitarlo puedes esperar a que te empiecen a llegar mensajes y utilizar el link para oponerte a recibir más… confiando en que te hagan caso.</p>
                                        <p>También puedes utilizar este formulario, rellenarlo y enviarlo uno a uno a todos los partidos que se presenten en tu circunscripción.</p>
                                        <p>Y puedes apuntarte a la Lista Viernes. Si nos apuntamos mucha, pero mucha gente, te librarás de la propaganda de todos los partidos de un solo golpe.</p>
                                    </dd>
                                    <dt>¿Quién puede inscribirse en la Lista Viernes?</dt>
                                    <dd>
                                        <p>Todos los ciudadanos con derecho de voto.</p>
                                    </dd>
                                    <dt>¿Para qué te servirá a ti, ciudadano?</dt>
                                    <dd>
                                        <p>Inscribiéndote en la Lista Viernes, podrás:</p>
                                        <p>Hacer valer tu oposición a que te envíen propaganda electoral a las direcciones de correo electrónico y teléfonos de contacto que nos proporciones.</p>
                                        <p>Sólo tienes que inscribirte una sola vez, para librarte de la propaganda de todos los partidos que concurran a tu circunscripción electoral.</p>
                                        <p>Hacer valer tu oposición a que tus datos de ideología (o cualesquiera otros) que hayas “hecho manifiestamente públicos” porque te ha dado la gana, en páginas web y redes sociales, sean “recopilados” y utilizados para otros fines distintos, en este caso para fines electorales de los partidos políticos.</p>
                                    </dd>


                            </article>

                        <!-- Posts -->
                            <section class="posts">
                                <article>
                                    <header class="major">
                                        <h2>Empieza aquí</h2>
                                        <p>Serán 5 minutos.</p>
                                    </header>

                                    <!-- Form -->
                                        <p>
                                            Inserta tu dirección de email (preferiblemente una que tengas expuesta en internet (tu empresa) o redes sociales (linkedin, twitter, instagram ¿?)
                                        </p>

                                        <form id="form_registro" method="post" action="registrado.php" class="alt">
                                            <input type="hidden" name="token" value="<?php echo $token_registro; ?>">
                                            <div class="row uniform">
                                                <div class="12u$ 12u$(xsmall)">
                                                    <input type="email" name="email" id="email" value="" placeholder="Email" />
                                                </div>
                                                <!-- Break -->
                                                <div class="12u 12u$(small)">
                                                    <input type="checkbox" id="confirm-vote" name="confirm-vote">
                                                    <label for="confirm-vote">Confirmo que tengo derecho a voto en las elecciones de mayo de 2019</label>
                                                </div>
                                                <!-- Break -->
                                                <div class="12u$">
                                                    <ul class="actions">
                                                        <li><input type="submit" value="Registrar" class="special" /></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </form>

                                        <hr />
                                </article>

                                <article>
                                    <header class="major">
                                        <h2>¿Ya te has dado de alta?</h2>
                                        <p>Identifícate aquí</p>
                                    </header>

                                    <!-- Form -->
                                        <p>
                                            Inserta tu dirección de email (preferiblemente una que tengas expuesta en internet (tu empresa) o redes sociales (linkedin, twitter, instagram ¿?)
                                        </p>

                                        <form id="form_login" method="post" action="identificado.html" class="alt">
                                            <input type="hidden" name="token" value="<?php echo $token_login; ?>">
                                            <div class="row uniform">
                                                <div class="12u$ 12u$(xsmall)">
                                                    <input type="email" name="email" id="email" value="" placeholder="Email" />
                                                </div>
                                                <div class="12u$ 12u$(xsmall)">
                                                    <input type="password" name="pass" id="pass" value="" placeholder="Contraseña" />
                                                </div>
                                                <!-- Break -->
                                                <div class="12u$">
                                                    <ul class="actions">
                                                        <li><input type="submit" value="Entrar" class="special" /></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </form>

                                        <hr />
                                </article>
                            </section>

                    </div>

                <!-- Footer -->
                    <footer id="footer">
                    </footer>

                <!-- Copyright -->
                    <div id="copyright">
                        <ul>
                            <li>&copy; <a target="_blank" href="https://secuoyagroup.com/">Secuoya Group</a></li>
                            <li>Design: <a target="_blank" href="https://html5up.net">HTML5 UP</a></li>
                            <li>Distributor: <a target="_blank" href="https://themewagon.com">ThemeWagon</a></li>
                        </ul>
                    </div>

            </div>

        <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrollex.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>

    </body>
</html>
