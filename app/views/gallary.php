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
<h2 class="register-title">Реєстрація користувачів</h2>
    <form class="register" method="post"  action="<?= Url::getAction('gallary', 'adduser') ?>">
<table>
    <tr><td><label class="lab">Прізвище Ім`я Побатькові</label>
            <input class="register-input" type="text" name="pib" placeholder="Кучеренко Іван Іванович" maxlength="35" required
                   class="form-control"></td>
      </tr>
    <tr>
    <td>  <label class="lab">Логін</label>  <input class="register-input" type="text" name="login" placeholder="admin" maxlength="35" required pattern="[A-z]+"
                  class="form-control"></td></tr>


     <tr><td> <label class="lab">Пароль</label>
             <input type="password" name="pass"  id="password" required
                    class="register-input"></td></tr>
     <tr><td>
         <label class="lab">Підтвердження пароля</label>
         <input type="password" name="pass2"  id="password-check" required
                class="register-input" title="">
     </td></tr>
<tr>  <td>  <label class="lab">Телефон</label>  <input type="text" name="phone" placeholder="+3809767856" maxlength="35" required
                                           class="register-input"></td></tr>

             <tr><td colspan="2"> <input class="register-button" type="submit" name="send" value="Додати"></td></tr>



        </table>
    </form>
    <h2 class="text-info">Користувачі в системі</h2>
    <table class="table table-bordered">
        <tr>
            <th>ПІБ</th><th>Логін</th><th>Дата додавання</th><th>Рівень доступу</th>
        </tr>
        <?php
        foreach ($user as $value){
            echo "<tr><td>{$value['pib']}</td><td>{$value['login']}</td>
<td>{$value['dat']}</td><td>{$value['role']}</td></tr>";
        }
        ?>
    </table>
    <div class="clear" style="clear:both;"></div>
    <br>
    <br>
    <?php
}
else{
    echo "<h3>Авторизуйтесь</h3>";
}
?>
<style type="text/css">
    [title="err"]{
        border: solid 2px red;
    }
</style>

  <script>
           window.addEventListener('DOMContentLoaded', function() {
             var form = document.querySelector('.form'),
             pas = form.querySelectorAll('#password, #password-check');
              form.addEventListener('submit', function(e) {
               var err = !(pas[0].value && (pas[0].value ==  pas[1].value))
              pas[1].setAttribute("title", err ? 'err' : '');
               err && e.preventDefault();
            }, false);
              pas[1].addEventListener('input', function(e) {
               var err = !(pas[0].value ==  pas[1].value)

               pas[1].setAttribute("title", err ? 'err' : '');
             }, false);
               });
        </script>
