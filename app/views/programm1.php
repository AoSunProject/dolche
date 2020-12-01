<title>Картотека</title>
<?php
if(isset($_SESSION['user'])){
   ?>
    <cb-breadcrumb _ngcontent-c1="" _nghost-c5="">
        <div _ngcontent-c5="">
            <p-breadcrumb _ngcontent-c5="" class="truncate">
                <div class="ui-breadcrumb ui-widget ui-widget-header ui-helper-clearfix ui-corner-all">
                    <ul><!----><!----><!---->
                        <li role="menuitem" class="ng-star-inserted"><!----><a
                                class="ui-menuitem-link ng-star-inserted" href=""
                                id="empty"><!----><span class="ui-menuitem-text"></span></a><!----></li><!---->
                        <li class="ui-breadcrumb-chevron pi pi-chevron-right ng-star-inserted"></li><!---->
                        <li role="menuitem" class="ng-star-inserted"><!----><a
                                class="ui-menuitem-link ng-star-inserted" href="<?=Url::local('programm')?>"
                                id="login"><!----><span class="ui-menuitem-text">Картотека</span></a><!----></li>
                        <!----><!----></ul>
                </div>
            </p-breadcrumb>
        </div>
    </cb-breadcrumb>
    </div>
    </cb-header>
    <div _ngcontent-c0="" class="container-fluid">
    <div _ngcontent-c0="" class="row">
        <div _ngcontent-c0="" class="col">
            <cb-sidebar-menu _ngcontent-c0="" _nghost-c2="">
                <div _ngcontent-c2="" class="sidebar" id="sidebar">
                    <style>
                        .mmm:hover{
                            color: #1b6d85;
                            background:  #e5e5e5;
                            border-left: 3px solid #1b6d85;
                            padding-left: 7px;
                        }

                    </style>
                    <ul _ngcontent-c2="" class="nav nav-pills flex-column">
                        <?php
                        $abc = ['А','Б','В','Г','Ґ','Д','Е','Є','Ж','З','И','І','Ї','Й','К','Л','М','Н','О','П','Р','С',
                            'Т','У','Ф','Х','Ц','Ч','Ш','Щ','Ю','Я'];
                       /*foreach (range(chr(0xC0), chr(0xDF)) as $b):
                            $abc[] = iconv('CP1251', 'UTF-8', $b);

                        endforeach;*/
                        echo " <li _ngcontent-c2=\"\" class='mmm' title='Всі'>";?><!----><!---->

                        <form method='post' action="<?=Url::local('programm1')?>">

                            <button style='border: none; width: 100%;
    text-align: left;' type="submit"
                                    _ngcontent-c2='' class='nav-link nav-link-ext ng-star-inserted'
                                    href=''><!----><i _ngcontent-c2=\"\"
                                                      class='fas fa-newspaper'></i>
                                <!----><span _ngcontent-c2='' class='nav-link-text ng-star-inserted'>Всі</span></button>
                            <!----><!----></form></li>
                        <?
                        foreach ($abc as $item):
                        echo " <li _ngcontent-c2=\"\" class='mmm' title='{$item}'>";?><!----><!---->

 <form method='post' action="<?=Url::getAction('programm1','findA')?>">
  <input type="hidden" name="buk" value="<? echo $item;?>">
  <button style='border: none; width: 100%;
    text-align: left;' type="submit"
                                _ngcontent-c2='' class='nav-link nav-link-ext ng-star-inserted'
                                href=''><!----><i _ngcontent-c2=\"\"
                                                                                 class='fas fa-newspaper'></i>
                                <!----><span _ngcontent-c2='' class='nav-link-text ng-star-inserted'><? echo $item;?></span></button>
                            <!----><!----></form></li>
                       <? endforeach;
                        ?><!---->

                    </ul>
                    <div _ngcontent-c2="" class="fixed-bottom toggler align-items-center justify-content-start row"
                         id="sidebarToggler">
                        <div _ngcontent-c2="" style="padding-left: 10px"><!----><i _ngcontent-c2=""
                                                                                   aria-hidden="true"
                                                                                   class="fa fa-2x fa-caret-square-o-left ng-star-inserted"></i>
                            <!----></div><!---->
                        <div _ngcontent-c2="" style="padding-left: 10px" class="ng-star-inserted"><span
                                _ngcontent-c2="">Приховати</span></div>
                    </div>
                    <div _ngcontent-c2="" class="cb-submenu"><!----></div>
                </div>
                <cb-feedback-ui _ngcontent-c2="" _nghost-c6="">
                    <p-growl _ngcontent-c6="" basezindex="1500">
                        <div class="ui-growl ui-widget"><!----></div>
                    </p-growl>
                    <p-dialog _ngcontent-c6="" basezindex="1500" header="" minwidth="600" modal="modal"
                              class="ng-tns-c7-0"><!----></p-dialog>
                </cb-feedback-ui>
            </cb-sidebar-menu>
        </div>
        <div _ngcontent-c0="" class="col-sm-12 ml-md-auto main" id="centerContent"><!---->
            <router-outlet _ngcontent-c0=""></router-outlet>
            <app-login _nghost-c9="" class="ng-star-inserted">
                <p-growl _ngcontent-c9="" basezindex="1500">
                    <div class="ui-growl ui-widget"><!----></div>
                </p-growl>
                <p-blockui _ngcontent-c9="" basezindex="1500">
                    <div class="ui-blockui ui-widget-overlay ui-blockui-document"
                         style="z-index: 15001001; display: none;"><i _ngcontent-c9=""
                                                                      class="fa fa-circle-o-notch fa_custom fa-spin fa-3x fa-fw"
                                                                      style="position:absolute;top:50%;left:50%"></i>
                    </div>


                </p-blockui>

                <div _ngcontent-c9="" class="container" style="width: 100%;max-width: 100%;">
                    <?php
                    if(isset($mess)){
                        echo "<h3>".$mess."</h3>";
                    }
                    ?>
                    <style>
.m1{
    height: calc(1.8125rem + 2px);
    padding: .25rem .5rem;
    font-size: .875rem;
    line-height: 1.5;
    border-radius: .2rem;
    color: #495057;
    width: 250px;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid lightgrey;
    margin-right: 40px;
}
.m4{
    height: calc(1.8125rem + 2px);
    padding: .25rem .5rem;
    font-size: .875rem;
    line-height: 1.5;
    border-radius: .2rem;
    color: #495057;
    width: 150px;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid lightgrey;
    margin-right: 40px;
}
.m2{
    height: calc(1.8125rem + 2px);
    padding: .25rem .5rem;
    font-size: .875rem;
    line-height: 1.5;
    border-radius: .2rem;
    color: #495057;
    width: 60px;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid lightgrey;

}
                        .l{
                            display: block;
                            width: 110px;
                        }
                        .m3{
                            margin-left: 10px;
                            margin-top: 5px;
                        }
                        .m3:checked{
                            background:#0056b3;
                        }
                        .hhhh{
                            display: none;
                        }
.container12 {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;

    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* Hide the browser's default checkbox */
.container12>input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0;
}

/* Create a custom checkbox */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 20px;
    width: 20px;
    background-color: #eee;
}

