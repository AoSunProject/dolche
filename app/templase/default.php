<!DOCTYPE html>
<html lang="uk">
<head>
    <!--<title>Електронний реєстр хворих сахарним діабетом</title>-->
    <meta charset="UTF-8">
    <script type="text/javascript" async="" src="../../index_files/recaptcha__uk.js.Без названия?ts=<?=time()?> &quot;"></script>
    <script async="" src="../../index_files/analytics.js.Без названия?ts=<?=time()?> &quot;"></script>
    <script src="../../index_files/api.js.Без названия?ts=<?=time()?> &quot;" async="" defer=""></script>
    <script src="https://use.fontawesome.com/eb1d0b8994.js?ts=<?=time()?> &quot;"></script>
    <script src="https://kit.fontawesome.com/359d037434.js?ts=<?=time()?> &quot;" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../index_files/styles.fb966e9386e8aa2eeaea.css?ts=<?=time()?> &quot;" >
    <style>@media (min-width: 0px) {
            .main[_ngcontent-c0] {
                padding-left: 20px
            }
        }

        @media (min-width: 768px) {
            .main[_ngcontent-c0] {
                padding-left: 200px
            }
        }</style>
    <style></style>
    <style>.sidebar[_ngcontent-c2] {
            position: fixed;
            top: 3rem;
            bottom: 0;
            left: 0;
            z-index: 1021;
            min-width: 200px;
            width: 200px;
            padding: 20px 0;
            overflow-x: hidden;
            overflow-y: auto;
            border-right: 1px solid #eee;
            background-color: #f8f9fa
        }

        .sidebar-collapsed[_ngcontent-c2] {
            min-width: 3.5rem;
            width: 3.5rem
        }

        .sidebar[_ngcontent-c2] .nav[_ngcontent-c2] {
            margin-top: 20px;
            margin-bottom: 20px
        }

        .sidebar[_ngcontent-c2] .nav-item[_ngcontent-c2] {
            width: 100%
        }

        .btn-link[_ngcontent-c2] {
            display: block;
            padding: .5rem 1rem;
            cursor: pointer;
            white-space: pre-wrap;
            text-align: left
        }

        .toggler[_ngcontent-c2] {
            border-top: 1px solid #e5e5e5;
            width: 200px;
            margin-left: 0;
            height: 40px;
            background-color: #f8f9fa
        }

        .toggler-collapsed[_ngcontent-c2] {
            width: 50px
        }

        .toggler[_ngcontent-c2]:hover {
            background-color: #e5e5e5;
            cursor: pointer
        }

        .cb-active[_ngcontent-c2] {
            background-color: #e5e5e5;
            color: #2b5e93;
            border-left: 5px solid #2b5e93;
            border-top-left-radius: unset !important;
            border-bottom-left-radius: unset !important
        }

        .cb-sub-active[_ngcontent-c2] {
            border-left: none
        }

        .cb-sub-nav-link[_ngcontent-c2] {
            margin-left: 10px
        }

        .cb-expanded[_ngcontent-c2] {
            background-color: #e5e5e5
        }

        .cb-submenu[_ngcontent-c2] {
            position: fixed;
            background-color: #f8f9fa;
            border: 1px solid #eee;
            border-radius: 5px
        }

        .cb-submenu[_ngcontent-c2] ul[_ngcontent-c2] {
            margin-top: 0 !important;
            margin-bottom: 0 !important
        }</style>
    <style>.nav-link-ext[_ngcontent-c3] {
            cursor: pointer;
            color: #fff;
            border-radius: 5px
        }

        .nav-link-ext[_ngcontent-c3]:active, .nav-link-ext[_ngcontent-c3]:focus, .nav-link-ext[_ngcontent-c3]:hover {
            cursor: pointer;
            background-color: #527aa4;
            color: #fff
        }

        .cb-active[_ngcontent-c3] {
            background-color: #527aa4;
            color: #fff
        }
    </style>
    <style>.login-btn-index[_ngcontent-c4] {
            color: #fff;
            background-color: unset
        }

        .login-btn-index[_ngcontent-c4]:hover {
            color: #295b8e;
            background-color: #fff
        }</style>
    <style>.truncate[_ngcontent-c5] {
            width: 150px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis
        }</style>
    <style type="text/css"></style>
    <style type="text/css">.pixelParallel-panel[data-v-54cb82b4] {
            position: fixed;
            right: 10px;
            bottom: 10px;
            z-index: 2147483647;
            width: 375px;
            height: 265px;
            transform: translate(0);
            background: #fff;
            transition: width .2s ease-out, height .2s ease-out;
            will-change: top, left, width, height, transform;
            opacity: 0
        }

        .pixelParallel-panel-inner[data-v-54cb82b4] {
            position: relative;
            overflow: hidden;
            height: 100%;
            border: 1px solid #dddedf;
            box-shadow: 0 2px 10px rgba(0, 0, 0, .1);
            box-sizing: border-box
        }

        .pixelParallel-panel-handle[data-v-54cb82b4] {
            position: absolute;
            top: -10px;
            right: -10px;
            z-index: 3;
            width: 20px;
            height: 20px;
            background: red;
            transform: rotate(45deg);
            background: linear-gradient(0deg, transparent, transparent 50%, #ccc 0, #ccc);
            background-size: 100% 2px;
            cursor: move
        }

        .pixelParallel-panel-isolator[data-v-54cb82b4] {
            border: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            position: relative
        }

        .pixelParallel-panel-dragging .pixelParallel-panel-inner[data-v-54cb82b4] {
            pointer-events: none
        }

        .pixelParallel-panel-minimized[data-v-54cb82b4] {
            width: 112px;
            height: 50px;
            transition: width .2s ease-out .15s, height .2s ease-out .15s
        }

        @media (max-width: 395px) {
            .pixelParallel-panel[data-v-54cb82b4] {
                right: 0;
                bottom: 0;
                width: 320px
            }

            .pixelParallel-panel-minimized[data-v-54cb82b4] {
                width: 112px
            }
        }
    </style>
    <style type="text/css">.pixelParallel-overlay {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            text-align: center;
            white-space: nowrap;
            display: none
        }

        .pixelParallel-overlay-enabled {
            display: block
        }
    </style>
    <style type="text/css">.pixelParallel-image-outer {
            visibility: hidden;
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            max-width: 100vw;
            min-height: 100vh
        }

        .pixelParallel-image-inner {
            position: absolute;
            z-index: 2147483646;
            left: 50%;
            top: 0;
            cursor: move;
            transform: translateX(-50%);
            transition: opacity .15s
        }

        .pixelParallel-image-inner img {
            width: auto;
            height: auto;
            max-width: none;
            max-height: none;
            vertical-align: top;
            margin: 0;
            padding: 0;
            position: relative;
            transform-origin: 50% 0;
            top: -1px;
            border: 1px dashed #333
        }

        .pixelParallel-image-inner img:not([src]), .pixelParallel-image-inner img[src=""] {
            visibility: hidden
        }

        .pixelParallel-image-enabled {
            visibility: visible
        }

        .pixelParallel-image-difference {
            mix-blend-mode: difference
        }

        .pixelParallel-image-difference img {
            opacity: 1 !important
        }

        .pixelParallel-image-locked, .pixelParallel-image-no-image {
            pointer-events: none
        }

        .pixelParallel-image-locked .pixelParallel-image-inner img {
            top: 0;
            border: 0 none
        }
    </style>
    <style type="text/css">.pixelParallel-grids {
            position: relative;
            z-index: 2147483646;
            pointer-events: none
        }

        .pixelParallel-grid-horizontal, .pixelParallel-grid-vertical {
            position: fixed;
            z-index: 1;
            pointer-events: none;
            visibility: hidden
        }

        .pixelParallel-grid-horizontal {
            top: 50%;
            left: 50%;
            display: table;
            width: 100vw;
            height: 200vh;
            opacity: .5;
            table-layout: fixed;
            border-spacing: 30px;
            transform: translate(-50%, -50%)
        }

        .pixelParallel-grid-horizontal span {
            display: table-cell;
            background: red;
            height: 200vh
        }

        .pixelParallel-grid-vertical {
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(180deg, transparent, transparent 90%, blue 0, blue);
            background-size: 100% 10px;
            opacity: .5
        }

        .pixelParallel-grid-horizontal-enabled, .pixelParallel-grid-vertical-enabled {
            visibility: visible
        }
    </style>
    <style type="text/css">.pixelParallel-rulers {
            position: relative;
            z-index: 2147483646
        }

        .pixelParallel-ruler-x, .pixelParallel-ruler-y {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 2;
            background: cyan
        }

        .pixelParallel-ruler-x:after, .pixelParallel-ruler-y:after {
            content: "";
            position: absolute;
            top: -8px;
            left: -8px;
            right: 0;
            bottom: 0;
            padding: 10px
        }

        .pixelParallel-ruler-x {
            right: 0;
            height: 1px;
            cursor: row-resize
        }

        .pixelParallel-ruler-y {
            bottom: 0;
            width: 1px;
            cursor: col-resize
        }

        .pixelParallel-rulers-enabled .pixelParallel-ruler-x, .pixelParallel-rulers-enabled .pixelParallel-ruler-y {
            display: block
        }
    </style>
    <script src="chrome-extension://mooikfkahbdckldjjndioackbalphokd/assets/prompt.js"></script>
</head>
<body>
<script type="application/javascript">
    (function (i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function () {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-73672141-1', 'auto');
</script>
<app-root _nghost-c0="" ng-version="7.2.10">
    <cb-header _ngcontent-c0="" _nghost-c1="">
        <div _ngcontent-c1="" class="fixed-top">
            <div _ngcontent-c1="" class="cb-header">
                <div _ngcontent-c1="" class="d-flex align-items-center"><a _ngcontent-c1=""
                                                                           href="<?=Url::local('programm')?>">
                        <div _ngcontent-c1="" class="cb-text-header d-none d-md-block"><img _ngcontent-c1="" class="p-1"
                                                                                            src="../../index_files/new_logo1.png"><span
                                    _ngcontent-c1="">Електронний реєстр </span></div>
                        <div _ngcontent-c1="" class="cb-text-header d-block d-md-none"><img _ngcontent-c1="" class="p-1"
                                                                                            src="../../index_files/new_logo1.png">
                        </div>
                    </a>
                    <cb-header-menu _ngcontent-c1="" class="pb-1 d-flex flex-row" _nghost-c3="">
                        <div _ngcontent-c3="" class="d-block d-md-none">
                            <button _ngcontent-c3="" class="fa-2x navbar-toggler text-white" type="button"><i
                                        _ngcontent-c3="" aria-hidden="true" class="fa fa-bars"></i></button>
                        </div><!---->
                        <div _ngcontent-c3="" class="d-none d-md-block ng-star-inserted"><a _ngcontent-c3=""
                                                                                            class="nav-link nav-link-ext"
                                                                                            href="<?=Url::local('programm')?>"><span
                                        _ngcontent-c3="" class="nav-link-text">Картотека</span></a></div>
                        <div _ngcontent-c3="" class="d-none d-md-block ng-star-inserted"><a _ngcontent-c3=""
                                                                                            class="nav-link nav-link-ext"
                                                                                            href="<?=Url::local('pacient')?>"><span
                                        _ngcontent-c3="" class="nav-link-text">Нова картка</span></a></div>
                        <div _ngcontent-c3="" class="d-none d-md-block ng-star-inserted"><a _ngcontent-c3=""
                                                                                            class="nav-link nav-link-ext"
                                                                                            href="<?=Url::local('bigfind')?>"><span
                                        _ngcontent-c3="" class="nav-link-text">Пошук</span></a></div>
                        <div _ngcontent-c3="" class="d-none d-md-block ng-star-inserted"><a _ngcontent-c3=""
                                                                                            class="nav-link nav-link-ext"
                                                                                            href=""><span
                                        _ngcontent-c3="" class="nav-link-text">Звіти</span></a></div>
                        <div _ngcontent-c3="" class="d-none d-md-block ng-star-inserted"><a _ngcontent-c3=""
                                                                                            class="nav-link nav-link-ext"
                                                                                            href=""><span
                                        _ngcontent-c3="" class="nav-link-text">Допомога</span></a></div>

                        <?php
                        if($_SESSION['role']=='2'){
                            ?>
                            <div _ngcontent-c3="" class="d-none d-md-block ng-star-inserted"><a _ngcontent-c3=""
                                                                                                class="nav-link nav-link-ext"
                                                                                                href="<?=Url::local('edituser')?>"><span
                                            _ngcontent-c3="" class="nav-link-text">Користувачі</span></a></div>
                            <div _ngcontent-c3="" class="d-none d-md-block ng-star-inserted"><a _ngcontent-c3=""
                                                                                                class="nav-link nav-link-ext"
                                                                                                href="<?=Url::local('zapdel')?>"><span
                                            _ngcontent-c3="" class="nav-link-text">Запити на видалення</span></a></div>
                            <div _ngcontent-c3="" class="d-none d-md-block ng-star-inserted"><a _ngcontent-c3=""
                                                                                                class="nav-link nav-link-ext"
                                                                                                href="<?=Url::local('cart')?>"><span
                                            _ngcontent-c3="" class="nav-link-text">Архів</span></a></div>
                            <div _ngcontent-c3="" class="d-none d-md-block ng-star-inserted"><a _ngcontent-c3=""
                                                                                                class="nav-link nav-link-ext"
                                                                                                href="<?=Url::local('ins')?>"><span
                                            _ngcontent-c3="" class="nav-link-text">Імпорт</span></a></div>
                        <?
                        }
                        ?>
                    </cb-header-menu>
                    <style>
                        .men{
                            min-width: 100px;
                            position: relative;
                            border-radius: 2px;
                            padding: 3px;
                            color:white; margin-right: 10px; display: block;
                        }
                        .men:hover{
                            cursor: pointer;
                            background: white;
                            color:#295b8e;
                        }

                        .pod_men{

                            width: 100px;
                            display: none;
                            position: absolute;
                            background: white;
                            padding: 5px;
                            text-align: left;
                        }
                        .pod_men a{

                            padding: 5px;

                            color: black;
                            text-decoration: none;
                        }
                    </style>
                    <script>
                        function show() {
                            document.getElementById('pod_men').style.display='block';
                        }
                        function hide() {
                            document.getElementById('pod_men').style.display='none';
                        }
                    </script>
                    <div _ngcontent-c1="" class="ml-auto p-2">
                        <cp-user-header _ngcontent-c1="" _nghost-c4=""><!---->
                            <? if (isset($_SESSION['user'])) {
                                echo "<div style='display: flex; width:400px; justify-content: flex-end;'>
<span style='color:white;margin-right: 5px;margin-top: 4px;'>{$_SESSION['klinika']}</span>
<div><span onclick='show();' style='
    width: 100px; text-align: center; border:1px solid #5bc0de;' class='men'>".$_SESSION['user']."  <i class='fas fa-caret-down'></i>
</span>";?>
                                <div class="pod_men" id="pod_men" onmouseout="hide()" onmouseover="show()">
                                <a _ngcontent-c4=''
                                   type='button' tabindex='0' href='<?=Url::local('edituser')?>'>Налаштування
                                </a><hr>
<a _ngcontent-c4=''
                                    type='button' tabindex='0' href='<?= Url::getAction('main', 'logaut') ?>'>Вихід
                            </a></div></div></div><?

                         }else{?>
                            <a _ngcontent-c4="" class="btn btn-header ng-star-inserted" href="<?= Url::local('main') ?>" routerlink="login"
                                    type="button" tabindex="0">Вхід
                            </a><!---->
                        <?}?>
                        </cp-user-header>
                    </div>
                </div>
            </div>

        <?= $content ?>
    </div>
</app-root>
<script type="text/javascript" src="../../index_files/runtime.582ae615c3bb6a8cceab.js.Без названия"></script>
<script type="text/javascript" src="../../index_files/polyfills.8c697f65f46ae48313a2.js.Без названия"></script>
<script type="text/javascript" src="../../index_files/scripts.35af79d45c3459b959e1.js.Без названия"></script>


</body>
</html>
