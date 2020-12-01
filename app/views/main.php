<script>
    $('.message a').click(function(){
        $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
    });
</script>
<div class="login-page" >
    <div class="form" style="width: 450px; padding: 35px;">
<div style="border: 1px solid #4e555b;padding: 15px;">

        <?php
        if(isset($admin)){
            echo "<h2>{$admin}</h2>";
        }
        ?>
<style>

    a.disabled {
        pointer-events: none; /* делаем элемент неактивным для взаимодействия */
        cursor: default; /*  курсор в виде стрелки */
        color: #888;/* цвет текста серый */
    }
    .disabled:hover{
        background: white;
        color: #888;
        font-weight: normal;
    }
    #t1 tr td a{
        text-decoration: none;
color:black;


    }
    #t1 tr td a:hover{
        background: #295b8e;
        color: white;
        font-weight: bold;
    }
    #t1 tr td{

        box-sizing: border-box;
        border: 1px solid grey;
    }
    #t1 tr td:hover{
        background: #295b8e;
    }
    #t1{
        width: 100%;
        border-collapse: collapse;
        border: 1px solid grey;
    }
    .activ{
        background: #295b8e;
        color: white;
        font-weight: bold;
    }
    #m1,#m2{
        color: #495057;
        background: #fff;
margin: 0px;
        width: 100%;
        border: 1px solid rgba(0,0,0,.15);
        border-radius: .25rem;
    }
    .mmm{
        background: white;
    }
    .mmm:hover{
        background: white;
    }
</style>
        <h3 style="color:grey;">Вхід до особистого кабінету</h3>
            <table id="t1" style="margin-top: 20px;margin-bottom: 20px;"><tr><td class="activ"><a style='color: white;' href="<?=Url::local('main')?>">Авторизація</a></td>
                    <td> <a class="link-to link-to-info" href="<?=Url::local('fpass')?>">Забув пароль?</a></td>
                    <td
                        <?php
                        if($enter[0]['zn']=='0') {
                            echo "class='mmm'";

                        }
                        ?>
                    ><a <?
                           if($enter[0]['zn']=='0') {
                               echo "class='disabled'";

                           }?>href="<?=Url::local('register')?>">Реєстрація</a></td></tr></table>
        <form class="login-form" method="post" action="<?= Url::getAction('admin', 'login') ?>">
            <table style="width: 100%;"><tr><td>
            <label style="font-size: 12px;">Особистий <b>логін:</b></label></td>
                    <td><input id="m1" type="text" name="login" placeholder="Логін"/></td></tr>
                <tr><td style="padding-top: 15px;">

            <label style="font-size: 12px;">Пароль захисту:</label></td><td><input id="m2" type="password" name="pass" placeholder="Пароль"/></td>
                </tr></table>
            <div _ngcontent-c8="" class="form-group row" style="display: flex;justify-content: flex-end;margin-top: 15px;">
                <div _ngcontent-c8="" class="col-sm-7" style="width: 200px; margin-right: -10px;">
                    <button _ngcontent-c8="" class="btn btn-default log_button btn-mr" tabindex="1" type="submit" title="Увійти">Увійти
                    </button>
                    <button _ngcontent-c8="" class="btn btn-default log_button btn-mr" id="CancelButton" tabindex="2" title="Відміна" type="button">Відміна
                    </button>
                </div>

            </div>
        </form><br>

<?
if($enter[0]['zn']=='0'){?>
            <div _ngcontent-c8="" class="col-12" style="padding: 0;    "><!---->
                <div _ngcontent-c8="" class="card-header alert alert-info ng-star-inserted" style="font-size: 11px;
    font-weight: bold;padding: .75rem 0.5rem; margin: 0;">
                    Опція "Реєстрація" доступна лише за згодою адміністратора</div></div>
<?}
?>
</div>
    </div>
    </div>

    <link rel="stylesheet" href="../../css/styles.fb966e9386e8aa2eeaea.css?ts=<?=time()?> &quot;">

</div>



