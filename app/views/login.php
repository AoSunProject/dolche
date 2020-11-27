<form action="<?=Url::local("login/login")?>" method="post" role="form">
    <dl>
        <dt>Логін</dt>
        <dd><input type="text" name="login" class="form-control"> </dd>
        <dt>Пароль</dt>
        <dd><input type="password" name="pass" class="form-control"> </dd>
        <dt><input type="submit" value="Авторизація" role="form"></dt>
    </dl>
</form>
