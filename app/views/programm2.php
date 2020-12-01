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
                                class="ui-menuitem-link ng-star-inserted"
                                id="login"><!----><span class="ui-menuitem-text" id="bbu">Картотека</span></a><!----></li>
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
                        .activmes{
                            color: #1b6d85;
                            background:  #e5e5e5;
                            border-left: 3px solid #1b6d85;
                            padding-left: 7px;
                        }
                        .mmm:hover{
                            color: #1b6d85;
                            background:  #e5e5e5;
                            border-left: 3px solid #1b6d85;
                            padding-left: 7px;
                        }

                    </style>
                    <br>
                    <ul _ngcontent-c2="" class="nav nav-pills flex-column">
                        <?php
                        $abc = ['А','Б','В','Г','Ґ','Д','Е','Є','Ж','З','И','І','Ї','Й','К','Л','М','Н','О','П','Р','С',
                            'Т','У','Ф','Х','Ц','Ч','Ш','Щ','Ю','Я'];
                       /*foreach (range(chr(0xC0), chr(0xDF)) as $b):
                            $abc[] = iconv('CP1251', 'UTF-8', $b);

                        endforeach;*/

                        foreach ($abc as $item):
                        echo " <li _ngcontent-c2=\"\" class='mmm' title='{$item}'>";?><!----><!---->


  <a href="?start=<? echo $item;?>" style='border: none; width: 100%;
    text-align: left;'  id="<? echo $item;?>" onclick="bukva(this.id)"
                                _ngcontent-c2='' class='nav-link nav-link-ext ng-star-inserted'
                                href=''><!----><i _ngcontent-c2=\"\"
                                                                                 class='fas fa-newspaper'></i>
                                <!----><span _ngcontent-c2='' class='nav-link-text ng-star-inserted'><? echo $item;?></span></a>
                           </li>
                       <? endforeach;




                       echo " <li _ngcontent-c2=\"\" class='mmm' title='Всі'>";?><!----><!---->


                        <a href="?start=Всі" style='border: none; width: 100%;
    text-align: left;'  id="Всі" onclick="bukva(this.id)"
                           _ngcontent-c2='' class='nav-link nav-link-ext ng-star-inserted'
                           href=''><!----><i _ngcontent-c2=\"\"
                                             class='fas fa-newspaper'></i>
                            <!----><span _ngcontent-c2='' class='nav-link-text ng-star-inserted'>Всі</span></a>
                        </li>

                    </ul>
                    <div _ngcontent-c2="" class="fixed-bottom toggler align-items-center justify-content-start row"
                         id="sidebarToggler">
                        <div _ngcontent-c2="" style="padding-left: 10px"><!----><i _ngcontent-c2=""
                                                                                   aria-hidden="true"
                                                                                   class="fas fa-caret-left"></i>
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
                <br>
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
                            var par=document.location.search;
                            var met='../programm2/findSkin'+par;
                            location=met;
                        }
                    </script>
                    <link href="../../css/1.css" rel="stylesheet">
                    <?php
                    if(isset($findArr)){
                        ?>

                        <details id='detF' open style="margin: 10px;"><summary>Швидкий пошук за картотекою</summary>
                            <form method="post" action="<?=Url::getAction('programm2','findR')?>">
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
                            <form method="post" action="<?= Url::getAction('programm2', 'findR') ?>">
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
                        #example tr:hover{
                            background: lightgrey;
                        }
                    </style>
                    <?php

                   // echo "dddd";var_dump($_POST);
                    ?>
                                         <table id="example" class="display" style="width:100%">
                            <thead>
                            <tr style="    background-color: #ebedf0;
    border-color: #d9d9d9;"><th>№ учасника</th><th>ПІБ</th><th>Стать</th><th>Рік нар.</th><th>Тип діабету</th><th>Населений пункт</th>
                                <th>Дата модифікації</th></tr> </thead>
<tbody id="check1">

</tbody>
                        </table>
                    <div id="check2">

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
                                   <?php


                    }
                    ?>




        </div>
    </div>
    <script src="../../css/1.js"></script>
    <script src="../../css/2.js"></script>
    <script>