/* On mouse-over, add a grey background color */
.container12:hover input ~ .checkmark {
    background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container12 input:checked ~ .checkmark {
    background-color: #0056b3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}

/* Show the checkmark when checked */
.container12 input:checked ~ .checkmark:after {
    display: block;
}

/* Style the checkmark/indicator */
.container12 .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}
                    </style>
                    <script>
                        function year(year) {
                            document.getElementById('year2').value=year;
                        }
                        function edit(id) {

                            var fname=document.getElementById("fname").value;

                            var id1=id.replace('o','k');

                            var id2=id.replace('o','');
                            let form = document.createElement('form');
                            form.action = '<?=Url::local('edit')?>';
                            form.method = 'POST';
form.target='_blank';
                            var moi=document.getElementById('moi').value;

                            var sname=document.getElementById('sname').value;
                            var name=document.getElementById('name').value;
                            var nom1=document.getElementById('nom1').value;
                            var nom2=document.getElementById('nom2').value;
                            var year1=document.getElementById('year1').value;
                            var year2=document.getElementById('year2').value;
                            var city=document.getElementById('city').value;
                            var sex=document.getElementById('sex').value;

                            var typeDiab=document.getElementById('typeDiab').value;
                            var date_izm=document.getElementById('date_izm').value;
                            form.innerHTML = '<input type="hidden" name="id_k" value="'+id+'">' +
                                '<input type="hidden" name="fname" value="'+fname+'">' +
                                '<input type="hidden" name="sname" value="'+sname+'">' +
                                '<input type="hidden" name="name" value="'+name+'">' +
                                '<input type="hidden" name="nom1" value="'+nom1+'">' +
                                '<input type="hidden" name="nom2" value="'+nom2+'">' +
                                '<input type="hidden" name="year1" value="'+year1+'"><input type="hidden" name="year2" value="'+year2+'"><input type="hidden" name="typeDiab" value="'+typeDiab+'"><input type="hidden" name="city" value="'+city+'"><input type="hidden" name="moi" value="'+moi+'"><input name="sex" value="'+sex+'"><input type="hidden" name="date_izm" value="'+date_izm+'">';
// перед отправкой формы, её нужно вставить в документ
                            document.body.append(form);

                            form.submit();
                        }
                        function rest() {
                            location="<?=Url::getAction('programm1','findRSkin')?>";
                        }
                    </script>
                    <link href="../../css/1.css" rel="stylesheet">
                    <?php
                    if(isset($findArr)){
                        ?>

                        <details id='detF' open style="margin: 10px;"><summary>Швидкий пошук за картотекою</summary>
                            <form method="post" action="<?=Url::getAction('programm1','findR')?>">
                                <table style="margin: 5px;">
                                    <tr><td><span class="l">Прізвище</span></td><td><input type="text" name="fname" id="fname" class="m1" value="<? echo $findArr[0];?>"></td>
                                        <td><span class="l">Рік народження</span></td><td><input placeholder="" onchange="year(this.value)" type="text" id="year1" name="year1" value="<? echo $findArr[1];?>" class="m2"> - <input placeholder="" type="text" value="<? echo $findArr[2];?>" id="year2" name="year2" class="m2"></td>
                                        <td><span class="l">№ учасника</span></td><td><input type="text" name="nom1" id="nom1" placeholder="" class="m2" value="<? echo $findArr[3];?>"> - <input placeholder="" value="<? echo $findArr[4];?>" type="text" id="nom2" name="nom2" class="m2"></td>
                                    </tr>
                                    <tr><td><span class="l">Ім`я</span></td><td><input type="text" name="name" id="name" value="<? echo $findArr[5];?>" class="m1"></td>
                                        <td><span class="l">Стать</span></td><td><select name="sex" id="sex" class="m1">
                                                <option <?php if($findArr[6]==''){echo 'selected';}?>></option>
                                                <option value="Чоловіча" <?php if($findArr[6]=='Чоловіча'){echo 'selected';}?>>Чоловіча</option>
                                                <option value="Жіноча" <?php if($findArr[6]=='Жіноча'){echo 'selected';}?>>Жіноча</option>
                                            </select></td>
                                        <td><span class="l">Дата модифікації</span></td><td><input type="date" id="date_izm" name="date_izm" class="m1" value="<? echo $findArr[7];?>"></td>
                                    </tr>
                                    <tr><td><span class="l">По батькові</span></td><td><input type="text" id="sname" value="<? echo $findArr[8];?>" name="sname" class="m1"></td>
                                        <td><span class="l">Тип діабету</span></td><td><select name="typeDiab" id="typeDiab" class="m1">
                                                <option value="" <?php if($findArr[9]=='--'){echo 'selected';}?>></option>
                                                <option value="Не хворіє" <?php if($findArr[9]=='Не хворіє'){echo 'selected';}?>>Не хворіє</option>
                                                <option value="ЦД 1 типу" <?php if($findArr[9]=='ЦД 1 типу'){echo 'selected';}?>>ЦД 1 типу</option>
                                                <option value="ЦД 2 типу" <?php if($findArr[9]=='ЦД 2 типу'){echo 'selected';}?>>ЦД 2 типу</option>
                                                <option value="Латентний аутоімунний (LADA))" <?php if($findArr[9]=='Латентний аутоімунний (LADA)'){echo 'selected';}?>>Латентний аутоімунний (LADA)</option>
                                                <option value="MODY-діабет" <?php if($findArr[9]=='MODY-діабет'){echo 'selected';}?> >MODY-діабет</option>
                                                <option value="Панкреатогенний" <?php if($findArr[9]=='Панкреатогенний'){echo 'selected';}?>>Панкреатогенний
                                                </option>
                                                <option value="Інший" <?php if($findArr[9]=='Інший'){echo 'selected';}?>>Інший
                                                </option>
                                            </select></td>
                                        <td><span class="l">Тільки мої картки<sup style="color:#0056b3;">*</sup></span></td>
                                        <td>
                                            <label class="container12">
                                                <input type="checkbox" <? if($findArr[10]==1){echo 'checked';} ?> id="moi" name="moi" value="1">
                                                <span class="checkmark"></span>
                                            </label></td>
                                    </tr>
                                    <tr>
                                        <td><span class="l">Насел.пункт</span></td>
                                        <td><input type="text" placeholder="" id="city" value="<? echo $findArr[11];?>" name="city" class="m1"></td>
                                        <td colspan="4"><div style="display: flex;align-items: center;"><span style="color:#0056b3;">*</span>
                                                <span class="l" style="width: 700px;"> - Якщо ця опція "ввімкнена" в результатах пошуку будуть вибиратися лише
                закріплені за Вами картки</span></div></td>
                                    <tr><td colspan="6" style="border-bottom: 1px solid lightgrey"></td></tr>
                                    <tr>
                                        <td>
                                            <a _ngcontent-c8="" class="btn btn-default log_button btn-mr"  title="Згорнути" onclick="document.getElementById('detF').removeAttribute('open')">
                                                <i class="fas fa-angle-double-up"></i>


                                                Згорнути
                                            </a>
                                        </td>
                                        <td>
                                            <button  onclick="rest()" class="btn btn-default"  type="reset" title="Скинути пошук">
                                                <i class="fas fa-times"></i>

                                                Скинути пошук
                                            </button>
                                            <button _ngcontent-c8="" class="btn btn-default log_button btn-mr" id="findButton" tabindex="3" title="Знайти" type="submit">
                                                <i class="fas fa-search"></i>
                                                Знайти
                                            </button>
                                        </td>
                                        <td colspan="4"></td>
                                    </tr>
                                </table>


                            </form>

                        </details>

                   <? }else {
                        ?>
                        <details id='det' style="margin: 10px;">
                            <summary>Швидкий пошук за картотекою</summary>
                            <form method="post" action="<?= Url::getAction('programm1', 'findR') ?>">
                                <table style="margin: 5px;">
                                    <tr>
                                        <td><span class="l">Прізвище</span></td>
                                        <td><input type="text" name="fname" id="fname" class="m1"></td>
                                        <td><span class="l">Рік народження</span></td>
                                        <td><input placeholder="" type="text" onchange="year(this.value)" id="year1" name="year1" class="m2"> - <input
                                                    placeholder="" type="text" id="year2" name="year2" class="m2"></td>
                                        <td><span class="l">№ учасника</span></td>
                                        <td><input type="text" name="nom1" id="nom1" placeholder="" class="m2"> - <input
                                                    placeholder="" type="text" name="nom2" id="nom2" class="m2"></td>
                                    </tr>
                                    <tr>
                                        <td><span class="l">Ім`я</span></td>
                                        <td><input type="text" name="name" id="name" class="m1"></td>
                                        <td><span class="l">Стать</span></td>
                                        <td><select name="sex" class="m4" id="sex">
                                                <option></option>
                                                <option value="--" >--</option>
                                                <option value="Чоловіча">Чоловіча</option>
                                                <option value="Жіноча">Жіноча</option>
                                            </select></td>
                                        <td><span class="l">Дата модифікації</span></td>
                                        <td><input type="date" name="date_izm" id="date_izm" class="m4"></td>
                                    </tr>
                                    <tr>
                                        <td><span class="l">По батькові</span></td>
                                        <td><input type="text" name="sname" id="sname" class="m1"></td>
                                        <td><span class="l">Тип діабету</span></td>
                                        <td><select name="typeDiab" class="m4" id="typeDiab">
                                                <option value="" ></option>
                                                <option value="Не хворіє">Не хворіє</option>
                                                <option value="ЦД 1 типу">ЦД 1 типу</option>
                                                <option value="ЦД 2 типу" >ЦД 2 типу</option>
                                                <option value="Латентний аутоімунний (LADA)" >Латентний аутоімунний
                                                    (LADA)</option>
                                                <option value="MODY-діабет" >MODY-діабет</option>
                                                <option value="Панкреатогенний" >Панкреатогенний
                                                </option>
                                                <option value="Інший" >Інший
                                                </option>
                                            </select></td>
                                        <td><span class="l">Тільки мої картки<sup style="color:#0056b3;">*</sup></span>
                                        </td>
                                        <td>
                                            <label class="container12">
                                                <input type="checkbox" checked="checked" id="moi" name="moi" value="1">
                                                <span class="checkmark"></span>
                                            </label></td>
                                    </tr>
                                    <tr>
                                        <td><span class="l">Насел.пункт</span></td>
                                        <td><input type="text" placeholder="" id="city" name="city" class="m1">
                                        </td>
                                        <td colspan="4">
                                            <div style="display: flex;align-items: center;"><span
                                                        style="color:#0056b3;">*</span>
                                                <span class="l" style="width: 700px;"> - Якщо ця опція "ввімкнена" в результатах пошуку будуть вибиратися лише
                закріплені за Вами картки</span></div>
                                        </td>
                                    <tr>
                                        <td colspan="6" style="border-bottom: 1px solid lightgrey"></td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <a _ngcontent-c8="" class="btn btn-default log_button btn-mr" tabindex="1"
                                               title="Згорнути"
                                               onclick="document.getElementById('det').removeAttribute('open')">
                                                <i class="fas fa-angle-double-up"></i>


                                                Згорнути
                                            </a>
                                        </td>
                                        <td>
                                            <button  onclick="rest()" class="btn btn-default log_button btn-mr"
                                                     type="reset" title="Скинути пошук">
                                                <i class="fas fa-times"></i>

                                                Скинути пошук
                                            </button>
                                            <button _ngcontent-c8="" class="btn btn-default log_button btn-mr"
                                                    id="findButton" tabindex="3" title="Знайти" type="submit">
                                                <i class="fas fa-search"></i>
                                                Знайти
                                            </button>
                                        </td>
                                        <td colspan="4"></td>
                                    </tr>
                                </table>


                            </form>

                        </details>

                        <?php
                    }
 ?>
                    <style>
                        #pagination .activPage{
                            color: #333 !important;
                            border: 1px solid black;
                            background-color: white;
                            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fff), color-stop(100%, #dcdcdc));
                            background: -webkit-linear-gradient(top, #fff 0%, #dcdcdc 100%);
                            background: -moz-linear-gradient(top, #fff 0%, #dcdcdc 100%);
                            background: -ms-linear-gradient(top, #fff 0%, #dcdcdc 100%);
                            background: -o-linear-gradient(top, #fff 0%, #dcdcdc 100%);
                            background: linear-gradient(to bottom, #fff 0%, #dcdcdc 100%);
                        }
                        #example tr:first-child{

                        }
                        #example tr:first-child th{
                            font-weight: bold;border-bottom: 1px solid black;padding: 8px;
                        }
                        #example tr:last-child td{
                            border-bottom: 1px solid black;
                        }
                        #example tr:nth-child(odd){
                              background-color: #f9f9f9;
                          }
                        #example tr:nth-child(even){
                            background-color: #ffffff;
                        }
                        #example tr td{
                            padding: .25em .5em;
                        }

                        #pagination{
                            list-style-type: none;
                        }
                        #pagination li {
                            display: inline;
                            box-sizing: border-box;
                            display: inline-block;
                            min-width: 1.5em;
                            margin-left: 2px;
                            width: 20px;
                            height: 20px;
                            font-size: 12px;
                            text-align: center;
                            text-decoration: none !important;
                            cursor: pointer;
                            *cursor: hand;
                            color: #333 !important;
                            border: 1px solid transparent;
                            border-radius: 2px;
                        }
                        #pagination li a{
                            color:black;
                        }
                        #pagination li a:hover{
                            color:white;
                        }
                        #pagination li:hover>a{
                            color:white;
                            text-decoration: none;
                        }
                        #pagination li:hover {

                            border: 1px solid #979797;
                            background-color: white;
                            background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fff), color-stop(100%, #dcdcdc));
                            background: -webkit-linear-gradient(top, #fff 0%, #dcdcdc 100%);
                            background: -moz-linear-gradient(top, #fff 0%, #dcdcdc 100%);
                            background: -ms-linear-gradient(top, #fff 0%, #dcdcdc 100%);
                            background: -o-linear-gradient(top, #fff 0%, #dcdcdc 100%);
                            background: linear-gradient(to bottom, #fff 0%, #dcdcdc 100%);
                            background: #186ba0;
                            color: #fff!important;
                            border-color: #156090;
                        }
                        #page{
                            background: linear-gradient(to bottom,#f6f7f9 0,#ebedf0 100%);
                            text-align: center;
                            vertical-align: center;
                            padding: 5px;
                        }
                    </style>
                        <table id="example" class="display" style="width:100%">
                            <thead>
                            <tr style="    background-color: #ebedf0;
    border-color: #d9d9d9;"><th>№ учасника</th><th>ПІБ</th><th>Стать</th><th>Рік нар.</th><th>Тип діабету</th><th>Населений пункт</th>
                                <th>Дата модифікації</th></tr>
                            </thead>
                            <tbody>
<?/*****************************************************/

class SimPageNav
{
    protected $id;
    protected $startChar;
    protected $prevChar;
    protected $nextChar;
    protected $endChar;

    /**
     * Конструктор
     * @param string $id        - атрибут ID элемента <UL> - постраничной навигации
     * @param string $startChar - текст ссылки "В начало"
     * @param string $prevChar  - текст ссылки "Назад"
     * @param string $nextChar  - текст ссылки "Вперед"
     * @param string $endChar   - текст ссылки "В конец"
     */
   /* public function __construct(  $id     = 'pagination',
                                  $startChar = '&laquo;',
                                  $prevChar  = '&lsaquo;',
                                  $nextChar  = '&rsaquo;',
                                  $endChar   = '&raquo;'  )*/
    public function __construct(  $id     = 'pagination',
                                  $startChar = '',
                                  $prevChar  = '',
                                  $nextChar  = '',
                                  $endChar   = ''  )
    {
      $this->id = $id;
      $this->startChar = $startChar;
      $this->prevChar  = $prevChar;
      $this->nextChar  = $nextChar;
      $this->endChar   = $endChar;
    }

  /**
   * Получить HTML - код постраничной навигации
   * @param int $all        - Полное кол-во элементов (Материалов в категории)
   * @param int $limit      - Кол-во элементов на странице
   * @param int $start      - Текущее смещение элементов
   * @param int $linkLimit  - Количество ссылок в состоянии
   * @param string $varName - Имя GET - переменной которая будет использоваться в постр. навигации.
   * @return string
   */
    public function getLinks( /*int*/ $all, /*int*/ $limit, /*int*/ $start, $linkLimit = 10, $varName = 'start' )
    {
      // Нихрена не делаем, если лимит больше или равен кол-ву всех элементов вообще,
      // И если лимит = 0. 0 - будет означать "не разбивать н астраницы".
      if ( $limit >= $all || $limit == 0 ) {
        return NULL;
      }

      $pages     = 0;       // кол-во страниц в пагинации
      $needChunk = 0;       // индекс нужного в данный момент чанка
      $queryVars = array(); // ассоц. массив полученный из строки запроса
      $pagesArr  = array(); // пременная для промежуточного хранения массива навигации
      $htmlOut   = '';      // HTML - код постраничной навигации
      $link      = NULL;    // формируемая ссылка

      // В этом блоке мы просто строим ссылку - такую же, как та, по которой
      // пришли на данную страницу, но извлекаем из неё нашу GET-переменную:
      parse_str($_SERVER['QUERY_STRING'], $queryVars ); //   &$queryVars

      // Убиваем нашу GET-переменную
      if( isset($queryVars[$varName]) ) {
        unset( $queryVars[$varName] );
      }

      // Формируем такую же ссылку, ведущую на эту же страницу:
      $link  = '?'.http_build_query( $queryVars );

      //--------------------------------------------------------

      $pages = ceil( $all / $limit ); // кол-во страниц

      // Заполняем массив: ключ - это номер страницы, значение - это смещение для БД.
      // Нумерация здесь нужна с единицы. А смещение с шагом = кол-ву материалов на странице.
      for( $i = 0; $i < $pages; $i++) {
          $pagesArr[$i+1] = $i * $limit;
      }

      // Теперь что бы на странице отображать нужное кол-во ссылок
      // дробим массив со значениями [№ страницы] => "смещение" на
      // Части (чанки)
      $allPages = array_chunk($pagesArr, $linkLimit, true);

      // Получаем индекс чанка в котором находится нужное смещение.
      // И далее только из него сформируем список ссылок:
      $needChunk = $this->searchPage( $allPages, $start );

      // Формируем ссылки "В начало", "передыдущая" ------------------------------------------------

      if ( $start > 1 ) {
        $htmlOut .= '<li><a class="fas fa-step-backward" href="'.$link.'&'.$varName.'=0">'.$this->startChar.'</a></li>'.
                    '<li><a class="fas fa-caret-left" href="'.$link.'&'.$varName.'='.($start - $limit).'">'.$this->prevChar.'</a></li>';
      } else {
        $htmlOut .= '<li ><span>'.$this->startChar.'</span></li>'.
                    '<li ><span>'.$this->prevChar.'</span></li>';
      }
      // Собсно выводим ссылки из нужного чанка
      foreach( $allPages[$needChunk] AS $pageNum => $ofset )  {
        // Делаем текущую страницу не активной:
        if( $ofset == $start  ) {
            $htmlOut .= '<li class="activPage"><span >'. $pageNum .'</span></li>';
            continue;
        }
        $htmlOut .= '<li><a href="'.$link.'&'.$varName.'='. $ofset .'">'. $pageNum . '</a></li>';
      }

      // Формируем ссылки "следующая", "в конец" ------------------------------------------------

      if ( ($all - $limit) >  $start) {
        $htmlOut .= '<li><a class="fas fa-caret-right" href="' . $link . '&' . $varName . '=' . ( $start + $limit) . '">' . $this->nextChar . '</a></li>'.
                    '<li><a class="fas fa-step-forward" href="' . $link . '&' . $varName . '=' . array_pop( array_pop($allPages) ) . '">' . $this->endChar . '</a></li>';
      } else {
        $htmlOut .= '<li><span>' . $this->nextChar . '</span></li>'.
                    '<li><span>' . $this->endChar . '</span></li>';
      }
      return '<ul id="'.$this->id.'">' . $htmlOut . '<ul>';
    }

    /**
     * Ищет в каком чанке находится сраница со смещением $needPage
     * @param array $pagesList массив чанков (массивов страниц разбитый по лимиту ссылок на странице)
     * @param int $needPage - смещение
     * @return number Ключ чанка в котором есть нужная страница
     */
    protected function searchPage( array $pagesList, /*int*/$needPage )
    {
        foreach( $pagesList AS $chunk => $pages  ){
            if( in_array($needPage, $pages) ){
                return $chunk;
            }
        }
        return 0;
    }
}

// В примере используется, но не изменяется.
$count = isset($_GET['count']) ? $_GET['count'] : 20;
// Смещение для БД
$start = isset($_GET['start']) ? $_GET['start'] : 0;

try {

    // Получаем объект для работы с БД:
  /*  $db = new PDO(
        "mysql:host=mysql.ukrdomen.com;dbname=uh1108308_dlc","uh1108308_dlc","NPyuW3gnhxQT",
        array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false
        )
    );

    // Получаем общее кол-во "страниц"
    $all = $db->query(
        'SELECT COUNT(*) FROM `karta`'
    )->fetchColumn();

    // Подготавливаем запрос на получение
    // данных теущей "страницы"
    $stmt = $db->prepare(
        'SELECT *
         FROM `karta`
         LIMIT  :limit
         OFFSET :offset'
    );

    // Привязываем значения к плейсхолдерам запроса
    $stmt->bindValue(':limit', $count, PDO::PARAM_INT);
    $stmt->bindValue(':offset', $start, PDO::PARAM_INT);

    // Отправляем привязанные данные
    $stmt->execute();
    // Получаем результат запрса:
    $pages = $stmt->fetchAll(PDO::FETCH_ASSOC);*/
  //var_dump($spis);die();
  $pages=$spis;
    // Цикл в котором выводим данные:
    foreach ($pages AS $page) {
        echo "<tr class='gradeA' ";
        if($page['del_k']==1){
            echo "style='color:red;'";
        }
        echo "id='o{$page['id']}' onclick='edit(this.id)'><td><form method='post' name='k{$page['id']}' id='k{$page['id']}'>
<input type='hidden' name='id_k' value='{$page['id']}'></form> {$page['id']}</td>
    <td>{$page['fname']} {$page['name']} {$page['sname']}</td><td>{$page['sex']}</td><td>{$page['datB']}</td>
            <td>{$page['typeDiab']}</td><td>{$page['city']}</td><td>{$page['date_izm']}</td></tr>";
    }

    // Выводим блок ссылок с постраничной навигацией:


} catch (PDOException $e) {
    echo $e->getMessage();
}
/******************************************************************/
?>
                            </tbody>
                        </table>
                    <div id="page" style="display: flex;flex-direction: column;">
                        <div>
                    <?php

                    $pagenav = new SimPageNav();
                    echo $pagenav->getLinks($all, $count, $start, 10, 'start' );

                    ?></div>
<div class="dataTables_info" style="position: relative;margin-top: 0;" id="example_info" role="status"
     aria-live="polite">відображено карток [<? echo $start;?> ... <?
    if(intval($all)<intval($count)){
        echo $all+$start;?>] із <? echo $all;
    }else{
        echo $count+$start;?>] із <? echo $all;
    }
     ?>
</div>

                    </div>
                    <?
                    if(isset($masFind)){
                    ?>
                        <br><br>
                        <form method="post" action="<?=Url::local('bigfind')?>">
                            <?php
                            foreach($masFind as $key=>$item):
                                echo " <input type='hidden' value='{$item}' name='{$key}'>";
                            endforeach;
                            ?>
                    <input type="submit" name="find" class="btn"
                                   style="border: 1px solid darkblue;color:darkblue;"
                                   value="Уточнити пошуковий запит">
                        </form>
                                   <?php }
                    ?>




        </div>
    </div>
<?
}
else{
    echo "Ви не авторизовані в системі";
}
