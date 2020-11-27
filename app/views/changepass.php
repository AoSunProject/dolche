<div id="content" class="row unrow-xs unrow-sm">
    <script src="../../js/jscript.js"></script>
            <div class="center_block">
                <h2>Відновлення пароля</h2>

                <!-- Абзац -->
                <p class="text_center mesage_error" id="valid_email_message"></p>
                <div class="login-page">
                    <div class="form">
                        <style>

                            /*Блок,в котором плавает индикатор надежности пароля*/
                            #pass11
                            {
                                background:#000;
                                width:98px;
                                height:10px;

                                display:block;
                                overflow:hidden;
                            }
                            /*индикатор надежности пароля*/
                            #pass12
                            { margin-left:-102px;
                                width:100px;
                                height:8px;
                                background:#f00;

                                display:block;
                            }
                            /*индикатор совпадения паролей*/
                            #pass22
                            { padding:1px 4px;
                                width:136px;
                                display:block;
                                font-size:10px;
                            }



                        </style>
                        <?php
                        if(isset($mess)){
                            echo "<h3>Ваш пароль успішно змінився.</h3>";
                            ?>
                            <a href="<?=Url::local('main')?>">До форми авторизації</a>
                        <?
                        }else {
                            ?>
                            <form action="<?= Url::getAction('changepass', 'newpass') ?>" name='form' method="post"
                                  name="form_request_email">
                                <input type="hidden" name="email" value="<? echo $em; ?>">
                                <label class="control-label  label-required ">Новий пароль</label>
                                <input type="password" name="pass1" id="password" required
                                       class="register-input"
                                       onKeyUp="passValid('form','pass1','pass12','submit'),isRavno('form','pass1','pass2','pass22','submit')">
                                <span id="pass11"><span id="pass12"></span></span></span>


                                <label class="control-label  label-required ">Підтвердження пароля</label>
                                <input type="password" name="pass2" id="password-check" required
                                       class="register-input" title=""
                                       onKeyUp="isRavno('form','pass1','pass2','pass22','submit')">
                                <span id="pass22"></span>
                                <input type="submit" name="save" value="Змінити пароль">

                            </form>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>


</div>



