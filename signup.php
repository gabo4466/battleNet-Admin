<html>
<head>
<?php
include "includes/head.php";
?>
    <link rel="stylesheet" href="styles/signup.css">
</head>
<body>



    <?php
        include "includes/navbar.php";
    ?>
    <section>
        <div id="signUp">
            <form action="controller/signup.controller.php" method="post">
                <h2>Ingresa los datos del nuevo admin</h2>
                <div id="formSignUp">
                    <label for="name">Nombre</label>
                    <input type="text" required name="name" placeholder="Nombre...">
                    <label for="email">Email</label>
                    <input type="text" required name="email" placeholder="Email...">
                    <label for="nif">Nif</label>
                    <input type="text" required name="nif" placeholder="Nif...">
                    <label for="address">Dirección</label>
                    <input type="text" required name="address" placeholder="Dirección...">
                    <label for="pwd">Contraseña</label>
                    <input type="password" required name="pwd" placeholder="Contraseña...">
                    <label for="pwdRepeat">Repetir Contraseña</label>
                    <input type="password" required name="pwdRepeat" placeholder="Repetir Contraseña...">
                    <button type="submit" name="submit" value="1">Registrar</button>
                </div>
            </form>
        </div>
    </section>


</body>
</html>