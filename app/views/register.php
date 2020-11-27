
<script>
    $('.message a').click(function(){
        $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
    });
</script>
<script src="../../js/jscript.js"></script>
<div class="login-page" style="width: 730px;max-width: 730px;">
    <div class="form" style="margin: 0 auto;max-width: 700px;padding: 10px;">
    <?php

    if($enter[0]['zn']=='1'){


    if (isset($res)){

        echo "<h2>{$res}</h2>";
        ?>
        <a href="<?= Url::local('main') ?>">До форми авторизації</a>
        <?
    } elseif (isset($res1)) {
        echo "<h2>{$res1}</h2><br>";
        ?>
        <a href="<?= Url::local('main') ?>">До форми авторизації</a>
        <?
    }
    else{
    ?>
        <style>
            .control-label{
                font-size: 12px;color: #818181;
            }
            tr td{
                text-align: left;
                padding-top: 10px;
            }
            .form tr td input,tr td select{
                height: 30px;
            }
        </style>
        <div style="margin: 8px;
border: 1px solid #122b40; padding: 10px;box-sizing: border-box;">
        <h1>Реєстрація в системі</h1>
        <form style='width:600px; margin: 0 auto;max-width: 600px;' method="POST" class="sign-up-container" name='form'
              action="<?= Url::getAction('register', 'register'); ?>">
            <div class="panel-body panel-green" style="padding: 8px;">
                <table style="color: black; width: 100%;">
                    <tr>
                        <td><label class="control-label  label-required ">ПІБ:</label></td>
                        <td><input class="register-input" type="text" name="pib" placeholder="Кучеренко Іван Іванович"
                                   maxlength="35" required
                                   class="register-input " id="m1"></td>
                    </tr>
                    <tr>
                        <td><label class="control-label  label-required ">Логін:</label></td>
                        <td style="width: 65%;">
                            <input class="register-input" id="m2" type="text" name="login" placeholder="admin" maxlength="35"
                                   required pattern="[A-z]+"
                                   class="register-input"></td>
                    </tr>


                    <tr>
                        <td><label class="control-label  label-required ">Пароль:</label></td>
                        <td>
                            <input type="password" name="pass1" id="password" required style="margin: 0; width: 100%; border: 1px solid rgba(0,0,0,.15);
                        border-radius: .25rem;"
                                   class="register-input"
                                   onKeyUp="passValid('form','pass1','pass12','submit'),isRavno('form','pass1','pass2','pass22','submit')">
                            <span id="pass11" style="display: none;"><span id="pass12"></span></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label class="control-label  label-required ">Підтвердження пароля:</label></td>
                        <td>
                            <input type="password" name="pass2" id="password-check" required
                                   class="register-input" title=""
                                   onKeyUp="isRavno('form','pass1','pass2','pass22','submit')" style="margin: 0; width: 100%; border: 1px solid rgba(0,0,0,.15);
                        border-radius: .25rem;">
                            <span id="pass22"></span>
                        </td>
                    </tr>
                    <tr>
                        <td><label class="control-label  label-required ">Телефон:</label></td>
                        <td>
                            <input type="text" name="phone" id="m3" placeholder="+3809767856" maxlength="35" required
                                   class="register-input"></td>
                    </tr>
                    <tr>
                        <td><label class="control-label  label-required ">Email:</label></td>
                        <td>
                            <input type="email" name="email" id="m4" placeholder="12345@gmail.com"
                                   maxlength="35" required
                                   class="register-input"></td>
                    </tr>

                    <tr>
                        <td><label class="control-label  label-required ">Лікарня:</label></td>
                        <td>
                            <select name="riv" id="m5" class="register-input">
                                <?php
foreach ($klinika as $item):
echo "<option value='{$item['id']}'>{$item['name']}</option>";
endforeach;
                                ?>
                            </select></td>
                    </tr>

                </table>
                <style>

                    /*Блок,в котором плавает индикатор надежности пароля*/
                    #pass11 {
                        background: #000;
                        width: 98px;
                        height: 10px;

                        display: block;
                        overflow: hidden;
                    }

                    /*индикатор надежности пароля*/
                    #pass12 {
                        margin-left: -102px;
                        width: 100px;
                        height: 8px;
                        background: #f00;

                        display: block;
                    }
                    #m1,#m2,#m3,#m4,#m5{
                        color: #495057;
                        background: #fff;
                        margin: 0px;
                        width: 100%;
                        border: 1px solid rgba(0,0,0,.15);
                        border-radius: .25rem;
                    }
                    /*индикатор совпадения паролей*/
                    #pass22 {
                        padding: 1px 4px;
                        width: 136px;
                        display: block;
                        font-size: 10px;
                    }
#mm,#mm1{
    color:  #0c516c;
    background: white;
    min-width: 80px;
    font-size: 0.8rem!important;
height: 40px;
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid #0c516c;
    padding: .375rem .75rem;

    line-height: 1.5;
    border-radius: .25rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
#mm:hover,#mm1:hover{
    cursor: pointer;
    color: white ;
    background:#0c516c ;
    font-weight: bold;
}
                </style>
            </div>
            <div ng-if="mode === 'Login'" class="btn-space btn-with-line ng-scope"
                 style="display: flex;flex-direction: row; height: 40px; justify-content: flex-end;">
                <button type="submit" class="btn btn-success  center-block  " id="mm"
                        >
                    Зареєструватися

                </button>
        </form>
        <form method="post" style="margin-left: 10px;" action="<?= Url::local('main') ?>">
            <button type="submit" class="btn btn-success  center-block " id="mm1"
                   >Відміна
            </button>
        </form>
    </div>

    </div>
</div>
</div>
<?php

}
}else{
        echo "<h2>Вибачте але реєстрація тимчасова заборонена, зверніться до адміністратора</h2>";
        ?>
    <a href="<?= Url::local('main') ?>">До форми авторизації</a>
<?
}
?>




