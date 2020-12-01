<?php
session_start();
if(isset($_SESSION['user'])) {
    ?>
    <script src="../../js/jqury.js"></script>
    <script src="../../js/jquery.maskedinput.js"></script>
    <style>
        form {

            width: 80%;
            margin: 0 auto;
        }
    </style>

    <?php
    echo "<h1>Список карток пацієнтів</h1>";
}
else{
    echo "<h3>Авторизуйтесь</h3>";
}
?>
