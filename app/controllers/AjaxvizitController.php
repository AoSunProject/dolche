<?php
session_start();
function apostr($str){
    $str1=str_replace("'","`",$str);
    return $str1;
}
        $opt=[
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
        ];

        $dbh=new PDO("mysql:host=mysql.ukrdomen.com;dbname=uh1108308_dlc","uh1108308_dlc","NPyuW3gnhxQT",$opt
        );
$ss='';

$str="Select * from karta where nomPac={$_POST['nomPac']} and nomV={$_POST['nomV']}";
$res=$dbh->query($str);
$row = $res->fetch();
$v="Select nomV from karta where nomPac={$_POST['nomPac']} ";
$resv=$dbh->query($v);
while($row1= $resv->fetch()){
    $vizit[]=$row1['nomV'];
}
$v1="Select max(nomV) from karta where nomPac={$_POST['nomPac']} ";
$resmaxv=$dbh->query($v1);
$rowmax= $resmaxv->fetch();

?>
<div class="tab-content" id="mmm">
    <div role="tabpanel" class="tab-pane active" id="home">
        <style>
            .red{
                margin-left: 3px;
            }
            .pop .n{

                font-size: 9px;
            }
            .pop{
                min-width: 100px;
                background: white;
                left:-30px;
                position: absolute;
                border: 1px solid darkblue;
                padding: 6px;
                display: none;
                border-radius: 5px;
                box-shadow:
                    0 1px 4px rgba(0, 0, 0, .3),
                    -23px 0 20px -23px rgba(0, 0, 0, .8),
                    23px 0 20px -23px rgba(0, 0, 0, .8),
                    0 0 40px rgba(0, 0, 0, .1) inset;
            }
        </style>
        <fieldset style="margin-top: 30px;">
            <h4 style="left: 10px">1.А. Загальні дані </h4>

            <table class='mainT' style="width: 80%">
                <tr>
                    <td><label class="lb1">№ візиту </label></td>
                    <td style="width: 100%;">
                        <input type="hidden" name="nomPac" value="<? echo $row['nomPac'];?>">
                        <select name="nomV" class="form-control" onchange="showVizitAll(this.value,<? echo $row['nomPac'];?>)">
                            <?
                            foreach($vizit as $item):
                                echo "<option";
                                if($item['nomV']==$row['nomV']){
                                    echo " selected ";
                                }
                                echo ">{$item['nomV']}</option>";

                            endforeach;
                            ?>
                        </select>

                    </td>
                    <td></td></tr>
                <tr>
                    <td><label class="lb1">Дата візиту <span class="red">*</span></label></td>
                    <td style="width: 100%;"><input class="form-control" type="date" id="datV" value="<? echo $row['datV'];?>" name="datV" placeholder=""></td>
                    <td></td></tr>
                <tr>
                    <td><label class="lb1">Статус анкети </label></td>
                    <td style="width: 100%;">
                        <select name="statysA" class="form-control" disabled>
                            <option <?if('СТВОРЕНО'==$row['statysA']){
                                echo " selected ";
                            } ?>>СТВОРЕНО</option>
                            <option <?if('В РОБОТІ'==$row['statysA']){
                                echo " selected ";
                            } ?>>В РОБОТІ</option>
                            <option <?if('ВИКОНАНА'==$row['statysA']){
                                echo " selected ";
                            } ?>>ВИКОНАНА</option>
                        </select>
                    </td>
                    <td></td></tr>
                <tr>

                    <td><label class="lb1">Власник анкети </label></td>
                    <td style="width: 100%;"><input class="form-control" type="text" name="vlasnik" value="<? echo $_SESSION['klinika'];?>" readonly></td>
                    <td></td></tr>
                <tr>
                <tr>
                    <td ><label class="lb1">Прізвище<span class="red">*</span></label></td>
                    <td style="width: 100%">
                        <input type="hidden" name="id" id="id_kart" value="<? echo $row['id'];?>">
                        <input class="form-control" type="text" id="fname" name="fname"
                            <?php
                            if($_SESSION['role']!=2){
                                echo "readonly";
                            }
                            ?>
                               value="<? echo $row['fname'];?>" placeholder="" >
                    </td>

                </tr>
                <tr>
                    <td><label class="lb1">Ім'я<span class="red">*</span></label></td>
                    <td style="width: 100%">
                        <input class="form-control" type="text" id="name" name="name"
                            <?php
                            if($_SESSION['role']!=2){
                                echo "readonly";
                            }
                            ?>
                               placeholder="" value="<? echo $row['name'];?>">
                    </td>
                </tr>
                <tr>
                    <td><label class="lb1">По-батькові<span class="red">*</span></label></td>
                    <td style="width: 100%"><input class="form-control"
                                                   <?php
                                                   if($_SESSION['role']!=2){
                                                       echo "readonly ";
                                                   }
                                                   ?> value="<? echo $row['sname'];?>"
                                                   type="text" id="sname" name="sname" placeholder=""></td>
                </tr>
                <style>
                    .hhh{
                        display: none;
                    }
                    .hhh1{
                        display: block;
                    }
                </style>
                <script>
                    function show1(id) {
                        var el="m"+id.slice(1);
                        document.getElementById(el).style.display='block';
                    }
                    function show2(el) {

                        document.getElementById(el).style.display='block';
                    }
                    function hide1(el) {

                        document.getElementById(el).style.display='none';
                    }
                    function hide2(id) {

                        var el="m"+id.slice(1);
                        document.getElementById(el).style.display='none';
                        document.getElementById(el).classList.add('hhh');
                    }
                </script>
                <tr>
                    <td>
                        <label>Чи брали участь ви раніше в цьому дослідженні?<span class="red">*</span></label>
                        <label class="hidd" id="h0">Якщо так, вкажіть ідентифікатор учасника <br> в минулому дослідженні (№ учасника)</label>
                    </td>
                    <td>
                        <select name="ychas" class="form-control" onchange="ss(this)">
                            <option value="--" <? if( $row['ychas']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['ychas']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так" <? if( $row['ychas']=='Так'){echo 'selected';}?>>Так</option>

                        </select>
                        <div style="display: flex;">
                            <input type="text" id='h1' class="form-control" name="nomIss" placeholder=""
                                <?
                                if(empty($row['nomIss'])){
                                    echo "class='hidd'";
                                    echo "style='display:none;'";
                                }
                                else{
                                    echo "value='{$row['nomIss']}'";
                                    echo "style='display:block;'";
                                }
                                ?>
                            >
                            <a href="#myModal1" class="btn btn-sm hidd" style='border:1px solid grey' id="h12" data-toggle="modal">...</a>
                        </div>
                        <link href="../../css/1.css" rel="stylesheet">
                        <div id="myModal1" class="modal fade">
                            <style>
                                #wd{
                                    width:1200px;
                                    margin: 0 auto;
                                }
                                #modalFind tr td{
                                    padding: 0;
                                }
                                #modalFind tr td .l{
                                    font-size: 11px;
                                }
                            </style>
                            <div class="modal-dialog1" id="wd">
                                <div class="modal-content">
                                    <div class="modal-header" style="display: flex; justify-content: space-around;">
                                        <h4 class="modal-title">Пошук анкети</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                                    </div>
                                    <div class="modal-body" >
                                        <!---------------------------------------------------------------------------->


                                        <form method="post" action="<?= Url::getAction('programm1', 'findR') ?>">
                                            <table id='modalFind' style="margin: 5px;">
                                                <tr>
                                                    <td><span class="l">Прізвище</span></td>
                                                    <td><input type="text" name="fname1" id="fname" class="m1"></td>
                                                    <td><span class="l">Рік народження</span></td>
                                                    <td><input placeholder="" type="text" onchange="year(this.value)" id="year1" name="year11" class="m2"> - <input
                                                            placeholder="" type="text" id="year2" name="year21" class="m2"></td>
                                                    <td><span class="l">№ картки</span></td>
                                                    <td><input type="text" name="nom11" id="nom1" placeholder="" class="m2"> - <input
                                                            placeholder="" type="text" name="nom21" id="nom2" class="m2"></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="l">Ім`я</span></td>
                                                    <td><input type="text" name="name1" id="name" class="m1"></td>
                                                    <td><span class="l">Стать</span></td>
                                                    <td><select name="sex1" class="m4" id="sex">
                                                            <option value="--" >--</option>
                                                            <option value="Чоловіча">Чоловіча</option>
                                                            <option value="Жіноча">Жіноча</option>
                                                        </select></td>
                                                    <td><span class="l">Дата модифікації</span></td>
                                                    <td><input type="date" name="date_izm1" id="date_izm" class="m4"></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="l">По батькові</span></td>
                                                    <td><input type="text" name="sname1" id="sname" class="m1"></td>
                                                    <td><span class="l">Тип діабету</span></td>
                                                    <td><select name="typeDiab1" class="m4" id="typeDiab">
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
                                                            <input type="checkbox" checked="checked" id="moi" name="moi1" value="1">
                                                            <span class="checkmark"></span>
                                                        </label></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="l">Насел.пункт</span></td>
                                                    <td><input type="text" placeholder="" id="city" name="city1" class="m1">
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

                                                    </td>
                                                    <td>
                                                        <button  onclick="rest()" class="btn btn-default log_button btn-mr"
                                                                 type="reset" title="Скинути пошук">
                                                            <i class="fas fa-times"></i>

                                                            Скинути пошук
                                                        </button>
                                                        <button _ngcontent-c8="" class="btn btn-default log_button btn-mr"
                                                                type="button" onclick="findModal()">
                                                            <i class="fas fa-search"></i>
                                                            Знайти
                                                        </button>
                                                    </td>
                                                    <td colspan="4"></td>
                                                </tr>
                                            </table>


                                        </form>
                                        <div id="rezFind">

                                        </div>

                                        <script>
                                            function findModal() {
                                                var moi=document.getElementById('moi').value;
                                                var fname=document.getElementById('fname').value;
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
                                                $.ajax({
                                                    type: "POST",
                                                    url: "<?=Url::local('ajax8');?>",
                                                    data: {moi: moi,fname:fname, sname:sname, name:name,nom1:nom1,nom2:nom2,year1:year1,year2:year2,city:city,sex:sex,typeDiab:typeDiab,date_izm:date_izm},
                                                    success: function (data) {


                                                        $("#rezFind").html(data)
                                                    }
                                                });
                                            }
                                            function save1(id) {
                                                var zn=id.slice(1);

                                                document.getElementById('h1').value=zn;
                                                document.getElementById('zakr').click();
                                            }

                                        </script>


                                        <!------------------------------------------>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" id='zakr' data-dismiss="modal">Закрити</button>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </td>
                </tr>
                <!-- 1.А. Загальні дані продолжение-->
                <tr>
                    <td>
                        <label class="lb1">Стать<span class="red">*</span></label>
                    </td>
                    <td style="width: 100%">
                        <select name="sex" class="form-control">
                            <option value="--" <? if( $row['sex']=='--'){echo 'selected';}?>>--</option>
                            <option value="Чоловіча" <? if( $row['sex']=='Чоловіча'){echo 'selected';}?>>Чоловіча</option>
                            <option value="Жіноча" <? if( $row['sex']=='Жіноча'){echo 'selected';}?>>Жіноча</option>

                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Дата нарождения<span class="red">*</span></label>

                    </td>
                    <td>
                        <input type="date" <?php
                        if($_SESSION['role']!=2){
                            echo "readonly";
                        }
                        ?>
                               value="<? echo $row['datB'];?>" name="datB" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td >
                        <label>Помер</label></td>
                    <td style="width: 80%;"><select

                                <?php
                                if($_POST['nomV']<$rowmax['max(nomV)']) {
                                    echo "readonly";
                                }
                                ?>

                                name="pomer" class="form-control" onchange="showDeth(this.value)">
                            <option value="Ні" <? if( $row['pomer']=='Ні'){echo 'selected';}?>>Ні</option>
                            <?
                            if($_POST['nomV']<$rowmax['max(nomV)']) { }else{
                                ?>
                                <option value="Так" <? if ($row['pomer'] == 'Так') {
                                    echo 'selected';
                                } ?>>Так
                                </option>
                                <?
                           }
                            ?>

                        </select>

                    </td>
                    <td></td>
                </tr>
                <tr <? if($row['pomer']!='Так'){echo 'class="showDeth"';}?> id="chastoDeth" >
                    <td><label>Дата смерті</label></td><td>
                        <input type="date" name="datedeth" id="datedeth" class="form-control">
                    </td>
                </tr><tr <? if($row['pomer']!='Так'){echo 'class="showDeth"';}?> id="sincD">
                    <td><label>Причина смерті</label></td>
                    <td><input class="form-control" type="text" id="sincdeth" value="<? echo $row['sincdeth'];?>" name="sincdeth" placeholder=""></td>
                </tr>
                <tr>
                    <td>
                        <label>Телефон<span class="red">*</span></label>

                    </td>
                    <td>
                        <input type="text"
                               value="<? echo $row['phone'];?>" name="phone" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>E-mail</label>

                    </td>
                    <td>
                        <input type="email"
                               value="<? echo $row['email'];?>" name="email" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Місце народження: населений пункт</label>

                    </td>
                    <td>
                        <input type="text" name="city" value="<? echo $row['city'];?>" class="form-control" placeholder="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Місце народження - район, область</label>

                    </td>
                    <td>
                        <input type="text" name="rajon" value="<? echo $row['rajon'];?>" class="form-control" placeholder="">
                    </td>
                </tr>
                <tr>
                    <td >
                        <label>Статус роботи<span class="red">*</span></label>

                    </td>
                    <td style="display: flex;">
                        <select name="work" class="form-control" >
                            <option value="--"  <? if( $row['work']=='--'){echo 'selected';}?>>--</option>
                            <option value="Не працюю, безробітний(а)" <? if( $row['work']=='Не працюю, безробітний(а)'){echo 'selected';}?>>Не працюю, безробітний(а)</option>
                            <option value="Не працюю, інвалідність"  <? if( $row['work']=='Не працюю, інвалідність'){echo 'selected';}?>>Не працюю, інвалідність</option>
                            <option value="Не працюю, відпустка по хворобі"  <? if( $row['work']=='Не працюю, відпустка по хворобі'){echo 'selected';}?>>Не працюю, відпустка по хворобі</option>
                            <option value="На пенсії"  <? if( $row['work']=='На пенсії'){echo 'selected';}?>>На пенсії</option>
                            <option value="Працюю, часткова зайнятість"  <? if( $row['work']=='Працюю, часткова зайнятість'){echo 'selected';}?>>Працюю, часткова зайнятість</option>
                            <option value="Працюю, повна зайнятість"  <? if( $row['work']=='Працюю, повна зайнятість'){echo 'selected';}?>>Працюю, повна зайнятість</option>
                        </select>
                        <?php
                        $b1='no';
                        foreach($hist as $key=>$item):
                            if($item['nameStol']=='work' and $b1=='no'){
                                $b1='yes';
                                ?>
                                <a id="b1" style='position: relative;' onclick="show1(this.id)"><i class="fas fa-clipboard-list"></i>
                                    <div id="m1" class="pop" onmouseout="hide1(this.id)" onmouseover="show2(this.id)">

                                                      <span style="font-size: 9px;font-weight: bold;"><?
                                                          echo $row['fname']." ".$row['name']." ".$row['sname'];?></span><br>

                                        <span class="n"> <? echo "Статус роботи";?>
                                            <?
                                            $u=1;
                                            echo "<table class='table table-bordered'>";
                                            foreach($hist as $key=>$item):

                                                if($item['nameStol']=='work'){
                                                    echo "<tr><td>{$u}</td><td> {$item['val']}</td><td> {$item['date_izm']}</td>";
                                                    $u++;
                                                }

                                            endforeach;
                                            echo "</table>";
                                            ?></span>
                                    </div>  </a>
                                <?php
                            }

                        endforeach;
                        ?>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Інформація про нарождення:<span class="red">*</span></label>

                    </td>
                    <td style="display: flex;">
                        <table><tr>
                                <td><input  style='position: static;' type="radio" <? if( $row['bearn']=='Народився(лась) вчасно'){echo 'checked';}?> name="bearn" class="form-control" value="Народився(лась) вчасно"></td>
                                <td><label>Народився(лась) вчасно</label></td></tr>
                            <tr><td><input  style='position: static;' type="radio" <? if( $row['bearn']=='Народився(лась) передчасно'){echo 'checked';}?> name="bearn" class="form-control" value="Народився(лась) передчасно"></td>
                                <td><label>Народився(лась) передчасно</label></td></tr>
                            <tr><td><input  style='position: static;' type="radio" name="bearn" class="form-control" <? if( $row['bearn']=='Народився в _____ тижнів (вказати)'){echo 'checked';}?> value="Народився в _____ тижнів (вказати)"></td>
                                <td><div style="display: flex;flex-direction: row;"><label>Народився в   </label> <input type="text" value="<? echo $row['week'];?>" style='width: 60px;margin-left: 4px;margin-right: 4px;' name="week" class="form-control"><label>   тижнів (вказати)</label></div></td></tr>
                            <tr><td><input   style='position: static;' type="radio" name="bearn" class="form-control" value="Не знаю" <? if( $row['bearn']=='Не знаю'){echo 'checked';}?> ></td><td><label>Не знаю</label></td></tr>
                        </table>
                        <?php
                        $b='no';
                        foreach($hist as $key=>$item):

                            if($item['nameStol']=='bearn' and $b=='no'){
                                $b='yes';
                                ?>
                                <a id="b2" style='position: relative;' onclick="show1(this.id)"><i class="fas fa-clipboard-list"></i>
                                    <div id="m2" class="pop" onmouseout="hide1(this.id)" onmouseover="show2(this.id)">

                                                      <span style="font-size: 9px;font-weight: bold;"><?
                                                          echo $row['fname']." ".$row['name']." ".$row['sname'];?></span><br>

                                        <span class="n"> <? echo "Інформація про нарождення:";?>
                                            <?
                                            $u=1;
                                            echo "<table class='table table-bordered'>";
                                            foreach($hist as $key=>$item):

                                                if($item['nameStol']=='bearn'){
                                                    echo "<tr><td>{$u}</td><td> {$item['val']}</td><td> {$item['date_izm']}</td>";
                                                    $u++;
                                                }

                                            endforeach;
                                            echo "</table>";
                                            ?></span>
                                    </div>  </a>
                                <?php
                            }

                        endforeach;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Вага при народженні:<span class="red">*</span></label>

                    </td>
                    <td>
                        <table><tr>
                                <td><input style='position: static;' type="radio" name="vesR" <? if( $row['vesR']=='Мала (при народженні я був(ла) дуже маленький(а))'){echo 'checked';}?> class="form-control" value="Мала (при народженні я був(ла) дуже маленький(а))"></td>
                                <td><label>Мала (при народженні я був(ла) дуже маленький(а))</label></td></tr>
                            <tr><td><input  style='position: static;' type="radio" <? if( $row['vesR']=='Нормальна'){echo 'checked';}?> name="vesR" class="form-control" value="Нормальна"></td>
                                <td><label>Нормальна</label></td></tr>
                            <tr><td><input  style='position: static;' type="radio" <? if( $row['vesR']=='Я був (була) при народженні великим малюком'){echo 'checked';}?> name="vesR" class="form-control" value="Я був (була) при народженні великим малюком"></td>
                                <td><label>Я був (була) при народженні великим малюком</label></td></tr>
                            <tr><td><input  style='position: static;' type="radio" <? if( $row['vesR']=='був одним з близнюків'){echo 'checked';}?> name="vesR" class="form-control" value="був одним з близнюків"></td>
                                <td><label>був одним з близнюків</label></td></tr>
                            <tr><td><input   style='position: static;' type="radio" name="vesR" <? if( $row['vesR']=='Не знаю'){echo 'checked';}?> class="form-control" value="Не знаю"></td><td><label>Не знаю</label></td></tr>
                        </table></td>
                </tr>
                <tr>
                    <td>
                        <label>Вага при народженні (г):</label>

                    </td>
                    <td>
                        <input type="text" name="vagaPN" value="<? echo $row['vagaPN'];?>" class="form-control" placeholder="" onkeypress="if(isNaN(this.value+String.fromCharCode(event.keyCode))){
                                                    document.getElementById('v').style.display='block'; return false;}"><label style="display: none;" id="v">dddddd</label>

                    </td>
                </tr>

            </table>
        </fieldset>

    </div>
    <div role="tabpanel" class="tab-pane" id="profile">
        <fieldset style="margin-top: 30px;">
            <h4>1.Б. Сімейний анамнез</h4>
            <table class='mainT' style="width: 80%">
                <tr style="background: #295b8e; color:white;">
                    <td colspan="2">
                        <label class="lb1">Батько:</label>
                    </td>
                </tr>
                <tr>
                    <td><label class="lb1">Прізвище</label></td>
                    <td style="width: 100%">
                        <input class="form-control" value="<? echo $row['fnameO'];?>" type="text" name="fnameO" placeholder="">
                    </td>
                </tr>
                <tr><td><label>Ім'я</label></td><td><input class="form-control" type="text" value="<? echo $row['nameO'];?>" name="nameO" placeholder=""></td></tr>
                <tr><td><label>По-батькові</label></td><td><input class="form-control" type="text" value="<? echo $row['snameO'];?>" name="snameO" placeholder=""></td>
                </tr>
                <tr>
                    <td>
                        <label>Чи брав участь Батько раніше в цьому дослідженні?</label>
                        <label class="hidd" id="h4">Якщо так, вкажіть ідентифікатор
                            батька <br> в минулому дослідженні
                            (№ учасника)</label>
                    </td>
                    <td>
                        <select name="ychasOtez" class="form-control" onchange="ss2(this)">
                            <option value="--" <? if( $row['ychasOtez']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['ychasOtez']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так" <? if( $row['ychasOtez']=='Так'){echo 'selected';}?>>Так</option>

                        </select>
                        <div style="display: flex;">
                            <input type="text" id="h5"
                                <?
                                if(empty($row['nomIssO'])){

                                    echo "style='display:none;'";
                                }
                                else{
                                    echo "value='{$row['nomIssO']}'";
                                    echo "style='display:block;'";
                                }
                                ?>

                                   class="form-control hidd" name="nomIssO" placeholder="">
                            <a href="#myModal2" class="btn btn-sm hidd" style='border:1px solid grey' id="h51" data-toggle="modal">...</a>
                        </div>
                        <div id="myModal2" class="modal fade">
                            <style>
                                #wd{
                                    width:1200px;
                                    margin: 0 auto;
                                }
                                #modalFind tr td{
                                    padding: 0;
                                }
                                #modalFind tr td .l{
                                    font-size: 11px;
                                }
                            </style>
                            <div class="modal-dialog2" id="wd">
                                <div class="modal-content">
                                    <div class="modal-header" style="display: flex; justify-content: space-around;">
                                        <h4 class="modal-title">Пошук анкети батька</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                                    </div>
                                    <div class="modal-body" >
                                        <!---------------------------------------------------------------------------->


                                        <form method="post" action="<?= Url::getAction('programm1', 'findR') ?>">
                                            <table id='modalFind' style="margin: 5px;">
                                                <tr>
                                                    <td><span class="l">Прізвище</span></td>
                                                    <td><input type="text" name="fname2" id="fname2" class="m1"></td>
                                                    <td><span class="l">Рік народження</span></td>
                                                    <td><input placeholder="" type="text" onchange="year(this.value)" id="year12" name="year12" class="m2"> - <input
                                                            placeholder="" type="text" id="year22" name="year22" class="m2"></td>
                                                    <td><span class="l">№ картки</span></td>
                                                    <td><input type="text" name="nom12" id="nom12" placeholder="" class="m2"> - <input
                                                            placeholder="" type="text" name="nom22" id="nom22" class="m2"></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="l">Ім`я</span></td>
                                                    <td><input type="text" name="name2" id="name2" class="m1"></td>
                                                    <td><span class="l">Стать</span></td>
                                                    <td><select name="sex2" class="m4" id="sex2">
                                                            <option value="--" >--</option>
                                                            <option value="Чоловіча">Чоловіча</option>
                                                            <option value="Жіноча">Жіноча</option>
                                                        </select></td>
                                                    <td><span class="l">Дата модифікації</span></td>
                                                    <td><input type="date" name="date_izm2" id="date_izm2" class="m4"></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="l">По батькові</span></td>
                                                    <td><input type="text" name="sname2" id="sname2" class="m1"></td>
                                                    <td><span class="l">Тип діабету</span></td>
                                                    <td><select name="typeDiab2" class="m4" id="typeDiab2">
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
                                                            <input type="checkbox" checked="checked" id="moi2" name="moi2" value="1">
                                                            <span class="checkmark"></span>
                                                        </label></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="l">Насел.пункт</span></td>
                                                    <td><input type="text" placeholder="" id="city2" name="city2" class="m1">
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

                                                    </td>
                                                    <td>
                                                        <button  onclick="rest()" class="btn btn-default log_button btn-mr"
                                                                 type="reset" title="Скинути пошук">
                                                            <i class="fas fa-times"></i>

                                                            Скинути пошук
                                                        </button>
                                                        <button _ngcontent-c8="" class="btn btn-default log_button btn-mr"
                                                                type="button" onclick="findModal2()">
                                                            <i class="fas fa-search"></i>
                                                            Знайти
                                                        </button>
                                                    </td>
                                                    <td colspan="4"></td>
                                                </tr>
                                            </table>


                                        </form>
                                        <div id="rezFind2">

                                        </div>

                                        <script>
                                            function findModal2() {
                                                var moi=document.getElementById('moi2').value;
                                                var fname=document.getElementById('fname2').value;
                                                var sname=document.getElementById('sname2').value;
                                                var name=document.getElementById('name2').value;
                                                var nom1=document.getElementById('nom12').value;
                                                var nom2=document.getElementById('nom22').value;
                                                var year1=document.getElementById('year12').value;
                                                var year2=document.getElementById('year22').value;
                                                var city=document.getElementById('city2').value;
                                                var sex=document.getElementById('sex2').value;

                                                var typeDiab=document.getElementById('typeDiab2').value;
                                                var date_izm=document.getElementById('date_izm2').value;
                                                $.ajax({
                                                    type: "POST",
                                                    url: "<?=Url::local('ajax9');?>",
                                                    data: {moi: moi,fname:fname, sname:sname, name:name,nom1:nom1,nom2:nom2,year1:year1,year2:year2,city:city,sex:sex,typeDiab:typeDiab,date_izm:date_izm},
                                                    success: function (data) {


                                                        $("#rezFind2").html(data)
                                                    }
                                                });
                                            }
                                            function save2(id) {
                                                var zn=id.slice(1);

                                                document.getElementById('h5').value=zn;
                                                document.getElementById('zakr2').click();
                                            }

                                        </script>


                                        <!------------------------------------------>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" id='zakr2' data-dismiss="modal">Закрити</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>

                    <td>
                        <label>Дата народження<span class="red">*</span></label></td><td>
                        <input type="date" name="datBOtez" value="<? echo $row['datBOtez'];?>" class="form-control">
                    </td>
                </tr><tr>
                    <td>
                        <label>Місце народження: область</label></td><td>
                        <input type="text" name="oblOtez" class="form-control" value="<? echo $row['oblOtez'];?>" placeholder="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Місце народження: місто</label></td><td>
                        <input type="text" name="cityOtez" class="form-control" value="<? echo $row['cityOtez'];?>" placeholder="">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Чи хворів на діабет?</label>
                        <label class="hidd1" id="h2">Якщо так - яке було лікування у батька?</label>
                    </td>
                    <td>
                        <select name="lechOtez" class="form-control" onchange="ss1(this)">
                            <option value="--" <? if( $row['lechOtez']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['lechOtez']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так" <? if( $row['lechOtez']=='Так'){echo 'selected';}?>>Так</option>

                        </select>
                        <select id="h3"  name="lechOtezKak"  class=" form-control hidd"
                            <?
                            if($row['lechOtez']=='Так'){

                                echo "style='display:block;'";
                            }

                            ?>

                        >
                            <option value="--" <? if( $row['lechOtezKak']=='--'){echo 'selected';}?>>--</option>
                            <option value="Дієта"<? if( $row['lechOtezKak']=='Дієта'){echo 'selected';}?>> Дієта</option>
                            <option value="Таблетки"<? if( $row['lechOtezKak']=='Таблетки'){echo 'selected';}?>> Таблетки</option>
                            <option value="Інсулін"<? if( $row['lechOtezKak']=='Інсулін'){echo 'selected';}?>> Інсулін</option>
                            <option value="Комбіноване - таблетки і інсулін"<? if( $row['lechOtezKak']=='Комбіноване - таблетки і інсулін'){echo 'selected';}?>> Комбіноване - таблетки і інсулін</option>
                            <option value="Не знаю"<? if( $row['lechOtezKak']=='Не знаю'){echo 'selected';}?>> Не знаю</option>
                        </select>
                    </td>
                </tr>
                <tr style="background: #295b8e;color:white;"><td colspan="2"><label>Мати:</label></td></tr>
                <tr>
                    <td><label>Прізвище</label></td><td><input class="form-control" value="<? echo $row['fnameM'];?>" type="text" name="fnameM" placeholder=""></td></tr>
                <tr><td><label>Ім'я</label></td><td><input class="form-control" type="text" value="<? echo $row['nameM'];?>" name="nameM" placeholder=""></td></tr>
                <tr><td><label>По-батькові</label></td><td><input class="form-control" type="text" name="snameM" value="<? echo $row['snameM'];?>" placeholder=""></td>
                </tr>
                <tr>
                    <td>
                        <label>Чи брала участь Мати раніше в цьому
                            дослідженні?</label>
                        <label class="hidd" id="h6">Якщо так, вкажіть ідентифікатор
                            матері <br> в минулому дослідженні
                            (№ учасника)</label>
                    </td>
                    <td>
                        <select name="ychasM" class="form-control" onchange="ss3(this)">
                            <option value="--" <? if( $row['ychasM']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['ychasM']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так" <? if( $row['ychasM']=='Так'){echo 'selected';}?>>Так</option>

                        </select>
                        <div style="display: flex;">
                            <input type="text" id="h7"
                                <?
                                if(empty($row['nomIssM'])){

                                    echo "style='display:none;'";
                                }
                                else{
                                    echo "value='{$row['nomIssM']}'";
                                    echo "style='display:block;'";
                                }
                                ?>

                                   class="form-control hidd" name="nomIssM" placeholder="">
                            <a href="#myModal3" class="btn btn-sm hidd" style='border:1px solid grey' id="h71" data-toggle="modal">...</a>
                        </div>
                        <div id="myModal3" class="modal fade">
                            <style>
                                #wd{
                                    width:1200px;
                                    margin: 0 auto;
                                }
                                #modalFind tr td{
                                    padding: 0;
                                }
                                #modalFind tr td .l{
                                    font-size: 11px;
                                }
                            </style>
                            <div class="modal-dialog3" id="wd">
                                <div class="modal-content">
                                    <div class="modal-header" style="display: flex; justify-content: space-around;">
                                        <h4 class="modal-title">Пошук анкети мами</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                                    </div>
                                    <div class="modal-body" >
                                        <!---------------------------------------------------------------------------->


                                        <form method="post" action="<?= Url::getAction('programm1', 'findR') ?>">
                                            <table id='modalFind' style="margin: 5px;">
                                                <tr>
                                                    <td><span class="l">Прізвище</span></td>
                                                    <td><input type="text" name="fname3" id="fname3" class="m1"></td>
                                                    <td><span class="l">Рік народження</span></td>
                                                    <td><input placeholder="" type="text" onchange="year(this.value)" id="year13" name="year13" class="m2"> - <input
                                                            placeholder="" type="text" id="year23" name="year23" class="m2"></td>
                                                    <td><span class="l">№ картки</span></td>
                                                    <td><input type="text" name="nom13" id="nom13" placeholder="165" class="m2"> - <input
                                                            placeholder="" type="text" name="nom23" id="nom23" class="m2"></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="l">Ім`я</span></td>
                                                    <td><input type="text" name="name3" id="name3" class="m1"></td>
                                                    <td><span class="l">Стать</span></td>
                                                    <td><select name="sex3" class="m4" id="sex3">
                                                            <option value="--" >--</option>
                                                            <option value="Чоловіча">Чоловіча</option>
                                                            <option value="Жіноча">Жіноча</option>
                                                        </select></td>
                                                    <td><span class="l">Дата модифікації</span></td>
                                                    <td><input type="date" name="date_izm3" id="date_izm3" class="m4"></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="l">По батькові</span></td>
                                                    <td><input type="text" name="sname3" id="sname3" class="m1"></td>
                                                    <td><span class="l">Тип діабету</span></td>
                                                    <td><select name="typeDiab3" class="m4" id="typeDiab3">
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
                                                            <input type="checkbox" checked="checked" id="moi3" name="moi3" value="1">
                                                            <span class="checkmark"></span>
                                                        </label></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="l">Насел.пункт</span></td>
                                                    <td><input type="text" placeholder="" id="city3" name="city3" class="m1">
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

                                                    </td>
                                                    <td>
                                                        <button  onclick="rest()" class="btn btn-default log_button btn-mr"
                                                                 type="reset" title="Скинути пошук">
                                                            <i class="fas fa-times"></i>

                                                            Скинути пошук
                                                        </button>
                                                        <button _ngcontent-c8="" class="btn btn-default log_button btn-mr"
                                                                type="button" onclick="findModal3()">
                                                            <i class="fas fa-search"></i>
                                                            Знайти
                                                        </button>
                                                    </td>
                                                    <td colspan="4"></td>
                                                </tr>
                                            </table>


                                        </form>
                                        <div id="rezFind3">

                                        </div>

                                        <script>
                                            function findModal3() {
                                                var moi=document.getElementById('moi3').value;
                                                var fname=document.getElementById('fname3').value;

                                                var sname=document.getElementById('sname3').value;
                                                var name=document.getElementById('name3').value;

                                                var nom1=document.getElementById('nom13').value;
                                                var nom2=document.getElementById('nom23').value;

                                                var year1=document.getElementById('year13').value;
                                                var year2=document.getElementById('year23').value;
                                                var city=document.getElementById('city3').value;
                                                var sex=document.getElementById('sex3').value;

                                                var typeDiab=document.getElementById('typeDiab3').value;
                                                var date_izm=document.getElementById('date_izm3').value;
                                                $.ajax({
                                                    type: "POST",
                                                    url: "<?=Url::local('ajax10');?>",
                                                    data: {moi: moi,fname:fname, sname:sname, name:name,nom1:nom1,nom2:nom2,year1:year1,year2:year2,city:city,sex:sex,typeDiab:typeDiab,date_izm:date_izm},
                                                    success: function (data) {


                                                        $("#rezFind3").html(data)
                                                    }
                                                });
                                            }
                                            function save3(id) {
                                                var zn=id.slice(1);

                                                document.getElementById('h7').value=zn;
                                                document.getElementById('zakr3').click();
                                            }

                                        </script>


                                        <!------------------------------------------>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" id='zakr3' data-dismiss="modal">Закрити</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>

                    <td>
                        <label>Дата народження</label></td><td>
                        <input type="date" name="datBM" value="<? echo $row['datBM'];?>" class="form-control">
                    </td>
                </tr><tr>
                    <td>
                        <label>Місце народження: область</label></td><td>
                        <input type="text" name="oblM" class="form-control" value="<? echo $row['oblM'];?>" placeholder="">
                    </td>
                </tr>
                <td>
                    <label>Місце народження: місто</label></td><td>
                    <input type="text" name="cityM" class="form-control" value="<? echo $row['cityM'];?>" placeholder="">
                </td>
                </tr>
                <tr>
                    <td>
                        <label>Чи хворіла на діабет?</label>
                        <label class="hidd1" id="h8">Якщо так - яке було лікування у матері?</label>
                    </td>
                    <td>
                        <select name="lechM" class="form-control" onchange="ss4(this)">
                            <option value="--" <? if( $row['lechM']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['lechM']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так" <? if( $row['lechM']=='Так'){echo 'selected';}?>>Так</option>

                        </select>
                        <select id="h9"  name="lechMKak"  class=" form-control hidd"

                            <?
                            if($row['lechM']=='Так'){

                                echo "style='display:block;'";
                            }

                            ?>
                        >
                            <option value="--" <? if( $row['lechMKak']=='--'){echo 'selected';}?>>--</option>
                            <option value="Дієта" <? if( $row['lechMKak']=='Дієта'){echo 'selected';}?>> Дієта</option>
                            <option value="Таблетки" <? if( $row['lechMKak']=='Таблетки'){echo 'selected';}?>> Таблетки</option>
                            <option value="Інсулін" <? if( $row['lechMKak']=='Інсулін'){echo 'selected';}?>> Інсулін</option>
                            <option value="Комбіноване - таблетки і інсулін" <? if( $row['lechMKak']=='Комбіноване - таблетки і інсулін'){echo 'selected';}?>> Комбіноване - таблетки і інсулін</option>
                            <option value="Не знаю" <? if( $row['lechMKak']=='Не знаю'){echo 'selected';}?>> Не знаю</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Чи хворіли на діабет рідні
                            брати сестри?</label>
                        <label class="hidd1" id="h10">Якщо так – яке було лікування у
                            братыв/сестер?</label>
                    </td>
                    <td>
                        <select name="lechBS" class="form-control" onchange="ss5(this)">
                            <option value="--" <? if( $row['lechBS']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['lechBS']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так" <? if( $row['lechBS']=='Так'){echo 'selected';}?>>Так</option>

                        </select>
                        <select id="h11"  name="lechBSKak"  class=" form-control hidd"
                            <?
                            if($row['lechBS']=='Так'){

                                echo "style='display:block;'";
                            }

                            ?>
                        >
                            <option value="--" <? if( $row['lechBSKak']=='--'){echo 'selected';}?>>--</option>
                            <option value="Дієта" <? if( $row['lechBSKak']=='Дієта'){echo 'selected';}?>> Дієта</option>
                            <option value="Таблетки" <? if( $row['lechBSKak']=='Таблетки'){echo 'selected';}?>> Таблетки</option>
                            <option value="Інсулін" <? if( $row['lechBSKak']=='Інсулін'){echo 'selected';}?>> Інсулін</option>
                            <option value="Комбіноване - таблетки і інсулін" <? if( $row['lechBSKak']=='Комбіноване - таблетки і інсулін'){echo 'selected';}?>> Комбіноване - таблетки і інсулін</option>
                            <option value="Не знаю" <? if( $row['lechBSKak']=='Не знаю'){echo 'selected';}?>> Не знаю</option>
                        </select>
                    </td>
                </tr>
            </table>
        </fieldset>
    </div>
    <div role="tabpanel" class="tab-pane" id="messages">
        <fieldset style="margin-top: 30px;">
            <h4>1.В. Інформація щодо голодомору</h4>
            <table class='mainT' style="width: 80%">
                <tr>
                    <td>
                        <label class="lb1">Голодувала ваша сім'я в 1932-33, 1941-45
                            і / або 1946-47 роках:<span class="red">*</span></label>
                        <!-- <label class="hidd" id="h12">Якщо сім`я голодувала - вказати період
                                                    голодування сім`ї
                                                </label>-->
                    </td>
                    <td style="width: 100%">
                        <select name="golodSem" class="form-control" onchange="ss6(this)">
                            <option value="--" <? if( $row['golodSem']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['golodSem']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так" <? if( $row['golodSem']=='Так'){echo 'selected';}?>>Так</option>
                            <option value="Не знаю" <? if( $row['golodSem']=='Не знаю'){echo 'selected';}?>>Не знаю</option>
                        </select>

                    </td>
                </tr>
                <tr <?if($row['golodSem']!='Так'){ echo "class='showGolod'";}?> id="mamGolod">
                    <td>
                        <label>Мати:</label></td><td>
                        <? $masM=explode(";",$row['golodM'])?>
                        <table <?if($row['golodSem']!='Так'){ echo "class='showGolod'";}?> id="tabGolodM"><tr><td><label> - 1932-33</label>
                                    <input type="checkbox" name="g1m" id="g1m" value="1932-33" class="form-control"
                                        <? foreach($masM as $int):
                                            if($int=='1932-33'){echo 'checked';}
                                        endforeach;?>>
                                </td></tr>
                            <tr><td><label> - 1941-45</label>
                                    <input type="checkbox" name="g2m" id="g2m" value="1941-45" class="form-control"
                                        <? foreach($masM as $int):
                                            if($int=='1941-45'){echo 'checked';}
                                        endforeach;?>>
                                </td></tr>
                            <tr><td><label> - 1946-47</label>
                                    <input type="checkbox" name="g3m" id="g3m" value="1946-47" class="form-control"
                                        <? foreach($masM as $int):
                                            if($int=='1946-47'){echo 'checked';}
                                        endforeach;?>>
                                </td></tr></table>

                    </td>
                </tr><tr <?if($row['golodSem']!='Так'){ echo "class='showGolod'";}?> id="papGolod">
                    <td>
                        <label>Батько:</label></td><td>
                        <? $masO=explode(";",$row['golodO'])?>
                        <table <?if($row['golodSem']!='Так'){ echo "class='showGolod'";}?> id="tabGolodO"><tr><td><label> - 1932-33</label>
                                    <input type="checkbox" name="g1o" id="g1o" value="1932-33" class="form-control"
                                        <? foreach($masO as $int):
                                            if($int=='1932-33'){echo 'checked';}
                                        endforeach;?>>
                                </td></tr>
                            <tr><td><label> - 1941-45</label>
                                    <input type="checkbox" name="g2o" id="g2o" value="1941-45" class="form-control"
                                        <? foreach($masO as $int):
                                            if($int=='1941-45'){echo 'checked';}
                                        endforeach;?>>
                                </td></tr>
                            <tr><td><label> - 1946-47</label>
                                    <input type="checkbox" name="g3o" id="g3o" value="1946-47" class="form-control"
                                        <? foreach($masO as $int):
                                            if($int=='1946-47'){echo 'checked';}
                                        endforeach;?>>
                                </td></tr></table>

                    </td>
                </tr>
                <tr <?if($row['golodSem']!='Так'){ echo "class='showGolod'";}?> id="bratGolod">
                    <td>
                        <label>Рідні брати/сестри:</label></td><td>
                        <? $masS=explode(";",$row['golodSister'])?>
                        <table <?if($row['golodSem']!='Так'){ echo "class='showGolod'";}?> id="tabGolodS"><tr><td><label> - 1932-33</label>
                                    <input type="checkbox" name="g1s" id="g1s" value="1932-33" class="form-control"
                                        <? foreach($masS as $int):
                                            if($int=='1932-33'){echo 'checked';}
                                        endforeach;?>>
                                </td></tr>
                            <tr><td><label> - 1941-45</label>
                                    <input type="checkbox" name="g2s" id="g2s" value="1941-45" class="form-control"
                                        <? foreach($masS as $int):
                                            if($int=='1941-45'){echo 'checked';}
                                        endforeach;?>>
                                </td></tr>
                            <tr><td><label> - 1946-47</label>
                                    <input type="checkbox" name="g3s" id="g3s" value="1946-47" class="form-control"
                                        <? foreach($masS as $int):
                                            if($int=='1946-47'){echo 'checked';}
                                        endforeach;?>>
                                </td></tr></table>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label>Чи помер хтось з членів сім’ї (мати / батько / рідні брати або сестри) з причин, пов`язаних з
                            голодом в 1932-33, 1941-45 і / або
                            1946-47 році:<span class="red">*</span></label></td>
                    <td>
                        <select name="death1" class="form-control">
                            <option value="--" <? if( $row['death1']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['death1']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так-1932-33" <? if( $row['death1']=='Так-1932-33'){echo 'selected';}?>>Так-1932-33</option>
                            <option value="Так-1941-45" <? if( $row['death1']=='Так-1941-45'){echo 'selected';}?>>Так-1941-45</option>
                            <option value="Так-1946-47" <? if( $row['death1']=='Так-1946-47'){echo 'selected';}?>>Так-1946-47</option>

                            <option value="Не знаю" <? if( $row['death1']=='Не знаю'){echo 'selected';}?>>Не знаю</option>
                        </select>
                    </td>
                </tr><tr>
                    <td>
                        <label>Чи голодували Ви особисто у періоди голоду в
                            1932-33, 1941-45 і / або 1946-47 роках голодомору. Якщо так - вказати
                            період:<span class="red">*</span></label></td><td>
                        <select name="death2" class="form-control">
                            <option value="--" <? if( $row['death2']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['death2']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так-1932-33" <? if( $row['death2']=='Так-1932-33'){echo 'selected';}?>>Так-1932-33</option>
                            <option value="Так-1941-45" <? if( $row['death2']=='Так-1941-45'){echo 'selected';}?>>Так-1941-45</option>
                            <option value="Так-1946-47" <? if( $row['death2']=='Так-1946-47'){echo 'selected';}?>>Так-1946-47</option>

                            <option value="Не знаю" <? if( $row['death2']=='Не знаю'){echo 'selected';}?>>Не знаю</option>
                        </select>
                    </td>

                </tr>
            </table>
        </fieldset>
    </div>
    <div role="tabpanel" class="tab-pane" id="settings">
        <fieldset style="margin-top: 30px;">
            <h4>2.А. Антропометричні дані</h4>
            <table class='mainT' style="width: 80%">
                <tr>
                    <td>

                        <label class="lb1">Вага (кг)</label>
                    </td>
                    <td style="width: 100%">
                        <div style="display: flex;"><input class="form-control" value="<? echo $row['ves'];?>" type="text" name="ves" placeholder="">
                            <?php
                            $b3='no';

                            foreach($hist as $key=>$item):

                                if($item['nameStol']=='ves' and $b3=='no'){
                                    $b3='yes';
                                    ?>
                                    <a id="b3" style='position: relative;' onclick="show1(this.id)"><i class="fas fa-clipboard-list"></i>
                                        <div id="m3" class="pop" onmouseout="hide1(this.id)" onmouseover="show2(this.id)">

                                                      <span style="font-size: 9px;font-weight: bold;"><?
                                                          echo $row['fname']." ".$row['name']." ".$row['sname'];?></span><br>

                                            <span class="n"> <? echo "Вага (кг):";?>
                                                <?
                                                $u=1;
                                                echo "<table class='table table-bordered'>";
                                                foreach($hist as $key=>$item):

                                                    if($item['nameStol']=='ves'){
                                                        echo "<tr><td>{$u}</td><td> {$item['val']}</td><td> {$item['date_izm']}</td>";
                                                        $u++;
                                                    }

                                                endforeach;
                                                echo "</table>";
                                                ?></span>
                                        </div>  </a>
                                    <?php
                                }

                            endforeach;
                            ?>
                        </div>

                    </td>
                </tr><tr>
                    <td><label>Зріст (см)</label></td><td><div style="display: flex;"><input class="form-control" value="<? echo $row['rost'];?>" type="text" name="rost" placeholder="">
                            <?php
                            $b4='no';

                            foreach($hist as $key=>$item):

                                if($item['nameStol']=='rost' and $b4=='no'){
                                    $b4='yes';
                                    ?>
                                    <a id="b4" style='position: relative;' onclick="show1(this.id)"><i class="fas fa-clipboard-list"></i>
                                        <div id="m4" class="pop" onmouseout="hide1(this.id)" onmouseover="show2(this.id)">

                                                      <span style="font-size: 9px;font-weight: bold;"><?
                                                          echo $row['fname']." ".$row['name']." ".$row['sname'];?></span><br>

                                            <span class="n"> <? echo "Зріст (см):";?>
                                                <?
                                                $u=1;
                                                echo "<table class='table table-bordered'>";
                                                foreach($hist as $key=>$item):

                                                    if($item['nameStol']=='rost'){
                                                        echo "<tr><td>{$u}</td><td> {$item['val']}</td><td> {$item['date_izm']}</td>";
                                                        $u++;
                                                    }

                                                endforeach;
                                                echo "</table>";
                                                ?></span>
                                        </div>  </a>
                                    <?php
                                }

                            endforeach;
                            ?>
                        </div>


                    </td>
                </tr><tr>
                    <td><label>Окружність талії (см)</label></td><td>
                        <div style="display: flex;"><input class="form-control" value="<? echo $row['tal'];?>" type="text" name="tal" placeholder="">
                            <?php
                            $b5='no';

                            foreach($hist as $key=>$item):

                                if($item['nameStol']=='tal' and $b5=='no'){
                                    $b5='yes';
                                    ?>
                                    <a id="b5" style='position: relative;' onclick="show1(this.id)"><i class="fas fa-clipboard-list"></i>
                                        <div id="m5" class="pop" onmouseout="hide1(this.id)" onmouseover="show2(this.id)">

                                                      <span style="font-size: 9px;font-weight: bold;"><?
                                                          echo $row['fname']." ".$row['name']." ".$row['sname'];?></span><br>

                                            <span class="n"> <? echo "Окружність талії (см):";?>
                                                <?
                                                $u=1;
                                                echo "<table class='table table-bordered'>";
                                                foreach($hist as $key=>$item):

                                                    if($item['nameStol']=='tal'){
                                                        echo "<tr><td>{$u}</td><td> {$item['val']}</td><td> {$item['date_izm']}</td>";
                                                        $u++;
                                                    }

                                                endforeach;
                                                echo "</table>";
                                                ?></span>
                                        </div>  </a>
                                    <?php
                                }

                            endforeach;
                            ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><label>Окружність стегон (см)</label></td><td>
                        <div style="display: flex;"><input class="form-control" value="<? echo $row['bed'];?>" type="text" name="bed" placeholder="">
                            <?php
                            $b6='no';

                            foreach($hist as $key=>$item):

                                if($item['nameStol']=='bed' and $b6=='no'){
                                    $b6='yes';
                                    ?>
                                    <a id="b6" style='position: relative;' onclick="show1(this.id)"><i class="fas fa-clipboard-list"></i>
                                        <div id="m6" class="pop" onmouseout="hide1(this.id)" onmouseover="show2(this.id)">

                                                      <span style="font-size: 9px;font-weight: bold;"><?
                                                          echo $row['fname']." ".$row['name']." ".$row['sname'];?></span><br>

                                            <span class="n"> <? echo "Окружність стегон (см):";?>
                                                <?
                                                $u=1;
                                                echo "<table class='table table-bordered'>";
                                                foreach($hist as $key=>$item):

                                                    if($item['nameStol']=='bed'){
                                                        echo "<tr><td>{$u}</td><td> {$item['val']}</td><td> {$item['date_izm']}</td>";
                                                        $u++;
                                                    }

                                                endforeach;
                                                echo "</table>";
                                                ?></span>
                                        </div>  </a>
                                    <?php
                                }

                            endforeach;
                            ?>
                        </div>


                    </td>
                </tr><tr>
                    <td><label>Індекс маси тіла (кг/м 2 )</label></td><td>

                        <div style="display: flex;"><input class="form-control" value="<? echo $row['index'];?>"type="text" name="index" >
                            <?php
                            $b7='no';

                            foreach($hist as $key=>$item):

                                if($item['nameStol']=='index' and $b7=='no'){
                                    $b7='yes';
                                    ?>
                                    <a id="b7" style='position: relative;' onclick="show1(this.id)"><i class="fas fa-clipboard-list"></i>
                                        <div id="m7" class="pop" onmouseout="hide1(this.id)" onmouseover="show2(this.id)">

                                                      <span style="font-size: 9px;font-weight: bold;"><?
                                                          echo $row['fname']." ".$row['name']." ".$row['sname'];?></span><br>

                                            <span class="n"> <? echo "Індекс маси тіла (кг/м 2 ):";?>
                                                <?
                                                $u=1;
                                                echo "<table class='table table-bordered'>";
                                                foreach($hist as $key=>$item):

                                                    if($item['nameStol']=='index'){
                                                        echo "<tr><td>{$u}</td><td> {$item['val']}</td><td> {$item['date_izm']}</td>";
                                                        $u++;
                                                    }

                                                endforeach;
                                                echo "</table>";
                                                ?></span>
                                        </div>  </a>
                                    <?php
                                }

                            endforeach;
                            ?>
                        </div>

                    </td>
                </tr><tr>
                    <td><label>Систолічний артеріальний тиск (сидячи) 0`</label></td><td>
                        <div style="display: flex;"><input type="text" name="art" class="form-control" value="<? echo $row['art'];?>">
                            <?php
                            $b71='no';

                            foreach($hist as $key=>$item):

                                if($item['nameStol']=='art' and $b71=='no'){
                                    $b71='yes';
                                    ?>
                                    <a id="b71" style='position: relative;' onclick="show1(this.id)"><i class="fas fa-clipboard-list"></i>
                                        <div id="m71" class="pop" onmouseout="hide1(this.id)" onmouseover="show2(this.id)">

                                                      <span style="font-size: 9px;font-weight: bold;"><?
                                                          echo $row['fname']." ".$row['name']." ".$row['sname'];?></span><br>

                                            <span class="n"> <? echo "Систолічний артеріальний тиск (сидячи) 0`";?>
                                                <?
                                                $u=1;
                                                echo "<table class='table table-bordered'>";
                                                foreach($hist as $key=>$item):

                                                    if($item['nameStol']=='art'){
                                                        echo "<tr><td>{$u}</td><td> {$item['val']}</td><td> {$item['date_izm']}</td>";
                                                        $u++;
                                                    }

                                                endforeach;
                                                echo "</table>";
                                                ?></span>
                                        </div>  </a>
                                    <?php
                                }

                            endforeach;
                            ?>
                        </div>

                    </td>
                </tr>
                <tr>
                    <td><label>Систолічний артеріальний тиск (сидячи) 10`</label></td><td>
                        <div style="display: flex;"><input type="text" name="systisk" class="form-control" value="<? echo $row['systisk'];?>">
                            <?php
                            $b72='no';

                            foreach($hist as $key=>$item):

                                if($item['nameStol']=='systisk' and $b72=='no'){
                                    $b72='yes';
                                    ?>
                                    <a id="b72" style='position: relative;' onclick="show1(this.id)"><i class="fas fa-clipboard-list"></i>
                                        <div id="m72" class="pop" onmouseout="hide1(this.id)" onmouseover="show2(this.id)">

                                                      <span style="font-size: 9px;font-weight: bold;"><?
                                                          echo $row['fname']." ".$row['name']." ".$row['sname'];?></span><br>

                                            <span class="n"> <? echo "Систолічний артеріальний тиск (сидячи) 10`";?>
                                                <?
                                                $u=1;
                                                echo "<table class='table table-bordered'>";
                                                foreach($hist as $key=>$item):

                                                    if($item['nameStol']=='systisk'){
                                                        echo "<tr><td>{$u}</td><td> {$item['val']}</td><td> {$item['date_izm']}</td>";
                                                        $u++;
                                                    }

                                                endforeach;
                                                echo "</table>";
                                                ?></span>
                                        </div>  </a>
                                    <?php
                                }

                            endforeach;
                            ?>
                        </div>
                    </td>
                </tr>


                <tr>

                    <td><label>Діастолічний артеріальний тиск (сидячи) 0`</label></td><td>
                        <div style="display: flex;"><input type="text" name="art1" class="form-control" value="<? echo $row['art1'];?>">
                            <?php
                            $b73='no';

                            foreach($hist as $key=>$item):

                                if($item['nameStol']=='art1' and $b73=='no'){
                                    $b73='yes';
                                    ?>
                                    <a id="b73" style='position: relative;' onclick="show1(this.id)"><i class="fas fa-clipboard-list"></i>
                                        <div id="m73" class="pop" onmouseout="hide1(this.id)" onmouseover="show2(this.id)">

                                                      <span style="font-size: 9px;font-weight: bold;"><?
                                                          echo $row['fname']." ".$row['name']." ".$row['sname'];?></span><br>

                                            <span class="n"> <? echo "Діастолічний артеріальний тиск (сидячи) 0`";?>
                                                <?
                                                $u=1;
                                                echo "<table class='table table-bordered'>";
                                                foreach($hist as $key=>$item):

                                                    if($item['nameStol']=='art1'){
                                                        echo "<tr><td>{$u}</td><td> {$item['val']}</td><td> {$item['date_izm']}</td>";
                                                        $u++;
                                                    }

                                                endforeach;
                                                echo "</table>";
                                                ?></span>
                                        </div>  </a>
                                    <?php
                                }

                            endforeach;
                            ?>
                        </div>
                    </td>

                </tr>
                <tr>

                    <td><label>Діастолічний артеріальний тиск (сидячи) 10`</label></td><td>
                        <div style="display: flex;"><input type="text" name="disttisk" class="form-control" value="<? echo $row['disttisk'];?>">
                            <?php
                            $b74='no';

                            foreach($hist as $key=>$item):

                                if($item['nameStol']=='disttisk' and $b74=='no'){
                                    $b74='yes';
                                    ?>
                                    <a id="b74" style='position: relative;' onclick="show1(this.id)"><i class="fas fa-clipboard-list"></i>
                                        <div id="m74" class="pop" onmouseout="hide1(this.id)" onmouseover="show2(this.id)">

                                                      <span style="font-size: 9px;font-weight: bold;"><?
                                                          echo $row['fname']." ".$row['name']." ".$row['sname'];?></span><br>

                                            <span class="n"> <? echo "Діастолічний артеріальний тиск (сидячи) 10`";?>
                                                <?
                                                $u=1;
                                                echo "<table class='table table-bordered'>";
                                                foreach($hist as $key=>$item):

                                                    if($item['nameStol']=='disttisk'){
                                                        echo "<tr><td>{$u}</td><td> {$item['val']}</td><td> {$item['date_izm']}</td>";
                                                        $u++;
                                                    }

                                                endforeach;
                                                echo "</table>";
                                                ?></span>
                                        </div>  </a>
                                    <?php
                                }

                            endforeach;
                            ?>
                        </div>
                    </td>

                </tr>
            </table>
        </fieldset>
    </div>
    <div role="tabpanel" class="tab-pane" id="zhitt">
        <fieldset style="margin-top: 30px;">
            <h4>2.Б. Спосіб життя</h4>
            <table class='mainT' style="width: 80%">

                <tr>
                    <td><label class="lb1">Ви палите?</label></td>
                    <td style="width: 100%">
                        <div style="display: flex;"><select class="form-control" name="smouk" onchange="showPal(this.value)">
                                <option value="--" <? if( $row['smouk']=='--'){echo 'selected';}?>>--</option>
                                <option value="Ні" <? if( $row['smouk']=='Ні'){echo 'selected';}?>>Ні</option>
                                <option value="Так" <? if( $row['smouk']=='Так'){echo 'selected';}?>>Так</option>
                            </select>
                            <?php
                            $b8='no';

                            foreach($hist as $key=>$item):

                                if($item['nameStol']=='smouk' and $b8=='no'){
                                    $b8='yes';
                                    ?>
                                    <a id="b6" style='position: relative;' onclick="show1(this.id)"><i class="fas fa-clipboard-list"></i>
                                        <div id="m6" class="pop" onmouseout="hide1(this.id)" onmouseover="show2(this.id)">

                                                      <span style="font-size: 9px;font-weight: bold;"><?
                                                          echo $row['fname']." ".$row['name']." ".$row['sname'];?></span><br>

                                            <span class="n"> <? echo "Ви палите?";?>
                                                <?
                                                $u=1;
                                                echo "<table class='table table-bordered'>";
                                                foreach($hist as $key=>$item):

                                                    if($item['nameStol']=='smouk'){
                                                        echo "<tr><td>{$u}</td><td> {$item['val']}</td><td> {$item['date_izm']}</td>";
                                                        $u++;
                                                    }

                                                endforeach;
                                                echo "</table>";
                                                ?></span>
                                        </div>  </a>
                                    <?php
                                }

                            endforeach;
                            ?>
                        </div>
                    </td>
                </tr><tr <? if($row['smouk']!='Так'){echo 'class="showPal"';}?> id="chastoPal" >
                    <td><label>Якщо курите, як часто?</label></td><td>
                        <select class="form-control" name="smoukTime"  id="smoukTime">
                            <option value="--" <? if( $row['smoukTime']=='--'){echo 'selected';}?>>--</option>
                            <option value="Кожен день" <? if( $row['smoukTime']=='Кожен день'){echo 'selected';}?>>Кожен день</option>
                            <option value="Кілька днів на тиждень" <? if( $row['smoukTime']=='Кілька днів на тиждень'){echo 'selected';}?>>Кілька днів на тиждень</option>
                            <option value="Дуже рідко" <? if( $row['smoukTime']=='Дуже рідко'){echo 'selected';}?>>Дуже рідко</option>
                        </select></td>
                </tr><tr <? if($row['smouk']!='Так'){echo 'class="showPal"';}?> id="kolPal">
                    <td><label>Кількість викурених сигарет за
                            1 день</label></td><td><input class="form-control" type="text" id="smoukkol" value="<? echo $row['smokeKol'];?>" name="smokeKol" placeholder=""></td>
                </tr>
                <tr>
                    <td>
                        <label>Як часто Ви вживаєте алкоголь?</label>

                    </td>
                    <td>
                        <select name="alkogol" class="form-control">
                            <option value="--" <? if( $row['alkogol']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ніколи" <? if( $row['alkogol']=='Ніколи'){echo 'selected';}?>>Ніколи</option>
                            <option value="Менше 1 разу на місяць" <? if( $row['alkogol']=='Менше 1 разу на місяць'){echo 'selected';}?>>Менше 1 разу на місяць</option>
                            <option value="1-3 раза в місяц" <? if( $row['alkogol']=='1-3 раза в місяц'){echo 'selected';}?>>1-3 раза в місяц</option>
                            <option value="1-2 раза в неділю" <? if( $row['alkogol']=='1-2 раза в неділю'){echo 'selected';}?>>1-2 раза в неділю</option>
                            <option value="3-4 раза в неділю" <? if( $row['alkogol']=='3-4 раза в неділю'){echo 'selected';}?>>3-4 раза в неділю</option>
                            <option value="Практично кожен день" <? if( $row['alkogol']=='Практично кожен день'){echo 'selected';}?>>Практично кожен день</option>

                        </select>

                    </td>
                </tr>
            </table>
        </fieldset>
    </div>
    <div role="tabpanel" class="tab-pane" id="hist">
        <fieldset style="margin-top: 30px;">
            <h4>2.В. Історія хвороби:</h4>
            <table class='mainT' style="width: 80%;">
                <tr>
                    <td>
                        <label class="lb1">Тип діабету:<span class="red">*</span></label>

                    </td>
                    <td style="width: 100%"><div style="display: flex">
                            <select name="typeDiab" class="form-control" onchange="showDiab(this.value)">
                                <option value="--" <? if( $row['typeDiab']=='--'){echo 'selected';}?>>--</option>
                                <option value="Не хворіє" <? if( $row['typeDiab']=='Не хворіє'){echo 'selected';}?>>Не хворіє</option>
                                <option value="ЦД 1 типу" <? if( $row['typeDiab']=='ЦД 1 типу'){echo 'selected';}?>>ЦД 1 типу</option>
                                <option value="ЦД 2 типу" <? if( $row['typeDiab']=='ЦД 2 типу'){echo 'selected';}?> >ЦД 2 типу</option>
                                <option value="Латентний аутоімунний (LADA)" <? if( $row['typeDiab']=='Латентний аутоімунний (LADA)'){echo 'selected';}?>>Латентний аутоімунний
                                    (LADA)</option>
                                <option value="MODY-діабет" <? if( $row['typeDiab']=='MODY-діабет'){echo 'selected';}?>>MODY-діабет</option>
                                <option value="Панкреатогенний" <? if( $row['typeDiab']=='Панкреатогенний'){echo 'selected';}?>>Панкреатогенний
                                </option>
                                <option value="Інший" <? if( $row['typeDiab']=='Інший'){echo 'selected';}?>>Інший
                                </option>
                            </select>
                            <?php
                            $b8='no';

                            foreach($hist as $key=>$item):

                                if($item['nameStol']=='typeDiab' and $b8=='no'){
                                    $b8='yes';
                                    ?>
                                    <a id="b8" style='position: relative;' onclick="show1(this.id)"><i class="fas fa-clipboard-list"></i>
                                        <div id="m8" class="pop" onmouseout="hide1(this.id)" onmouseover="show2(this.id)">

                                                      <span style="font-size: 9px;font-weight: bold;"><?
                                                          echo $row['fname']." ".$row['name']." ".$row['sname'];?></span><br>

                                            <span class="n"> <? echo "Тип діабету:";?>
                                                <?
                                                $u=1;
                                                echo "<table class='table table-bordered'>";
                                                foreach($hist as $key=>$item):

                                                    if($item['nameStol']=='typeDiab'){
                                                        echo "<tr><td>{$u}</td><td> {$item['val']}</td><td> {$item['date_izm']}</td>";
                                                        $u++;
                                                    }

                                                endforeach;
                                                echo "</table>";
                                                ?></span>
                                        </div>  </a>
                                    <?php
                                }

                            endforeach;
                            ?>
                        </div>
                    </td>
                </tr>
                <tr <? if($row['typeDiab']=='--' or $_POST['typeDiab']=='Не хворіє'){echo 'class="showDiabet"';}?> id="showDiabRik">
                    <td>
                        <label>Рік постановки діагнозу:<span class="red">*</span></label></td><td>
                        <input type="text" name="yearD" value="<? echo $row['yearD'];?>" class="form-control" id="yearD">
                    </td>
                </tr><tr <? if($row['typeDiab']=='--' or $_POST['typeDiab']=='Не хворіє'){echo 'class="showDiabet"';}?> id="showDiabVik">
                    <td>
                        <label>Вік дебюту діабету (років):<span class="red">*</span></label></td><td>
                        <div style="display: flex">
                            <input type="text" name="vekD" value="<? echo $row['vekD'];?>" class="form-control" id="vekD">
                            <?php
                            $b9='no';

                            foreach($hist as $key=>$item):

                                if($item['nameStol']=='vekD' and $b9=='no'){
                                    $b9='yes';
                                    ?>
                                    <a id="b9" style='position: relative;' onclick="show1(this.id)"><i class="fas fa-clipboard-list"></i>
                                        <div id="m9" class="pop" onmouseout="hide1(this.id)" onmouseover="show2(this.id)">

                                                      <span style="font-size: 9px;font-weight: bold;"><?
                                                          echo $row['fname']." ".$row['name']." ".$row['sname'];?></span><br>

                                            <span class="n"> <? echo "Вік дебюту діабету (років):";?>
                                                <?
                                                $u=1;
                                                echo "<table class='table table-bordered'>";
                                                foreach($hist as $key=>$item):

                                                    if($item['nameStol']=='vekD'){
                                                        echo "<tr><td>{$u}</td><td> {$item['val']}</td><td> {$item['date_izm']}</td>";
                                                        $u++;
                                                    }

                                                endforeach;
                                                echo "</table>";
                                                ?></span>
                                        </div>  </a>
                                    <?php
                                }

                            endforeach;
                            ?>
                        </div>
                    </td>
                </tr><tr <? if($row['typeDiab']=='--' or $_POST['typeDiab']=='Не хворіє'){echo 'class="showDiabet"';}?> id="showDiabkol">
                    <td>
                        <label>Тривалість діабету (років):<span class="red">*</span></label></td><td>
                        <input type="text" name="longD" value="<? echo $row['longD'];?>" class="form-control" id="longD">
                    </td>
                </tr>

            </table>
        </fieldset>
    </div>
    <div role="tabpanel" class="tab-pane" id="bol">
        <fieldset style="margin-top: 30px;">
            <h4>2.Г. Супутні захворювання:</h4>
            <table class='mainT' style="width: 80%">
                <tr>
                    <td >
                        <label class="lb1">Інфекційні:</label>

                    </td>
                    <td colspan="2" style="width: 100%">
                        <div style="display: flex">
                            <textarea name="inf" class="form-control"><? echo $row['inf'];?></textarea>
                            <?php
                            $b10='no';

                            foreach($hist as $key=>$item):

                                if($item['nameStol']=='inf' and $b10=='no'){
                                    $b10='yes';
                                    ?>
                                    <a id="b10" style='position: relative;' onclick="show1(this.id)"><i class="fas fa-clipboard-list"></i>
                                        <div id="m10" class="pop" onmouseout="hide1(this.id)" onmouseover="show2(this.id)">

                                                      <span style="font-size: 9px;font-weight: bold;"><?
                                                          echo $row['fname']." ".$row['name']." ".$row['sname'];?></span><br>

                                            <span class="n"> <? echo "Інфекційні:";?>
                                                <?
                                                $u=1;
                                                echo "<table class='table table-bordered'>";
                                                foreach($hist as $key=>$item):

                                                    if($item['nameStol']=='inf'){
                                                        echo "<tr><td>{$u}</td><td> {$item['val']}</td><td> {$item['date_izm']}</td>";
                                                        $u++;
                                                    }

                                                endforeach;
                                                echo "</table>";
                                                ?></span>
                                        </div>  </a>
                                    <?php
                                }

                            endforeach;
                            ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td >
                        <label>Аутоімунні (вказати):</label>

                    </td>
                    <td colspan="2">
                        <div style="display: flex">
                            <textarea name="aut" class="form-control"><? echo $row['aut'];?></textarea>
                            <?php
                            $b11='no';

                            foreach($hist as $key=>$item):

                                if($item['nameStol']=='aut' and $b11=='no'){
                                    $b11='yes';
                                    ?>
                                    <a id="b11" style='position: relative;' onclick="show1(this.id)"><i class="fas fa-clipboard-list"></i>
                                        <div id="m11" class="pop" onmouseout="hide1(this.id)" onmouseover="show2(this.id)">

                                                      <span style="font-size: 9px;font-weight: bold;"><?
                                                          echo $row['fname']." ".$row['name']." ".$row['sname'];?></span><br>

                                            <span class="n"> <? echo "Аутоімунні (вказати):";?>
                                                <?
                                                $u=1;
                                                echo "<table class='table table-bordered'>";
                                                foreach($hist as $key=>$item):

                                                    if($item['nameStol']=='aut'){
                                                        echo "<tr><td>{$u}</td><td> {$item['val']}</td><td> {$item['date_izm']}</td>";
                                                        $u++;
                                                    }

                                                endforeach;
                                                echo "</table>";
                                                ?></span>
                                        </div>  </a>
                                    <?php
                                }

                            endforeach;
                            ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td >
                        <label>Вроджені вади (вказати):</label>

                    </td>
                    <td colspan="2">
                        <div style="display: flex">
                            <textarea name="porok" class="form-control"><? echo $row['porok'];?></textarea>
                            <?php
                            $b12='no';

                            foreach($hist as $key=>$item):

                                if($item['nameStol']=='porok' and $b12=='no'){
                                    $b12='yes';
                                    ?>
                                    <a id="b12" style='position: relative;' onclick="show1(this.id)"><i class="fas fa-clipboard-list"></i>
                                        <div id="m12" class="pop" onmouseout="hide1(this.id)" onmouseover="show2(this.id)">

                                                      <span style="font-size: 9px;font-weight: bold;"><?
                                                          echo $row['fname']." ".$row['name']." ".$row['sname'];?></span><br>

                                            <span class="n"> <? echo "Вроджені вади (вказати):";?>
                                                <?
                                                $u=1;
                                                echo "<table class='table table-bordered'>";
                                                foreach($hist as $key=>$item):

                                                    if($item['nameStol']=='porok'){
                                                        echo "<tr><td>{$u}</td><td> {$item['val']}</td><td> {$item['date_izm']}</td>";
                                                        $u++;
                                                    }

                                                endforeach;
                                                echo "</table>";
                                                ?></span>
                                        </div>  </a>
                                    <?php
                                }

                            endforeach;
                            ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td >
                        <label>Інші ендокринні (вказати):</label>

                    </td>
                    <td colspan="2">
                        <div style="display: flex">
                            <textarea name="endoc" class="form-control"><? echo $row['endoc'];?></textarea>
                            <?php
                            $b12='no';

                            foreach($hist as $key=>$item):

                                if($item['nameStol']=='endoc' and $b12=='no'){
                                    $b12='yes';
                                    ?>
                                    <a id="b12" style='position: relative;' onclick="show1(this.id)"><i class="fas fa-clipboard-list"></i>
                                        <div id="m12" class="pop" onmouseout="hide1(this.id)" onmouseover="show2(this.id)">

                                                      <span style="font-size: 9px;font-weight: bold;"><?
                                                          echo $row['fname']." ".$row['name']." ".$row['sname'];?></span><br>

                                            <span class="n"> <? echo "Інші ендокринні (вказати):";?>
                                                <?
                                                $u=1;
                                                echo "<table class='table table-bordered'>";
                                                foreach($hist as $key=>$item):

                                                    if($item['nameStol']=='endoc'){
                                                        echo "<tr><td>{$u}</td><td> {$item['val']}</td><td> {$item['date_izm']}</td>";
                                                        $u++;
                                                    }

                                                endforeach;
                                                echo "</table>";
                                                ?></span>
                                        </div>  </a>
                                    <?php
                                }

                            endforeach;
                            ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td >
                        <label>Інша патологія (вказати):</label>

                    </td>
                    <td colspan="2">
                        <div style="display: flex";>
                            <textarea name="patol" class="form-control"><? echo $row['patol'];?></textarea>
                            <?php
                            $b13='no';

                            foreach($hist as $key=>$item):

                                if($item['nameStol']=='patol' and $b13=='no'){
                                    $b13='yes';
                                    ?>
                                    <a id="b13" style='position: relative;' onclick="show1(this.id)"><i class="fas fa-clipboard-list"></i>
                                        <div id="m13" class="pop" onmouseout="hide1(this.id)" onmouseover="show2(this.id)">

                                                      <span style="font-size: 9px;font-weight: bold;"><?
                                                          echo $row['fname']." ".$row['name']." ".$row['sname'];?></span><br>

                                            <span class="n"> <? echo "Інша патологія (вказати):";?>
                                                <?
                                                $u=1;
                                                echo "<table class='table table-bordered'>";
                                                foreach($hist as $key=>$item):

                                                    if($item['nameStol']=='patol'){
                                                        echo "<tr><td>{$u}</td><td> {$item['val']}</td><td> {$item['date_izm']}</td>";
                                                        $u++;
                                                    }

                                                endforeach;
                                                echo "</table>";
                                                ?></span>
                                        </div>  </a>
                                    <?php
                                }

                            endforeach;
                            ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td >
                        <label>Класифікація супутніх захворювань по DRG:</label>

                    </td>
                    <td colspan="2">
                        <input type="text" name="DGR" value="<? echo $row['DGR'];?>" class="form-control">

                    </td>
                </tr>
                <tr>
                    <td><label class="lb1">ЧИ хворієте Ви на онкологічні захворювання?</label></td><td>
                        <select name="Onko" class="form-control" onchange="onko(this.value)">
                            <option value="--" <? if( $row['Onko']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['Onko']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так" <? if( $row['Onko']=='Так'){echo 'selected';}?>>Так</option>

                        </select>
                    </td>
                </tr><tr <? if($row['Onko']!='Так'){echo 'class="onkoshow"';}?> id="vidOnkoz">
                    <td>
                        <label class="lb1">Вкажіть вид онкозахворювання</label></td><td>
                        <input type="text" name="VidOnko" id="vidOnko" value='<? echo $row['VidOnko'];?>' class="form-control">
                    </td>
                </tr><tr <? if($row['Onko']!='Так'){echo 'class="onkoshow"';}?> id="datOnko">
                    <td>
                        <label class="lb1">Дата постановки діагнозу
                            онкозахворювання</label></td><td>
                        <input type="date" id="dateOnko" name="dateOnko" value='<? echo $row['dateOnko'];?>' class="form-control">
                    </td>
                </tr>
                <tr <? if($row['Onko']!='Так'){echo 'class="onkoshow"';}?> id="likOnko">
                    <td><label class="lb1">Якщо так - лікування онкозахворювання
                            (Препарати - назва препаратів,
                            група)?</label>

                    </td>
                    <td>
                        <select name="OnkoLek" class="form-control" id="onkoLek">
                            <option value="--" <? if( $row['OnkoLek']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['OnkoLek']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Хіміотерапія" <? if( $row['OnkoLek']=='Хіміотерапія'){echo 'selected';}?>>Хіміотерапія</option>
                            <option value="Імунотерапія" <? if( $row['OnkoLek']=='Імунотерапія'){echo 'selected';}?>>Імунотерапія</option>
                            <option value="Гормональна терапія" <? if( $row['OnkoLek']=='Гормональна терапія'){echo 'selected';}?>>Гормональна терапія</option>
                            <option value="Комбінована (хіміо + тергетная терапія)" <? if( $row['OnkoLek']=='Комбінована (хіміо + тергетная терапія)'){echo 'selected';}?>>Комбінована (хіміо + тергетная терапія)</option>
                            <option value="Таргетная терапія" <? if( $row['OnkoLek']=='Таргетная терапія'){echo 'selected';}?>>Таргетная терапія</option>
                            <option value="Хірургічне" <? if( $row['OnkoLek']=='Хірургічне'){echo 'selected';}?>>Хірургічне</option>
                            <option value="Інші" <? if( $row['OnkoLek']=='Інші'){echo 'selected';}?>>Інші</option>
                        </select>
                    </td>

                </tr>
            </table>
        </fieldset>
    </div>
    <div role="tabpanel" class="tab-pane" id="ser">
        <fieldset style="margin-top: 30px;">
            <h4>3.А. Обстеження серцево-судинної системи</h4>
            <table class='mainT' style="width: 80%;">
                <tr>
                    <td>
                        <label class="lb1">Чи був у вас інфаркт?</label>
                    </td>
                    <td style="width: 100%">
                        <select name="infarkt" class="form-control" onchange="addIn(this.value)">
                            <option value="--" <? if( $row['infarkt']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['infarkt']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так" <? if( $row['infarkt']=='Так'){echo 'selected';}?>>Так</option>
                        </select>
                        <?php
                        if( $row['infarkt']=='Так'){
                        echo "<span id='ki' style='display: flex;flex-direction: column;'>
<label id='kolinfL'>Введіть кількість інфарктів</label>
<span id='ki2' style='display: flex;flex-direction: column;'>";

                        ?><select id='kolinf' name='kolinf' class='form-control' onchange='addPol(this.value)'>";?>
                            <option <? if($row['kolInf']==''){ echo 'selected';}?> ></option>
                            <option <? if($row['kolInf']=='1'){ echo 'selected';}?> >1</option>
                            <option <? if($row['kolInf']=='2'){ echo 'selected';}?> >2</option>
                            <option <? if($row['kolInf']=='3'){ echo 'selected';}?> >3</option>
                            <?
                            echo "</select>  </span>";
                            ?>


                            <br> <table id="ttt" width="450px">
                                <?
                                $inf=explode(';',$row['datInf']);

                                for($i=0;$i<$row['kolInf'];$i++){
                                    ?>
                                    <tr id="rowDat<?echo $i;?>"><td><label id="datInfL<?echo $i;?>">Інфаркт № <? echo $i+1;?>(рік)</label><input type="text" name="datInf[]" value='<? echo $inf[$i];?>' id="datInf<?echo $i;?>" class="form-control"></td></tr>

                                    <?
                                }
                                ?>
                            </table>
                    </td>


                    <?}
                    else{
                        ?>
                        <span id='ki' style='display: flex;flex-direction: column;'>
                                                        </span>
                        <span id="ki2" style="display: flex;"></span><br>
                        <table id="ttt" width="450px"><tbody></tbody></table>
                        <?
                    }
                    ?>


                </tr>
                <tr>
                    <td><label>Чи був у вас інсульт?</label></td><td>
                        <select name="insult" class="form-control" onchange="addIn1(this.value)">
                            <option value="--" <? if( $row['insult']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['insult']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так" <? if( $row['insult']=='Так'){echo 'selected';}?>>Так</option>
                        </select>

                        <?php
                        if( $row['insult']=='Так'){
                        echo "<span id='kiIns' style='display: flex;flex-direction: column;'>
<label id='kolinsL'>Введіть кількість інсультів</label>
<span id='kiIns2' style='display: flex;'>";?>
                        <select id='kolins' name='kolins' class='form-control' onchange='addPol1(this.value)'>";?>
                            <option <? if($row['kolIns']==''){ echo 'selected';}?> ></option>
                            <option <? if($row['kolIns']=='1'){ echo 'selected';}?> >1</option>
                            <option <? if($row['kolIns']=='2'){ echo 'selected';}?> >2</option>
                            <option <? if($row['kolIns']=='3'){ echo 'selected';}?> >3</option>
                            <?
                            echo "</select>       
                                                </span>";
                            ?>
                            <br> <table id="tttIns" width="450px">
                                <?
                                $inf=explode(';',$row['datIns']);

                                for($i=0;$i<$row['kolIns'];$i++){
                                    ?>
                                    <tr id="rowDatIns<?echo $i;?>"><td><label id="datInsL<?echo $i;?>">Інсульт № <? echo $i+1;?>(рік)</label>
                                            <input type="text" name="datIns[]" value='<? echo $inf[$i];?>' id="datIns<?echo $i;?>" class="form-control"></td></tr>

                                    <?
                                }
                                ?>
                            </table>
                    </td>

                    <? } else{
                        ?>
                        <span id='kiIns' style='display: flex;flex-direction: column;'>
                                                        </span>

                        <span id="kiIns2" style="display: flex;"></span><br>
                        <table id="tttIns" width="450px"><tbody></tbody></table>
                        <?
                    }
                    ?>
                    </td>
                </tr>
                <tr>
                    <td><label>Хронічна серцева
                            недостатність - вказати стадію</label>

                    </td>
                    <td style="width: 100%">
                        <select name="hronSerd" class="form-control" onchange="addStad(this.value)">
                            <option value="--" <? if( $row['hronSerd']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['hronSerd']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Стадія I" <? if( $row['hronSerd']=='Стадія I'){echo 'selected';}?>>Стадія I</option>
                            <option value="Стадія II, Період А (стадія IIа)" <? if( $row['hronSerd']=='Стадія II, Період А (стадія IIа)'){echo 'selected';}?>>Стадія II, Період А (стадія IIа)</option>
                            <option value="Стадія II, Період Б (стадія IIб)" <? if( $row['hronSerd']=='Стадія II, Період Б (стадія IIб)'){echo 'selected';}?>>Стадія II, Період Б (стадія IIб)</option>
                            <option value="Стадія III, Період А (стадія IIIа)" <? if( $row['hronSerd']=='Стадія III, Період А (стадія IIIа)'){echo 'selected';}?>>Стадія III, Період А (стадія IIIа)</option>
                            <option value="Стадія III, Період Б (стадія IIIб)" <? if( $row['hronSerd']=='Стадія III, Період Б (стадія IIIб)'){echo 'selected';}?>>Стадія III, Період Б (стадія IIIб)</option>
                        </select>

                        <?

                        if($row[0]['hronSerd']=='Ні') {
                            ?>
                            <span id="kiStad" style="display: flex;"></span>
                            <span id="kiStad2" style="display: flex; width: 100px;"></span>

                        <?}
                        elseif($row[0]['hronSerd']=='--'){?>
                            <span id="kiStad" style="display: flex;"></span>
                            <span id="kiStad2" style="display: flex; width: 100px;"></span>
                        <?   }
                        elseif($row[0]['hronSerd']==''){?>
                            <span id="kiStad" style="display: flex;"></span>
                            <span id="kiStad2" style="display: flex; width: 100px;"></span>
                        <?   }
                        elseif($row[0]['hronSerd']!='' or ($row[0]['hronSerd']!='--' or ($row[0]['hronSerd']!='Ні'))){
                            ?>
                            <span id="kiStad" style="display: flex;"><label id="datStadL">Дата постановки (рік)</label></span>
                            <span id="kiStad2" style="display: flex; width: 100px;"><input <input <?
                                if($statysA=='ВИКОНАНА'){
                                    echo "readonly, disabled";
                                }
                                ?> type="text" name="datStad" value='<? echo $row[0]['datStad'];?>' id="datStad" class="form-control" width="100px"></span>
                        <? }
                        else{
                            ?>
                            <span id="kiStad" style="display: flex;"><label id="datStadL">Дата постановки (рік)</label></span>
                            <span id="kiStad2" style="display: flex; width: 100px;"><input type="text" name="datStad" value='<? echo $row[0]['datStad'];?>' id="datStad" class="form-control" width="100px"></span>

                            <span id="kiStad" style="display: flex;"></span>
                            <span id="kiStad2" style="display: flex; width: 100px;"></span>
                            <?php
                        }
                        ?>

                    </td>
                </tr></table>

        </fieldset>
    </div>
    <div role="tabpanel" class="tab-pane" id="diab">
        <fieldset style="margin-top: 30px;">
            <h4>4.А. Обстеження очей</h4>
            <table class='mainT' style="width: 80%;">
                <tr>
                    <td>
                        <label class="lb1">Дата обстеження очного дна: дд-мм-рр</label>
                    </td>
                    <td style="width: 100%">
                        <input type="date" value='<? echo $row['glaz'];?>'class="form-control" name="glaz">
                    </td>

                </tr>
                <tr>
                    <td><label class="lb1">Діабетична ретинопатія?</label></td>
                    <td>
                        <select name="diabDiab" class="form-control" onchange="addDiab(this.value)">
                            <option value="--" <? if( $row['diabDiab']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['diabDiab']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так" <? if( $row['diabDiab']=='Так'){echo 'selected';}?>>Так</option>
                        </select>

                        <? if($row['diabDiab']=='Так') {
                            ?>

                            <span id="kiDiab"><label id="datDiabL">Дата постановки</label></span>

                            <span id="kiDiab2"><input type="date" name="datDiab" id="datDiab" value='<? echo $row['datDiab'];?>' class="form-control" width="100px"></span>

                            <?php
                        }else{
                            ?>
                            <span id="kiDiab"></span>

                            <span id="kiDiab2"></span>

                            <?
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><label class="lb1">Непроліферативна ретинопатія?</label></td><td>
                        <select name="diabNep" class="form-control" onchange="addNep(this.value)">
                            <option value="--" <? if( $row['diabNep']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['diabNep']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так - легкого ступеню" <? if( $row['diabNep']=='Так - легкого ступеню'){echo 'selected';}?>>Так - легкого ступеню</option>
                            <option value="Так - середнього ступеню" <? if( $row['diabNep']=='Так - середнього ступеню'){echo 'selected';}?>>Так - середнього ступеню</option>
                            <option value="Так - важкого ступеню" <? if( $row['diabNep']=='Так - важкого ступеню'){echo 'selected';}?>>Так - важкого ступеню</option>
                        </select>

                        <? if($row['diabNep']=='Так') {
                            ?>
                            <span id="kiNep"><label id="datNepL">Дата постановки</label></span>

                            <span id="kiNep2"><input type="date" name="datNep" value='<? echo $row['datNep'];?>' id="datNep" class="form-control" width="100px"></span>

                            <?php
                        }else{
                            ?>
                            <span id="kiNep"></span>

                            <span id="kiNep2"></span>

                            <?
                        }
                        ?>
                </tr>
                <tr>
                    <td><label class="lb1">Препроліферативна ретинопатія?</label></td><td>
                        <select name="diabPrep" class="form-control" onchange="addPrep(this.value)">
                            <option value="--" <? if( $row['diabPrep']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['diabPrep']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так" <? if( $row['diabPrep']=='Так'){echo 'selected';}?>>Так</option>
                        </select>

                        <? if($row['diabPrep']=='Так') {
                            ?>
                            <span id="kiPrep"><label id="datPrepL">Дата постановки</label></span>

                            <span id="kiPrep2"><input type="date" name="datPrep" value='<? echo $row['datPrep'];?>' id="datPrep" class="form-control" width="100px"></span>

                            <?php
                        }else{
                            ?>
                            <span id="kiPrep"></span>

                            <span id="kiPrep2"></span>

                            <?
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><label class="lb1">Проліферативна ретинопатія?</label></td><td>
                        <select name="diabPrep2" class="form-control" onchange="addPrep2(this.value)">
                            <option value="--" <? if( $row['diabPrep2']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['diabPrep2']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так - проліферативна діабетична ретинопатія з низьким ризиком" <? if( $row['diabPrep2']=='Так - проліферативна діабетична ретинопатія з низьким ризиком'){echo 'selected';}?>>Так - проліферативна діабетична ретинопатія з низьким ризиком</option>
                            <option value="Так - проліферативна діабетична ретинопатія з високим ризиком" <? if( $row['diabPrep2']=='Так - проліферативна діабетична ретинопатія з високим ризиком'){echo 'selected';}?>>Так - проліферативна діабетична ретинопатія з високим ризиком</option>
                        </select>

                        <? if($row['diabPrep2']=='Так') {
                            ?>
                            <span id="kiPrep12"><label id="datPrep2L">Дата постановки</label></span>

                            <span id="kiPrep22"><input type="date" name="datPrep2" value='<? echo $row['datPrep2'];?>' id="datPrep2" class="form-control" width="100px"></span>

                            <?php
                        }else{
                            ?>
                            <span id="kiPrep2"></span>

                            <span id="kiPrep22"></span>

                            <?
                        }
                        ?>
                </tr>
                <tr>
                    <td><label class="lb1">Сліпота?</label></td><td>
                        <select name="Slep" class="form-control" onchange="addSlep(this.value)">
                            <option value="--" <? if( $row['Slep']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['Slep']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так" <? if( $row['Так']=='Ні'){echo 'selected';}?>>Так</option>
                        </select>

                        <? if($row['Slep']=='Так') {
                            ?>
                            <span id="kiSlep"><label id="datSlepL">Дата постановки</label></span>

                            <span id="kiSlep2"><input type="date" name="datSlep" value='<? echo $row['datSlep'];?>' id="datSlep" class="form-control" width="100px"></span>

                            <?php
                        }else{
                            ?>
                            <span id="kiSlep"></span>

                            <span id="kiSlep2"></span>


                            <?
                        }
                        ?>
                </tr>
                <tr>
                    <td><label class="lb1">Лазерне лікування?</label></td><td>
                        <select name="Lazer" class="form-control" onchange="addLazer(this.value)">
                            <option value="--" <? if( $row['Lazer']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['Lazer']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так" <? if( $row['Lazer']=='Так'){echo 'selected';}?>>Так</option>
                        </select>

                        <? if($row['Lazer']=='Так') {
                            ?>
                            <span id="kiLazer"><label id="datLazerL">Дата постановки</label></span>

                            <span id="kiLazer2"><input type="date" name="datLazer" value='<? echo $row['datLazer'];?>' id="datLazer" class="form-control" width="100px"></span>

                            <?php
                        }else{
                            ?>
                            <span id="kiLazer"></span>

                            <span id="kiLazer2"></span>

                            <?
                        }
                        ?>
                    </td>
                </tr>
                <tr>
                    <td><label class="lb1">Катаракта?</label></td><td>
                        <select name="Katar" class="form-control" onchange="addKatar(this.value)">
                            <option value="--" <? if( $row['Katar']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['Katar']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так" <? if( $row['Katar']=='Так'){echo 'selected';}?>>Так</option>
                        </select>

                        <? if($row['Katar']=='Так') {
                            ?>
                            <span id="kiKatar"><label id="datKatarL">Дата постановки</label></span>

                            <span id="kiKatar2"><input type="date" name="datKatar" value='<? echo $row['datKatar'];?>' id="datKatar" class="form-control" width="100px"></span>

                            <?php
                        }else{
                            ?>
                            <span id="kiKatar"></span>

                            <span id="kiKatar2"></span>

                            <?
                        }
                        ?>
                </tr>
                <tr>
                    <td><label class="lb1">Макулопатія?</label></td><td>
                        <select name="Mal" class="form-control" onchange="addMal(this.value)">
                            <option value="--" <? if( $row['Mal']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['Mal']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так" <? if( $row['Mal']=='Так'){echo 'selected';}?>>Так</option>
                        </select>

                        <? if($row['Mal']=='Так') {
                            ?>
                            <span id="kiMal"><label id="datMalL">Дата постановки</label></span>

                            <span id="kiMal2"><input type="date" name="datMal" value='<? echo $row['datMal'];?>' id="datMal" class="form-control" width="100px"></span>

                            <?php
                        }else{
                            ?>
                            <span id="kiMal"></span>

                            <span id="kiMal2"></span>

                            <?
                        }
                        ?>

                </tr>
                <tr>
                    <td><label class="lb1">Глаукома?</label></td><td>
                        <select name="Glauk" class="form-control" onchange="addGlauk(this.value)">
                            <option value="--" <? if( $row['Glauk']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['Glauk']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так" <? if( $row['Glauk']=='Так'){echo 'selected';}?>>Так</option>
                        </select>

                        <? if($row['Glauk']=='Так') {
                            ?>
                            <span id="kiGlauk"><label id="datGlaukL">Дата постановки</label></span>

                            <span id="kiGlauk2"><input type="date" value='<? echo $row['datGlauk'];?>' name="datGlauk" id="datGlauk" class="form-control" width="100px"></span>

                            <?php
                        }else{
                            ?>
                            <span id="kiGlauk"></span>

                            <span id="kiGlauk2"></span>

                            <?
                        }
                        ?>


                </tr>
                <tr>
                    <td><label class="lb1">На сьогодні лікування ДР:</label></td><td>
                        <select name="LechDR" class="form-control">
                            <option value="--" <? if( $row['LechDR']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['LechDR']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Кортикостероїди (триамцинолон)" <? if( $row['LechDR']=='Кортикостероїди (триамцинолон)'){echo 'selected';}?>>Кортикостероїди (триамцинолон)</option>
                            <option value="Хірургічні втручання" <? if( $row['LechDR']=='Хірургічні втручання'){echo 'selected';}?>>Хірургічні втручання</option>
                            <option value="Інгібітори VEGF" <? if( $row['LechDR']=='Інгібітори VEGF'){echo 'selected';}?>>Інгібітори VEGF</option>
                            <option value="Ін'єкції гіалуронідази" <? if( $row['LechDR']=='Ін`єкції гіалуронідази'){echo 'selected';}?>>Ін'єкції гіалуронідази</option>
                            <option value="Лазерна фотокоагуляція" <? if( $row['LechDR']=='Лазерна фотокоагуляція'){echo 'selected';}?>>Лазерна фотокоагуляція</option>
                            <option value="Інше" <? if( $row['Інше']=='Ні'){echo 'selected';}?>>Інше</option>
                        </select>
                    </td>
                </tr><tr><td>
                        <label>Дані OCT:</label>
                    </td><td>

                        <input type="file" value='<? echo $row['OST'];?>' style='background: transparent;' name="OST" class="form-control">
                    </td>
                </tr>
            </table>
        </fieldset>
    </div>
    <div role="tabpanel" class="tab-pane" id="nefr">
        <fieldset style="margin-top: 30px;">
            <h4>5.А. Обстеження нирок</h4>
            <table class='mainT' style="width: 80%;">
                <tr>
                    <td>
                        <label class="lb1">Дата обстеження нирок:: дд-мм-рр</label>

                    </td>
                    <td style="width: 100%;"><input type="date" value='<? echo $row['pochki'];?>' class="form-control" name="pochki"></td>

                </tr>
                <tr>
                    <td><label class="lb1">Діабетична нефропатія?</label></td><td>
                        <select name="diabNefro" class="form-control" onchange="addNefro(this.value)">
                            <option value="--" <? if( $row['diabNefro']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['diabNefro']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так" <? if( $row['diabNefro']=='Так'){echo 'selected';}?>>Так</option>
                        </select>

                        <? if($row['diabNefro']=='Так') {
                            ?>
                            <span id="kiNefro"><label id="datNefroL">Дата постановки</label></span>

                            <span id="kiNefro2"><input type="date" name="datNefro" value='<? echo $row['datNefro'];?>' id="datNefro" class="form-control" width="100px"></span>

                            <?php
                        }else{
                            ?>
                            <span id="kiNefro"></span>

                            <span id="kiNefro2"></span>

                            <?
                        }
                        ?>

                </tr>
                <tr>
                    <td><label class="lb1">Хронічна ниркова недостатність?</label></td><td>
                        <select name="diabPochNEd" class="form-control" onchange="addPochNEd(this.value)">
                            <option value="--" <? if( $row['diabPochNEd']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['diabPochNEd']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так" <? if( $row['diabPochNEd']=='Так'){echo 'selected';}?>>Так</option>
                        </select>

                        <? if($row['diabPochNEd']=='Так') {
                            ?>
                            <span id="kiPochNEd"><label id="datPochNEdL">Дата постановки</label></span>

                            <span id="kiPochNEd2"><input type="date" value='<? echo $row['datPochNEd'];?>' name="datPochNEd" id="datPochNEd" class="form-control" width="100px"></span>

                            <?php
                        }else{
                            ?>
                            <span id="kiPochNEd"></span>

                            <span id="kiPochNEd2"></span>

                            <?
                        }
                        ?>



                </tr>
                <tr>
                    <td><label class="lb1">Хронічна ниркова недостатність - це заключна стадія?</label></td><td>
                        <select name="diabPochSt" class="form-control" onchange="addPochSt(this.value)">
                            <option value="--" <? if( $row['diabPochSt']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['diabPochSt']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так" <? if( $row['diabPochSt']=='Так'){echo 'selected';}?>>Так</option>
                        </select>

                        <? if($row['diabPochSt']=='Так') {
                            ?>
                            <span id="kiPochSt"><label id="datPochStL">Дата постановки</label></span>
                            <span id="kiPochSt2"><input type="date" name="datPochSt" value='<? echo $row['datPochSt'];?>' id="datPochSt" class="form-control" width="100px"></span>

                            <?php
                        }else{
                            ?>
                            <span id="kiPochSt"></span>

                            <span id="kiPochSt2"></span>

                            <?
                        }
                        ?>

                </tr>
                <tr>
                    <td><label class="lb1">Діаліз?</label></td><td>
                        <select name="diabDializ" class="form-control" onchange="addDializ(this.value)">
                            <option value="--" <? if( $row['diabDializ']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['diabDializ']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так" <? if( $row['diabDializ']=='Так'){echo 'selected';}?>>Так</option>
                        </select>

                        <? if($row['diabDializ']=='Так') {
                            ?>
                            <span id="kiDializ"><label id="datDializL">Дата постановки</label></span>

                            <span id="kiDializ2"><input type="date" value='<? echo $row['datDializ'];?>' name="datDializ" id="datDializ" class="form-control" width="100px"></span>

                            <?php
                        }else{
                            ?>
                            <span id="kiDializ"></span>

                            <span id="kiDializ2"></span>

                            <?
                        }
                        ?>



                </tr>

                <tr>
                    <td><label class="lb1">Поточні методи лікування:
                            ліки (назви та група):</label>

                    </td>
                    <td>
                        <select name="LechPoch" class="form-control">
                            <option value="--" <? if( $row['LechPoch']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['LechPoch']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Інгібітори АПФ" <? if( $row['LechPoch']=='Інгібітори АПФ'){echo 'selected';}?>>Інгібітори АПФ</option>
                            <option value="Прямі інгібітори реніну" <? if( $row['LechPoch']=='Прямі інгібітори реніну'){echo 'selected';}?>>Прямі інгібітори реніну</option>
                            <option value="Діуретики" <? if( $row['LechPoch']=='Діуретики'){echo 'selected';}?>>Діуретики</option>
                            <option value="Блокатори Са-каналів" <? if( $row['LechPoch']=='Блокатори Са-каналів'){echo 'selected';}?>>Блокатори Са-каналів</option>
                            <option value="Бета-адреноблокатори" <? if( $row['LechPoch']=='Бета-адреноблокатори'){echo 'selected';}?>>Бета-адреноблокатори</option>
                            <option value="Препарати заліза" <? if( $row['LechPoch']=='Препарати заліза'){echo 'selected';}?>>Препарати заліза</option>
                            <option value="Інше" <? if( $row['LechPoch']=='Інше'){echo 'selected';}?>>Інше</option>
                        </select>
                    </td>

                </tr>
            </table>
        </fieldset>
    </div>
    <div role="tabpanel" class="tab-pane" id="pol">
        <fieldset style="margin-top: 30px;">
            <h4>6.А.Полінейроангіопатія</h4>
            <table class='mainT' style="width: 80%;">
                <tr>
                    <td ><label class="lb1">Дата обстеження: дд-мм-рр</label>

                    </td>
                    <td style="width: 100%;"><input type="date" value='<? echo $row['datPoli'];?>' class="form-control" name="datPoli"></td>

                </tr>
                <tr>
                    <td ><label class="lb1">Ангіопатія нижніх кінцівок?</label></td><td>
                        <select name="diabAngin" class="form-control" onchange="addAngin(this.value)">
                            <option value="--" <? if( $row['diabAngin']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['diabAngin']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так" <? if( $row['diabAngin']=='Так'){echo 'selected';}?>>Так</option>
                        </select>

                        <? if($row['diabAngin']=='Так') {
                            ?>
                            <span id="kiAngin"><label id="datAnginL">Дата постановки</label></span>

                            <span id="kiAngin2"><input type="date" name="datAngin" value='<? echo $row['datAngin'];?>' id="datAngin" class="form-control" width="100px"></span>
                            <span id="kiAngin3"><label id="kakAng">Яка ангіопатія?</label></span>


                            <span id="kiAngin4"><select id="kakAngio" name="kakAngio" class="form-control">
                                                           <option value="--" <? if( $row['kakAngio']=='--'){echo 'selected';}?>>--</option>
                                                            <option value="пальців стоп" <? if( $row['kakAngio']=='пальців стоп'){echo 'selected';}?>>пальців стоп</option>
                                                            <option value="вище стопи до коліна" <? if( $row['kakAngio']=='вище стопи до коліна'){echo 'selected';}?>>вище стопи до коліна</option>
                                                            <option value="вище коліна" <? if( $row['kakAngio']=='вище коліна'){echo 'selected';}?>>вище коліна</option>
                                                        </select></span>

                            <?php
                        }else{
                            ?>
                            <span id="kiAngin"></span>
                            <span id="kiAngin2"></span>
                            <span id="kiAngin3"></span>

                            <span id="kiAngin4"></span>

                            <?
                        }
                        ?>


                </tr>
                <tr>
                    <td ><label class="lb1">Периферична нейропатія?</label></td><td>
                        <select name="diabNejr" class="form-control" onchange="addNejr(this.value)">
                            <option value="--" <? if( $row['diabNejr']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['diabNejr']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так" <? if( $row['diabNejr']=='Так'){echo 'selected';}?>>Так</option>
                        </select>

                        <? if($row['diabNejr']=='Так') {
                            ?>
                            <span id="kiNejr"><label id="datNejrL">Дата постановки</label></span>

                            <span id="kiNejr2"><input type="date" value='<? echo $row['datNejr'];?>' name="datNejr" id="datNejr" class="form-control" width="100px"></span>


                            <?php
                        }else{
                            ?>
                            <span id="kiNejr"></span>

                            <span id="kiNejr2"></span>


                            <?
                        }
                        ?>

                    </td>
                </tr>
                <tr>
                    <td ><label class="lb1">Чи бувають незвичайні відчуття в стопах?</label></td><td>
                        <select name="diabStopp" class="form-control" >
                            <option value="--" <? if( $row['diabStopp']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні, все нормально" <? if( $row['diabStopp']=='Ні, все нормально'){echo 'selected';}?>>Ні, все нормально</option>
                            <option value="Оніміння" <? if( $row['diabStopp']=='Оніміння'){echo 'selected';}?>>Оніміння</option>
                            <option value="Поколювання" <? if( $row['diabStopp']=='Поколювання'){echo 'selected';}?>>Поколювання</option>
                            <option value="Мурашки" <? if( $row['diabStopp']=='Мурашки'){echo 'selected';}?>>Мурашки</option>
                            <option value="Печіння" <? if( $row['diabStopp']=='Печіння'){echo 'selected';}?>>Печіння</option>
                            <option value="Підвищено чутливість" <? if( $row['diabStopp']=='Підвищено чутливість'){echo 'selected';}?>>Підвищено чутливість</option>
                            <option value="Знижено чутливості" <? if( $row['diabStopp']=='Знижено чутливості'){echo 'selected';}?>>Знижено чутливості</option>
                            <option value="Складнощі при русі" <? if( $row['diabStopp']=='Складнощі при русі'){echo 'selected';}?>>Складнощі при русі</option>
                        </select>
                    </td>
                </tr><tr>
                    <td><label class="lb1">Чи є біль в обох ногах?</label></td><td>
                        <select name="Bol" class="form-control" onchange="bolNoga(this.value)">
                            <option value="--" <? if( $row['Bol']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні, болю немає" <? if( $row['Bol']=='Ні, болю немає'){echo 'selected';}?>>Ні, болю немає</option>
                            <option value="Ні, біль з одного боку" <? if( $row['Bol']=='Ні, біль з одного боку'){echo 'selected';}?>>Ні, біль з одного боку</option>
                            <option value="Так" <? if( $row['Bol']=='Так'){echo 'selected';}?>>Так</option>
                        </select>
                    </td>
                </tr><tr <? if($row['Bol']!='Так'){echo 'class="showNoga"';}?> id="bolStopa" >
                    <td>
                        <label class="lb1">Якщо біль в обох стопах, як вона
                            проявляється?</label></td><td>
                        <select name="Boltwo" class="form-control" id="Boltwo">
                            <option value="--" <? if( $row['Boltwo']=='--'){echo 'selected';}?>>--</option>
                            <option value="Спонтанна" <? if( $row['Boltwo']=='Спонтанна'){echo 'selected';}?>>Спонтанна</option>
                            <option value="Постійна" <? if( $row['Boltwo']=='Постійна'){echo 'selected';}?>>Постійна</option>

                        </select>

                    </td>
                </tr>
                <tr <? if($row['Bol']!='Так'){echo 'class="showNoga"';}?> id="bolIntens">
                    <td ><label class="lb1">Яка інтенсивність болю (шкала від 1 до 5)?</label></td><td>
                        <select name="BolInten" class="form-control" id="BolInten">
                            <option value="--" <? if( $row['BolInten']=='--'){echo 'selected';}?>>--</option>
                            <option value="1" <? if( $row['BolInten']=='1'){echo 'selected';}?>>1</option>
                            <option value="2" <? if( $row['BolInten']=='2'){echo 'selected';}?>>2</option>
                            <option value="3" <? if( $row['BolInten']=='3'){echo 'selected';}?>>3</option>
                            <option value="4" <? if( $row['BolInten']=='4'){echo 'selected';}?>>4</option>
                            <option value="5" <? if( $row['BolInten']=='5'){echo 'selected';}?>>5</option>

                        </select>
                    </td>
                </tr><tr <? if($row['Bol']!='Так'){echo 'class="showNoga"';}?> id="bolProjav">
                    <td><label class="lb1">Як проявляється біль?</label></td><td>
                        <select name="Bolkak" class="form-control" id="Bolkak">
                            <option value="--" <? if( $row['Bolkak']=='--'){echo 'selected';}?>>--</option>
                            <option value="Печіння" <? if( $row['Bolkak']=='Печіння'){echo 'selected';}?>>Печіння</option>
                            <option value="Викручування" <? if( $row['Bolkak']=='Викручування'){echo 'selected';}?>>Викручування</option>
                            <option value="Здавлення" <? if( $row['Bolkak']=='Здавлення'){echo 'selected';}?>>Здавлення</option>
                            <option value="Гостра стріляючий біль" <? if( $row['Bolkak']=='Гостра стріляючий біль'){echo 'selected';}?>>Гостра стріляючий біль</option>
                            <option value="Пронизуючий біль (як голки)" <? if( $row['Bolkak']=='Пронизуючий біль (як голки)'){echo 'selected';}?>>Пронизуючий біль (як голки)</option>
                        </select>
                    </td>
                </tr><tr>
                    <td>
                        <label class="lb1">Прийом препаратів?</label></td><td>
                        <select name="Preparat" class="form-control" onchange="preparat(this.value)" >
                            <option value="--" <? if( $row['Preparat']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['Preparat']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так" <? if( $row['Preparat']=='Так'){echo 'selected';}?>>Так</option>

                        </select>

                    </td>
                </tr>
                <tr <? if($row['Preparat']!='Так'){echo 'class="showPrep"';}?> id="whatPrep">
                    <td ><label class="lb1">Якщо так, розписати які препарати?</label></td><td>
                        <select name="PreparatKakie" class="form-control"  id="PreparatKakie">
                            <option value="--" <? if( $row['PreparatKakie']=='--'){echo 'selected';}?>>--</option>
                            <option value="Антиконвульсанти (прегабалін, габапентин)" <? if( $row['PreparatKakie']=='Антиконвульсанти (прегабалін, габапентин)'){echo 'selected';}?>>Антиконвульсанти (прегабалін, габапентин)</option>
                            <option value="Антидепресанти (Дулоксетин - інгібітори зворотного захоплення серотоніну. НА)" <? if( $row['PreparatKakie']=='Антидепресанти (Дулоксетин - інгібітори зворотного захоплення серотоніну. НА)'){echo 'selected';}?>>
                                Антидепресанти (Дулоксетин - інгібітори зворотного захоплення серотоніну. НА)</option>
                            <option value="Трициклічніантидепресанти (амітриптилін)" <? if( $row['PreparatKakie']=='Трициклічніантидепресанти (амітриптилін)'){echo 'selected';}?>>Трициклічніантидепресанти (амітриптилін)</option>
                            <option value="Опіоіди" <? if( $row['PreparatKakie']=='Опіоіди'){echo 'selected';}?>>Опіоіди</option>
                            <option value="Вітаміни групи В" <? if( $row['PreparatKakie']=='Вітаміни групи В'){echo 'selected';}?>>Вітаміни групи В</option>
                            <option value="Аналгетики" <? if( $row['PreparatKakie']=='Аналгетики'){echo 'selected';}?>>Аналгетики</option>
                            <option value="НПЗП" <? if( $row['PreparatKakie']=='НПЗП'){echo 'selected';}?>>НПЗП</option>
                            <option value="Інше" <? if( $row['PreparatKakie']=='Інше'){echo 'selected';}?>>Інше</option>
                        </select>
                    </td>

                </tr>
            </table>
        </fieldset>
    </div>
    <div role="tabpanel" class="tab-pane" id="stop">
        <fieldset style="margin-top: 30px;">
            <h4>6.Б.Обстеження стопи</label>
                <div id="tab-content10"</h4>
            <table class='mainT' style="width: 80%;">
                <tr>
                    <td ><label class="lb1">Дата обстеження стопи: дд-мм-рр?</label></td>
                    <td style="width: 100%">
                        <input type="date" name="datStopObsl" value='<? echo $row['datStopObsl'];?>' class="form-control">
                    </td>
                </tr><tr>
                    <td>
                        <label>Зниження температури?</label></td><td>
                        <select name="SnizhT" class="form-control">
                            <option value="--" <? if( $row['SnizhT']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['SnizhT']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так" <? if( $row['SnizhT']=='Так'){echo 'selected';}?>>Так</option>
                        </select>
                    </td>
                </tr><tr>
                    <td>
                        <label>Порушення тактильної чутливості?</label></td><td>
                        <select name="Chyvs" class="form-control">
                            <option value="--" <? if( $row['Chyvs']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['Chyvs']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так" <? if( $row['Chyvs']=='Так'){echo 'selected';}?>>Так</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td ><label>Порушення вібраційної чутливості?</label></td><td>
                        <select name="NarVibr" class="form-control">
                            <option value="--" <? if( $row['NarVibr']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['NarVibr']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так" <? if( $row['NarVibr']=='Так'){echo 'selected';}?>>Так</option>
                        </select>
                    </td>
                </tr><tr>
                    <td><label>Зниження / відсутність рефлексів?</label></td><td>
                        <select name="Reflex" class="form-control">
                            <option value="--" <? if( $row['Reflex']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['Reflex']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так" <? if( $row['Reflex']=='Так'){echo 'selected';}?>>Так</option>
                        </select></td>
                </tr><tr>
                    <td><label>Наявність виразок?</label></td><td>
                        <select name="Jazv" class="form-control">
                            <option value="--" <? if( $row['Jazv']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['Jazv']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так" <? if( $row['Jazv']=='Так'){echo 'selected';}?>>Так</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td ><label>Нагноєння виразок?</label></td><td>
                        <select name="GnojJazv" class="form-control">
                            <option value="--" <? if( $row['GnojJazv']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['GnojJazv']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так" <? if( $row['GnojJazv']=='Так'){echo 'selected';}?>>Так</option>
                        </select>
                    </td>
                </tr><tr>
                    <td><label>Пульс на стопі?</label></td><td>
                        <select name="PylsStopa" class="form-control">
                            <option value="--" <? if( $row['PylsStopa']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['PylsStopa']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так" <? if( $row['PylsStopa']=='Так'){echo 'selected';}?>>Так</option>
                        </select></td>
                </tr><tr>
                    <td><label>Шунтування / ангіопластика?</label></td><td>
                        <select name="Shynt" class="form-control">
                            <option value="--" <? if( $row['Shynt']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['Shynt']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так" <? if( $row['Shynt']=='Так'){echo 'selected';}?>>Так</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td ><label>Синдром переміжної кульгавості?</label></td><td>
                        <select name="Hrom" class="form-control">
                            <option value="--" <? if( $row['Hrom']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['Hrom']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так"  <? if( $row['Hrom']=='Так'){echo 'selected';}?>>Так</option>
                        </select>
                    </td>
                </tr><tr>
                    <td><label>Ампутація?</label></td><td>
                        <select name="Ampyt" class="form-control" onchange="addAmput(this.value)">
                            <option value="--" <? if( $row['Ampyt']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['Ampyt']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Ліва нога" <? if( $row['Ampyt']=='Ліва нога'){echo 'selected';}?>>Ліва нога</option>
                            <option value="Права нога" <? if( $row['Ampyt']=='Права нога'){echo 'selected';}?>>Права нога</option>
                        </select>
                        <? if($row['Ampyt']!='Ні') {
                            ?>
                            <span id="kiAmput1"><label id="kakAmput">Локалізація ампутації?</label></span>

                            <span id="kiAmput3"><select id="kakAmput1" name="kakAmput1" class="form-control">
                                                            <option  value="--" <? if( $row['kakAmput1']=='--'){echo 'selected';}?>>--</option>
                                                            <option  value="Великий палець" <? if( $row['kakAmput1']=='Великий палець'){echo 'selected';}?>>Великий палець</option>
                                                            <option  value="Стопа" <? if( $row['kakAmput1']=='Стопа'){echo 'selected';}?>>Стопа</option>
                                                            <option  value="Коліно" <? if( $row['kakAmput1']=='Коліно'){echo 'selected';}?>>Коліно</option>
                                                            <option  value="Стегно" <? if( $row['kakAmput1']=='Стегно'){echo 'selected';}?>>Стегно</option>
                                                        </select></span>
                            <span id="kiAmput"><label id="datAmputL">Рік ампутації</label></span>

                            <span id="kiAmput2"><input type="text" value='<? echo $row['datAmput'];?>' name="datAmput" id="datAmput" class="form-control" width="100px"></span>
                            <?php
                        }else{
                            ?>
                            <span id="kiAmput1"></span>

                            <span id="kiAmput3"></span>
                            <span id="kiAmput"></span>

                            <span id="kiAmput2"></span>
                            <?
                        }
                        ?>




                    </td>
                </tr>
            </table>
        </fieldset>
    </div>
    <div role="tabpanel" class="tab-pane" id="lab">
        <fieldset style="margin-top: 30px;">
            <h4>7.А. Лабораторні дослідження</h4>
            <table class='mainT' id="forTab1" style="width: 80%;">
                <tr>
                    <td ><label class="lb1">Дата обстеження: дд-мм-рр</label></td>
                    <td style="width: 100%">
                        <div style="display: flex">
                            <input type="date" value='<? echo $row['datLab'];?>' class="form-control" name="datLab">
                            <?php
                            $b14='no';

                            foreach($hist as $key=>$item):

                                if($item['nameStol']=='datLab' and $b14=='no'){
                                    $b14='yes';
                                    ?>
                                    <a id="b14" style='position: relative;' onclick="show1(this.id)"><i class="fas fa-clipboard-list"></i>
                                        <div id="m14" class="pop" onmouseout="hide1(this.id)" onmouseover="show2(this.id)">

                                                      <span style="font-size: 9px;font-weight: bold;"><?
                                                          echo $row['fname']." ".$row['name']." ".$row['sname'];?></span><br>

                                            <span class="n"> <? echo "Дата обстеження: дд-мм-рр:";?>
                                                <?
                                                $u=1;
                                                echo "<table class='table table-bordered'>";
                                                foreach($hist as $key=>$item):

                                                    if($item['nameStol']=='datLab'){
                                                        echo "<tr><td>{$u}</td><td> {$item['val']}</td><td> {$item['date_izm']}</td>";
                                                        $u++;
                                                    }

                                                endforeach;
                                                echo "</table>";
                                                ?></span>
                                        </div>  </a>
                                    <?php
                                }

                            endforeach;
                            ?>
                        </div>

                    </td>
                </tr><tr>
                    <td>
                        <label class="lb1">Ви зараз натщесерце?</label></td><td>
                        <select name="Natosh" class="form-control">
                            <option value="--" <? if( $row['Natosh']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['Natosh']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так" <? if( $row['Natosh']=='Так'){echo 'selected';}?>>Так</option>
                        </select>
                    </td>
                </tr><tr>
                    <td>
                        <label class="lb1">О котрій годині був останній прийом їжі (напередодні ввечері)?</label></td><td>
                        <input name="Pisha" type="time" value='<? echo $row['Pisha'];?>' class="form-control" placeholder="">

                    </td>
                </tr>
                <tr style="background: #295b8e;">
                    <td><label class="lb1" style="color:white;">Глюкоза крові натще:</label></td>
                    <td></td>

                </tr>
                <tr>

                    <td>
                        <label class="lb1">Показник, ммоль/л</label></td><td>
                        <div style="display: flex">
                            <input type="text" name="nmol" value='<? echo $row['nmol'];?>' class="form-control">
                            <?php
                            $b15='no';

                            foreach($hist as $key=>$item):

                                if($item['nameStol']=='nmol' and $b15=='no'){
                                    $b15='yes';
                                    ?>
                                    <a id="b15" style='position: relative;' onclick="show1(this.id)"><i class="fas fa-clipboard-list"></i>
                                        <div id="m15" class="pop" onmouseout="hide1(this.id)" onmouseover="show2(this.id)">

                                                      <span style="font-size: 9px;font-weight: bold;"><?
                                                          echo $row['fname']." ".$row['name']." ".$row['sname'];?></span><br>

                                            <span class="n"> <? echo "Показник, nmol / l:";?>
                                                <?
                                                $u=1;
                                                echo "<table class='table table-bordered'>";
                                                foreach($hist as $key=>$item):

                                                    if($item['nameStol']=='nmol'){
                                                        echo "<tr><td>{$u}</td><td> {$item['val']}</td><td> {$item['date_izm']}</td>";
                                                        $u++;
                                                    }

                                                endforeach;
                                                echo "</table>";
                                                ?></span>
                                        </div>  </a>
                                    <?php
                                }

                            endforeach;
                            ?>
                        </div>
                    </td>
                </tr><tr>
                    <td>
                        <label class="lb1">Дата, дд-мм-рр</label></td><td>
                        <input type="date" name="Datnmol" value='<? echo $row['Datnmol'];?>' class="form-control">
                    </td>
                </tr>
                <tr style="background: #295b8e;">
                    <td><label class="lb1" style="color:white;">Глікований гемоглобін?</label></td>
                    <td></td>

                </tr>
                <tr>
                    <td >
                        <label class="lb1">%</label></td><td>
                        <div style="display: flex">
                            <input type="text" name="vidsot" value='<? echo $row['vidsot'];?>' class="form-control">
                            <?php
                            $b16='no';

                            foreach($hist as $key=>$item):

                                if($item['nameStol']=='vidsot' and $b16=='no'){
                                    $b16='yes';
                                    ?>
                                    <a id="b16" style='position: relative;' onclick="show1(this.id)"><i class="fas fa-clipboard-list"></i>
                                        <div id="m16" class="pop" onmouseout="hide1(this.id)" onmouseover="show2(this.id)">

                                                      <span style="font-size: 9px;font-weight: bold;"><?
                                                          echo $row['fname']." ".$row['name']." ".$row['sname'];?></span><br>

                                            <span class="n"> <? echo "Глікований гемоглобін %:";?>
                                                <?
                                                $u=1;
                                                echo "<table class='table table-bordered'>";
                                                foreach($hist as $key=>$item):

                                                    if($item['nameStol']=='vidsot'){
                                                        echo "<tr><td>{$u}</td><td> {$item['val']}</td><td> {$item['date_izm']}</td>";
                                                        $u++;
                                                    }

                                                endforeach;
                                                echo "</table>";
                                                ?></span>
                                        </div>  </a>
                                    <?php
                                }

                            endforeach;
                            ?>
                        </div>
                    </td>
                </tr><tr>
                    <td>
                        <label class="lb1">pmol/pmol</label></td><td>
                        <div style="display: flex">
                            <input type="text" name="gemogl" value='<? echo $row['gemogl'];?>' class="form-control">
                            <?php
                            $b17='no';

                            foreach($hist as $key=>$item):

                                if($item['nameStol']=='gemogl' and $b17=='no'){
                                    $b17='yes';
                                    ?>
                                    <a id="b17" style='position: relative;' onclick="show1(this.id)"><i class="fas fa-clipboard-list"></i>
                                        <div id="m17" class="pop" onmouseout="hide1(this.id)" onmouseover="show2(this.id)">

                                                      <span style="font-size: 9px;font-weight: bold;"><?
                                                          echo $row['fname']." ".$row['name']." ".$row['sname'];?></span><br>

                                            <span class="n"> <? echo "pmol/pmol:";?>
                                                <?
                                                $u=1;
                                                echo "<table class='table table-bordered'>";
                                                foreach($hist as $key=>$item):

                                                    if($item['nameStol']=='gemogl'){
                                                        echo "<tr><td>{$u}</td><td> {$item['val']}</td><td> {$item['date_izm']}</td>";
                                                        $u++;
                                                    }

                                                endforeach;
                                                echo "</table>";
                                                ?></span>
                                        </div>  </a>
                                    <?php
                                }

                            endforeach;
                            ?>
                        </div>

                    </td>
                </tr><tr>
                    <td>
                        <label class="lb1">Дата, дд-мм-рр</label></td><td>
                        <input type="date" name="Datgemogl" value='<? echo $row['Datgemogl'];?>' class="form-control">

                    </td>
                </tr>
                <tr style="background: #295b8e;">
                    <td ><label class="lb1" style="color:white;">Загальний аналіз крові (дата)?</label>

                    </td>
                    <td>
                        <input type="date" name="Datkrovi" value='<? echo $row['Datkrovi'];?>'  class="form-control">
                    </td>
                </tr>

                <tr>
                    <td >
                        <label class="lb1">Еритроцити</label></td><td>
                        <div style="display: flex">
                            <input type="text" name="eritr" value='<? echo $row['eritr'];?>' class="form-control">
                            <?php
                            $b18='no';

                            foreach($hist as $key=>$item):

                                if($item['nameStol']=='eritr' and $b18=='no'){
                                    $b18='yes';
                                    ?>
                                    <a id="b18" style='position: relative;' onclick="show1(this.id)"><i class="fas fa-clipboard-list"></i>
                                        <div id="m18" class="pop" onmouseout="hide1(this.id)" onmouseover="show2(this.id)">

                                                      <span style="font-size: 9px;font-weight: bold;"><?
                                                          echo $row['fname']." ".$row['name']." ".$row['sname'];?></span><br>

                                            <span class="n"> <? echo "Еритроцити:";?>
                                                <?
                                                $u=1;
                                                echo "<table class='table table-bordered'>";
                                                foreach($hist as $key=>$item):

                                                    if($item['nameStol']=='eritr'){
                                                        echo "<tr><td>{$u}</td><td> {$item['val']}</td><td> {$item['date_izm']}</td>";
                                                        $u++;
                                                    }

                                                endforeach;
                                                echo "</table>";
                                                ?></span>
                                        </div>  </a>
                                    <?php
                                }

                            endforeach;
                            ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="lb1">Гемоглобін</label></td><td>
                        <div style="display: flex">
                            <input type="text" name="gemogl2" value='<? echo $row['gemogl2'];?>' class="form-control">

                            <?php
                            $b19='no';

                            foreach($hist as $key=>$item):

                                if($item['nameStol']=='gemogl2' and $b19=='no'){
                                    $b19='yes';
                                    ?>
                                    <a id="b19" style='position: relative;' onclick="show1(this.id)"><i class="fas fa-clipboard-list"></i>
                                        <div id="m19" class="pop" onmouseout="hide1(this.id)" onmouseover="show2(this.id)">

                                                      <span style="font-size: 9px;font-weight: bold;"><?
                                                          echo $row['fname']." ".$row['name']." ".$row['sname'];?></span><br>

                                            <span class="n"> <? echo "Гемоглобін:";?>
                                                <?
                                                $u=1;
                                                echo "<table class='table table-bordered'>";
                                                foreach($hist as $key=>$item):

                                                    if($item['nameStol']=='gemogl2'){
                                                        echo "<tr><td>{$u}</td><td> {$item['val']}</td><td> {$item['date_izm']}</td>";
                                                        $u++;
                                                    }

                                                endforeach;
                                                echo "</table>";
                                                ?></span>
                                        </div>  </a>
                                    <?php
                                }

                            endforeach;
                            ?>
                        </div>
                    </td>
                </tr><tr>
                    <td>
                        <label class="lb1">Лейкоцити (кількість)</label></td><td>
                        <div style="display: flex">
                            <input type="text" name="lekoz" value='<? echo $row['lekoz'];?>' class="form-control">
                            <?php
                            $b20='no';

                            foreach($hist as $key=>$item):

                                if($item['nameStol']=='lekoz' and $b20=='no'){
                                    $b20='yes';
                                    ?>
                                    <a id="b20" style='position: relative;' onclick="show1(this.id)"><i class="fas fa-clipboard-list"></i>
                                        <div id="m20" class="pop" onmouseout="hide1(this.id)" onmouseover="show2(this.id)">

                                                      <span style="font-size: 9px;font-weight: bold;"><?
                                                          echo $row['fname']." ".$row['name']." ".$row['sname'];?></span><br>

                                            <span class="n"> <? echo "Лейкоцити (кількість):";?>
                                                <?
                                                $u=1;
                                                echo "<table class='table table-bordered'>";
                                                foreach($hist as $key=>$item):

                                                    if($item['nameStol']=='lekoz'){
                                                        echo "<tr><td>{$u}</td><td> {$item['val']}</td><td> {$item['date_izm']}</td>";
                                                        $u++;
                                                    }

                                                endforeach;
                                                echo "</table>";
                                                ?></span>
                                        </div>  </a>
                                    <?php
                                }

                            endforeach;
                            ?>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td >
                        <label class="lb1">Нейтрофіли (абс к-ть)</label></td><td>
                        <div style="display: flex">
                            <input type="text" name="nejtrof" value='<? echo $row['nejtrof'];?>' class="form-control">
                            <?php
                            $b21='no';

                            foreach($hist as $key=>$item):

                                if($item['nameStol']=='nejtrof' and $b21=='no'){
                                    $b21='yes';
                                    ?>
                                    <a id="b21" style='position: relative;' onclick="show1(this.id)"><i class="fas fa-clipboard-list"></i>
                                        <div id="m21" class="pop" onmouseout="hide1(this.id)" onmouseover="show2(this.id)">

                                                      <span style="font-size: 9px;font-weight: bold;"><?
                                                          echo $row['fname']." ".$row['name']." ".$row['sname'];?></span><br>

                                            <span class="n"> <? echo "Нейтрофіли (абс к-ть):";?>
                                                <?
                                                $u=1;
                                                echo "<table class='table table-bordered'>";
                                                foreach($hist as $key=>$item):

                                                    if($item['nameStol']=='nejtrof'){
                                                        echo "<tr><td>{$u}</td><td> {$item['val']}</td><td> {$item['date_izm']}</td>";
                                                        $u++;
                                                    }

                                                endforeach;
                                                echo "</table>";
                                                ?></span>
                                        </div>  </a>
                                    <?php
                                }

                            endforeach;
                            ?>
                        </div>


                    </td>
                </tr>
                <tr>
                    <td>
                        <label class="lb1">Моноцити (абс к-ть)</label></td><td>
                        <div style="display: flex">
                            <input type="text" name="monozit" value='<? echo $row['monozit'];?>' class="form-control">

                            <?php
                            $b22='no';

                            foreach($hist as $key=>$item):

                                if($item['nameStol']=='monozit' and $b22=='no'){
                                    $b22='yes';
                                    ?>
                                    <a id="b22" style='position: relative;' onclick="show1(this.id)"><i class="fas fa-clipboard-list"></i>
                                        <div id="m22" class="pop" onmouseout="hide1(this.id)" onmouseover="show2(this.id)">

                                                      <span style="font-size: 9px;font-weight: bold;"><?
                                                          echo $row['fname']." ".$row['name']." ".$row['sname'];?></span><br>

                                            <span class="n"> <? echo "Моноцити (абс к-ть):";?>
                                                <?
                                                $u=1;
                                                echo "<table class='table table-bordered'>";
                                                foreach($hist as $key=>$item):

                                                    if($item['nameStol']=='monozit'){
                                                        echo "<tr><td>{$u}</td><td> {$item['val']}</td><td> {$item['date_izm']}</td>";
                                                        $u++;
                                                    }

                                                endforeach;
                                                echo "</table>";
                                                ?></span>
                                        </div>  </a>
                                    <?php
                                }

                            endforeach;
                            ?>
                        </div>

                    </td>
                </tr><tr>
                    <td>
                        <label class="lb1">Лімфоцити (абс к-во)</label></td><td>
                        <div style="display: flex">
                            <input type="text" name="limfoz" value='<? echo $row['limfoz'];?>' class="form-control">
                            <?php
                            $b23='no';

                            foreach($hist as $key=>$item):

                                if($item['nameStol']=='limfoz' and $b23=='no'){
                                    $b23='yes';
                                    ?>
                                    <a id="b23" style='position: relative;' onclick="show1(this.id)"><i class="fas fa-clipboard-list"></i>
                                        <div id="m23" class="pop" onmouseout="hide1(this.id)" onmouseover="show2(this.id)">

                                                      <span style="font-size: 9px;font-weight: bold;"><?
                                                          echo $row['fname']." ".$row['name']." ".$row['sname'];?></span><br>

                                            <span class="n"> <? echo "Лімфоцити (абс к-во):";?>
                                                <?
                                                $u=1;
                                                echo "<table class='table table-bordered'>";
                                                foreach($hist as $key=>$item):

                                                    if($item['nameStol']=='limfoz'){
                                                        echo "<tr><td>{$u}</td><td> {$item['val']}</td><td> {$item['date_izm']}</td>";
                                                        $u++;
                                                    }

                                                endforeach;
                                                echo "</table>";
                                                ?></span>
                                        </div>  </a>
                                    <?php
                                }

                            endforeach;
                            ?>
                        </div>

                    </td>
                </tr>
                <tr>
                    <td >
                        <label class="lb1">Тромбоцити (абс к-во)</label></td><td>
                        <div style="display: flex">
                            <input type="text" name="tromb" value='<? echo $row['tromb'];?>' class="form-control">


                            <?php
                            $b24='no';

                            foreach($hist as $key=>$item):

                                if($item['nameStol']=='tromb' and $b24=='no'){
                                    $b24='yes';
                                    ?>
                                    <a id="b24" style='position: relative;' onclick="show1(this.id)"><i class="fas fa-clipboard-list"></i>
                                        <div id="m24" class="pop" onmouseout="hide1(this.id)" onmouseover="show2(this.id)">

                                                      <span style="font-size: 9px;font-weight: bold;"><?
                                                          echo $row['fname']." ".$row['name']." ".$row['sname'];?></span><br>

                                            <span class="n"> <? echo "Тромбоцити (абс к-во):";?>
                                                <?
                                                $u=1;
                                                echo "<table class='table table-bordered'>";
                                                foreach($hist as $key=>$item):

                                                    if($item['nameStol']=='tromb'){
                                                        echo "<tr><td>{$u}</td><td> {$item['val']}</td><td> {$item['date_izm']}</td>";
                                                        $u++;
                                                    }

                                                endforeach;
                                                echo "</table>";
                                                ?></span>
                                        </div>  </a>
                                    <?php
                                }

                            endforeach;
                            ?>
                        </div>
                    </td>
                </tr><tr>
                    <td>
                        <label class="lb1">Тромбоцити, MPV</label></td><td>
                        <div style="display: flex">
                            <input type="text" name="mpv" value='<? echo $row['mpv'];?>' class="form-control">


                            <?php
                            $b25='no';

                            foreach($hist as $key=>$item):

                                if($item['nameStol']=='mpv' and $b25=='no'){
                                    $b25='yes';
                                    ?>
                                    <a id="b25" style='position: relative;' onclick="show1(this.id)"><i class="fas fa-clipboard-list"></i>
                                        <div id="m25" class="pop" onmouseout="hide1(this.id)" onmouseover="show2(this.id)">

                                                      <span style="font-size: 9px;font-weight: bold;"><?
                                                          echo $row['fname']." ".$row['name']." ".$row['sname'];?></span><br>

                                            <span class="n"> <? echo "Тромбоцити, MPV:";?>
                                                <?
                                                $u=1;
                                                echo "<table class='table table-bordered'>";
                                                foreach($hist as $key=>$item):

                                                    if($item['nameStol']=='mpv'){
                                                        echo "<tr><td>{$u}</td><td> {$item['val']}</td><td> {$item['date_izm']}</td>";
                                                        $u++;
                                                    }

                                                endforeach;
                                                echo "</table>";
                                                ?></span>
                                        </div>  </a>
                                    <?php
                                }

                            endforeach;
                            ?>
                        </div>
                    </td>
                </tr><tr>
                    <td>
                        <label class="lb1">Інше (показник)</label></td><td>
                        <div style="display: flex">
                            <input type="text" name="dryg" value='<? echo $row['dryg'];?>' class="form-control">
                            <?php
                            $b26='no';

                            foreach($hist as $key=>$item):

                                if($item['nameStol']=='dryg' and $b26=='no'){
                                    $b26='yes';
                                    ?>
                                    <a id="b26" style='position: relative;' onclick="show1(this.id)"><i class="fas fa-clipboard-list"></i>
                                        <div id="m26" class="pop" onmouseout="hide1(this.id)" onmouseover="show2(this.id)">

                                                      <span style="font-size: 9px;font-weight: bold;"><?
                                                          echo $row['fname']." ".$row['name']." ".$row['sname'];?></span><br>

                                            <span class="n"> <? echo "Інше (показник):";?>
                                                <?
                                                $u=1;
                                                echo "<table class='table table-bordered'>";
                                                foreach($hist as $key=>$item):

                                                    if($item['nameStol']=='dryg'){
                                                        echo "<tr><td>{$u}</td><td> {$item['val']}</td><td> {$item['date_izm']}</td>";
                                                        $u++;
                                                    }

                                                endforeach;
                                                echo "</table>";
                                                ?></span>
                                        </div>  </a>
                                    <?php
                                }

                            endforeach;
                            ?>
                        </div>
                    </td>
                </tr>
                <tr style="background: #295b8e;">
                    <td><label class="lb1" style="color:white;">Креатинін в плазмі крові</label></td>
                    <td></td>

                </tr>
                <tr>

                    <td>
                        <label class="lb1">Показник, мкмоль / л</label></td><td>
                        <div style="display: flex">
                            <input type="text" name="kreat" value='<? echo $row['kreat'];?>' class="form-control">


                            <?php
                            $b27='no';

                            foreach($hist as $key=>$item):

                                if($item['nameStol']=='kreat' and $b27=='no'){
                                    $b27='yes';
                                    ?>
                                    <a id="b27" style='position: relative;' onclick="show1(this.id)"><i class="fas fa-clipboard-list"></i>
                                        <div id="m27" class="pop" onmouseout="hide1(this.id)" onmouseover="show2(this.id)">

                                                      <span style="font-size: 9px;font-weight: bold;"><?
                                                          echo $row['fname']." ".$row['name']." ".$row['sname'];?></span><br>

                                            <span class="n"> <? echo "Показник, мкмоль / л:";?>
                                                <?
                                                $u=1;
                                                echo "<table class='table table-bordered'>";
                                                foreach($hist as $key=>$item):

                                                    if($item['nameStol']=='kreat'){
                                                        echo "<tr><td>{$u}</td><td> {$item['val']}</td><td> {$item['date_izm']}</td>";
                                                        $u++;
                                                    }

                                                endforeach;
                                                echo "</table>";
                                                ?></span>
                                        </div>  </a>
                                    <?php
                                }

                            endforeach;
                            ?>
                        </div>
                    </td>
                </tr><tr>
                    <td>
                        <label class="lb1">Дата, дд-мм-рр</label></td><td>
                        <input type="date" name="datkreat" value='<? echo $row['datkreat'];?>' class="form-control">

                    </td>
                </tr>
                <tr style="background: #295b8e;">
                    <td><label class="lb1" style="color:white;">Креатинін в сечі</label></td>
                    <td></td>

                </tr>
                <tr>
                    <td >

                        <label class="lb1">Показник, мкмоль / л</label></td><td>
                        <div style="display: flex">
                            <input type="text" name="kreatMocha" value='<? echo $row['kreatMocha'];?>' class="form-control">


                            <?php
                            $b28='no';

                            foreach($hist as $key=>$item):

                                if($item['nameStol']=='kreatMocha' and $b28=='no'){
                                    $b28='yes';
                                    ?>
                                    <a id="b28" style='position: relative;' onclick="show1(this.id)"><i class="fas fa-clipboard-list"></i>
                                        <div id="m28" class="pop" onmouseout="hide1(this.id)" onmouseover="show2(this.id)">

                                                      <span style="font-size: 9px;font-weight: bold;"><?
                                                          echo $row['fname']." ".$row['name']." ".$row['sname'];?></span><br>

                                            <span class="n"> <? echo "Креатинін в сечі:";?>
                                                <?
                                                $u=1;
                                                echo "<table class='table table-bordered'>";
                                                foreach($hist as $key=>$item):

                                                    if($item['nameStol']=='kreatMocha'){
                                                        echo "<tr><td>{$u}</td><td> {$item['val']}</td><td> {$item['date_izm']}</td>";
                                                        $u++;
                                                    }

                                                endforeach;
                                                echo "</table>";
                                                ?></span>
                                        </div>  </a>
                                    <?php
                                }

                            endforeach;
                            ?>
                        </div>
                    </td>
                </tr><tr>
                    <td>
                        <label class="lb1">Дата, дд-мм-рр</label></td><td>
                        <input type="date" name="datMocha" value='<? echo $row['datMocha'];?>' class="form-control">
                    </td>
                </tr><tr>
                    <td>

                        <label class="lb1">Кліренс креатиніну (СКФ, швидкості клубочкової фільтрації)</label></td><td>
                        <input type="text" name="klirkreat"  value='<? echo $row['klirkreat'];?>' class="form-control">





                    </td>
                </tr>
                <tr>
                    <td >
                        <label class="lb1">Протеїнурія</label></td><td>
                        <select name="Protein" class="form-control" onchange="protein(this.value)">
                            <option value="--" <? if( $row['Protein']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['Protein']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так" <? if( $row['Protein']=='Так'){echo 'selected';}?>>Так</option>
                        </select>
                    </td>
                </tr><tr <? if($row['Protein']!='Так'){echo 'class="showProt"';}?> id="prote">
                    <td>
                        <label class="lb1">Останній вимір, мг / сут</label></td><td>
                        <input type="text" name="posIzm" id="posIzm" value='<? echo $row['posIzm'];?>' class="form-control">
                    </td>
                </tr><tr <? if($row['Protein']!='Так'){echo 'class="showProt"';}?> id="datprote">
                    <td>
                        <label class="lb1">Дата, дд-мм-рр</label></td><td>
                        <input type="date" name="datProtein" id="datProtein" value='<? echo $row['datProtein'];?>' class="form-control">

                    </td>
                </tr>
                <tr>
                    <style>
                        #forTab1 tr td:last-child input,#forTab2 tr td:last-child input,
                        #forTab1 tr td:last-child select,#forTab2 tr td:last-child select,
                        #forTab1 tr td:last-child label,#forTab2 tr td:last-child label{
                            width: 100%;
                        }

                    </style>
                    <td >
                        <label class="lb1">Мікроальбумінурія</label></td><td>
                        <select name="Mikroalmb" class="form-control" onchange="addMikro(this.value)">
                            <option value="--" <? if( $row['Mikroalmb']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['Mikroalmb']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так" <? if( $row['Mikroalmb']=='Так'){echo 'selected';}?>>Так</option>
                        </select>

                        <? if($row['Mikroalmb']=='Так') {
                            ?>



                            <span id="kiMikro3"><label id="kakMikro">Якщо так – показник, мг/л</label></span>
                            <span id="kiMikro1"><input name="kakMikro1" value='<? echo $row['kakMikro1'];?>' id="kakMikro1" class="form-control"></span>


                            <span id="kiMikro"><label id="datMikroL">Дата</label></span>
                            <span id="kiMikro2"><input type="date" name="datMikro" value='<? echo $row['datMikro'];?>' id="datMikro" class="form-control" width="100px"></span>


                            <?php
                        }else{
                            ?>



                            <span id="kiMikro3"></span>
                            <span id="kiMikro1"></span>


                            <span id="kiMikro"></span>
                            <span id="kiMikro2"></span>


                            <?
                        }
                        ?>




                </tr>
                <tr style="background: #295b8e;">
                    <td><label class="lb1" style="color:white;">Лабораторний аналіз ліпідів в крові (дата):</label></td>
                    <td><input type="date" name="Lipiddat" value='<? echo $row['Lipiddat'];?>' class="form-control"> </td>

                </tr>
                <tr>
                    <td >

                        <label class="lb1">Холестерин (показник)</label></td><td>
                        <input type="text" name="Holest" value='<? echo $row['Holest'];?>' class="form-control">
                    </td>
                </tr><tr>
                    <td>
                        <label class="lb1">Ліпіди високої щільності
                            (Показник)</label></td><td>
                        <input type="text" name="LipidVis" value='<? echo $row['LipidVis'];?>' class="form-control">
                    </td>
                </tr><tr>
                    <td>

                        <label class="lb1">Ліпіди низької щільності (показник)</label></td><td>
                        <input type="text" name="LipidNiz" value='<? echo $row['LipidNiz'];?>' class="form-control">
                    </td>
                </tr>
                <tr>
                    <td >

                        <label class="lb1">Тригліцериди (показник)</label></td><td>
                        <input type="text" name="Trigliz" value='<? echo $row['Trigliz'];?>' class="form-control">
                    </td>

                </tr>
                <tr>
                    <td >

                        <label class="lb1">Аспартатамінотрансфераза (АСТ)</label></td><td>
                        <input type="text" name="Asparta" value='<? echo $row['Asparta'];?>' class="form-control">
                    </td>
                </tr><tr>
                    <td>
                        <label class="lb1">Аланінамінотрансфераза (АСТ)</label></td><td>
                        <input type="text" name="Alanin" value='<? echo $row['Alanin'];?>' class="form-control">
                    </td>
                </tr><tr>
                    <td>
                        <label class="lb1">С-реактивний білок</label></td><td>
                        <input type="text" name="BelocS" value='<? echo $row['BelocS'];?>' class="form-control">

                    </td>
                </tr>
                <tr style="display: none;">
                    <td >

                        <label class="lb1">C-пептид, показник:</label></td><td>
                        <input type="text" name="Peptid" value='<? echo $row['Peptid'];?>' class="form-control">
                    </td>
                </tr><tr style="display: none;">
                    <td>
                        <label class="lb1">C-пептид, одиниця виміру:</label></td><td>
                        <input type="text" name="PeptiEdIzm" value='<? echo $row['PeptiEdIzm'];?>' class="form-control">
                    </td>
                </tr><tr>
                    <td>
                        <label class="lb1">C-пептид, одиниця виміру нг/мл:</label></td><td>
                        <input type="text" name="PeptidPmol" value='<? echo $row['PeptidPmol'];?>' class="form-control">

                    </td>
                </tr>
                <tr>
                    <td >

                        <label class="lb1">C-пептид, одиниця виміру nmol/l:</label></td><td>
                        <input type="text" name="PeptidNmol" value='<? echo $row['PeptidNmol'];?>' class="form-control">
                    </td>
                </tr><tr >
                    <td>
                        <label class="lb1">C-пептід, Дата: дд-мм-рр:</label></td><td>
                        <input type="date" name="S_Pep" value='<? echo $row['S_Pep'];?>' class="form-control">
                    </td>

                </tr>
                <tr>
                    <td>
                        <label class="lb1">AT-GAD:</label></td><td>
                        <input type="text" name="atGad" value='<? echo $row['atGad'];?>' class="form-control">
                    </td>

                </tr>
                <tr>
                    <td>
                        <label class="lb1">AT-GAD дата:</label></td><td>
                        <input type="date" name="atGaddat" value='<? echo $row['atGaddat'];?>' class="form-control">
                    </td>

                </tr>
            </table>
        </fieldset>
    </div>
    <div role="tabpanel" class="tab-pane" id="bio">
        <fieldset style="margin-top: 30px;">
            <h4>7.Б. Біоматеріал</label>
                <div id="tab-content12"</h4>
            <table class='mainT' style="width: 80%;">
                <tr>
                    <td >
                        <label class="lb1">Сиворотка?</label></td>
                    <td style="width: 100%">
                        <select name="Sivor" class="form-control">
                            <option value="--" <? if( $row['Sivor']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['Sivor']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так" <? if( $row['Sivor']=='Так'){echo 'selected';}?>>Так</option>
                        </select>
                    </td>
                </tr><tr>
                    <td>
                        <label>Плазма?</label></td><td>
                        <select name="Plazma" class="form-control">
                            <option value="--" <? if( $row['Plazma']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['Plazma']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так" <? if( $row['Plazma']=='Так'){echo 'selected';}?>>Так</option>
                        </select>
                    </td>
                </tr><tr>
                    <td>
                        <label>Кров на ДНК?</label></td><td>
                        <select name="DNK" class="form-control">
                            <option value="--" <? if( $row['DNK']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['DNK']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так" <? if( $row['DNK']=='Так'){echo 'selected';}?>>Так</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td >
                        <label>Кров на РНК?</label></td><td>
                        <input name="PHK" type="text" value='<? echo $row['PHK'];?>' class="form-control">

                    </td>
                </tr><tr>
                    <td>
                        <label>Слина?</label></td><td>
                        <select name="Sluna" class="form-control">
                            <option value="--" <? if( $row['Sluna']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['Sluna']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так" <? if( $row['Sluna']=='Так'){echo 'selected';}?>>Так</option>
                        </select>
                    </td>
                </tr><tr>
                    <td>
                        <label>Біоптат кожи?</label></td><td>
                        <select name="Biopat" class="form-control">
                            <option value="--" <? if( $row['Biopat']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['Biopat']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Так" <? if( $row['Biopat']=='Так'){echo 'selected';}?>>Так</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td >
                        <label>Примітки при заборі крові (зрив вакуумної пробки, тощо)</label>


                    </td>
                    <td>
                        <textarea name="PrimZAbKrov" class="form-control"><? echo $row['PrimZAbKrov'];?></textarea>
                    </td>

                </tr>
            </table>
        </fieldset>
    </div>
    <div role="tabpanel" class="tab-pane" id="lik">
        <fieldset style="margin-top: 30px;">
            <h4>8.А. Лікування</h4>
            <table class='mainT' id="forTab2" style="width: 80%">
                <tr>
                    <td><label class="lb1">Лікування цукрового діабету</label></td>
                    <td style="width: 100%;">
                        <select name="LechDIabet" class="form-control">
                            <option value="--" <? if( $row['LechDIabet']=='--'){echo 'selected';}?>>--</option>
                            <option value="Не проводиться" <? if( $row['LechDIabet']=='Не проводиться'){echo 'selected';}?>>Не проводиться</option>
                            <option value="Дієта" <? if( $row['LechDIabet']=='Дієта'){echo 'selected';}?>>Дієта</option>
                            <option value="Таблетки" <? if( $row['LechDIabet']=='Таблетки'){echo 'selected';}?>>Таблетки</option>
                            <option value="Інсулін" <? if( $row['LechDIabet']=='Інсулін'){echo 'selected';}?>>Інсулін</option>
                            <option value="Таблетки + інсулін" <? if( $row['LechDIabet']=='Таблетки + інсулін'){echo 'selected';}?>>Таблетки + інсулін</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label class="lb1">Дієта</label></td><td>
                        <select name="dieta" class="form-control">
                            <option value="--" <? if( $row['dieta']=='--'){echo 'selected';}?>>--</option>
                            <option value="Так" <? if( $row['dieta']=='Так'){echo 'selected';}?>>Так</option>
                            <option value="Ні" <? if( $row['dieta']=='Ні'){echo 'selected';}?>>Ні</option>
                        </select>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label class="lb1">Лікування діабету: інсулін (препарат, доза прийому, кратність)</label></td><td>
                        <select name="LechInsul" class="form-control" onchange="showIns(this.value)">
                            <option value="--" <? if( $row['LechInsul']=='--'){echo 'selected';}?>>--</option>
                            <option value="Ні" <? if( $row['LechInsul']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Базисна інсулінотерапія" <? if( $row['LechInsul']=='Базисна інсулінотерапія'){echo 'selected';}?>>Базисна інсулінотерапія</option>
                            <option value="Помпова інсулінотерапія" <? if( $row['LechInsul']=='Помпова інсулінотерапія'){echo 'selected';}?>>Помпова інсулінотерапія</option>
                            <option value="Змішаний" <? if( $row['LechInsul']=='Змішаний'){echo 'selected';}?>>Змішаний</option>

                        </select>
                    </td>
                </tr><tr <? if($row['LechInsul']=='--' or $row['LechInsul']=='Ні'){echo 'class="showIns"';}?> id="insyl">
                    <td >
                        <label class="lb1">Дата початку інсулінотерапії (дд- мм-рр)</label></td><td>
                        <input type="date" name="datLechDiab" id="datLechDiab" value='<? echo $row['datLechDiab'];?>' class="form-control">
                    </td>
                </tr>
                <tr>
                    <td><label class="lb1">Лікування діабету: таблетки</label></td><td>
                        <select name="diabLechTab" class="form-control">
                            <option value="--" <? if( $row['diabLechTab']=='--'){echo 'selected';}?>>--</option>
                            <option value="Бігуаніди" <? if( $row['diabLechTab']=='Бігуаніди'){echo 'selected';}?>>Бігуаніди</option>
                            <option value="Похідні сульфонілсечовини" <? if( $row['diabLechTab']=='Похідні сульфонілсечовини'){echo 'selected';}?>>Похідні сульфонілсечовини</option>
                            <option value="Інгібітори ДПП-4" <? if( $row['diabLechTab']=='Інгібітори ДПП-4'){echo 'selected';}?>>Інгібітори ДПП-4</option>
                            <option value="Інгібітори НЗКТГ-2" <? if( $row['diabLechTab']=='Інгібітори НЗКТГ-2'){echo 'selected';}?>>Інгібітори НЗКТГ-2</option>
                            <option value="Тіазолідиндіони" <? if( $row['diabLechTab']=='Тіазолідиндіони'){echo 'selected';}?>>Тіазолідиндіони</option>
                            <option value="Інгібітори a-глікозидази" <? if( $row['diabLechTab']=='Інгібітори a-глікозидази'){echo 'selected';}?>>Інгібітори a-глікозидази</option>
                            <option value="Меглітінід" <? if( $row['diabLechTab']=='Меглітінід'){echo 'selected';}?>>Меглітінід</option>
                        </select>
                    </td>
                </tr><tr>
                    <td>
                        <label class="lb1">Лікування гіпертонії (препарат, доза прийому, кратність)</label></td><td>
                        <select name="LechGiper" class="form-control">
                            <option value="--" <? if( $row['LechGiper']=='--'){echo 'selected';}?>>--</option>
                            <option value="Не проводиться" <? if( $row['LechGiper']=='Не проводиться'){echo 'selected';}?>>Не проводиться</option>
                            <option value="Бета-блокатори" <? if( $row['LechGiper']=='Бета-блокатори-'){echo 'selected';}?>>Бета-блокатори</option>
                            <option value="ACE-інгібітори" <? if( $row['LechGiper']=='ACE-інгібітори'){echo 'selected';}?>>ACE-інгібітори</option>
                            <option value="Сартани" <? if( $row['LechGiper']=='Сартани'){echo 'selected';}?>>Сартани</option>
                            <option value="Кальцієві блокатори" <? if( $row['LechGiper']=='Кальцієві блокатори'){echo 'selected';}?>>Кальцієві блокатори</option>
                            <option value="Діуретики" <? if( $row['LechGiper']=='Діуретики'){echo 'selected';}?>>Діуретики</option>
                            <option value="Інші, назва" <? if( $row['LechGiper']=='Інші, назва'){echo 'selected';}?>>Інші, назва</option>
                        </select>
                    </td>
                </tr>
                <td>
                    <label class="lb1">Лікування гіперліпідемії</label></td><td>
                    <select name="LechLipidGiper" class="form-control">
                        <option value="--" <? if( $row['LechLipidGiper']=='--'){echo 'selected';}?>>--</option>
                        <option value="Не проводиться" <? if( $row['LechLipidGiper']=='Не проводиться'){echo 'selected';}?>>Не проводиться</option>
                        <option value="Статини" <? if( $row['LechLipidGiper']=='Статини'){echo 'selected';}?>>Статини</option>
                        <option value="Фібрати" <? if( $row['LechLipidGiper']=='Фібрати'){echo 'selected';}?>>Фібрати</option>

                        <option value="Інші, назва" <? if( $row['LechLipidGiper']=='Інші, назва'){echo 'selected';}?>>Інші, назва</option>
                    </select>
                </td>
                </tr>

            </table>
        </fieldset>
    </div>
    <div role="tabpanel" class="tab-pane" id="gen">
        <fieldset style="margin-top: 30px;">
            <h4>9.А. Генеалогічне дерево</h4>
            <table class='mainT' id="forTab2" style="width: 80%;">
                <tr>
                    <td><label class="lb1">Генеалогічне дерево</label></td><td style="width: 100%;">
                        <select name="gen" class="form-control">
                            <option value="--" <? if( $row['gen']=='--'){echo 'selected';}?>>--</option>
                            <option value="Так" <? if( $row['gen']=='Так'){echo 'selected';}?>>Так</option>
                            <option value="Ні" <? if( $row['gen']=='Ні'){echo 'selected';}?>>Ні</option>
                            <option value="Не знаю" <? if( $row['gen']=='Не знаю'){echo 'selected';}?>>Не знаю</option>

                        </select>
                    </td>
                </tr>

            </table>
        </fieldset>
    </div>

</div>




<?

    die();

?>
