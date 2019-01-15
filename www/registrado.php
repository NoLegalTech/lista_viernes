<?php

    require_once(__DIR__.'/inc/functions.php');

    if (verifyFormToken('form_registro')) {
        verifyPostData(array('token', 'email', 'pass', 'confirm-vote', 'u'));
        verifyEmail();
        verifyUrl();
        $db = db_connect();
        $rows = db_query($db, 'SELECT * FROM usuario WHERE email = "' . $_POST['email'] . '"');
        if (count($rows) > 0) {
            doError('El email introducido corresponde a un usuario ya registrado y por tanto no se puede registrar de nuevo.');
        }
        $token_activation = getRandomToken();
        if (db_insert($db, 'INSERT INTO usuario(email, password, activation_token) VALUES ("' . $_POST['email'] . '", "' . $_POST['pass'] . '", "' . $token_activation . '")') === true) {
            // send email
        } else {
            doError('Se produjo un error inesperado al intentar registrar el usuario: <pre>' . $db->error . '</pre>');
        }
    } else {
        writeLog('form_registro');
        doError("Hack-Attempt detected. Got ya!.");
    }

    page_open();

?>

                        <!-- Post -->
                            <section class="post">
                                <header>
                                    <h2>Bienvenido</h2>
                                </header>


                                <h4>Comprueba tu correo para activar tu cuenta</h4>
                                <p>Comprueba tu bandeja de entrada en <?php echo $_POST['email']; ?>, donde te hemos enviado un correo con un enlace para activar tu cuenta.</p>

                                <p style="color: red">
                                    Como esto es un prototipo y no manda emails aquí tienes el link:
                                </p>

                                <a style="color: red" href="<?php echo getPage('activation') . '?token=' . $token_activation; ?>">
                                    <?php echo getPage('activation') . '?token=' . $token_activation; ?>
                                </a>

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
            <script src="assets/js/crypto-js.js"></script>
            <script src="assets/js/main.js"></script>

    </body>
</html>

<?php
    db_close();
?>
