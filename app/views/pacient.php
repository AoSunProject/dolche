<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
      integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<title>Створити нову картку учасника</title>
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
        color: #1b6d85;
        background:  #e5e5e5;

        padding-left: 7px;

        border-left: 3px solid  #1b6d85;
    }
    .tab button:hover {
        color: #1b6d85;
        background:  #e5e5e5;

        padding-left: 7px;

        border-left: 3px solid  #1b6d85;
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
        border-bottom: 1px solid #1b6d85;
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
<style>
    @media (min-width: 576px)
        .modal-dialog {
        width: 900px;
        }
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
<link rel="stylesheet" href="../../js/bootstrap.css">
<?php
if(isset($_SESSION['user'])){
           ?>
<script src="https://use.fontawesome.com/eb1d0b8994.js"></script>
<script src="https://kit.fontawesome.com/359d037434.js" crossorigin="anonymous"></script>
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
                                class="ui-menuitem-link ng-star-inserted" href="<?=Url::local('pacient')?>"
                                id="login"><!----><span class="ui-menuitem-text">Нова картка</span></a><!----></li>
                    <!----><!----></ul>
            </div>
        </p-breadcrumb>
    </div>
</cb-breadcrumb>
</div>
</cb-header>
<style>
    #myTab .nav > li > a{
        padding: 5px 8px;
    }
    #ul1{
        display: flex;
        flex-direction: column;
        margin-top: 30px;
    }
    .menlab{

        margin-left: 6px;
    }
    .zag{
        font-size:12px;
    }
    .pod1{
        margin-left: 30px;
        border-left: 2px solid grey;
        font-size: 11px;
    }
    .nav .hh{
        display: none;
    }
    .tab-content .hidd{
        display: none;
    }
</style>
<div _ngcontent-c0="" class="container-fluid">
    <div _ngcontent-c0="" class="row">
        <div _ngcontent-c0="" class="col">
            <cb-sidebar-menu _ngcontent-c0="" _nghost-c2="">
                <div _ngcontent-c2="" class="sidebar" id="sidebar">
<script>

    function hide11(id) {
        var s=id+1;
        if(document.getElementById(s).style.display=='none'){
            for(var i=1;i<5;i++){
                var idz=id+i;
                document.getElementById(idz).style.display='block';
            }
        }else{
            for(var i=1;i<5;i++){
                var idz=id+i;
                document.getElementById(idz).style.display='none';
            }
        }

    }
   /* function h3h() {

        if(document.getElementById('myTab').style.display=='none'){

                document.getElementById('myTab').style.display='block';
            }
        }else{
        document.getElementById('myTab').style.display='none';
        }

    }*/
