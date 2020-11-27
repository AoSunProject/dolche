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

                        <form method='post' action="<?=Url::local('programm')?>">

                            <button style='border: none; width: 100%;
    text-align: left;' type="submit"
                                    _ngcontent-c2='' class='nav-link nav-link-ext ng-star-inserted'
                                    href=''><!----><i _ngcontent-c2=\"\"
                                                      class='fa fa-newspaper-o ng-star-inserted'></i>
                                <!----><span _ngcontent-c2='' class='nav-link-text ng-star-inserted'>Всі</span></button>
                            <!----><!----></form></li>
                        <?
                        foreach ($abc as $item):
                        echo " <li _ngcontent-c2=\"\" class='mmm' title='{$item}'>";?><!----><!---->

 <form method='post' action="<?=Url::getAction('programm','findA')?>">
  <input type="hidden" name="buk" value="<? echo $item;?>">
  <button style='border: none; width: 100%;
    text-align: left;' type="submit"
                                _ngcontent-c2='' class='nav-link nav-link-ext ng-star-inserted'
                                href=''><!----><i _ngcontent-c2=\"\"
                                                                                 class='fa fa-newspaper-o ng-star-inserted'></i>
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
                            location="<?=Url::getAction('programm','findR')?>";
                        }
                    </script>
                    <link href="../../css/1.css" rel="stylesheet">
                    <?php
                    if(isset($findArr)){
                        ?>

                        <details id='detF' open style="margin: 10px;"><summary>Швидкий пошук за картотекою</summary>
                            <form method="post" action="<?=Url::getAction('programm','findR')?>">
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
                                                <option value="" <?php if($findArr[9]==''){echo 'selected';}?>></option>
                                                <option value="СД 1 типа" <?php if($findArr[9]=='СД 1 типа'){echo 'selected';}?>>СД 1 типа</option>
                                                <option value="СД 2 типа" <?php if($findArr[9]=='СД 2 типа'){echo 'selected';}?>>СД 2 типа</option>
                                                <option value="Латентный аутоиммунный (LADA)" <?php if($findArr[9]=='Латентный аутоиммунный (LADA)'){echo 'selected';}?>>Латентный аутоиммунный
                                                    (LADA)</option>
                                                <option value="MODY-диабет" <?php if($findArr[9]=='MODY-диабет'){echo 'selected';}?> >MODY-диабет</option>
                                                <option value="Панкреатогенный" <?php if($findArr[9]=='Панкреатогенный'){echo 'selected';}?>>Панкреатогенный
                                                </option>
                                                <option value="Другие" <?php if($findArr[9]=='Другие'){echo 'selected';}?>>Другие
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
                            <form method="post" action="<?= Url::getAction('programm', 'findR') ?>">
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
                                                <option value="--" >--</option>
                                                <option value="СД 1 типа">СД 1 типа</option>
                                                <option value="СД 2 типа">СД 2 типа</option>
                                                <option value="Латентный аутоиммунный (LADA)">Латентный аутоиммунный
                                                    (LADA)
                                                </option>
                                                <option value="MODY-диабет">MODY-диабет</option>
                                                <option value="Панкреатогенный">Панкреатогенный
                                                </option>
                                                <option value="Другие">Другие
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
if(isset($masFind)){
//var_dump($masFind);
}

 ?>
                        <table id="example" class="display" style="width:100%">
                            <thead>
                            <tr style="    background-color: #ebedf0;
    border-color: #d9d9d9;"><th>№ учасника</th><th>ПІБ</th><th>Стать</th><th>Рік нар.</th><th>Тип діабету</th><th>Населений пункт</th>
                                <th>Дата модифікації</th></tr>
                            </thead>
                            <tbody>
                        <?php
foreach($spis as $item):
echo "<tr class='gradeA' ";
if($item['del_k']==1){
    echo "style='color:red;'";
}
echo "id='o{$item['id']}' onclick='edit(this.id)'><td><form method='post' name='k{$item['id']}' id='k{$item['id']}'><input type='hidden' name='id_k' value='{$item['id']}'></form> {$item['id']}</td>
    <td>{$item['fname']} {$item['name']} {$item['sname']}</td><td>{$item['sex']}</td><td>{$item['datB']}</td>
            <td>{$item['typeDiab']}</td><td>{$item['city']}</td><td>{$item['date_izm']}</td></tr>";
 endforeach;
                        ?>
                            </tbody>
                        </table>
                    <?php
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

                    <script src="../../css/1.js"></script>
                    <script src="../../css/2.js"></script>
                    <script>
                        $(document).ready(function() {
                            $('#example').DataTable( {
                                "pagingType": "full_numbers"
                            } );
                        } );
                    </script>


        </div>
    </div>
<?
}
else{
    echo "Ви не авторизовані в системі";
}