function bukva(b){

        $.ajax({
            type: "POST",
            url: "<?=Url::local('ajaxdat2');?>",
            data: {str: b},
            success: function (data) {
                $("#check1").html(data);

            }
        })


}


       $(document).ready(function(){
         //  window.DataTables = require( 'datatables.net-bs4' );
           let params = (new URL(document.location)).searchParams;
           var b=params.get("start");

           var nn=document.location.pathname;
          var regV = /findR/gi;     // шаблон
           var regV1 = /findT1/gi;
           var result = nn.match(regV);  // поиск шаблона в юрл
           var result1 = nn.match(regV1);
           var strGET = window.location.search.replace( '?', '');

          var p=strGET.indexOf('start');

           if (result) {
               var name="<? echo $_SESSION['find']['name'];?>";
               var fname="<? echo $_SESSION['find']['fname'];?>";
               var year1="<? echo $_SESSION['find']['year1'];?>";
               var year2="<? echo $_SESSION['find']['year2'];?>";
               var nom1="<? echo $_SESSION['find']['nom1'];?>";
               var nom2="<? echo $_SESSION['find']['nom2'];?>";
               var sex="<? echo $_SESSION['find']['sex'];?>";
               var date_izm="<? echo $_SESSION['find']['date_izm'];?>";
               var sname="<? echo $_SESSION['find']['sname'];?>";
               var typeDiab="<? echo $_SESSION['find']['typeDiab'];?>";
               var moi="<? echo $_SESSION['find']['moi'];?>";
               var city="<? echo $_SESSION['find']['city'];?>";

               $.ajax({
                   type: "POST",
                   url: "<?=Url::local('ajaxdat3');?>",
                   data: {name: name,fname:fname,year1:year1,year2:year2,nom1:nom1,nom2:nom2,sex:sex,date_izm:date_izm,sname:sname,typeDiab:typeDiab,moi:moi,city:city},
                   success: function (data) {
                       $("#check1").html(data)
                   }
               });


           }

else if(result1){
    if(p==-1) {
        /* 1.A.*/
        var fname = "<? echo $_POST['fname'];?>";

        var name = "<? echo $_POST['name'];?>";
        var sname = "<? echo $_POST['sname'];?>";
        var ychas = "<? echo $_POST['ychas'];?>";
        var nomIss = "<? echo $_POST['nomIss'];?>";
        var sex = "<? echo $_POST['sex'];?>";
        var datB = "<? echo $_POST['datB'];?>";
        var datB0 = "<? echo $_POST['datB0'];?>";
        var phone = "<? echo $_POST['phone'];?>";
        var email = "<? echo $_POST['email'];?>";
        var city = "<? echo $_POST['city'];?>";
        var rajon = "<? echo $_POST['rajon'];?>";
        var work = "<? echo $_POST['work'];?>";
        var bearn = "<? echo $_POST['bearn'];?>";
        var week = "<? echo $_POST['week'];?>";
        var vesR = "<? echo $_POST['vesR'];?>";
        var vagaPN = "<? echo $_POST['vagaPN'];?>";
        var vagaPN0 = "<? echo $_POST['vagaPN0'];?>";

        /*1.Б.*/
        var fnameO = "<? echo $_POST['fnameO'];?>";
        var nameO = "<? echo $_POST['nameO'];?>";
        var snameO = "<? echo $_POST['snameO'];?>";
        var ychasOtez = "<? echo $_POST['ychasOtez'];?>";
        var nomIssO = "<? echo $_POST['nomIssO'];?>";
        var datBOtez0 = "<? echo $_POST['datBOtez0'];?>";
        var datBOtez = "<? echo $_POST['datBOtez'];?>";
        var oblOtez = "<? echo $_POST['oblOtez'];?>";
        var cityOtez = "<? echo $_POST['cityOtez'];?>";
        var lechOtez = "<? echo $_POST['lechOtez'];?>";
        var lechOtezKak = "<? echo $_POST['lechOtezKak'];?>";
        var fnameM = "<? echo $_POST['fnameM'];?>";
        var nameM = "<? echo $_POST['nameM'];?>";
        var snameM = "<? echo $_POST['snameM'];?>";
        var ychasM = "<? echo $_POST['ychasM'];?>";
        var nomIssM = "<? echo $_POST['nomIssM'];?>";
        var datBM0 = "<? echo $_POST['datBM0'];?>";
        var datBM = "<? echo $_POST['datBM'];?>";
        var oblM = "<? echo $_POST['oblM'];?>";
        var cityM = "<? echo $_POST['cityM'];?>";
        var lechM = "<? echo $_POST['lechM'];?>";
        var lechMKak = "<? echo $_POST['lechMKak'];?>";
        var lechBS = "<? echo $_POST['lechBS'];?>";
        var lechBSKak = "<? echo $_POST['lechBSKak'];?>";

        /*1.В.*/
        var golodSem = "<? echo $_POST['golodSem'];?>";
        var periodGolod = "<? echo $_POST['periodGolod'];?>";
        var golodM = "<? echo $_POST['golodM'];?>";
        var golodO = "<? echo $_POST['golodO'];?>";
        var golodSister = "<? echo $_POST['golodSis'];?>";
        var death1 = "<? echo $_POST['death1'];?>";
        var death2 = "<? echo $_POST['death2'];?>";

        /*2.A.*/
        var ves0 = "<? echo $_POST['ves0'];?>";
        var ves = "<? echo $_POST['ves'];?>";
        var rost0 = "<? echo $_POST['rost0'];?>";
        var rost = "<? echo $_POST['rost'];?>";
        var tal0 = "<? echo $_POST['tal0'];?>";
        var tal = "<? echo $_POST['tal'];?>";
        var bed0 = "<? echo $_POST['bed0'];?>";
        var bed = "<? echo $_POST['bed'];?>";
        var index0 = "<? echo $_POST['index0'];?>";
        var index = "<? echo $_POST['index'];?>";
        var art0 = "<? echo $_POST['art0'];?>";
        var art = "<? echo $_POST['art'];?>";
        var systisk0 = "<? echo $_POST['systisk0'];?>";
        var systisk = "<? echo $_POST['systisk'];?>";
        var art10 = "<? echo $_POST['art10'];?>";
        var art1 = "<? echo $_POST['art1'];?>";
        var disttisk0 = "<? echo $_POST['disttisk0'];?>";
        var disttisk = "<? echo $_POST['disttisk'];?>";

        /*2.Б.*/
        var smouk = "<? echo $_POST['smouk'];?>";
        var smoukTime = "<? echo $_POST['smoukTime'];?>";
        var smokeKol0 = "<? echo $_POST['smokeKol0'];?>";
        var smokeKol = "<? echo $_POST['smokeKol'];?>";
        var alkogol = "<? echo $_POST['alkogol'];?>";

        /*2.В.*/
        var typeDiab = "<? echo $_POST['typeDiab'];?>";
        var yearD0 = "<? echo $_POST['yearD0'];?>";
        var yearD = "<? echo $_POST['yearD'];?>";
        var vekD0 = "<? echo $_POST['vekD0'];?>";
        var vekD = "<? echo $_POST['vekD'];?>";
        var longD0 = "<? echo $_POST['longD0'];?>";
        var longD = "<? echo $_POST['longD'];?>";

        /*2.Г.*/
        var inf = "<? echo $_POST['inf'];?>";
        var aut = "<? echo $_POST['aut'];?>";
        var porok = "<? echo $_POST['porok'];?>";
        var endoc = "<? echo $_POST['endoc'];?>";
        var patol = "<? echo $_POST['patol'];?>";
        var DGR = "<? echo $_POST['DGR'];?>";

        /*3.A.*/
        var infarkt = "<? echo $_POST['infarkt'];?>";
        var kolinf = "<? echo $_POST['kolinf'];?>";
        var datInf = "<? echo $_POST['datInf'];?>";
        var datInf0 = "<? echo $_POST['datInf0'];?>";
        var insult = "<? echo $_POST['insult'];?>";
        var kolins = "<? echo $_POST['kolins'];?>";
        var datIns = "<? echo $_POST['datIns'];?>";
        var datIns0 = "<? echo $_POST['datIns0'];?>";
        var hronSerd = "<? echo $_POST['hronSerd'];?>";
        var datStad = "<? echo $_POST['datStad'];?>";
        var datStad0 = "<? echo $_POST['datStad0'];?>";

        /*4.A.*/
        var glaz0 = "<? echo $_POST['glaz0'];?>";
        var glaz = "<? echo $_POST['glaz'];?>";
        var diabDiab = "<? echo $_POST['diabDiab'];?>";
        var datDiab = "<? echo $_POST['datDiab'];?>";
        var datDiab0 = "<? echo $_POST['datDiab0'];?>";
        var diabNep = "<? echo $_POST['diabNep'];?>";
        var datNep = "<? echo $_POST['datNep'];?>";
        var datNep0 = "<? echo $_POST['datNep0'];?>";
        var diabPrep = "<? echo $_POST['diabPrep'];?>";
        var datPrep = "<? echo $_POST['datPrep'];?>";
        var datPrep0 = "<? echo $_POST['datPrep0'];?>";
        var diabPrep2 = "<? echo $_POST['diabPrep2'];?>";
        var datPrep2 = "<? echo $_POST['datPrep2'];?>";
        var datPrep20 = "<? echo $_POST['datPrep20'];?>";
        var Slep = "<? echo $_POST['Slep'];?>";
        var datSlep = "<? echo $_POST['datSlep'];?>";
        var datSlep0 = "<? echo $_POST['datSlep0'];?>";
        var Lazer = "<? echo $_POST['Lazer'];?>";
        var datLazer = "<? echo $_POST['datLazer'];?>";
        var datLazer0 = "<? echo $_POST['datLazer0'];?>";
        var Katar = "<? echo $_POST['Katar'];?>";
        var datKatar = "<? echo $_POST['datKatar'];?>";
        var datKatar0 = "<? echo $_POST['datKatar0'];?>";
        var Mal = "<? echo $_POST['Mal'];?>";
        var datMal = "<? echo $_POST['datMal'];?>";
        var datMal0 = "<? echo $_POST['datMal0'];?>";
        var Glauk = "<? echo $_POST['Glauk'];?>";
        var datGlauk = "<? echo $_POST['datGlauk'];?>";
        var datGlauk0 = "<? echo $_POST['datGlauk0'];?>";
        var LechDR = "<? echo $_POST['LechDR'];?>";

        /*5.A.*/
        var pochki0 = "<? echo $_POST['pochki0'];?>";
        var pochki = "<? echo $_POST['pochki'];?>";
        var diabNefro = "<? echo $_POST['diabNefro'];?>";
        var datNefro = "<? echo $_POST['datNefro'];?>";
        var datNefro0 = "<? echo $_POST['datNefro0'];?>";
        var diabPochNEd = "<? echo $_POST['diabPochNEd'];?>";
        var datPochNEd = "<? echo $_POST['datPochNEd'];?>";
        var datPochNEd0 = "<? echo $_POST['datPochNEd0'];?>";
        var diabPochSt = "<? echo $_POST['diabPochSt'];?>";
        var datPochSt = "<? echo $_POST['datPochSt'];?>";
        var datPochSt0 = "<? echo $_POST['datPochSt0'];?>";
        var diabDializ = "<? echo $_POST['diabDializ'];?>";
        var datDializ = "<? echo $_POST['datDializ'];?>";
        var datDializ0 = "<? echo $_POST['datDializ0'];?>";
        var LechPoch = "<? echo $_POST['LechPoch'];?>";

        /*6.A.*/
        var datPoli0 = "<? echo $_POST['datPoli0'];?>";
        var datPoli = "<? echo $_POST['datPoli'];?>";
        var diabAngin = "<? echo $_POST['diabAngin'];?>";
        var datAngin = "<? echo $_POST['datAngin'];?>";
        var datAngin0 = "<? echo $_POST['datAngin0'];?>";
        var kakAngio = "<? echo $_POST['kakAngio'];?>";
        var diabNejr = "<? echo $_POST['diabNejr'];?>";
        var datNejr = "<? echo $_POST['datNejr'];?>";
        var datNejr0 = "<? echo $_POST['datNejr0'];?>";
        var diabStopp = "<? echo $_POST['diabStopp'];?>";
        var Bol = "<? echo $_POST['Bol'];?>";
        var Boltwo = "<? echo $_POST['Boltwo'];?>";
        var BolInten = "<? echo $_POST['BolInten'];?>";
        var Bolkak = "<? echo $_POST['Bolkak'];?>";
        var Preparat = "<? echo $_POST['Preparat'];?>";
        var PreparatKakie = "<? echo $_POST['PreparatKakie'];?>";

        /*6.Б.*/
        var datStopObsl = "<? echo $_POST['datStopObsl'];?>";
        var datStopObsl0 = "<? echo $_POST['datStopObsl0'];?>";
        var SnizhT = "<? echo $_POST['SnizhT'];?>";
        var Chyvs = "<? echo $_POST['Chyvs'];?>";
        var NarVibr = "<? echo $_POST['NarVibr'];?>";
        var Reflex = "<? echo $_POST['Reflex'];?>";
        var Jazv = "<? echo $_POST['Jazv'];?>";
        var GnojJazv = "<? echo $_POST['GnojJazv'];?>";
        var PylsStopa = "<? echo $_POST['PylsStopa'];?>";
        var Shynt = "<? echo $_POST['Shynt'];?>";
        var Hrom = "<? echo $_POST['Hrom'];?>";
        var Ampyt = "<? echo $_POST['Ampyt'];?>";
        var kakAmput1 = "<? echo $_POST['kakAmput1'];?>";
        var datAmput = "<? echo $_POST['datAmput'];?>";
        var datAmput0 = "<? echo $_POST['datAmput0'];?>";

        /*7.А.*/
        var datLab0 = "<? echo $_POST['datLab0'];?>";
        var datLab = "<? echo $_POST['datLab'];?>";
        var Natosh = "<? echo $_POST['Natosh'];?>";
        var Pisha0 = "<? echo $_POST['Pisha0'];?>";
        var Pisha = "<? echo $_POST['Pisha'];?>";
        var nmol0 = "<? echo $_POST['nmol0'];?>";
        var nmol = "<? echo $_POST['nmol'];?>";
        var Datnmol0 = "<? echo $_POST['Datnmol0'];?>";
        var Datnmol = "<? echo $_POST['Datnmol'];?>";
        var vidsot0 = "<? echo $_POST['vidsot0'];?>";
        var vidsot = "<? echo $_POST['vidsot'];?>";
        var gemogl0 = "<? echo $_POST['gemogl0'];?>";
        var gemogl = "<? echo $_POST['gemogl'];?>";
        var Datgemogl0 = "<? echo $_POST['Datgemogl0'];?>";
        var Datgemogl = "<? echo $_POST['Datgemogl'];?>";
        var Datkrovi0 = "<? echo $_POST['Datkrovi0'];?>";
        var Datkrovi = "<? echo $_POST['Datkrovi'];?>";
        var eritr0 = "<? echo $_POST['eritr0'];?>";
        var eritr = "<? echo $_POST['eritr'];?>";
        var gemogl20 = "<? echo $_POST['gemogl20'];?>";
        var gemogl2 = "<? echo $_POST['gemogl2'];?>";
        var lekoz0 = "<? echo $_POST['lekoz0'];?>";
        var lekoz = "<? echo $_POST['lekoz'];?>";
        var nejtrof0 = "<? echo $_POST['nejtrof0'];?>";
        var nejtrof = "<? echo $_POST['nejtrof'];?>";
        var monozit0 = "<? echo $_POST['monozit0'];?>";
        var monozit = "<? echo $_POST['monozit'];?>";
        var limfoz0 = "<? echo $_POST['limfoz0'];?>";
        var limfoz = "<? echo $_POST['limfoz'];?>";
        var tromb0 = "<? echo $_POST['tromb0'];?>";
        var tromb = "<? echo $_POST['tromb'];?>";
        var mpv0 = "<? echo $_POST['mpv0'];?>";
        var mpv = "<? echo $_POST['mpv'];?>";
        var dryg0 = "<? echo $_POST['dryg0'];?>";
        var dryg = "<? echo $_POST['dryg'];?>";
        var kreat0 = "<? echo $_POST['kreat0'];?>";
        var kreat = "<? echo $_POST['kreat'];?>";
        var datkreat0 = "<? echo $_POST['datkreat0'];?>";
        var datkreat = "<? echo $_POST['datkreat'];?>";
        var kreatMocha0 = "<? echo $_POST['kreatMocha0'];?>";
        var kreatMocha = "<? echo $_POST['kreatMocha'];?>";
        var datMocha0 = "<? echo $_POST['datMocha0'];?>";
        var datMocha = "<? echo $_POST['datMocha'];?>";
        var klirkreat0 = "<? echo $_POST['klirkreat0'];?>";
        var klirkreat = "<? echo $_POST['klirkreat'];?>";
        var Protein = "<? echo $_POST['Protein'];?>";
        var posIzm0 = "<? echo $_POST['posIzm0'];?>";
        var posIzm = "<? echo $_POST['posIzm'];?>";
        var datProtein0 = "<? echo $_POST['datProtein0'];?>";
        var datProtein = "<? echo $_POST['datProtein'];?>";
        var Mikroalmb = "<? echo $_POST['Mikroalmb'];?>";
        var kakMikro1 = "<? echo $_POST['kakMikro1'];?>";
        var datMikro = "<? echo $_POST['datMikro'];?>";
        var datMikro0 = "<? echo $_POST['datMikro0'];?>";
        var Lipiddat0 = "<? echo $_POST['Lipiddat0'];?>";
        var Lipiddat = "<? echo $_POST['Lipiddat'];?>";
        var Holest0 = "<? echo $_POST['Holest0'];?>";
        var Holest = "<? echo $_POST['Holest'];?>";
        var LipidVis0 = "<? echo $_POST['LipidVis0'];?>";
        var LipidVis = "<? echo $_POST['LipidVis'];?>";
        var LipidNiz0 = "<? echo $_POST['LipidNiz0'];?>";
        var LipidNiz = "<? echo $_POST['LipidNiz'];?>";
        var Trigliz0 = "<? echo $_POST['Trigliz0'];?>";
        var Trigliz = "<? echo $_POST['Trigliz'];?>";
        var Asparta0 = "<? echo $_POST['Asparta0'];?>";
        var Asparta = "<? echo $_POST['Asparta'];?>";
        var Alanin0 = "<? echo $_POST['Alanin0'];?>";
        var Alanin = "<? echo $_POST['Alanin'];?>";
        var BelocS0 = "<? echo $_POST['BelocS0'];?>";
        var BelocS = "<? echo $_POST['BelocS'];?>";
        var PeptidPmol0 = "<? echo $_POST['PeptidPmol0'];?>";
        var PeptidPmol = "<? echo $_POST['PeptidPmol'];?>";
        var PeptidNmol0 = "<? echo $_POST['PeptidNmol0'];?>";
        var PeptidNmol = "<? echo $_POST['PeptidNmol'];?>";
        var S_Pep0 = "<? echo $_POST['S_Pep0'];?>";
        var S_Pep = "<? echo $_POST['S_Pep'];?>";
        var atGad0 = "<? echo $_POST['atGad0'];?>";
        var atGad = "<? echo $_POST['atGad'];?>";
        var atGaddat0 = "<? echo $_POST['atGaddat0'];?>";
        var atGaddat = "<? echo $_POST['atGaddat'];?>";

        /*7.Б.*/
        var Sivor = "<? echo $_POST['Sivor'];?>";
        var Plazma = "<? echo $_POST['Plazma'];?>";
        var DNK = "<? echo $_POST['DNK'];?>";
        var PHK = "<? echo $_POST['PHK'];?>";
        var Sluna = "<? echo $_POST['Sluna'];?>";
        var Biopat = "<? echo $_POST['Biopat'];?>";
        var PrimZAbKrov = "<? echo $_POST['PrimZAbKrov'];?>";

        /*8.А.*/
        var LechDIabet = "<? echo $_POST['LechDIabet'];?>";
        var LechInsul = "<? echo $_POST['LechInsul'];?>";
        var datLechDiab0 = "<? echo $_POST['datLechDiab0'];?>";
        var datLechDiab = "<? echo $_POST['datLechDiab'];?>";
        var diabLechTab = "<? echo $_POST['diabLechTab'];?>";
        var LechGiper = "<? echo $_POST['LechGiper'];?>";
        var LechLipidGiper = "<? echo $_POST['LechLipidGiper'];?>";
        var Onko = "<? echo $_POST['Onko'];?>";
        var VidOnko = "<? echo $_POST['VidOnko'];?>";
        var dateOnko0 = "<? echo $_POST['dateOnko0'];?>";
        var dateOnko = "<? echo $_POST['dateOnko'];?>";
        var OnkoLek = "<? echo $_POST['OnkoLek'];?>";

        /*9.А.*/
        var gen = "<? echo $_POST['gen'];?>";
        $.ajax({
            type: "POST",
            url: "<?=Url::local('ajaxdat3');?>",
            data: {

                /*1.A.*/
                name: name,
                fname: fname,
                sname: sname,
                ychas: ychas,
                nomIss: nomIss,
                sex: sex,
                datB: datB,
                datB0: datB0,
                phone: phone,
                email: email,
                city: city,
                rajon: rajon,
                work: work,
                bearn: bearn,
                week: week,
                vesR: vesR,
                vagaPN: vagaPN,
                vagaPN0: vagaPN0,
                /*1.Б.*/
                fnameO: fnameO,
                nameO: nameO,
                snameO: snameO,
                ychasOtez: ychasOtez,
                nomIssO: nomIssO,
                datBOtez0: datBOtez0,
                datBOtez: datBOtez,
                oblOtez: oblOtez,
                cityOtez: cityOtez,
                lechOtez: lechOtez,
                lechOtezKak: lechOtezKak,
                fnameM: fnameM,
                nameM: nameM,
                snameM: snameM,
                ychasM: ychasM,
                nomIssM: nomIssM,
                datBM0: datBM0,
                datBM: datBM,
                oblM: oblM,
                cityM: cityM,
                lechM: lechM,
                lechMKak: lechMKak,
                lechBS: lechBS,
                lechBSKak: lechBSKak,
                /*1.В.*/
                golodSem: golodSem,
                periodGolod: periodGolod,
                golodM: golodM,
                golodO: golodO,
                golodSister: golodSister,
                death1: death1,
                death2: death2,
                /*2.A.*/
                ves0: ves0,
                ves: ves,
                rost0: rost0,
                rost: rost,
                tal0: tal0,
                tal: tal,
                bed0: bed0,
                bed: bed,
                index0: index0,
                index: index,
                art0: art0,
                art: art,
                systisk0: systisk0,
                systisk: systisk,
                art10: art10,
                art1: art1,
                disttisk0: disttisk0,
                disttisk: disttisk,
                /*2.Б.*/
                smouk: smouk,
                smoukTime: smoukTime,
                smokeKol0: smokeKol0,
                smokeKol: smokeKol,
                alkogol: alkogol,
                /*2.В.*/
                typeDiab: typeDiab,
                yearD0: yearD0,
                yearD: yearD,
                vekD0: vekD0,
                vekD: vekD,
                longD0: longD0,
                longD: longD,
                /*2.Г.*/
                inf: inf,
                aut: aut,
                porok: porok,
                endoc: endoc,
                patol: patol,
                DGR: DGR,
                /*3.A.*/
                infarkt: infarkt,
                kolinf: kolinf,
                datInf: datInf,
                datInf0: datInf0,
                insult: insult,
                kolins: kolins,
                datIns: datIns,
                datIns0: datIns0,
                hronSerd: hronSerd,
                datStad: datStad,
                datStad0: datStad0,
                /*4.A.*/
                glaz0: glaz0,
                glaz: glaz,
                diabDiab: diabDiab,
                datDiab: datDiab,
                datDiab0: datDiab0,
                diabNep: diabNep,
                datNep: datNep,
                datNep0: datNep0,
                diabPrep: diabPrep,
                datPrep: datPrep,
                datPrep0: datPrep0,
                diabPrep2: diabPrep2,
                datPrep2: datPrep2,
                datPrep20: datPrep20,
                Slep: Slep,
                datSlep: datSlep,
                datSlep0: datSlep0,
                Lazer: Lazer,
                datLazer: datLazer,
                datLazer0: datLazer0,
                Katar: Katar,
                datKatar: datKatar,
                datKatar0: datKatar0,
                Mal: Mal,
                datMal: datMal,
                datMal0: datMal0,
                Glauk: Glauk,
                datGlauk: datGlauk,
                datGlauk0: datGlauk,
                LechDR: LechDR,
                /*5.A.*/
                pochki0: pochki0,
                pochki: pochki,
                diabNefro: diabNefro,
                datNefro: datNefro,
                datNefro0: datNefro0,
                diabPochNEd: diabPochNEd,
                datPochNEd: datPochNEd,
                datPochNEd0: datPochNEd0,
                diabPochSt: diabPochSt,
                datPochSt: datPochSt,
                datPochSt0: datPochSt,
                diabDializ: diabDializ,
                datDializ: datDializ,
                datDializ0: datDializ0,
                LechPoch: LechPoch,
                /*6.A.*/
                datPoli0: datPoli0,
                datPoli: datPoli,
                diabAngin: diabAngin,
                datAngin: datAngin,
                datAngin0: datAngin0,
                kakAngio: kakAngio,
                diabNejr: diabNejr,
                datNejr: datNejr,
                datNejr0: datNejr0,
                diabStopp: diabStopp,
                Bol: Bol,
                Boltwo: Boltwo,
                BolInten: BolInten,
                Bolkak: Bolkak,
                Preparat: Preparat,
                PreparatKakie: PreparatKakie,
                /*6.Б.*/
                datStopObsl: datStopObsl,
                datStopObsl0: datStopObsl0,
                SnizhT: SnizhT,
                Chyvs: Chyvs,
                NarVibr: NarVibr,
                Reflex: Reflex,
                Jazv: Jazv,
                GnojJazv: GnojJazv,
                PylsStopa: PylsStopa,
                Shynt: Shynt,
                Hrom: Hrom,
                Ampyt: Ampyt,
                kakAmput1: kakAmput1,
                datAmput: datAmput,
                datAmput0: datAmput0,
                /*7.А.*/
                datLab0: datLab0,
                datLab: datLab,
                Natosh: Natosh,
                Pisha0: Pisha0,
                Pisha: Pisha,
                nmol0: nmol0,
                nmol: nmol,
                Datnmol0: Datnmol0,
                Datnmol: Datnmol,
                vidsot0: vidsot0,
                vidsot: vidsot,
                gemogl0: gemogl0,
                gemogl: gemogl,
                Datgemogl0: Datgemogl0,
                Datgemogl: Datgemogl,
                Datkrovi0: Datkrovi0,
                Datkrovi: Datkrovi,
                eritr0: eritr0,
                eritr: eritr,
                gemogl20: gemogl20,
                gemogl2: gemogl2,
                lekoz0: lekoz0,
                lekoz: lekoz,
                nejtrof0: nejtrof0,
                nejtrof: nejtrof,
                monozit0: monozit0,
                monozit: monozit,
                limfoz0: limfoz0,
                limfoz: limfoz,
                tromb0: tromb0,
                tromb: tromb,
                mpv0: mpv0,
                mpv: mpv,
                dryg0: dryg0,
                dryg: dryg,
                kreat0: kreat0,
                kreat: kreat,
                datkreat0: datkreat0,
                datkreat: datkreat,
                kreatMocha0: kreatMocha0,
                kreatMocha: kreatMocha,
                datMocha0: datMocha0,
                datMocha: datMocha,
                klirkreat0: klirkreat0,
                klirkreat: klirkreat,
                Protein: Protein,
                posIzm0: posIzm0,
                posIzm: posIzm,
                datProtein0: datProtein0,
                datProtein: datProtein,
                Mikroalmb: Mikroalmb,
                kakMikro1: kakMikro1,
                datMikro: datMikro,
                datMikro0: datMikro0,
                Lipiddat0: Lipiddat0,
                Lipiddat: Lipiddat,
                Holest0: Holest0,
                Holest: Holest,
                LipidVis0: LipidVis0,
                LipidVis: LipidVis,
                LipidNiz0: LipidNiz0,
                LipidNiz: LipidNiz,
                Trigliz0: Trigliz0,
                Trigliz: Trigliz,
                Asparta0: Asparta0,
                Asparta: Asparta,
                Alanin0: Alanin0,
                Alanin: Alanin0,
                BelocS0: BelocS0,
                BelocS: BelocS,
                PeptidPmol0: PeptidPmol0,
                PeptidPmol: PeptidPmol,
                PeptidNmol0: PeptidNmol0,
                PeptidNmol: PeptidNmol,
                S_Pep0: S_Pep0,
                S_Pep: S_Pep,
                atGad0: atGad0,
                atGad: atGad,
                atGaddat0: atGaddat0,
                atGaddat: atGaddat,
                /*7.Б.*/
                Sivor: Sivor,
                Plazma: Plazma,
                DNK: DNK,
                PHK: PHK,
                Sluna: Sluna,
                Biopat: Biopat,
                PrimZAbKrov: PrimZAbKrov,
                /*8.А.*/
                LechDIabet: LechDIabet,
                LechInsul: LechInsul,
                datLechDiab0: datLechDiab0,
                datLechDiab: datLechDiab,
                diabLechTab: diabLechTab,
                LechGiper: LechGiper,
                LechLipidGiper: LechLipidGiper,
                Onko: Onko,
                VidOnko: VidOnko,
                dateOnko0: dateOnko0,
                dateOnko: dateOnko,
                OnkoLek: OnkoLek,
                /*9.А.*/
                gen: gen
            },
            success: function (data) {
                $("#check1").html(data)
            }
        });
    }
    else{

        $("a[href*="+b+"]").addClass('activmes');
        $("a[href*='programm2']").removeClass('activmes');
        $("li[title*='Всі']").css({background: "#f8f9fa"});
        document.getElementById('bbu').innerText="Картотека: літера ["+b+"]";
        $.ajax({
            type: "GET",
            url: "<?=Url::local('ajaxdat2');?>",
            data: {str: b},
            success: function (data) {
                $("#check1").html(data)
            }
        });
    }
           }
           else {
               $("a[href*="+b+"]").addClass('activmes');
               $("a[href*='programm2']").removeClass('activmes');
               document.getElementById('bbu').innerText="Картотека: літера ["+b+"]";
               $.ajax({
                   type: "GET",
                   url: "<?=Url::local('ajaxdat2');?>",
                   data: {str: b},
                   success: function (data) {
                       $("#check1").html(data)
                   }
               });
           }
        });

$(window).on('load', function() {

    setTimeout($("#example").dataTable({ rowReorder: {
            selector: 'td:nth-child(2)'
        },
        responsive: true}),2000);
        });

/*********************************************/



    </script>
<?
}
else{
    echo "Ви не авторизовані в системі";
}
?>