</script>
                    <div role="tabpanel" id="myTab">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist" id="ul1">

                            <li role="presentation" id="one1" class="zag" onclick="hide11(this.id)"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><span class="menlab"><i class="fas fa-chevron-right"></i></span> 1. Опитування пацієнта</a></li>
                            <li role="presentation" class="active pod1" id="one11"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">А. Загальні дані</a></li>
                            <li role="presentation" class="pod1" id="one12"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Б. Сімейний анамнез</a></li>
                            <li role="presentation" class="pod1" id="one13"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">В. Інформація по голодомору</a></li>
                            <li role="presentation" id="one2" class="zag" onclick="hide11(this.id)"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab"><span class="menlab"><i class="fas fa-chevron-right"></i></span> 2. Огляд пацієнта</a></li>
                            <li role="presentation" class="pod1 hh" id="one21"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">А. Антропометричні дані</a></li>
                            <li role="presentation" class="pod1 hh" id="one22"><a href="#zhitt" aria-controls="zhitt" role="tab" data-toggle="tab">Б. Спосіб життя</a></li>
                            <li role="presentation" class="pod1 hh" id="one23"><a href="#hist" aria-controls="hist" role="tab" data-toggle="tab">В. Історія хвороби</a></li>
                            <li role="presentation" class="pod1 hh" id="one24"><a href="#bol" aria-controls="bol" role="tab" data-toggle="tab">Г. Супутні захворювання</a></li>


                            <li role="presentation" id="one3" class="zag" onclick="hide11(this.id)"><a href="#ser" aria-controls="ser" role="tab" data-toggle="tab"><span class="menlab"><i class="fas fa-chevron-right"></i></span> 3.
                                    Статус ССС</a></li>
                            <li role="presentation" class="pod1 hh" id="one31"><a href="#ser" aria-controls="ser" role="tab" data-toggle="tab">А. Обстеження серцево-судинної системи</a></li>
                            <li role="presentation" id="one4" class="zag" onclick="hide11(this.id)"><a href="#diab" aria-controls="diab" role="tab" data-toggle="tab"><span class="menlab"><i class="fas fa-chevron-right"></i></span> 4.
                                    Діабетична ретінопатія</a></li>
                            <li role="presentation" class="pod1 hh" id="one41"><a href="#diab" aria-controls="diab" role="tab" data-toggle="tab">А. Обстеження очей</a></li>
                            <li role="presentation" id="one5" class="zag" onclick="hide11(this.id)"><a href="#nefr" aria-controls="nefr" role="tab" data-toggle="tab"><span class="menlab"><i class="fas fa-chevron-right"></i></span> 5.
                                    Нефропатія</a></li>
                            <li role="presentation" class="pod1 hh" id="one51"><a href="#nefr" aria-controls="nefr" role="tab" data-toggle="tab">А. Обстеження нирок</a></li>
                            <li role="presentation" id="one6" class="zag" onclick="hide11(this.id)"><a href="#pol" aria-controls="pol" role="tab" data-toggle="tab"><span class="menlab"><i class="fas fa-chevron-right"></i></span> 6.
                                    Полінейроангіопатія</a></li>
                            <li role="presentation" class="pod1 hh" id="one61"><a href="#pol" aria-controls="pol" role="tab" data-toggle="tab">А. Полінейроангіопатія</a></li>
                            <li role="presentation" class="pod1 hh" id="one62"><a href="#stop" aria-controls="stop" role="tab" data-toggle="tab">Б. Обстеження стопи</a></li>
                            <li role="presentation" id="one7" class="zag" onclick="hide11(this.id)"><a href="#lab" aria-controls="lab" role="tab" data-toggle="tab"><span class="menlab"><i class="fas fa-chevron-right"></i></span> 7.
                                    Лабораторні дослідження</a></li>
                            <li role="presentation" class="pod1 hh" id="one71"><a href="#lab" aria-controls="lab" role="tab" data-toggle="tab">А. Лабораторні дослідження</a></li>
                            <li role="presentation" class="pod1 hh" id="one72"><a href="#bio" aria-controls="bio" role="tab" data-toggle="tab">Б. Біоматеріал</a></li>
                            <li role="presentation" id="one8" class="zag" onclick="hide11(this.id)"><a href="#lik" aria-controls="lik" role="tab" data-toggle="tab"><span class="menlab"><i class="fas fa-chevron-right"></i></span> 8.
                                    Лікування</a></li>
                            <li role="presentation" class="pod1 hh" id="one81"><a href="#lik" aria-controls="lik" role="tab" data-toggle="tab">А. Лікування</a></li>
                            <li role="presentation" id="one9" class="zag" onclick="hide11(this.id)"><a href="#gen " aria-controls="gen" role="tab" data-toggle="tab"><span class="menlab"><i class="fas fa-chevron-right"></i></span> 9.
                                   Геніаологічне дерево</a></li>
                            <li role="presentation" class="pod1 hh" id="one91"><a href="#gen" aria-controls="gen" role="tab" data-toggle="tab">А. Геніаологічне дерево</a></li>
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
                <form method="post" action="<?=Url::getAction('pacient','addcart')?>">
                <div _ngcontent-c9="" class="container">


                        <!-- Tab panes -->

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="home">
                                <fieldset style="margin-top: 30px;">
                                    <h4>1.А. Загальні дані</h4>
                                    <table class='mainT' style="width: 100%;">
                                        <tr>
                                            <td><label>Прізвище <span class="red">*</span></label></td><td><input class="form-control" type="text" name="fname" placeholder=""></td><td></td></tr>
                                        <tr><td><label>Ім'я <span class="red">*</span></label></td><td><input class="form-control" type="text" name="name" placeholder=""></td><td></td></tr>
                                        <tr><td><label>По-батькові <span class="red">*</span></label></td><td><input class="form-control" type="text" name="sname" placeholder=""></td><td></td>
                                        </tr>
                                        <tr>
                                            <td >
                                                <label>Чи брали участь ви раніше в цьому дослідженні?</label>
                                                <label class="hidd" id="h0">Якщо так, вкажіть ідентифікатор учасника <br> в минулому дослідженні (№ учасника)</label>
                                            </td>
                                         <td>
                                                <select name="ychas" class="form-control" onchange="ss(this)">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так" >Так</option>

                                                </select>
                                                <div style="display: flex;">
                                                <input type="text" id="h1" class="form-control" name="nomIss" placeholder="" class="hidd">
                                                    <a href="#myModal1" class="btn btn-sm hidd" style='border:1px solid grey' id="h2" data-toggle="modal">...</a>

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


                                                                    <form method="post" action="<?= Url::getAction('programm', 'findR') ?>">
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
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td style="display: flex;flex-direction: row; justify-content: space-between;align-items: flex-end;">
                                                <label>Стать</label></td>
                                                <td><select name="sex" class="form-control" style="width: 80%;">
                                                        <option value="--" >--</option>
                                                        <option value="Чоловіча">Чоловіча</option>
                                                    <option value="Жіноча" >Жіноча</option>

                                                </select>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Дата нарождения <span class="red">*</span></label>

                                            </td>
                                            <td>
                                                <input type="date" name="datB" class="form-control">
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Телефон </label>

                                            </td>
                                            <td>
                                                <input type="text" name="phone" class="form-control">
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>E-mail </label>

                                            </td>
                                            <td>
                                                <input type="email" name="email" class="form-control">
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td >
                                                <label>Місце народження: населений пункт</label>

                                            </td>
                                            <td>
                                                <input type="text" name="city" class="form-control" placeholder="">
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td >
                                                <label>Місце народження - район, область</label>

                                            </td>
                                            <td>
                                                <input type="text" name="rajon" class="form-control" placeholder="">
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Статус роботи</label>

                                            </td>
                                            <td>
                                                <select name="work" class="form-control" >
                                                    <option value="--" >--</option>
                                                    <option value="Не працюю, безробітний(а)">Не працюю, безробітний(а)</option>
                                                    <option value="Не працюю, інвалідність" >Не працюю, інвалідність</option>
                                                    <option value="Не працюю, відпустка по хворобі" >Не працюю, відпустка по хворобі</option>
                                                    <option value="На пенції" >На пенсії</option>
                                                    <option value="Працюю, часткова зайнятість" >Працюю, часткова зайнятість</option>
                                                    <option value="Працюю, повна зайнятість" >Працюю, повна зайнятість</option>
                                                </select>
                                            </td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td >
                                                <label>Інформація про нарождення:</label>

                                            </td>
                                            <td>
                                                <table><tr>
                                                        <td><input  style='position: static;' type="radio" name="bearn" class="form-control" value="Народився(лась) вчасно"></td>
                                                        <td><label>Народився(лась) вчасно</label></td></tr>
                                                    <tr><td><input  style='position: static;' type="radio" name="bearn" class="form-control" value="Народився(лась) передчасно"></td>
                                                        <td><label>Народився(лась) передчасно</label></td></tr>
                                                    <tr><td><input  style='position: static;' type="radio" name="bearn" class="form-control" value="Народився в _____ тижнів (вказати)"></td>
                                                        <td><div style="display: flex;flex-direction: row;"><label>Народився в   </label> <input type="text" style='width: 60px;margin-left: 4px;margin-right: 4px;' name="week" class="form-control"><label>   тижнів (вказати)</label></div></td></tr>
                                                    <tr><td><input   style='position: static;' type="radio" name="bearn" class="form-control" value="Не знаю" checked></td><td><label>Не знаю</label></td></tr>
                                                </table></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td >
                                                <label>Вага при народженні:</label>

                                            </td>
                                            <td>
                                                <table><tr>
                                                        <td><input style='position: static;' type="radio" name="vesR" class="form-control" value="Низька (при нарожденні я був(ла) худим(ой))"></td>
                                                        <td><label>Низька (при нарожденні я був(ла) худим(ой))</label></td></tr>
                                                    <tr><td><input  style='position: static;' type="radio" name="vesR" class="form-control" value="Нормальна"></td>
                                                        <td><label>Нормальна</label></td></tr>
                                                    <tr><td><input  style='position: static;' type="radio" name="vesR" class="form-control" value="Я був (була) при народженні великим малюком"></td>
                                                        <td><label>Я був (була) при народженні великим малюком</label></td></tr>
                                                    <tr><td><input   style='position: static;' type="radio" name="vesR" class="form-control" value="Не знаю" checked></td><td><label>Не знаю</label></td></tr>
                                                </table></td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td >
                                                <label>Вага при народженні (г):</label>

                                            </td>
                                            <td>
                                                <input type="text" name="vagaPN" class="form-control" placeholder="">
                                               </td>
                                            <td></td>
                                        </tr>
                                    </table>
                                </fieldset>

                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile">
                                <fieldset style="margin-top: 30px;">
                                    <h4>1.Б. Сімейний анамнез</h4>
                                    <table class='mainT' style="width: 100%;">
                                        <tr style="background: #295b8e; color:white;"><td colspan="3"><label>Батько:</label></td></tr>
                                        <tr>
                                            <td><label>Прізвище</label></td><td><input class="form-control" type="text" name="fnameO" placeholder=""></td></tr>
                                        <tr> <td><label>Ім'я</label></td><td><input class="form-control" type="text" name="nameO" placeholder=""></td></tr>
                                        <tr><td><label>По-батькові</label></td><td><input class="form-control" type="text" name="snameO" placeholder=""></td>
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
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так">Так</option>

                                                </select>
                                                <div style="display: flex;">
                                                    <input type="text" id="h5" class="form-control hidd" name="nomIssO" placeholder="">
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


                                                                <form method="post" action="<?= Url::getAction('programm', 'findR') ?>">
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
                                                <label>Дата народження</label></td><td>
                                                <input type="date" name="datBOtez" class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Місце народження: область</label></td><td>
                                                <input type="text" name="oblOtez" class="form-control" placeholder="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Місце народження: місто</label></td><td>
                                                <input type="text" name="cityOtez" class="form-control" placeholder="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Чи хворів на діабет?</label>
                                                <label class="hidd1" id="h2">Якщо так - яке було лікування у батька?</label>
                                            </td>
                                            <td>
                                                <select name="lechOtez" class="form-control" onchange="ss1(this)">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так" >Так</option>

                                                </select>
                                                <select id="h3"  name="lechOtezKak"  class=" form-control hidd">
                                                    <option value="--" >--</option>
                                                    <option value="Діета" >Діета</option>
                                                    <option value="Таблетки" >Таблетки</option>
                                                    <option value="Інсулін" >Інсулін</option>
                                                    <option value="Комбіноване - таблетки і інсулін" >Комбіноване - таблетки і
                                                             інсулін</option>
                                                    <option value="Не знаю" >Не знаю</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr style="background: #295b8e;color:white;"><td colspan="3"><label>Мати:</label></td></tr>
                                        <tr>
                                            <td><label>Прізвище</label></td><td><input class="form-control" type="text" name="fnameM" placeholder=""></td></tr>
                                        <tr><td><label>Ім'я</label></td><td><input class="form-control" type="text" name="nameM" placeholder=""></td></tr>
                                           <tr> <td><label>По-батькові</label></td><td><input class="form-control" type="text" name="snameM" placeholder=""></td>
                                        </tr>
                                        <tr>
                                            <td >
                                                <label>Чи брала участь Мати раніше в цьому
                                                    дослідженні?</label>
                                                <label class="hidd" id="h6">Якщо так, вкажіть ідентифікатор
                                                    матері <br> в минулому дослідженні
                                                    (№ учасника)</label>
                                            </td>
                                            <td>
                                                <select name="ychasM" class="form-control" onchange="ss3(this)">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так" >Так</option>

                                                </select>
                                                <div style="display: flex;">
                                                    <input type="text" id="h7" class="form-control hidd" name="nomIssM" placeholder="">
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


                                                                <form method="post" action="<?= Url::getAction('programm', 'findR') ?>">
                                                                    <table id='modalFind' style="margin: 5px;">
                                                                        <tr>
                                                                            <td><span class="l">Прізвище</span></td>
                                                                            <td><input type="text" name="fname3" id="fname3" class="m1"></td>
                                                                            <td><span class="l">Рік народження</span></td>
                                                                            <td><input placeholder="" type="text" onchange="year(this.value)" id="year13" name="year13" class="m2"> - <input
                                                                                        placeholder="" type="text" id="year23" name="year23" class="m2"></td>
                                                                            <td><span class="l">№ картки</span></td>
                                                                            <td><input type="text" name="nom13" id="nom13" placeholder="" class="m2"> - <input
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
                                                <label>Дата народження</label></td>
                                               <td> <input type="date" name="datBM" class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Місце народження: область</label></td>
                                               <td> <input type="text" name="oblM" class="form-control" placeholder="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Місце народження: місто</label></td><td>
                                                <input type="text" name="cityM" class="form-control" placeholder="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Чи хворіла на діабет?</label>
                                                <label class="hidd1" id="h8">Якщо так - яке було лікування у матері?</label>
                                            </td>
                                            <td>
                                                <select name="lechM" class="form-control" onchange="ss4(this)">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так" >Так</option>

                                                </select>
                                                <select id="h9"  name="lechMKak"  class=" form-control hidd">
                                                    <option value="--" >--</option>
                                                    <option value="Діета" >Діета</option>
                                                    <option value="Таблетки" >Таблетки</option>
                                                    <option value="Інсулін" >Інсулін</option>
                                                    <option value="Комбіноване - таблетки і інсулін" >Комбіноване - таблетки і
                                                             інсулін</option>
                                                    <option value="Не знаю" >Не знаю</option>
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
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так" >Так</option>

                                                </select>
                                                <select id="h11"  name="lechBSKak"  class=" form-control hidd">
                                                    <option value="--" >--</option>
                                                    <option value="Діета" >Діета</option>
                                                    <option value="Таблетки" >Таблетки</option>
                                                    <option value="Інсулін" >Інсулін</option>
                                                    <option value="Комбіноване - таблетки і інсулін" >Комбіноване - таблетки і
                                                             інсулін</option>
                                                    <option value="Не знаю" >Не знаю</option>
                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                                </fieldset>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="messages">
                                <fieldset style="margin-top: 30px;">
                                    <h4>1.В. Інформація по голодомору</h4>
                                    <table class='mainT' style="width: 100%;">
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
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так" >Так</option>
                                                    <option value="Не знаю" >Не знаю</option>
                                                </select>
                                                <input type="text" id="h13" class="form-control hidd" name="periodGolod" placeholder="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Мати:</label></td><td>
                                                <select name="golodM" class="form-control">
                                                    <option value="--" >--</option>
                                                    <option value="1932-33">1932-33</option>
                                                    <option value="1941-45" >1941-45</option>
                                                    <option value="1946-47" >1946-47</option>

                                                    <option value="Не знаю" >Не знаю</option>
                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label>Батько:</label></td><td>
                                                <select name="golodO" class="form-control">
                                                    <option value="--" >--</option>
                                                    <option value="1932-33">1932-33</option>
                                                    <option value="1941-45" >1941-45</option>
                                                    <option value="1946-47" >1946-47</option>

                                                    <option value="Не знаю" >Не знаю</option>
                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label>Родные брати/сестри:</label></td><td>
                                                <select name="golodSister" class="form-control">
                                                    <option value="--" >--</option>
                                                    <option value="1932-33">1932-33</option>
                                                    <option value="1941-45" >1941-45</option>
                                                    <option value="1946-47" >1946-47</option>

                                                    <option value="Не знаю" >Не знаю</option>
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
                                                    <option value="--" >--</option>
                                                    <option value="Ні" >Ні</option>
                                                    <option value="Так-1932-33">Так-1932-33</option>
                                                    <option value="Так-1941-45" >Так-1941-45</option>
                                                    <option value="Так-1946-47" >Так-1946-47</option>

                                                    <option value="Не знаю" >Не знаю</option>
                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label>Пережили ви період голоду в
                                                    1932-33, 1941-45 і / або 1946-47 роках
                                                    (Голодували ви?). Якщо так - вказати
                                                    період:</label></td><td>
                                                <select name="death2" class="form-control">
                                                    <option value="--" >--</option>
                                                    <option value="Ні" >Ні</option>
                                                    <option value="Так-1932-33">Так-1932-33</option>
                                                    <option value="Так-1941-45" >Так-1941-45</option>
                                                    <option value="Так-1946-47" >Так-1946-47</option>

                                                    <option value="Не знаю" >Не знаю</option>
                                                </select>
                                            </td>
                                            <td style="width: 250px;"></td>
                                        </tr>
                                    </table>
                                </fieldset>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="settings">
                                <fieldset style="margin-top: 30px;">
                                    <h4>2.А. Антропометричні дані</h4>
                                    <table class='mainT' style="width: 100%;">
                                        <tr>
                                            <td><label>Вага (кг)</label></td><td><input class="form-control" type="text" name="ves" placeholder=""></td></tr>
                                        <tr><td><label>Зріст (см)</label></td><td><input class="form-control" type="text" name="rost" placeholder=""></td></tr>
                                            <tr><td><label>Об`єм талії (см)</label></td><td><input class="form-control" type="text" name="tal" placeholder=""></td>
                                        </tr>
                                        <tr>
                                            <td><label>Окружність стегон (см)</label></td><td><input class="form-control" type="text" name="bed" placeholder=""></td></tr>
                                        <tr><td><label>Індекс маси тіла (кг/м 2 )</label></td><td><input class="form-control" type="text" name="index" ></td></tr>
                                           <tr> <td><label>Систолічний артеріальний тиск (сидячи) 0`</label></td>
                                               <td><input type="text"  class="form-control" name="art" placeholder="">


                                               </td>
                                        </tr>
                                        <tr> <td><label>Систолічний артеріальний тиск (сидячи) 10`</label></td>
                                            <td>
                                                <input type="text"  class="form-control" name="systisk" placeholder="">

                                            </td>
                                        </tr>

                                        <tr>

                                            <td><label>Діастолічний артеріальний тиск (сидячи) 0`</label></td><td>
                                                <input type="text"  class="form-control" name="art1" placeholder="">
                                            </td>

                                        </tr>
                                        <tr>

                                            <td><label>Діастолічний артеріальний тиск (сидячи) 10`</label></td><td>
                                                <input type="text"  class="form-control" name="disttisk" placeholder="">
                                            </td>

                                        </tr>
                                    </table>
                                </fieldset>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="zhitt">
                                <fieldset style="margin-top: 30px;">
                                    <h4>2.Б. Спосіб життя</h4>
                                    <table class='mainT' style="width: 100%;">

                                        <tr>
                                            <td><label>Ви палите?</label></td><td>
                                                <select class="form-control" name="smouk">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так">Так</option>
                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td><label>Якщо курите, як часто?</label></td><td>
                                                <select class="form-control" name="smoukTime">
                                                    <option value="--" >--</option>
                                                    <option value="Кожен день">Кожен день</option>
                                                    <option value="Кілька днів на тиждень">Кілька днів на тиждень</option>
                                                    <option value="Дуже рідко">Дуже рідко</option>
                                                </select></td>
                                        </tr><tr>
                                            <td><label>Кількість викурених сигарет за
                                                    1 день</label></td><td><input class="form-control" type="text" name="smokeKol" placeholder=""></td>
                                        </tr>
                                        <tr>
                                            <td >
                                                <label>Як часто Ви вживаєте алкоголь?</label>

                                            </td>
                                            <td>
                                                <select name="alkogol" class="form-control">
                                                    <option value="--" >--</option>
                                                    <option value="Ніколи">Ніколи</option>
                                                    <option value="Менше 1 разу на місяць" >Менше 1 разу на місяць</option>
                                                    <option value="1-3 раза в місяц" >1-3 раза в місяц</option>
                                                    <option value="1-2 раза в неділю" >1-2 раза в неділю</option>
                                                    <option value="3-4 раза в неділю" >3-4 раза в неділю</option>
                                                    <option value="Практично кожен день" >Практично кожен день</option>

                                                </select>

                                            </td>
                                        </tr>
                                    </table>
                                </fieldset>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="hist">
                                <fieldset style="margin-top: 30px;">
                                    <h4>2.В. Історія хвороби:</h4>
                                    <table class='mainT' style="width: 100%;">
                                        <tr>
                                            <td >
                                                <label>Тип діабету:</label>

                                            </td>
                                            <td>
                                                <select name="typeDiab" class="form-control">
                                                    <option value="--" >--</option>
                                                    <option value="ЦД 1 типу">ЦД 1 типу</option>
                                                    <option value="ЦД 2 типу" >ЦД 2 типу</option>
                                                    <option value="Латентний аутоімунний (LADA)" >Латентний аутоімунний
                                                        (LADA)</option>
                                                    <option value="MODY-діабет" >MODY-діабет</option>
                                                    <option value="Панкреатогенний" >Панкреатогенний
                                                    </option>
                                                    <option value="Інший" >Інший
                                                    </option>
                                                </select>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>Рік постановки діагнозу:</label></td><td>
                                                <input type="text" name="yearD" class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label>Вік дебюту діабету (років):</label></td><td>
                                                <input type="text" name="vekD" class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label>Тривалість діабету (років):</label></td><td>
                                                <input type="text" name="longD" class="form-control">
                                            </td>
                                        </tr>

                                    </table>
                                </fieldset>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="bol">
                                <fieldset style="margin-top: 30px;">
                                    <h4>2.Г. Хвороби, що супруводжують:</h4>
                                    <table class='mainT' style="width: 100%;">
                                        <tr>
                                            <td >
                                                <label>Інфекційні:</label>

                                            </td>
                                            <td colspan="2">
                                                <textarea name="inf" class="form-control"></textarea>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td >
                                                <label>Аутоімунні (вказати):</label>

                                            </td>
                                            <td colspan="2">
                                                <textarea name="aut" class="form-control"></textarea>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td >
                                                <label>Вроджені вади (вказати):</label>

                                            </td>
                                            <td colspan="2">
                                                <textarea name="porok" class="form-control"></textarea>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td >
                                                <label>Інші ендокринні (вказати):</label>

                                            </td>
                                            <td colspan="2">
                                                <textarea name="endoc" class="form-control"></textarea>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td >
                                                <label>Інша патологія (вказати):</label>

                                            </td>
                                            <td colspan="2">
                                                <textarea name="patol" class="form-control"></textarea>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td >
                                                <label>Класифікація супутніх захворювань по DRG:</label>

                                            </td>
                                            <td colspan="2">
                                                <input type="text" name="DGR" class="form-control">

                                            </td>
                                        </tr>
                                    </table>
                                </fieldset>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="ser">
                                <fieldset style="margin-top: 30px;">
                                    <h4>3.А. Обстеження серцево-судинної системи</h4>
                                    <table class='mainT' style="width: 100%;">
                                        <tr>
                                            <td style="display: flex;"><label>Чи був у вас інфаркт?</label></td><td>
                                                <select name="infarkt" class="form-control" onchange="addIn(this.value)">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так">Так</option>
                                                </select>

                                           <span id="ki" style="display: flex;"></span>
                                                <span id="ki2" style="display: flex;"></span>
                                                <table id="ttt" width="250px"><tbody></tbody></table></td>
                                        </tr>
                                        <tr>
                                            <td style="display: flex;"><label>Чи був у вас інсульт?</label></td><td>
                                                <select name="insult" class="form-control" onchange="addIn1(this.value)">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так">Так</option>
                                                </select>
                                           <span id="kiIns" style="display: flex;"></span>
                                                <span id="kiIns2" style="display: flex;"></span>
                                                <table id="tttIns" width="250px"><tbody></tbody></table></td>
                                        </tr>
                                        <tr>
                                            <td style="display: flex;"><label>Хронічна серцева
                                                    недостатність - вказати стадію</label>

                                            </td>
                                            <td>
                                                <select name="hronSerd" class="form-control" onchange="addStad(this.value)">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Стадія I">Стадія I</option>
                                                    <option value="Стадія II, Період А (стадія IIа)">Стадія II, Період А (стадія IIа)</option>
                                                    <option value="Стадія II, Період Б (стадія IIб)">Стадія II, Період Б (стадія IIб)</option>
                                                    <option value="Стадія III, Період А (стадія IIIа)">Стадія III, Період А (стадія IIIа)</option>
                                                    <option value="Стадія III, Період Б (стадія IIIб)">Стадія III, Період Б (стадія IIIб)</option>
                                                </select>

                                            <div style="display: flex;"><span id="kiStad" style="display: flex;"></span>
                                                <span id="kiStad2" style="display: flex; width: 100px;"></span>
                                            </div></td>
                                        </tr>
                                    </table>
                                </fieldset>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="diab">
                                <fieldset style="margin-top: 30px;">
                                    <h4>4.А. Обстеження очей</h4>
                                    <table class='mainT' style="width: 100%;">
                                        <tr>
                                            <td style="display: flex;"><label class="lb1">Дата обстеження очного дна: дд-мм-рр</label>

                                            </td>
                                            <td><input type="date" class="form-control" name="glaz"></td>

                                        </tr>
                                        <tr>
                                            <td style="display: flex; width: 500px;"><label class="lb1">Діабетична ретинопатія?</label></td><td>
                                                <select name="diabDiab" class="form-control" onchange="addDiab(this.value)">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так">Так</option>
                                                </select>
                                            <span id="kiDiab"></span>

                                                <span id="kiDiab2"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="display: flex;"><label class="lb1">Непролиферативная ретинопатія?</label></td><td>
                                                <select name="diabNep" class="form-control" onchange="addNep(this.value)">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так">Так</option>
                                                </select>
                                          <span id="kiNep"></span>

                                                <span id="kiNep2"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="display: flex;"><label class="lb1">Препроліфератівная ретинопатія?</label></td><td>
                                                <select name="diabPrep" class="form-control" onchange="addPrep(this.value)">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так">Так</option>
                                                </select>
                                           <span id="kiPrep"></span>
                                                <span id="kiPrep2"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="display: flex;"><label class="lb1">Пролиферативная ретинопатія?</label></td><td>
                                                <select name="diabPrep2" class="form-control" onchange="addPrep2(this.value)">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так">Так</option>
                                                </select>
                                           <span id="kiPrep12"></span>
                                                <span id="kiPrep22"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="display: flex;"><label class="lb1">Сліпота?</label></td><td>
                                                <select name="Slep" class="form-control" onchange="addSlep(this.value)">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так">Так</option>
                                                </select>
                                            <span id="kiSlep"></span>
                                                <span id="kiSlep2"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="display: flex;"><label class="lb1">Лазерне лікування?</label></td><td>
                                                <select name="Lazer" class="form-control" onchange="addLazer(this.value)">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так">Так</option>
                                                </select>
                                            <span id="kiLazer"></span>
                                                <span id="kiLazer2"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="display: flex;"><label class="lb1">Катаракта?</label></td><td>
                                                <select name="Katar" class="form-control" onchange="addKatar(this.value)">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так">Так</option>
                                                </select>
                                           <span id="kiKatar"></span>
                                                <span id="kiKatar2"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="display: flex;"><label class="lb1">Макулопатія?</label></td><td>
                                                <select name="Mal" class="form-control" onchange="addMal(this.value)">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так">Так</option>
                                                </select>
                                            <span id="kiMal"></span>
                                                <span id="kiMal2"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="display: flex;"><label class="lb1">Глаукома?</label></td><td>
                                                <select name="Glauk" class="form-control" onchange="addGlauk(this.value)">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так">Так</option>
                                                </select>
                                          <span id="kiGlauk"></span>
                                                <span id="kiGlauk2"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="display: flex;"><label class="lb1">На сьогодні лікування ДР:</label></td><td>
                                                <select name="LechDR" class="form-control">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Кортикостероїди (триамцинолон)">Кортикостероїди (триамцинолон)</option>
                                                    <option value="Хірургічні втручання">Хірургічні втручання</option>
                                                    <option value="Інгібітори VEGF">Інгібітори VEGF</option>
                                                    <option value="Ін'єкції гіалуронідази">Ін'єкції гіалуронідази</option>
                                                    <option value="Лазерна фотокоагуляція">Лазерна фотокоагуляція</option>
                                                    <option value="Інше">Інше</option>
                                                </select>
                                            </td></tr><tr><td>
                                                <label>Дані OST:</label></td><td>
                                                                                          <input type="file" style='background: transparent;' name="OST" class="form-control">
                                            </td>
                                        </tr>
                                    </table>
                                </fieldset>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="nefr">
                                <fieldset style="margin-top: 30px;">
                                    <h4>5.А. Обстеження нирок</h4>
                                    <table class='mainT' style="width: 100%;">
                                        <tr>
                                            <td style="display: flex;"><label class="lb1">Дата обстеження нирок:: дд-мм-рр</label>

                                            </td>
                                            <td><input type="date" class="form-control" name="pochki"></td>

                                        </tr>
                                        <tr>
                                            <td style="display: flex; width: 500px;"><label class="lb1">Діабетична нефропатія?</label></td><td>
                                                <select name="diabNefro" class="form-control" onchange="addNefro(this.value)">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так">Так</option>
                                                </select>
                                           <span id="kiNefro"></span>
                                                <span id="kiNefro2"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="display: flex;"><label class="lb1">Хронічна ниркова недостатність?</label></td><td>
                                                <select name="diabPochNEd" class="form-control" onchange="addPochNEd(this.value)">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так">Так</option>
                                                </select>
                                           <span id="kiPochNEd"></span>
                                                <span id="kiPochNEd2"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="display: flex;"><label class="lb1">Хронічна ниркова недостатність - це заключна стадія?</label></td><td>
                                                <select name="diabPochSt" class="form-control" onchange="addPochSt(this.value)">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так">Так</option>
                                                </select>
                                            <span id="kiPochSt"></span>
                                                <span id="kiPochSt2"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="display: flex;"><label class="lb1">Діаліз?</label></td><td>
                                                <select name="diabDializ" class="form-control" onchange="addDializ(this.value)">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так">Так</option>
                                                </select>
                                           <span id="kiDializ"></span>
                                                <span id="kiDializ2"></span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td style="display: flex;"><label class="lb1">Поточні методи лікування:
                                                    ліки (назви та група):</label>

                                            </td>
                                            <td>
                                                <select name="LechPoch" class="form-control">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Інгібітори АПФ">Інгібітори АПФ</option>
                                                    <option value="Прямі інгібітори реніну">Прямі інгібітори реніну</option>
                                                    <option value="Діуретики">Діуретики</option>
                                                    <option value="Блокатори Са-каналів">Блокатори Са-каналів</option>
                                                    <option value="Бета-адреноблокатори">Бета-адреноблокатори</option>
                                                    <option value="Препарати заліза">Препарати заліза</option>
                                                    <option value="Інше">Інше</option>
                                                </select>
                                            </td>

                                        </tr>
                                    </table>
                                </fieldset>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="pol">
                                <fieldset style="margin-top: 30px;">
                                    <h4>6.А. Полінейроангіопатія</h4>
                                    <table class='mainT' style="width: 80%;">
                                        <tr>
                                            <td ><label class="lb1">Дата обстеження: дд-мм-рр</label>

                                            </td>
                                            <td><input type="date" class="form-control" name="datPoli"></td>

                                        </tr>
                                        <tr>
                                            <td ><label class="lb1">Ангіопатія нижніх кінцівок?</label></td><td>
                                                <select name="diabAngin" class="form-control" onchange="addAngin(this.value)">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так">Так</option>
                                                </select>
                                            <span id="kiAngin"></span>

                                                <span id="kiAngin2"></span>
                                                <br><span id="kiAngin3"></span>
                                                <br><span id="kiAngin4"></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td ><label class="lb1">Периферична нейропатія?</label></td><td>
                                                <select name="diabNejr" class="form-control" onchange="addNejr(this.value)">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так">Так</option>
                                                </select>
                                          <span id="kiNejr"></span>

                                                <span id="kiNejr2"></span>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td ><label class="lb1">Чи бувають незвичайні відчуття в стопах?</label></td><td>
                                                <select name="diabStopp" class="form-control" >
                                                    <option value="--" >--</option>
                                                    <option value="Ні, все нормально">Ні, все нормально</option>
                                                    <option value="Оніміння">Оніміння</option>
                                                    <option value="Поколювання">Поколювання</option>
                                                    <option value="Мурашки">Мурашки</option>
                                                    <option value="Печіння">Печіння</option>
                                                    <option value="Підвищено чутливість">Підвищено чутливість</option>
                                                    <option value="Знижено чутливості">Знижено чутливості</option>
                                                    <option value="Складнощі при русі">Складнощі при русі</option>
                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td><label class="lb1">Чи є біль в обох ногах?</label></td><td>
                                                <select name="Bol" class="form-control" >
                                                    <option value="--" >--</option>
                                                    <option value="Ні, болю немає">Ні, болю немає</option>
                                                    <option value="Ні, біль з одного боку">Ні, біль з одного боку</option>
                                                    <option value="Так">Так</option>
                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Якщо біль в обох стопах, як вона
                                                    проявляється?</label></td><td>
                                                <select name="Boltwo" class="form-control" >
                                                    <option value="--">--</option>
                                                    <option value="Спонтанна">Спонтанна</option>
                                                    <option value="Постійна">Постійна</option>

                                                </select>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td ><label class="lb1">Яка інтенсивність болю (шкала від 1 до 5)?</label></td><td>
                                                <select name="BolInten" class="form-control" >
                                                    <option value="--">--</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>

                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td><label class="lb1">Як проявляється біль?</label></td><td>
                                                <select name="Bolkak" class="form-control" >
                                                    <option value="--">--</option>
                                                        <option value="Печіння">Печіння</option>
                                                    <option value="Викручування">Викручування</option>
                                                    <option value="Здавлення">Здавлення</option>
                                                    <option value="Гостра стріляючий біль">Гостра стріляючий біль</option>
                                                    <option value="Пронизуючий біль (як голки)">Пронизуючий біль (як голки)</option>
                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Прийом препаратів?</label></td><td>
                                                <select name="Preparat" class="form-control"  >
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так">Так</option>

                                                </select>

                                            </td>
                                        </tr>
                                        <tr>
                                            <td ><label class="lb1">Якщо так, розписати які препарати?</label></td><td>
                                                <select name="PreparatKakie" class="form-control" >
                                                    <option value="--">--</option>
                                                    <option value="Антиконвульсанти (прегабалін, габапентин)">Антиконвульсанти (прегабалін, габапентин)</option>
                                                    <option value="Антидепресанти (Дулоксетин - інгібітори зворотного захоплення серотоніну. НА)">
                                                        Антидепресанти (Дулоксетин - інгібітори зворотного захоплення серотоніну. НА)</option>
                                                    <option value="Трициклічніантидепресанти (амітриптилін)">Трициклічніантидепресанти (амітриптилін)</option>
                                                    <option value="Опіоіди">Опіоіди</option>
                                                    <option value="Вітаміни групи В">Вітаміни групи В</option>
                                                    <option value="Аналгетики">Аналгетики</option>
                                                    <option value="НПЗП">НПЗП</option>
                                                    <option value="Інше">Інше</option>
                                                </select>
                                            </td>

                                        </tr>
                                    </table>
                                </fieldset>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="stop">
                                <fieldset style="margin-top: 30px;">
                                    <h4>6.Б. Обстеження стопи</label>
                                        <div id="tab-content10"</h4>
                                    <table class='mainT' style="width: 100%;">
                                        <tr>
                                            <td style="display: flex;"><label>Дата обстеження стопи: дд-мм-рр?</label></td><td>
                                                <input type="date" name="datStopObsl" class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label>Зниження температури?</label></td><td>
                                                <select name="SnizhT" class="form-control">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так">Так</option>
                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label>Порушення тактильної чутливості?</label></td><td>
                                                <select name="Chyvs" class="form-control">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так">Так</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td ><label>Порушення вібраційної чутливості?</label></td><td>
                                                <select name="NarVibr" class="form-control">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так">Так</option>
                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td><label>Зниження / відсутність рефлексів?</label></td><td>
                                                <select name="Reflex" class="form-control">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так">Так</option>
                                                </select></td>
                                        </tr><tr>
                                            <td><label>Наявність виразок?</label></td><td>
                                                <select name="Jazv" class="form-control">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так">Так</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td ><label>Нагноєння виразок?</label></td><td>
                                                <select name="GnojJazv" class="form-control">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так">Так</option>
                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td><label>Пульс на стопі?</label></td><td>
                                                <select name="PylsStopa" class="form-control">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так">Так</option>
                                                </select></td>
                                        </tr><tr>
                                            <td><label>Шунтування / ангіопластика?</label></td><td>
                                                <select name="Shynt" class="form-control">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так">Так</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td ><label>Перемежовуються кульгавість?</label></td><td>
                                                <select name="Hrom" class="form-control">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так">Так</option>
                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td><label>Ампутація?</label></td><td>
                                                <select name="Ampyt" class="form-control" onchange="addAmput(this.value)">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Ліва нога">Ліва нога</option>
                                                    <option value="Права нога">Права нога</option>
                                                </select>

                                                <span id="kiAmput1"></span>

                                                <span id="kiAmput3"></span>
                                                <span id="kiAmput"></span>

                                                <span id="kiAmput2"></span>
                                            </td>
                                        </tr>
                                    </table>
                                </fieldset>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="lab">
                                <fieldset style="margin-top: 30px;">
                                    <h4>7.А. Лабораторні дослідження</h4>
                                    <table class='mainT' id="forTab1" style="width: 100%;">
                                        <tr>
                                            <td ><label class="lb1">Дата обстеження: дд-мм-рр</label></td><td>
                                                <input type="date" class="form-control" name="datLab">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Ви зараз натщесерце?</label></td><td>
                                                <select name="Natosh" class="form-control">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так">Так</option>
                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">О котрій годині був останній прийом їжі (напередодні ввечері)?</label></td><td>
                                                <input name="Pisha" type="text" class="form-control" placeholder="">

                                            </td>
                                        </tr>
                                        <tr style="background: #295b8e;">
                                            <td><label class="lb1" style="color:white;">Глюкоза крові натще:</label></td>
                                            <td></td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <label class="lb1">Показник, nmol / l</label></td><td>
                                                <input type="text" name="nmol" class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Дата, дд-мм-рр</label></td><td>
                                                <input type="date" name="Datnmol" class="form-control">
                                            </td>
                                        </tr>
                                        <tr style="background: #295b8e;">
                                            <td><label class="lb1" style="color:white;">Глікозилювання гемоглобін?</label></td>
                                            <td></td>

                                        </tr>
                                        <tr>
                                            <td >
                                                <label class="lb1">%</label></td><td>
                                                <input type="text" name="vidsot" class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">pmol/pmol</label></td><td>
                                                <input type="text" name="gemogl" class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="lb1">Дата, дд-мм-рр</label></td><td>
                                                <input type="date" name="Datgemogl" class="form-control">

                                            </td>
                                        </tr>
                                        <tr style="background: #295b8e;">
                                            <td ><label class="lb1" style="color:white;">Загальний аналіз крові (дата)?</label>

                                            </td>
                                            <td>
                                                <input type="date" name="Datkrovi" class="form-control">
                                            </td>
                                                                                 </tr>

                                        <tr>
                                            <td >
                                                <label class="lb1">Еритроцити</label></td><td>
                                                <input type="text" name="eritr" class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Гемоглобін</label></td><td>
                                                <input type="text" name="gemogl2" class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Лейкоцити (кількість)</label></td><td>
                                                <input type="text" name="lekoz" class="form-control">

                                            </td>
                                        </tr>
                                        <tr>
                                            <td >
                                                <label class="lb1">Нейтрофіли (абс к-ть)</label></td><td>
                                                <input type="text" name="nejtrof" class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Моноцити (абс к-ть)</label></td><td>
                                                <input type="text" name="monozit" class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Лімфоцити (абс к-во)</label></td><td>
                                                <input type="text" name="limfoz" class="form-control">

                                            </td>
                                        </tr>
                                        <tr>
                                            <td >
                                                <label class="lb1">Тромбоцити (абс к-во)</label></td><td>
                                                <input type="text" name="tromb" class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Тромбоцити, MPV</label></td><td>
                                                <input type="text" name="mpv" class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Інше (показник)</label></td><td>
                                                <input type="text" name="dryg" class="form-control">

                                            </td>
                                        </tr>
                                        <tr style="background: #295b8e;">
                                            <td><label class="lb1" style="color:white;">Креатинін в плазмі крові</label></td>
                                            <td></td>

                                        </tr>
                                        <tr>

                                            <td>
                                                <label class="lb1">Показник, мкмоль / л</label></td><td>
                                                <input type="text" name="kreat" class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Дата, дд-мм-рр</label></td><td>
                                                <input type="date" name="datkreat" class="form-control">

                                            </td>
                                        </tr>
                                        <tr style="background: #295b8e;">
                                            <td><label class="lb1" style="color:white;">Креатинін в сечі</label></td>
                                            <td></td>

                                        </tr>
                                        <tr>
                                            <td >

                                                <label class="lb1">Показник, мкмоль / л</label></td><td>
                                                <input type="text" name="kreatMocha" class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Дата, дд-мм-рр</label></td><td>
                                                <input type="date" name="datMocha" class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>

                                                <label class="lb1">Кліренс креатиніну (СКФ, швидкості клубочкової фільтрації)</label></td><td>
                                                <input type="text" name="klirkreat" class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td >
                                                <label class="lb1">Протеїнурія</label></td><td>
                                                <select name="Protein" class="form-control">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так">Так</option>
                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Останній вимір, мг / сут</label></td><td>
                                                <input type="text" name="posIzm" class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Дата, дд-мм-рр</label></td><td>
                                                <input type="date" name="datProtein" class="form-control">

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
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так">Так</option>
                                                </select> <span id="kiMikro1"></span>
                                                                                            <span id="kiMikro3"></span>


                                           <span id="kiMikro"></span>
                                                <span id="kiMikro2"></span>

                                            </td>
                                        </tr>
                                        <tr style="background: #295b8e;">
                                            <td><label class="lb1" style="color:white;">Лабораторний аналіз ліпідів в крові (дата):</label></td>
                                            <td><input type="date" name="Lipiddat" class="form-control"> </td>

                                        </tr>
                                        <tr>
                                            <td >

                                                <label class="lb1">Холестерин (показник)</label></td><td>
                                                <input type="text" name="Holest" class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Ліпіди високої щільності
                                                    (Показник)</label></td><td>
                                                <input type="text" name="LipidVis" class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>

                                                <label class="lb1">Ліпіди низької щільності (показник)</label></td><td>
                                                <input type="text" name="LipidNiz" class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td >

                                                <label class="lb1">Тригліцериди (показник)</label></td><td>
                                                <input type="text" name="Trigliz" class="form-control">
                                            </td>

                                        </tr>
                                        <tr>
                                            <td >

                                                <label class="lb1">Аспартатамінотрансфераза (АСТ)</label></td><td>
                                                <input type="text" name="Asparta" class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Аланінамінотрансфераза (АСТ)</label></td><td>
                                                <input type="text" name="Alanin" class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">С-реактивний білок</label></td><td>
                                                <input type="text" name="BelocS" class="form-control">

                                            </td>
                                        </tr>
                                        <tr>
                                            <td >

                                                <label class="lb1">C-пептид, показник:</label></td><td>
                                                <input type="text" name="Peptid" class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">C-пептид, одиниця виміру:</label></td><td>
                                               <!-- <input type="text" name="PeptiEdIzm" class="form-control">
                                            --></td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">pmol/l</label></td><td>
                                                <input type="text" name="PeptidPmol" class="form-control">

                                            </td>
                                        </tr>
                                        <tr>
                                            <td >

                                                <label class="lb1">nmol/l:</label></td><td>
                                                <input type="text" name="PeptidNmol" class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">C-пептід, Дата: дд-мм-рр:</label></td><td>
                                                <input type="date" name="S_Pep" class="form-control">
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="lb1">AT-GAD:</label></td><td>
                                                <input type="text" name="atGad" class="form-control">
                                            </td>

                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="lb1">AT-GAD дата:</label></td><td>
                                                <input type="date" name="atGaddat" class="form-control">
                                            </td>

                                        </tr>
                                    </table>
                                </fieldset>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="bio">
                                <fieldset style="margin-top: 30px;">
                                    <h4>7.Б. Біоматеріал</label>
                                        <div id="tab-content12"</h4>
                                    <table class='mainT' style="width: 100%;">
                                        <tr>
                                            <td >
                                                <label>Сиворотка?</label></td><td>
                                                <select name="Sivor" class="form-control">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так">Так</option>
                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label>Плазма?</label></td><td>
                                                <select name="Plazma" class="form-control">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так">Так</option>
                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label>Кров на ДНК?</label></td><td>
                                                <select name="DNK" class="form-control">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так">Так</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td >
                                                <label>Кров на РНК?</label></td><td>
                                                <input name="PHK" type="text" class="form-control">

                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label>Слина?</label></td><td>
                                                <select name="Sluna" class="form-control">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так">Так</option>
                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label>Біоптат кожи?</label></td><td>
                                                <select name="Biopat" class="form-control">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так">Так</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td >
                                                <label>Примітки при заборі крові (зрив вакуумної пробки, тощо)</label>


                                            </td>
                                            <td ">
                                                <textarea name="PrimZAbKrov" class="form-control"></textarea>
                                            </td>

                                        </tr>
                                    </table>
                                </fieldset>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="lik">
                                <fieldset style="margin-top: 30px;">
                                    <h4>8.А. Лікування</h4>
                                    <table class='mainT' id="forTab2" style="width: 100%;">
                                        <tr>
                                            <td style="display: flex;"><label class="lb1">Лікування цукрового діабету</label></td><td>
                                                <select name="LechDIabet" class="form-control">
                                                    <option value="--" >--</option>
                                                    <option value="Не проводиться">Не проводиться</option>
                                                    <option value="Дієта">Дієта</option>
                                                    <option value="Таблетки">Таблетки</option>
                                                    <option value="Інсулін">Інсулін</option>
                                                    <option value="Таблетки + інсулін">Таблетки + інсулін</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="display: flex;"><label class="lb1">Дієта</label></td><td>
                                                <select name="dieta" class="form-control">
                                                    <option value="--" >--</option>
                                                    <option value="Так" >Так</option>
                                                    <option value="Ні" >Ні</option>
                                                </select>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <label class="lb1">Лікування діабету: інсулін (препарат, доза прийому, кратність)</label></td><td>
                                                <select name="LechInsul" class="form-control">
                                                    <option value="--" >--</option>
                                                    <option value="Базисная инсулинотерапия">Базисна інсулінотерапії</option>
                                                    <option value="Помпова інсулінотерапія">Помпова інсулінотерапія</option>
                                                    <option value="Змішаний">Змішаний</option>

                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Дата початку інсулінотерапії (дд- мм-рр)</label></td><td>
                                                <input type="date" name="datLechDiab" class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label class="lb1">Лікування діабету: таблетки</label></td><td>
                                                <select name="diabLechTab" class="form-control">
                                                    <option value="--" >--</option>
                                                    <option value="Бігуаніди">Бігуаніди</option>
                                                    <option value="Похідні сульфонілсечовини">Похідні сульфонілсечовини</option>
                                                    <option value="Інгібітори ДПП-4">Інгібітори ДПП-4</option>
                                                    <option value="Інгібітори НЗКТГ-2">Інгібітори НЗКТГ-2</option>
                                                    <option value="Тіазолідиндіони">Тіазолідиндіони</option>
                                                    <option value="Інгібітори a-глікозидази">Інгібітори a-глікозидази</option>
                                                    <option value="Меглітінід">Меглітінід</option>
                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Лікування гіпертонії (препарат, доза прийому, кратність)</label></td><td>
                                                <select name="LechGiper" class="form-control">
                                                    <option value="--" >--</option>
                                                    <option value="Ні" >Ні</option>
                                                    <option value="Не проводиться">Не проводиться</option>
                                                    <option value="Бета-блокатори">Бета-блокатори</option>
                                                    <option value="ACE-інгібітори">ACE-інгібітори</option>
                                                    <option value="Сартани">Сартани</option>
                                                    <option value="Кальцієві блокатори">Кальцієві блокатори</option>
                                                    <option value="Діуретики">Діуретики</option>
                                                    <option value="Інші, назва">Інші, назва</option>
                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Лікування гіперліпідемії</label></td><td>
                                                <select name="LechLipidGiper" class="form-control">
                                                    <option value="--" >--</option>
                                                    <option value="Ні" >Ні</option>
                                                    <option value="Не проводиться">Не проводиться</option>
                                                    <option value="Статини">Статини</option>
                                                    <option value="Фібрати">Фібрати</option>

                                                    <option value="Інші, назва">Інші, назва</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label class="lb1">Хворієте (хворіли) ви онкозахворюваннями?</label></td><td>
                                                <select name="Onko" class="form-control">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Так">Так</option>

                                                </select>
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Вкажіть вид онкозахворювання</label></td><td>
                                                <input type="text" name="VidOnko" class="form-control">
                                            </td>
                                        </tr><tr>
                                            <td>
                                                <label class="lb1">Дата постановки діагнозу
                                                    онкозахворювання</label></td><td>
                                                <input type="date" name="dateOnko" class="form-control">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label class="lb1">Якщо так - лікування онкозахворювання
                                                    (Препарати - назва препаратів,
                                                    група)?</label>

                                            </td>
                                            <td>
                                                <select name="OnkoLek" class="form-control">
                                                    <option value="--" >--</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Хіміотерапія">Хіміотерапія</option>
                                                    <option value="Імунотерапія">Імунотерапія</option>
                                                    <option value="Гормональна терапія">Гормональна терапія</option>
                                                    <option value="Комбінована (хіміо + тергетная терапія)">Комбінована (хіміо + тергетная терапія)</option>
                                                    <option value="Таргетная терапія">Таргетная терапія</option>
                                                    <option value="Хірургічне">Хірургічне</option>
                                                    <option value="Інші">Інші</option>
                                                </select>
                                            </td>

                                        </tr>
                                    </table>
                                </fieldset>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="gen">
                                <fieldset style="margin-top: 30px;">
                                    <h4>9.А. Геніаологічне дерево</h4>
                                    <table class='mainT' id="forTab2" style="width: 100%;">
                                        <tr>
                                            <td style="display: flex;"><label class="lb1">Геніаологічне дерево</label></td><td>
                                                <select name="gen" class="form-control">
                                                    <option value="--" >--</option>
                                                    <option value="Так">Так</option>
                                                    <option value="Ні">Ні</option>
                                                    <option value="Не знаю">Не знаю</option>

                                                </select>
                                            </td>
                                        </tr>

                                    </table>
                                </fieldset>
                            </div>
                        </div>

                    </div>
                    <br>
                    <div class="controls" style="display: table; margin: 0 auto; text-align: center;" >
                        <a href="javascript:void(0)" class="btn btn-default prev" style="border: 1px solid darkblue;color:darkblue;">< Попередня</a>
                        <input type="submit" name="save" class="btn" style="border: 1px solid darkblue;color:darkblue;" value="Зберегти">
                        <a href="javascript:void(0)" class="btn btn-default next" style="border: 1px solid darkblue;color:darkblue;">Наступна ></a>

                    </div>
        </form>
            </app-login>


            <script src="../../js/jquery3.5.1.js">

            </script>
            <script src="../../js/bootstrap.js"></script>
            <script>
                $(document).ready(function(){

                    var tab = $('#myTab');
                    var num = tab.find('.nav-tabs li').length - 1;

                    $('.next').click(function(){

                        var cur = tab.find('li.active');
                        var index = cur.index();

                        if(index == num) {
                            var next = tab.find('.nav-tabs').find('li').eq(0);
                        }
                        else {
                            var next = cur.next('li');
                        }

                        next.find('a').tab('show');
                    });

                    $('.prev').click(function(){
                        var cur = tab.find('li.active');
                        var index = cur.index();

                        if(index == 0) {
                            var next = tab.find('.nav-tabs').find('li').eq(num);
                        }
                        else {
                            var next = cur.prev('li');
                        }

                        next.find('a').tab('show');
                    });

                });
            </script>


        </div>
    </div>
   <?



}else{
    echo "Ви не авторизовані в системі";
}
?>
<script>
    function addMikro(el) {
        if(el=='Ні' || el=='--') {

            var el = document.getElementById('datMikro');
            var el1 = document.getElementById('datMikroL');
            var el3 = document.getElementById('kakMikro');
            var el4 = document.getElementById('kakMikro1');
            el.remove();
            el1.remove();
            el3.remove();
            el4.remove();
        }
        else{
            var el11=document.getElementById("kiMikro1");
            var el22=document.getElementById("kiMikro3");
            var lab11 = document.createElement("label");

            var select=document.createElement("input");
            lab11.innerText="Якщо так – показник, мг/л";
            lab11.id="kakMikro";
            select.name="kakMikro";
            select.id="kakMikro1";
            select.name="kakMikro1";
            select.setAttribute("class", "form-control");
            el11.appendChild(lab11);
            el22.appendChild(select);
            var lab = document.createElement("label");
            var inp1 = document.createElement('input');
            inp1.type = 'date';
            inp1.name = 'datMikro';
            inp1.id = 'datMikro';
            inp1.setAttribute("class", "form-control");
            inp1.setAttribute("width", "100px");
            lab.innerText='Дата';
            lab.id='datMikroL';
            var sp=document.getElementById('kiMikro');
            var sp2=document.getElementById('kiMikro2');
            sp.appendChild(lab);
            sp2.appendChild(inp1);

        }

    }
    function addAmput(el) {
        if(el=='Ні' || el=='--') {

            var el = document.getElementById('datAmput');
            var el1 = document.getElementById('datAmputL');
            var el3 = document.getElementById('kakAmput');
            var el4 = document.getElementById('kakAmput1');
            el.remove();
            el1.remove();
            el3.remove();
            el4.remove();
        }
        else{
            var el = document.getElementById('datAmput');
            var el1 = document.getElementById('datAmputL');
            var el3 = document.getElementById('kakAmput');
            var el4 = document.getElementById('kakAmput1');
            if(el) {
                el.remove();
                el1.remove();
                el3.remove();
                el4.remove();
            }
            var el11=document.getElementById("kiAmput1");
            var el22=document.getElementById("kiAmput3");
            var lab11 = document.createElement("label");
            var option= document.createElement("option");
            option.innerText="Великий палець";
            var option1= document.createElement("option");
            option1.innerText="Стопа";
            var option2= document.createElement("option");
            option2.innerText="Коліно";
            var option3= document.createElement("option");
            option3.innerText="Стегно";
            var select=document.createElement("select");
            lab11.innerText="Локалізація ампутації?";
            lab11.id="kakAmput";
            select.appendChild(option);
            select.appendChild(option1);
            select.appendChild(option2);
            select.appendChild(option3);
            select.id="kakAmput1";
            select.name="kakAmput1";
            select.setAttribute("class", "form-control");
            el11.appendChild(lab11);
            el22.appendChild(select);
            var lab = document.createElement("label");
            var inp1 = document.createElement('input');
            inp1.type = 'text';
            inp1.name = 'datAmput';
            inp1.id = 'datAmput';
            inp1.setAttribute("class", "form-control");
            inp1.setAttribute("width", "100px");
            lab.innerText='Рік ампутації';
            lab.id='datAmputL';
            var sp=document.getElementById('kiAmput');
            var sp2=document.getElementById('kiAmput2');
            sp.appendChild(lab);
            sp2.appendChild(inp1);

        }

    }
    function addNejr(el) {
        if(el=='Ні' || el=='--') {

            var el = document.getElementById('datNejr');
            var el1 = document.getElementById('datNejrL');
            el.remove();
            el1.remove();
        }
        else{

            var lab = document.createElement("label");
            var inp1 = document.createElement('input');
            inp1.type = 'date';
            inp1.name = 'datNejr';
            inp1.id = 'datNejr';
            inp1.setAttribute("class", "form-control");
            inp1.setAttribute("width", "100px");
            lab.innerText='Дата постановки';
            lab.id='datNejrL';
            var sp=document.getElementById('kiNejr');
            var sp2=document.getElementById('kiNejr2');
            sp.appendChild(lab);
            sp2.appendChild(inp1);

        }

    }
    function addAngin(el) {
        if(el=='Ні' || el=='--') {

            var el = document.getElementById('datAngin');
            var el1 = document.getElementById('datAnginL');
            var el3 = document.getElementById('kakAngio');
            var el4 = document.getElementById('kakAng');
            el.remove();
            el1.remove();
            el3.remove();
            el4.remove();
        }
        else{
         /*   var tbody = document.getElementById('tttAngin').getElementsByTagName("TBODY")[0];
            var tab = document.getElementById('tttAngin');*/

            var inp1 = document.createElement('input');
        //   var td = document.createElement("td");
          //  var td1 = document.createElement("td");
           // var row = document.createElement("tr");
            var el11=document.getElementById("kiAngin3");
            var el22=document.getElementById("kiAngin4");
            var lab11 = document.createElement("label");
            var option= document.createElement("option");
            option.innerText="пальців стоп";
            var option1= document.createElement("option");
            option1.innerText="вище стопи до коліна";
            var option2= document.createElement("option");
            option2.innerText="вище коліна";
var select=document.createElement("select");
            lab11.innerText="Яка ангіопатія?";
lab11.id="kakAng";
select.appendChild(option);
            select.appendChild(option1);
            select.appendChild(option2);
select.id="kakAngio";
select.name="kakAngio";
select.setAttribute("class", "form-control");
el11.appendChild(lab11);
el22.appendChild(select);
            var lab = document.createElement("label");
            var inp1 = document.createElement("input");
            inp1.type = 'date';
            inp1.name = 'datAngin';
            inp1.id = 'datAngin';

            inp1.setAttribute("class", "form-control");
            inp1.setAttribute("width", "100px");
            lab.innerText='Дата постановки';
            lab.id='datAnginL';
            var sp=document.getElementById('kiAngin');
            var sp2=document.getElementById('kiAngin2');
            sp.appendChild(lab);
            sp2.appendChild(inp1);

        }

    }
    function addDializ(el) {
        if(el=='Ні' || el=='--') {

            var el = document.getElementById('datDializ');
            var el1 = document.getElementById('datDializL');
            el.remove();
            el1.remove();
        }
        else{

            var lab = document.createElement("label");
            var inp1 = document.createElement('input');
            inp1.type = 'date';
            inp1.name = 'datDializ';
            inp1.id = 'datDializ';
            inp1.setAttribute("class", "form-control");
            inp1.setAttribute("width", "100px");
            lab.innerText='Дата постановки';
            lab.id='datDializL';
            var sp=document.getElementById('kiDializ');
            var sp2=document.getElementById('kiDializ2');
            sp.appendChild(lab);
            sp2.appendChild(inp1);

        }

    }
    function addPochSt(el) {
        if(el=='Ні' || el=='--') {

            var el = document.getElementById('datPochSt');
            var el1 = document.getElementById('datPochStL');
            el.remove();
            el1.remove();
        }
        else{

            var lab = document.createElement("label");
            var inp1 = document.createElement('input');
            inp1.type = 'date';
            inp1.name = 'datPochSt';
            inp1.id = 'datPochSt';
            inp1.setAttribute("class", "form-control");
            inp1.setAttribute("width", "100px");
            lab.innerText='Дата постановки';
            lab.id='datPochStL';
            var sp=document.getElementById('kiPochSt');
            var sp2=document.getElementById('kiPochSt2');
            sp.appendChild(lab);
            sp2.appendChild(inp1);

        }

    }
    function addPochNEd(el) {
        if(el=='Ні' || el=='--') {

            var el = document.getElementById('datPochNEd');
            var el1 = document.getElementById('datPochNEdL');
            el.remove();
            el1.remove();
        }
        else{

            var lab = document.createElement("label");
            var inp1 = document.createElement('input');
            inp1.type = 'date';
            inp1.name = 'datPochNEd';
            inp1.id = 'datPochNEd';
            inp1.setAttribute("class", "form-control");
            inp1.setAttribute("width", "100px");
            lab.innerText='Дата постановки';
            lab.id='datPochNEdL';
            var sp=document.getElementById('kiPochNEd');
            var sp2=document.getElementById('kiPochNEd2');
            sp.appendChild(lab);
            sp2.appendChild(inp1);

        }

    }
    function addNefro(el) {
        if(el=='Ні' || el=='--') {

            var el = document.getElementById('datNefro');
            var el1 = document.getElementById('datNefroL');
            el.remove();
            el1.remove();
        }
        else{

            var lab = document.createElement("label");
            var inp1 = document.createElement('input');
            inp1.type = 'date';
            inp1.name = 'datNefro';
            inp1.id = 'datNefro';
            inp1.setAttribute("class", "form-control");
            inp1.setAttribute("width", "100px");
            lab.innerText='Дата постановки';
            lab.id='datNefroL';
            var sp=document.getElementById('kiNefro');
            var sp2=document.getElementById('kiNefro2');
            sp.appendChild(lab);
            sp2.appendChild(inp1);

        }

    }
    function addGlauk(el) {
        if(el=='Ні' || el=='--') {

            var el = document.getElementById('datGlauk');
            var el1 = document.getElementById('datGlaukL');
            el.remove();
            el1.remove();
        }
        else{

            var lab = document.createElement("label");
            var inp1 = document.createElement('input');
            inp1.type = 'date';
            inp1.name = 'datGlauk';
            inp1.id = 'datGlauk';
            inp1.setAttribute("class", "form-control");
            inp1.setAttribute("width", "100px");
            lab.innerText='Дата постановки';
            lab.id='datGlaukL';
            var sp=document.getElementById('kiGlauk');
            var sp2=document.getElementById('kiGlauk2');
            sp.appendChild(lab);
            sp2.appendChild(inp1);

        }

    }
    function addMal(el) {
        if(el=='Ні' || el=='--') {

            var el = document.getElementById('datMal');
            var el1 = document.getElementById('datMalL');
            el.remove();
            el1.remove();
        }
        else{

            var lab = document.createElement("label");
            var inp1 = document.createElement('input');
            inp1.type = 'date';
            inp1.name = 'datMal';
            inp1.id = 'datMal';
            inp1.setAttribute("class", "form-control");
            inp1.setAttribute("width", "100px");
            lab.innerText='Дата постановки';
            lab.id='datMalL';
            var sp=document.getElementById('kiMal');
            var sp2=document.getElementById('kiMal2');
            sp.appendChild(lab);
            sp2.appendChild(inp1);

        }

    }
    function addKatar(el) {
        if(el=='Ні' || el=='--') {

            var el = document.getElementById('datKatar');
            var el1 = document.getElementById('datKatarL');
            el.remove();
            el1.remove();
        }
        else{

            var lab = document.createElement("label");
            var inp1 = document.createElement('input');
            inp1.type = 'date';
            inp1.name = 'datKatar';
            inp1.id = 'datKatar';
            inp1.setAttribute("class", "form-control");
            inp1.setAttribute("width", "100px");
            lab.innerText='Дата постановки';
            lab.id='datKatarL';
            var sp=document.getElementById('kiKatar');
            var sp2=document.getElementById('kiKatar2');
            sp.appendChild(lab);
            sp2.appendChild(inp1);

        }

    }
    function addLazer(el) {
        if(el=='Ні' || el=='--') {

            var el = document.getElementById('datLazer');
            var el1 = document.getElementById('datLazerL');
            el.remove();
            el1.remove();
        }
        else{

            var lab = document.createElement("label");
            var inp1 = document.createElement('input');
            inp1.type = 'date';
            inp1.name = 'datLazer';
            inp1.id = 'datLazer';
            inp1.setAttribute("class", "form-control");
            inp1.setAttribute("width", "100px");
            lab.innerText='Дата постановки';
            lab.id='datLazerL';
            var sp=document.getElementById('kiLazer');
            var sp2=document.getElementById('kiLazer2');
            sp.appendChild(lab);
            sp2.appendChild(inp1);

        }

    }
    function addSlep(el) {
        if(el=='Ні' || el=='--') {

            var el = document.getElementById('datSlep');
            var el1 = document.getElementById('datSlepL');
            el.remove();
            el1.remove();
        }
        else{

            var lab = document.createElement("label");
            var inp1 = document.createElement('input');
            inp1.type = 'date';
            inp1.name = 'datSlep';
            inp1.id = 'datSlep';
            inp1.setAttribute("class", "form-control");
            inp1.setAttribute("width", "100px");
            lab.innerText='Дата постановки';
            lab.id='datSlepL';
            var sp=document.getElementById('kiSlep');
            var sp2=document.getElementById('kiSlep2');
            sp.appendChild(lab);
            sp2.appendChild(inp1);

        }

    }
    function addPrep2(el) {
        if(el=='Ні' || el=='--') {

            var el = document.getElementById('datPrep2');
            var el1 = document.getElementById('datPrep2L');
            el.remove();
            el1.remove();
        }
        else{

            var lab = document.createElement("label");
            var inp1 = document.createElement('input');
            inp1.type = 'date';
            inp1.name = 'datPrep2';
            inp1.id = 'datPrep2';
            inp1.setAttribute("class", "form-control");
            inp1.setAttribute("width", "100px");
            lab.innerText='Дата постановки';
            lab.id='datPrep2L';
            var sp=document.getElementById('kiPrep12');
            var sp2=document.getElementById('kiPrep22');
            sp.appendChild(lab);
            sp2.appendChild(inp1);

        }

    }
    function addPrep(el) {
        if(el=='Ні' || el=='--') {

            var el = document.getElementById('datPrep');
            var el1 = document.getElementById('datPrepL');
            el.remove();
            el1.remove();
        }
        else{

            var lab = document.createElement("label");
            var inp1 = document.createElement('input');
            inp1.type = 'date';
            inp1.name = 'datPrep';
            inp1.id = 'datPrep';
            inp1.setAttribute("class", "form-control");
            inp1.setAttribute("width", "100px");
            lab.innerText='Дата постановки';
            lab.id='datPrepL';
            var sp=document.getElementById('kiPrep');
            var sp2=document.getElementById('kiPrep2');
            sp.appendChild(lab);
            sp2.appendChild(inp1);

        }

    }
    function addNep(el) {
        if(el=='Ні' || el=='--') {

            var el = document.getElementById('datNep');
            var el1 = document.getElementById('datNepL');
            el.remove();
            el1.remove();
        }
        else{

            var lab = document.createElement("label");
            var inp1 = document.createElement('input');
            inp1.type = 'date';
            inp1.name = 'datNep';
            inp1.id = 'datNep';
            inp1.setAttribute("class", "form-control");
            inp1.setAttribute("width", "100px");
            lab.innerText='Дата постановки';
            lab.id='datNepL';
            var sp=document.getElementById('kiNep');
            var sp2=document.getElementById('kiNep2');
            sp.appendChild(lab);
            sp2.appendChild(inp1);

        }

    }
    function addDiab(el) {
        if(el=='Ні' || el=='--') {

            var el = document.getElementById('datDiab');
            var el1 = document.getElementById('datDiabL');
            el.remove();
            el1.remove();
        }
        else{

            var lab = document.createElement("label");
            var inp1 = document.createElement('input');
            inp1.type = 'date';
            inp1.name = 'datDiab';
            inp1.id = 'datDiab';
            inp1.setAttribute("class", "form-control");
            inp1.setAttribute("width", "100px");
            lab.innerText='Дата постановки';
            lab.id='datDiabL';
            var sp=document.getElementById('kiDiab');
            var sp2=document.getElementById('kiDiab2');
            sp.appendChild(lab);
            sp2.appendChild(inp1);

        }

    }
    function addStad(el) {
        if(el=='Ні' || el=='--') {

            var el = document.getElementById('datStad');
            var el1 = document.getElementById('datStadL');
            el.remove();
            el1.remove();
        }
        else{
            var el = document.getElementById('datStad');
            var el1 = document.getElementById('datStadL');
            if(el) {
                el.remove();
                el1.remove();
            }
                var lab = document.createElement("label");
                var inp1 = document.createElement('input');
                inp1.type = 'text';
                inp1.name = 'datStad';
                inp1.id = 'datStad';
                inp1.setAttribute("class", "form-control");
                inp1.setAttribute("width", "100px");
                lab.innerText='Дата постановки (рік)';
               lab.id='datStadL';
                var sp=document.getElementById('kiStad');
                var sp2=document.getElementById('kiStad2');
                sp.appendChild(lab);
                sp2.appendChild(inp1);

            }

        }


    function addIn1(el) {
        if(el=='Так'){
            var table = document.getElementById('tttIns');
            var kol = table.rows.length;
            kol = Number(kol);

            // var tbody = document.getElementById('ttt').getElementsByTagName("TBODY")[0];
            //  var tab = document.getElementById('ttt');
            //   var row = document.createElement("tr");
            //   var td = document.createElement("td");
            var lab = document.createElement("label");
            var inp1 = document.createElement('input');
            inp1.type = 'number';
            inp1.max='3';
            inp1.name = 'kolins';
            inp1.id = 'kolins';
            inp1.setAttribute("class", "form-control");
            inp1.setAttribute("width", "100px");
            lab.innerText='Введіть кількість інсультів';
            lab.id = 'kolinsL';
            inp1.setAttribute("onchange", "addPol1(this.value)");
            var sp=document.getElementById('kiIns');
            var sp2=document.getElementById('kiIns2');
            sp.appendChild(lab);
            sp2.appendChild(inp1);
            // td.appendChild(lab);
            // td.appendChild(inp1);

            //row.appendChild(td);

            // tbody.appendChild(row);
        }
        else{
            var kol=document.getElementById('kolins').value;
            var el=document.getElementById('kolins');
            var el1=document.getElementById('kolinsL');
            el.remove();
            el1.remove();
            for(var i=0;i<kol;i++){
                var rowD='rowDatIns'+i;
                var idD='datIns'+i;
                var idDL='datInsL'+i
                var elD=document.getElementById(idD);
                var elDL=document.getElementById(idDL);
                var rowDat=document.getElementById(rowD);
                elD.remove();
                elDL.remove();
                rowDat.remove();
            }

        }

    }
    function addPol1(kolIns) {
        for(var i=0;i<5;i++){
            var rowD='rowDatIns'+i;
            var idD='datIns'+i;
            var idDL='datInsL'+i
            var elD=document.getElementById(idD);
            var elDL=document.getElementById(idDL);
            var rowDat=document.getElementById(rowD);
            if(elD) {
                elD.remove();
                elDL.remove();
                rowDat.remove();
            }
        }

        var tbody = document.getElementById('tttIns').getElementsByTagName("TBODY")[0];
        var tab = document.getElementById('tttIns');

        for(var i=0; i<kolIns;i++){
            var td = document.createElement("td");
            var td1 = document.createElement("td1");
            var row = document.createElement("tr");
            var lab = document.createElement("label");
            var inp1 = document.createElement('input');
            row.id='rowDatIns'+i;
            inp1.type = 'text';
            inp1.name = 'datIns[]';
            inp1.id='datIns'+i;
            inp1.setAttribute("class", "form-control");
            var kolS=parseInt(i)+1;
            lab.innerText='Інсульт № '+kolS+'(рік)';
            lab.id='datInsL'+i;
            td.appendChild(lab);
            td1.appendChild(inp1);
            row.appendChild(td);
            row.appendChild(td1);
            tbody.appendChild(row);
        }
    }
    function addIn(el) {
       if(el=='Так'){
           var table = document.getElementById('ttt');
           var kol = table.rows.length;
           kol = Number(kol);

          // var tbody = document.getElementById('ttt').getElementsByTagName("TBODY")[0];
         //  var tab = document.getElementById('ttt');
        //   var row = document.createElement("tr");
        //   var td = document.createElement("td");
           var lab = document.createElement("label");
           var inp1 = document.createElement('input');
           inp1.type = 'text';
           inp1.name = 'kolinf';
           inp1.id = 'kolinf';
           inp1.setAttribute("class", "form-control");
           inp1.setAttribute("width", "100px");
lab.innerText='Введіть кількість інфарктів';
           lab.id = 'kolinfL';
           inp1.setAttribute("onchange", "addPol(this.value)");
           var sp=document.getElementById('ki');
           var sp2=document.getElementById('ki2');
           sp.appendChild(lab);
           sp2.appendChild(inp1);
          // td.appendChild(lab);
          // td.appendChild(inp1);

           //row.appendChild(td);

          // tbody.appendChild(row);
       }
      else{
           var kol=document.getElementById('kolinf').value;
          var el=document.getElementById('kolinf');
           var el1=document.getElementById('kolinfL');
          el.remove();
          el1.remove();
          for(var i=0;i<kol;i++){
              var rowD='rowDat'+i;
              var idD='datInf'+i;
              var idDL='datInfL'+i
              var elD=document.getElementById(idD);
              var elDL=document.getElementById(idDL);
              var rowDat=document.getElementById(rowD);
              elD.remove();
              elDL.remove();
              rowDat.remove();
          }

       }

    }
    function addPol(kolInf) {


        for(var i=0;i<6;i++) {
            var rowD = 'rowDat' + i;
            var idD = 'datInf' + i;
            var idDL = 'datInfL' + i
            var elD = document.getElementById(idD);
            var elDL = document.getElementById(idDL);
            var rowDat = document.getElementById(rowD);
if(elD){
    elD.remove();
    elDL.remove();
    rowDat.remove();
}

        }
        var tbody = document.getElementById('ttt').getElementsByTagName("TBODY")[0];
        var tab = document.getElementById('ttt');

for(var i=0; i<kolInf;i++){
    var td = document.createElement("td");
    var td1 = document.createElement("td1");
    var row = document.createElement("tr");
    var lab = document.createElement("label");
    var inp1 = document.createElement('input');
    row.id='rowDat'+i;
    inp1.type = 'text';
    inp1.name = 'datInf[]';
    inp1.id='datInf'+i;
    inp1.setAttribute("class", "form-control");
    var kolS=parseInt(i)+1;
    lab.innerText='Інфаркт № '+kolS+'(рік)';
    lab.id='datInfL'+i;
    td.appendChild(lab);
    td1.appendChild(inp1);
    row.appendChild(td);
    row.appendChild(td1);
    tbody.appendChild(row);
}
    }
    function ss6(el) {
        if (el.value == 'Так') {
            document.getElementById('h12').style.display = 'block';
            document.getElementById('h13').style.display = 'block';
        }
        else {
            document.getElementById('h12').style.display = 'none';
            document.getElementById('h13').style.display = 'none';
        }
    }
    function ss(el) {
if(el.value=='Так'){
    document.getElementById('h0').style.display='block';
    document.getElementById('h1').style.display='block';
    document.getElementById('h2').style.display='block';
}
else{
    document.getElementById('h0').style.display='none';
    document.getElementById('h1').style.display='none';
    document.getElementById('h2').style.display='none';
}
    }
    function ss1(el) {
        if(el.value=='Так'){
            document.getElementById('h2').style.display='block';
            document.getElementById('h3').style.display='block';
        }
        else{
            document.getElementById('h2').style.display='none';
            document.getElementById('h3').style.display='none';
        }
    }
    function ss2(el) {
        if(el.value=='Так'){
            document.getElementById('h4').style.display='block';
            document.getElementById('h5').style.display='block';
            document.getElementById('h51').style.display='block';
        }

        else{
            document.getElementById('h4').style.display='none';
            document.getElementById('h5').style.display='none';
        document.getElementById('h51').style.display='none';
        }
    }
    function ss3(el) {
        if(el.value=='Так'){
            document.getElementById('h6').style.display='block';
            document.getElementById('h7').style.display='block';
            document.getElementById('h71').style.display='block';
        }
        else{
            document.getElementById('h6').style.display='none';
            document.getElementById('h7').style.display='none';
            document.getElementById('h71').style.display='none';
        }
    }
    function ss4(el) {
        if(el.value=='Так'){
            document.getElementById('h8').style.display='block';
            document.getElementById('h9').style.display='block';
        }
        else{
            document.getElementById('h8').style.display='none';
            document.getElementById('h9').style.display='none';
        }
    }
    function ss5(el) {
        if(el.value=='Так'){
            document.getElementById('h10').style.display='block';
            document.getElementById('h11').style.display='block';
        }
        else{
            document.getElementById('h10').style.display='none';
            document.getElementById('h11').style.display='none';
        }
    }
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
       /* var id_b=cityName+1;
        alert(id_b);
        document.getElementById(id_b).style.display = "block";*/
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
    document.getElementById("defaultOpen").click();
</script>
    <!-- jQuery -->
    <script src="/examples/vendors/jquery/jquery-3.3.1.min.js"></script>
    <!-- Bootstrap -->
    <script src="/examples/vendors/bootstrap-3.3.7/js/bootstrap.min.js"></script>

    <script>
        $(function () {
            $("#h2").click(function () {
                $("#myModal2").modal('show');
            });
        });
    </script>