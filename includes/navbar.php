
<script>
    function openNav() {
        document.getElementById("navBar").style.width = "250px";
    }

    function closeNav() {
        document.getElementById("navBar").style.width = "0";
    }
</script>

<nav>
    <div id="navBar">
        <a id="closeNavBar" href="javascript:void(0)" onclick="closeNav()">&times;</a>
        <a class="navOption" href="menu.php">Inicio</a>
        <?php

            if (isset($_SESSION["employeeId"])){
        ?>
        <a class='navOption' href='signup.php'>Registrar Administrador</a>
        <a class='navOption' href='controller/logout.controller.php'>Cerrar sesión</a>
        <?php
            }else{
        ?>
        <?php
            }
        ?>
    </div>
    <div id="navMobile">
        <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
    </div>

</nav>