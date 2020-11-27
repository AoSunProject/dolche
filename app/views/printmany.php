<style>
.menlab{
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
}
    fieldset label{
        font-weight: normal;
        font-size: 14px;
    }

    * {box-sizing: border-box}
    .tab {
       margin-top: 20px;
    }

    /* Style the buttons inside the tab */
    .tab button {
        cursor: pointer;
        display: block;

        color: black;
padding: 7px;
        width: 100%;
        border: none;
        outline: none;
        text-align: left;
        cursor: pointer;
        transition: 0.3s;
        font-size: 1rem;
        font-weight: 400;
        line-height: 1.5;
    }

    /* Change background color of buttons on hover */
    .tab button:hover {
        background-color:#ddd ;
    }

    /* Create an active/current "tab button" class */
    .tab button.active {
        color: #295b8e;
        background:  #e5e5e5;

        padding-left: 7px;

        border-left: 3px solid  #295b8e;
    }
    .tab button:hover {
        color: #295b8e;
        background:  #e5e5e5;

        padding-left: 7px;

        border-left: 3px solid  #295b8e;
    }
    table{
        width: 80%;
        margin: 0 auto;
    }
    table .form-control{
        border:none;
        background: transparent;
    }
    /* Style the tab content */
    .tabcontent {
        float: left;
        padding: 0px 12px;

        width: 80%;
        border-left: none;

    }
    .hidd, hidd1{
        display: none;
    }
    fieldset{


        padding: 10px;

        margin: 3px;
    }
    #h1{
        display: none;
    }
    .mainT tr td{
        padding: 4px;
    }
    .mainT tr{
        border-bottom: 1px solid #295b8e;
    }
    input[type="radio"], input[type="checkbox"]{
        width: 15px;
        height: 15px;
        display: inline-block;
        float: left;
    }
    .lb1{
        display: inline-block;
        width: 300px;
    }
    .text1{
        font-size: 12px;
    }
    .pynkt{
        height: 40px;
        display: flex;
        align-items: center;
    }
    fieldset{
        margin-top: 25px;
    }
</style>
<meta charset="utf-8">

<script>



    window.print();



