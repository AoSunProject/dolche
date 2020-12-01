<!DOCTYPE html>
<html lang="uk">
<head>
    <title>Фітнес для вас</title>
    <meta charset="UTF-8">
    <link href="../../css/style1.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="../../css/demo.css" />
    <link rel="stylesheet" type="text/css" href="../../css/component.css" />
    <link href="../../css/bootstrap.css" rel="stylesheet">
    <script src="../../js/modernizr.custom.js"></script>
</head>
<body >
<header>
    <nav><h1>Фітнес для вас</h1></nav>
    <div class="container">
        <ul id="gn-menu" class="gn-menu-main">
            <li class="gn-trigger">
                <a class="gn-icon gn-icon-menu"><span>Menu</span></a>
                <nav class="gn-menu-wrapper">
                    <div class="gn-scroller">
                        <ul class="gn-menu">
                            <li class="gn-search-item">
                                <input placeholder="Поиск" type="search" class="gn-search">
                                <a class="gn-icon gn-icon-search"><span>Пошук</span></a>
                            </li>
                            <li>
                                <a class="gn-icon gn-icon-download" href="<?=Url::local("gallary");?>">Користувачі</a>

                            </li>
                            <li><a class="gn-icon gn-icon-cog">Настройки</a></li>
                            <li><a class="gn-icon gn-icon-help">Анкети</a></li>
                            <li>
                                <a class="gn-icon gn-icon-archive">Клиніки</a>
                                <ul class="gn-submenu">
                                    <li><a class="gn-icon gn-icon-article">Карточкі користувачів</a></li>

                                </ul>
                            </li>
                        </ul>
                    </div><!-- /gn-scroller -->
                </nav>
            </li>
            <?php
            if(isset($_SESSION['user'])){
                if($_SESSION['role']==1){
                    $role1='Администратор';
                }
                else{
                    $role1='';
                }
                echo "<li><a href=''>Ви вошли как  ".$_SESSION['user']."</a></li>";
                ?><li><a class='codrops-icon codrops-icon-prev' href='<?=Url::getAction('main', 'logaut')?>'>Выход</a></li>
           <? }
            ?>


            <li><a class="codrops-icon codrops-icon-prev"><span>Фітнес для вас</span></a></li>
        </ul>
    </div>
</header>


        <?=$content?>
<script src="../../js/classie.js"></script>
<script src="../../js/gnmenu.js"></script>
<script>
    new gnMenu( document.getElementById( 'gn-menu' ) );
</script>
</body>
</html>