</script>
<link rel="stylesheet" href="../../js/bootstrap.css">
<?php
if(isset($_SESSION['user'])){

           ?>

<div _ngcontent-c0="" class="container-fluid">

                                <fieldset style="margin-top: 30px;">
                                    <h4>1. Загальні дані</h4>
                                    <table class='mainT'>
                                        <tr>
                                            <td><label>Прізвище</label></td><td>
                                                <input type="hidden" name="id" value="<? echo $karta[0]['id'];?>">
                                                <input class="form-control" type="text" name="fname"
                                                                              <?php
                                                                              if($_SESSION['role']!=2){
                                                                                  echo "readonly";
                                                                              }
                                                                              ?>
                                                                              value="<? echo $karta[0]['fname'];?>" placeholder="Іванов"></td>
                                        </tr><tr>
                                            <td><label>Ім'я</label></td><td><input class="form-control" type="text" name="name"
                                                    <?php
                                                    if($_SESSION['role']!=2){
                                                        echo "readonly";
                                                    }
                                                    ?>
                                                                          placeholder="Іван" value="<? echo $karta[0]['name'];?>"></td>
                                        </tr><tr>
                                            <td><label>По-батькові</label></td><td><input class="form-control"
                                                    <?php
                                                    if($_SESSION['role']!=2){
                                                        echo "readonly";
                                                    }
                                                    ?>value="<? echo $karta[0]['sname'];?>"
                                                                                 type="text" name="sname" placeholder="Іванович"></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Чи брали участь ви раніше в цьому дослідженні?</label></td>
                                                <label class="hidd" id="h0">Якщо так, вкажіть ідентифікатор учасника <br> в минулому дослідженні (№ анкети)</label>
                                            </td>
                                            <td>
                                               <select name="ychas" class="form-control" onchange="ss(this)">
                                                    <option value="Ні" <? if( $karta[0]['ychas']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['ychas']=='Так'){echo 'selected';}?>>Так</option>

                                                </select>
                                                <input type="text" id='h1' class="form-control" name="nomIss" placeholder="564"
                                                       <?
                                                       if(empty($karta[0]['nomIss'])){
                                                           echo "class='hidd'";
                                                           echo "style='display:none;'";
                                                       }
                                                       else{
                                                           echo "value='{$karta[0]['nomIss']}'";
                                                           echo "style='display:block;'";
                                                       }
                                                       ?>
                                                      >
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="display: flex;flex-direction: row; justify-content: space-between;align-items: flex-end;">
                                                <label>Стать</label></td><td>
                                                <select name="sex" class="form-control" style="width: 80%;">
                                                    <option value="Чоловіча" <? if( $karta[0]['sex']=='Чоловіча'){echo 'selected';}?>>Чоловіча</option>
                                                    <option value="Жіноча" <? if( $karta[0]['sex']=='Жіноча'){echo 'selected';}?>>Жіноча</option>

                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label>Дата нарождения</label>

                                            </td>
                                            <td>
                                                <input type="date" <?php
                                                if($_SESSION['role']!=2){
                                                    echo "readonly";
                                                }
                                                ?>
                                                       value="<? echo $karta[0]['datB'];?>" name="datB" class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td >
                                                <label>Місце народження: населений пункт</label>

                                            </td>
                                            <td>
                                                <input type="text" name="city" value="<? echo $karta[0]['city'];?>" class="form-control" placeholder="Житомир">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Місце народження - район, область</label>

                                            </td>
                                            <td>
                                                <input type="text" name="rajon" value="<? echo $karta[0]['rajon'];?>" class="form-control" placeholder="Житомирський">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Статус роботи</label>

                                            </td>
                                            <td>
                                                <select name="work" class="form-control" >
                                                    <option value="Не працюю, безробітний(а)" <? if( $karta[0]['work']=='Не працюю, безробітний(а)'){echo 'selected';}?>>Не працюю, безробітний(а)</option>
                                                    <option value="Не працюю, інвалідність"  <? if( $karta[0]['work']=='Не працюю, інвалідність'){echo 'selected';}?>>Не працюю, інвалідність</option>
                                                    <option value="Не працюю, відпустка по хворобі"  <? if( $karta[0]['work']=='Не працюю, відпустка по хворобі'){echo 'selected';}?>>Не працюю, відпустка по хворобі</option>
                                                    <option value="На пенції"  <? if( $karta[0]['work']=='На пенції'){echo 'selected';}?>>На пенції</option>
                                                    <option value="Працюю, часткова зайнятість"  <? if( $karta[0]['work']=='Працюю, часткова зайнятість'){echo 'selected';}?>>Працюю, часткова зайнятість</option>
                                                    <option value="Працюю, повна зайнятість"  <? if( $karta[0]['work']=='Працюю, повна зайнятість'){echo 'selected';}?>>Працюю, повна зайнятість</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Інформація про нарождення:</label>

                                            </td>
                                            <td>
                                                <table><tr>
                                                        <td><input  style='position: static;' type="radio" <? if( $karta[0]['bearn']=='Народився(лась) вчасно'){echo 'checked';}?> name="bearn" class="form-control" value="Народився(лась) вчасно"></td>
                                                        <td><label>Народився(лась) вчасно</label></td></tr>
                                                    <tr><td><input  style='position: static;' type="radio" <? if( $karta[0]['bearn']=='Народився(лась) передчасно'){echo 'checked';}?> name="bearn" class="form-control" value="Народився(лась) передчасно"></td>
                                                        <td><label>Народився(лась) передчасно</label></td></tr>
                                                    <tr><td><input  style='position: static;' type="radio" name="bearn" class="form-control" <? if( $karta[0]['bearn']=='Народився в _____ тижнів (вказати)'){echo 'checked';}?> value="Народився в _____ тижнів (вказати)"></td>
                                                        <td><div style="display: flex;flex-direction: row;"><label>Народився в   </label> <input type="text" value="<? echo $karta[0]['week'];?>" style='width: 60px;margin-left: 4px;margin-right: 4px;' name="week" class="form-control"><label>   тижнів (вказати)</label></div></td></tr>
                                                    <tr><td><input   style='position: static;' type="radio" name="bearn" class="form-control" value="Не знаю" <? if( $karta[0]['bearn']=='Не знаю'){echo 'checked';}?> ></td><td><label>Не знаю</label></td></tr>
                                                </table></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Вага при народженні:</label>

                                            </td>
                                            <td>
                                                <table><tr>
                                                        <td><input style='position: static;' type="radio" name="vesR" <? if( $karta[0]['vesR']=='Низька (при нарожденні я був(ла) худим(ой))'){echo 'checked';}?> class="form-control" value="Низька (при нарожденні я був(ла) худим(ой))"></td>
                                                        <td><label>Низька (при нарожденні я був(ла) худим(ой))</label></td></tr>
                                                    <tr><td><input  style='position: static;' type="radio" <? if( $karta[0]['vesR']=='Нормальна'){echo 'checked';}?> name="vesR" class="form-control" value="Нормальна"></td>
                                                        <td><label>Нормальна</label></td></tr>
                                                    <tr><td><input  style='position: static;' type="radio" <? if( $karta[0]['vesR']=='Я був (була) при народженні великим малюком'){echo 'checked';}?> name="vesR" class="form-control" value="Я був (була) при народженні великим малюком"></td>
                                                        <td><label>Я був (була) при народженні великим малюком</label></td></tr>
                                                    <tr><td><input   style='position: static;' type="radio" name="vesR" <? if( $karta[0]['vesR']=='Не знаю'){echo 'checked';}?> class="form-control" value="Не знаю"></td><td><label>Не знаю</label></td></tr>
                                                </table></td>
                                        </tr>

                                    </table>
                                </fieldset>

                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile">
                                <fieldset style="margin-top: 30px;">
                                    <h4>2. Сімейний анамнез</h4>
                                    <table class='mainT'>
                                        <tr style="background: #295b8e; color:white;"><td colspan="2"><label>Батько:</label></td></tr>
                                        <tr>
                                            <td><label>Прізвище</label></td><td><input class="form-control" value="<? echo $karta[0]['fnameO'];?>" type="text" name="fnameO" placeholder="Іванов"></td>
                                        </tr><tr><td><label>Ім'я</label></td><td><input class="form-control" type="text" value="<? echo $karta[0]['nameO'];?>" name="nameO" placeholder="Іван"></td>
                                        </tr><tr>    <td><label>По-батькові</label></td><td><input class="form-control" type="text" value="<? echo $karta[0]['snameO'];?>" name="snameO" placeholder="Іванович"></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Чи брав участь Батько раніше в цьому дослідженні?</label>
                                                <label class="hidd" id="h4">Якщо так, вкажіть ідентифікатор
                                                    батька <br> в минулому дослідженні
                                                    (№ анкети)</label>
                                            </td>
                                            <td>
                                                <select name="ychasOtez" class="form-control" onchange="ss2(this)">
                                                    <option value="Ні" <? if( $karta[0]['ychasOtez']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['ychasOtez']=='Так'){echo 'selected';}?>>Так</option>

                                                </select>
                                                <input type="text" id="h5"
                                                    <?
                                                    if(empty($karta[0]['nomIssO'])){

                                                        echo "style='display:none;'";
                                                    }
                                                    else{
                                                        echo "value='{$karta[0]['nomIssO']}'";
                                                        echo "style='display:block;'";
                                                    }
                                                    ?>

                                                       class="form-control hidd" name="nomIssO" placeholder="564">
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <label>Дата народження</label></td><td>
                                                <input type="date" name="datBOtez" value="<? echo $karta[0]['datBOtez'];?>" class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label>Місце народження: область</label></td><td>
                                                <input type="text" name="oblOtez" class="form-control" value="<? echo $karta[0]['oblOtez'];?>" placeholder="Житомирська">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label>Місце народження: місто</label></td><td>
                                                <input type="text" name="cityOtez" class="form-control" value="<? echo $karta[0]['cityOtez'];?>" placeholder="Житомир">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Чи хворів на діабет?</label>
                                                <label class="hidd1" id="h2">Якщо так - яке було лікування у батька?</label>
                                            </td>

                                            <td>
                                                <select name="lechOtez" class="form-control" onchange="ss1(this)">
                                                    <option value="Ні" <? if( $karta[0]['lechOtez']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['lechOtez']=='Так'){echo 'selected';}?>>Так</option>

                                                </select>
                                                <select id="h3"  name="lechOtezKak"  class=" form-control hidd"
                                                    <?
                                                    if($karta[0]['lechOtez']=='Так'){

                                                        echo "style='display:block;'";
                                                    }

                                                    ?>

                                                >
                                                    <option <? if( $karta[0]['lechOtezKak']=='Діета'){echo 'selected';}?>> Діета</option>
                                                    <option <? if( $karta[0]['lechOtezKak']=='Таблетки'){echo 'selected';}?>> Таблетки</option>
                                                    <option <? if( $karta[0]['lechOtezKak']=='Інсулін'){echo 'selected';}?>> Інсулін</option>
                                                    <option <? if( $karta[0]['lechOtezKak']=='Комбіноване - таблетки і інсулін'){echo 'selected';}?>> Комбіноване - таблетки і інсулін</option>
                                                    <option <? if( $karta[0]['lechOtezKak']=='Не знаю'){echo 'selected';}?>> Не знаю</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr style="background: #295b8e;color:white;"><td colspan="2"><label>Мати:</label></td></tr>
                                        <tr>
                                            <td><label>Прізвище</label></td><td><input class="form-control" value="<? echo $karta[0]['fnameM'];?>" type="text" name="fnameM" placeholder="Іванов"></td>
                                        </tr><tr>    <td><label>Ім'я</label></td><td><input class="form-control" type="text" value="<? echo $karta[0]['nameM'];?>" name="nameM" placeholder="Іван"></td>
                                        </tr><tr>     <td><label>По-батькові</label></td><td><input class="form-control" type="text" name="snameM" value="<? echo $karta[0]['snameM'];?>" placeholder="Іванович"></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Чи брала участь Мати раніше в цьому
                                                    дослідженні?</label>
                                                <label class="hidd" id="h6">Якщо так, вкажіть ідентифікатор
                                                    матері <br> в минулому дослідженні
                                                    (№ анкети)</label>
                                            </td>
                                            <td>
                                                <select name="ychasM" class="form-control" onchange="ss3(this)">
                                                    <option value="Ні" <? if( $karta[0]['ychasM']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['ychasM']=='Так'){echo 'selected';}?>>Так</option>

                                                </select>
                                                <input type="text" id="h7"
                                                    <?
                                                    if(empty($karta[0]['nomIssM'])){

                                                        echo "style='display:none;'";
                                                    }
                                                    else{
                                                        echo "value='{$karta[0]['nomIssM']}'";
                                                        echo "style='display:block;'";
                                                    }
                                                    ?>

                                                       class="form-control hidd" name="nomIssM" placeholder="564">
                                            </td>
                                        </tr>
                                        <tr>

                                            <td>
                                                <label>Дата народження</label></td><td>
                                                <input type="date" name="datBM" value="<? echo $karta[0]['datBM'];?>" class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label>Місце народження: область</label></td><td>
                                                <input type="text" name="oblM" class="form-control" value="<? echo $karta[0]['oblM'];?>" placeholder="Житомирска">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label>Місце народження: місто</label></td><td>
                                                <input type="text" name="cityM" class="form-control" value="<? echo $karta[0]['cityM'];?>" placeholder="Житомир">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Чи хворіла на діабет?</label>
                                                <label class="hidd1" id="h8">Якщо так - яке було лікування у матері?</label>
                                            </td>

                                            <td>
                                                <select name="lechM" class="form-control" onchange="ss4(this)">
                                                    <option value="Ні" <? if( $karta[0]['lechM']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['lechM']=='Так'){echo 'selected';}?>>Так</option>

                                                </select>
                                                <select id="h9"  name="lechMKak"  class=" form-control hidd"

                                                    <?
                                                    if($karta[0]['lechM']=='Так'){

                                                        echo "style='display:block;'";
                                                    }

                                                    ?>
                                                >
                                                    <option <? if( $karta[0]['lechMKak']=='Діета'){echo 'selected';}?>> Діета</option>
                                                    <option <? if( $karta[0]['lechMKak']=='Таблетки'){echo 'selected';}?>> Таблетки</option>
                                                    <option <? if( $karta[0]['lechMKak']=='Інсулін'){echo 'selected';}?>> Інсулін</option>
                                                    <option <? if( $karta[0]['lechMKak']=='Комбіноване - таблетки і інсулін'){echo 'selected';}?>> Комбіноване - таблетки і інсулін</option>
                                                    <option <? if( $karta[0]['lechMKak']=='Не знаю'){echo 'selected';}?>> Не знаю</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Чи хворіли на діабет рідні
                                                    брати сестри?</label>
                                                <label class="hidd1" id="h10">Якщо так – яке було лыкування у
                                                    братыв/сестер?</label>
                                            </td>
                                            <td>
                                                <select name="lechBS" class="form-control" onchange="ss5(this)">
                                                    <option value="Ні" <? if( $karta[0]['lechBS']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['lechBS']=='Так'){echo 'selected';}?>>Так</option>

                                                </select>
                                                <select id="h11"  name="lechBSKak"  class=" form-control hidd"
                                                    <?
                                                    if($karta[0]['lechBS']=='Так'){

                                                        echo "style='display:block;'";
                                                    }

                                                    ?>
                                                >
                                                    <option <? if( $karta[0]['lechBSKak']=='Діета'){echo 'selected';}?>> Діета</option>
                                                    <option <? if( $karta[0]['lechBSKak']=='Таблетки'){echo 'selected';}?>> Таблетки</option>
                                                    <option <? if( $karta[0]['lechBSKak']=='Інсулін'){echo 'selected';}?>> Інсулін</option>
                                                    <option <? if( $karta[0]['lechBSKak']=='Комбіноване - таблетки і інсулін'){echo 'selected';}?>> Комбіноване - таблетки і інсулін</option>
                                                    <option <? if( $karta[0]['lechBSKak']=='Не знаю'){echo 'selected';}?>> Не знаю</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                                </fieldset>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="messages">
                                <fieldset style="margin-top: 30px;">
                                    <h4>3. Інформація по голодомору</h4>
                                    <table class='mainT'>
                                        <tr>
                                            <td>
                                                <label>Голодувала ваша сім'я в 1932-33, 1941-45
                                                    і / або 1946-47 роках:</label>
                                                <label class="hidd" id="h12">Якщо сім`я голодувала - вказати період
                                                    голодування сім`ї
                                                </label>
                                            </td>
                                            <td>
                                                <select name="golodSem" class="form-control" onchange="ss6(this)">
                                                    <option value="Ні" <? if( $karta[0]['golodSem']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['golodSem']=='Так'){echo 'selected';}?>>Так</option>
                                                    <option value="Не знаю" <? if( $karta[0]['golodSem']=='Не знаю'){echo 'selected';}?>>Не знаю</option>
                                                </select>
                                                <input type="text" id="h13"
                                                    <?
                                                    if($karta[0]['golodSem']=='Так'){

                                                        echo "style='display:block;'";
                                                    }

                                                    ?>
                                                       class="form-control hidd"  value="<? echo $karta[0]['periodGolod'];?>" name="periodGolod" placeholder="564">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Мати:</label></td><td>
                                                <select name="golodM" class="form-control">
                                                    <option value="" <? if( $karta[0]['golodM']==''){echo 'selected';}?>></option>
                                                    <option value="1932-33" <? if( $karta[0]['golodM']=='1932-33'){echo 'selected';}?>>1932-33</option>
                                                    <option value="1941-45" <? if( $karta[0]['golodM']=='1941-45'){echo 'selected';}?>>1941-45</option>
                                                    <option value="1946-47" <? if( $karta[0]['golodM']=='1946-47'){echo 'selected';}?>>1946-47</option>

                                                    <option value="Не знаю" <? if( $karta[0]['golodM']=='Не знаю'){echo 'selected';}?>>Не знаю</option>
                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label>Батько:</label></td><td>
                                                <select name="golodO" class="form-control">
                                                    <option value="" <? if( $karta[0]['golodO']==''){echo 'selected';}?>></option>
                                                    <option value="1932-33" <? if( $karta[0]['golodO']=='1932-33'){echo 'selected';}?>>1932-33</option>
                                                    <option value="1941-45" <? if( $karta[0]['golodO']=='1941-45'){echo 'selected';}?>>1941-45</option>
                                                    <option value="1946-47" <? if( $karta[0]['golodO']=='1946-47'){echo 'selected';}?>>1946-47</option>

                                                    <option value="Не знаю" >Не знаю</option>
                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label>Родные брати/сестри:</label></td><td>
                                                <select name="golodSister" class="form-control">
                                                    <option value="" <? if( $karta[0]['golodSister']==''){echo 'selected';}?>></option>
                                                    <option value="1932-33" <? if( $karta[0]['golodSister']=='1932-33'){echo 'selected';}?>>1932-33</option>
                                                    <option value="1941-45" <? if( $karta[0]['golodSister']=='1941-45'){echo 'selected';}?>>1941-45</option>
                                                    <option value="1946-47"  <? if( $karta[0]['golodSister']=='1946-47'){echo 'selected';}?>>1946-47</option>

                                                    <option value="Не знаю" <? if( $karta[0]['golodSister']=='Не знаю'){echo 'selected';}?>>Не знаю</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Померли чи мати / батько / рідні брати
                                                    або сестри з причин, пов`язаних з
                                                    голодом в 1932-33, 1941-45 і / або
                                                    1946-47 році:</label></td><td>
                                                <select name="death1" class="form-control">
                                                    <option value="Ні" <? if( $karta[0]['death1']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так-1932-33" <? if( $karta[0]['death1']=='Так-1932-33'){echo 'selected';}?>>Так-1932-33</option>
                                                    <option value="Так-1941-45" <? if( $karta[0]['death1']=='Так-1941-45'){echo 'selected';}?>>Так-1941-45</option>
                                                    <option value="Так-1946-47" <? if( $karta[0]['death1']=='Так-1946-47'){echo 'selected';}?>>Так-1946-47</option>

                                                    <option value="Не знаю" <? if( $karta[0]['death1']=='Не знаю'){echo 'selected';}?>>Не знаю</option>
                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label>Пережили ви період голоду в
                                                    1932-33, 1941-45 і / або 1946-47 роках
                                                    (Голодували ви?). Якщо так - вказати
                                                    період:</label></td><td>
                                                <select name="death2" class="form-control">
                                                    <option value="Ні" <? if( $karta[0]['death2']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так-1932-33" <? if( $karta[0]['death2']=='Так-1932-33'){echo 'selected';}?>>Так-1932-33</option>
                                                    <option value="Так-1941-45" <? if( $karta[0]['death2']=='Так-1941-45'){echo 'selected';}?>>Так-1941-45</option>
                                                    <option value="Так-1946-47" <? if( $karta[0]['death2']=='Так-1946-47'){echo 'selected';}?>>Так-1946-47</option>

                                                    <option value="Не знаю" <? if( $karta[0]['death2']=='Не знаю'){echo 'selected';}?>>Не знаю</option>
                                                </select>
                                            </td>

                                        </tr>
                                    </table>
                                </fieldset>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="settings">
                                <fieldset style="margin-top: 30px;">
                                    <h4>1. Антропометричні дані</h4>
                                    <table class='mainT'>
                                        <tr>
                                            <td><label>Вага (см)</label></td><td><input class="form-control" value="<? echo $karta[0]['ves'];?>" type="text" name="ves" placeholder="72"></td>
                                        </tr><tr> <td><label>Зріст (см)</label></td><td><input class="form-control" value="<? echo $karta[0]['rost'];?>" type="text" name="rost" placeholder="172"></td>
                                        </tr><tr>    <td><label>Об`єм талії (см)</label></td><td><input class="form-control" value="<? echo $karta[0]['tal'];?>" type="text" name="tal" placeholder="90"></td>
                                        </tr>
                                        <tr>
                                            <td><label>Окружність стегон (см)</label></td><td><input class="form-control" value="<? echo $karta[0]['bed'];?>" type="text" name="bed" placeholder="100"></td>
                                        </tr><tr>   <td><label>Індекс маси тіла (кг/м 2 )</label></td><td><input class="form-control" value="<? echo $karta[0]['index'];?>"type="text" name="index" ></td>
                                        </tr><tr>   <td><label>Систолічний артеріальний тиск (сидячи)</label></td><td><select class="form-control" name="art">
                                                    <option value="10`" <? if( $karta[0]['art']=='10`'){echo 'selected';}?>>10`</option>
                                                    <option value="0`" <? if( $karta[0]['art']=='0`'){echo 'selected';}?>>0`</option>
                                                </select></td>
                                        </tr>
                                        <tr>

                                            <td><label>Діастолічний артеріальний тиск (сидячи)</label></td><td><select class="form-control" name="art1">
                                                    <option value="10`" <? if( $karta[0]['art1']=='10`'){echo 'selected';}?>>10`</option>
                                                    <option value="0`" <? if( $karta[0]['art1']=='0`'){echo 'selected';}?>>0`</option>
                                                </select></td>
                                                                                   </tr>
                                    </table>
                                </fieldset>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="zhitt">
                                <fieldset style="margin-top: 30px;">
                                    <h4>2. Спосіб життя</h4>
                                    <table class='mainT' style="width: 100%;">

                                        <tr>
                                            <td><label>Ви палите?</label></td><td>
                                                <select class="form-control" name="smouk">
                                                    <option value="Ні" <? if( $karta[0]['smouk']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['smouk']=='Так'){echo 'selected';}?>>Так</option>
                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td><label>Якщо курите, як часто?</label></td><td>
                                                <select class="form-control" name="smoukTime">
                                                    <option value="Кожен день" <? if( $karta[0]['smoukTime']=='Кожен день'){echo 'selected';}?>>Кожен день</option>
                                                    <option value="Кілька днів на тиждень" <? if( $karta[0]['smoukTime']=='Кілька днів на тиждень'){echo 'selected';}?>>Кілька днів на тиждень</option>
                                                    <option value="Дуже рідко" <? if( $karta[0]['smoukTime']=='Дуже рідко'){echo 'selected';}?>>Дуже рідко</option>
                                                </select></td>
                                        </tr><tr>
                                            <td><label>Кількість викурених сигарет за
                                                    1 день</label></td><td><input class="form-control" type="text" value="<? echo $karta[0]['smokeKol'];?>" name="smokeKol" placeholder="10"></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Як часто Ви вживаєте алкоголь?</label>

                                            </td>
                                            <td>
                                                <select name="alkogol" class="form-control">
                                                    <option value="Ніколи" <? if( $karta[0]['alkogol']=='Ніколи'){echo 'selected';}?>>Ніколи</option>
                                                    <option value="Менше 1 разу на місяць" <? if( $karta[0]['alkogol']=='Менше 1 разу на місяць'){echo 'selected';}?>>Менше 1 разу на місяць</option>
                                                    <option value="1-3 раза в місяц" <? if( $karta[0]['alkogol']=='1-3 раза в місяц'){echo 'selected';}?>>1-3 раза в місяц</option>
                                                    <option value="1-2 раза в неділю" <? if( $karta[0]['alkogol']=='1-2 раза в неділю'){echo 'selected';}?>>1-2 раза в неділю</option>
                                                    <option value="3-4 раза в неділю" <? if( $karta[0]['alkogol']=='3-4 раза в неділю'){echo 'selected';}?>>3-4 раза в неділю</option>
                                                    <option value="Практично кожен день" <? if( $karta[0]['alkogol']=='Практично кожен день'){echo 'selected';}?>>Практично кожен день</option>

                                                </select>

                                            </td>
                                        </tr>
                                    </table>
                                </fieldset>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="hist">
                                <fieldset style="margin-top: 30px;">
                                    <h4>3. Історія хвороби:</h4>
                                    <table class='mainT'>
                                        <tr>
                                            <td>
                                                <label>Тип діабету:</label>

                                            </td>
                                            <td>
                                                <select name="typeDiab" class="form-control">
                                                    <option value="ЦД 1 типу" <? if( $karta[0]['typeDiab']=='ЦД 1 типу'){echo 'selected';}?>>ЦД 1 типу</option>
                                                    <option value="ЦД 2 типу" <? if( $karta[0]['typeDiab']=='ЦД 2 типу'){echo 'selected';}?> >ЦД 2 типу</option>
                                                    <option value="Латентний аутоімунний (LADA)" <? if( $karta[0]['typeDiab']=='Латентний аутоімунний (LADA)'){echo 'selected';}?>>Латентний аутоімунний
                                                        (LADA)</option>
                                                    <option value="MODY-діабет" <? if( $karta[0]['typeDiab']=='MODY-діабет'){echo 'selected';}?>>MODY-діабет</option>
                                                    <option value="Панкреатогенний" <? if( $karta[0]['typeDiab']=='Панкреатогенний'){echo 'selected';}?>>Панкреатогенний
                                                    </option>
                                                    <option value="Інший" <? if( $karta[0]['typeDiab']=='Інший'){echo 'selected';}?>>Інший
                                                    </option>
                                                </select>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Рік постановки діагнозу:</label></td><td>
                                                <input type="text" name="yearD" value="<? echo $karta[0]['yearD'];?>" class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label>Вік дебюту діабету (років):</label></td><td>
                                                <input type="text" name="vekD" value="<? echo $karta[0]['vekD'];?>" class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label>Тривалість діабету (років):</label></td><td>
                                                <input type="text" name="longD" value="<? echo $karta[0]['longD'];?>" class="form-control">
                                            </td>
                                        </tr>

                                    </table>
                                </fieldset>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="bol">
                                <fieldset style="margin-top: 30px;">
                                    <h4>4. Хвороби, що супруводжують:</h4>
                                    <table class='mainT'>
                                        <tr>
                                            <td >
                                                <label>Інфекційні:</label>

                                            </td>
                                            <td>
                                                <textarea name="inf" class="form-control"><? echo $karta[0]['inf'];?></textarea>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td >
                                                <label>Аутоімунні (вказати):</label>

                                            </td>
                                            <td>
                                                <textarea name="aut" class="form-control"><? echo $karta[0]['aut'];?></textarea>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td >
                                                <label>Вроджені вади (вказати):</label>

                                            </td>
                                            <td>
                                                <textarea name="porok" class="form-control"><? echo $karta[0]['porok'];?></textarea>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td >
                                                <label>Інші ендокринні (вказати):</label>

                                            </td>
                                            <td>
                                                <textarea name="endoc" class="form-control"><? echo $karta[0]['endoc'];?></textarea>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td >
                                                <label>Інша патологія (вказати):</label>

                                            </td>
                                            <td>
                                                <textarea name="patol" class="form-control"><? echo $karta[0]['patol'];?></textarea>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td >
                                                <label>Класифікація супутніх захворювань по DRG:</label>

                                            </td>
                                            <td>
                                                <input type="text" name="DGR" value="<? echo $karta[0]['DGR'];?>" class="form-control">

                                            </td>
                                        </tr>
                                    </table>
                                </fieldset>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="ser">
                                <fieldset style="margin-top: 30px;">
                                    <h4>1. Обстеження серцево-судинної системи</h4>
                                    <table class='mainT'>
                                        <tr>
                                            <td style="display: flex;"><label>Чи був у вас інфаркт?</label></td><td>
                                                <select name="infarkt" class="form-control" onchange="addIn(this.value)">
                                                    <option value="Ні" <? if( $karta[0]['infarkt']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['infarkt']=='Так'){echo 'selected';}?>>Так</option>
                                                </select>
                                                                                               <?php
                                                    if( $karta[0]['infarkt']=='Так'){
                                                        echo "<span id='ki' style='display: flex;'>
<label id='kolinfL'>Введіть кількість інфарктів</label></td><td>
<span id='ki2' style='display: flex;'><input type='text' id='kolinf' value='{$karta[0]['kolInf']}' name='kolinf' 
 class='form-control' onchange='addPol(this.value)'> </span>";
                                                        ?>


                                            <table id="ttt" width="250px">
                                                <?
                                                $inf=explode(';',$karta[0]['datInf']);

                                                for($i=0;$i<$karta[0]['kolInf'];$i++){
                                                    ?>
                                                    <tr id="rowDat<?echo $i;?>"><td><label id="datInfL<?echo $i;?>">Інфаркт № 1(рік)</label></td>
                                                        <td><input type="text" name="datInf[]" value='<? echo $inf[$i];?>' id="datInf<?echo $i;?>" class="form-control"></td></tr>

                                                <?
                                                }
                                                ?>
                                    </table></td>


                                                    <?}
                                                    else{
                                                        ?>
                                                        <span id='ki' style='display: flex;'>
                                                        </span>
                                                            <span id="ki2" style="display: flex;"></span>
                                                            <table id="ttt" width="250px"></table></td>
                                            <?
                                                    }
                                                    ?>


                                        </tr>
                                        <tr>
                                            <td style="display: flex;"><label>Чи був у вас інсульт?</label></td><td>
                                                <select name="insult" class="form-control" onchange="addIn1(this.value)">
                                                    <option value="Ні" <? if( $karta[0]['insult']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['insult']=='Так'){echo 'selected';}?>>Так</option>
                                                </select>

                                                <?php
                                                    if( $karta[0]['insult']=='Так'){
                                                echo "<span id='kiIns' style='display: flex;'>
<label id='kolinsL'>Введіть кількість інсультів</label></td><td>
<span id='kiIns2' style='display: flex;'><input type='text' id='kolins' value='{$karta[0]['kolIns']}' name='kolins' 
 class='form-control' onchange='addPol1(this.value)'> </span>";
                                                ?>
                                                <table id="tttIns" width="250px">
                                                    <?
                                                    $inf=explode(';',$karta[0]['datIns']);

                                                    for($i=0;$i<$karta[0]['kolIns'];$i++){
                                                        ?>
                                                        <tr id="rowDatIns<?echo $i;?>"><td><label id="datInsL<?echo $i;?>">Інфаркт № 1(рік)</label></td>
                                                            <td><input type="text" name="datIns[]" value='<? echo $inf[$i];?>' id="datIns<?echo $i;?>" class="form-control"></td></tr>

                                                        <?
                                                    }
                                                    ?>
                                                </table>
                                                </td>
                                            <td>
                                               <? } else{
                                                ?>
                                                <span id='kiIns' style='display: flex;'>
                                                        </span>
                                                <span id="kiIns2" style="display: flex;"></span>
                                                <table id="tttIns" width="250px"></table></td>
                                            <?
                                            }
                                            ?>

                                        </tr>
                                        <tr>
                                            <td style="display: flex;"><label>Хронічна серцева
                                                    недостатність - вказати стадію</label>

                                            </td>
                                            <td>
                                                <select name="hronSerd" class="form-control" onchange="addStad(this.value)">
                                                    <option value="Ні" <? if( $karta[0]['hronSerd']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Стадія I" <? if( $karta[0]['hronSerd']=='Стадія I'){echo 'selected';}?>>Стадія I</option>
                                                    <option value="Стадія II, Період А (стадія IIа)" <? if( $karta[0]['hronSerd']=='Стадія II, Період А (стадія IIа)'){echo 'selected';}?>>Стадія II, Період А (стадія IIа)</option>
                                                    <option value="Стадія II, Період Б (стадія IIб)" <? if( $karta[0]['hronSerd']=='Стадія II, Період Б (стадія IIб)'){echo 'selected';}?>>Стадія II, Період Б (стадія IIб)</option>
                                                    <option value="Стадія III, Період А (стадія IIIа)" <? if( $karta[0]['hronSerd']=='Стадія III, Період А (стадія IIIа)'){echo 'selected';}?>>Стадія III, Період А (стадія IIIа)</option>
                                                    <option value="Стадія III, Період Б (стадія IIIб)" <? if( $karta[0]['hronSerd']=='Стадія III, Період Б (стадія IIIб)'){echo 'selected';}?>>Стадія III, Період Б (стадія IIIб)</option>
                                                </select>

                                                <? if($karta[0]['hronSerd']!='Ні'){
                                                    ?>
                                                    <span id="kiStad" style="display: flex;"><label id="datStadL">Дата постановки (рік)</label></span>
                                                    <span id="kiStad2" style="display: flex; width: 100px;"><input type="text" name="datStad" value='<? echo $karta[0]['datStad'];?>' id="datStad" class="form-control" width="100px"></span>
                                                <?}else{
                                                    ?>

                                                <span id="kiStad" style="display: flex;"></span>
                                                <span id="kiStad2" style="display: flex; width: 100px;"></span>
                                                <?php
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                    </table>
                                </fieldset>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="diab">
                                <fieldset style="margin-top: 30px;">
                                    <h4>1. Обстеження очей</h4>
                                    <table class='mainT'>
                                        <tr>
                                            <td style="display: flex;"><label class="lb1">Дата обстеження очного дна: дд-мм-рр</label>

                                            </td>
                                            <td><input type="date" value='<? echo $karta[0]['glaz'];?>'class="form-control" name="glaz"></td>

                                        </tr>
                                        <tr>
                                            <td style="display: flex; width: 500px;"><label class="lb1">Діабетична ретинопатія?</label></td><td>
                                                <select name="diabDiab" class="form-control" onchange="addDiab(this.value)">
                                                    <option value="Ні" <? if( $karta[0]['diabDiab']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['diabDiab']=='Так'){echo 'selected';}?>>Так</option>
                                                </select>

                                            <? if($karta[0]['diabDiab']=='Так') {
                                                ?>

                                                <span id="kiDiab"><label id="datDiabL">Дата постановки</label></span>
                                                    <span id="kiDiab2"><input type="date" name="datDiab" id="datDiab" value='<? echo $karta[0]['datDiab'];?>' class="form-control" width="100px"></span>
                                                </td>
                                                <?php
                                            }else{
                                            ?>
                                                <span id="kiDiab"></span>
                                                    <span id="kiDiab2"></span>
                                                </td>
                                            <?
                                            }
                                            ?>
                                        </tr>
                                        <tr>
                                            <td style="display: flex;"><label class="lb1">Непролиферативная ретинопатія?</label></td><td>
                                                <select name="diabNep" class="form-control" onchange="addNep(this.value)">
                                                    <option value="Ні" <? if( $karta[0]['diabNep']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['diabNep']=='Так'){echo 'selected';}?>>Так</option>
                                                </select>

                                            <? if($karta[0]['diabNep']=='Так') {
                                            ?>
                                            <span id="kiNep"><label id="datNepL">Дата постановки</label></span>
                                                <span id="kiNep2"><input type="date" name="datNep" value='<? echo $karta[0]['datNep'];?>' id="datNep" class="form-control" width="100px"></span>
                                            </td>
                                                <?php
                                            }else{
                                            ?>
                                               <span id="kiNep"></span>
                                                    <span id="kiNep2"></span>
                                                </td>
                                                <?
                                            }
                                            ?>
                                        </tr>
                                        <tr>
                                            <td style="display: flex;"><label class="lb1">Препроліфератівная ретинопатія?</label></td><td>
                                                <select name="diabPrep" class="form-control" onchange="addPrep(this.value)">
                                                    <option value="Ні" <? if( $karta[0]['diabPrep']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['diabPrep']=='Так'){echo 'selected';}?>>Так</option>
                                                </select>

                                            <? if($karta[0]['diabPrep']=='Так') {
                                            ?>
                                            <span id="kiPrep"><label id="datPrepL">Дата постановки</label></span>
                                                <span id="kiPrep2"><input type="date" name="datPrep" value='<? echo $karta[0]['datPrep'];?>' id="datPrep" class="form-control" width="100px"></span>
                                            </td>
                                                <?php
                                            }else{
                                            ?>
                                                <span id="kiPrep"></span>
                                                    <span id="kiPrep2"></span>
                                                </td>
                                                <?
                                            }
                                            ?>
                                        </tr>
                                        <tr>
                                            <td style="display: flex;"><label class="lb1">Пролиферативная ретинопатія?</label></td><td>
                                                <select name="diabPrep2" class="form-control" onchange="addPrep2(this.value)">
                                                    <option value="Ні" <? if( $karta[0]['diabPrep2']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['diabPrep2']=='Так'){echo 'selected';}?>>Так</option>
                                                </select>

                                            <? if($karta[0]['diabPrep2']=='Так') {
                                            ?>
                                            <span id="kiPrep12"><label id="datPrep2L">Дата постановки</label></span></>

                                                <span id="kiPrep22"><input type="date" name="datPrep2" value='<? echo $karta[0]['datPrep2'];?>' id="datPrep2" class="form-control" width="100px"></span>
                                            </td>
                                                <?php
                                            }else{
                                            ?>
                                            <span id="kiPrep2"></span>
                                                <span id="kiPrep22"></span>
                                            </td>
                                                <?
                                            }
                                            ?>
                                        </tr>
                                        <tr>
                                            <td style="display: flex;"><label class="lb1">Сліпота?</label></td><td>
                                                <select name="Slep" class="form-control" onchange="addSlep(this.value)">
                                                    <option value="Ні" <? if( $karta[0]['Slep']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['Так']=='Ні'){echo 'selected';}?>>Так</option>
                                                </select>

                                            <? if($karta[0]['Slep']=='Так') {
                                            ?>
                                            <span id="kiSlep"><label id="datSlepL">Дата постановки</label></span>
                                                <span id="kiSlep2"><input type="date" name="datSlep" value='<? echo $karta[0]['datSlep'];?>' id="datSlep" class="form-control" width="100px"></span>
                                            </td>
                                                <?php
                                            }else{
                                            ?>
                                                <span id="kiSlep"></span>
                                                    <span id="kiSlep2"></span>
                                                </td>

                                                <?
                                            }
                                            ?>
                                        </tr>
                                        <tr>
                                            <td style="display: flex;"><label class="lb1">Лазерне лікування?</label></td><td>
                                                <select name="Lazer" class="form-control" onchange="addLazer(this.value)">
                                                    <option value="Ні" <? if( $karta[0]['Lazer']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['Lazer']=='Так'){echo 'selected';}?>>Так</option>
                                                </select>

                                            <? if($karta[0]['Lazer']=='Так') {
                                            ?>
                                            <span id="kiLazer"><label id="datLazerL">Дата постановки</label></span>
                                                <span id="kiLazer2"><input type="date" name="datLazer" value='<? echo $karta[0]['datLazer'];?>' id="datLazer" class="form-control" width="100px"></span>
                                            </td>
                                                <?php
                                            }else{
                                            ?>
                                               <span id="kiLazer"></span>
                                                    <span id="kiLazer2"></span>
                                                </td>
                                                <?
                                            }
                                            ?>
                                        </tr>
                                        <tr>
                                            <td style="display: flex;"><label class="lb1">Катаракта?</label></td><td>
                                                <select name="Katar" class="form-control" onchange="addKatar(this.value)">
                                                    <option value="Ні" <? if( $karta[0]['Katar']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['Katar']=='Так'){echo 'selected';}?>>Так</option>
                                                </select>

                                            <? if($karta[0]['Katar']=='Так') {
                                            ?>
                                            <span id="kiKatar"><label id="datKatarL">Дата постановки</label></span>
                                                <span id="kiKatar2"><input type="date" name="datKatar" value='<? echo $karta[0]['datKatar'];?>' id="datKatar" class="form-control" width="100px"></span>
                                            </td>
                                                <?php
                                            }else{
                                                ?>
                                                <span id="kiKatar"></span>
                                                    <span id="kiKatar2"></span>
                                                </td>
                                                <?
                                            }
                                            ?>
                                        </tr>
                                        <tr>
                                            <td style="display: flex;"><label class="lb1">Макулопатія?</label></td><td>
                                                <select name="Mal" class="form-control" onchange="addMal(this.value)">
                                                    <option value="Ні" <? if( $karta[0]['Mal']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['Mal']=='Так'){echo 'selected';}?>>Так</option>
                                                </select>

                                            <? if($karta[0]['Mal']=='Так') {
                                                ?>
                                                <span id="kiMal"><label id="datMalL">Дата постановки</label></span>
                                                    <span id="kiMal2"><input type="date" name="datMal" value='<? echo $karta[0]['datMal'];?>' id="datMal" class="form-control" width="100px"></span>
                                                </td>
                                                <?php
                                            }else{
                                                ?>
                                                <span id="kiMal"></span>
                                                    <span id="kiMal2"></span>
                                                </td>
                                                <?
                                            }
                                            ?>

                                        </tr>
                                        <tr>
                                            <td style="display: flex;"><label class="lb1">Глаукома?</label></td><td>
                                                <select name="Glauk" class="form-control" onchange="addGlauk(this.value)">
                                                    <option value="Ні" <? if( $karta[0]['Glauk']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['Glauk']=='Так'){echo 'selected';}?>>Так</option>
                                                </select>

                                            <? if($karta[0]['Glauk']=='Так') {
                                                ?>
                                                <span id="kiGlauk"><label id="datGlaukL">Дата постановки</label></span>
                                                    <span id="kiGlauk2"><input type="date" value='<? echo $karta[0]['datGlauk'];?>' name="datGlauk" id="datGlauk" class="form-control" width="100px"></span>
                                                </td>
                                                <?php
                                            }else{
                                                ?>
                                                <span id="kiGlauk"></span>
                                                    <span id="kiGlauk2"></span>
                                                </td>
                                                <?
                                            }
                                            ?>


                                        </tr>
                                        <tr>
                                            <td style="display: flex;"><label class="lb1">На сьогодні лікування ДР:</label></td><td>
                                                <select name="LechDR" class="form-control">
                                                    <option value="Ні" <? if( $karta[0]['LechDR']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Кортикостероїди (триамцинолон)" <? if( $karta[0]['LechDR']=='Кортикостероїди (триамцинолон)'){echo 'selected';}?>>Кортикостероїди (триамцинолон)</option>
                                                    <option value="Хірургічні втручання" <? if( $karta[0]['LechDR']=='Хірургічні втручання'){echo 'selected';}?>>Хірургічні втручання</option>
                                                    <option value="Інгібітори VEGF" <? if( $karta[0]['LechDR']=='Інгібітори VEGF'){echo 'selected';}?>>Інгібітори VEGF</option>
                                                    <option value="Ін'єкції гіалуронідази" <? if( $karta[0]['LechDR']=='Ін`єкції гіалуронідази'){echo 'selected';}?>>Ін'єкції гіалуронідази</option>
                                                    <option value="Лазерна фотокоагуляція" <? if( $karta[0]['LechDR']=='Лазерна фотокоагуляція'){echo 'selected';}?>>Лазерна фотокоагуляція</option>
                                                    <option value="Інше" <? if( $karta[0]['Інше']=='Ні'){echo 'selected';}?>>Інше</option>
                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label>Дані OST:</label>
                                            </td>
                                            <td>

                                                <input type="file" value='<? echo $karta[0]['OST'];?>' style='background: transparent;' name="OST" class="form-control">
                                            </td>
                                        </tr>
                                    </table>
                                </fieldset>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="nefr">
                                <fieldset style="margin-top: 30px;">
                                    <h4>1. Обстеження нирок</h4>
                                    <table class='mainT'>
                                        <tr>
                                            <td style="display: flex;"><label class="lb1">Дата обстеження нирок:: дд-мм-рр</label>

                                            </td>
                                            <td><input type="date" value='<? echo $karta[0]['pochki'];?>' class="form-control" name="pochki"></td>

                                        </tr>
                                        <tr>
                                            <td style="display: flex; width: 500px;"><label class="lb1">Діабетична нефропатія?</label></td><td>
                                                <select name="diabNefro" class="form-control" onchange="addNefro(this.value)">
                                                    <option value="Ні" <? if( $karta[0]['diabNefro']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['diabNefro']=='Так'){echo 'selected';}?>>Так</option>
                                                </select>

                                            <? if($karta[0]['diabNefro']=='Так') {
                                                ?>
                                                <span id="kiNefro"><label id="datNefroL">Дата постановки</label></span>
                                                    <span id="kiNefro2"><input type="date" name="datNefro" value='<? echo $karta[0]['datNefro'];?>' id="datNefro" class="form-control" width="100px"></span>
                                                </td>
                                                <?php
                                            }else{
                                                ?>
                                                <span id="kiNefro"></span>
                                                    <span id="kiNefro2"></span>
                                                </td>
                                                <?
                                            }
                                            ?>

                                        </tr>
                                        <tr>
                                            <td style="display: flex;"><label class="lb1">Хронічна ниркова недостатність?</label></td><td>
                                                <select name="diabPochNEd" class="form-control" onchange="addPochNEd(this.value)">
                                                    <option value="Ні" <? if( $karta[0]['diabPochNEd']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['diabPochNEd']=='Так'){echo 'selected';}?>>Так</option>
                                                </select>

                                            <? if($karta[0]['diabPochNEd']=='Так') {
                                                ?>
                                              <span id="kiPochNEd"><label id="datPochNEdL">Дата постановки</label></span>
                                                    <span id="kiPochNEd2"><input type="date" value='<? echo $karta[0]['datPochNEd'];?>' name="datPochNEd" id="datPochNEd" class="form-control" width="100px"></span>
                                                </td>
                                                <?php
                                            }else{
                                                ?>
                                                <span id="kiPochNEd"></span>
                                                    <span id="kiPochNEd2"></span>
                                                </td>
                                                <?
                                            }
                                            ?>



                                        </tr>
                                        <tr>
                                            <td style="display: flex;"><label class="lb1">Хронічна ниркова недостатність - це заключна стадія?</label></td><td>
                                                <select name="diabPochSt" class="form-control" onchange="addPochSt(this.value)">
                                                    <option value="Ні" <? if( $karta[0]['diabPochSt']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['diabPochSt']=='Так'){echo 'selected';}?>>Так</option>
                                                </select>

                                            <? if($karta[0]['diabPochSt']=='Так') {
                                                ?>
                                                <span id="kiPochSt"><label id="datPochStL">Дата постановки</label></span>
                                                    <span id="kiPochSt2"><input type="date" name="datPochSt" value='<? echo $karta[0]['datPochSt'];?>' id="datPochSt" class="form-control" width="100px"></span>
                                                </td>
                                                <?php
                                            }else{
                                                ?>
                                                <span id="kiPochSt"></span>
                                                    <span id="kiPochSt2"></span>
                                                </td>
                                                <?
                                            }
                                            ?>

                                        </tr>
                                        <tr>
                                            <td style="display: flex;"><label class="lb1">Діаліз?</label></td><td>
                                                <select name="diabDializ" class="form-control" onchange="addDializ(this.value)">
                                                    <option value="Ні" <? if( $karta[0]['diabDializ']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['diabDializ']=='Так'){echo 'selected';}?>>Так</option>
                                                </select>

                                            <? if($karta[0]['diabDializ']=='Так') {
                                                ?>
                                                <span id="kiDializ"><label id="datDializL">Дата постановки</label></span>
                                                    <span id="kiDializ2"><input type="date" value='<? echo $karta[0]['datDializ'];?>' name="datDializ" id="datDializ" class="form-control" width="100px"></span>
                                                </td>
                                                <?php
                                            }else{
                                                ?>
                                                <span id="kiDializ"></span>
                                                    <span id="kiDializ2"></span>
                                                </td>
                                                <?
                                            }
                                            ?>



                                        </tr>

                                        <tr>
                                            <td style="display: flex;"><label class="lb1">Поточні методи лікування:
                                                    ліки (назви та група):</label>

                                            </td>
                                            <td>
                                                <select name="LechPoch" class="form-control">
                                                    <option value="Ні" <? if( $karta[0]['LechPoch']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Інгібітори АПФ" <? if( $karta[0]['LechPoch']=='Інгібітори АПФ'){echo 'selected';}?>>Інгібітори АПФ</option>
                                                    <option value="Прямі інгібітори реніну" <? if( $karta[0]['LechPoch']=='Прямі інгібітори реніну'){echo 'selected';}?>>Прямі інгібітори реніну</option>
                                                    <option value="Діуретики" <? if( $karta[0]['LechPoch']=='Діуретики'){echo 'selected';}?>>Діуретики</option>
                                                    <option value="Блокатори Са-каналів" <? if( $karta[0]['LechPoch']=='Блокатори Са-каналів'){echo 'selected';}?>>Блокатори Са-каналів</option>
                                                    <option value="Бета-адреноблокатори" <? if( $karta[0]['LechPoch']=='Бета-адреноблокатори'){echo 'selected';}?>>Бета-адреноблокатори</option>
                                                    <option value="Препарати заліза" <? if( $karta[0]['LechPoch']=='Препарати заліза'){echo 'selected';}?>>Препарати заліза</option>
                                                    <option value="Інше" <? if( $karta[0]['LechPoch']=='Інше'){echo 'selected';}?>>Інше</option>
                                                </select>
                                            </td>

                                        </tr>
                                    </table>
                                </fieldset>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="pol">
                                <fieldset style="margin-top: 30px;">
                                    <h4>1.Полінейроангіопатія</h4>
                                    <table class='mainT' >
                                        <tr>
                                            <td ><label class="lb1">Дата обстеження: дд-мм-рр</label>

                                            </td>
                                            <td><input type="date" value='<? echo $karta[0]['datPoli'];?>' class="form-control" name="datPoli"></td>

                                        </tr>
                                        <tr>
                                            <td ><label class="lb1">Ангіопатія нижніх кінцівок?</label></td><td>
                                                <select name="diabAngin" class="form-control" onchange="addAngin(this.value)">
                                                    <option value="Ні" <? if( $karta[0]['diabAngin']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['diabAngin']=='Так'){echo 'selected';}?>>Так</option>
                                                </select>

                                            <? if($karta[0]['diabAngin']=='Так') {
                                                ?>
                                                <span id="kiAngin"><label id="datAnginL">Дата постановки</label></span>
                                                    <br><span id="kiAngin3"><label id="kakAng">Яка ангіопатія?</label></span>
                                                    <span id="kiAngin2"><input type="date" name="datAngin" value='<? echo $karta[0]['datAngin'];?>' id="datAngin" class="form-control" width="100px"></span>
                                                    <br><span id="kiAngin4"><select id="kakAngio" name="kakAngio" class="form-control">
                                                            <option <? if( $karta[0]['kakAngio']=='пальців стоп'){echo 'selected';}?>>пальців стоп</option>
                                                            <option <? if( $karta[0]['kakAngio']=='вище стопи до коліна'){echo 'selected';}?>>вище стопи до коліна</option>
                                                            <option <? if( $karta[0]['kakAngio']=='вище коліна'){echo 'selected';}?>>вище коліна</option>
                                                        </select></span>
                                                </td>
                                                <?php
                                            }else{
                                                ?>
                                                <span id="kiAngin"></span>
                                                    <br><span id="kiAngin3"></span>
                                                    <span id="kiAngin2"></span>
                                                    <br><span id="kiAngin4"></span>
                                                </td>
                                                <?
                                            }
                                            ?>


                                        </tr>
                                        <tr>
                                            <td ><label class="lb1">Периферична нейропатія?</label></td><td>
                                                <select name="diabNejr" class="form-control" onchange="addNejr(this.value)">
                                                    <option value="Ні" <? if( $karta[0]['diabNejr']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['diabNejr']=='Так'){echo 'selected';}?>>Так</option>
                                                </select>

                                            <? if($karta[0]['diabNejr']=='Так') {
                                                ?>
                                                <span id="kiNejr"><label id="datNejrL">Дата постановки</label></span>
                                              >
                                                    <span id="kiNejr2"><input type="date" value='<? echo $karta[0]['datNejr'];?>' name="datNejr" id="datNejr" class="form-control" width="100px"></span>

                                                </td>
                                                <?php
                                            }else{
                                                ?>
                                                <span id="kiNejr"></span>

                                                    <span id="kiNejr2"></span>

                                                </td>
                                                <?
                                            }
                                            ?>


                                        </tr>
                                        <tr>
                                            <td ><label class="lb1">Чи бувають незвичайні відчуття в стопах?</label></td><td>
                                                <select name="diabStopp" class="form-control" >
                                                    <option value="Ні, все нормально" <? if( $karta[0]['diabStopp']=='Ні, все нормально'){echo 'selected';}?>>Ні, все нормально</option>
                                                    <option value="Оніміння" <? if( $karta[0]['diabStopp']=='Оніміння'){echo 'selected';}?>>Оніміння</option>
                                                    <option value="Поколювання" <? if( $karta[0]['diabStopp']=='Поколювання'){echo 'selected';}?>>Поколювання</option>
                                                    <option value="Мурашки" <? if( $karta[0]['diabStopp']=='Мурашки'){echo 'selected';}?>>Мурашки</option>
                                                    <option value="Печіння" <? if( $karta[0]['diabStopp']=='Печіння'){echo 'selected';}?>>Печіння</option>
                                                    <option value="Підвищено чутливість" <? if( $karta[0]['diabStopp']=='Підвищено чутливість'){echo 'selected';}?>>Підвищено чутливість</option>
                                                    <option value="Знижено чутливості" <? if( $karta[0]['diabStopp']=='Знижено чутливості'){echo 'selected';}?>>Знижено чутливості</option>
                                                    <option value="Складнощі при русі" <? if( $karta[0]['diabStopp']=='Складнощі при русі'){echo 'selected';}?>>Складнощі при русі</option>
                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td><label class="lb1">Чи є біль в обох ногах?</label></td><td>
                                                <select name="Bol" class="form-control" >
                                                    <option value="Ні, болю немає" <? if( $karta[0]['Bol']=='Ні, болю немає'){echo 'selected';}?>>Ні, болю немає</option>
                                                    <option value="Ні, біль з одного боку" <? if( $karta[0]['Bol']=='Ні, біль з одного боку'){echo 'selected';}?>>Ні, біль з одного боку</option>
                                                    <option value="Так" <? if( $karta[0]['Bol']=='Так'){echo 'selected';}?>>Так</option>
                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Якщо біль в обох стопах, як вона
                                                    проявляється?</label></td><td>
                                                <select name="Boltwo" class="form-control" style="width: 70%;">
                                                    <option value="" <? if( $karta[0]['Boltwo']==''){echo 'selected';}?>></option>
                                                    <option value="Спонтанна" <? if( $karta[0]['Boltwo']=='Спонтанна'){echo 'selected';}?>>Спонтанна</option>
                                                    <option value="Постійна" <? if( $karta[0]['Boltwo']=='Постійна'){echo 'selected';}?>>Постійна</option>

                                                </select>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td ><label class="lb1">Яка інтенсивність болю (шкала від 1 до 5)?</label></td><td>
                                                <select name="BolInten" class="form-control" >
                                                    <option value="" <? if( $karta[0]['BolInten']==''){echo 'selected';}?>></option>
                                                    <option value="1" <? if( $karta[0]['BolInten']=='1'){echo 'selected';}?>>1</option>
                                                    <option value="2" <? if( $karta[0]['BolInten']=='2'){echo 'selected';}?>>2</option>
                                                    <option value="3" <? if( $karta[0]['BolInten']=='3'){echo 'selected';}?>>3</option>
                                                    <option value="4" <? if( $karta[0]['BolInten']=='4'){echo 'selected';}?>>4</option>
                                                    <option value="5" <? if( $karta[0]['BolInten']=='5'){echo 'selected';}?>>5</option>

                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td><label class="lb1">Як проявляється біль?</label></td><td>
                                                <select name="Bolkak" class="form-control" >
                                                    <option value="" <? if( $karta[0]['Bolkak']==''){echo 'selected';}?>></option>
                                                        <option value="Печіння" <? if( $karta[0]['Bolkak']=='Печіння'){echo 'selected';}?>>Печіння</option>
                                                    <option value="Викручування" <? if( $karta[0]['Bolkak']=='Викручування'){echo 'selected';}?>>Викручування</option>
                                                    <option value="Здавлення" <? if( $karta[0]['Bolkak']=='Здавлення'){echo 'selected';}?>>Здавлення</option>
                                                    <option value="Гостра стріляючий біль" <? if( $karta[0]['Bolkak']=='Гостра стріляючий біль'){echo 'selected';}?>>Гостра стріляючий біль</option>
                                                    <option value="Пронизуючий біль (як голки)" <? if( $karta[0]['Bolkak']=='Пронизуючий біль (як голки)'){echo 'selected';}?>>Пронизуючий біль (як голки)</option>
                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Прийом препаратів?</label></td>
                                                <select name="Preparat" class="form-control" style="width: 70%;" >

                                                    <option value="Ні" <? if( $karta[0]['Preparat']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['Preparat']=='Так'){echo 'selected';}?>>Так</option>

                                                </select>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td ><label class="lb1">Якщо так, розписати які препарати?</label></td><td>
                                                <select name="PreparatKakie" class="form-control" >
                                                    <option value="" <? if( $karta[0]['PreparatKakie']==''){echo 'selected';}?>></option>
                                                    <option value="Антиконвульсанти (прегабалін, габапентин)" <? if( $karta[0]['PreparatKakie']=='Антиконвульсанти (прегабалін, габапентин)'){echo 'selected';}?>>Антиконвульсанти (прегабалін, габапентин)</option>
                                                    <option value="Антидепресанти (Дулоксетин - інгібітори зворотного захоплення серотоніну. НА)" <? if( $karta[0]['PreparatKakie']=='Антидепресанти (Дулоксетин - інгібітори зворотного захоплення серотоніну. НА)'){echo 'selected';}?>>
                                                        Антидепресанти (Дулоксетин - інгібітори зворотного захоплення серотоніну. НА)</option>
                                                    <option value="Трициклічніантидепресанти (амітриптилін)" <? if( $karta[0]['PreparatKakie']=='Трициклічніантидепресанти (амітриптилін)'){echo 'selected';}?>>Трициклічніантидепресанти (амітриптилін)</option>
                                                    <option value="Опіоіди" <? if( $karta[0]['PreparatKakie']=='Опіоіди'){echo 'selected';}?>>Опіоіди</option>
                                                    <option value="Вітаміни групи В" <? if( $karta[0]['PreparatKakie']=='Вітаміни групи В'){echo 'selected';}?>>Вітаміни групи В</option>
                                                    <option value="Аналгетики" <? if( $karta[0]['PreparatKakie']=='Аналгетики'){echo 'selected';}?>>Аналгетики</option>
                                                    <option value="НПЗП" <? if( $karta[0]['PreparatKakie']=='НПЗП'){echo 'selected';}?>>НПЗП</option>
                                                    <option value="Інше" <? if( $karta[0]['PreparatKakie']=='Інше'){echo 'selected';}?>>Інше</option>
                                                </select>
                                            </td>
                                                                                 </tr>
                                    </table>
                                </fieldset>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="stop">
                                <fieldset style="margin-top: 30px;">
                                    <h4>Обстеження стопи</label>
                                        <div id="tab-content10"</h4>
                                    <table class='mainT' style="width: 100%;">
                                        <tr>
                                            <td style="display: flex;"><label>Дата обстеження стопи: дд-мм-рр?</label></td><td>
                                                <input type="date" name="datStopObsl" value='<? echo $karta[0]['datStopObsl'];?>' class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label>Зниження температури?</label></td><td>
                                                <select name="SnizhT" class="form-control">
                                                    <option value="Ні" <? if( $karta[0]['SnizhT']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['SnizhT']=='Так'){echo 'selected';}?>>Так</option>
                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label>Порушення тактильної чутливості?</label></td><td>
                                                <select name="Chyvs" class="form-control">
                                                    <option value="Ні" <? if( $karta[0]['Chyvs']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['Chyvs']=='Так'){echo 'selected';}?>>Так</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td ><label>Порушення вібраційної чутливості?</label></td><td>
                                                <select name="NarVibr" class="form-control">
                                                    <option value="Ні" <? if( $karta[0]['NarVibr']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['NarVibr']=='Так'){echo 'selected';}?>>Так</option>
                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td><label>Зниження / відсутність рефлексів?</label></td><td>
                                                <select name="Reflex" class="form-control">
                                                    <option value="Ні" <? if( $karta[0]['Reflex']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['Reflex']=='Так'){echo 'selected';}?>>Так</option>
                                                </select></td>
                                        </tr>
                                        <tr>
                                            <td><label>Наявність виразок?</label></td><td>
                                                <select name="Jazv" class="form-control">
                                                    <option value="Ні" <? if( $karta[0]['Jazv']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['Jazv']=='Так'){echo 'selected';}?>>Так</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td ><label>Нагноєння виразок?</label></td><td>
                                                <select name="GnojJazv" class="form-control">
                                                    <option value="Ні" <? if( $karta[0]['GnojJazv']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['GnojJazv']=='Так'){echo 'selected';}?>>Так</option>
                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td><label>Пульс на стопі?</label></td><td>
                                                <select name="PylsStopa" class="form-control">
                                                    <option value="Ні" <? if( $karta[0]['PylsStopa']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['PylsStopa']=='Так'){echo 'selected';}?>>Так</option>
                                                </select></td>
                                        </tr><tr>
                                            <td><label>Шунтування / ангіопластика?</label></td><td>
                                                <select name="Shynt" class="form-control">
                                                    <option value="Ні" <? if( $karta[0]['Shynt']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['Shynt']=='Так'){echo 'selected';}?>>Так</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td ><label>Перемежовуються кульгавість?</label></td><td>
                                                <select name="Hrom" class="form-control">
                                                    <option value="Ні" <? if( $karta[0]['Hrom']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так"  <? if( $karta[0]['Hrom']=='Так'){echo 'selected';}?>>Так</option>
                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td><label>Ампутація?</label></td><td>
                                                <select name="Ampyt" class="form-control" onchange="addAmput(this.value)">
                                                    <option value="Ні" <? if( $karta[0]['Ampyt']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Ліва нога" <? if( $karta[0]['Ampyt']=='Ліва нога'){echo 'selected';}?>>Ліва нога</option>
                                                    <option value="Права нога" <? if( $karta[0]['Ampyt']=='Права нога'){echo 'selected';}?>>Права нога</option>
                                                </select>

                                                <? if($karta[0]['Ampyt']!='Ні') {
                                                ?>
                                                    <span id="kiAmput1"><label id="kakAmput">Локалізація ампутації?</label></span>

                                                    <span id="kiAmput3"><select id="kakAmput1" name="kakAmput1" class="form-control">
                                                            <option <? if( $karta[0]['kakAmput1']=='Великий палець'){echo 'selected';}?>>Великий палець</option>
                                                            <option <? if( $karta[0]['kakAmput1']=='Стопа'){echo 'selected';}?>>Стопа</option>
                                                            <option <? if( $karta[0]['kakAmput1']=='Коліно'){echo 'selected';}?>>Коліно</option>
                                                            <option <? if( $karta[0]['kakAmput1']=='Стегно'){echo 'selected';}?>>Стегно</option>
                                                        </select></span>
                                                    <span id="kiAmput"><label id="datAmputL">Рік ампутації</label></span>

                                                    <span id="kiAmput2"><input type="text" value='<? echo $karta[0]['datAmput'];?>' name="datAmput" id="datAmput" class="form-control" width="100px"></span>
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
                                    <h4>А. Лабораторні дослідження</h4>
                                    <table class='mainT' id="forTab1" >
                                        <tr>
                                            <td ><label class="lb1">Дата обстеження: дд-мм-рр</label></td><td>
                                                <input type="date" value='<? echo $karta[0]['datLab'];?>' class="form-control" name="datLab">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Ви зараз натщесерце?</label></td><td>
                                                <select name="Natosh" class="form-control">
                                                    <option value="Ні" <? if( $karta[0]['Natosh']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['Natosh']=='Так'){echo 'selected';}?>>Так</option>
                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">О котрій годині був останній прийом їжі (напередодні ввечері)?</label></td><td>
                                                <input name="Pisha" type="text" value='<? echo $karta[0]['Pisha'];?>' class="form-control" placeholder="12:00">

                                            </td>
                                        </tr>
                                        <tr style="background: #295b8e;">
                                            <td><label class="lb1">Глюкоза крові натще:</label></td>
                                            <td></td>

                                        </tr>
                                        <tr>
                                                                                       <td>
                                                                                           <label class="lb1">Показник, nmol / l</label></td><td>
                                                <input type="text" name="nmol" value='<? echo $karta[0]['nmol'];?>' class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Дата, дд-мм-рр</label></td><td>
                                                <input type="date" name="Datnmol" value='<? echo $karta[0]['Datnmol'];?>' class="form-control">
                                            </td>
                                        </tr>
                                        <tr style="background: #295b8e;">
                                            <td><label class="lb1">Глікозилювання гемоглобін?</label></td>
                                            <td></td>

                                        </tr>
                                        <tr>
                                            <td >
                                                <label class="lb1">%</label></td><td>
                                                <input type="text" name="vidsot" value='<? echo $karta[0]['vidsot'];?>' class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">pmol/pmol</label></td><td>
                                                <input type="text" name="gemogl" value='<? echo $karta[0]['gemogl'];?>' class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Дата, дд-мм-рр</label></td><td>
                                                <input type="date" name="Datgemogl" value='<? echo $karta[0]['Datgemogl'];?>' class="form-control">

                                            </td>
                                        </tr>
                                        <tr style="background: #295b8e;">
                                            <td ><label class="lb1">Загальний аналіз крові (дата)?</label>

                                            </td>
                                            <td>
                                                <input type="date" name="Datkrovi" value='<? echo $karta[0]['Datkrovi'];?>'  class="form-control">
                                            </td>

                                        </tr>

                                        <tr>
                                            <td >
                                                <label class="lb1">Еритроцити</label></td><td>
                                                <input type="text" name="eritr" value='<? echo $karta[0]['eritr'];?>' class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Гемоглобін</label></td><td>
                                                <input type="text" name="gemogl2" value='<? echo $karta[0]['gemogl2'];?>' class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Лейкоцити (кількість)</label></td><td>
                                                <input type="text" name="lekoz" value='<? echo $karta[0]['lekoz'];?>' class="form-control">

                                            </td>
                                        </tr>
                                        <tr>
                                            <td >
                                                <label class="lb1">Нейтрофіли (абс к-ть)</label></td><td>
                                                <input type="text" name="nejtrof" value='<? echo $karta[0]['nejtrof'];?>' class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Моноцити (абс к-ть)</label></td><td>
                                                <input type="text" name="monozit" value='<? echo $karta[0]['monozit'];?>' class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Лімфоцити (абс к-во)</label></td><td>
                                                <input type="text" name="limfoz" value='<? echo $karta[0]['limfoz'];?>' class="form-control">

                                            </td>
                                        </tr>
                                        <tr>
                                            <td >
                                                <label class="lb1">Тромбоцити (абс к-во)</label></td><td>
                                                <input type="text" name="tromb" value='<? echo $karta[0]['tromb'];?>' class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Тромбоцити, MPV</label></td><td>
                                                <input type="text" name="mpv" value='<? echo $karta[0]['mpv'];?>' class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Інше (показник)</label></td><td>
                                                <input type="text" name="dryg" value='<? echo $karta[0]['dryg'];?>' class="form-control">

                                            </td>
                                        </tr>
                                        <tr style="background: #295b8e;">
                                            <td><label class="lb1">Креатинін в плазмі крові</label></td>
                                            <td></td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <label class="lb1">Показник, мкмоль / л</label></td><td>
                                                <input type="text" name="kreat" value='<? echo $karta[0]['kreat'];?>' class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Дата, дд-мм-рр</label></td><td>
                                                <input type="date" name="datkreat" value='<? echo $karta[0]['datkreat'];?>' class="form-control">

                                            </td>
                                        </tr>
                                        <tr style="background: #295b8e; color:white;">
                                            <td><label class="lb1">Креатинін в сечі</label></td>
                                            <td></td>

                                        </tr>
                                        <tr>
                                            <td >

                                                <label class="lb1">Показник, мкмоль / л</label></td><td>
                                                <input type="text" name="kreatMocha" value='<? echo $karta[0]['kreatMocha'];?>' class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Дата, дд-мм-рр</label></td><td>
                                                <input type="date" name="datMocha" value='<? echo $karta[0]['datMocha'];?>' class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>

                                                <label class="lb1">Кліренс креатиніну (СКФ, швидкості клубочкової фільтрації)</label></td><td>
                                                <input type="text" name="klirkreat"  value='<? echo $karta[0]['klirkreat'];?>' class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td >
                                                <label class="lb1">Протеїнурія</label></td><td>
                                                <select name="Protein" class="form-control">
                                                    <option value="Ні" <? if( $karta[0]['Protein']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['Protein']=='Так'){echo 'selected';}?>>Так</option>
                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Останній вимір, мг / сут</label></td><td>
                                                <input type="text" name="posIzm" value='<? echo $karta[0]['posIzm'];?>' class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Дата, дд-мм-рр</label></td><td>
                                                <input type="date" name="datProtein" value='<? echo $karta[0]['datProtein'];?>' class="form-control">

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
                                                    <option value="Ні" <? if( $karta[0]['Mikroalmb']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['Mikroalmb']=='Так'){echo 'selected';}?>>Так</option>
                                                </select>

                                            <? if($karta[0]['Mikroalmb']=='Так') {
                                                ?>



                                                    <span id="kiMikro3"><label id="kakMikro">Якщо так – показник, мг/л</label></span>
                                                    <span id="kiMikro1"><input name="kakMikro1" value='<? echo $karta[0]['kakMikro1'];?>' id="kakMikro1" class="form-control"></span>
<span id="kiMikro"><label id="datMikroL">Дата</label></span>
                                                    <span id="kiMikro2"><input type="date" name="datMikro" value='<? echo $karta[0]['datMikro'];?>' id="datMikro" class="form-control" width="100px"></span>

                                                </td>
                                                <?php
                                            }else{
                                                ?>



                                                    <span id="kiMikro3"></span>
                                                    <span id="kiMikro1"></span>

                                                <span id="kiMikro"></span>
                                                    <span id="kiMikro2"></span>

                                                </td>
                                                <?
                                            }
                                            ?>




                                        </tr>
                                        <tr style="background: #295b8e;">
                                            <td><label class="lb1">Лабораторний аналіз ліпідів в крові (дата):</label></td>
                                            <td><input type="date" name="Lipiddat" value='<? echo $karta[0]['Lipiddat'];?>' class="form-control"> </td>

                                        </tr>
                                        <tr>
                                            <td >

                                                <label class="lb1">Холестерин (показник)</label></td><td>
                                                <input type="text" name="Holest" value='<? echo $karta[0]['Holest'];?>' class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Ліпіди високої щільності
                                                    (Показник)</label></td><td>
                                                <input type="text" name="LipidVis" value='<? echo $karta[0]['LipidVis'];?>' class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>

                                                <label class="lb1">Ліпіди низької щільності (показник)</label></td><td>
                                                <input type="text" name="LipidNiz" value='<? echo $karta[0]['LipidNiz'];?>' class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td >

                                                <label class="lb1">Тригліцериди (показник)</label></td><td>
                                                <input type="text" name="Trigliz" value='<? echo $karta[0]['Trigliz'];?>' class="form-control">
                                            </td>

                                        </tr>
                                        <tr>
                                            <td >

                                                <label class="lb1">Аспартатамінотрансфераза (АСТ)</label></td><td>
                                                <input type="text" name="Asparta" value='<? echo $karta[0]['Asparta'];?>' class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Аланінамінотрансфераза (АСТ)</label></td><td>
                                                <input type="text" name="Alanin" value='<? echo $karta[0]['Alanin'];?>' class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">С-реактивний білок</label></td><td>
                                                <input type="text" name="BelocS" value='<? echo $karta[0]['BelocS'];?>' class="form-control">

                                            </td>
                                        </tr>
                                        <tr>
                                            <td >

                                                <label class="lb1">C-пептид, показник:</label></td><td>
                                                <input type="text" name="Peptid" value='<? echo $karta[0]['Peptid'];?>' class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">C-пептид, одиниця виміру:</label></td><td>
                                                <input type="text" name="PeptiEdIzm" value='<? echo $karta[0]['PeptiEdIzm'];?>' class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">pmol/l</label></td><td>
                                                <input type="text" name="PeptidPmol" value='<? echo $karta[0]['PeptidPmol'];?>' class="form-control">

                                            </td>
                                        </tr>
                                        <tr>
                                            <td >

                                                <label class="lb1">nmol/l:</label></td><td>
                                                <input type="text" name="PeptidNmol" value='<? echo $karta[0]['PeptidNmol'];?>' class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">C-пептід, Дата: дд-мм-рр:</label></td><td>
                                                <input type="date" name="S_Pep" value='<? echo $karta[0]['S_Pep'];?>' class="form-control">
                                            </td>

                                        </tr>
                                    </table>
                                </fieldset>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="bio">
                                <fieldset style="margin-top: 30px;">
                                    <h4>Б. Біоматеріал</label>
                                        <div id="tab-content12"</h4>
                                    <table class='mainT'>
                                        <tr>
                                            <td >
                                                <label>Сиворотка?</label></td><td>
                                                <select name="Sivor" class="form-control">
                                                    <option value="Ні" <? if( $karta[0]['Sivor']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['Sivor']=='Так'){echo 'selected';}?>>Так</option>
                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label>Плазма?</label></td><td>
                                                <select name="Plazma" class="form-control">
                                                    <option value="Ні" <? if( $karta[0]['Plazma']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['Plazma']=='Так'){echo 'selected';}?>>Так</option>
                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label>Кров на ДНК?</label></td><td>
                                                <select name="DNK" class="form-control">
                                                    <option value="Ні" <? if( $karta[0]['DNK']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['DNK']=='Так'){echo 'selected';}?>>Так</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td >
                                                <label>Кров на РНК?</label></td><td>
                                                <input name="PHK" type="text" value='<? echo $karta[0]['PHK'];?>' class="form-control">

                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label>Слина?</label></td><td>
                                                <select name="Sluna" class="form-control">
                                                    <option value="Ні" <? if( $karta[0]['Sluna']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['Sluna']=='Так'){echo 'selected';}?>>Так</option>
                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label>Біоптат кожи?</label></td><td>
                                                <select name="Biopat" class="form-control">
                                                    <option value="Ні" <? if( $karta[0]['Biopat']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['Biopat']=='Так'){echo 'selected';}?>>Так</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td >
                                                <label>Примітки при заборі крові (зрив вакуумної пробки, тощо)</label>


                                            </td>
                                            <td >
                                                <textarea name="PrimZAbKrov" class="form-control"><? echo $karta[0]['PrimZAbKrov'];?></textarea>
                                            </td>

                                        </tr>
                                    </table>
                                </fieldset>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="lik">
                                <fieldset style="margin-top: 30px;">
                                    <h4>1. Лікування</h4>
                                    <table class='mainT' id="forTab2">
                                        <tr>
                                            <td style="display: flex;"><label class="lb1">Лікування цукрового діабету</label></td><td>
                                                <select name="LechDIabet" class="form-control">
                                                    <option value="Не проводиться" <? if( $karta[0]['LechDIabet']=='Не проводиться'){echo 'selected';}?>>Не проводиться</option>
                                                    <option value="Дієта" <? if( $karta[0]['LechDIabet']=='Дієта'){echo 'selected';}?>>Дієта</option>
                                                    <option value="Таблетки" <? if( $karta[0]['LechDIabet']=='Таблетки'){echo 'selected';}?>>Таблетки</option>
                                                    <option value="Інсулін" <? if( $karta[0]['LechDIabet']=='Інсулін'){echo 'selected';}?>>Інсулін</option>
                                                    <option value="Таблетки + інсулін" <? if( $karta[0]['LechDIabet']=='Таблетки + інсулін'){echo 'selected';}?>>Таблетки + інсулін</option>
                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Лікування діабету: інсулін (препарат, доза прийому, кратність)</label></td><td>
                                                <select name="LechInsul" class="form-control">
                                                    <option value="Базисная инсулинотерапия" <? if( $karta[0]['LechInsul']=='Базисная инсулинотерапия'){echo 'selected';}?>>Базисна інсулінотерапії</option>
                                                    <option value="Помпова інсулінотерапія" <? if( $karta[0]['LechInsul']=='Помпова інсулінотерапія'){echo 'selected';}?>>Помпова інсулінотерапія</option>
                                                    <option value="Змішаний" <? if( $karta[0]['LechInsul']=='Змішаний'){echo 'selected';}?>>Змішаний</option>

                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Дата початку інсулінотерапії (дд- мм-рр)</label></td><td>
                                                <input type="date" name="datLechDiab" value='<? echo $karta[0]['datLechDiab'];?>' class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label class="lb1">Лікування діабету: таблетки</label></td><td>
                                                <select name="diabLechTab" class="form-control">
                                                    <option value="Бігуаніди" <? if( $karta[0]['diabLechTab']=='Бігуаніди'){echo 'selected';}?>>Бігуаніди</option>
                                                    <option value="Похідні сульфонілсечовини" <? if( $karta[0]['diabLechTab']=='Похідні сульфонілсечовини'){echo 'selected';}?>>Похідні сульфонілсечовини</option>
                                                    <option value="Інгібітори ДПП-4" <? if( $karta[0]['diabLechTab']=='Інгібітори ДПП-4'){echo 'selected';}?>>Інгібітори ДПП-4</option>
                                                    <option value="Інгібітори НЗКТГ-2" <? if( $karta[0]['diabLechTab']=='Інгібітори НЗКТГ-2'){echo 'selected';}?>>Інгібітори НЗКТГ-2</option>
                                                    <option value="Тіазолідиндіони" <? if( $karta[0]['diabLechTab']=='Тіазолідиндіони'){echo 'selected';}?>>Тіазолідиндіони</option>
                                                    <option value="Інгібітори a-глікозидази" <? if( $karta[0]['diabLechTab']=='Інгібітори a-глікозидази'){echo 'selected';}?>>Інгібітори a-глікозидази</option>
                                                    <option value="Меглітінід" <? if( $karta[0]['diabLechTab']=='Меглітінід'){echo 'selected';}?>>Меглітінід</option>
                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Лікування гіпертонії (препарат, доза прийому, кратність)</label></td><td>
                                                <select name="LechGiper" class="form-control">
                                                    <option value="Не проводиться" <? if( $karta[0]['LechGiper']=='Не проводиться'){echo 'selected';}?>>Не проводиться</option>
                                                    <option value="Бета-блокатори" <? if( $karta[0]['LechGiper']=='Бета-блокатори-'){echo 'selected';}?>>Бета-блокатори</option>
                                                    <option value="ACE-інгібітори" <? if( $karta[0]['LechGiper']=='ACE-інгібітори'){echo 'selected';}?>>ACE-інгібітори</option>
                                                    <option value="Сартани" <? if( $karta[0]['LechGiper']=='Сартани'){echo 'selected';}?>>Сартани</option>
                                                    <option value="Кальцієві блокатори" <? if( $karta[0]['LechGiper']=='Кальцієві блокатори'){echo 'selected';}?>>Кальцієві блокатори</option>
                                                    <option value="Діуретики" <? if( $karta[0]['LechGiper']=='Діуретики'){echo 'selected';}?>>Діуретики</option>
                                                    <option value="Інші, назва" <? if( $karta[0]['LechGiper']=='Інші, назва'){echo 'selected';}?>>Інші, назва</option>
                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Лікування гіперліпідемії</label></td><td>
                                                <select name="LechLipidGiper" class="form-control">
                                                    <option value="Не проводиться" <? if( $karta[0]['LechLipidGiper']=='Не проводиться'){echo 'selected';}?>>Не проводиться</option>
                                                    <option value="Статини" <? if( $karta[0]['LechLipidGiper']=='Статини'){echo 'selected';}?>>Статини</option>
                                                    <option value="Фібрати" <? if( $karta[0]['LechLipidGiper']=='Фібрати'){echo 'selected';}?>>Фібрати</option>

                                                    <option value="Інші, назва" <? if( $karta[0]['LechLipidGiper']=='Інші, назва'){echo 'selected';}?>>Інші, назва</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label class="lb1">Хворієте (хворіли) ви онкозахворюваннями?</label></td><td>
                                                <select name="Onko" class="form-control">
                                                    <option value="Ні" <? if( $karta[0]['Onko']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Так" <? if( $karta[0]['Onko']=='Так'){echo 'selected';}?>>Так</option>

                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Вкажіть вид онкозахворювання</label></td><td>
                                                <input type="text" name="VidOnko" value='<? echo $karta[0]['VidOnko'];?>' class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Дата постановки діагнозу
                                                    онкозахворювання</label></td><td>
                                                <input type="date" name="dateOnko" value='<? echo $karta[0]['dateOnko'];?>' class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label class="lb1">Якщо так - лікування онкозахворювання
                                                    (Препарати - назва препаратів,
                                                    група)?</label>

                                            </td>
                                            <td>
                                                <select name="OnkoLek" class="form-control">
                                                    <option value="Ні" <? if( $karta[0]['OnkoLek']=='Ні'){echo 'selected';}?>>Ні</option>
                                                    <option value="Хіміотерапія" <? if( $karta[0]['OnkoLek']=='Хіміотерапія'){echo 'selected';}?>>Хіміотерапія</option>
                                                    <option value="Імунотерапія" <? if( $karta[0]['OnkoLek']=='Імунотерапія'){echo 'selected';}?>>Імунотерапія</option>
                                                    <option value="Гормональна терапія" <? if( $karta[0]['OnkoLek']=='Гормональна терапія'){echo 'selected';}?>>Гормональна терапія</option>
                                                    <option value="Комбінована (хіміо + тергетная терапія)" <? if( $karta[0]['OnkoLek']=='Комбінована (хіміо + тергетная терапія)'){echo 'selected';}?>>Комбінована (хіміо + тергетная терапія)</option>
                                                    <option value="Таргетная терапія" <? if( $karta[0]['OnkoLek']=='Таргетная терапія'){echo 'selected';}?>>Таргетная терапія</option>
                                                    <option value="Хірургічне" <? if( $karta[0]['OnkoLek']=='Хірургічне'){echo 'selected';}?>>Хірургічне</option>
                                                    <option value="Інші" <? if( $karta[0]['OnkoLek']=='Інші'){echo 'selected';}?>>Інші</option>
                                                </select>
                                            </td>
                                        
                                        </tr>
                                    </table>
                                </fieldset>
                            </div>
                        </div>


        </div>
    </div>
   <?



}else{
    echo "Ви не авторизовані в системі";
}
?>

