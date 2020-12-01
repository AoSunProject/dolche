<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css"
      integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<script src="../../js/jquery-1.8.3.min.js"></script>
<title>Розширенний пошук</title>
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
/*.mainT tr td{
    width: 100%;
}*/
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
<script>
    $(document).ready(function() {
        $('#form4').keydown(function(event){
            if(event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });
        $('#form1').keydown(function(event){
            if(event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });
        $('#form2').keydown(function(event){
            if(event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });
        $('#form3').keydown(function(event){
            if(event.keyCode == 13) {
                event.preventDefault();
                return false;
            }
        });

    });
</script>
<script>
    function dat(val,id) {
        var id1=id.substring(0, id.length - 1)
        document.getElementById(id1).min=val;
    }
    /*function dat2(min,val,id) {
     if(val<min){
         alert("Дата з "+min+" більша за дату по "+val);
         document.getElementById(id).value=min;
     }
    }*/
    function chch(el){
        if (el.checked) {
            var zn=el.value;

            if(document.getElementById('golodM').value!= '') {

                if(zn=='1932-33'){
                    document.getElementById('golodM').value = zn+";"+document.getElementById('golodM').value   ;
                }else if(zn=='1946-47'){
                    document.getElementById('golodM').value = document.getElementById('golodM').value + zn+";" ;
                }
                else{
                    var str=document.getElementById('golodM').value;

                   // document.getElementById('golodM').value = document.getElementById('golodM').value + zn+";" ;
                  if(str.indexOf('1932-33')==0 && str.indexOf('1946-47')==8){

                        document.getElementById('golodM').value = '1932-33;1941-45;1946-47;';
                    }else if(str.indexOf('1932-33')==0 && str.indexOf('1946-47')==-1){

                        document.getElementById('golodM').value ='1932-33;1941-45;';

                    }else if(str.indexOf('1932-33')==-1 && str.indexOf('1946-47')==0){
                      document.getElementById('golodM').value ='1941-45;1946-47;';
                  }

                }

            }else{
                document.getElementById('golodM').value=zn+";";
            }
        }
        else {
            var zn=el.value;

            var teczn=document.getElementById('golodM').value;
            var p=teczn.replace(zn+";",'');
            document.getElementById('golodM').value=p;
        }
       }
    function chch1(el){
        if (el.checked) {
            var zn=el.value;

            if(document.getElementById('golodO').value!= '') {
                if(zn=='1932-33'){
                    document.getElementById('golodO').value = zn+";"+document.getElementById('golodO').value   ;
                }else if(zn=='1946-47'){
                    document.getElementById('golodO').value = document.getElementById('golodO').value + zn+";" ;
                }else{
                    var str=document.getElementById('golodO').value;

                    // document.getElementById('golodM').value = document.getElementById('golodM').value + zn+";" ;
                    if(str.indexOf('1932-33')==0 && str.indexOf('1946-47')==8){

                        document.getElementById('golodO').value = '1932-33;1941-45;1946-47;';
                    }else if(str.indexOf('1932-33')==0 && str.indexOf('1946-47')==-1){

                        document.getElementById('golodO').value ='1932-33;1941-45;';

                    }else if(str.indexOf('1932-33')==-1 && str.indexOf('1946-47')==0){
                        document.getElementById('golodO').value ='1941-45;1946-47;';
                    }
                }
            }else{
                document.getElementById('golodO').value=zn+";";
            }
        }
        else {
            var zn=el.value;

            var teczn=document.getElementById('golodO').value;
            var p=teczn.replace(zn+";",'');
            document.getElementById('golodO').value=p;
        }
    }
    function chch2(el){
        if (el.checked) {
            var zn=el.value;

            if(document.getElementById('golodSis').value!= '') {
                if(zn=='1932-33'){
                    document.getElementById('golodSis').value = zn+";"+document.getElementById('golodSis').value   ;
                }else if(zn=='1946-47'){
                    document.getElementById('golodSis').value = document.getElementById('golodSis').value + zn+";" ;
                }else{
                    var str=document.getElementById('golodSis').value;

                    // document.getElementById('golodM').value = document.getElementById('golodM').value + zn+";" ;
                    if(str.indexOf('1932-33')==0 && str.indexOf('1946-47')==8){

                        document.getElementById('golodSis').value = '1932-33;1941-45;1946-47;';
                    }else if(str.indexOf('1932-33')==0 && str.indexOf('1946-47')==-1){

                        document.getElementById('golodSis').value ='1932-33;1941-45;';

                    }else if(str.indexOf('1932-33')==-1 && str.indexOf('1946-47')==0){
                        document.getElementById('golodSis').value ='1941-45;1946-47;';
                    }

                }
            }else{
                document.getElementById('golodSis').value=zn+";";
            }
        }
        else {
            var zn=el.value;

            var teczn=document.getElementById('golodSis').value;
            var p=teczn.replace(zn+";",'');
            document.getElementById('golodSis').value=p;
        }
    }
</script>
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
                                class="ui-menuitem-link ng-star-inserted"
                                id="login"><!----><span class="ui-menuitem-text">Розширенний пошук</span></a><!----></li>
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
                            <li role="presentation" class="pod1" id="one13"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">В. Інформація щодо голодомору</a></li>
                            <li role="presentation" id="one2" class="zag" onclick="hide11(this.id)"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab"><span class="menlab"><i class="fas fa-chevron-right"></i></span> 2. Огляд пацієнта</a></li>
                            <li role="presentation" class="pod1 hh" id="one21"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">А. Антропометричні дані</a></li>
                            <li role="presentation" class="pod1 hh" id="one22"><a href="#zhitt" aria-controls="zhitt" role="tab" data-toggle="tab">Б. Спосіб життя</a></li>
                            <li role="presentation" class="pod1 hh" id="one23"><a href="#hist" aria-controls="hist" role="tab" data-toggle="tab">В. Історія хвороби</a></li>
                            <li role="presentation" class="pod1 hh" id="one24"><a href="#bol" aria-controls="bol" role="tab" data-toggle="tab">Г. Супутні захворювання</a></li>


                            <li role="presentation" id="one3" class="zag" onclick="hide11(this.id)"><a href="#ser" aria-controls="ser" role="tab" data-toggle="tab"><span class="menlab"><i class="fas fa-chevron-right"></i></span> 3.
                                    Статус ССС</a></li>
                            <li role="presentation" class="pod1 hh" id="one31"><a href="#ser" aria-controls="ser" role="tab" data-toggle="tab">А. Обстеження серцево-судинної системи</a></li>
                            <li role="presentation" id="one4" class="zag" onclick="hide11(this.id)"><a href="#diab" aria-controls="diab" role="tab" data-toggle="tab"><span class="menlab"><i class="fas fa-chevron-right"></i></span> 4.
                                    Діабетична ретинопатія</a></li>
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
                            <li role="presentation" id="one9" class="zag" onclick="hide11(this.id)"><a href="#gen" aria-controls="gen" role="tab" data-toggle="tab"><span class="menlab"><i class="fas fa-chevron-right"></i></span> 9.
                                    Генеалогічне дерево</a></li>
                            <li role="presentation" class="pod1 hh" id="one91"><a href="#gen" aria-controls="gen" role="tab" data-toggle="tab">А. Генеалогічне дерево</a></li>
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
                <style type="text/css">
                    * {
                        box-sizing: border-box;
                    }
                    body {

                        margin: 0;
                        font:14px/1.3 'Roboto',Helvetica,sans-serif;
                    }
                    h1,
                    h2 {
                        font-weight: 300;
                        margin: 0 0 1rem 0;
                    }


                    header {
                        padding: 7vh 10vw;
                        background: #ffebee;
                    }
                    header h1 {
                        color: rgba(0,0,0,0.54);
                    }
                    .info {

                        padding: 3vh 10vw;
                        color: #d9d9d9;
                    }
                    /* Всплывающее окно
                    * при загрузке сайта
                    */
                    /* базовый контейнер, фон затемнения*/
                    #overlay {
                        position: fixed;
                        top: 0;
                        left: 0;
                        display: none;
                        width: 100%;
                        height: 100%;
                        background: rgba(0, 0, 0, 0.65);
                        z-index: 999;
                        -webkit-animation: fade .6s;
                        -moz-animation: fade .6s;
                        animation: fade .6s;
                        overflow: auto;
                    }
                    /* модальный блок */
                    .popup {
                        top: 25%;
                        left: 0;
                        right: 0;
                        font-size: 14px;
                        margin: auto;
                        width: 85%;
                        min-width: 320px;
                        max-width: 600px;
                        position: absolute;
                        padding: 15px 20px;
                        border: 1px solid #383838;
                        background: #fefefe;
                        z-index: 1000;
                        -webkit-border-radius: 4px;
                        -moz-border-radius: 4px;
                        -ms-border-radius: 4px;
                        border-radius: 4px;
                        font: 14px/18px 'Tahoma', Arial, sans-serif;
                        -webkit-box-shadow: 0 15px 20px rgba(0,0,0,.22),0 19px 60px rgba(0,0,0,.3);
                        -moz-box-shadow: 0 15px 20px rgba(0,0,0,.22),0 19px 60px rgba(0,0,0,.3);
                        -ms-box-shadow: 0 15px 20px rgba(0,0,0,.22),0 19px 60px rgba(0,0,0,.3);
                        box-shadow: 0 15px 20px rgba(0,0,0,.22),0 19px 60px rgba(0,0,0,.3);
                        -webkit-animation: fade .6s;
                        -moz-animation: fade .6s;
                        animation: fade .6s;
                    }
                    /* заголовки в модальном блоке */
                    .popup h2, .popup h3 {
                        margin: 0 0 1rem 0;
                        font-weight: 300;
                        line-height: 1.3;
                        color: #000000;
                       /* text-shadow: 1px 2px 4px #ddd;*/
                    }
                    .popup #tr222
                    {

                        background: #2b5e93; color:white
                    }
                    .popup #tr2222
                    {

                        background: #d9d9d9; color:#337ab7
                    }
                    /* кнопка закрытия */
                    .close {
                        top: 10px;
                        right: 10px;
                        width: 32px;
                        height: 32px;
                        position: absolute;
                        border: none;
                        -webkit-border-radius: 50%;
                        -moz-border-radius: 50%;
                        -ms-border-radius: 50%;
                        -o-border-radius: 50%;
                        border-radius: 50%;
                        background-color: rgba(0, 131, 119, 0.9);
                        -webkit-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
                        -moz-box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
                        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
                        cursor: pointer;
                        outline: none;

                    }
                    .close:before {
                        color: rgba(255, 255, 255, 0.9);
                        content: "X";
                        font-family:  Arial, Helvetica, sans-serif;
                        font-size: 14px;
                        font-weight: normal;
                        text-decoration: none;
                        text-shadow: 0 -1px rgba(0, 0, 0, 0.9);
                        -webkit-transition: all 0.5s;
                        -moz-transition: all 0.5s;
                        transition: all 0.5s;
                    }
                    /* кнопка закрытия при наведении */
                    .close:hover {
                        background-color: rgba(252, 20, 0, 0.8);
                    }
                    /* изображения в модальном окне */
                    .popup img {
                        width: 100%;
                        height: auto;
                        box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
                    }
                    /* миниатюры изображений */
                    .pl-left,
                    .pl-right {
                        width: 25%;
                        height: auto;
                    }
                    /* миниатюры справа */
                    .pl-right {
                        float: right;
                        margin: 5px 0 5px 15px;
                    }
                    /* миниатюры слева */
                    .pl-left {
                        float: left;
                        margin: 5px 18px 5px 0;
                    }
                    /* анимация при появлении блоков с содержанием */
                    @-moz-keyframes fade {
                        from { opacity: 0; }
                        to { opacity: 1 }
                    }
                    @-webkit-keyframes fade {
                        from { opacity: 0; }
                        to { opacity: 1 }
                    }
                    @keyframes fade {
                        from { opacity: 0; }
                        to { opacity: 1 }
                    }
                </style>
                <?php
                if(isset($_POST['find'])){
//var_dump($_POST);
                   $masName=[
                        /*1.А. Загальні дані*/
                        'Прізвище','Ім`я','По-батькові','Чи брали участь ви раніше в цьому дослідженні?','Номер випробування',
                        'Стать','Дата нарождения з','Дата нарождения по','Телефон','E-mail','Місце народження: населений пункт','Місце народження - район, область',
                        'Статус роботи','Інформація про нарождення:','Кількість тижднів:','Вага при народженні:','Вага при народженні (г) з:','Вага при народженні (г) по:',
                        /*1.Б. Сімейний анамнез*/
                        'Прізвище батька', 'Ім`я батька', 'По-батькові батька','Чи брав участь Батько раніше в цьому дослідженні?',
                       'Номер випробування','Дата народження батька з','Дата народження батька по',
                        'Місце народження: область','Місце народження: місто','Чи хворів на діабет батько?','Якщо так - яке було лікування у батька?',

                        'Прізвище матері', 'Ім`я матері', 'По-батькові матері','Чи брала участь Мати раніше в цьому дослідженні?',
                       'Номер випробування','Дата народження матері з','Дата народження матері по',
                        'Місце народження: область','Місце народження: місто','Чи хворіла на діабет мати?','Якщо так - яке було лікування у матері?',
                        'Чи хворіли на діабет рідні брати сестри? Якщо так – яке було лікування у братів/сестер?','Якщо так – яке було лікування у братів/сестер?',
                        /*1.В. Інформація по голодомору*/
                        'Голодувала ваша сім`я в 1932-33, 1941-45 і / або 1946-47 роках:','Мати:','Батько:','Рідні брати/сестри:'];

               /*if($_POST['golodSem']=='Так'){
                    if(!empty($_POST['golodM'])){
                        array_push($masName,'Мати:');
                    }
                    if(!empty($_POST['golodO'])){
                        array_push($masName,'Батько:');
                    }
                    if(!empty($_POST['golodSis'])){
                        array_push($masName,'Рідні брати/сестри:');
                    }


                }*/


                array_push($masName,'Чи помер хтось з членів сім’ї (мати / батько / рідні брати або сестри) з причин, пов`язаних з голодом в 1932-33, 1941-45 і / або 1946-47 році:',
                        'Чи голодували Ви особисто у періоди голоду в  1932-33, 1941-45 і / або 1946-47 роках голодомору. Якщо так - вказати період:',
                        /*2.А. Антропометричні дані*/
                        'Вага (кг) з', 'Вага (кг) по','Зріст (см) з','Зріст (см) по','Окружність талії (см) з', 'Окружність талії (см) по','Окружність стегон (см) з','Окружність стегон (см) по',
                       'Індекс маси тіла (кг/м 2 ) з', 'Індекс маси тіла (кг/м 2 ) по','Систолічний артеріальний тиск (сидячи) 0` з','Систолічний артеріальний тиск (сидячи) 0` по','Систолічний артеріальний тиск (сидячи) 10` з','Систолічний артеріальний тиск (сидячи) 10` по','Діастолічний артеріальний тиск (сидячи) 0` з','Діастолічний артеріальний тиск (сидячи) 0` по','Діастолічний артеріальний тиск (сидячи) 10` з','Діастолічний артеріальний тиск (сидячи) 10` по',
                        /*2.Б. Спосіб життя*/
                        'Ви палите?','Якщо курите, як часто?','Кількість викурених сигарет за 1 день з','Кількість викурених сигарет за 1 день по','Як часто Ви вживаєте алкоголь?',
                        /*2.В. Історія хвороби:*/
                        'Тип діабету:','Рік постановки діагнозу з:','Рік постановки діагнозу по:','Вік дебюту діабету (років) з:','Вік дебюту діабету (років) по:',
                       'Тривалість діабету (років) з:','Тривалість діабету (років) по:',
                        /*2.Г. Хвороби, що супруводжують:*/
                        'Інфекційні:','Аутоімунні (вказати):','Вроджені вади (вказати):','Інші ендокринні (вказати):',
                    'Інша патологія (вказати):','Класифікація супутніх захворювань по DRG:','ЧИ хворієте Ви на онкологічні захворювання?','Вкажіть вид онкозахворювання',
                       'Дата постановки діагнозу онкозахворювання з','Дата постановки діагнозу онкозахворювання по');
                   if($_POST['OnkoLek']!='') {
                          array_push($masName,'Якщо так - лікування онкозахворювання (Препарати - назва препаратів, група)?');
                    }
                        /*3.А. Обстеження серцево-судинної системи*/
                array_push($masName,   'Чи був у вас інфаркт?');
                    if($_POST['infarkt']=='Так'){

                         array_push($masName,'Введіть кількість інфарктів' );
                         if(!empty($_POST['kolinf'])) {
                             $kol = $_POST['kolinf'];

                             array_push($masName, 'Рік інфаркту  з');
                             array_push($masName, 'Рік інфаркту  по');
                         }

                    }
 array_push($masName,'Чи був у вас інсульт?');
                     if($_POST['insult']=='Так' ){
                         array_push($masName,'Введіть кількість інсультів' );
                         $kol=$_POST['kolins'];
  if(!empty($_POST['kolins'])) {
      array_push($masName, 'Рік інсульту  з');
      array_push($masName, 'Рік інсульту  по');
  }

                    }
                   array_push($masName,'Хронічна серцева недостатність - вказати стадію');
                     if($_POST['hronSerd']!='--' and $_POST['hronSerd']!=='Ні'){
                         array_push($masName,'Дата постановки (рік) з');
                         array_push($masName,'Дата постановки (рік) по');
                     }

                        /*4.А. Обстеження очей*/
                    array_push($masName, 'Дата обстеження очного дна: дд-мм-рр з');
                array_push($masName, 'Дата обстеження очного дна: дд-мм-рр по');
                array_push($masName, 'Діабетична ретинопатія?');
                    if($_POST['diabDiab']=='Так'){
                        array_push($masName,'Дата постановки з');
                        array_push($masName,'Дата постановки по');
                    }

                    array_push($masName,'Непроліферативна ретинопатія?');
                    if($_POST['diabNep']=='Так'){
                        array_push($masName,'Дата постановки з');
                        array_push($masName,'Дата постановки по');
                    }
                    array_push($masName,'Препроліферативна ретинопатія?');
                    if($_POST['diabPrep']=='Так'){
                        array_push($masName,'Дата постановки з');
                        array_push($masName,'Дата постановки по');
                    }
                    array_push($masName,
                        'Проліферативна ретинопатія?');
                    if($_POST['diabPrep2']=='Так'){
                        array_push($masName,'Дата постановки з');
                        array_push($masName,'Дата постановки по');
                    }
                    array_push($masName,'Сліпота?');
                    if($_POST['Slep']=='Так'){
                        array_push($masName,'Дата постановки з');
                        array_push($masName,'Дата постановки по');
                    }

                    array_push($masName,'Лазерне лікування?');
                    if($_POST['Lazer']=='Так'){
                        array_push($masName,'Дата постановки з');
                        array_push($masName,'Дата постановки по');
                    }
                    array_push($masName,'Катаракта?');
                    if($_POST['Katar']=='Так'){
                        array_push($masName,'Дата постановки з');
                        array_push($masName,'Дата постановки по');
                    }
                    array_push($masName,'Макулопатія?');
                    if($_POST['Mal']=='Так'){
                        array_push($masName,'Дата постановки з');
                        array_push($masName,'Дата постановки по');;
                    }
                    array_push($masName,'Глаукома?');
                    if($_POST['Glauk']=='Так'){
                        array_push($masName,'Дата постановки з');
                        array_push($masName,'Дата постановки по');
                    }
                    array_push($masName,'На сьогодні лікування ДР:','Дані OCT:',
                        /*5.А. Обстеження нирок*/
                        'Дата обстеження нирок з: дд-мм-рр','Дата обстеження нирок по: дд-мм-рр','Діабетична нефропатія?');
                    if($_POST['diabNefro']=='Так'){
                        array_push($masName,'Дата постановки з');
                        array_push($masName,'Дата постановки по');
                    }

                    array_push($masName,'Хронічна ниркова недостатність?');
                    if($_POST['diabPochNEd']=='Так'){
                        array_push($masName,'Дата постановки з');
                        array_push($masName,'Дата постановки по');
                    }

                    array_push($masName,'Хронічна ниркова недостатність - це заключна стадія?');
                    if($_POST['diabPochSt']=='Так'){
                        array_push($masName,'Дата постановки з');
                        array_push($masName,'Дата постановки по');
                    }
                    array_push($masName,
                        'Діаліз?');
                    if($_POST['diabDializ']=='Так'){
                        array_push($masName,'Дата постановки з');
                        array_push($masName,'Дата постановки по');
                    }
                    array_push($masName,'Поточні методи лікування: ліки (назви та група):',
                        /*6.А. Полінейроангіопатія*/
                        'Дата обстеження: дд-мм-рр з','Дата обстеження: дд-мм-рр по','Ангіопатія нижніх кінцівок?');
                    if($_POST['diabAngin']=='Так'){
                        array_push($masName,'Дата постановки з','Дата постановки по','Яка ангіопатія?');
                    }
                    array_push($masName,'Периферична нейропатія?');
                    if($_POST['diabNejr']=='Так'){
                        array_push($masName,'Дата постановки з');
                        array_push($masName,'Дата постановки по');
                    }
                    array_push($masName,'Чи бувають незвичайні відчуття в стопах?','Чи є біль в обох ногах?',
                        'Якщо біль в обох стопах, як вона проявляється?','Яка інтенсивність болю (шкала від 1 до 5)?','Як проявляється біль?','Прийом препаратів?','Якщо так, розписати які препарати?',
                        /*6.Б. Обстеження стопи*/
                        'Дата обстеження стопи: дд-мм-рр? з','Дата обстеження стопи: дд-мм-рр? по','Зниження температури?','Порушення тактильної чутливості?',
                        'Порушення вібраційної чутливості?','Зниження / відсутність рефлексів?',
                        'Наявність виразок?','Нагноєння виразок?','Пульс на стопі?','Шунтування / ангіопластика?',
                        'Синдром переміжної кульгавості?','Ампутація?');
                    if($_POST['Ampyt']!='Ні' and $_POST['Ampyt']!='--'){
                        array_push($masName,'Локалізація ампутації?','Рік ампутації з','Рік ампутації по');
                    }



                        /*7.А. Лабораторні дослідження*/
                    array_push($masName,'Дата обстеження з: дд-мм-рр','Дата обстеження по: дд-мм-рр', 'Ви зараз натщесерце?',
                        'О котрій годині був останній прийом їжі (напередодні ввечері) з?','О котрій годині був останній прийом їжі (напередодні ввечері)? по','Показник, ммоль/л з','Показник, ммоль/л по','Дата, дд-мм-рр з','Дата, дд-мм-рр по','Глікований гемоглобін % з','Глікований гемоглобін % по','Глікований гемоглобін pmol/pmol з','Глікований гемоглобін pmol/pmol по','Дата Глікований гемоглобін, дд-мм-рр з','Дата Глікований гемоглобін, дд-мм-рр по',
                        'Загальний аналіз крові (дата) з?','Загальний аналіз крові (дата) по?','Еритроцити з','Еритроцити по','Гемоглобін з','Гемоглобін по','Лейкоцити (кількість) з','Лейкоцити (кількість) по','Нейтрофіли (абс к-ть) з','Нейтрофіли (абс к-ть) по','Моноцити (абс к-ть) з','Моноцити (абс к-ть) по',
                        'Лімфоцити (абс к-во) з','Лімфоцити (абс к-во) по','Тромбоцити (абс к-во) з','Тромбоцити (абс к-во) по','Тромбоцити, MPV з','Тромбоцити, MPV по','Інше (показник) з','Інше (показник) по',
                        'Показник, мкмоль / л з', 'Показник, мкмоль / л по','Дата, дд-мм-рр з','Дата, дд-мм-рр по','Показник, мкмоль / л з','Показник, мкмоль / л по','Дата, дд-мм-рр з','Дата, дд-мм-рр по','Кліренс креатиніну (СКФ, швидкості клубочкової фільтрації) з','Кліренс креатиніну (СКФ, швидкості клубочкової фільтрації) по','Протеїнурія','Останній вимір, мг / сут з','Останній вимір, мг / сут по',
                        'Дата, дд-мм-рр з','Дата, дд-мм-рр по','Мікроальбумінурія');
                    if($_POST['Mikroalmb']=='Так'){
                        array_push($masName,'Якщо так – показник, мг/л з','Якщо так – показник, мг/л по','Дата з','Дата по');
                    }

                    array_push($masName,'Лабораторний аналіз ліпідів в крові (дата) з:','Лабораторний аналіз ліпідів в крові (дата) по:',
                        'Холестерин (показник) з', 'Холестерин (показник) по','Ліпіди високої щільності (Показник) з','Ліпіди високої щільності (Показник) по','Ліпіди низької щільності (показник) з','Ліпіди низької щільності (показник)по',
                        'Тригліцериди (показник) з','Тригліцериди (показник) по','Аспартатамінотрансфераза (АСТ) з','Аспартатамінотрансфераза (АСТ) по','Аланінамінотрансфераза (АСТ) з','Аланінамінотрансфераза (АСТ) по','С-реактивний білок з','С-реактивний білок по',
                        'C-пептид, показник з:','C-пептид, показник по:','C-пептид, одиниця виміру з:','C-пептид, одиниця виміру по:','C-пептид, одиниця виміру нг/мл: з','C-пептид, одиниця виміру нг/мл: по','C-пептид, одиниця виміру nmol/l:  з','C-пептид, одиниця виміру nmol/l: по','C-пептід, Дата: дд-мм-рр: з','C-пептід, Дата: дд-мм-рр: по', 'AT-GAD: з','AT-GAD: по','AT-GAD дата: з','AT-GAD дата: по',
                        /*7.Б. Біоматеріал*/
                        'Сиворотка?','Плазма?','Кров на ДНК?','Кров на РНК?','Слина?','Біоптат кожи?','Примітки при заборі крові (зрив вакуумної пробки, тощо)',
                        /*8.А. Лікування*/
                        'Лікування цукрового діабету','Лікування діабету: інсулін (препарат, доза прийому, кратність)','Дата початку інсулінотерапії (дд- мм-рр) з','Дата початку інсулінотерапії (дд- мм-рр) по','Лікування діабету: таблетки','Лікування гіпертонії (препарат, доза прийому, кратність)',
                        'Лікування гіперліпідемії',
                       /* 9.А. Генеалогічне дерево*/
                        'Генеалогічне дерево'

                    );

?>
                    <form method="post" action="" id="form1">
                        <div _ngcontent-c9="" class="container">


                            <!-- Tab panes -->

                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <fieldset style="margin-top: 30px;">
                                        <h4>1.А. Загальні дані</h4>
                                        <table class='mainT' style="width: 80%;">
                                            <tr>
                                                <td><label class="lb1">Прізвище </label></td>
                                                <td  style="width: 100%"><input class="form-control" type="text" name="fname"
                                                           placeholder="" value="<? echo $_POST['fname'];?>"></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td><label>Ім'я </label></td>
                                                <td><input class="form-control" type="text" name="name"
                                                           placeholder="" value="<? echo $_POST['name'];?>"></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td><label>По-батькові </label></td>
                                                <td><input class="form-control" type="text" name="sname"
                                                           placeholder="" value="<? echo $_POST['sname'];?>"></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Чи брали участь ви раніше в цьому дослідженні?</label>
                                                    <label class="hidd" id="h0">Якщо так, вкажіть ідентифікатор учасника
                                                        <br> в минулому дослідженні (№ учасника)</label>
                                                </td>
                                                <td>
                                                    <select name="ychas" class="form-control" onchange="ss(this)">
                                                        <option <? if($_POST['ychas']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['ychas']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['ychas']=='Так'){ echo "selected";}?>>Так</option>

                                                    </select>
                                                    <div style="display: flex;">
                                                        <input type="text" id="h1" class="form-control" name="nomIss" placeholder=""
                                                                <?
                                                            if(empty($_POST['nomIss'])){
                                                                echo "class='hidd'";
                                                                echo "style='display:none;'";
                                                            }
                                                            else{
                                                                echo "value='{$_POST['nomIss']}'";
                                                                echo "style='display:block;'";
                                                            }
                                                            ?>
                                                               > <!--номер-->
                                                        <a href="#myModal1" class="btn btn-sm hidd"
                                                           style='border:1px solid grey' id="h2"
                                                           data-toggle="modal">...</a>

                                                    </div>
                                                    <link href="../../css/1.css" rel="stylesheet">

                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Стать</label></td>
                                                <td style="width: 100%;"><select name="sex" class="form-control" >
                                                        <option value="--"  <? if($_POST['sex']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Чоловіча"  <? if($_POST['sex']=='Чоловіча'){ echo "selected";}?>>Чоловіча</option>
                                                        <option value="Жіноча"    <? if($_POST['sex']=='Жіноча'){ echo "selected";}?>>Жіноча</option>

                                                    </select>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Дата нарождения </label>

                                                </td>
                                                <td>
                                                    з  <input type="date" name="datB0"  id="datB0" class="form-control" value="<? echo $_POST['datB0'];?>" onchange="dat(this.value,this.id)">
                                                  по  <input type="date" name="datB" id="datB" min="<?echo $_POST['datB0'];?>" class="form-control" value="<? echo $_POST['datB'];?>">
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Телефон </label>

                                                </td>
                                                <td>
                                                    <input type="text" name="phone" class="form-control" value="<? echo $_POST['phone'];?>">
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>E-mail </label>

                                                </td>
                                                <td>
                                                    <input type="email" name="email" class="form-control" value="<? echo $_POST['email'];?>">
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Місце народження: населений пункт</label>

                                                </td>
                                                <td>
                                                    <input type="text" name="city" class="form-control"
                                                           placeholder="" value="<? echo $_POST['city'];?>">
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Місце народження - район, область</label>

                                                </td>
                                                <td>
                                                    <input type="text" name="rajon" class="form-control"
                                                           placeholder=""  value="<? echo $_POST['rajon'];?>">
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Статус роботи</label>

                                                </td>
                                                <td>
                                                    <select name="work" class="form-control">
                                                        <option value="--"  <? if($_POST['work']=='--'){ echo "selected";}?>>--
                                                        </option>
                                                        <option value="Не працюю, безробітний(а)"  <? if($_POST['work']=='Не працюю, безробітний(а)'){ echo "selected";}?>>Не працюю,
                                                            безробітний(а)
                                                        </option>
                                                        <option value="Не працюю, інвалідність"  <? if($_POST['work']=='Не працюю, інвалідність'){ echo "selected";}?>>Не працюю,
                                                            інвалідність
                                                        </option>
                                                        <option value="Не працюю, відпустка по хворобі"  <? if($_POST['work']=='Не працюю, відпустка по хворобі'){ echo "selected";}?>>Не працюю,
                                                            відпустка по хворобі
                                                        </option>
                                                        <option value="На пенсії"  <? if($_POST['work']=='На пенсії'){ echo "selected";}?>>На пенсії</option>
                                                        <option value="Працюю, часткова зайнятість" <? if($_POST['work']=='Працюю, часткова зайнятість'){ echo "selected";}?>>Працюю, часткова
                                                            зайнятість
                                                        </option>
                                                        <option value="Працюю, повна зайнятість" <? if($_POST['work']=='Працюю, повна зайнятість'){ echo "selected";}?>>Працюю, повна
                                                            зайнятість
                                                        </option>
                                                    </select>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Інформація про нарождення:</label>

                                                </td>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            <input type="hidden" name="bearn" value="">
                                                            <td><input style='position: static;' type="radio"
                                                                       name="bearn" class="form-control"
                                                                       value="Народився(лась) вчасно"
                                                                    <? if( $_POST['bearn']=='Народився(лась) вчасно'){echo 'checked';}?>></td>
                                                            <td><label>Народився(лась) вчасно</label></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input style='position: static;' type="radio"
                                                                       name="bearn" class="form-control"
                                                                       value="Народився(лась) передчасно"
                                                                    <? if( $_POST['bearn']=='Народився(лась) передчасно'){echo 'checked';}?>></td>
                                                            <td><label>Народився(лась) передчасно</label></td>
                                                        </tr>
                                                        <tr>
                                                            <td>

                                                                <input style='position: static;' type="radio"
                                                                       name="bearn" class="form-control"
                                                                       value="Народився в _____ тижнів (вказати)"
                                                                    <? if($_POST['bearn']=='Народився в _____ тижнів (вказати)'){echo 'checked';}?>></td>
                                                            <td>
                                                                <div style="display: flex;flex-direction: row;"><label>Народився
                                                                        в </label> <input type="text"
                                                                                          style='width: 60px;margin-left: 4px;margin-right: 4px;'
                                                                                          name="week"
                                                                                          class="form-control" value="<? echo $_POST['week'];?>"
                                                                        ><label>
                                                                        тижнів (вказати)</label></div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><input style='position: static;' type="radio"
                                                                       name="bearn" class="form-control"
                                                                       value="Не знаю" <? if( $_POST['bearn']=='Не знаю'){echo 'checked';}?>></td>
                                                            <td><label>Не знаю</label></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input style='position: static;' type="radio"
                                                                       name="bearn" class="form-control"
                                                                       value=""  <? if( $_POST['bearn']==''){echo 'checked';}?>></td>
                                                            <td><label>Без параметра</label></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Вага при народженні:</label>

                                                </td>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            <input type="hidden" value="" name="vesR">
                                                            <td><input style='position: static;' type="radio"
                                                                       name="vesR" class="form-control"
                                                                       value="Мала (при народженні я був(ла) дуже маленький(а))"
                                                                    <? if( $_POST['vesR']=='Мала (при народженні я був(ла) дуже маленький(а))'){echo 'checked';}?>>
                                                            </td>
                                                            <td><label>Низька (при нарожденні я був(ла)
                                                                    худим(ой))</label></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input style='position: static;' type="radio"
                                                                       name="vesR" class="form-control"
                                                                       value="Нормальна"
                                                                    <? if( $_POST['vesR']=='Нормальна'){echo 'checked';}?>></td>
                                                            <td><label>Нормальна</label></td>
                                                        </tr>
                                                        <tr>
                                                            <td>


                                                                <input style='position: static;' type="radio"
                                                                       name="vesR" class="form-control"
                                                                       value="Я був (була) при народженні великим малюком"
                                                                    <? if( $_POST['vesR']=='Я був (була) при народженні великим малюком'){echo 'checked';}?>>
                                                            </td>
                                                            <td><label>Я був (була) при народженні великим
                                                                    малюком</label></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input style='position: static;' type="radio" name="vesR" class="form-control" value="був одним з близнюків" <? if( $_POST['vesR']=='був одним з близнюків'){echo 'checked';}?>></td>
                                                            <td><label>був одним з близнюків</label></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input style='position: static;' type="radio"
                                                                       name="vesR" class="form-control" value="Не знаю"
                                                                    <? if( $_POST['vesR']=='Не знаю'){echo 'checked';}?>
                                                                >
                                                            </td>
                                                            <td><label>Не знаю</label></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input style='position: static;' type="radio"
                                                                       name="vesR" class="form-control" value=""
                                                                    <? if( $_POST['vesR']==''){echo 'checked';}?>
                                                                >
                                                            </td>
                                                            <td><label>Без параметра</label></td>
                                                        </tr>

                                                    </table>
                                            <tr>
                                                <td >
                                                    <label>Вага при народженні (г):</label>

                                                </td>
                                                <td>
                                                    з<input type="text" name="vagaPN0" class="form-control" placeholder=""  value="<? echo $_POST['vagaPN0'];?>">
                                                    по<input type="text" name="vagaPN" class="form-control" placeholder=""  value="<? echo $_POST['vagaPN'];?>">
                                                </td>
                                                <td></td>
                                            </tr>


                                        </table>
                                    </fieldset>

                                </div>
                                <div role="tabpanel" class="tab-pane" id="profile">
                                    <fieldset style="margin-top: 30px;">
                                        <h4>1.Б. Сімейний анамнез</h4>
                                       <table class='mainT' style="width: 80%;">
                                            <tr style="background: #295b8e; color:white;">
                                                <td colspan="3"><label>Батько:</label></td>
                                            </tr>
                                            <tr>
                                                <td><label class="lb1">Прізвище</label></td>
                                                <td style="width: 100%"><input class="form-control" type="text" name="fnameO"
                                                           placeholder=""  value="<? echo $_POST['fnameO'];?>"></td>
                                            </tr>
                                            <tr>
                                                <td><label>Ім'я</label></td>
                                                <td><input class="form-control" type="text" name="nameO"
                                                           placeholder="" value="<? echo $_POST['nameO'];?>"></td>
                                            </tr>
                                            <tr>
                                                <td><label>По-батькові</label></td>
                                                <td><input class="form-control" type="text" name="snameO"
                                                           placeholder="" value="<? echo $_POST['snameO'];?>"></td>
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
                                                        <option value="--" <? if($_POST['ychasOtez']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['ychasOtez']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['ychasOtez']=='Так'){ echo "selected";}?>>Так</option>

                                                    </select>
                                                    <div style="display: flex;">
                                                        <input type="text" id="h5" class="form-control hidd"
                                                            <?
                                                            if(empty($_POST['nomIssO'])){

                                                                echo "style='display:none;'";
                                                            }
                                                            else{
                                                                echo "value='{$_POST['nomIssO']}'";
                                                                echo "style='display:block;'";
                                                            }
                                                            ?>

                                                               name="nomIssO" placeholder="" value="<? echo $_POST['nomIssO'];?>">


                                                    </div>

                                                </td>
                                            </tr>
                                            <tr>

                                                <td>
                                                    <label>Дата народження</label></td>
                                                <td>
                                                    з <input type="date" name="datBOtez0" id="datBOtez0" class="form-control" value="<? echo $_POST['datBOtez0'];?>" onchange="dat(this.value,this.id)">
                                                    по <input type="date" name="datBOtez" id="datBOtez"  min="<?echo $_POST['datBOtez0'];?>" class="form-control" value="<? echo $_POST['datBOtez'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Місце народження: область</label></td>
                                                <td>
                                                    <input type="text" name="oblOtez" class="form-control"
                                                           placeholder="" value="<? echo $_POST['oblOtez'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Місце народження: місто</label></td>
                                                <td>
                                                    <input type="text" name="cityOtez" class="form-control"
                                                           placeholder="" value="<? echo $_POST['cityOtez'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Чи хворів на діабет?</label>
                                                    <label class="hidd" id="h2">Якщо так - яке було лікування у
                                                        батька?</label>
                                                </td>
                                                <td>
                                                    <select name="lechOtez" class="form-control" onchange="ss1(this)">
                                                        <option value="--" <? if($_POST['lechOtez']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['lechOtez']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['lechOtez']=='Так'){ echo "selected";}?>>Так</option>

                                                    </select>
                                                    <select id="h3" name="lechOtezKak" class=" form-control hidd"
                                                        <?
                                                        if($_POST['lechOtez']=='Так'){

                                                            echo "style='display:block;'";
                                                        }

                                                        ?>
                                                    >
                                                        <option value="--" <? if($_POST['lechOtezKak']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Діета" <? if($_POST['lechOtezKak']=='Діета'){ echo "selected";}?>> Діета</option>
                                                        <option value="Таблетки" <? if($_POST['lechOtezKak']=='Таблетки'){ echo "selected";}?>> Таблетки</option>
                                                        <option value="Інсулін" <? if($_POST['lechOtezKak']=='Інсулін'){ echo "selected";}?>> Інсулін</option>
                                                        <option value="Комбіноване - таблетки і інсулін" <? if($_POST['lechOtezKak']=='Комбіноване - таблетки і
                                                                 інсулін'){ echo "selected";}?>> Комбіноване - таблетки і
                                                                 інсулін
                                                        </option>
                                                        <option value="Не знаю" <? if($_POST['lechOtezKak']=='Не знаю'){ echo "selected";}?>> Не знаю</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr style="background: #295b8e;color:white;">
                                                <td colspan="3"><label>Мати:</label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Прізвище</label></td>
                                                <td><input class="form-control" type="text" name="fnameM"
                                                           placeholder="" value="<? echo $_POST['fnameM'];?>"></td>
                                            </tr>
                                            <tr>
                                                <td><label>Ім'я</label></td>
                                                <td><input class="form-control" type="text" name="nameM"
                                                           placeholder="" value="<? echo $_POST['nameM'];?>"></td>
                                            </tr>
                                            <tr>
                                                <td><label>По-батькові</label></td>
                                                <td><input class="form-control" type="text" name="snameM"
                                                           placeholder="" value="<? echo $_POST['snameM'];?>"></td>
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
                                                        <option value="--" <? if($_POST['ychasM']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['ychasM']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['ychasM']=='Так'){ echo "selected";}?>>Так</option>

                                                    </select>
                                                    <div style="display: flex;">
                                                        <input type="text" id="h7" class="form-control hidd"
                                                            <?
                                                            if(empty($_POST['nomIssM'])){

                                                                echo "style='display:none;'";
                                                            }
                                                            else{
                                                                echo "value='{$_POST['nomIssM']}'";
                                                                echo "style='display:block;'";
                                                            }
                                                            ?>
                                                               name="nomIssM" placeholder=""  value="<? echo $_POST['nomIssM'];?>">


                                                    </div>


                                                </td>
                                            </tr>
                                            <tr>

                                                <td>
                                                    <label>Дата народження</label></td>
                                                <td>
                                                    з <input type="date" name="datBM0" class="form-control" value="<? echo $_POST['datBM'];?>"  onchange="dat(this.value,this.id)">
                                                    по <input type="date" name="datBM" min="<?echo $_POST['datBM0'];?>" class="form-control" value="<? echo $_POST['datBM'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Місце народження: область</label></td>
                                                <td><input type="text" name="oblM" class="form-control"
                                                           placeholder="" value="<? echo $_POST['oblM'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Місце народження: місто</label></td>
                                                <td>
                                                    <input type="text" name="cityM" class="form-control"
                                                           placeholder="" value="<? echo $_POST['cityM'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Чи хворіла на діабет?</label>
                                                    <label class="hidd" id="h8">Якщо так - яке було лікування у
                                                        матері?</label>
                                                </td>
                                                <td>
                                                    <select name="lechM" class="form-control" onchange="ss4(this)">
                                                        <option value="--" <? if($_POST['lechM']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['lechM']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['lechM']=='Так'){ echo "selected";}?>>Так</option>

                                                    </select>
                                                    <select id="h9" name="lechMKak" class=" form-control hidd"
                                                        <?
                                                        if($_POST['lechM']=='Так'){

                                                            echo "style='display:block;'";
                                                        }

                                                        ?>
                                                    >
                                                        <option value="--" <? if($_POST['lechMKak']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Дієта" <? if($_POST['lechMKak']=='Дієта'){ echo "selected";}?>> Дієта</option>
                                                        <option value="Таблетки" <? if($_POST['lechMKak']=='Таблетки'){ echo "selected";}?>> Таблетки</option>
                                                        <option value="Інсулін" <? if($_POST['lechMKak']=='Інсулін'){ echo "selected";}?>> Інсулін</option>
                                                        <option value="Комбіноване - таблетки і
                                                            інсулін" <? if($_POST['lechMKak']=='Комбіноване - таблетки і
                                                            інсулін'){ echo "selected";}?>>Комбіноване - таблетки і
                                                            інсулін
                                                        </option>
                                                        <option value="Не знаю" <? if($_POST['lechMKak']=='Не знаю'){ echo "selected";}?>> Не знаю</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Чи хворіли на діабет рідні
                                                        брати сестри?</label>
                                                    <label class="hidd1" id="h10">Якщо так – яке було лікування у
                                                        братів/сестер?</label>
                                                </td>
                                                <td>
                                                    <select name="lechBS" class="form-control" onchange="ss5(this)">
                                                        <option value="--" <? if($_POST['lechBS']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['lechBS']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['lechBS']=='Так'){ echo "selected";}?>>Так</option>

                                                    </select>
                                                    <select id="h11" name="lechBSKak" class=" form-control hidd"
                                                        <?
                                                        if($_POST['lechBS']=='Так'){

                                                            echo "style='display:block;'";
                                                        }

                                                        ?>
                                                    >
                                                        <option value="--" <? if($_POST['lechBSKak']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Діета" <? if($_POST['lechBSKak']=='Діета'){ echo "selected";}?>> Діета</option>
                                                        <option value="Таблетки" <? if($_POST['lechBSKak']=='Таблетки'){ echo "selected";}?>> Таблетки</option>
                                                        <option value="Інсулін" <? if($_POST['lechBSKak']=='Інсулін'){ echo "selected";}?>> Інсулін</option>
                                                        <option value="Комбіноване - таблетки і
                                                            інсулін" <? if($_POST['lechBSKak']=='Комбіноване - таблетки і
                                                            інсулін'){ echo "selected";}?>> Комбіноване - таблетки і
                                                            інсулін
                                                        </option>
                                                        <option value="Не знаю" <? if($_POST['lechBSKak']=='Не знаю'){ echo "selected";}?>> Не знаю</option>
                                                    </select>
                                                </td>
                                            </tr>
                                        </table>
                                    </fieldset>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="messages">
                                    <fieldset style="margin-top: 30px;">
                                        <h4>1.В. Інформація щодо голодомору</h4>
                                       <table class='mainT' style="width: 80%;">
                                            <tr>
                                                <td>
                                                    <label class="lb1">Голодувала ваша сім'я в 1932-33, 1941-45
                                                        і / або 1946-47 роках:</label>
                                                   <!-- <label class="hidd" id="h12">Якщо сім`я голодувала - вказати період
                                                        голодування сім`ї
                                                    </label>-->
                                                </td>
                                                <td style="width: 100%">
                                                    <select name="golodSem" class="form-control" onchange="ss6(this)">
                                                        <option value="--" <? if($_POST['golodSem']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['golodSem']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['golodSem']=='Так'){ echo "selected";}?>>Так</option>
                                                        <option value="Не знаю" <? if($_POST['golodSem']=='Не знаю'){ echo "selected";}?>>Не знаю</option>
                                                    </select>

                                                </td>
                                            </tr>
                                            <tr <?if($_POST['golodSem']!='Так'){ echo "class='showGolod'";}?> id="mamGolod">
                                                <td>
                                                    <label>Мати:</label></td>
                                                <td>
                                                    <? $masM=explode(";",$_POST['golodM'])?>
                                                    <table <?if($_POST['golodSem']!='Так'){ echo "class='showGolod'";}?> id="tabGolodM"><tr><td><label> - 1932-33</label>
                                                                <input type="checkbox" onchange="chch(this)" id="g1m" value="1932-33" class="form-control"
                                                                    <? foreach($masM as $int):
                                                                        if($int=='1932-33'){echo 'checked';}
                                                                    endforeach;?>>
                                                            </td></tr>
                                                        <tr><td><label> - 1941-45</label>
                                                                <input type="checkbox" onchange="chch(this)" id="g2m" value="1941-45" class="form-control"
                                                                    <? foreach($masM as $int):
                                                                        if($int=='1941-45'){echo 'checked';}
                                                                    endforeach;?>>
                                                            </td></tr>
                                                        <tr><td><label> - 1946-47</label>
                                                                <input type="checkbox" onchange="chch(this)" id="g3m" value="1946-47" class="form-control"
                                                                    <? foreach($masM as $int):
                                                                        if($int=='1946-47'){echo 'checked';}
                                                                    endforeach;?>>
                                                            </td></tr></table>
                                                    <input type="hidden" name="golodM" id="golodM" <? if(isset($_POST['golodM'])){
                                                        echo "value='{$_POST['golodM']}'";
                                                    };?>>
                                                </td>
                                            </tr>
                                            <tr <?if($_POST['golodSem']!='Так'){ echo "class='showGolod'";}?> id="papGolod">
                                                <td>
                                                    <label>Батько:</label></td>
                                                <td>
                                                    <? $masO=explode(";",$_POST['golodO'])?>
                                                    <table <?if($_POST['golodSem']!='Так'){ echo "class='showGolod'";}?> id="tabGolodO"><tr><td><label> - 1932-33</label>
                                                                <input type="checkbox" onchange="chch1(this)" id="g1o" value="1932-33" class="form-control"
                                                                    <? foreach($masO as $int):
                                                                        if($int=='1932-33'){echo 'checked';}
                                                                    endforeach;?>>
                                                            </td></tr>
                                                        <tr><td><label> - 1941-45</label>
                                                                <input type="checkbox" onchange="chch1(this)" id="g2o" value="1941-45" class="form-control"
                                                                    <? foreach($masO as $int):
                                                                        if($int=='1941-45'){echo 'checked';}
                                                                    endforeach;?>>
                                                            </td></tr>
                                                        <tr><td><label> - 1946-47</label>
                                                                <input type="checkbox" onchange="chch1(this)" id="g3o" value="1946-47" class="form-control"
                                                                    <? foreach($masO as $int):
                                                                        if($int=='1946-47'){echo 'checked';}
                                                                    endforeach;?>>
                                                            </td></tr></table> <input type="hidden" name="golodO" id="golodO"
                                                        <? if(isset($_POST['golodO'])){
                                                            echo "value='{$_POST['golodO']}'";
                                                        };?>>
                                                </td>
                                            </tr>
                                            <tr <?if($_POST['golodSem']!='Так'){ echo "class='showGolod'";}?> id="bratGolod">
                                                <td>
                                                    <label>Рідні брати/сестри:</label></td>
                                                <td>

                                                    <? $masS=explode(";",$_POST['golodSis'])?>
                                                    <table <?if($_POST['golodSem']!='Так'){ echo "class='showGolod'";}?> id="tabGolodS"><tr><td><label> - 1932-33</label>
                                                                <input type="checkbox" onchange="chch2(this)" id="g1s" value="1932-33" class="form-control"
                                                                    <? foreach($masS as $int):
                                                                        if($int=='1932-33'){echo 'checked';}
                                                                    endforeach;?>>
                                                            </td></tr>
                                                        <tr><td><label> - 1941-45</label>
                                                                <input type="checkbox" onchange="chch2(this)" id="g2s" value="1941-45" class="form-control"
                                                                    <? foreach($masS as $int):
                                                                        if($int=='1941-45'){echo 'checked';}
                                                                    endforeach;?>>
                                                            </td></tr>
                                                        <tr><td><label> - 1946-47</label>
                                                                <input type="checkbox" onchange="chch2(this)" id="g3s" value="1946-47" class="form-control"
                                                                    <? foreach($masS as $int):
                                                                        if($int=='1946-47'){echo 'checked';}
                                                                    endforeach;?>>
                                                            </td></tr></table> <input type="hidden" name="golodSis" id="golodSis"
                                                        <? if(isset($_POST['golodSis'])){
                                                            echo "value='{$_POST['golodSis']}'";
                                                        };?>>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Чи помер хтось з членів сім’ї (мати / батько / рідні брати або сестри) з причин, пов`язаних з
                                                        голодом в 1932-33, 1941-45 і / або
                                                        1946-47 році:</label></td>
                                                <td>
                                                    <select name="death1" class="form-control">
                                                        <option value="--" <? if($_POST['death1']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['death1']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так-1932-33" <? if($_POST['death1']=='Так-1932-33'){ echo "selected";}?>>Так-1932-33</option>
                                                        <option value="Так-1941-45" <? if($_POST['death1']=='Так-1941-45'){ echo "selected";}?>>Так-1941-45</option>
                                                        <option value="Так-1946-47" <? if($_POST['death1']=='Так-1946-47'){ echo "selected";}?>>Так-1946-47</option>

                                                        <option value="Не знаю" <? if($_POST['death1']=='Не знаю'){ echo "selected";}?>>Не знаю</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Чи голодували Ви особисто у періоди голоду в
                                                        1932-33, 1941-45 і / або 1946-47 роках голодомору. Якщо так - вказати
                                                        період:</label></td>
                                                <td>
                                                    <select name="death2" class="form-control">
                                                        <option value="--" <? if($_POST['death2']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['death2']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так-1932-33" <? if($_POST['death2']=='Так-1932-33'){ echo "selected";}?>>Так-1932-33</option>
                                                        <option value="Так-1941-45" <? if($_POST['death2']=='Так-1941-45'){ echo "selected";}?>>Так-1941-45</option>
                                                        <option value="Так-1946-47" <? if($_POST['death2']=='Так-1946-47'){ echo "selected";}?>>Так-1946-47</option>

                                                        <option value="Не знаю" <? if($_POST['death2']=='Не знаю'){ echo "selected";}?>>Не знаю</option>
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
                                       <table class='mainT' style="width: 80%;">
                                            <tr>
                                                <td><label class="lb1">Вага (кг)</label></td>
                                                <td style="width: 100%">

                                                    з <input class="form-control" type="text" name="ves0" placeholder=""  value="<? echo $_POST['ves0'];?>">

                                                    по <input class="form-control" type="text" name="ves" placeholder=""  value="<? echo $_POST['ves'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label>Зріст (см)</label></td>
                                                <td>

                                                    з<input class="form-control" type="text" name="rost0"
                                                           placeholder="" value="<? echo $_POST['rost0'];?>">
                                                    по<input class="form-control" type="text" name="rost"
                                                           placeholder="" value="<? echo $_POST['rost'];?>"></td>
                                            </tr>
                                            <tr>
                                                <td><label>Окружність талії (см)</label></td>
                                                <td>з <input class="form-control" type="text" name="tal0" placeholder="" value="<? echo $_POST['tal0'];?>">
                                                    по <input class="form-control" type="text" name="tal" placeholder="" value="<? echo $_POST['tal'];?>">

                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label>Окружність стегон (см)</label></td>
                                                <td>з <input class="form-control" type="text" name="bed0"
                                                           placeholder="" value="<? echo $_POST['bed0'];?>">
                                                    по <input class="form-control" type="text" name="bed"
                                                           placeholder="" value="<? echo $_POST['bed'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label>Індекс маси тіла (кг/м 2 )</label></td>
                                                <td>з<input class="form-control" type="text" name="index0" value="<? echo $_POST['index0'];?>">
                                                    по<input class="form-control" type="text" name="index" value="<? echo $_POST['index'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label>Систолічний артеріальний тиск (сидячи) 0`</label></td>
                                                <td>
                                                    з<input type="text"  class="form-control" name="art0" placeholder="" value="<? echo $_POST['art0'];?>">
                                                    по<input type="text"  class="form-control" name="art" placeholder="" value="<? echo $_POST['art'];?>"></td>
                                            </tr>
                                            <tr>
                                                <td><label>Систолічний артеріальний тиск (сидячи) 10`</label></td>
                                                <td>
                                                    з<input type="text"  class="form-control" name="systisk0" placeholder="" value="<? echo $_POST['systisk0'];?>">
                                                    по<input type="text"  class="form-control" name="systisk" placeholder="" value="<? echo $_POST['systisk'];?>"></td>
                                            </tr>
                                            <tr>

                                                <td><label>Діастолічний артеріальний тиск (сидячи) 0`</label></td>
                                                <td>
                                                    з<input type="text"  class="form-control" name="art10" placeholder="" value="<? echo $_POST['art10'];?>">
                                                    по<input type="text"  class="form-control" name="art1" placeholder="" value="<? echo $_POST['art1'];?>"></td>

                                            </tr>
                                            <tr>

                                                <td><label>Діастолічний артеріальний тиск (сидячи) 10`</label></td>
                                                <td>
                                                    з<input type="text"  class="form-control" name="disttisk0" placeholder="" value="<? echo $_POST['disttisk0'];?>">
                                                    по<input type="text"  class="form-control" name="disttisk" placeholder="" value="<? echo $_POST['disttisk'];?>"></td>

                                            </tr>
                                        </table>
                                    </fieldset>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="zhitt">
                                    <fieldset style="margin-top: 30px;">
                                        <h4>2.Б. Спосіб життя</h4>
                                       <table class='mainT' style="width: 80%;">

                                            <tr>
                                                <td><label class="lb1">Ви палите?</label></td>
                                                <td style="width: 100%">
                                                    <select class="form-control" name="smouk" onchange="showPal(this.value)">
                                                        <option value="--" <? if($_POST['smouk']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['smouk']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['smouk']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr <? if($_POST['smouk']!='Так'){echo 'class="showPal"';}?> id="chastoPal">
                                                <td><label>Якщо курите, як часто?</label></td>
                                                <td>
                                                    <select class="form-control" name="smoukTime" id="smoukTime">
                                                        <option value="--" <? if($_POST['smoukTime']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Кожен день" <? if($_POST['smoukTime']=='Кожен день'){ echo "selected";}?>>Кожен день</option>
                                                        <option value="Кілька днів на тиждень" <? if($_POST['smoukTime']=='Кілька днів на тиждень'){ echo "selected";}?>>Кілька днів на тиждень
                                                        </option>
                                                        <option value="Дуже рідко" <? if($_POST['smoukTime']=='Дуже рідко'){ echo "selected";}?>>Дуже рідко</option>
                                                    </select></td>
                                            </tr>
                                            <tr <? if($_POST['smouk']!='Так'){echo 'class="showPal"';}?> id="kolPal">
                                                <td><label>Кількість викурених сигарет за
                                                        1 день</label></td>
                                                <td>з<input class="form-control" type="text" name="smokeKol0"
                                                           placeholder="" value="<? echo $_POST['smokeKol0'];?>" id="smoukkol">
                                                    по<input class="form-control" type="text" name="smokeKol"
                                                           placeholder="" value="<? echo $_POST['smokeKol'];?>" id="smoukkol1">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Як часто Ви вживаєте алкоголь?</label>

                                                </td>
                                                <td>
                                                    <select name="alkogol" class="form-control">
                                                        <option value="--" <? if($_POST['alkogol']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ніколи" <? if($_POST['alkogol']=='Ніколи'){ echo "selected";}?>>Ніколи</option>
                                                        <option value="Менше 1 разу на місяць" <? if($_POST['alkogol']=='Менше 1 разу на місяць'){ echo "selected";}?>>Менше 1 разу на місяць
                                                        </option>
                                                        <option value="1-3 раза в місяц" <? if($_POST['alkogol']=='1-3 раза в місяц'){ echo "selected";}?>>1-3 раза в місяц</option>
                                                        <option value="1-2 раза в неділю" <? if($_POST['alkogol']=='1-2 раза в неділю'){ echo "selected";}?>>1-2 раза в неділю</option>
                                                        <option value="3-4 раза в неділю" <? if($_POST['alkogol']=='3-4 раза в неділю'){ echo "selected";}?>>3-4 раза в неділю</option>
                                                        <option value="Практично кожен день" <? if($_POST['alkogol']=='Практично кожен день'){ echo "selected";}?>>Практично кожен день
                                                        </option>

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
                                                    <label class="lb1">Тип діабету:</label>

                                                </td>
                                                <td style="width: 100%">
                                                    <select name="typeDiab" class="form-control" onchange="showDiab(this.value)">
                                                        <option value=""  <? if($_POST['typeDiab']==''){ echo "selected";}?>>--</option>
                                                        <option value="ЦД 1 типу" <? if($_POST['typeDiab']=='ЦД 1 типу'){ echo "selected";}?>>ЦД 1 типу</option>
                                                        <option value="ЦД 2 типу" <? if($_POST['typeDiab']=='ЦД 2 типу'){ echo "selected";}?>>ЦД 2 типу</option>
                                                        <option value="Латентний аутоімунний (LADA)" <? if($_POST['typeDiab']=='Латентний аутоімунний (LADA)'){ echo "selected";}?>>Латентний
                                                            аутоімунний
                                                            (LADA)
                                                        </option>
                                                        <option value="MODY-діабет" <? if($_POST['typeDiab']=='MODY-діабет'){ echo "selected";}?>>MODY-діабет</option>
                                                        <option value="Панкреатогенний" <? if($_POST['typeDiab']=='Панкреатогенний'){ echo "selected";}?>>Панкреатогенний
                                                        </option>
                                                        <option value="Інший" <? if($_POST['typeDiab']=='Інший'){ echo "selected";}?>>Інший
                                                        </option>
                                                    </select>

                                                </td>
                                            </tr>
                                            <tr <? if($_POST['typeDiab']=='--' or $_POST['typeDiab']=='Не хворіє'){echo 'class="showDiabet"';}?> id="showDiabRik">
                                                <td>
                                                    <label>Рік постановки діагнозу:</label>
                                                </td>
                                                <td>
                                                    з<input type="text" name="yearD0" class="form-control" value="<? echo $_POST['yearD0'];?>" id="yearD">
                                                    по<input type="text" name="yearD" class="form-control" value="<? echo $_POST['yearD'];?>" id="yearD1">
                                                </td>
                                            </tr>
                                            <tr <? if($_POST['typeDiab']=='' or $_POST['typeDiab']=='Не хворіє'){echo 'class="showDiabet"';}?> id="showDiabVik">
                                                <td>
                                                    <label>Вік дебюту діабету (років):</label></td>
                                                <td>
                                                    з<input type="text" name="vekD0" class="form-control" value="<? echo $_POST['vekD0'];?>" id="vekD">
                                                    по<input type="text" name="vekD" class="form-control" value="<? echo $_POST['vekD'];?>" id="vekD1">
                                                </td>
                                            </tr>
                                            <tr <? if($_POST['typeDiab']=='' or $_POST['typeDiab']=='Не хворіє'){echo 'class="showDiabet"';}?> id="showDiabkol">
                                                <td>
                                                    <label>Тривалість діабету (років):</label></td>
                                                <td>
                                                    з<input type="text" name="longD0" class="form-control" value="<? echo $_POST['longD0'];?>" id="longD">
                                                    по<input type="text" name="longD" class="form-control" value="<? echo $_POST['longD'];?>" id="longD1">
                                                </td>
                                            </tr>

                                        </table>
                                    </fieldset>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="bol">
                                    <fieldset style="margin-top: 30px;">
                                        <h4>2.Г. Хвороби, що супруводжують:</h4>
                                       <table class='mainT' style="width: 80%;">
                                            <tr>
                                                <td>
                                                    <label class="lb1">Інфекційні:</label>

                                                </td>
                                                <td colspan="2" style="width: 100%">
                                                    <textarea name="inf" class="form-control" ><? echo $_POST['inf'];?></textarea>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Аутоімунні (вказати):</label>

                                                </td>
                                                <td colspan="2">
                                                    <textarea name="aut" class="form-control" ><? echo $_POST['aut'];?></textarea>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Вроджені вади (вказати):</label>

                                                </td>
                                                <td colspan="2">
                                                    <textarea name="porok" class="form-control" ><? echo $_POST['porok'];?></textarea>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Інші ендокринні (вказати):</label>

                                                </td>
                                                <td colspan="2">
                                                    <textarea name="endoc" class="form-control"><? echo $_POST['endoc'];?></textarea>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Інша патологія (вказати):</label>

                                                </td>
                                                <td colspan="2">
                                                    <textarea name="patol" class="form-control" ><? echo $_POST['patol'];?></textarea>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Класифікація супутніх захворювань по DRG:</label>

                                                </td>
                                                <td colspan="2">
                                                    <input type="text" name="DGR" class="form-control" value="<? echo $_POST['DGR'];?>">

                                                </td>
                                            </tr>
                                           <tr>
                                               <td><label class="lb1">ЧИ хворієте Ви на онкологічні захворювання?</label>
                                               </td>
                                               <td>
                                                   <select name="Onko" class="form-control" onchange="onko(this.value)">
                                                       <option value="--" <? if($_POST['Onko']=='--'){ echo "selected";}?>>--</option>
                                                       <option value="Ні" <? if($_POST['Onko']=='Ні'){ echo "selected";}?>>Ні</option>
                                                       <option value="Так" <? if($_POST['Onko']=='Так'){ echo "selected";}?>>Так</option>

                                                   </select>
                                               </td>
                                           </tr>
                                           <tr <? if($_POST['Onko']!='Так'){echo 'class="onkoshow"';}?> id="vidOnkoz">
                                               <td>
                                                   <label class="lb1">Вкажіть вид онкозахворювання</label></td>
                                               <td>
                                                   <input type="text" name="VidOnko" id="vidOnko" class="form-control" value="<? echo $_POST['VidOnko'];?>">
                                               </td>
                                           </tr>
                                           <tr <? if($_POST['Onko']!='Так'){echo 'class="onkoshow"';}?> id="datOnko">
                                               <td>
                                                   <label class="lb1">Дата постановки діагнозу
                                                       онкозахворювання</label></td>
                                               <td>
                                                   з<input type="date" name="dateOnko0" id="dateOnko" class="form-control" value="<? echo $_POST['dateOnko0'];?>">
                                                   по<input type="date" name="dateOnko" id="dateOnko1" class="form-control" value="<? echo $_POST['dateOnko'];?>">
                                               </td>
                                           </tr>
                                           <tr <? if($_POST['Onko']!='Так'){echo 'class="onkoshow"';}?> id="likOnko">
                                               <td><label class="lb1">Якщо так - лікування онкозахворювання
                                                       (Препарати - назва препаратів,
                                                       група)?</label>

                                               </td>
                                               <td>
                                                   <select name="OnkoLek" class="form-control" id="onkoLek">
                                                       <option value="--" <? if($_POST['OnkoLek']=='--'){ echo "selected";}?>>--</option>
                                                       <option value="Ні" <? if($_POST['OnkoLek']=='Ні'){ echo "selected";}?>>Ні</option>
                                                       <option value="Хіміотерапія" <? if($_POST['OnkoLek']=='Хіміотерапія'){ echo "selected";}?>>Хіміотерапія</option>
                                                       <option value="Імунотерапія" <? if($_POST['OnkoLek']=='Імунотерапія'){ echo "selected";}?>>Імунотерапія</option>
                                                       <option value="Гормональна терапія" <? if($_POST['OnkoLek']=='Гормональна терапія'){ echo "selected";}?>>Гормональна терапія</option>
                                                       <option value="Комбінована (хіміо + тергетная терапія)" <? if($_POST['OnkoLek']=='Комбінована (хіміо + тергетная терапія)'){ echo "selected";}?>>
                                                           Комбінована (хіміо + тергетная терапія)
                                                       </option>
                                                       <option value="Таргетная терапія" <? if($_POST['OnkoLek']=='Таргетная терапія'){ echo "selected";}?>>Таргетная терапія</option>
                                                       <option value="Хірургічне" <? if($_POST['OnkoLek']=='Хірургічне'){ echo "selected";}?>>Хірургічне</option>
                                                       <option value="Інші" <? if($_POST['OnkoLek']=='Інші'){ echo "selected";}?>>Інші</option>
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
                                                <td><label class="lb1">Чи був у вас інфаркт?</label></td>
                                                <td style="width: 100%;">
                                                    <select name="infarkt" class="form-control"
                                                            onchange="addIn(this.value)">
                                                        <option value="--"  <? if($_POST['infarkt']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['infarkt']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['infarkt']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>

                                                    <?php
                                                    if( $_POST['infarkt']=='Так'){
                                                        //var_dump($_POST);
                                                    echo "<span id='ki' style='display: flex;'>
<label id='kolinfL'>Введіть кількість інфарктів</label></span>
<span id='ki2' style='display: flex;'>
<select id='kolinf' name='kolinf' class='form-control' onchange='addPol(this.value)'>";?>
<option <? if($_POST['kolinf']==''){ echo 'selected';}?> ></option>
<option <? if($_POST['kolinf']=='1'){ echo 'selected';}?> >1</option>
<option <? if($_POST['kolinf']=='2'){ echo 'selected';}?> >2</option>
<option <? if($_POST['kolinf']=='3'){ echo 'selected';}?> >3</option>
                                                    <?
echo "</select>

 
  </span>";
                                      if($_POST['kolinf']>0) {           ?>


                                                    <table id="ttt" width="400px">
                                                        <?
                                                        //var_dump($_POST['datInf']);
                                                        $inf=explode(';',$_POST['datInf']);


                                                            $nom='datInf';
                                                            $nom0='datInf0';

                                                            ?>
                                                            <tr id="rowDat<?echo $i;?>"><td><label id="datInfL<?echo $i;?>">Рік інфаркту з</label>
                                                                <input type="text" name="datInf<? echo $i;?>" value='<? echo $_POST[$nom];?>' id="datInf<?echo $i;?>"
                                                                       class="form-control"></td></tr><tr id="rowDatk<?echo $i;?>">
                                                            <td><label id="datInfL0<?echo $i;?>">Рік інфаркту по</label>
                                                                <input type="text" name="datInf0<? echo $i;?>" value='<? echo $_POST[$nom0];?>' id="datInf0<?echo $i;?>"
                                                                           class="form-control"></td>
                                                            </tr>


                                                    </table></td>


                                                <?}
                                                    else{

                                                            ?>
                                                            <table id="ttt" width="400px"><tbody></tbody></table><?


                                                    }}
                                                else{
                                                    ?>
                                                    <span id='ki' style='display: flex;'>
                                                        </span></td>
                                                    <td>
                                                        <span id="ki2" style="display: flex;"></span>
                                                        <table id="ttt" width="400px"><tbody></tbody></table></td>
                                                    <?
                                                }
                                                ?>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="display: flex;"><label>Чи був у вас інсульт?</label></td>
                                                <td>
                                                    <select name="insult" class="form-control"
                                                            onchange="addIn1(this.value)">
                                                        <option value="--"  <? if($_POST['insult']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['insult']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['insult']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>


                                                    <?php
                                                    if( $_POST['insult']=='Так'){

                                                    echo "<span id='kiIns' style='display: flex;'>
<label id='kolinsL'>Введіть кількість інсультів</label></span>
<span id='kiIns2' style='display: flex;'>
<select id='kolins' name='kolins' class='form-control' onchange='addPol1(this.value)'>";?>
<option <? if($_POST['kolins']==''){ echo 'selected';}?> ></option>
<option <? if($_POST['kolins']=='1'){ echo 'selected';}?> >1</option>
<option <? if($_POST['kolins']=='2'){ echo 'selected';}?> >2</option>
<option <? if($_POST['kolins']=='3'){ echo 'selected';}?> >3</option>
                                                    <?
echo "</select>

 </span>";  if($_POST['kolins']>0){
                                                 ?>
                                                    <table id="tttIns" width="400px">
                                                        <?
                                                        $inf=explode(';',$_POST['datIns']);


                                                            $nom='datIns';
                                                            $nom0='datIns0';
                                                            ?>
                                                            <tr id="rowDatIns<?echo $i;?>"><td><label id="datInsL<?echo $i;?>">Рік інсульту з</label>
                                                             <input type="text" name="datIns<? echo $i;?>" value='<? echo $_POST[$nom];?>' id="datIns<?echo $i;?>" class="form-control"></td>
                                                            </tr><tr id="rowDatIns1<?echo $i;?>"><td><label id="datInsL0<?echo $i;?>">Рік інсульту по</label>
                                                                <input type="text" name="datIns0<? echo $i;?>" value='<? echo $_POST[$nom0];?>' id="datIns0<?echo $i;?>" class="form-control"></td>

                                                            </tr>


                                                    </table>
                                                </td>

                                                    <?}else{
     ?>
                                                        <table id="tttIns" width="400px"><tbody></tbody></table>
     <?

                                                    }

                                                    }
                                                    else{
                                                    ?>
                                                    <span id='kiIns' style='display: flex;'>
                                                        </span>
                                                    <span id="kiIns2" style="display: flex;"></span>
                                                    <table id="tttIns" width="400px"><tbody></tbody></table>
                                                <?
                                                }
                                                ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="display: flex;"><label>Хронічна серцева
                                                        недостатність - вказати стадію</label>

                                                </td>
                                                <td>
                                                    <select name="hronSerd" class="form-control"
                                                            onchange="addStad(this.value)">
                                                        <option value="--"  <? if($_POST['hronSerd']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['hronSerd']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Стадія I" <? if($_POST['hronSerd']=='Стадія I'){ echo "selected";}?>>Стадія I</option>
                                                        <option value="Стадія II, Період А (стадія IIа)" <? if($_POST['hronSerd']=='Стадія II, Період А (стадія IIа)'){ echo "selected";}?>>Стадія II,
                                                            Період А (стадія IIа)
                                                        </option>
                                                        <option value="Стадія II, Період Б (стадія IIб)" <? if($_POST['hronSerd']=='Стадія II, Період Б (стадія IIб)'){ echo "selected";}?>>Стадія II,
                                                            Період Б (стадія IIб)
                                                        </option>
                                                        <option value="Стадія III, Період А (стадія IIIа)" <? if($_POST['hronSerd']=='Стадія III, Період А (стадія IIIа)'){ echo "selected";}?>>Стадія III,
                                                            Період А (стадія IIIа)
                                                        </option>
                                                        <option value="Стадія III, Період Б (стадія IIIб)" <? if($_POST['hronSerd']=='Стадія III, Період Б (стадія IIIб)'){ echo "selected";}?>>Стадія III,
                                                            Період Б (стадія IIIб)
                                                        </option>
                                                    </select>

                                                    <div style="display: flex;">
                                                        <? if($_POST['hronSerd']!='Ні' and $_POST['hronSerd']!='--')
                                                        {
                                                            ?>
                                                            <span id="kiStad" style="display: flex;"><label id="datStadL">Дата постановки (рік) з</label></span>
                                                            <span id="kiStad2" style="display: flex; width: 100px;"><input type="text" name="datStad" value='<? echo $_POST['datStad'];?>' id="datStad" class="form-control" width="100px"></span>
                                                            <span id="kiStad0" style="display: flex;"><label id="datStadL0">Дата постановки (рік) по</label></span>
                                                            <span id="kiStad20" style="display: flex; width: 100px;"><input type="text" name="datStad0" value='<? echo $_POST['datStad0'];?>' id="datStad0" class="form-control" width="100px"></span>

                                                        <?}else{
                                                            ?>

                                                            <span id="kiStad" style="display: flex;"></span>
                                                            <span id="kiStad2" style="display: flex; width: 100px;"></span>
                                                            <span id="kiStad0" style="display: flex;"></span>
                                                            <span id="kiStad20" style="display: flex; width: 100px;"></span>
                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </fieldset>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="diab">
                                    <fieldset style="margin-top: 30px;">
                                        <h4>4.А. Обстеження очей</h4>
                                        <table class='mainT' style="width: 80%;">
                                            <tr>
                                                <td><label class="lb1">Дата обстеження очного
                                                        дна: дд-мм-рр</label>

                                                </td>
                                                <td style="width: 100%;">з<input type="date" class="form-control" name="glaz0" value="<? echo $_POST['glaz0'];?>">
                                                    по<input type="date" class="form-control" name="glaz" value="<? echo $_POST['glaz'];?>"></td>

                                            </tr>
                                            <tr>
                                                <td><label class="lb1">Діабетична
                                                        ретинопатія?</label></td>
                                                <td style="width: 100%;">
                                                    <select name="diabDiab" class="form-control"
                                                            onchange="addDiab(this.value)">
                                                        <option value="--"  <? if($_POST['diabDiab']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['diabDiab']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['diabDiab']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                    <? if($_POST['diabDiab']=='Так') {
                                                        ?>

                                                        <span id="kiDiab"><label id="datDiabL">Дата постановки з</label></span>

                                                        <span id="kiDiab2"><input type="date" name="datDiab" id="datDiab" value='<? echo $_POST['datDiab'];?>' class="form-control" width="100px"></span>
                                                        <span id="kiDiab0"><label id="datDiabL0">Дата постановки по</label></span>

                                                        <span id="kiDiab20"><input type="date" name="datDiab0" id="datDiab0" value='<? echo $_POST['datDiab0'];?>' class="form-control" width="100px"></span>

                                                        <?php
                                                    }else{
                                                        ?>
                                                        <span id="kiDiab"></span>

                                                        <span id="kiDiab2"></span>
                                                        <span id="kiDiab0"></span>

                                                        <span id="kiDiab20"></span>
                                                        <?
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label class="lb1">Непроліферативна
                                                        ретинопатія?</label></td>
                                                <td>
                                                    <select name="diabNep" class="form-control"
                                                            onchange="addNep(this.value)">
                                                        <option value="--" <? if($_POST['diabNep']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['diabNep']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так - легкого ступеню" <? if($_POST['diabNep']=='Так - легкого ступеню'){ echo "selected";}?>>Так - легкого ступеню</option>
                                                        <option value="Так - середнього ступеню" <? if($_POST['diabNep']=='Так - середнього ступеню'){ echo "selected";}?>>Так - середнього ступеню</option>
                                                        <option value="Так - важкого ступеню" <? if($_POST['diabNep']=='Так - важкого ступеню'){ echo "selected";}?>>Так - важкого ступеню</option>
                                                    </select>
                                                    <? if($_POST['diabNep']=='Так') {
                                                        ?>
                                                        <span id="kiNep"><label id="datNepL">Дата постановки з</label></span>

                                                        <span id="kiNep2"><input type="date" name="datNep" value='<? echo $_POST['datNep'];?>' id="datNep" class="form-control" width="100px"></span>
                                                        <span id="kiNep0"><label id="datNepL0">Дата постановки по</label></span>

                                                        <span id="kiNep20"><input type="date" name="datNep0" value='<? echo $_POST['datNep0'];?>' id="datNep0" class="form-control" width="100px"></span>

                                                        <?php
                                                    }else{
                                                        ?>
                                                        <span id="kiNep"></span>

                                                        <span id="kiNep2"></span>
                                                        <span id="kiNep0"></span>

                                                        <span id="kiNep20"></span>
                                                        <?
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label class="lb1">Препроліферативна
                                                        ретинопатія?</label></td>
                                                <td>
                                                    <select name="diabPrep" class="form-control"
                                                            onchange="addPrep(this.value)">
                                                        <option value="--" <? if($_POST['diabPrep']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['diabPrep']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['diabPrep']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                    <? if($_POST['diabPrep']=='Так') {
                                                        ?>
                                                        <span id="kiPrep"><label id="datPrepL">Дата постановки</label></span>

                                                        <span id="kiPrep2"><input type="date" name="datPrep" value='<? echo $_POST['datPrep'];?>' id="datPrep" class="form-control" width="100px"></span>
                                                        <span id="kiPrep0"><label id="datPrepL0">Дата постановки</label></span>

                                                        <span id="kiPrep20"><input type="date" name="datPrep0" value='<? echo $_POST['datPrep0'];?>' id="datPrep0" class="form-control" width="100px"></span>

                                                        <?php
                                                    }else{
                                                        ?>
                                                        <span id="kiPrep"></span>

                                                        <span id="kiPrep2"></span>
                                                        <span id="kiPrep0"></span>

                                                        <span id="kiPrep20"></span>
                                                        <?
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label class="lb1">Проліферативна
                                                        ретинопатія?</label></td>
                                                <td style="width: 100%;">
                                                    <select name="diabPrep2" class="form-control"
                                                            onchange="addPrep2(this.value)">
                                                        <option value="--" <? if($_POST['diabPrep2']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['diabPrep2']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так - проліферативна діабетична ретинопатія з низьким ризиком" <? if($_POST['diabPrep2']=='Так - проліферативна діабетична ретинопатія з низьким ризиком'){ echo "selected";}?>>Так - проліферативна діабетична ретинопатія з низьким ризиком</option>
                                                        <option value="Так - проліферативна діабетична ретинопатія з високим ризиком" <? if($_POST['diabPrep2']=='Так - проліферативна діабетична ретинопатія з високим ризиком'){ echo "selected";}?>>Так - проліферативна діабетична ретинопатія з високим ризиком</option>
                                                    </select>

                                                    <? if($_POST['diabPrep2']=='Так') {
                                                        ?>
                                                        <span id="kiPrep12"><label id="datPrep2L">Дата постановки з</label></span>

                                                        <span id="kiPrep22"><input type="date" name="datPrep2" value='<? echo $_POST['datPrep2'];?>' id="datPrep2" class="form-control" width="100px"></span>
                                                        <span id="kiPrep120"><label id="datPrep2L0">Дата постановки по</label></span>

                                                        <span id="kiPrep220"><input type="date" name="datPrep20" value='<? echo $_POST['datPrep20'];?>' id="datPrep20" class="form-control" width="100px"></span>

                                                        <?php
                                                    }else{
                                                        ?>
                                                        <span id="kiPrep12"></span>

                                                        <span id="kiPrep22"></span>
                                                        <span id="kiPrep120"></span>

                                                        <span id="kiPrep220"></span>
                                                        <?
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label class="lb1">Сліпота?</label></td>
                                                <td>
                                                    <select name="Slep" class="form-control"
                                                            onchange="addSlep(this.value)">
                                                        <option value="--" <? if($_POST['Slep']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['Slep']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['Slep']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                    <? if($_POST['Slep']=='Так') {
                                                        ?>
                                                        <span id="kiSlep"><label id="datSlepL">Дата постановки з</label></span>

                                                        <span id="kiSlep2"><input type="date" name="datSlep" value='<? echo $_POST['datSlep'];?>' id="datSlep" class="form-control" width="100px"></span>
                                                        <span id="kiSlep0"><label id="datSlepL0">Дата постановки по</label></span>

                                                        <span id="kiSlep20"><input type="date" name="datSlep0" value='<? echo $_POST['datSlep0'];?>' id="datSlep0" class="form-control" width="100px"></span>

                                                        <?php
                                                    }else{
                                                        ?>
                                                        <span id="kiSlep"></span>

                                                        <span id="kiSlep2"></span>
                                                        <span id="kiSlep0"></span>

                                                        <span id="kiSlep20"></span>

                                                        <?
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label class="lb1">Лазерне лікування?</label>
                                                </td>
                                                <td>
                                                    <select name="Lazer" class="form-control"
                                                            onchange="addLazer(this.value)">
                                                        <option value="--" <? if($_POST['Lazer']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['Lazer']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['Lazer']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                    <? if($_POST['Lazer']=='Так') {
                                                        ?>
                                                        <span id="kiLazer"><label id="datLazerL">Дата постановки з</label></span>

                                                        <span id="kiLazer2"><input type="date" name="datLazer" value='<? echo $_POST['datLazer'];?>' id="datLazer" class="form-control" width="100px"></span>
                                                        <span id="kiLazer0"><label id="datLazerL0">Дата постановки по</label></span>

                                                        <span id="kiLazer20"><input type="date" name="datLazer0" value='<? echo $_POST['datLazer0'];?>' id="datLazer0" class="form-control" width="100px"></span>

                                                        <?php
                                                    }else{
                                                        ?>
                                                        <span id="kiLazer"></span>

                                                        <span id="kiLazer2"></span>
                                                        <span id="kiLazer0"></span>

                                                        <span id="kiLazer20"></span>
                                                        <?
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label class="lb1">Катаракта?</label></td>
                                                <td>
                                                    <select name="Katar" class="form-control"
                                                            onchange="addKatar(this.value)">
                                                        <option value="--" <? if($_POST['Katar']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['Katar']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['Katar']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                    <? if($_POST['Katar']=='Так') {
                                                        ?>
                                                        <span id="kiKatar"><label id="datKatarL">Дата постановки з</label></span>

                                                        <span id="kiKatar2"><input type="date" name="datKatar" value='<? echo $_POST['datKatar'];?>' id="datKatar" class="form-control" width="100px"></span>
                                                        <span id="kiKatar0"><label id="datKatarL0">Дата постановки по</label></span>

                                                        <span id="kiKatar20"><input type="date" name="datKatar0" value='<? echo $_POST['datKatar0'];?>' id="datKatar0" class="form-control" width="100px"></span>

                                                        <?php
                                                    }else{
                                                        ?>
                                                        <span id="kiKatar"></span>

                                                        <span id="kiKatar2"></span>
                                                        <span id="kiKatar0"></span>

                                                        <span id="kiKatar20"></span>
                                                        <?
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label class="lb1">Макулопатія?</label></td>
                                                <td>
                                                    <select name="Mal" class="form-control"
                                                            onchange="addMal(this.value)">
                                                        <option value="--" <? if($_POST['Mal']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['Mal']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['Mal']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                    <? if($_POST['Mal']=='Так') {
                                                        ?>
                                                        <span id="kiMal"><label id="datMalL">Дата постановки з</label></span>

                                                        <span id="kiMal2"><input type="date" name="datMal" value='<? echo $_POST['datMal'];?>' id="datMal" class="form-control" width="100px"></span>
                                                        <span id="kiMal0"><label id="datMalL0">Дата постановки по</label></span>

                                                        <span id="kiMal20"><input type="date" name="datMal0" value='<? echo $_POST['datMal0'];?>' id="datMal0" class="form-control" width="100px"></span>

                                                        <?php
                                                    }else{
                                                        ?>
                                                        <span id="kiMal"></span>

                                                        <span id="kiMal2"></span>
                                                        <span id="kiMal0"></span>

                                                        <span id="kiMal20"></span>

                                                        <?
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label class="lb1">Глаукома?</label></td>
                                                <td>
                                                    <select name="Glauk" class="form-control"
                                                            onchange="addGlauk(this.value)">
                                                        <option value="--" <? if($_POST['Glauk']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['Glauk']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['Glauk']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                    <? if($_POST['Glauk']=='Так') {
                                                        ?>
                                                        <span id="kiGlauk"><label id="datGlaukL">Дата постановки з</label></span>

                                                        <span id="kiGlauk2"><input type="date" value='<? echo $_POST['datGlauk'];?>' name="datGlauk" id="datGlauk" class="form-control" width="100px"></span>
                                                        <span id="kiGlauk0"><label id="datGlaukL0">Дата постановки по</label></span>

                                                        <span id="kiGlauk20"><input type="date" value='<? echo $_POST['datGlauk0'];?>' name="datGlauk0" id="datGlauk0" class="form-control" width="100px"></span>

                                                        <?php
                                                    }else{
                                                        ?>
                                                        <span id="kiGlauk"></span>

                                                        <span id="kiGlauk2"></span>
                                                        <span id="kiGlauk0"></span>

                                                        <span id="kiGlauk20"></span>
                                                        <?
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="display: flex;"><label class="lb1">На сьогодні лікування
                                                        ДР:</label></td>
                                                <td>
                                                    <select name="LechDR" class="form-control">
                                                        <option value="--" <? if($_POST['LechDR']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['LechDR']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Кортикостероїди (триамцинолон)" <? if($_POST['LechDR']=='Кортикостероїди (триамцинолон)'){ echo "selected";}?>>Кортикостероїди
                                                            (триамцинолон)
                                                        </option>
                                                        <option value="Хірургічні втручання" <? if($_POST['LechDR']=='Хірургічні втручання'){ echo "selected";}?>>Хірургічні втручання
                                                        </option>
                                                        <option value="Інгібітори VEGF" <? if($_POST['LechDR']=='Інгібітори VEGF'){ echo "selected";}?>>Інгібітори VEGF</option>
                                                        <option value="Ін'єкції гіалуронідази" <? if($_POST['LechDR']=='Ін\'єкції гіалуронідази'){ echo "selected";}?>>Ін'єкції гіалуронідази
                                                        </option>
                                                        <option value="Лазерна фотокоагуляція" <? if($_POST['LechDR']=='Лазерна фотокоагуляція'){ echo "selected";}?>>Лазерна фотокоагуляція
                                                        </option>
                                                        <option value="Інше" <? if($_POST['LechDR']=='Інше'){ echo "selected";}?>>Інше</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Дані OCT:</label></td>
                                                <td>
                                                    <input type="file" style='background: transparent;' name="OST"
                                                           class="form-control" value="<? echo $_POST['OST'];?>">
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
                                                <td><label class="lb1">Дата обстеження нирок:
                                                        дд-мм-рр</label>

                                                </td>
                                                <td style="width: 100%">з<input type="date" class="form-control" name="pochki0" value="<? echo $_POST['pochki0'];?>">
                                                    по<input type="date" class="form-control" name="pochki" value="<? echo $_POST['pochki'];?>"></td>

                                            </tr>
                                            <tr>
                                                <td><label class="lb1">Діабетична
                                                        нефропатія?</label></td>
                                                <td>
                                                    <select name="diabNefro" class="form-control"
                                                            onchange="addNefro(this.value)">
                                                        <option value="--" <? if($_POST['diabNefro']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['diabNefro']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['diabNefro']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                    <? if($_POST['diabNefro']=='Так') {
                                                        ?>
                                                        <span id="kiNefro"><label id="datNefroL">Дата постановки з</label></span>

                                                        <span id="kiNefro2"><input type="date" name="datNefro" value='<? echo $_POST['datNefro'];?>' id="datNefro" class="form-control" width="100px"></span>
                                                        <span id="kiNefro0"><label id="datNefroL0">Дата постановки по</label></span>

                                                        <span id="kiNefro20"><input type="date" name="datNefro0" value='<? echo $_POST['datNefro0'];?>' id="datNefro0" class="form-control" width="100px"></span>

                                                        <?php
                                                    }else{
                                                        ?>
                                                        <span id="kiNefro"></span>

                                                        <span id="kiNefro2"></span>
                                                        <span id="kiNefro0"></span>

                                                        <span id="kiNefro20"></span>
                                                        <?
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label class="lb1">Хронічна ниркова
                                                        недостатність?</label></td>
                                                <td>
                                                    <select name="diabPochNEd" class="form-control"
                                                            onchange="addPochNEd(this.value)">
                                                        <option value="--" <? if($_POST['diabPochNEd']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['diabPochNEd']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['diabPochNEd']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                    <? if($_POST['diabPochNEd']=='Так') {
                                                        ?>
                                                        <span id="kiPochNEd"><label id="datPochNEdL">Дата постановки з</label></span>

                                                        <span id="kiPochNEd2"><input type="date" value='<? echo $_POST['datPochNEd'];?>' name="datPochNEd" id="datPochNEd" class="form-control" width="100px"></span>
                                                        <span id="kiPochNEd0"><label id="datPochNEdL0">Дата постановки по</label></span>

                                                        <span id="kiPochNEd20"><input type="date" value='<? echo $_POST['datPochNEd0'];?>' name="datPochNEd0" id="datPochNEd0" class="form-control" width="100px"></span>

                                                        <?php
                                                    }else{
                                                        ?>
                                                        <span id="kiPochNEd"></span>

                                                        <span id="kiPochNEd2"></span>
                                                        <span id="kiPochNEd0"></span>

                                                        <span id="kiPochNEd20"></span>
                                                        <?
                                                    }
                                                    ?>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label class="lb1">Хронічна ниркова
                                                        недостатність заключна стадія?</label></td>
                                                <td>
                                                    <select name="diabPochSt" class="form-control"
                                                            onchange="addPochSt(this.value)">
                                                        <option value="--" <? if($_POST['diabPochSt']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['diabPochSt']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['diabPochSt']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                    <? if($_POST['diabPochSt']=='Так') {
                                                        ?>
                                                        <span id="kiPochSt"><label id="datPochStL">Дата постановки з</label></span>
                                                        <span id="kiPochSt2"><input type="date" name="datPochSt" value='<? echo $_POST['datPochSt'];?>' id="datPochSt" class="form-control" width="100px"></span>
                                                        <span id="kiPochSt0"><label id="datPochStL0">Дата постановки по</label></span>
                                                        <span id="kiPochSt20"><input type="date" name="datPochSt0" value='<? echo $_POST['datPochSt0'];?>' id="datPochSt0" class="form-control" width="100px"></span>

                                                        <?php
                                                    }else{
                                                        ?>
                                                        <span id="kiPochSt"></span>

                                                        <span id="kiPochSt2"></span>
                                                        <span id="kiPochSt0"></span>

                                                        <span id="kiPochSt20"></span>
                                                        <?
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label class="lb1">Діаліз?</label></td>
                                                <td>
                                                    <select name="diabDializ" class="form-control"
                                                            onchange="addDializ(this.value)">
                                                        <option value="--" <? if($_POST['diabDializ']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['diabDializ']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['diabDializ']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                    <? if($_POST['diabDializ']=='Так') {
                                                        ?>
                                                        <span id="kiDializ"><label id="datDializL">Дата постановки</label></span>

                                                        <span id="kiDializ2"><input type="date" value='<? echo $_POST['datDializ'];?>' name="datDializ" id="datDializ" class="form-control" width="100px"></span>
                                                        <span id="kiDializ0"><label id="datDializL0">Дата постановки</label></span>

                                                        <span id="kiDializ20"><input type="date" value='<? echo $_POST['datDializ0'];?>' name="datDializ0" id="datDializ0" class="form-control" width="100px"></span>

                                                        <?php
                                                    }else{
                                                        ?>
                                                        <span id="kiDializ"></span>

                                                        <span id="kiDializ2"></span>
                                                        <span id="kiDializ0"></span>

                                                        <span id="kiDializ20"></span>
                                                        <?
                                                    }
                                                    ?>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><label class="lb1">Поточні методи лікування:
                                                        ліки (назви та група):</label>

                                                </td>
                                                <td>
                                                    <select name="LechPoch" class="form-control">
                                                        <option value="--" <? if($_POST['LechPoch']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['LechPoch']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Інгібітори АПФ" <? if($_POST['LechPoch']=='Інгібітори АПФ'){ echo "selected";}?>>Інгібітори АПФ</option>
                                                        <option value="Прямі інгібітори реніну" <? if($_POST['LechPoch']=='Прямі інгібітори реніну'){ echo "selected";}?>>Прямі інгібітори
                                                            реніну
                                                        </option>
                                                        <option value="Діуретики" <? if($_POST['LechPoch']=='Діуретики'){ echo "selected";}?>>Діуретики</option>
                                                        <option value="Блокатори Са-каналів" <? if($_POST['LechPoch']=='Блокатори Са-каналів'){ echo "selected";}?>>Блокатори Са-каналів
                                                        </option>
                                                        <option value="Бета-адреноблокатори" <? if($_POST['LechPoch']=='Бета-адреноблокатори'){ echo "selected";}?>>Бета-адреноблокатори
                                                        </option>
                                                        <option value="Препарати заліза" <? if($_POST['LechPoch']=='Препарати заліза'){ echo "selected";}?>>Препарати заліза</option>
                                                        <option value="Інше" <? if($_POST['LechPoch']=='Інше'){ echo "selected";}?>>Інше</option>
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
                                                <td><label class="lb1">Дата обстеження: дд-мм-рр</label></td>
                                                <td style="width: 100%">з<input type="date" class="form-control" name="datPoli0" value="<? echo $_POST['datPoli0'];?>">
                                                     по<input type="date" class="form-control" name="datPoli" value="<? echo $_POST['datPoli'];?>"></td>

                                            </tr>
                                            <tr>
                                                <td><label class="lb1">Ангіопатія нижніх кінцівок?</label></td>
                                                <td>
                                                    <select name="diabAngin" class="form-control"
                                                            onchange="addAngin(this.value)">
                                                        <option value="--" <? if($_POST['diabAngin']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['diabAngin']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['diabAngin']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                    <? if($_POST['diabAngin']=='Так') {
                                                        ?>
                                                        <span id="kiAngin"><label id="datAnginL">Дата постановки з</label></span>

                                                        <span id="kiAngin2"><input type="date" name="datAngin" value='<? echo $_POST['datAngin'];?>' id="datAngin" class="form-control" width="100px"></span>
                                                        <span id="kiAngin0"><label id="datAnginL0">Дата постановки по</label></span>

                                                        <span id="kiAngin20"><input type="date" name="datAngin0" value='<? echo $_POST['datAngin0'];?>' id="datAngin0" class="form-control" width="100px"></span>

                                                        <span id="kiAngin3"><label id="kakAng">Яка ангіопатія?</label></span>


                                                        <span id="kiAngin4"><select id="kakAngio" name="kakAngio" class="form-control">
                                                           <option value="--" <? if( $_POST['kakAngio']=='--'){echo 'selected';}?>>--</option>
                                                            <option value="пальців стоп" <? if( $_POST['kakAngio']=='пальців стоп'){echo 'selected';}?>>пальців стоп</option>
                                                            <option value="вище стопи до коліна" <? if( $_POST['kakAngio']=='вище стопи до коліна'){echo 'selected';}?>>вище стопи до коліна</option>
                                                            <option value="вище коліна" <? if( $_POST['kakAngio']=='вище коліна'){echo 'selected';}?>>вище коліна</option>
                                                        </select></span>

                                                        <?php
                                                    }else{
                                                        ?>
                                                        <span id="kiAngin"></span>
                                                        <span id="kiAngin2"></span>
                                                        <span id="kiAngin0"></span>
                                                        <span id="kiAngin20"></span>
                                                        <span id="kiAngin3"></span>

                                                        <span id="kiAngin4"></span>

                                                        <?
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label class="lb1">Периферична нейропатія?</label></td>
                                                <td>
                                                    <select name="diabNejr" class="form-control"
                                                            onchange="addNejr(this.value)">
                                                        <option value="--" <? if($_POST['diabNejr']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['diabNejr']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['diabNejr']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                    <? if($_POST['diabNejr']=='Так') {
                                                        ?>
                                                        <span id="kiNejr"><label id="datNejrL">Дата постановки з</label></span>

                                                        <span id="kiNejr2"><input type="date" value='<? echo $_POST['datNejr'];?>' name="datNejr" id="datNejr" class="form-control" width="100px"></span>
                                                        <span id="kiNejr0"><label id="datNejrL0">Дата постановки по</label></span>

                                                        <span id="kiNejr20"><input type="date" value='<? echo $_POST['datNejr0'];?>' name="datNejr0" id="datNejr0" class="form-control" width="100px"></span>


                                                        <?php
                                                    }else{
                                                        ?>
                                                        <span id="kiNejr"></span>

                                                        <span id="kiNejr2"></span>
                                                        <span id="kiNejr0"></span>

                                                        <span id="kiNejr20"></span>

                                                        <?
                                                    }
                                                    ?>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label class="lb1">Чи бувають незвичайні відчуття в стопах?</label>
                                                </td>
                                                <td>
                                                    <select name="diabStopp" class="form-control">
                                                        <option value="--" <? if($_POST['diabStopp']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні, все нормально" <? if($_POST['diabStopp']=='Ні, все нормально'){ echo "selected";}?>>Ні, все нормально</option>
                                                        <option value="Оніміння" <? if($_POST['diabStopp']=='Оніміння'){ echo "selected";}?>>Оніміння</option>
                                                        <option value="Поколювання" <? if($_POST['diabStopp']=='Поколювання'){ echo "selected";}?>>Поколювання</option>
                                                        <option value="Мурашки" <? if($_POST['diabStopp']=='Мурашки'){ echo "selected";}?>>Мурашки</option>
                                                        <option value="Печіння" <? if($_POST['diabStopp']=='Печіння'){ echo "selected";}?>>Печіння</option>
                                                        <option value="Підвищено чутливість" <? if($_POST['diabStopp']=='Підвищено чутливість'){ echo "selected";}?>>Підвищено чутливість
                                                        </option>
                                                        <option value="Знижено чутливості" <? if($_POST['diabStopp']=='Знижено чутливості'){ echo "selected";}?>>Знижено чутливості</option>
                                                        <option value="Складнощі при русі" <? if($_POST['diabStopp']=='Складнощі при русі'){ echo "selected";}?>>Складнощі при русі</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label class="lb1">Чи є біль в обох ногах?</label></td>
                                                <td>
                                                    <select name="Bol" class="form-control" onchange="bolNoga(this.value)">
                                                        <option value="--" <? if($_POST['Bol']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні, болю немає" <? if($_POST['Bol']=='Ні, болю немає'){ echo "selected";}?>>Ні, болю немає</option>
                                                        <option value="Ні, біль з одного боку" <? if($_POST['Bol']=='Ні, біль з одного боку'){ echo "selected";}?>>Ні, біль з одного боку
                                                        </option>
                                                        <option value="Так" <? if($_POST['Bol']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr <? if($_POST['Bol']!='Так'){echo 'class="showNoga"';}?> id="bolStopa">
                                                <td>
                                                    <label class="lb1">Якщо біль в обох стопах, як вона
                                                        проявляється?</label></td>
                                                <td>
                                                    <select name="Boltwo" class="form-control" id="Boltwo">
                                                        <option value="--" <? if($_POST['Boltwo']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Спонтанна" <? if($_POST['Boltwo']=='Спонтанна'){ echo "selected";}?>>Спонтанна</option>
                                                        <option value="Постійна" <? if($_POST['Boltwo']=='Постійна'){ echo "selected";}?>>Постійна</option>

                                                    </select>

                                                </td>
                                            </tr>
                                            <tr <? if($_POST['Bol']!='Так'){echo 'class="showNoga"';}?> id="bolIntens">
                                                <td><label class="lb1">Яка інтенсивність болю (шкала від 1 до
                                                        5)?</label></td>
                                                <td>
                                                    <select name="BolInten" class="form-control" id="BolInten">
                                                        <option value="--" <? if($_POST['BolInten']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="1" <? if($_POST['BolInten']=='1'){ echo "selected";}?>>1</option>
                                                        <option value="2" <? if($_POST['BolInten']=='2'){ echo "selected";}?>>2</option>
                                                        <option value="3" <? if($_POST['BolInten']=='3'){ echo "selected";}?>>3</option>
                                                        <option value="4" <? if($_POST['BolInten']=='4'){ echo "selected";}?>>4</option>
                                                        <option value="5" <? if($_POST['BolInten']=='5'){ echo "selected";}?>>5</option>

                                                    </select>
                                                </td>
                                            </tr>
                                            <tr <? if($_POST['Bol']!='Так'){echo 'class="showNoga"';}?> id="bolProjav">
                                                <td><label class="lb1">Як проявляється біль?</label></td>
                                                <td>
                                                    <select name="Bolkak" class="form-control" id="Bolkak">
                                                        <option value="--" <? if($_POST['Bolkak']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Печіння" <? if($_POST['Bolkak']=='Печіння'){ echo "selected";}?>>Печіння</option>
                                                        <option value="Викручування" <? if($_POST['Bolkak']=='Викручування'){ echo "selected";}?>>Викручування</option>
                                                        <option value="Здавлення" <? if($_POST['Bolkak']=='Здавлення'){ echo "selected";}?>>Здавлення</option>
                                                        <option value="Гостра стріляючий біль" <? if($_POST['Bolkak']=='Гостра стріляючий біль'){ echo "selected";}?>>Гостра стріляючий біль
                                                        </option>
                                                        <option value="Пронизуючий біль (як голки)" <? if($_POST['Bolkak']=='Пронизуючий біль (як голки)'){ echo "selected";}?>>Пронизуючий біль (як
                                                            голки)
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Прийом препаратів?</label></td>
                                                <td>
                                                    <select name="Preparat" class="form-control" onchange="preparat(this.value)">
                                                        <option value="--" <? if($_POST['Preparat']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['Preparat']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['Preparat']=='Так'){ echo "selected";}?>>Так</option>

                                                    </select>

                                                </td>
                                            </tr>
                                            <tr <? if($_POST['Preparat']!='Так'){echo 'class="showPrep"';}?> id="whatPrep">
                                                <td><label class="lb1">Якщо так, розписати які препарати?</label></td>
                                                <td>
                                                    <select name="PreparatKakie" class="form-control" id="PreparatKakie">
                                                        <option value="--" <? if($_POST['PreparatKakie']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Антиконвульсанти (прегабалін, габапентин)"
                                                            <? if($_POST['PreparatKakie']=='"Антиконвульсанти (прегабалін, габапентин)'){ echo "selected";}?>>
                                                            Антиконвульсанти (прегабалін, габапентин)
                                                        </option>
                                                        <option value="Антидепресанти (Дулоксетин - інгібітори зворотного захоплення серотоніну. НА)"
                                                            <? if($_POST['PreparatKakie']=='Антидепресанти (Дулоксетин - інгібітори зворотного захоплення серотоніну. НА)'){ echo "selected";}?>>
                                                            Антидепресанти (Дулоксетин - інгібітори зворотного
                                                            захоплення серотоніну. НА)
                                                        </option>
                                                        <option value="Трициклічніантидепресанти (амітриптилін)"
                                                            <? if($_POST['PreparatKakie']=='Трициклічніантидепресанти (амітриптилін)'){ echo "selected";}?>>
                                                            Трициклічніантидепресанти (амітриптилін)
                                                        </option>
                                                        <option value="Опіоіди" <? if($_POST['PreparatKakie']=='Опіоіди'){ echo "selected";}?>>Опіоіди</option>
                                                        <option value="Вітаміни групи В" <? if($_POST['PreparatKakie']=='Вітаміни групи В'){ echo "selected";}?>>Вітаміни групи В</option>
                                                        <option value="Аналгетики" <? if($_POST['PreparatKakie']=='Аналгетики'){ echo "selected";}?>>Аналгетики</option>
                                                        <option value="НПЗП" <? if($_POST['PreparatKakie']=='НПЗП'){ echo "selected";}?>>НПЗП</option>
                                                        <option value="Інше" <? if($_POST['PreparatKakie']=='Інше'){ echo "selected";}?>>Інше</option>
                                                    </select>
                                                </td>

                                            </tr>
                                        </table>
                                    </fieldset>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="stop">
                                    <fieldset style="margin-top: 30px;">
                                        <h4>6.Б. Обстеження стопи</h4>
                                       <table class='mainT' style="width: 80%;">
                                            <tr>
                                                <td><label class="lb1">Дата обстеження стопи: дд-мм-рр?</label></td>
                                                <td style="width: 100%;">
                                                    з<input type="date" name="datStopObsl" class="form-control" value="<? echo $_POST['datStopObsl'];?>">
                                                    по<input type="date" name="datStopObsl0" class="form-control" value="<? echo $_POST['datStopObsl0'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Зниження температури?</label>
                                                </td>
                                                <td>
                                                    <select name="SnizhT" class="form-control">
                                                        <option value="--" <? if($_POST['SnizhT']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['SnizhT']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['SnizhT']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Порушення тактильної чутливості?</label></td>
                                                <td>
                                                    <select name="Chyvs" class="form-control">
                                                        <option value="--" <? if($_POST['Chyvs']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['Chyvs']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['Chyvs']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Порушення вібраційної чутливості?</label>
                                                </td>
                                                <td>
                                                    <select name="NarVibr" class="form-control">
                                                        <option value="--" <? if($_POST['NarVibr']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['NarVibr']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['NarVibr']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Зниження / відсутність рефлексів?</label>
                                                </td>
                                                <td>
                                                    <select name="Reflex" class="form-control">
                                                        <option value="--" <? if($_POST['Reflex']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['Reflex']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['Reflex']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Наявність виразок?</label>
                                                </td>
                                                <td>
                                                    <select name="Jazv" class="form-control">
                                                        <option value="--" <? if($_POST['Jazv']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['Jazv']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['Jazv']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Нагноєння виразок?</label>
                                                </td>
                                                <td>
                                                    <select name="GnojJazv" class="form-control">
                                                        <option value="--" <? if($_POST['GnojJazv']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['GnojJazv']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['GnojJazv']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Пульс на стопі?</label>
                                                </td>
                                                <td>
                                                    <select name="PylsStopa" class="form-control">
                                                        <option value="--" <? if($_POST['PylsStopa']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['PylsStopa']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['PylsStopa']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select></td>
                                            </tr>
                                            <tr>
                                                <td><label class="lb1">Шунтування / ангіопластика?</label></td>
                                                <td>
                                                    <select name="Shynt" class="form-control">
                                                        <option value="--" <? if($_POST['Shynt']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['Shynt']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['Shynt']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label class="lb1">Синдром переміжної кульгавості?</label></td>
                                                <td>
                                                    <select name="Hrom" class="form-control">
                                                        <option value="--" <? if($_POST['Hrom']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['Hrom']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['Hrom']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label class="lb1">Ампутація?</label></td>
                                                <td>
                                                    <select name="Ampyt" class="form-control"
                                                            onchange="addAmput(this.value)">
                                                        <option value="--" <? if($_POST['Ampyt']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['Ampyt']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Ліва нога" <? if($_POST['Ampyt']=='Ліва нога'){ echo "selected";}?>>Ліва нога</option>
                                                        <option value="Права нога" <? if($_POST['Ampyt']=='Права нога'){ echo "selected";}?>>Права нога</option>
                                                    </select>
                                                    <? if($_POST['Ampyt']=='Ліва нога' or $_POST['Ampyt']=='Права нога') {?>

                                                        <span id="kiAmput1"><label id="kakAmput">Локалізація ампутації?</label></span>


                                                        <span id="kiAmput3">
                                                        <select id="kakAmput1" name="kakAmput1" class="form-control" value='<? echo $_POST['kakAmput1'];?>'>
                                                                <option <? if($_POST['kakAmput1']=='--'){ echo 'selected';}?> >--</option>
                                                                <option <? if($_POST['kakAmput1']=='Великий палець'){ echo 'selected';}?> >Великий палець</option>
                                                                <option <? if($_POST['kakAmput1']=='Стопа'){ echo 'selected';}?> >Стопа</option>
                                                                <option <? if($_POST['kakAmput1']=='Коліно'){ echo 'selected';}?> >Коліно</option>
                                                                <option <? if($_POST['kakAmput1']=='Стегно'){ echo 'selected';}?> >Стегно</option>
                                                        </select>

                                                       </span>

                                                        <span id="kiAmput"><label id="datAmputL">Рік ампутації з</label></span>

                                                        <span id="kiAmput2"><input type="text" name="datAmput" id="datAmput" value='<? echo $_POST['datAmput'];?>' class="form-control" width="100px"></span>
                                                        <span id="kiAmput0"><label id="datAmputL0">Рік ампутації по</label></span>

                                                        <span id="kiAmput20"><input type="text" name="datAmput0" id="datAmput0" value='<? echo $_POST['datAmput0'];?>' class="form-control" width="100px"></span>

                                                        <?php
                                                    }else{
                                                        ?>
                                                        <span id="kiAmput1"></span>
                                                        <span id="kiAmput3"></span>
                                                        <span id="kiAmput"></span>
                                                        <span id="kiAmput2"></span>
                                                        <span id="kiAmput0"></span>
                                                        <span id="kiAmput20"></span>
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
                                                <td><label class="lb1">Дата обстеження: дд-мм-рр</label></td>
                                                <td style="width: 100%;">
                                                    з<input type="date" class="form-control" name="datLab0" value="<? echo $_POST['datLab0'];?>">
                                                    по<input type="date" class="form-control" name="datLab" value="<? echo $_POST['datLab'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Ви зараз натщесерце?</label></td>
                                                <td>
                                                    <select name="Natosh" class="form-control">
                                                        <option value="--" <? if($_POST['Natosh']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['Natosh']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['Natosh']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">О котрій годині був останній прийом їжі
                                                        (напередодні ввечері)?</label></td>
                                                <td>
                                                    з<input name="Pisha0" type="time" class="form-control"
                                                           placeholder="" value="<? echo $_POST['Pisha0'];?>">
                                                    по<input name="Pisha" type="time" class="form-control"
                                                                                                                     placeholder="" value="<? echo $_POST['Pisha'];?>">

                                                </td>
                                            </tr>
                                            <tr style="background: #295b8e;">
                                                <td><label class="lb1" style="color:white;">Глюкоза крові натще:</label></td>
                                                <td></td>

                                            </tr>
                                            <tr>

                                                <td>
                                                    <label class="lb1">Показник, ммоль/л</label></td>
                                                <td>
                                                    з<input type="text" name="nmol0" class="form-control" value="<? echo $_POST['nmol0'];?>">
                                                    по<input type="text" name="nmol" class="form-control" value="<? echo $_POST['nmol'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Дата, дд-мм-рр</label></td>
                                                <td>
                                                    з<input type="date" name="Datnmol0" class="form-control" value="<? echo $_POST['Datnmol0'];?>">
                                                    по<input type="date" name="Datnmol" class="form-control" value="<? echo $_POST['Datnmol'];?>">
                                                </td>
                                            </tr>
                                            <tr style="background: #295b8e;">
                                                <td><label class="lb1" style="color:white;">Глікований гемоглобін?</label></td>
                                                <td></td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">%</label></td>
                                                <td>
                                                    з<input type="text" name="vidsot0" class="form-control" value="<? echo $_POST['vidsot0'];?>">
                                                    по<input type="text" name="vidsot" class="form-control" value="<? echo $_POST['vidsot'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Глікований гемоглобін pmol/pmol</label></td>
                                                <td>
                                                    з<input type="text" name="gemogl0" class="form-control" value="<? echo $_POST['gemogl0'];?>">
                                                    по<input type="text" name="gemogl" class="form-control" value="<? echo $_POST['gemogl'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Дата, дд-мм-рр</label></td>
                                                <td>
                                                    з<input type="date" name="Datgemogl0" class="form-control" value="<? echo $_POST['Datgemogl0'];?>">
                                                    по<input type="date" name="Datgemogl" class="form-control" value="<? echo $_POST['Datgemogl'];?>">

                                                </td>
                                            </tr>
                                            <tr style="background: #295b8e;">
                                                <td><label class="lb1" style="color:white;">Загальний аналіз крові (дата)?</label>

                                                </td>
                                                <td style="color:white;">
                                                    з<input type="date" name="Datkrovi0" class="form-control" value="<? echo $_POST['Datkrovi0'];?>">
                                                    по<input type="date" name="Datkrovi" class="form-control" value="<? echo $_POST['Datkrovi'];?>">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label class="lb1">Еритроцити</label></td>
                                                <td>
                                                    з<input type="text" name="eritr0" class="form-control" value="<? echo $_POST['eritr0'];?>">
                                                    по<input type="text" name="eritr" class="form-control" value="<? echo $_POST['eritr'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Гемоглобін</label></td>
                                                <td>
                                                    з<input type="text" name="gemogl20" class="form-control" value="<? echo $_POST['gemogl20'];?>">
                                                    по<input type="text" name="gemogl2" class="form-control" value="<? echo $_POST['gemogl2'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Лейкоцити (кількість)</label></td>
                                                <td>
                                                    з<input type="text" name="lekoz0" class="form-control" value="<? echo $_POST['lekoz0'];?>">
                                                    по<input type="text" name="lekoz" class="form-control" value="<? echo $_POST['lekoz'];?>">


                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Нейтрофіли (абс к-ть)</label></td>
                                                <td>
                                                    з<input type="text" name="nejtrof0" class="form-control" value="<? echo $_POST['nejtrof0'];?>">
                                                    по<input type="text" name="nejtrof" class="form-control" value="<? echo $_POST['nejtrof'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Моноцити (абс к-ть)</label></td>
                                                <td>
                                                    з<input type="text" name="monozit0" class="form-control" value="<? echo $_POST['monozit0'];?>">
                                                    по<input type="text" name="monozit" class="form-control" value="<? echo $_POST['monozit'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Лімфоцити (абс к-во)</label></td>
                                                <td>
                                                    з<input type="text" name="limfoz0" class="form-control" value="<? echo $_POST['limfoz0'];?>">
                                                    по<input type="text" name="limfoz" class="form-control" value="<? echo $_POST['limfoz'];?>">

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Тромбоцити (абс к-во)</label></td>
                                                <td>
                                                    з<input type="text" name="tromb0" class="form-control" value="<? echo $_POST['tromb0'];?>">
                                                    по<input type="text" name="tromb" class="form-control" value="<? echo $_POST['tromb'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Тромбоцити, MPV</label></td>
                                                <td>
                                                    з<input type="text" name="mpv0" class="form-control" value="<? echo $_POST['mpv0'];?>">
                                                    по<input type="text" name="mpv" class="form-control" value="<? echo $_POST['mpv'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Інше (показник)</label></td>
                                                <td>
                                                    з<input type="text" name="dryg0" class="form-control" value="<? echo $_POST['dryg0'];?>">
                                                    по<input type="text" name="dryg" class="form-control" value="<? echo $_POST['dryg'];?>">

                                                </td>
                                            </tr>
                                            <tr style="background: #295b8e;">
                                                <td><label class="lb1" style="color:white;">Креатинін в плазмі крові</label></td>
                                                <td></td>

                                            </tr>
                                            <tr>

                                                <td>
                                                    <label class="lb1">Показник, мкмоль / л</label></td>
                                                <td>
                                                    з<input type="text" name="kreat0" class="form-control" value="<? echo $_POST['kreat0'];?>">
                                                    по<input type="text" name="kreat" class="form-control" value="<? echo $_POST['kreat'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Дата, дд-мм-рр</label></td>
                                                <td>
                                                    з<input type="date" name="datkreat0" class="form-control" value="<? echo $_POST['datkreat0'];?>">
                                                    по<input type="date" name="datkreat" class="form-control" value="<? echo $_POST['datkreat'];?>">

                                                </td>
                                            </tr>
                                            <tr style="background: #295b8e;">
                                                <td><label class="lb1" style="color:white;">Креатинін в сечі</label></td>
                                                <td></td>

                                            </tr>
                                            <tr>
                                                <td>

                                                    <label class="lb1">Показник, мкмоль / л</label></td>
                                                <td>
                                                    з<input type="text" name="kreatMocha0" class="form-control" value="<? echo $_POST['kreatMocha0'];?>">
                                                    по<input type="text" name="kreatMocha" class="form-control" value="<? echo $_POST['kreatMocha'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Дата, дд-мм-рр</label></td>
                                                <td>
                                                    з<input type="date" name="datMocha0" class="form-control" value="<? echo $_POST['datMocha0'];?>">
                                                    по<input type="date" name="datMocha" class="form-control" value="<? echo $_POST['datMocha'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>

                                                    <label class="lb1">Кліренс креатиніну (СКФ, швидкості клубочкової
                                                        фільтрації)</label></td>
                                                <td>
                                                    з<input type="text" name="klirkreat0" class="form-control" value="<? echo $_POST['klirkreat0'];?>">
                                                    по<input type="text" name="klirkreat" class="form-control" value="<? echo $_POST['klirkreat'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Протеїнурія</label></td>
                                                <td>
                                                    <select name="Protein" class="form-control" onchange="protein(this.value)">
                                                        <option value="--" <? if($_POST['Protein']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['Protein']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['Protein']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr <? if($_POST['Protein']!='Так'){echo 'class="showProt"';}?> id="prote">
                                                <td>
                                                    <label class="lb1">Останній вимір, мг / сут</label></td>
                                                <td>
                                                    з<input type="text" name="posIzm0" id="posIzm" class="form-control" value="<? echo $_POST['posIzm0'];?>">
                                                    по<input type="text" name="posIzm" id="posIzm1" class="form-control" value="<? echo $_POST['posIzm'];?>">
                                                </td>
                                            </tr>
                                            <tr <? if($_POST['Protein']!='Так'){echo 'class="showProt"';}?> id="datprote">
                                                <td>
                                                    <label class="lb1">Дата, дд-мм-рр</label></td>
                                                <td>
                                                    з<input type="date" name="datProtein0" id="datProtein" class="form-control" value="<? echo $_POST['datProtein0'];?>">
                                                    по<input type="date" name="datProtein" id="datProtein1" class="form-control" value="<? echo $_POST['datProtein'];?>">

                                                </td>
                                            </tr>
                                            <tr>
                                                <style>
                                                    #forTab1 tr td:last-child input, #forTab2 tr td:last-child input,
                                                    #forTab1 tr td:last-child select, #forTab2 tr td:last-child select,
                                                    #forTab1 tr td:last-child label, #forTab2 tr td:last-child label {
                                                        width: 100%;
                                                    }

                                                </style>
                                                <td>
                                                    <label class="lb1">Мікроальбумінурія</label></td>
                                                <td>

                                                    <select name="Mikroalmb" class="form-control"
                                                            onchange="addMikro(this.value)">
                                                        <option value="--" <? if($_POST['Mikroalmb']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['Mikroalmb']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['Mikroalmb']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                    <? if($_POST['Mikroalmb']=='Так') {
                                                        ?>
                                                        <span id="kiMikro1"><label id="kakMikro">Якщо так – показник, мг/л з</label></span>


                                                        <span id="kiMikro3"><input id="kakMikro1" name="kakMikro1" class="form-control" value='<? echo $_POST['kakMikro1'];?>'></span>

                                                        <span id="kiMikro10"><label id="kakMikro0">Якщо так – показник, мг/л по</label></span>
                                                        <span id="kiMikro30"><input id="kakMikro10" name="kakMikro10" class="form-control" value='<? echo $_POST['kakMikro10'];?>'></span>



                                                        <span id="kiMikro"><label id="datMikroL">Дата з</label></span>

                                                        <span id="kiMikro2"><input type="date" name="datMikro" id="datMikro" value='<? echo $_POST['datMikro'];?>' class="form-control" width="100px"></span>
                                                        <span id="kiMikro0"><label id="datMikroL0">Дата по</label></span>

                                                        <span id="kiMikro20"><input type="date" name="datMikro0" id="datMikro0" value='<? echo $_POST['datMikro0'];?>' class="form-control" width="100px"></span>

                                                        <?php
                                                    }else{
                                                        ?>
                                                        <span id="kiMikro1"></span>

                                                        <span id="kiMikro3"></span>
                                                            <span id="kiMikro10"></span>
                                                            <span id="kiMikro30"></span>
                                                        <span id="kiMikro"></span>
                                                        <span id="kiMikro2"></span>
                                                        <span id="kiMikro0"></span>
                                                        <span id="kiMikro20"></span>
                                                        <?
                                                    }
                                                    ?>







                                                </td>
                                            </tr>
                                            <tr style="background: #295b8e;">
                                                <td><label class="lb1" style="color:white;">Лабораторний аналіз ліпідів в крові
                                                        (дата):</label></td>
                                                <td style="color:white;">з<input type="date" name="Lipiddat0" class="form-control" value="<? echo $_POST['Lipiddat0'];?>">
                                                    по<input type="date" name="Lipiddat" class="form-control" value="<? echo $_POST['Lipiddat'];?>"></td>

                                            </tr>
                                            <tr>
                                                <td>

                                                    <label class="lb1">Холестерин (показник)</label></td>
                                                <td>
                                                    з<input type="text" name="Holest0" class="form-control" value="<? echo $_POST['Holest0'];?>">
                                                    по<input type="text" name="Holest" class="form-control" value="<? echo $_POST['Holest'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Ліпіди високої щільності
                                                        (Показник)</label></td>
                                                <td>
                                                    з<input type="text" name="LipidVis0" class="form-control" value="<? echo $_POST['LipidVis0'];?>">
                                                    по<input type="text" name="LipidVis" class="form-control" value="<? echo $_POST['LipidVis'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>

                                                    <label class="lb1">Ліпіди низької щільності (показник)</label></td>
                                                <td>
                                                    з<input type="text" name="LipidNiz0" class="form-control" value="<? echo $_POST['LipidNiz0'];?>">
                                                    по<input type="text" name="LipidNiz" class="form-control" value="<? echo $_POST['LipidNiz'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>

                                                    <label class="lb1">Тригліцериди (показник)</label></td>
                                                <td>
                                                    з<input type="text" name="Trigliz0" class="form-control" value="<? echo $_POST['Trigliz0'];?>">
                                                    по<input type="text" name="Trigliz" class="form-control" value="<? echo $_POST['Trigliz'];?>">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>

                                                    <label class="lb1">Аспартатамінотрансфераза (АСТ)</label></td>
                                                <td>
                                                    з<input type="text" name="Asparta0" class="form-control" value="<? echo $_POST['Asparta0'];?>">
                                                    по<input type="text" name="Asparta" class="form-control" value="<? echo $_POST['Asparta'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Аланінамінотрансфераза (АСТ)</label></td>
                                                <td>
                                                    з<input type="text" name="Alanin0" class="form-control" value="<? echo $_POST['Alanin0'];?>">
                                                    по<input type="text" name="Alanin" class="form-control" value="<? echo $_POST['Alanin'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">С-реактивний білок</label></td>
                                                <td>
                                                    з<input type="text" name="BelocS0" class="form-control" value="<? echo $_POST['BelocS0'];?>">
                                                    по<input type="text" name="BelocS" class="form-control" value="<? echo $_POST['BelocS'];?>">

                                                </td>
                                            </tr>
                                            <tr style="display: none;">
                                                <td>

                                                    <label class="lb1">C-пептид, показник:</label></td>
                                                <td>
                                                    з<input type="text" name="Peptid0" class="form-control" value="<? echo $_POST['Peptid0'];?>">
                                                    по<input type="text" name="Peptid" class="form-control" value="<? echo $_POST['Peptid'];?>">
                                                </td>
                                            </tr>
                                            <tr style="display: none;">
                                                <td>
                                                    <label class="lb1">C-пептид, одиниця виміру:</label></td>
                                                <td>
                                                    з<input type="text" name="PeptiEdIzm0" class="form-control" value="<? echo $_POST['PeptiEdIzm0'];?>">
                                                    по<input type="text" name="PeptiEdIzm" class="form-control" value="<? echo $_POST['PeptiEdIzm'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">C-пептид, одиниця виміру нг/мл:</label></td>
                                                <td>
                                                    з<input type="text" name="PeptidPmol0" class="form-control" value="<? echo $_POST['PeptidPmol0'];?>">
                                                    по<input type="text" name="PeptidPmol" class="form-control" value="<? echo $_POST['PeptidPmol'];?>">


                                                </td>
                                            </tr>
                                            <tr>
                                                <td>

                                                    <label class="lb1">C-пептид, одиниця виміру nmol/l:</label></td>
                                                <td>
                                                    з<input type="text" name="PeptidNmol0" class="form-control" value="<? echo $_POST['PeptidNmol0'];?>">
                                                    по<input type="text" name="PeptidNmol" class="form-control" value="<? echo $_POST['PeptidNmol'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">C-пептід, Дата: дд-мм-рр:</label></td>
                                                <td>
                                                     з<input type="date" name="S_Pep0" class="form-control" value="<? echo $_POST['S_Pep0'];?>">
                                                     по<input type="date" name="S_Pep" class="form-control" value="<? echo $_POST['S_Pep'];?>">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">AT-GAD:</label></td><td>
                                                      з<input type="text" name="atGad0" class="form-control" value="<? echo $_POST['atGad0'];?>">
                                                      по<input type="text" name="atGad" class="form-control" value="<? echo $_POST['atGad'];?>">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">AT-GAD дата:</label></td><td>
                                                     з<input type="date" name="atGaddat0" class="form-control" value="<? echo $_POST['atGaddat0'];?>">
                                                     по<input type="date" name="atGaddat" class="form-control" value="<? echo $_POST['atGaddat'];?>">
                                                </td>

                                            </tr>
                                        </table>
                                    </fieldset>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="bio">
                                    <fieldset style="margin-top: 30px;">
                                        <h4>7.Б. Біоматеріал</label>
                                            <div id="tab-content12"
                                        </h4>
                                       <table class='mainT' style="width: 80%;">
                                            <tr>
                                                <td>
                                                    <label class="lb1">Сиворотка?</label></td>
                                                <td style="width: 100%;">
                                                    <select name="Sivor" class="form-control">
                                                        <option value="--" <? if($_POST['Sivor']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['Sivor']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['Sivor']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Плазма?</label></td>
                                                <td>
                                                    <select name="Plazma" class="form-control">
                                                        <option value="--" <? if($_POST['Plazma']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['Plazma']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['Plazma']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Кров на ДНК?</label></td>
                                                <td>
                                                    <select name="DNK" class="form-control">
                                                        <option value="--" <? if($_POST['DNK']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['DNK']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['DNK']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Кров на РНК?</label></td>
                                                <td>
                                                    <input name="PHK" type="text" class="form-control" value="<? echo $_POST['PHK'];?>">

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Слина?</label></td>
                                                <td>
                                                    <select name="Sluna" class="form-control">
                                                        <option value="--" <? if($_POST['Sluna']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['Sluna']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['Sluna']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Біоптат кожи?</label></td>
                                                <td>
                                                    <select name="Biopat" class="form-control">
                                                        <option value="--" <? if($_POST['Biopat']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['Biopat']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['Biopat']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Примітки при заборі крові (зрив вакуумної пробки,
                                                        тощо)</label>


                                                </td>
                                                <td
                                                    ">
                                                <textarea name="PrimZAbKrov" class="form-control"><? echo $_POST['PrimZAbKrov'];?></textarea>
                                                </td>

                                            </tr>
                                        </table>
                                    </fieldset>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="lik">
                                    <fieldset style="margin-top: 30px;">
                                        <h4>8.А. Лікування</h4>
                                        <table class='mainT' id="forTab2" style="width: 80%;">
                                            <tr>
                                                <td><label class="lb1">Лікування цукрового
                                                        діабету</label></td>
                                                <td style="width: 100%;">
                                                    <select name="LechDIabet" class="form-control">
                                                        <option value="--" <? if($_POST['LechDIabet']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Не проводиться" <? if($_POST['LechDIabet']=='Не проводиться'){ echo "selected";}?>>Не проводиться</option>
                                                        <option value="Дієта" <? if($_POST['LechDIabet']=='Дієта'){ echo "selected";}?>>Дієта</option>
                                                        <option value="Таблетки" <? if($_POST['LechDIabet']=='Таблетки'){ echo "selected";}?>>Таблетки</option>
                                                        <option value="Інсулін" <? if($_POST['LechDIabet']=='Інсулін'){ echo "selected";}?>>Інсулін</option>
                                                        <option value="Таблетки + інсулін" <? if($_POST['LechDIabet']=='Таблетки + інсулін'){ echo "selected";}?>>Таблетки + інсулін</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Лікування діабету: інсулін (препарат, доза
                                                        прийому, кратність)</label></td>
                                                <td>
                                                    <select name="LechInsul" class="form-control" onchange="showIns(this.value)">
                                                        <option value="--" <? if($_POST['LechInsul']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['LechInsul']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Базисна інсулінотерапія" <? if($_POST['LechInsul']=='Базисна інсулінотерапія'){ echo "selected";}?>>Базисна інсулінотерапія
                                                        </option>
                                                        <option value="Помпова інсулінотерапія" <? if($_POST['LechInsul']=='Помпова інсулінотерапія'){ echo "selected";}?>>Помпова
                                                            інсулінотерапія
                                                        </option>
                                                        <option value="Змішаний" <? if($_POST['LechInsul']=='Змішаний'){ echo "selected";}?>>Змішаний</option>

                                                    </select>
                                                </td>
                                            </tr>
                                            <tr <? if($_POST['LechInsul']=='--' or $_POST['LechInsul']=='Ні'){echo 'class="showIns"';}?> id="insyl">
                                                <td>
                                                    <label class="lb1">Дата початку інсулінотерапії (дд- мм-рр)</label>
                                                </td>
                                                <td>
                                                    з<input type="date" name="datLechDiab0" id="datLechDiab0" class="form-control" value="<? echo $_POST['datLechDiab0'];?>">
                                                    по<input type="date" name="datLechDiab"  id="datLechDiab" class="form-control" value="<? echo $_POST['datLechDiab'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label class="lb1">Лікування діабету: таблетки</label></td>
                                                <td>
                                                    <select name="diabLechTab" class="form-control">
                                                        <option value="--" <? if($_POST['diabLechTab']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Бігуаніди" <? if($_POST['diabLechTab']=='Бігуаніди'){ echo "selected";}?>>Бігуаніди</option>
                                                        <option value="Похідні сульфонілсечовини" <? if($_POST['diabLechTab']=='Похідні сульфонілсечовини'){ echo "selected";}?>>Похідні
                                                            сульфонілсечовини
                                                        </option>
                                                        <option value="Інгібітори ДПП-4" <? if($_POST['diabLechTab']=='Інгібітори ДПП-4'){ echo "selected";}?>>Інгібітори ДПП-4</option>
                                                        <option value="Інгібітори НЗКТГ-2" <? if($_POST['diabLechTab']=='Інгібітори НЗКТГ-2'){ echo "selected";}?>>Інгібітори НЗКТГ-2</option>
                                                        <option value="Тіазолідиндіони" <? if($_POST['diabLechTab']=='Тіазолідиндіони'){ echo "selected";}?>>Тіазолідиндіони</option>
                                                        <option value="Інгібітори a-глікозидази" <? if($_POST['diabLechTab']=='Інгібітори a-глікозидази'){ echo "selected";}?>>Інгібітори
                                                            a-глікозидази
                                                        </option>
                                                        <option value="Меглітінід" <? if($_POST['diabLechTab']=='Меглітінід'){ echo "selected";}?>>Меглітінід</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Лікування гіпертонії (препарат, доза прийому,
                                                        кратність)</label></td>
                                                <td>
                                                    <select name="LechGiper" class="form-control">
                                                        <option value="--" <? if($_POST['LechGiper']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Не проводиться" <? if($_POST['LechGiper']=='Не проводиться'){ echo "selected";}?>>Не проводиться</option>
                                                        <option value="Бета-блокатори" <? if($_POST['LechGiper']=='Бета-блокатори'){ echo "selected";}?>>Бета-блокатори</option>
                                                        <option value="ACE-інгібітори" <? if($_POST['LechGiper']=='ACE-інгібітори'){ echo "selected";}?>>ACE-інгібітори</option>
                                                        <option value="Сартани" <? if($_POST['LechGiper']=='Сартани'){ echo "selected";}?>>Сартани</option>
                                                        <option value="Кальцієві блокатори" <? if($_POST['LechGiper']=='Кальцієві блокатори'){ echo "selected";}?>>Кальцієві блокатори</option>
                                                        <option value="Діуретики" <? if($_POST['LechGiper']=='Діуретики'){ echo "selected";}?>>Діуретики</option>
                                                        <option value="Інші, назва" <? if($_POST['LechGiper']=='Інші, назва'){ echo "selected";}?>>Інші, назва</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Лікування гіперліпідемії</label></td>
                                                <td>
                                                    <select name="LechLipidGiper" class="form-control">
                                                        <option value="--" <? if($_POST['LechLipidGiper']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Не проводиться" <? if($_POST['LechLipidGiper']=='Не проводиться'){ echo "selected";}?>>Не проводиться</option>
                                                        <option value="Статини" <? if($_POST['LechLipidGiper']=='Статини'){ echo "selected";}?>>Статини</option>
                                                        <option value="Фібрати" <? if($_POST['LechLipidGiper']=='Фібрати'){ echo "selected";}?>>Фібрати</option>

                                                        <option value="Інші, назва" <? if($_POST['LechLipidGiper']=='Інші, назва'){ echo "selected";}?>>Інші, назва</option>
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
                                                <td><label class="lb1">Генеалогічне дерево</label></td>
                                                <td style="width: 100%;">
                                                    <select name="gen" class="form-control">
                                                        <option value="--"  <? if($_POST['gen']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Так" <? if($_POST['gen']=='Так'){ echo "selected";}?>>Так</option>
                                                        <option value="Ні" <? if($_POST['gen']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Не знаю" <? if($_POST['gen']=='Не знаю'){ echo "selected";}?>>Не знаю</option>

                                                    </select>
                                                </td>
                                            </tr>

                                        </table>
                                    </fieldset>
                                </div>
                            </div>

                        </div>
                        <br>
                        <div class="controls">
                            <a href="javascript:void(0)" class="btn btn-default prev" style="border: 1px solid darkblue;color:darkblue;"><
                                Попередня</a>
                            <a href="javascript:void(0)" class="btn btn-default next" style="border: 1px solid darkblue;color:darkblue;">Наступна
                                ></a>

                        </div>
                        <div class="controls">
                            <input type="submit" name="find" class="btn"
                                   style="border: 1px solid darkblue;color:darkblue;"
                                   value="Сформувати пошуковий запит">
                    </form>
                <form method="post" action="" id="form2">
                            <input type="submit" name="cancel" class="btn"
                                   style="border: 1px solid darkblue;color:darkblue;" value="Скинути пошук"></form>
                        </div>

                    <div id="overlay">
                        <div class="popup">
                            <h2>Параметри пошуку</h2>
                            <p><?
                               // echo "no".$_POST['OnkoLek'];

                                /*var_dump($_POST);
                                echo "jhjkhjkhk";
                                var_dump($masName);*/
$masZag=[
        "1. Опитування пацієнта"/*0*/, "А. Загальні дані"/*1*/,"Б. Сімейний анамнез"/*2*/, "В. Інформація щодо голодомору"/*3*/,
        "2. Огляд пацієнта"/*4*/, "А. Антропометричні дані"/*5*/,"Б. Спосіб життя"/*6*/,"В. Історія хвороби"/*7*/,
    "Г. Супутні захворювання"/*8*/,
        "3.Статус ССС"/*9*/, "А. Обстеження серцево-судинної системи"/*10*/,
        "4.Діабетична ретинопатія"/*11*/,"А. Обстеження очей"/*12*/,
        "5.Нефропатія"/*13*/,"А. Обстеження нирок"/*14*/,
        "6.Полінейроангіопатія"/*15*/,"А. Полінейроангіопатія"/*16*/,"Б. Обстеження стопи"/*17*/,
        "7.Лабораторні дослідження"/*18*/,"А. Лабораторні дослідження"/*19*/,"Б. Біоматеріал"/*20*/,
        "8.Лікування"/*21*/,"А. Лікування"/*22*/,
        "9.Генеалогічне дерево"/*23*/,"А. Генеалогічне дерево"/*24*/];

                                echo "<table class='table'>";
                                $i=0;
                                $ch=0;
                                $ch1=0;
                                $ch2=0;
                                $ch3=0;
                                $ch4=0;
                                $ch5=0;
                                $ch6=0;
                                $ch7=0;
                                $ch8=0;
                                $ch9=0;
                                $ch10=0;
                                $ch11=0;
                                $ch12=0;
                                $ch13=0;
                                $ch14=0;
                                $ch15=0;
                                $ch16=0;
                                $ch17=0;
                                $ch18=0;
                                $ch19=0;
                    /*         foreach($_POST as $key=>$item):
                             echo "'{$key}',";
                             endforeach;*/
                           $x=-1;$y=48;$z=18;
                           $razd='';
                           $podrazd='';
                            foreach ($_POST as $key=>$item){

                                  if(!empty($item) and $item!='--' and $item!='Сформувати пошуковий запит' and $item!='Уточнити пошуковий запит' and $item!='') {
                                    if(!empty($item)) {
                                      /*   if($i>$x and $i<$y)
                                         {
                                             if($ch16==0){
                                                 echo "<tr  id='tr222'><td colspan='2' >{$masZag[0]}</td></tr>" ;
                                                 $ch16=1;
                                             }

                                             if ($i > $x and $i < $z and $ch == 0) {
                                                 echo "<tr  id='tr2222' ><td colspan='2'>{$masZag[1]}</td></tr>" ;
                                                 $ch = 1;
                                             } elseif ($i > $z-1 and $i < $z+24 and $ch1 == 0) {
                                                 echo "<tr id='tr2222'> <td colspan='2'>{$masZag[2]}</td></tr>";
                                                 $ch1 = 1;
                                             } elseif ($i > $z+23 and $i < $z+30 and $ch2 == 0) {
                                                 echo "<tr id='tr2222'><td colspan='2'>{$masZag[3]}</td></tr>";
                                                 $ch2 = 1;
                                             }
                                         }
                                         elseif($i>$x+48 and $i<$y+41)
                                         {
                                             if($ch17==0){
                                             echo "<tr id='tr222'><td colspan='2'>{$masZag[4]}</td></tr>";
                                              $ch17=1;
                                             }
                                         if($i>$x+48 and $i<66 and $ch3==0){

                                            echo "<tr id='tr2222'><td colspan='2'>{$masZag[5]}</td></tr>";
                                            $ch3=1;
                                         }
                                         elseif($i>65 and $i<71 and $ch4==0){

                                            echo "<tr id='tr2222'><td colspan='2'>{$masZag[6]}</td></tr>";
                                            $ch4=1;
                                            }
                                            elseif($i>70 and $i<78 and $ch5==0){

                                            echo "<tr id='tr2222'><td colspan='2'>{$masZag[7]}</td></tr>";
                                            $ch5=1;
                                            }
                                         elseif($i>77 and $i<89 and $ch6==0){

                                            echo "<tr id='tr2222'><td colspan='2'>{$masZag[8]}</td></tr>";
                                            $ch6=1;
                                            }
                                        }

                                        elseif($i>88 and $i<95 and $ch7==0){
                                            echo "<tr id='tr222'><td colspan='2'>{$masZag[9]}</td></tr>";
                                            echo "<tr id='tr2222'><td colspan='2'>{$masZag[10]}</td></tr>";
                                            $ch7=1;
                                        }
                                        elseif($i>94 and $i<108 and $ch8==0){
                                            echo "<tr id='tr222'><td colspan='2'>{$masZag[11]}</td></tr>";
                                            echo "<tr id='tr2222'><td colspan='2'>{$masZag[12]}</td></tr>";
                                            $ch8=1;
                                        }
                                        elseif($i>107 and $i<116 and $ch9==0){
                                            echo "<tr id='tr222'><td colspan='2'>{$masZag[13]}</td></tr>";
                                            echo "<tr id='tr2222'><td colspan='2'>{$masZag[14]}</td></tr>";
                                            $ch9=1;
                                        }
                                         elseif($i>115 and $i<135) {
                                             if($ch18==0){
                                             echo "<tr id='tr222'><td colspan='2'>{$masZag[15]}</td></tr>";
                                             $ch18=1;}
                                             if
                                             ($i > 115 and $i < 127 and $ch10 == 0){

                                            echo "<tr id='tr2222'><td colspan='2'>{$masZag[16]}</td></tr>";
                                            $ch10 = 1;
                                        }
                                        elseif($i > 126 and $i < 135 and $ch11 == 0){

                                            echo "<tr id='tr2222'><td colspan='2'>{$masZag[17]}</td></tr>";
                                            $ch11 = 1;
                                        }
                                        }
                                        elseif($i>134 and $i<227)
                                        {
                                            if($ch19==0){echo "<tr id='tr222'><td colspan='2'>{$masZag[18]}</td></tr>";
                                            $ch19=1;}
                                            if
                                            ($i > 134 and $i < 220 and $ch12 == 0){

                                            echo "<tr id='tr2222'><td colspan='2'>{$masZag[19]}</td></tr>";
                                            $ch12 = 1;
                                        }
                                        elseif($i > 219  and $i < 227 and $ch13 == 0){

                                            echo "<tr id='tr2222'><td colspan='2'>{$masZag[20]}</td></tr>";
                                            $ch13 = 1;
                                        }
                                        }
                                        elseif($i>226 and $i<234 and $ch14==0){
                                            echo "<tr id='tr222'><td colspan='2'>{$masZag[21]}</td></tr>";
                                            echo "<tr id='tr2222'><td colspan='2'>{$masZag[22]}</td></tr>";
                                            $ch14=1;
                                        }
                                        elseif($i>233 and $i<235 and $ch15==0){
                                            echo "<tr id='tr222'><td colspan='2'>{$masZag[23]}</td></tr>";
                                            echo "<tr id='tr2222'><td colspan='2'>{$masZag[24]}</td></tr>";
                                            $ch15=1;
                                        }*/
                                    foreach($rozd as $item1):

                                        if($item1['name']==$key and $razd!=$item1['razdel']){
                                            echo "<tr  id='tr222'><td colspan='2' >{$item1['razdel']}</td></tr>" ;
                                          $ch=1;
                                          $razd=$item1['razdel'];
                                        }
                                        if($item1['name']==$key and $podrazd!=$item1['podr']){
                                            echo "<tr  id='tr2222'><td colspan='2' >{$item1['podr']}</td></tr>" ;
                                            $ch=1;
                                            $podrazd=$item1['podr'];
                                        }
                                        endforeach;
                                        $opt=[
                                            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
                                            PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
                                        ];

                                        $dbh=new PDO("mysql:host=mysql.ukrdomen.com;dbname=uh1108308_dlc","uh1108308_dlc","NPyuW3gnhxQT",$opt
                                        );
$stt="Select * from const2 where name='{$key}'";
$tmp=$dbh->query($stt);
$row=$tmp->fetch();
                                        if ($row['question'] == 'Роки інфарктів') {
                                            echo "<tr><td>{$row['question']}</td><td>{$item[0]};{$item[1]};{$item[2]}</td></tr>";

                                        } elseif ($row['question'] == 'Роки інсультів') {
                                            echo "<tr><td>{$row['question']}</td><td>{$item[0]};{$item[1]};{$item[2]}</td></tr>";

                                        } else {

                                            echo "<tr><td>{$row['question']}</td><td>{$item}</td></tr>";
                                        }
                                    }

                                  }
                                  $i++;
                              }
                              echo "</table>";
                                ?>

                            </p>
                            <div class="controls">
                                <form method="post" action="<?=Url::getAction('programm2','findT1')?>" id="form3">
                                    <?php
                                    foreach($_POST as $key=>$item):
                                    echo " <input type='hidden' value='{$item}' name='{$key}'>";
                                    endforeach;
                                    ?>

                                <input type="submit" name="find" class="btn"
                                       style="border: 1px solid darkblue;color:darkblue;"
                                       value="Здійснити пошук">
                                </form>
                                <input type="button" name="cancel" class="btn"
                                       style="border: 1px solid darkblue;color:darkblue;" value="Редагувати пошук" onclick="document.getElementById('overlay').style.display='none';">
                            </div>
                            <button class="close" title="Закрыть" onclick="document.getElementById('overlay').style.display='none';"></button>
                        </div>
                    </div>

                    <script type="text/javascript">
                        var delay_popup = 1000;	setTimeout("document.getElementById('overlay').style.display='block'", delay_popup);
                    </script>
                    <?
                }else {


                    ?>
                    <form method="post" action="" id="form4">
                        <div _ngcontent-c9="" class="container">


                            <!-- Tab panes -->

                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home">
                                    <fieldset style="margin-top: 30px;">
                                        <h4>1.А. Загальні дані</h4>
                                        <table class='mainT' style="width: 80%;">
                                            <tr>
                                                <td><label class="lb1">Прізвище </label></td>
                                                <td  style="width: 100%"><input class="form-control" type="text" name="fname"
                                                           placeholder="" value="<? echo $_POST['fname'];?>"></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td><label>Ім'я </label></td>
                                                <td><input class="form-control" type="text" name="name"
                                                           placeholder="" value="<? echo $_POST['name'];?>"></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td><label>По-батькові </label></td>
                                                <td><input class="form-control" type="text" name="sname"
                                                           placeholder="" value="<? echo $_POST['sname'];?>"></td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Чи брали участь ви раніше в цьому дослідженні?</label>
                                                    <label class="hidd" id="h0">Якщо так, вкажіть ідентифікатор учасника
                                                        <br> в минулому дослідженні (№ учасника)</label>
                                                </td>
                                                <td>
                                                    <select name="ychas" class="form-control" onchange="ss(this)">
                                                        <option <? if($_POST['ychas']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['ychas']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['ychas']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                    <div style="display: flex;">
                                                        <input type="text" id="h1" class="form-control" name="nomIss"
                                                                 placeholder="" value="<? echo $_POST['nomIss'];?>" class="hidd"> <!--номер-->
                                                        <a href="#myModal1" class="btn btn-sm hidd"
                                                           style='border:1px solid grey' id="h2"
                                                           data-toggle="modal">...</a>

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
                                                                                        <option value="" >--</option>
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
                                                <td >
                                                    <label>Стать</label></td>
                                                <td style="width: 100%;"><select name="sex" class="form-control" >
                                                        <option value="--"  <? if($_POST['sex']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Чоловіча"  <? if($_POST['sex']=='Чоловіча'){ echo "selected";}?>>Чоловіча</option>
                                                        <option value="Жіноча"    <? if($_POST['sex']=='Жіноча'){ echo "selected";}?>>Жіноча</option>
                                                    </select>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Дата нарождения </label>

                                                </td>
                                                <td>

                                                    з <input type="date" name="datB0" id="datB0" class="form-control" value="<? echo $_POST['datB0'];?>" onchange="dat(this.value,this.id)">
                                                    по <input type="date" name="datB" id="datB" min="<?echo $_POST['datB0'];?>" class="form-control" value="<? echo $_POST['datB'];?>" >
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Телефон </label>

                                                </td>
                                                <td>
                                                    <input type="text" name="phone" class="form-control" value="<? echo $_POST['phone'];?>">
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>E-mail </label>

                                                </td>
                                                <td>
                                                    <input type="email" name="email" class="form-control" value="<? echo $_POST['email'];?>">
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Місце народження: населений пункт</label>

                                                </td>
                                                <td>
                                                    <input type="text" name="city" class="form-control"
                                                           placeholder="" value="<? echo $_POST['city'];?>">
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Місце народження - район, область</label>

                                                </td>
                                                <td>
                                                    <input type="text" name="rajon" class="form-control"
                                                           placeholder=""  value="<? echo $_POST['rajon'];?>">
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Статус роботи</label>

                                                </td>
                                                <td>
                                                    <select name="work" class="form-control">
                                                        <option value="--"  <? if($_POST['work']=='--'){ echo "selected";}?>>--
                                                        </option>
                                                        <option value="Не працюю, безробітний(а)"  <? if($_POST['work']=='Не працюю, безробітний(а)'){ echo "selected";}?>>Не працюю,
                                                            безробітний(а)
                                                        </option>
                                                        <option value="Не працюю, інвалідність"  <? if($_POST['work']=='Не працюю, інвалідність'){ echo "selected";}?>>Не працюю,
                                                            інвалідність
                                                        </option>
                                                        <option value="Не працюю, відпустка по хворобі"  <? if($_POST['work']=='Не працюю, відпустка по хворобі'){ echo "selected";}?>>Не працюю,
                                                            відпустка по хворобі
                                                        </option>
                                                        <option value="На пенсії"  <? if($_POST['work']=='На пенсії'){ echo "selected";}?>>На пенсії</option>
                                                        <option value="Працюю, часткова зайнятість" <? if($_POST['work']=='Працюю, часткова зайнятість'){ echo "selected";}?>>Працюю, часткова
                                                            зайнятість
                                                        </option>
                                                        <option value="Працюю, повна зайнятість" <? if($_POST['work']=='Працюю, повна зайнятість'){ echo "selected";}?>>Працюю, повна
                                                            зайнятість
                                                        </option>
                                                    </select>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Інформація про нарождення:</label>

                                                </td>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            <input type="hidden" name="bearn" value="">
                                                            <td><input style='position: static;' type="radio"
                                                                       name="bearn" class="form-control"
                                                                       value="Народився(лась) вчасно"
                                                                    <? if( $_POST['bearn']=='Народився(лась) вчасно'){echo 'checked';}?>></td>
                                                            <td><label>Народився(лась) вчасно</label></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input style='position: static;' type="radio"
                                                                       name="bearn" class="form-control"
                                                                       value="Народився(лась) передчасно"
                                                                    <? if( $_POST['bearn']=='Народився(лась) передчасно'){echo 'checked';}?>></td>
                                                            <td><label>Народився(лась) передчасно</label></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input style='position: static;' type="radio"
                                                                       name="bearn" class="form-control"
                                                                       value="Народився в _____ тижнів (вказати)"
                                                                    <? if( $_POST['bearn']=='Народився в _____ тижнів (вказати)'){echo 'checked';}?>></td>
                                                            <td>
                                                                <div style="display: flex;flex-direction: row;"><label>Народився
                                                                        в </label> <input type="text"
                                                                                          style='width: 60px;margin-left: 4px;margin-right: 4px;'
                                                                                          name="week"
                                                                                          class="form-control"
                                                                        <? if( $_POST['bearn']=='Народився в'){echo 'checked';}?>><label>
                                                                        тижнів (вказати)</label></div>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td><input style='position: static;' type="radio"
                                                                       name="bearn" class="form-control"
                                                                       value="Не знаю" <? if( $_POST['bearn']=='Не знаю'){echo 'checked';}?>></td>
                                                            <td><label>Не знаю</label></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input style='position: static;' type="radio"
                                                                       name="bearn" class="form-control"
                                                                       value="" checked <? if( $_POST['bearn']==''){echo 'checked';}?>></td>
                                                            <td><label>Без параметра</label></td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Вага при народженні:</label>

                                                </td>
                                                <td>
                                                    <table>
                                                        <tr>
                                                            <input type="hidden" value="" name="vesR">
                                                            <td><input style='position: static;' type="radio"
                                                                       name="vesR" class="form-control"
                                                                       value="Мала (при народженні я був(ла) дуже маленький(а))"
                                                                    <? if( $_POST['vesR']=='Мала (при народженні я був(ла) дуже маленький(а))'){echo 'checked';}?>>
                                                            </td>
                                                            <td><label>Низька (при нарожденні я був(ла)
                                                                    худим(ой))</label></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input style='position: static;' type="radio" name="vesR" class="form-control" value="Нормальна" <? if( $_POST['vesR']=='Нормальна'){echo 'checked';}?>></td>
                                                            <td><label>Нормальна</label></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input style='position: static;' type="radio"
                                                                       name="vesR" class="form-control"
                                                                       value="Я був (була) при народженні великим малюком"
                                                                    <? if( $_POST['vesR']=='Я був (була) при народженні великим малюком'){echo 'checked';}?>>
                                                            </td>
                                                            <td><label>Я був (була) при народженні великим
                                                                    малюком</label></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input style='position: static;' type="radio" name="vesR" class="form-control" value="був одним з близнюків" <? if( $_POST['vesR']=='був одним з близнюків'){echo 'checked';}?>></td>
                                                            <td><label>був одним з близнюків</label></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input style='position: static;' type="radio"
                                                                       name="vesR" class="form-control" value="Не знаю"
                                                                    <? if( $_POST['vesR']=='Не знаю'){echo 'checked';}?>
                                                                >
                                                            </td>
                                                            <td><label>Не знаю</label></td>
                                                        </tr>
                                                        <tr>
                                                            <td><input style='position: static;' type="radio"
                                                                       name="vesR" class="form-control" value="" checked
                                                                    <? if( $_POST['vesR']==''){echo 'checked';}?>
                                                                >
                                                            </td>
                                                            <td><label>Без параметра</label></td>
                                                        </tr>

                                                    </table>
                                            <tr>
                                                <td >
                                                    <label>Вага при народженні (г):</label>

                                                </td>
                                                <td>
                                                    з<input type="text" name="vagaPN0" class="form-control" placeholder=""  value="<? echo $_POST['vagaPN0'];?>">
                                                    по<input type="text" name="vagaPN" class="form-control" placeholder=""  value="<? echo $_POST['vagaPN'];?>">
                                                </td>
                                                <td></td>
                                            </tr>


                                        </table>
                                    </fieldset>

                                </div>
                                <div role="tabpanel" class="tab-pane" id="profile">
                                    <fieldset style="margin-top: 30px;">
                                        <h4>1.Б. Сімейний анамнез</h4>
                                        <table class='mainT' style="width: 80%;">
                                            <tr style="background: #295b8e; color:white;">
                                                <td colspan="3"><label >Батько:</label></td>
                                            </tr>
                                            <tr>
                                                <td><label class="lb1">Прізвище</label></td>
                                                <td style="width: 100%"><input class="form-control" type="text" name="fnameO"
                                                           placeholder=""  value="<? echo $_POST['fnameO'];?>"></td>
                                            </tr>
                                            <tr>
                                                <td><label>Ім'я</label></td>
                                                <td><input class="form-control" type="text" name="nameO"
                                                           placeholder="" value="<? echo $_POST['nameO'];?>"></td>
                                            </tr>
                                            <tr>
                                                <td><label>По-батькові</label></td>
                                                <td><input class="form-control" type="text" name="snameO"
                                                           placeholder="" value="<? echo $_POST['snameO'];?>"></td>
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
                                                        <option value="--" <? if($_POST['ychasOtez']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['ychasOtez']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['ychasOtez']=='Так'){ echo "selected";}?>>Так</option>

                                                    </select>
                                                    <div style="display: flex;">
                                                        <input type="text" id="h5" class="form-control hidd"
                                                               name="nomIssO" placeholder="" value="<? echo $_POST['nomIssO'];?>">


                                                    </div>

                                                </td>
                                            </tr>
                                            <tr>

                                                <td>
                                                    <label>Дата народження</label></td>
                                                <td>
                                                   з <input type="date" name="datBOtez0" id="datBOtez0" class="form-control" value="<? echo $_POST['datBOtez0'];?>" onchange="dat(this.value,this.id)">
                                                   по <input type="date" name="datBOtez" id="datBOtez" min="<?echo $_POST['datBOtez0'];?>" class="form-control" value="<? echo $_POST['datBOtez'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Місце народження: область</label></td>
                                                <td>
                                                    <input type="text" name="oblOtez" class="form-control"
                                                            placeholder="" value="<? echo $_POST['oblOtez'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Місце народження: місто</label></td>
                                                <td>
                                                    <input type="text" name="cityOtez" class="form-control"
                                                           placeholder="" value="<? echo $_POST['cityOtez'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Чи хворів на діабет?</label>
                                                    <label class="hidd" id="h2">Якщо так - яке було лікування у
                                                        батька?</label>
                                                </td>
                                                <td>
                                                    <select name="lechOtez" class="form-control" onchange="ss1(this)">
                                                        <option value="--" <? if($_POST['lechOtez']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['lechOtez']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['lechOtez']=='Так'){ echo "selected";}?>>Так</option>

                                                    </select>
                                                    <select id="h3" name="lechOtezKak" class=" form-control hidd">
                                                        <option value="--" <? if($_POST['lechOtezKak']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Діета" <? if($_POST['lechOtezKak']=='Діета'){ echo "selected";}?>> Діета</option>
                                                        <option value="Таблетки" <? if($_POST['lechOtezKak']=='Таблетки'){ echo "selected";}?>> Таблетки</option>
                                                        <option value="Інсулін" <? if($_POST['lechOtezKak']=='Інсулін'){ echo "selected";}?>> Інсулін</option>
                                                        <option value="Комбіноване - таблетки і інсулін" <? if($_POST['lechOtezKak']=='Комбіноване - таблетки і
                                                                 інсулін'){ echo "selected";}?>> Комбіноване - таблетки і
                                                                 інсулін
                                                        </option>
                                                        <option value="Не знаю" <? if($_POST['lechOtezKak']=='Не знаю'){ echo "selected";}?>> Не знаю</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr style="background: #295b8e;color:white;">
                                                <td colspan="3"><label>Мати:</label></td>
                                            </tr>
                                            <tr>
                                                <td><label>Прізвище</label></td>
                                                <td><input class="form-control" type="text" name="fnameM"
                                                           placeholder="" value="<? echo $_POST['fnameM'];?>"></td>
                                            </tr>
                                            <tr>
                                                <td><label>Ім'я</label></td>
                                                <td><input class="form-control" type="text" name="nameM"
                                                           placeholder="" value="<? echo $_POST['nameM'];?>"></td>
                                            </tr>
                                            <tr>
                                                <td><label>По-батькові</label></td>
                                                <td><input class="form-control" type="text" name="snameM"
                                                           placeholder="" value="<? echo $_POST['snameM'];?>"></td>
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
                                                        <option value="--" <? if($_POST['ychasM']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['ychasM']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['ychasM']=='Так'){ echo "selected";}?>>Так</option>

                                                    </select>
                                                    <div style="display: flex;">
                                                        <input type="text" id="h7" class="form-control hidd"
                                                               name="nomIssM" placeholder="">


                                                    </div>


                                                </td>
                                            </tr>
                                            <tr>

                                                <td>
                                                    <label>Дата народження</label></td>
                                                <td>
                                                    з<input type="date" name="datBM0" class="form-control" value="<? echo $_POST['datBM0'];?>"  onchange="dat(this.value,this.id)">
                                                    по <input type="date" name="datBM" min="<?echo $_POST['datBM0'];?>" class="form-control" value="<? echo $_POST['datBM'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Місце народження: область</label></td>
                                                <td><input type="text" name="oblM" class="form-control"
                                                           placeholder="" value="<? echo $_POST['oblM'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Місце народження: місто</label></td>
                                                <td>
                                                    <input type="text" name="cityM" class="form-control"
                                                           placeholder="" value="<? echo $_POST['cityM'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Чи хворіла на діабет?</label>
                                                    <label class="hidd" id="h8">Якщо так - яке було лікування у
                                                        матері?</label>
                                                </td>
                                                <td>
                                                    <select name="lechM" class="form-control" onchange="ss4(this)">
                                                        <option value="--" <? if($_POST['lechM']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['lechM']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['lechM']=='Так'){ echo "selected";}?>>Так</option>

                                                    </select>
                                                    <select id="h9" name="lechMKak" class=" form-control hidd">
                                                        <option value="--" <? if($_POST['lechMKak']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Дієта" <? if($_POST['lechMKak']=='Дієта'){ echo "selected";}?>> Дієта</option>
                                                        <option value="Таблетки" <? if($_POST['lechMKak']=='Таблетки'){ echo "selected";}?>> Таблетки</option>
                                                        <option value="Інсулін" <? if($_POST['lechMKak']=='Інсулін'){ echo "selected";}?>> Інсулін</option>
                                                        <option value="Комбіноване - таблетки і
                                                            інсулін" <? if($_POST['lechMKak']=='Комбіноване - таблетки і
                                                            інсулін'){ echo "selected";}?>>Комбіноване - таблетки і
                                                            інсулін
                                                        </option>
                                                        <option value="Не знаю" <? if($_POST['lechMKak']=='Не знаю'){ echo "selected";}?>> Не знаю</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Чи хворіли на діабет рідні
                                                        брати сестри?</label>
                                                    <label class="hidd" id="h10">Якщо так – яке було лікування у
                                                        братів/сестер?</label>
                                                </td>
                                                <td>
                                                    <select name="lechBS" class="form-control" onchange="ss5(this)">
                                                        <option value="--" <? if($_POST['lechBS']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['lechBS']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['lechBS']=='Так'){ echo "selected";}?>>Так</option>

                                                    </select>
                                                    <select id="h11" name="lechBSKak" class=" form-control hidd">
                                                        <option value="--" <? if($_POST['lechBSKak']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Діета" <? if($_POST['lechBSKak']=='Діета'){ echo "selected";}?>> Діета</option>
                                                        <option value="Таблетки" <? if($_POST['lechBSKak']=='Таблетки'){ echo "selected";}?>> Таблетки</option>
                                                        <option value="Інсулін" <? if($_POST['lechBSKak']=='Інсулін'){ echo "selected";}?>> Інсулін</option>
                                                        <option value="Комбіноване - таблетки і
                                                            інсулін" <? if($_POST['lechBSKak']=='Комбіноване - таблетки і
                                                            інсулін'){ echo "selected";}?>> Комбіноване - таблетки і
                                                            інсулін
                                                        </option>
                                                        <option value="Не знаю" <? if($_POST['lechBSKak']=='Не знаю'){ echo "selected";}?>> Не знаю</option>
                                                    </select>
                                                </td>
                                            </tr>
                                        </table>
                                    </fieldset>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="messages">
                                    <fieldset style="margin-top: 30px;">
                                        <h4>1.В. Інформація щодо голодомору</h4>
                                       <table class='mainT' style="width: 80%;">
                                            <tr>
                                                <td>
                                                    <label class="lb1">Голодувала ваша сім'я в 1932-33, 1941-45
                                                        і / або 1946-47 роках:</label>
                                                    <!--<label class="hidd" id="h12">Якщо сім`я голодувала - вказати період
                                                        голодування сім`ї
                                                    </label>-->
                                                </td>
                                                <td style="width: 100%">
                                                    <select name="golodSem" class="form-control" onchange="ss6(this)">
                                                        <option value="--" <? if($_POST['golodSem']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['golodSem']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['golodSem']=='Так'){ echo "selected";}?>>Так</option>
                                                        <option value="Не знаю" <? if($_POST['golodSem']=='Не знаю'){ echo "selected";}?>>Не знаю</option>
                                                    </select>

                                                </td>
                                            </tr>
                                            <tr <?if($_POST['golodSem']!='Так'){ echo "class='showGolod'";}?> id="mamGolod">
                                                <td>
                                                    <label>Мати:</label></td>
                                                <td>
                                                    <? $masM=explode(";",$_POST['golodM'])?>
                                                    <table <?if($_POST['golodM']!='Так'){ echo "class='showGolod'";}?> id="tabGolodM"><tr><td><label> - 1932-33</label>
                                                                <input type="checkbox"  onchange="chch(this)" id="g1m" value="1932-33" class="form-control"
                                                                    <? foreach($masM as $int):
                                                                        if($int=='1932-33'){echo 'checked';}
                                                                    endforeach;?>>
                                                            </td></tr>
                                                        <tr><td><label> - 1941-45</label>
                                                                <input type="checkbox"  id="g2m"  onchange="chch(this)" value="1941-45" class="form-control"
                                                                    <? foreach($masM as $int):
                                                                        if($int=='1941-45'){echo 'checked';}
                                                                    endforeach;?>>
                                                            </td></tr>
                                                        <tr><td><label> - 1946-47</label>
                                                                <input type="checkbox"  id="g3m"  onchange="chch(this)" value="1946-47" class="form-control"
                                                                    <? foreach($masM as $int):
                                                                        if($int=='1946-47'){echo 'checked';}
                                                                    endforeach;?>>
                                                            </td></tr></table>  <input type="hidden" name="golodM" id="golodM"
                                                        <? if(isset($_POST['golodM'])){
                                                            echo "value='{$_POST['golodM']}'";
                                                        };?>>
                                                </td>
                                            </tr>
                                            <tr <?if($_POST['golodSem']!='Так'){ echo "class='showGolod'";}?> id="papGolod">
                                                <td>
                                                    <label>Батько:</label></td>
                                                <td>
                                                    <? $masO=explode(";",$_POST['golodO'])?>
                                                    <table <?if($_POST['golodSem']!='Так'){ echo "class='showGolod'";}?> id="tabGolodO"><tr><td><label> - 1932-33</label>
                                                                <input type="checkbox" onchange="chch1(this)" id="g1o" value="1932-33" class="form-control"
                                                                    <? foreach($masO as $int):
                                                                        if($int=='1932-33'){echo 'checked';}
                                                                    endforeach;?>>
                                                            </td></tr>
                                                        <tr><td><label> - 1941-45</label>
                                                                <input type="checkbox" onchange="chch1(this)" id="g2o" value="1941-45" class="form-control"
                                                                    <? foreach($masO as $int):
                                                                        if($int=='1941-45'){echo 'checked';}
                                                                    endforeach;?>>
                                                            </td></tr>
                                                        <tr><td><label> - 1946-47</label>
                                                                <input type="checkbox" onchange="chch1(this)" id="g3o" value="1946-47" class="form-control"
                                                                    <? foreach($masO as $int):
                                                                        if($int=='1946-47'){echo 'checked';}
                                                                    endforeach;?>>
                                                            </td></tr></table><input type="hidden" name="golodO" id="golodO"
                                                        <? if(isset($_POST['golodO'])){
                                                            echo "value='{$_POST['golodO']}'";
                                                        };?>>
                                                </td>
                                            </tr>
                                            <tr <?if($_POST['golodSem']!='Так'){ echo "class='showGolod'";}?> id="bratGolod">
                                                <td>
                                                    <label>Рідні брати/сестри:</label></td>
                                                <td>
                                                    <? $masS=explode(";",$_POST['golodSis'])?>
                                                    <table <?if($_POST['golodSem']!='Так'){ echo "class='showGolod'";}?> id="tabGolodS"><tr><td><label> - 1932-33</label>
                                                                <input type="checkbox" onchange="chch2(this)" id="g1s" value="1932-33" class="form-control"
                                                                    <? foreach($masS as $int):
                                                                        if($int=='1932-33'){echo 'checked';}
                                                                    endforeach;?>>
                                                            </td></tr>
                                                        <tr><td><label> - 1941-45</label>
                                                                <input type="checkbox" onchange="chch2(this)" id="g2s" value="1941-45" class="form-control"
                                                                    <? foreach($masS as $int):
                                                                        if($int=='1941-45'){echo 'checked';}
                                                                    endforeach;?>>
                                                            </td></tr>
                                                        <tr><td><label> - 1946-47</label>
                                                                <input type="checkbox" onchange="chch2(this)" id="g3s" value="1946-47" class="form-control"
                                                                    <? foreach($masS as $int):
                                                                        if($int=='1946-47'){echo 'checked';}
                                                                    endforeach;?>>
                                                            </td></tr></table><input type="hidden" name="golodSis" id="golodSis"
                                                        <? if(isset($_POST['golodSis'])){
                                                            echo "value='{$_POST['golodSis']}'";
                                                        };?>>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Чи помер хтось з членів сім’ї (мати / батько / рідні брати або сестри) з причин, пов`язаних з
                                                        голодом в 1932-33, 1941-45 і / або
                                                        1946-47 році:</label></td>
                                                <td>
                                                    <select name="death1" class="form-control">
                                                        <option value="--" <? if($_POST['death1']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['death1']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так-1932-33" <? if($_POST['death1']=='Так-1932-33'){ echo "selected";}?>>Так-1932-33</option>
                                                        <option value="Так-1941-45" <? if($_POST['death1']=='Так-1941-45'){ echo "selected";}?>>Так-1941-45</option>
                                                        <option value="Так-1946-47" <? if($_POST['death1']=='Так-1946-47'){ echo "selected";}?>>Так-1946-47</option>

                                                        <option value="Не знаю" <? if($_POST['death1']=='Не знаю'){ echo "selected";}?>>Не знаю</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Чи голодували Ви особисто у періоди голоду в
                                                        1932-33, 1941-45 і / або 1946-47 роках голодомору. Якщо так - вказати
                                                        період:</label></td>
                                                <td>
                                                    <select name="death2" class="form-control">
                                                        <option value="--" <? if($_POST['death2']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['death2']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так-1932-33" <? if($_POST['death2']=='Так-1932-33'){ echo "selected";}?>>Так-1932-33</option>
                                                        <option value="Так-1941-45" <? if($_POST['death2']=='Так-1941-45'){ echo "selected";}?>>Так-1941-45</option>
                                                        <option value="Так-1946-47" <? if($_POST['death2']=='Так-1946-47'){ echo "selected";}?>>Так-1946-47</option>

                                                        <option value="Не знаю" <? if($_POST['death2']=='Не знаю'){ echo "selected";}?>>Не знаю</option>
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
                                       <table class='mainT' style="width: 80%;">
                                            <tr>
                                                <td><label class="lb1">Вага (кг)</label></td>
                                                <td style="width: 100%">
                                                    з <input class="form-control" type="text" name="ves0" placeholder=""  value="<? echo $_POST['ves0'];?>">

                                                    по <input class="form-control" type="text" name="ves" placeholder=""  value="<? echo $_POST['ves'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label>Зріст (см)</label></td>
                                                <td>
                                                    з<input class="form-control" type="text" name="rost0"
                                                           placeholder="" value="<? echo $_POST['rost0'];?>">
                                                    по<input class="form-control" type="text" name="rost"
                                                           placeholder="" value="<? echo $_POST['rost'];?>"></td>
                                            </tr>
                                            <tr>
                                                <td><label>Окружність талії (см)</label></td>
                                                <td>з <input class="form-control" type="text" name="tal0" placeholder="" value="<? echo $_POST['tal0'];?>">
                                                    по <input class="form-control" type="text" name="tal" placeholder="" value="<? echo $_POST['tal'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label>Окружність стегон (см)</label></td>
                                                <td>з <input class="form-control" type="text" name="bed0"
                                                             placeholder="" value="<? echo $_POST['bed0'];?>">
                                                    по <input class="form-control" type="text" name="bed"
                                                              placeholder="" value="<? echo $_POST['bed'];?>"></td>
                                            </tr>
                                            <tr>
                                                <td><label>Індекс маси тіла (кг/м 2 )</label></td>
                                                <td>з<input class="form-control" type="text" name="index0" value="<? echo $_POST['index0'];?>">
                                                    по<input class="form-control" type="text" name="index" value="<? echo $_POST['index'];?>"></td>
                                            </tr>
                                            <tr>
                                                <td><label>Систолічний артеріальний тиск (сидячи) 0`</label></td>
                                                <td>
                                                    з<input type="text"  class="form-control" name="art0" placeholder="" value="<? echo $_POST['art0'];?>">
                                                    по<input type="text"  class="form-control" name="art" placeholder="" value="<? echo $_POST['art'];?>"></td>
                                            </tr>
                                            <tr>
                                                <td><label>Систолічний артеріальний тиск (сидячи) 10`</label></td>
                                                <td>
                                                    з<input type="text"  class="form-control" name="systisk0" placeholder="" value="<? echo $_POST['systisk0'];?>">
                                                    по<input type="text"  class="form-control" name="systisk" placeholder="" value="<? echo $_POST['systisk'];?>"></td>
                                            </tr>
                                            <tr>

                                                <td><label>Діастолічний артеріальний тиск (сидячи) 0`</label></td>
                                                <td>
                                                    з<input type="text"  class="form-control" name="art10" placeholder="" value="<? echo $_POST['art10'];?>">
                                                    по<input type="text"  class="form-control" name="art1" placeholder="" value="<? echo $_POST['art1'];?>"></td>

                                            </tr>
                                            <tr>

                                                <td><label>Діастолічний артеріальний тиск (сидячи) 10`</label></td>
                                                <td>
                                                    з<input type="text"  class="form-control" name="disttisk0" placeholder="" value="<? echo $_POST['disttisk0'];?>">
                                                    по<input type="text"  class="form-control" name="disttisk" placeholder="" value="<? echo $_POST['disttisk'];?>"></td>

                                            </tr>
                                        </table>
                                    </fieldset>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="zhitt">
                                    <fieldset style="margin-top: 30px;">
                                        <h4>2.Б. Спосіб життя</h4>
                                       <table class='mainT' style="width: 80%;">

                                            <tr>
                                                <td><label class="lb1">Ви палите?</label></td>
                                                <td style="width: 100%">
                                                    <select class="form-control" name="smouk" onchange="showPal(this.value)">
                                                        <option value="--" <? if($_POST['smouk']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['smouk']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['smouk']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr <? if($_POST['smouk']!='Так'){echo 'class="showPal"';}?> id="chastoPal" >
                                                <td><label>Якщо курите, як часто?</label></td>
                                                <td>
                                                    <select class="form-control" name="smoukTime" id="smoukTime">
                                                        <option value="--" <? if($_POST['smoukTime']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Кожен день" <? if($_POST['smoukTime']=='Кожен день'){ echo "selected";}?>>Кожен день</option>
                                                        <option value="Кілька днів на тиждень" <? if($_POST['smoukTime']=='Кілька днів на тиждень'){ echo "selected";}?>>Кілька днів на тиждень
                                                        </option>
                                                        <option value="Дуже рідко" <? if($_POST['smoukTime']=='Дуже рідко'){ echo "selected";}?>>Дуже рідко</option>
                                                    </select></td>
                                            </tr>
                                            <tr <? if($_POST['smouk']!='Так'){echo 'class="showPal"';}?> id="kolPal">
                                                <td><label>Кількість викурених сигарет за
                                                        1 день</label></td>
                                                <td>з<input class="form-control" type="text" name="smokeKol0"
                                                            placeholder="" value="<? echo $_POST['smokeKol0'];?>" id="smoukkol">
                                                    по<input class="form-control" type="text" name="smokeKol"
                                                             placeholder="" value="<? echo $_POST['smokeKol'];?>" id="smoukkol1"></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Як часто Ви вживаєте алкоголь?</label>

                                                </td>
                                                <td>
                                                    <select name="alkogol" class="form-control">
                                                        <option value="--" <? if($_POST['alkogol']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ніколи" <? if($_POST['alkogol']=='Ніколи'){ echo "selected";}?>>Ніколи</option>
                                                        <option value="Менше 1 разу на місяць" <? if($_POST['alkogol']=='Менше 1 разу на місяць'){ echo "selected";}?>>Менше 1 разу на місяць
                                                        </option>
                                                        <option value="1-3 раза в місяц" <? if($_POST['alkogol']=='1-3 раза в місяц'){ echo "selected";}?>>1-3 раза в місяц</option>
                                                        <option value="1-2 раза в неділю" <? if($_POST['alkogol']=='1-2 раза в неділю'){ echo "selected";}?>>1-2 раза в неділю</option>
                                                        <option value="3-4 раза в неділю" <? if($_POST['alkogol']=='3-4 раза в неділю'){ echo "selected";}?>>3-4 раза в неділю</option>
                                                        <option value="Практично кожен день" <? if($_POST['alkogol']=='Практично кожен день'){ echo "selected";}?>>Практично кожен день
                                                        </option>

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
                                                    <label class="lb1">Тип діабету:</label>

                                                </td>
                                                <td style="width: 100%">
                                                    <select name="typeDiab" class="form-control" onchange="showDiab(this.value)">
                                                        <option value=""  <? if($_POST['typeDiab']==''){ echo "selected";}?>>--</option>
                                                        <option value="ЦД 1 типу" <? if($_POST['typeDiab']=='ЦД 1 типу'){ echo "selected";}?>>ЦД 1 типу</option>
                                                        <option value="ЦД 2 типу" <? if($_POST['typeDiab']=='ЦД 2 типу'){ echo "selected";}?>>ЦД 2 типу</option>
                                                        <option value="Латентний аутоімунний (LADA)" <? if($_POST['typeDiab']=='Латентний аутоімунний (LADA)'){ echo "selected";}?>>Латентний
                                                            аутоімунний
                                                            (LADA)
                                                        </option>
                                                        <option value="MODY-діабет" <? if($_POST['typeDiab']=='MODY-діабет'){ echo "selected";}?>>MODY-діабет</option>
                                                        <option value="Панкреатогенний" <? if($_POST['typeDiab']=='Панкреатогенний'){ echo "selected";}?>>Панкреатогенний
                                                        </option>
                                                        <option value="Інший" <? if($_POST['typeDiab']=='Інший'){ echo "selected";}?>>Інший
                                                        </option>
                                                    </select>

                                                </td>
                                            </tr>
                                            <tr class="showDiabet" id="showDiabRik">
                                                <td>
                                                    <label>Рік постановки діагнозу:</label>
                                                </td>
                                                <td>
                                                    з<input type="text" name="yearD0" class="form-control" value="<? echo $_POST['yearD0'];?>" id="yearD">
                                                    по<input type="text" name="yearD" class="form-control" value="<? echo $_POST['yearD'];?>" id="yearD1">
                                                </td>
                                            </tr>
                                            <tr class="showDiabet" id="showDiabVik">
                                                <td>
                                                    <label>Вік дебюту діабету (років):</label></td>
                                                <td>
                                                    з<input type="text" name="vekD0" class="form-control" value="<? echo $_POST['vekD0'];?>" id="vekD">
                                                    по<input type="text" name="vekD" class="form-control" value="<? echo $_POST['vekD'];?>" id="vekD1">
                                                </td>
                                            </tr>
                                            <tr class="showDiabet" id="showDiabkol">
                                                <td>
                                                    <label>Тривалість діабету (років):</label></td>
                                                <td>
                                                    з<input type="text" name="longD0" class="form-control" value="<? echo $_POST['longD0'];?>" id="longD">
                                                    по<input type="text" name="longD" class="form-control" value="<? echo $_POST['longD'];?>" id="longD1">
                                                </td>
                                            </tr>

                                        </table>
                                    </fieldset>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="bol">
                                    <fieldset style="margin-top: 30px;">
                                        <h4>2.Г. Хвороби, що супруводжують:</h4>
                                       <table class='mainT' style="width: 80%;">
                                            <tr>
                                                <td>
                                                    <label class="lb1">Інфекційні:</label>

                                                </td>
                                                <td colspan="2" style="width: 100%">
                                                    <textarea name="inf" class="form-control"  value="<? echo $_POST['inf'];?>"></textarea>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Аутоімунні (вказати):</label>

                                                </td>
                                                <td colspan="2">
                                                    <textarea name="aut" class="form-control" value="<? echo $_POST['aut'];?>"></textarea>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Вроджені вади (вказати):</label>

                                                </td>
                                                <td colspan="2">
                                                    <textarea name="porok" class="form-control" value="<? echo $_POST['porok'];?>"></textarea>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Інші ендокринні (вказати):</label>

                                                </td>
                                                <td colspan="2">
                                                    <textarea name="endoc" class="form-control" value="<? echo $_POST['endoc'];?>"></textarea>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Інша патологія (вказати):</label>

                                                </td>
                                                <td colspan="2">
                                                    <textarea name="patol" class="form-control" value="<? echo $_POST['patol'];?>"></textarea>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Класифікація супутніх захворювань по DRG:</label>

                                                </td>
                                                <td colspan="2">
                                                    <input type="text" name="DGR" class="form-control" value="<? echo $_POST['DGR'];?>">

                                                </td>
                                            </tr>
                                           <tr>
                                               <td><label class="lb1">ЧИ хворієте Ви на онкологічні захворювання?</label>
                                               </td>
                                               <td>
                                                   <select name="Onko" class="form-control" onchange="onko(this.value)">
                                                       <option value="--" <? if($_POST['Onko']=='--'){ echo "selected";}?>>--</option>
                                                       <option value="Ні" <? if($_POST['Onko']=='Ні'){ echo "selected";}?>>Ні</option>
                                                       <option value="Так" <? if($_POST['Onko']=='Так'){ echo "selected";}?>>Так</option>

                                                   </select>
                                               </td>
                                           </tr>
                                           <tr <? if($_POST['Onko']!='Так'){echo 'class="onkoshow"';}?> id="vidOnkoz">
                                               <td>
                                                   <label class="lb1">Вкажіть вид онкозахворювання</label></td>
                                               <td>
                                                   <input type="text" name="VidOnko" id="vidOnko" class="form-control" value="<? echo $_POST['VidOnko'];?>">
                                               </td>
                                           </tr>
                                           <tr <? if($_POST['Onko']!='Так'){echo 'class="onkoshow"';}?> id="datOnko">
                                               <td>
                                                   <label class="lb1">Дата постановки діагнозу
                                                       онкозахворювання</label></td>
                                               <td>
                                                   з<input type="date" name="dateOnko0" id="dateOnko"  class="form-control" value="<? echo $_POST['dateOnko0'];?>">
                                                   по<input type="date" name="dateOnko" id="dateOnko1"  class="form-control" value="<? echo $_POST['dateOnko'];?>">
                                               </td>
                                           </tr>
                                           <tr class="onkoshow" id="likOnko">
                                               <td><label class="lb1">Якщо так - лікування онкозахворювання
                                                       (Препарати - назва препаратів,
                                                       група)?</label>

                                               </td>
                                               <td>
                                                   <select name="OnkoLek" class="form-control" id="onkoLek">
                                                       <option value="--" <? if($_POST['OnkoLek']=='--'){ echo "selected";}?>>--</option>
                                                       <option value="Ні" <? if($_POST['OnkoLek']=='Ні'){ echo "selected";}?>>Ні</option>
                                                       <option value="Хіміотерапія" <? if($_POST['OnkoLek']=='Хіміотерапія'){ echo "selected";}?>>Хіміотерапія</option>
                                                       <option value="Імунотерапія" <? if($_POST['OnkoLek']=='Імунотерапія'){ echo "selected";}?>>Імунотерапія</option>
                                                       <option value="Гормональна терапія" <? if($_POST['OnkoLek']=='Гормональна терапія'){ echo "selected";}?>>Гормональна терапія</option>
                                                       <option value="Комбінована (хіміо + тергетная терапія)" <? if($_POST['OnkoLek']=='Комбінована (хіміо + тергетная терапія)'){ echo "selected";}?>>
                                                           Комбінована (хіміо + тергетная терапія)
                                                       </option>
                                                       <option value="Таргетная терапія" <? if($_POST['OnkoLek']=='Таргетная терапія'){ echo "selected";}?>>Таргетная терапія</option>
                                                       <option value="Хірургічне" <? if($_POST['OnkoLek']=='Хірургічне'){ echo "selected";}?>>Хірургічне</option>
                                                       <option value="Інші" <? if($_POST['OnkoLek']=='Інші'){ echo "selected";}?>>Інші</option>
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
                                                <td><label class="lb1">Чи був у вас інфаркт?</label></td>
                                                <td style="width: 100%">
                                                    <select name="infarkt" class="form-control"
                                                            onchange="addIn(this.value)">
                                                        <option value="--"  <? if($_POST['infarkt']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['infarkt']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['infarkt']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                    <span id="ki" style="display: flex;"></span>
                                                    <span id="ki2" style="display: flex;"></span>
                                                    <table id="ttt" width="400px">
                                                        <tbody></tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="display: flex;"><label>Чи був у вас інсульт?</label></td>
                                                <td>
                                                    <select name="insult" class="form-control"
                                                            onchange="addIn1(this.value)">
                                                        <option value="--"  <? if($_POST['insult']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['insult']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['insult']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                    <span id="kiIns" style="display: flex;"></span>
                                                    <span id="kiIns2" style="display: flex;"></span>
                                                    <table id="tttIns" width="400px">
                                                        <tbody></tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="display: flex;"><label>Хронічна серцева
                                                        недостатність - вказати стадію</label>

                                                </td>
                                                <td>
                                                    <select name="hronSerd" class="form-control"
                                                            onchange="addStad(this.value)">
                                                        <option value="--"  <? if($_POST['hronSerd']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['hronSerd']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Стадія I" <? if($_POST['hronSerd']=='Стадія I'){ echo "selected";}?>>Стадія I</option>
                                                        <option value="Стадія II, Період А (стадія IIа)" <? if($_POST['hronSerd']=='Стадія II, Період А (стадія IIа)'){ echo "selected";}?>>Стадія II,
                                                            Період А (стадія IIа)
                                                        </option>
                                                        <option value="Стадія II, Період Б (стадія IIб)" <? if($_POST['hronSerd']=='Стадія II, Період Б (стадія IIб)'){ echo "selected";}?>>Стадія II,
                                                            Період Б (стадія IIб)
                                                        </option>
                                                        <option value="Стадія III, Період А (стадія IIIа)" <? if($_POST['hronSerd']=='Стадія III, Період А (стадія IIIа)'){ echo "selected";}?>>Стадія III,
                                                            Період А (стадія IIIа)
                                                        </option>
                                                        <option value="Стадія III, Період Б (стадія IIIб)" <? if($_POST['hronSerd']=='Стадія III, Період Б (стадія IIIб)'){ echo "selected";}?>>Стадія III,
                                                            Період Б (стадія IIIб)
                                                        </option>
                                                    </select>

                                                    <div style="display: flex;"><span id="kiStad"
                                                                                      style="display: flex;"></span>
                                                        <span id="kiStad2" style="display: flex; width: 100px;"></span>
                                                        <span id="kiStad0"
                                                              style="display: flex;"></span>
                                                        <span id="kiStad20" style="display: flex; width: 100px;"></span>
                                                    </div>
                                                </td>
                                            </tr>
                                        </table>
                                    </fieldset>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="diab">
                                    <fieldset style="margin-top: 30px;">
                                        <h4>4.А. Обстеження очей</h4>
                                       <table class='mainT' style="width: 80%;">
                                            <tr>
                                                <td><label class="lb1">Дата обстеження очного
                                                        дна: дд-мм-рр</label>

                                                </td>
                                                <td style="width: 100%;">з<input type="date" class="form-control" name="glaz0" value="<? echo $_POST['glaz0'];?>">
                                                    по<input type="date" class="form-control" name="glaz" value="<? echo $_POST['glaz'];?>"></td>

                                            </tr>
                                            <tr>
                                                <td><label class="lb1">Діабетична
                                                        ретинопатія?</label></td>
                                                <td>
                                                    <select name="diabDiab" class="form-control"
                                                            onchange="addDiab(this.value)">
                                                        <option value="--"  <? if($_POST['diabDiab']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['diabDiab']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['diabDiab']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                    <span id="kiDiab"></span>

                                                    <span id="kiDiab2"></span>
                                                    <span id="kiDiab0"></span>

                                                    <span id="kiDiab20"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="display: flex;"><label class="lb1">Непроліферативна
                                                        ретинопатія?</label></td>
                                                <td>
                                                    <select name="diabNep" class="form-control"
                                                            onchange="addNep(this.value)">
                                                        <option value="--" <? if($_POST['diabNep']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['diabNep']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так - легкого ступеню" <? if($_POST['diabNep']=='Так - легкого ступеню'){ echo "selected";}?>>Так - легкого ступеню</option>
                                                        <option value="Так - середнього ступеню" <? if($_POST['diabNep']=='Так - середнього ступеню'){ echo "selected";}?>>Так - середнього ступеню</option>
                                                        <option value="Так - важкого ступеню" <? if($_POST['diabNep']=='Так - важкого ступеню'){ echo "selected";}?>>Так - важкого ступеню</option>
                                                    </select>
                                                    <span id="kiNep"></span>

                                                    <span id="kiNep2"></span>
                                                    <span id="kiNep0"></span>

                                                    <span id="kiNep20"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="display: flex;"><label class="lb1">Препроліферативна
                                                        ретинопатія?</label></td>
                                                <td>
                                                    <select name="diabPrep" class="form-control"
                                                            onchange="addPrep(this.value)">
                                                        <option value="--" <? if($_POST['diabPrep']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['diabPrep']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['diabPrep']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                    <span id="kiPrep"></span>
                                                    <span id="kiPrep2"></span>
                                                    <span id="kiPrep0"></span>
                                                    <span id="kiPrep20"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="display: flex;"><label class="lb1">Проліферативна
                                                        ретинопатія?</label></td>
                                                <td>
                                                    <select name="diabPrep2" class="form-control"
                                                            onchange="addPrep2(this.value)">
                                                        <option value="--" <? if($_POST['diabPrep2']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['diabPrep2']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так - проліферативна діабетична ретинопатія з низьким ризиком" <? if($_POST['diabPrep2']=='Так - проліферативна діабетична ретинопатія з низьким ризиком'){ echo "selected";}?>>Так - проліферативна діабетична ретинопатія з низьким ризиком</option>
                                                        <option value="Так - проліферативна діабетична ретинопатія з високим ризиком" <? if($_POST['diabPrep2']=='Так - проліферативна діабетична ретинопатія з високим ризиком'){ echo "selected";}?>>Так - проліферативна діабетична ретинопатія з високим ризиком</option>
                                                    </select>
                                                    <span id="kiPrep12"></span>
                                                    <span id="kiPrep22"></span>
                                                    <span id="kiPrep120"></span>
                                                    <span id="kiPrep220"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="display: flex;"><label class="lb1">Сліпота?</label></td>
                                                <td>
                                                    <select name="Slep" class="form-control"
                                                            onchange="addSlep(this.value)">
                                                        <option value="--" <? if($_POST['Slep']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['Slep']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['Slep']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                    <span id="kiSlep"></span>
                                                    <span id="kiSlep2"></span>
                                                    <span id="kiSlep0"></span>
                                                    <span id="kiSlep20"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="display: flex;"><label class="lb1">Лазерне лікування?</label>
                                                </td>
                                                <td>
                                                    <select name="Lazer" class="form-control"
                                                            onchange="addLazer(this.value)">
                                                        <option value="--" <? if($_POST['Lazer']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['Lazer']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['Lazer']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                    <span id="kiLazer"></span>
                                                    <span id="kiLazer2"></span>
                                                    <span id="kiLazer0"></span>
                                                    <span id="kiLazer20"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="display: flex;"><label class="lb1">Катаракта?</label></td>
                                                <td>
                                                    <select name="Katar" class="form-control"
                                                            onchange="addKatar(this.value)">
                                                        <option value="--" <? if($_POST['Katar']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['Katar']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['Katar']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                    <span id="kiKatar"></span>
                                                    <span id="kiKatar2"></span>
                                                    <span id="kiKatar0"></span>
                                                    <span id="kiKatar20"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="display: flex;"><label class="lb1">Макулопатія?</label></td>
                                                <td>
                                                    <select name="Mal" class="form-control"
                                                            onchange="addMal(this.value)">
                                                        <option value="--" <? if($_POST['Mal']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['Mal']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['Mal']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                    <span id="kiMal"></span>
                                                    <span id="kiMal2"></span>
                                                    <span id="kiMal0"></span>
                                                    <span id="kiMal20"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="display: flex;"><label class="lb1">Глаукома?</label></td>
                                                <td>
                                                    <select name="Glauk" class="form-control"
                                                            onchange="addGlauk(this.value)">
                                                        <option value="--" <? if($_POST['Glauk']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['Glauk']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['Glauk']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                    <span id="kiGlauk"></span>
                                                    <span id="kiGlauk2"></span>
                                                    <span id="kiGlauk0"></span>
                                                    <span id="kiGlauk20"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="display: flex;"><label class="lb1">На сьогодні лікування
                                                        ДР:</label></td>
                                                <td>
                                                    <select name="LechDR" class="form-control">
                                                        <option value="--" <? if($_POST['LechDR']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['LechDR']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Кортикостероїди (триамцинолон)" <? if($_POST['LechDR']=='Кортикостероїди (триамцинолон)'){ echo "selected";}?>>Кортикостероїди
                                                            (триамцинолон)
                                                        </option>
                                                        <option value="Хірургічні втручання" <? if($_POST['LechDR']=='Хірургічні втручання'){ echo "selected";}?>>Хірургічні втручання
                                                        </option>
                                                        <option value="Інгібітори VEGF" <? if($_POST['LechDR']=='Інгібітори VEGF'){ echo "selected";}?>>Інгібітори VEGF</option>
                                                        <option value="Ін'єкції гіалуронідази" <? if($_POST['LechDR']=='Ін\'єкції гіалуронідази'){ echo "selected";}?>>Ін'єкції гіалуронідази
                                                        </option>
                                                        <option value="Лазерна фотокоагуляція" <? if($_POST['LechDR']=='Лазерна фотокоагуляція'){ echo "selected";}?>>Лазерна фотокоагуляція
                                                        </option>
                                                        <option value="Інше" <? if($_POST['LechDR']=='Інше'){ echo "selected";}?>>Інше</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Дані OCT:</label></td>
                                                <td>
                                                    <input type="file" style='background: transparent;' name="OST"
                                                           class="form-control" value="<? echo $_POST['OST'];?>">
                                                </td>
                                            </tr>
                                        </table>
                                    </fieldset>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="nefr">
                                    <fieldset style="margin-top: 30px;">
                                        <h4>5.А. Обстеження нирок</h4>
                                        <table class='mainT' style="width: 80%;">
                                            <tr >
                                                <td ><label class="lb1">Дата обстеження нирок:
                                                        дд-мм-рр</label>

                                                </td >
                                                <td  style="width: 100%">з<input type="date" class="form-control" name="pochki0" value="<? echo $_POST['pochki0'];?>">
                                                    по<input type="date" class="form-control" name="pochki" value="<? echo $_POST['pochki'];?>"></td>

                                            </tr>
                                            <tr>
                                                <td><label class="lb1">Діабетична
                                                        нефропатія?</label></td>
                                                <td>
                                                    <select name="diabNefro" class="form-control"
                                                            onchange="addNefro(this.value)">
                                                        <option value="--" <? if($_POST['diabNefro']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['diabNefro']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['diabNefro']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                    <span id="kiNefro"></span>
                                                    <span id="kiNefro2"></span>
                                                    <span id="kiNefro0"></span>
                                                    <span id="kiNefro20"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label class="lb1">Хронічна ниркова
                                                        недостатність?</label></td>
                                                <td>
                                                    <select name="diabPochNEd" class="form-control"
                                                            onchange="addPochNEd(this.value)">
                                                        <option value="--" <? if($_POST['diabPochNEd']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['diabPochNEd']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['diabPochNEd']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                    <span id="kiPochNEd"></span>
                                                    <span id="kiPochNEd2"></span>
                                                    <span id="kiPochNEd0"></span>
                                                    <span id="kiPochNEd20"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label class="lb1">Хронічна ниркова
                                                        недостатність - це заключна стадія?</label></td>
                                                <td>
                                                    <select name="diabPochSt" class="form-control"
                                                            onchange="addPochSt(this.value)">
                                                        <option value="--" <? if($_POST['diabPochSt']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['diabPochSt']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['diabPochSt']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                    <span id="kiPochSt"></span>
                                                    <span id="kiPochSt2"></span>
                                                    <span id="kiPochSt0"></span>
                                                    <span id="kiPochSt20"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label class="lb1">Діаліз?</label></td>
                                                <td>
                                                    <select name="diabDializ" class="form-control"
                                                            onchange="addDializ(this.value)">
                                                        <option value="--" <? if($_POST['diabDializ']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['diabDializ']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['diabDializ']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                    <span id="kiDializ"></span>
                                                    <span id="kiDializ2"></span>
                                                    <span id="kiDializ0"></span>
                                                    <span id="kiDializ20"></span>
                                                </td>
                                            </tr>

                                            <tr>
                                                <td><label class="lb1">Поточні методи лікування:
                                                        ліки (назви та група):</label>

                                                </td>
                                                <td>
                                                    <select name="LechPoch" class="form-control">
                                                        <option value="--" <? if($_POST['LechPoch']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['LechPoch']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Інгібітори АПФ" <? if($_POST['LechPoch']=='Інгібітори АПФ'){ echo "selected";}?>>Інгібітори АПФ</option>
                                                        <option value="Прямі інгібітори реніну" <? if($_POST['LechPoch']=='Прямі інгібітори реніну'){ echo "selected";}?>>Прямі інгібітори
                                                            реніну
                                                        </option>
                                                        <option value="Діуретики" <? if($_POST['LechPoch']=='Діуретики'){ echo "selected";}?>>Діуретики</option>
                                                        <option value="Блокатори Са-каналів" <? if($_POST['LechPoch']=='Блокатори Са-каналів'){ echo "selected";}?>>Блокатори Са-каналів
                                                        </option>
                                                        <option value="Бета-адреноблокатори" <? if($_POST['LechPoch']=='Бета-адреноблокатори'){ echo "selected";}?>>Бета-адреноблокатори
                                                        </option>
                                                        <option value="Препарати заліза" <? if($_POST['LechPoch']=='Препарати заліза'){ echo "selected";}?>>Препарати заліза</option>
                                                        <option value="Інше" <? if($_POST['LechPoch']=='Інше'){ echo "selected";}?>>Інше</option>
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
                                                <td><label class="lb1">Дата обстеження: дд-мм-рр</label>

                                                </td>
                                                <td style="width: 100%">
                                                    з<input type="date" class="form-control" name="datPoli0" value="<? echo $_POST['datPoli0'];?>">
                                                    по<input type="date" class="form-control" name="datPoli" value="<? echo $_POST['datPoli'];?>">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td><label class="lb1">Ангіопатія нижніх кінцівок?</label></td>
                                                <td>
                                                    <select name="diabAngin" class="form-control"
                                                            onchange="addAngin(this.value)">
                                                        <option value="--" <? if($_POST['diabAngin']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['diabAngin']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['diabAngin']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                    <span id="kiAngin"></span>

                                                    <span id="kiAngin2"></span>
                                                    <span id="kiAngin0"></span>

                                                    <span id="kiAngin20"></span>
                                                    <br><span id="kiAngin3"></span>
                                                    <br><span id="kiAngin4"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label class="lb1">Периферична нейропатія?</label></td>
                                                <td>
                                                    <select name="diabNejr" class="form-control"
                                                            onchange="addNejr(this.value)">
                                                        <option value="--" <? if($_POST['diabNejr']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['diabNejr']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['diabNejr']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                    <span id="kiNejr"></span>

                                                    <span id="kiNejr2"></span>
                                                    <span id="kiNejr0"></span>

                                                    <span id="kiNejr20"></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label class="lb1">Чи бувають незвичайні відчуття в стопах?</label>
                                                </td>
                                                <td>
                                                    <select name="diabStopp" class="form-control">
                                                        <option value="--" <? if($_POST['diabStopp']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні, все нормально" <? if($_POST['diabStopp']=='Ні, все нормально'){ echo "selected";}?>>Ні, все нормально</option>
                                                        <option value="Оніміння" <? if($_POST['diabStopp']=='Оніміння'){ echo "selected";}?>>Оніміння</option>
                                                        <option value="Поколювання" <? if($_POST['diabStopp']=='Поколювання'){ echo "selected";}?>>Поколювання</option>
                                                        <option value="Мурашки" <? if($_POST['diabStopp']=='Мурашки'){ echo "selected";}?>>Мурашки</option>
                                                        <option value="Печіння" <? if($_POST['diabStopp']=='Печіння'){ echo "selected";}?>>Печіння</option>
                                                        <option value="Підвищено чутливість" <? if($_POST['diabStopp']=='Підвищено чутливість'){ echo "selected";}?>>Підвищено чутливість
                                                        </option>
                                                        <option value="Знижено чутливості" <? if($_POST['diabStopp']=='Знижено чутливості'){ echo "selected";}?>>Знижено чутливості</option>
                                                        <option value="Складнощі при русі" <? if($_POST['diabStopp']=='Складнощі при русі'){ echo "selected";}?>>Складнощі при русі</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label class="lb1">Чи є біль в обох ногах?</label></td>
                                                <td>
                                                    <select name="Bol" class="form-control"  onchange="bolNoga(this.value)">
                                                        <option value="--" <? if($_POST['Bol']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні, болю немає" <? if($_POST['Bol']=='Ні, болю немає'){ echo "selected";}?>>Ні, болю немає</option>
                                                        <option value="Ні, біль з одного боку" <? if($_POST['Bol']=='Ні, біль з одного боку'){ echo "selected";}?>>Ні, біль з одного боку
                                                        </option>
                                                        <option value="Так" <? if($_POST['Bol']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr <? if($_POST['Bol']!='Так'){echo 'class="showNoga"';}?> id="bolStopa">
                                                <td>
                                                    <label class="lb1">Якщо біль в обох стопах, як вона
                                                        проявляється?</label></td>
                                                <td>
                                                    <select name="Boltwo" class="form-control" id="Boltwo">
                                                        <option value="--" <? if($_POST['Boltwo']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Спонтанна" <? if($_POST['Boltwo']=='Спонтанна'){ echo "selected";}?>>Спонтанна</option>
                                                        <option value="Постійна" <? if($_POST['Boltwo']=='Постійна'){ echo "selected";}?>>Постійна</option>

                                                    </select>

                                                </td>
                                            </tr>
                                            <tr <? if($_POST['Bol']!='Так'){echo 'class="showNoga"';}?> id="bolIntens">
                                                <td><label class="lb1">Яка інтенсивність болю (шкала від 1 до
                                                        5)?</label></td>
                                                <td>
                                                    <select name="BolInten" class="form-control" id="BolInten">
                                                        <option value="--" <? if($_POST['BolInten']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="1" <? if($_POST['BolInten']=='1'){ echo "selected";}?>>1</option>
                                                        <option value="2" <? if($_POST['BolInten']=='2'){ echo "selected";}?>>2</option>
                                                        <option value="3" <? if($_POST['BolInten']=='3'){ echo "selected";}?>>3</option>
                                                        <option value="4" <? if($_POST['BolInten']=='4'){ echo "selected";}?>>4</option>
                                                        <option value="5" <? if($_POST['BolInten']=='5'){ echo "selected";}?>>5</option>

                                                    </select>
                                                </td>
                                            </tr>
                                            <tr <? if($_POST['Bol']!='Так'){echo 'class="showNoga"';}?> id="bolProjav">
                                                <td><label class="lb1">Як проявляється біль?</label></td>
                                                <td>
                                                    <select name="Bolkak" class="form-control" id="Bolkak">
                                                        <option value="--" <? if($_POST['Bolkak']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Печіння" <? if($_POST['Bolkak']=='Печіння'){ echo "selected";}?>>Печіння</option>
                                                        <option value="Викручування" <? if($_POST['Bolkak']=='Викручування'){ echo "selected";}?>>Викручування</option>
                                                        <option value="Здавлення" <? if($_POST['Bolkak']=='Здавлення'){ echo "selected";}?>>Здавлення</option>
                                                        <option value="Гостра стріляючий біль" <? if($_POST['Bolkak']=='Гостра стріляючий біль'){ echo "selected";}?>>Гостра стріляючий біль
                                                        </option>
                                                        <option value="Пронизуючий біль (як голки)" <? if($_POST['Bolkak']=='Пронизуючий біль (як голки)'){ echo "selected";}?>>Пронизуючий біль (як
                                                            голки)
                                                        </option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Прийом препаратів?</label></td>
                                                <td>
                                                    <select name="Preparat" class="form-control" onchange="preparat(this.value)">
                                                        <option value="--" <? if($_POST['Preparat']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['Preparat']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['Preparat']=='Так'){ echo "selected";}?>>Так</option>

                                                    </select>

                                                </td>
                                            </tr>
                                            <tr <? if($_POST['Preparat']!='Так'){echo 'class="showPrep"';}?> id="whatPrep">
                                                <td><label class="lb1">Якщо так, розписати які препарати?</label></td>
                                                <td>
                                                    <select name="PreparatKakie" class="form-control" id="PreparatKakie">
                                                        <option value="--" <? if($_POST['PreparatKakie']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Антиконвульсанти (прегабалін, габапентин)"
                                                            <? if($_POST['PreparatKakie']=='"Антиконвульсанти (прегабалін, габапентин)'){ echo "selected";}?>>
                                                            Антиконвульсанти (прегабалін, габапентин)
                                                        </option>
                                                        <option value="Антидепресанти (Дулоксетин - інгібітори зворотного захоплення серотоніну. НА)"
                                                            <? if($_POST['PreparatKakie']=='Антидепресанти (Дулоксетин - інгібітори зворотного захоплення серотоніну. НА)'){ echo "selected";}?>>
                                                            Антидепресанти (Дулоксетин - інгібітори зворотного
                                                            захоплення серотоніну. НА)
                                                        </option>
                                                        <option value="Трициклічніантидепресанти (амітриптилін)"
                                                            <? if($_POST['PreparatKakie']=='Трициклічніантидепресанти (амітриптилін)'){ echo "selected";}?>>
                                                            Трициклічніантидепресанти (амітриптилін)
                                                        </option>
                                                        <option value="Опіоіди" <? if($_POST['PreparatKakie']=='Опіоіди'){ echo "selected";}?>>Опіоіди</option>
                                                        <option value="Вітаміни групи В" <? if($_POST['PreparatKakie']=='Вітаміни групи В'){ echo "selected";}?>>Вітаміни групи В</option>
                                                        <option value="Аналгетики" <? if($_POST['PreparatKakie']=='Аналгетики'){ echo "selected";}?>>Аналгетики</option>
                                                        <option value="НПЗП" <? if($_POST['PreparatKakie']=='НПЗП'){ echo "selected";}?>>НПЗП</option>
                                                        <option value="Інше" <? if($_POST['PreparatKakie']=='Інше'){ echo "selected";}?>>Інше</option>
                                                    </select>
                                                </td>

                                            </tr>
                                        </table>
                                    </fieldset>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="stop">
                                    <fieldset style="margin-top: 30px;">
                                        <h4>6.Б. Обстеження стопи</h4>
                                       <table class='mainT' style="width: 80%;">
                                            <tr>
                                                <td><label class="lb1">Дата обстеження стопи: дд-мм-рр?</label></td>
                                                <td style="width: 100%;">
                                                    з<input type="date" name="datStopObsl" class="form-control" value="<? echo $_POST['datStopObsl'];?>">
                                                    по<input type="date" name="datStopObsl0" class="form-control" value="<? echo $_POST['datStopObsl0'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Зниження температури?</label></td>
                                                <td>
                                                    <select name="SnizhT" class="form-control">
                                                        <option value="--" <? if($_POST['SnizhT']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['SnizhT']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['SnizhT']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Порушення тактильної чутливості?</label></td>
                                                <td>
                                                    <select name="Chyvs" class="form-control">
                                                        <option value="--" <? if($_POST['Chyvs']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['Chyvs']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['Chyvs']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label class="lb1">Порушення вібраційної чутливості?</label></td>
                                                <td>
                                                    <select name="NarVibr" class="form-control">
                                                        <option value="--" <? if($_POST['NarVibr']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['NarVibr']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['NarVibr']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label class="lb1">Зниження / відсутність рефлексів?</label></td>
                                                <td>
                                                    <select name="Reflex" class="form-control">
                                                        <option value="--" <? if($_POST['Reflex']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['Reflex']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['Reflex']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select></td>
                                            </tr>
                                            <tr>
                                                <td><label class="lb1">Наявність виразок?</label></td>
                                                <td>
                                                    <select name="Jazv" class="form-control">
                                                        <option value="--" <? if($_POST['Jazv']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['Jazv']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['Jazv']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label class="lb1">Нагноєння виразок?</label></td>
                                                <td>
                                                    <select name="GnojJazv" class="form-control">
                                                        <option value="--" <? if($_POST['GnojJazv']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['GnojJazv']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['GnojJazv']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label class="lb1">Пульс на стопі?</label></td>
                                                <td>
                                                    <select name="PylsStopa" class="form-control">
                                                        <option value="--" <? if($_POST['PylsStopa']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['PylsStopa']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['PylsStopa']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select></td>
                                            </tr>
                                            <tr>
                                                <td><label class="lb1">Шунтування / ангіопластика?</label></td>
                                                <td>
                                                    <select name="Shynt" class="form-control">
                                                        <option value="--" <? if($_POST['Shynt']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['Shynt']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['Shynt']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label class="lb1">Синдром переміжної кульгавості?</label></td>
                                                <td>
                                                    <select name="Hrom" class="form-control">
                                                        <option value="--" <? if($_POST['Hrom']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['Hrom']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['Hrom']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label class="lb1">Ампутація?</label></td>
                                                <td>
                                                    <select name="Ampyt" class="form-control"
                                                            onchange="addAmput(this.value)">
                                                        <option value="--" <? if($_POST['Ampyt']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['Ampyt']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Ліва нога" <? if($_POST['Ampyt']=='Ліва нога'){ echo "selected";}?>>Ліва нога</option>
                                                        <option value="Права нога" <? if($_POST['Ampyt']=='Права нога'){ echo "selected";}?>>Права нога</option>
                                                    </select>

                                                    <span id="kiAmput1"></span>

                                                    <span id="kiAmput3"></span>
                                                    <span id="kiAmput"></span>

                                                    <span id="kiAmput2"></span>
                                                    <span id="kiAmput0"></span>

                                                    <span id="kiAmput20"></span>
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
                                                <td><label class="lb1">Дата обстеження: дд-мм-рр</label></td>
                                                <td style="width: 100%;">
                                                    з<input type="date" class="form-control" name="datLab0" value="<? echo $_POST['datLab0'];?>">
                                                    по<input type="date" class="form-control" name="datLab" value="<? echo $_POST['datLab'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Ви зараз натщесерце?</label></td>
                                                <td>
                                                    <select name="Natosh" class="form-control">
                                                        <option value="--" <? if($_POST['Natosh']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['Natosh']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['Natosh']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">О котрій годині був останній прийом їжі
                                                        (напередодні ввечері)?</label></td>
                                                <td>
                                                    з<input name="Pisha0" type="time" class="form-control"
                                                            placeholder="" value="<? echo $_POST['Pisha0'];?>">
                                                    по<input name="Pisha" type="time" class="form-control"
                                                             placeholder="" value="<? echo $_POST['Pisha'];?>">
                                                </td>
                                            </tr>
                                            <tr style="background: #295b8e;">
                                                <td><label class="lb1" style="color:white;">Глюкоза крові натще:</label></td>
                                                <td></td>

                                            </tr>
                                            <tr>

                                                <td>
                                                    <label class="lb1">Показник, ммоль/л</label></td>
                                                <td>
                                                    з<input type="text" name="nmol0" class="form-control" value="<? echo $_POST['nmol0'];?>">
                                                    по<input type="text" name="nmol" class="form-control" value="<? echo $_POST['nmol'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Дата, дд-мм-рр</label></td>
                                                <td>
                                                    з<input type="date" name="Datnmol0" class="form-control" value="<? echo $_POST['Datnmol0'];?>">
                                                    по<input type="date" name="Datnmol" class="form-control" value="<? echo $_POST['Datnmol'];?>">
                                                </td>
                                            </tr>
                                            <tr style="background: #295b8e;">
                                                <td><label class="lb1" style="color:white;">Глікований гемоглобін?</label></td>
                                                <td></td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">%</label></td>
                                                <td>
                                                    з<input type="text" name="vidsot0" class="form-control" value="<? echo $_POST['vidsot0'];?>">
                                                    по<input type="text" name="vidsot" class="form-control" value="<? echo $_POST['vidsot'];?>">
                                                </td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Глікований гемоглобін pmol/pmol</label></td>
                                                <td>
                                                    з<input type="text" name="gemogl0" class="form-control" value="<? echo $_POST['gemogl0'];?>">
                                                    по<input type="text" name="gemogl" class="form-control" value="<? echo $_POST['gemogl'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Дата, дд-мм-рр</label></td>
                                                <td>
                                                    з<input type="date" name="Datgemogl0" class="form-control" value="<? echo $_POST['Datgemogl0'];?>">
                                                    по<input type="date" name="Datgemogl" class="form-control" value="<? echo $_POST['Datgemogl'];?>">

                                                </td>
                                            </tr>
                                            <tr style="background: #295b8e;">
                                                <td><label class="lb1" style="color:white;">Загальний аналіз крові (дата)?</label>

                                                </td>
                                                <td style="color:white;">
                                                    з<input type="date" name="Datkrovi0" class="form-control" value="<? echo $_POST['Datkrovi0'];?>">
                                                    по<input type="date" name="Datkrovi" class="form-control" value="<? echo $_POST['Datkrovi'];?>">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label class="lb1">Еритроцити</label></td>
                                                <td>
                                                    з<input type="text" name="eritr0" class="form-control" value="<? echo $_POST['eritr0'];?>">
                                                    по<input type="text" name="eritr" class="form-control" value="<? echo $_POST['eritr'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Гемоглобін</label></td>
                                                <td>
                                                    з<input type="text" name="gemogl20" class="form-control" value="<? echo $_POST['gemogl20'];?>">
                                                    по<input type="text" name="gemogl2" class="form-control" value="<? echo $_POST['gemogl2'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Лейкоцити (кількість)</label></td>
                                                <td>
                                                    з<input type="text" name="lekoz0" class="form-control" value="<? echo $_POST['lekoz0'];?>">
                                                    по<input type="text" name="lekoz" class="form-control" value="<? echo $_POST['lekoz'];?>">

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Нейтрофіли (абс к-ть)</label></td>
                                                <td>
                                                   з<input type="text" name="nejtrof0" class="form-control" value="<? echo $_POST['nejtrof0'];?>">
                                                   по<input type="text" name="nejtrof" class="form-control" value="<? echo $_POST['nejtrof'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Моноцити (абс к-ть)</label></td>
                                                <td>
                                                    з<input type="text" name="monozit0" class="form-control" value="<? echo $_POST['monozit0'];?>">
                                                    по<input type="text" name="monozit" class="form-control" value="<? echo $_POST['monozit'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Лімфоцити (абс к-во)</label></td>
                                                <td>
                                                    з<input type="text" name="limfoz0" class="form-control" value="<? echo $_POST['limfoz0'];?>">
                                                    по<input type="text" name="limfoz" class="form-control" value="<? echo $_POST['limfoz'];?>">

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Тромбоцити (абс к-во)</label></td>
                                                <td>
                                                   з<input type="text" name="tromb0" class="form-control" value="<? echo $_POST['tromb0'];?>">
                                                    по<input type="text" name="tromb" class="form-control" value="<? echo $_POST['tromb'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Тромбоцити, MPV</label></td>
                                                <td>
                                                    з<input type="text" name="mpv0" class="form-control" value="<? echo $_POST['mpv0'];?>">
                                                    по<input type="text" name="mpv" class="form-control" value="<? echo $_POST['mpv'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Інше (показник)</label></td>
                                                <td>
                                                    з<input type="text" name="dryg0" class="form-control" value="<? echo $_POST['dryg0'];?>">
                                                    по<input type="text" name="dryg" class="form-control" value="<? echo $_POST['dryg'];?>">

                                                </td>
                                            </tr>
                                            <tr style="background: #295b8e;">
                                                <td><label class="lb1" style="color:white;">Креатинін в плазмі крові</label></td>
                                                <td></td>

                                            </tr>
                                            <tr>

                                                <td>
                                                    <label class="lb1">Показник, мкмоль / л</label></td>
                                                <td>
                                                    з<input type="text" name="kreat0" class="form-control" value="<? echo $_POST['kreat0'];?>">
                                                    по<input type="text" name="kreat" class="form-control" value="<? echo $_POST['kreat'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Дата, дд-мм-рр</label></td>
                                                <td>
                                                    з<input type="date" name="datkreat0" class="form-control" value="<? echo $_POST['datkreat0'];?>">
                                                    по<input type="date" name="datkreat" class="form-control" value="<? echo $_POST['datkreat'];?>">


                                                </td>
                                            </tr>
                                            <tr style="background: #295b8e;">
                                                <td><label class="lb1" style="color:white;">Креатинін в сечі</label></td>
                                                <td></td>

                                            </tr>
                                            <tr>
                                                <td>

                                                    <label class="lb1">Показник, мкмоль / л</label></td>
                                                <td>
                                                    з<input type="text" name="kreatMocha0" class="form-control" value="<? echo $_POST['kreatMocha0'];?>">
                                                    по<input type="text" name="kreatMocha" class="form-control" value="<? echo $_POST['kreatMocha'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Дата, дд-мм-рр</label></td>
                                                <td>
                                                    з<input type="date" name="datMocha0" class="form-control" value="<? echo $_POST['datMocha0'];?>">
                                                    по<input type="date" name="datMocha" class="form-control" value="<? echo $_POST['datMocha'];?>">
                                            </tr>
                                            <tr>
                                                <td>

                                                    <label class="lb1">Кліренс креатиніну (СКФ, швидкості клубочкової
                                                        фільтрації)</label></td>
                                                <td>
                                                    з<input type="text" name="klirkreat0" class="form-control" value="<? echo $_POST['klirkreat0'];?>">
                                                    по<input type="text" name="klirkreat" class="form-control" value="<? echo $_POST['klirkreat'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Протеїнурія</label></td>
                                                <td>
                                                    <select name="Protein" class="form-control" onchange="protein(this.value)">
                                                        <option value="--" <? if($_POST['Protein']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['Protein']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['Protein']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr <? if($_POST['Protein']!='Так'){echo 'class="showProt"';}?> id="prote">
                                                <td>
                                                    <label class="lb1">Останній вимір, мг / сут</label></td>
                                                <td>
                                                    з<input type="text" name="posIzm0" id="posIzm" class="form-control" value="<? echo $_POST['posIzm0'];?>">
                                                    по<input type="text" name="posIzm" id="posIzm1" class="form-control" value="<? echo $_POST['posIzm'];?>">
                                                </td>
                                            </tr>
                                            <tr <? if($_POST['Protein']!='Так'){echo 'class="showProt"';}?> id="datprote">
                                                <td>
                                                    <label class="lb1">Дата, дд-мм-рр</label></td>
                                                <td>
                                                    з<input type="date" name="datProtein0" id="datProtein" class="form-control" value="<? echo $_POST['datProtein0'];?>">
                                                    по<input type="date" name="datProtein" id="datProtein1" class="form-control" value="<? echo $_POST['datProtein'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <style>
                                                    #forTab1 tr td:last-child input, #forTab2 tr td:last-child input,
                                                    #forTab1 tr td:last-child select, #forTab2 tr td:last-child select,
                                                    #forTab1 tr td:last-child label, #forTab2 tr td:last-child label {
                                                        width: 100%;
                                                    }

                                                </style>
                                                <td>
                                                    <label class="lb1">Мікроальбумінурія</label></td>
                                                <td>
                                                    <select name="Mikroalmb" class="form-control"
                                                            onchange="addMikro(this.value)">
                                                        <option value="--" <? if($_POST['Mikroalmb']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['Mikroalmb']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['Mikroalmb']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>


                                                    <span id="kiMikro1"></span>
                                                    <span id="kiMikro3"></span>
                                                    <span id="kiMikro10"></span>
                                                    <span id="kiMikro30"></span>
                                                    <span id="kiMikro"></span>
                                                    <span id="kiMikro2"></span>
                                                    <span id="kiMikro0"></span>
                                                    <span id="kiMikro20"></span>
                                                </td>
                                            </tr>
                                            <tr style="background: #295b8e;">
                                                <td><label class="lb1" style="color:white;">Лабораторний аналіз ліпідів в крові
                                                        (дата):</label></td>
                                                <td style="color:white;">з<input type="date" name="Lipiddat0" class="form-control" value="<? echo $_POST['Lipiddat0'];?>">
                                                    по<input type="date" name="Lipiddat" class="form-control" value="<? echo $_POST['Lipiddat'];?>"></td>

                                            </tr>
                                            <tr>
                                                <td>

                                                    <label class="lb1">Холестерин (показник)</label></td>
                                                <td>
                                                    з<input type="text" name="Holest0" class="form-control" value="<? echo $_POST['Holest0'];?>">
                                                    по<input type="text" name="Holest" class="form-control" value="<? echo $_POST['Holest'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Ліпіди високої щільності
                                                        (Показник)</label></td>
                                                <td>
                                                    з<input type="text" name="LipidVis0" class="form-control" value="<? echo $_POST['LipidVis0'];?>">
                                                    по<input type="text" name="LipidVis" class="form-control" value="<? echo $_POST['LipidVis'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>

                                                    <label class="lb1">Ліпіди низької щільності (показник)</label></td>
                                                <td>
                                                    з<input type="text" name="LipidNiz0" class="form-control" value="<? echo $_POST['LipidNiz0'];?>">
                                                    по<input type="text" name="LipidNiz" class="form-control" value="<? echo $_POST['LipidNiz'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>

                                                    <label class="lb1">Тригліцериди (показник)</label></td>
                                                <td>
                                                    з<input type="text" name="Trigliz0" class="form-control" value="<? echo $_POST['Trigliz0'];?>">
                                                    по<input type="text" name="Trigliz" class="form-control" value="<? echo $_POST['Trigliz'];?>">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>

                                                    <label class="lb1">Аспартатамінотрансфераза (АСТ)</label></td>
                                                <td>
                                                    з<input type="text" name="Asparta0" class="form-control" value="<? echo $_POST['Asparta0'];?>">
                                                    по<input type="text" name="Asparta" class="form-control" value="<? echo $_POST['Asparta'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Аланінамінотрансфераза (АСТ)</label></td>
                                                <td>
                                                    з<input type="text" name="Alanin0" class="form-control" value="<? echo $_POST['Alanin0'];?>">
                                                    по<input type="text" name="Alanin" class="form-control" value="<? echo $_POST['Alanin'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">С-реактивний білок</label></td>
                                                <td>
                                                    з<input type="text" name="BelocS0" class="form-control" value="<? echo $_POST['BelocS0'];?>">
                                                    по<input type="text" name="BelocS" class="form-control" value="<? echo $_POST['BelocS'];?>">
                                                </td>
                                            </tr>
                                            <tr style="display: none;">
                                                <td>

                                                    <label class="lb1">C-пептид, показник:</label></td>
                                                <td>
                                                    з<input type="text" name="Peptid0" class="form-control" value="<? echo $_POST['Peptid0'];?>">
                                                    по<input type="text" name="Peptid" class="form-control" value="<? echo $_POST['Peptid'];?>">
                                                </td>
                                            </tr>
                                            <tr style="display: none;">
                                                <td>
                                                    <label class="lb1">C-пептид, одиниця виміру:</label></td>
                                                <td>
                                                    з<input type="text" name="PeptiEdIzm0" class="form-control" value="<? echo $_POST['PeptiEdIzm0'];?>">
                                                    по<input type="text" name="PeptiEdIzm" class="form-control" value="<? echo $_POST['PeptiEdIzm'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">C-пептид, одиниця виміру нг/мл:</label></td>
                                                <td>
                                                    з<input type="text" name="PeptidPmol0" class="form-control" value="<? echo $_POST['PeptidPmol0'];?>">
                                                    по<input type="text" name="PeptidPmol" class="form-control" value="<? echo $_POST['PeptidPmol'];?>">

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>

                                                    <label class="lb1">C-пептид, одиниця виміру nmol/l:</label></td>
                                                <td>
                                                    з<input type="text" name="PeptidNmol0" class="form-control" value="<? echo $_POST['PeptidNmol0'];?>">
                                                    по<input type="text" name="PeptidNmol" class="form-control" value="<? echo $_POST['PeptidNmol'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">C-пептід, Дата: дд-мм-рр:</label></td>
                                                <td>
                                                    з<input type="date" name="S_Pep0" class="form-control" value="<? echo $_POST['S_Pep0'];?>">
                                                    по<input type="date" name="S_Pep" class="form-control" value="<? echo $_POST['S_Pep'];?>">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">AT-GAD:</label></td><td>
                                                    з<input type="text" name="atGad0" class="form-control" value="<? echo $_POST['atGad0'];?>">
                                                    по<input type="text" name="atGad" class="form-control" value="<? echo $_POST['atGad'];?>">
                                                </td>

                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">AT-GAD дата:</label></td><td>
                                                    з<input type="date" name="atGaddat0" class="form-control" value="<? echo $_POST['atGaddat0'];?>">
                                                    по<input type="date" name="atGaddat" class="form-control" value="<? echo $_POST['atGaddat'];?>">
                                                </td>

                                            </tr>
                                        </table>
                                    </fieldset>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="bio">
                                    <fieldset style="margin-top: 30px;">
                                        <h4>7.Б. Біоматеріал</label>
                                            <div id="tab-content12"
                                        </h4>
                                       <table class='mainT' style="width: 80%;">
                                            <tr>
                                                <td>
                                                    <label class="lb1">Сиворотка?</label></td>
                                                <td style="width: 100%;">
                                                    <select name="Sivor" class="form-control">
                                                        <option value="--" <? if($_POST['Sivor']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['Sivor']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['Sivor']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Плазма?</label></td>
                                                <td>
                                                    <select name="Plazma" class="form-control">
                                                        <option value="--" <? if($_POST['Plazma']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['Plazma']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['Plazma']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Кров на ДНК?</label></td>
                                                <td>
                                                    <select name="DNK" class="form-control">
                                                        <option value="--" <? if($_POST['DNK']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['DNK']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['DNK']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Кров на РНК?</label></td>
                                                <td>
                                                    <input name="PHK" type="text" class="form-control" value="<? echo $_POST['PHK'];?>">

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Слина?</label></td>
                                                <td>
                                                    <select name="Sluna" class="form-control">
                                                        <option value="--" <? if($_POST['Sluna']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['Sluna']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['Sluna']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Біоптат кожи?</label></td>
                                                <td>
                                                    <select name="Biopat" class="form-control">
                                                        <option value="--" <? if($_POST['Biopat']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['Biopat']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Так" <? if($_POST['Biopat']=='Так'){ echo "selected";}?>>Так</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label>Примітки при заборі крові (зрив вакуумної пробки,
                                                        тощо)</label>


                                                </td>
                                                <td
                                                ">
                                                <textarea name="PrimZAbKrov" class="form-control" ><? echo $_POST['PrimZAbKrov'];?></textarea>
                                                </td>

                                            </tr>
                                        </table>
                                    </fieldset>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="lik">
                                    <fieldset style="margin-top: 30px;">
                                        <h4>8.А. Лікування</h4>
                                        <table class='mainT' id="forTab2" style="width: 80%;">
                                            <tr>
                                                <td><label class="lb1">Лікування цукрового
                                                        діабету</label></td>
                                                <td style="width: 100%;">
                                                    <select name="LechDIabet" class="form-control">
                                                        <option value="--" <? if($_POST['LechDIabet']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Не проводиться" <? if($_POST['LechDIabet']=='Не проводиться'){ echo "selected";}?>>Не проводиться</option>
                                                        <option value="Дієта" <? if($_POST['LechDIabet']=='Дієта'){ echo "selected";}?>>Дієта</option>
                                                        <option value="Таблетки" <? if($_POST['LechDIabet']=='Таблетки'){ echo "selected";}?>>Таблетки</option>
                                                        <option value="Інсулін" <? if($_POST['LechDIabet']=='Інсулін'){ echo "selected";}?>>Інсулін</option>
                                                        <option value="Таблетки + інсулін" <? if($_POST['LechDIabet']=='Таблетки + інсулін'){ echo "selected";}?>>Таблетки + інсулін</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Лікування діабету: інсулін (препарат, доза
                                                        прийому, кратність)</label></td>
                                                <td>
                                                    <select name="LechInsul" class="form-control" onchange="showIns(this.value)">
                                                        <option value="--" <? if($_POST['LechInsul']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Ні" <? if($_POST['LechInsul']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Базисна інсулінотерапія" <? if($_POST['LechInsul']=='Базисна інсулінотерапія'){ echo "selected";}?>>Базисна інсулінотерапія
                                                        </option>
                                                        <option value="Помпова інсулінотерапія" <? if($_POST['LechInsul']=='Помпова інсулінотерапія'){ echo "selected";}?>>Помпова
                                                            інсулінотерапія
                                                        </option>
                                                        <option value="Змішаний" <? if($_POST['LechInsul']=='Змішаний'){ echo "selected";}?>>Змішаний</option>

                                                    </select>
                                                </td>
                                            </tr>
                                            <tr class="showIns" id="insyl">
                                                <td>
                                                    <label class="lb1">Дата початку інсулінотерапії (дд- мм-рр)</label>
                                                </td>
                                                <td>
                                                    з<input type="date" name="datLechDiab0" id="datLechDiab0" class="form-control" value="<? echo $_POST['datLechDiab0'];?>">
                                                    по<input type="date" name="datLechDiab" id="datLechDiab" class="form-control" value="<? echo $_POST['datLechDiab'];?>">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label class="lb1">Лікування діабету: таблетки</label></td>
                                                <td>
                                                    <select name="diabLechTab" class="form-control">
                                                        <option value="--" <? if($_POST['diabLechTab']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Бігуаніди" <? if($_POST['diabLechTab']=='Бігуаніди'){ echo "selected";}?>>Бігуаніди</option>
                                                        <option value="Похідні сульфонілсечовини" <? if($_POST['diabLechTab']=='Похідні сульфонілсечовини'){ echo "selected";}?>>Похідні
                                                            сульфонілсечовини
                                                        </option>
                                                        <option value="Інгібітори ДПП-4" <? if($_POST['diabLechTab']=='Інгібітори ДПП-4'){ echo "selected";}?>>Інгібітори ДПП-4</option>
                                                        <option value="Інгібітори НЗКТГ-2" <? if($_POST['diabLechTab']=='Інгібітори НЗКТГ-2'){ echo "selected";}?>>Інгібітори НЗКТГ-2</option>
                                                        <option value="Тіазолідиндіони" <? if($_POST['diabLechTab']=='Тіазолідиндіони'){ echo "selected";}?>>Тіазолідиндіони</option>
                                                        <option value="Інгібітори a-глікозидази" <? if($_POST['diabLechTab']=='Інгібітори a-глікозидази'){ echo "selected";}?>>Інгібітори
                                                            a-глікозидази
                                                        </option>
                                                        <option value="Меглітінід" <? if($_POST['diabLechTab']=='Меглітінід'){ echo "selected";}?>>Меглітінід</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Лікування гіпертонії (препарат, доза прийому,
                                                        кратність)</label></td>
                                                <td>
                                                    <select name="LechGiper" class="form-control">
                                                        <option value="--" <? if($_POST['LechGiper']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Не проводиться" <? if($_POST['LechGiper']=='Не проводиться'){ echo "selected";}?>>Не проводиться</option>
                                                        <option value="Бета-блокатори" <? if($_POST['LechGiper']=='Бета-блокатори'){ echo "selected";}?>>Бета-блокатори</option>
                                                        <option value="ACE-інгібітори" <? if($_POST['LechGiper']=='ACE-інгібітори'){ echo "selected";}?>>ACE-інгібітори</option>
                                                        <option value="Сартани" <? if($_POST['LechGiper']=='Сартани'){ echo "selected";}?>>Сартани</option>
                                                        <option value="Кальцієві блокатори" <? if($_POST['LechGiper']=='Кальцієві блокатори'){ echo "selected";}?>>Кальцієві блокатори</option>
                                                        <option value="Діуретики" <? if($_POST['LechGiper']=='Діуретики'){ echo "selected";}?>>Діуретики</option>
                                                        <option value="Інші, назва" <? if($_POST['LechGiper']=='Інші, назва'){ echo "selected";}?>>Інші, назва</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="lb1">Лікування гіперліпідемії</label></td>
                                                <td>
                                                    <select name="LechLipidGiper" class="form-control">
                                                        <option value="--" <? if($_POST['LechLipidGiper']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Не проводиться" <? if($_POST['LechLipidGiper']=='Не проводиться'){ echo "selected";}?>>Не проводиться</option>
                                                        <option value="Статини" <? if($_POST['LechLipidGiper']=='Статини'){ echo "selected";}?>>Статини</option>
                                                        <option value="Фібрати" <? if($_POST['LechLipidGiper']=='Фібрати'){ echo "selected";}?>>Фібрати</option>

                                                        <option value="Інші, назва" <? if($_POST['LechLipidGiper']=='Інші, назва'){ echo "selected";}?>>Інші, назва</option>
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
                                                <td><label class="lb1">Генеалогічне дерево</label></td>
                                                <td style="width: 100%;">
                                                    <select name="gen" class="form-control">
                                                        <option value="--"  <? if($_POST['gen']=='--'){ echo "selected";}?>>--</option>
                                                        <option value="Так" <? if($_POST['gen']=='Так'){ echo "selected";}?>>Так</option>
                                                        <option value="Ні" <? if($_POST['gen']=='Ні'){ echo "selected";}?>>Ні</option>
                                                        <option value="Не знаю" <? if($_POST['gen']=='Не знаю'){ echo "selected";}?>>Не знаю</option>

                                                    </select>
                                                </td>

                                            </tr>

                                        </table>
                                    </fieldset>
                                </div>
                            </div>

                        </div>
                        <br>

                        <div class="controls">
                            <input type="submit" name="find" class="btn"
                                   style="border: 1px solid darkblue;color:darkblue;"
                                   value="Сформувати пошуковий запит">

                            <input type="reset" name="cancel" class="btn"
                                   style="border: 1px solid darkblue;color:darkblue;" value="Скинути пошук">
                        </div>
                        <br>
                        <div class="controls">
                            <a href="javascript:void(0)" class="btn btn-default prev" style="border: 1px solid darkblue;color:darkblue;"><
                                Попередня</a>
                            <a href="javascript:void(0)" class="btn btn-default next" style="border: 1px solid darkblue;color:darkblue;">Наступна
                                ></a>

                        </div>
                    </form>


                    <?php
                }
                ?>
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
            var el3 = document.getElementById('kakMikro');

            var el4 = document.getElementById('kakMikro1');
            var el9 = document.getElementById('kakMikro0');
            var el8 = document.getElementById('kakMikro10');

            var el1 = document.getElementById('datMikroL');
            var el6 = document.getElementById('datMikro');
            var el5 = document.getElementById('datMikroL0');


            var el7 = document.getElementById('datMikro0');
            el9.remove();
            el8.remove();
            el7.remove();
            el1.remove();
            el3.remove();
            el4.remove();
            el5.remove();
            el6.remove();
        }
        else{
            var el11=document.getElementById("kiMikro1");
            var el22=document.getElementById("kiMikro3");
            var lab11 = document.createElement("label");
            var select=document.createElement("input");
            lab11.innerText="Якщо так – показник, мг/л з";
            lab11.id="kakMikro";
            select.name="kakMikro";
            select.id="kakMikro1";
            select.name="kakMikro1";
            select.setAttribute("class", "form-control");
            el11.appendChild(lab11);
            el22.appendChild(select);
            var lab = document.createElement("label");
            var inp1 = document.createElement('input');

            var el110=document.getElementById("kiMikro10");
            var el220=document.getElementById("kiMikro30");
            var lab110 = document.createElement("label");
            var select0=document.createElement("input");
            lab110.innerText="Якщо так – показник, мг/л по";
            lab110.id="kakMikro0";
            select0.name="kakMikro0";
            select0.id="kakMikro10";
            select0.name="kakMikro10";
            select0.setAttribute("class", "form-control");
            el110.appendChild(lab110);
            el220.appendChild(select0);
            var lab0 = document.createElement("label");
            var inp10 = document.createElement('input');



            inp1.type = 'date';
            inp1.name = 'datMikro';
            inp1.id = 'datMikro';
            inp1.setAttribute("class", "form-control");
            inp1.setAttribute("width", "100px");
            lab.innerText='Дата з';
            lab.id='datMikroL';


            var sp=document.getElementById('kiMikro');
            var sp2=document.getElementById('kiMikro2');
            sp.appendChild(lab);
            sp2.appendChild(inp1);

            var lab0 = document.createElement("label");
            var inp10 = document.createElement('input');
            inp10.type = 'date';
            inp10.name = 'datMikro0';
            inp10.id = 'datMikro0';
            inp10.setAttribute("class", "form-control");
            inp10.setAttribute("width", "100px");
            lab0.innerText='Дата по';
            lab0.id='datMikroL0';
            var sp0=document.getElementById('kiMikro0');
            var sp20=document.getElementById('kiMikro20');
            sp0.appendChild(lab0);
            sp20.appendChild(inp10);

        }

    }
    function addAmput(el) {
        if(el=='Ні' || el=='--') {

            var el = document.getElementById('datAmput');
            var el1 = document.getElementById('datAmputL');
            var el0 = document.getElementById('datAmput0');
            var el10 = document.getElementById('datAmputL0');
            var el3 = document.getElementById('kakAmput');
            var el4 = document.getElementById('kakAmput1');
            el.remove();
            el1.remove();
            el0.remove();
            el10.remove();
            el3.remove();
            el4.remove();
        }
        else{
            var el = document.getElementById('datAmput');
            var el1 = document.getElementById('datAmputL');
            var el0 = document.getElementById('datAmput0');
            var el10 = document.getElementById('datAmputL0');
            var el3 = document.getElementById('kakAmput');
            var el4 = document.getElementById('kakAmput1');
            if(el) {
                el.remove();
                el1.remove();
                el0.remove();
                el10.remove();
                el3.remove();
                el4.remove();
            }
            var el11=document.getElementById("kiAmput1");
            var el22=document.getElementById("kiAmput3");
            var lab11 = document.createElement("label");
            var option= document.createElement("option");
            option.innerText="--";
            var option1= document.createElement("option");
            option1.innerText="Великий палець";
            var option2= document.createElement("option");
            option2.innerText="Стопа";
            var option3= document.createElement("option");
            option3.innerText="Коліно";
            var option4= document.createElement("option");
            option4.innerText="Стегно";
            var select=document.createElement("select");
            lab11.innerText="Локалізація ампутації?";
            lab11.id="kakAmput";
            select.appendChild(option);
            select.appendChild(option1);
            select.appendChild(option2);
            select.appendChild(option3);
            select.appendChild(option4);
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
            lab.innerText='Рік ампутації з';
            lab.id='datAmputL';
            var sp=document.getElementById('kiAmput');
            var sp2=document.getElementById('kiAmput2');
            sp.appendChild(lab);
            sp2.appendChild(inp1);

            var lab0 = document.createElement("label");
            var inp10 = document.createElement('input');
            inp10.type = 'text';
            inp10.name = 'datAmput0';
            inp10.id = 'datAmput0';
            inp10.setAttribute("class", "form-control");
            inp10.setAttribute("width", "100px");
            lab0.innerText='Рік ампутації по';
            lab0.id='datAmputL0';
            var sp0=document.getElementById('kiAmput0');
            var sp20=document.getElementById('kiAmput20');
            sp0.appendChild(lab0);
            sp20.appendChild(inp10);
        }

    }
    function addNejr(el) {
        if(el=='Ні' || el=='--') {

            var el = document.getElementById('datNejr');
            var el1 = document.getElementById('datNejrL');
            el.remove();
            el1.remove();

            var el0 = document.getElementById('datNejr0');
            var el10 = document.getElementById('datNejrL0');
            el0.remove();
            el10.remove();
        }
        else{

            var lab = document.createElement("label");
            var inp1 = document.createElement('input');
            inp1.type = 'date';
            inp1.name = 'datNejr';
            inp1.id = 'datNejr';
            inp1.setAttribute("class", "form-control");
            inp1.setAttribute("width", "100px");
            lab.innerText='Дата постановки з';
            lab.id='datNejrL';
            var sp=document.getElementById('kiNejr');
            var sp2=document.getElementById('kiNejr2');
            sp.appendChild(lab);
            sp2.appendChild(inp1);

            var lab0 = document.createElement("label");
            var inp10 = document.createElement('input');
            inp10.type = 'date';
            inp10.name = 'datNejr0';
            inp10.id = 'datNejr0';
            inp10.setAttribute("class", "form-control");
            inp10.setAttribute("width", "100px");
            lab0.innerText='Дата постановки по';
            lab0.id='datNejrL0';
            var sp0=document.getElementById('kiNejr0');
            var sp20=document.getElementById('kiNejr20');
            sp0.appendChild(lab0);
            sp20.appendChild(inp10);
        }

    }
    function addAngin(el) {
        if(el=='Ні' || el=='--') {

            var el = document.getElementById('datAngin');
            var el1 = document.getElementById('datAnginL');
            var el0 = document.getElementById('datAngin0');
            var el10 = document.getElementById('datAnginL0');
            var el3 = document.getElementById('kakAngio');
            var el4 = document.getElementById('kakAng');
            el.remove();
            el1.remove();
            el0.remove();
            el10.remove();
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
            option.innerText="--";
            var option1= document.createElement("option");
            option1.innerText="пальців стоп";
            var option2= document.createElement("option");
            option2.innerText="вище стопи до коліна";
            var option3= document.createElement("option");
            option3.innerText="вище коліна";
var select=document.createElement("select");
            lab11.innerText="Яка ангіопатія?";
lab11.id="kakAng";
select.appendChild(option);
            select.appendChild(option1);
            select.appendChild(option2);
            select.appendChild(option3);
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
            lab.innerText='Дата постановки з';
            lab.id='datAnginL';
            var sp=document.getElementById('kiAngin');
            var sp2=document.getElementById('kiAngin2');
            sp.appendChild(lab);
            sp2.appendChild(inp1);

            var lab0 = document.createElement("label");
            var inp10 = document.createElement("input");
            inp10.type = 'date';
            inp10.name = 'datAngin0';
            inp10.id = 'datAngin0';

            inp10.setAttribute("class", "form-control");
            inp10.setAttribute("width", "100px");
            lab0.innerText='Дата постановки по';
            lab0.id='datAnginL0';
            var sp0=document.getElementById('kiAngin0');
            var sp20=document.getElementById('kiAngin20');
            sp0.appendChild(lab0);
            sp20.appendChild(inp10);
        }

    }
    function addDializ(el) {
        if(el=='Ні' || el=='--') {

            var el = document.getElementById('datDializ');
            var el1 = document.getElementById('datDializL');
            el.remove();
            el1.remove();
            var el0 = document.getElementById('datDializ0');
            var el10 = document.getElementById('datDializL0');
            el0.remove();
            el10.remove();
        }
        else{

            var lab = document.createElement("label");
            var inp1 = document.createElement('input');
            inp1.type = 'date';
            inp1.name = 'datDializ';
            inp1.id = 'datDializ';
            inp1.setAttribute("class", "form-control");
            inp1.setAttribute("width", "100px");
            lab.innerText='Дата постановки з';
            lab.id='datDializL';
            var sp=document.getElementById('kiDializ');
            var sp2=document.getElementById('kiDializ2');
            sp.appendChild(lab);
            sp2.appendChild(inp1);

            var lab0 = document.createElement("label");
            var inp10= document.createElement('input');
            inp10.type = 'date';
            inp10.name = 'datDializ0';
            inp10.id = 'datDializ0';
            inp10.setAttribute("class", "form-control");
            inp10.setAttribute("width", "100px");
            lab0.innerText='Дата постановки по';
            lab0.id='datDializL0';
            var sp0=document.getElementById('kiDializ0');
            var sp20=document.getElementById('kiDializ20');
            sp0.appendChild(lab0);
            sp20.appendChild(inp10);
        }

    }
    function addPochSt(el) {
        if(el=='Ні' || el=='--') {

            var el = document.getElementById('datPochSt');
            var el1 = document.getElementById('datPochStL');
            el.remove();
            el1.remove();
            var el0 = document.getElementById('datPochSt0');
            var el10 = document.getElementById('datPochStL0');
            el0.remove();
            el10.remove();
        }
        else{

            var lab = document.createElement("label");
            var inp1 = document.createElement('input');
            inp1.type = 'date';
            inp1.name = 'datPochSt';
            inp1.id = 'datPochSt';
            inp1.setAttribute("class", "form-control");
            inp1.setAttribute("width", "100px");
            lab.innerText='Дата постановки з';
            lab.id='datPochStL';
            var sp=document.getElementById('kiPochSt');
            var sp2=document.getElementById('kiPochSt2');
            sp.appendChild(lab);
            sp2.appendChild(inp1);

            var lab0= document.createElement("label");
            var inp10 = document.createElement('input');
            inp10.type = 'date';
            inp10.name = 'datPochSt0';
            inp10.id = 'datPochSt0';
            inp10.setAttribute("class", "form-control");
            inp10.setAttribute("width", "100px");
            lab0.innerText='Дата постановки по';
            lab0.id='datPochStL0';
            var sp0=document.getElementById('kiPochSt0');
            var sp20=document.getElementById('kiPochSt20');
            sp0.appendChild(lab0);
            sp20.appendChild(inp10);
        }

    }
    function addPochNEd(el) {
        if(el=='Ні' || el=='--') {

            var el = document.getElementById('datPochNEd');
            var el1 = document.getElementById('datPochNEdL');
            el.remove();
            el1.remove();
            var el0 = document.getElementById('datPochNEd0');
            var el10 = document.getElementById('datPochNEdL0');
            el0.remove();
            el10.remove();
        }
        else{

            var lab = document.createElement("label");
            var inp1 = document.createElement('input');
            inp1.type = 'date';
            inp1.name = 'datPochNEd';
            inp1.id = 'datPochNEd';
            inp1.setAttribute("class", "form-control");
            inp1.setAttribute("width", "100px");
            lab.innerText='Дата постановки з';
            lab.id='datPochNEdL';
            var sp=document.getElementById('kiPochNEd');
            var sp2=document.getElementById('kiPochNEd2');
            sp.appendChild(lab);
            sp2.appendChild(inp1);

            var lab0 = document.createElement("label");
            var inp10 = document.createElement('input');
            inp10.type = 'date';
            inp10.name = 'datPochNEd0';
            inp10.id = 'datPochNEd0';
            inp10.setAttribute("class", "form-control");
            inp10.setAttribute("width", "100px");
            lab0.innerText='Дата постановки по';
            lab0.id='datPochNEdL0';
            var sp0=document.getElementById('kiPochNEd0');
            var sp20=document.getElementById('kiPochNEd20');
            sp0.appendChild(lab0);
            sp20.appendChild(inp10);

        }

    }
    function addNefro(el) {
        if(el=='Ні' || el=='--') {

            var el = document.getElementById('datNefro');
            var el1 = document.getElementById('datNefroL');
            el.remove();
            el1.remove();
            var el0 = document.getElementById('datNefro0');
            var el10 = document.getElementById('datNefroL0');
            el0.remove();
            el10.remove();
        }
        else{

            var lab = document.createElement("label");
            var inp1 = document.createElement('input');
            inp1.type = 'date';
            inp1.name = 'datNefro';
            inp1.id = 'datNefro';
            inp1.setAttribute("class", "form-control");
            inp1.setAttribute("width", "100px");
            lab.innerText='Дата постановки з';
            lab.id='datNefroL';
            var sp=document.getElementById('kiNefro');
            var sp2=document.getElementById('kiNefro2');
            sp.appendChild(lab);
            sp2.appendChild(inp1);

            var lab0 = document.createElement("label");
            var inp10 = document.createElement('input');
            inp10.type = 'date';
            inp10.name = 'datNefro0';
            inp10.id = 'datNefro0';
            inp10.setAttribute("class", "form-control");
            inp10.setAttribute("width", "100px");
            lab0.innerText='Дата постановки по';
            lab0.id='datNefroL0';
            var sp0=document.getElementById('kiNefro0');
            var sp20=document.getElementById('kiNefro20');
            sp0.appendChild(lab0);
            sp20.appendChild(inp10);
        }

    }
    function addGlauk(el) {
        if(el=='Ні' || el=='--') {

            var el = document.getElementById('datGlauk');
            var el1 = document.getElementById('datGlaukL');
            el.remove();
            el1.remove();
            var el0 = document.getElementById('datGlauk0');
            var el10 = document.getElementById('datGlaukL0');
            el0.remove();
            el10.remove();
        }
        else{

            var lab = document.createElement("label");
            var inp1 = document.createElement('input');
            inp1.type = 'date';
            inp1.name = 'datGlauk';
            inp1.id = 'datGlauk';
            inp1.setAttribute("class", "form-control");
            inp1.setAttribute("width", "100px");
            lab.innerText='Дата постановки з';
            lab.id='datGlaukL';
            var sp=document.getElementById('kiGlauk');
            var sp2=document.getElementById('kiGlauk2');
            sp.appendChild(lab);
            sp2.appendChild(inp1);

            var lab0 = document.createElement("label");
            var inp10 = document.createElement('input');
            inp10.type = 'date';
            inp10.name = 'datGlauk0';
            inp10.id = 'datGlauk0';
            inp10.setAttribute("class", "form-control");
            inp10.setAttribute("width", "100px");
            lab0.innerText='Дата постановки по';
            lab0.id='datGlaukL0';
            var sp0=document.getElementById('kiGlauk0');
            var sp20=document.getElementById('kiGlauk20');
            sp0.appendChild(lab0);
            sp20.appendChild(inp10);
        }

    }
    function addMal(el) {
        if(el=='Ні' || el=='--') {

            var el = document.getElementById('datMal');
            var el1 = document.getElementById('datMalL');
            el.remove();
            el1.remove();
            var el0 = document.getElementById('datMal0');
            var el10= document.getElementById('datMalL0');
            el0.remove();
            el10.remove();
        }
        else{

            var lab = document.createElement("label");
            var inp1 = document.createElement('input');
            inp1.type = 'date';
            inp1.name = 'datMal';
            inp1.id = 'datMal';
            inp1.setAttribute("class", "form-control");
            inp1.setAttribute("width", "100px");
            lab.innerText='Дата постановки з';
            lab.id='datMalL';
            var sp=document.getElementById('kiMal');
            var sp2=document.getElementById('kiMal2');
            sp.appendChild(lab);
            sp2.appendChild(inp1);


            var lab0 = document.createElement("label");
            var inp10 = document.createElement('input');
            inp10.type = 'date';
            inp10.name = 'datMal0';
            inp10.id = 'datMal0';
            inp10.setAttribute("class", "form-control");
            inp10.setAttribute("width", "100px");
            lab0.innerText='Дата постановки по';
            lab0.id='datMalL0';
            var sp0=document.getElementById('kiMal0');
            var sp20=document.getElementById('kiMal20');
            sp0.appendChild(lab0);
            sp20.appendChild(inp10);
        }

    }
    function addKatar(el) {
        if(el=='Ні' || el=='--') {

            var el = document.getElementById('datKatar');
            var el1 = document.getElementById('datKatarL');
            el.remove();
            el1.remove();
            var el0 = document.getElementById('datKatar0');
            var el10 = document.getElementById('datKatarL0');
            el0.remove();
            el10.remove();
        }
        else{

            var lab = document.createElement("label");
            var inp1 = document.createElement('input');
            inp1.type = 'date';
            inp1.name = 'datKatar';
            inp1.id = 'datKatar';
            inp1.setAttribute("class", "form-control");
            inp1.setAttribute("width", "100px");
            lab.innerText='Дата постановки з';
            lab.id='datKatarL';
            var sp=document.getElementById('kiKatar');
            var sp2=document.getElementById('kiKatar2');
            sp.appendChild(lab);
            sp2.appendChild(inp1);

            var lab0 = document.createElement("label");
            var inp10 = document.createElement('input');
            inp10.type = 'date';
            inp10.name = 'datKatar0';
            inp10.id = 'datKatar0';
            inp10.setAttribute("class", "form-control");
            inp10.setAttribute("width", "100px");
            lab0.innerText='Дата постановки по';
            lab0.id='datKatarL0';
            var sp0=document.getElementById('kiKatar0');
            var sp20=document.getElementById('kiKatar20');
            sp0.appendChild(lab0);
            sp20.appendChild(inp10);
        }

    }
    function addLazer(el) {
        if(el=='Ні' || el=='--') {

            var el = document.getElementById('datLazer');
            var el1 = document.getElementById('datLazerL');
            el.remove();
            el1.remove();
            var el0 = document.getElementById('datLazer0');
            var el10 = document.getElementById('datLazerL0');
            el0.remove();
            el10.remove();
        }
        else{

            var lab = document.createElement("label");
            var inp1 = document.createElement('input');
            inp1.type = 'date';
            inp1.name = 'datLazer';
            inp1.id = 'datLazer';
            inp1.setAttribute("class", "form-control");
            inp1.setAttribute("width", "100px");
            lab.innerText='Дата постановки з';
            lab.id='datLazerL';
            var sp=document.getElementById('kiLazer');
            var sp2=document.getElementById('kiLazer2');
            sp.appendChild(lab);
            sp2.appendChild(inp1);
            var lab0 = document.createElement("label");
            var inp10 = document.createElement('input');
            inp10.type = 'date';
            inp10.name = 'datLazer0';
            inp10.id = 'datLazer0';
            inp10.setAttribute("class", "form-control");
            inp10.setAttribute("width", "100px");
            lab0.innerText='Дата постановки по';
            lab0.id='datLazerL0';
            var sp0=document.getElementById('kiLazer0');
            var sp20=document.getElementById('kiLazer20');
            sp0.appendChild(lab0);
            sp20.appendChild(inp10);
        }

    }
    function addSlep(el) {
        if(el=='Ні' || el=='--') {

            var el = document.getElementById('datSlep');
            var el1 = document.getElementById('datSlepL');
            el.remove();
            el1.remove();
            var el0 = document.getElementById('datSlep0');
            var el10 = document.getElementById('datSlepL0');
            el0.remove();
            el10.remove();
        }
        else{

            var lab = document.createElement("label");
            var inp1 = document.createElement('input');
            inp1.type = 'date';
            inp1.name = 'datSlep';
            inp1.id = 'datSlep';
            inp1.setAttribute("class", "form-control");
            inp1.setAttribute("width", "100px");
            lab.innerText='Дата постановки з';
            lab.id='datSlepL';
            var sp=document.getElementById('kiSlep');
            var sp2=document.getElementById('kiSlep2');
            sp.appendChild(lab);
            sp2.appendChild(inp1);
            var lab0 = document.createElement("label");
            var inp10 = document.createElement('input');
            inp10.type = 'date';
            inp10.name = 'datSlep0';
            inp10.id = 'datSlep0';
            inp10.setAttribute("class", "form-control");
            inp10.setAttribute("width", "100px");
            lab0.innerText='Дата постановки по';
            lab0.id='datSlepL0';
            var sp0=document.getElementById('kiSlep0');
            var sp20=document.getElementById('kiSlep20');
            sp0.appendChild(lab0);
            sp20.appendChild(inp10);
        }

    }
    function addPrep2(el) {
        if(el=='Ні' || el=='--') {

            var el = document.getElementById('datPrep2');
            var el1 = document.getElementById('datPrep2L');
            el.remove();
            el1.remove();
            var el0 = document.getElementById('datPrep20');
            var el10 = document.getElementById('datPrep2L0');
            el0.remove();
            el10.remove();
        }
        else{

            var lab = document.createElement("label");
            var inp1 = document.createElement('input');
            inp1.type = 'date';
            inp1.name = 'datPrep2';
            inp1.id = 'datPrep2';
            inp1.setAttribute("class", "form-control");
            inp1.setAttribute("width", "100px");
            lab.innerText='Дата постановки з';
            lab.id='datPrep2L';
            var sp=document.getElementById('kiPrep12');
            var sp2=document.getElementById('kiPrep22');

            sp.appendChild(lab);
            sp2.appendChild(inp1);
            var lab0 = document.createElement("label");
            var inp10 = document.createElement('input');
            inp10.type = 'date';
            inp10.name = 'datPrep20';
            inp10.id = 'datPrep20';
            inp10.setAttribute("class", "form-control");
            inp10.setAttribute("width", "100px");
            lab0.innerText='Дата постановки по';
            lab0.id='datPrep2L0';
            var sp0=document.getElementById('kiPrep120');
            var sp20=document.getElementById('kiPrep220');

            sp0.appendChild(lab0);
            sp20.appendChild(inp10);
        }

    }
    function addPrep(el) {
        if(el=='Ні' || el=='--') {

            var el = document.getElementById('datPrep');
            var el1 = document.getElementById('datPrepL');
            el.remove();
            el1.remove();
            var el0 = document.getElementById('datPrep0');
            var el10 = document.getElementById('datPrepL0');
            el0.remove();
            el10.remove();
        }
        else{

            var lab = document.createElement("label");
            var inp1 = document.createElement('input');
            inp1.type = 'date';
            inp1.name = 'datPrep';
            inp1.id = 'datPrep';
            inp1.setAttribute("class", "form-control");
            inp1.setAttribute("width", "100px");
            lab.innerText='Дата постановки з';
            lab.id='datPrepL';
            var sp=document.getElementById('kiPrep');
            var sp2=document.getElementById('kiPrep2');
            sp.appendChild(lab);
            sp2.appendChild(inp1);
            var lab0 = document.createElement("label");
            var inp10 = document.createElement('input');
            inp10.type = 'date';
            inp10.name = 'datPrep0';
            inp10.id = 'datPrep0';
            inp10.setAttribute("class", "form-control");
            inp10.setAttribute("width", "100px");
            lab0.innerText='Дата постановки по';
            lab0.id='datPrepL0';
            var sp0=document.getElementById('kiPrep0');
            var sp20=document.getElementById('kiPrep20');
            sp0.appendChild(lab0);
            sp20.appendChild(inp10);
        }

    }
    function addNep(el) {
        if(el=='Ні' || el=='--') {

            var el = document.getElementById('datNep');
            var el1 = document.getElementById('datNepL');
            el.remove();
            el1.remove();
            var el0 = document.getElementById('datNep0');
            var el10 = document.getElementById('datNepL0');
            el0.remove();
            el10.remove();
        }
        else{

            var lab = document.createElement("label");
            var inp1 = document.createElement('input');
            inp1.type = 'date';
            inp1.name = 'datNep';
            inp1.id = 'datNep';
            inp1.setAttribute("class", "form-control");
            inp1.setAttribute("width", "100px");
            lab.innerText='Дата постановки з';
            lab.id='datNepL';
            var sp=document.getElementById('kiNep');
            var sp2=document.getElementById('kiNep2');
            sp.appendChild(lab);
            sp2.appendChild(inp1);
            var lab0 = document.createElement("label");
            var inp10 = document.createElement('input');
            inp10.type = 'date';
            inp10.name = 'datNep0';
            inp10.id = 'datNep0';
            inp10.setAttribute("class", "form-control");
            inp10.setAttribute("width", "100px");
            lab0.innerText='Дата постановки по';
            lab0.id='datNepL0';
            var sp0=document.getElementById('kiNep0');
            var sp20=document.getElementById('kiNep20');
            sp0.appendChild(lab0);
            sp20.appendChild(inp10);
        }

    }
    function addDiab(el) {
        if(el=='Ні' || el=='--') {

            var el = document.getElementById('datDiab');
            var el1 = document.getElementById('datDiabL');
            el.remove();
            el1.remove();
            var el0 = document.getElementById('datDiab0');
            var el10 = document.getElementById('datDiabL0');
            el0.remove();
            el10.remove();
        }
        else{

            var lab = document.createElement("label");
            var inp1 = document.createElement('input');
            inp1.type = 'date';
            inp1.name = 'datDiab';
            inp1.id = 'datDiab';
            inp1.setAttribute("class", "form-control");
            inp1.setAttribute("width", "100px");
            lab.innerText='Дата постановки з';
            lab.id='datDiabL';
            var sp=document.getElementById('kiDiab');
            var sp2=document.getElementById('kiDiab2');
            sp.appendChild(lab);
            sp2.appendChild(inp1);
            var lab0 = document.createElement("label");
            var inp10 = document.createElement('input');
            inp10.type = 'date';
            inp10.name = 'datDiab0';
            inp10.id = 'datDiab0';
            inp10.setAttribute("class", "form-control");
            inp10.setAttribute("width", "100px");
            lab0.innerText='Дата постановки по';
            lab0.id='datDiabL0';
            var sp0=document.getElementById('kiDiab0');
            var sp20=document.getElementById('kiDiab20');
            sp0.appendChild(lab0);
            sp20.appendChild(inp10);
        }

    }
    function addStad(el) {
        if(el=='Ні' || el=='--') {

            var el = document.getElementById('datStad');
            var el1 = document.getElementById('datStadL');
            el.remove();
            el1.remove();
            var el0 = document.getElementById('datStad0');
            var el10 = document.getElementById('datStadL0');
            el0.remove();
            el10.remove();
        }
        else{
            var el = document.getElementById('datStad');
            var el1 = document.getElementById('datStadL');
            var el0 = document.getElementById('datStad0');
            var el10 = document.getElementById('datStadL0');
            if(el) {
                el.remove();
                el1.remove();
                el0.remove();
                el10.remove();
            }
                var lab = document.createElement("label");
                var inp1 = document.createElement('input');
                inp1.type = 'text';
                inp1.name = 'datStad';
                inp1.id = 'datStad';
                inp1.setAttribute("class", "form-control");
                inp1.setAttribute("width", "100px");
                lab.innerText='Дата постановки (рік) з';
               lab.id='datStadL';
                var sp=document.getElementById('kiStad');
                var sp2=document.getElementById('kiStad2');
                sp.appendChild(lab);
                sp2.appendChild(inp1);
            var lab0 = document.createElement("label");
            var inp10 = document.createElement('input');
            inp10.type = 'text';
            inp10.name = 'datStad0';
            inp10.id = 'datStad0';
            inp10.setAttribute("class", "form-control");
            inp10.setAttribute("width", "100px");
            lab0.innerText='Дата постановки (рік) по';
            lab0.id='datStadL0';
            var sp=document.getElementById('kiStad0');
            var sp2=document.getElementById('kiStad20');
            sp.appendChild(lab0);
            sp2.appendChild(inp10);
            }

        }


    function addIn1(el) {
        if(el=='Так' ){
            var table = document.getElementById('tttIns');
            var kol = table.rows.length;
            kol = Number(kol);

            // var tbody = document.getElementById('ttt').getElementsByTagName("TBODY")[0];
            //  var tab = document.getElementById('ttt');
            //   var row = document.createElement("tr");
            //   var td = document.createElement("td");
            var lab = document.createElement("label");
            var inp1 = document.createElement('select');
            var opt=document.createElement("option");
            var opt1=document.createElement("option");
            var opt2=document.createElement("option");
            var opt0=document.createElement("option");
            opt.text='1';
            opt1.text='2';
            opt2.text='3';
            opt0.text='';
            inp1.appendChild(opt0);
            inp1.appendChild(opt);
            inp1.appendChild(opt1);
            inp1.appendChild(opt2);
            //inp1.type = 'text';
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

                var rowD='rowDatIns';
            var rowD1='rowDatIns1';
                var idD='datIns';
                var idDL='datInsL';
                var elD=document.getElementById(idD);
                var elDL=document.getElementById(idDL);
                var rowDat=document.getElementById(rowD);
            var rowDat1=document.getElementById(rowD1);
                elD.remove();
                elDL.remove();
                rowDat.remove(); rowDat1.remove();


        }

    }
    function addPol1(kolIns) {
if(kolIns==''){
    var rowD = 'rowDatIns';
    var rowD1 = 'rowDatIns1';
    var idD = 'datIns';
    var idDL = 'datInsL';
    var idD0 = 'datIns0';
    var idDL0 = 'datInsL0';
    var elD = document.getElementById(idD);
    var elDL = document.getElementById(idDL);
    var elD0 = document.getElementById(idD0);
    var elDL0 = document.getElementById(idDL0);
    var rowDat = document.getElementById(rowD);
    var rowDat1 = document.getElementById(rowD1);
    if (elD) {
        elD.remove();
        elDL.remove();
        rowDat.remove();
    }
    if (elD0) {
        elD0.remove();
        elDL0.remove();
        rowDat1.remove();
    }
}else {
    var rowD = 'rowDatIns';
    var rowD1 = 'rowDatIns1';
    var idD = 'datIns';
    var idDL = 'datInsL';
    var idD0 = 'datIns0';
    var idDL0 = 'datInsL0';
    var elD = document.getElementById(idD);
    var elDL = document.getElementById(idDL);
    var elD0 = document.getElementById(idD0);
    var elDL0 = document.getElementById(idDL0);
    var rowDat = document.getElementById(rowD);
    var rowDat1 = document.getElementById(rowD1);
    if (elD) {
        elD.remove();
        elDL.remove();
        rowDat.remove();
            }
    if (elD0) {
        elD0.remove();
        elDL0.remove();
        rowDat1.remove();
    }
    var tbody = document.getElementById('tttIns').getElementsByTagName("TBODY")[0];
    var tab = document.getElementById('tttIns');


    var td = document.createElement("td");
    var tr1 = document.createElement("tr");
    var row = document.createElement("tr");
    var lab = document.createElement("label");
    var inp1 = document.createElement('input');
    row.id = 'rowDatIns';
    tr1.id = 'rowDatIns1';
    inp1.type = 'text';
    inp1.name = 'datIns';
    inp1.id = 'datIns';
    inp1.setAttribute("class", "form-control");

    lab.innerText = 'Рік інсульту з';
    lab.id = 'datInsL';
    td.appendChild(lab);
    td.appendChild(inp1);
    row.appendChild(td);
    //row.appendChild(td1);


    var td0 = document.createElement("td");
    var td10 = document.createElement("td");

    var lab0 = document.createElement("label");
    var inp10 = document.createElement('input');

    inp10.type = 'text';
    inp10.name = 'datIns0';
    inp10.id = 'datIns0';
    inp10.setAttribute("class", "form-control");

    lab0.innerText = 'Рік інсульту по';
    lab0.id = 'datInsL0';
    td0.appendChild(lab0);
    td0.appendChild(inp10);
    tr1.appendChild(td0);
    // row.appendChild(td10);
    tbody.appendChild(row);
    tbody.appendChild(tr1);
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
           var inp1 = document.createElement('select');
           var opt=document.createElement("option");
           var opt1=document.createElement("option");
           var opt2=document.createElement("option");
           var opt0=document.createElement("option");
           opt.text='1';
           opt1.text='2';
           opt2.text='3';
           opt0.text='';
           inp1.appendChild(opt0);
           inp1.appendChild(opt);
           inp1.appendChild(opt1);
           inp1.appendChild(opt2);
           //inp1.type = 'text';
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

              var rowD='rowDat';
           var rowDk='rowDatk';
              var idD='datInf';
              var idDL='datInfL';
              var elD=document.getElementById(idD);
              var elDL=document.getElementById(idDL);
              var rowDat=document.getElementById(rowD);
           var rowDatk=document.getElementById(rowDk);
              elD.remove();
              elDL.remove();
              rowDat.remove();
           rowDatk.remove();


       }

    }
    function addPol(kolInf) {
if(kolInf==''){
    var rowD = 'rowDat';
    var rowDat = document.getElementById(rowD);
    var idD = 'datInf';
    var idDL = 'datInfL';

    var elD = document.getElementById(idD);
    var elDL = document.getElementById(idDL);

    if (elD) {

        elD.remove();
        elDL.remove();
        rowDat.remove();
    }
    var rowDk = 'rowDatk';
    var rowDatk = document.getElementById(rowDk);
    var idD0 = 'datInf0';
    var idDL0 = 'datInfL0';
    var elD0 = document.getElementById(idD0);
    var elDL0 = document.getElementById(idDL0);

    if (elD0) {

        elD0.remove();
        elDL0.remove();
        rowDatk.remove();
    }

}else {
    var rowD = 'rowDat';
    var rowDat = document.getElementById(rowD);
    var idD = 'datInf';
    var idDL = 'datInfL';

    var elD = document.getElementById(idD);
    var elDL = document.getElementById(idDL);

    if (elD) {

        elD.remove();
        elDL.remove();
        rowDat.remove();
    }
    var rowDk = 'rowDatk';
    var rowDatk = document.getElementById(rowDk);
    var idD0 = 'datInf0';
    var idDL0 = 'datInfL0';
    var elD0 = document.getElementById(idD0);
    var elDL0 = document.getElementById(idDL0);

    if (elD0) {

        elD0.remove();
        elDL0.remove();
        rowDatk.remove();
    }
    var tbody = document.getElementById('ttt').getElementsByTagName("TBODY")[0];
    var tab = document.getElementById('ttt');


    var td = document.createElement("td");
    var tr1 = document.createElement("tr");
    var row = document.createElement("tr");
    var lab = document.createElement("label");
    var inp1 = document.createElement('input');
    row.id = 'rowDat';
    tr1.id = 'rowDatk';
    inp1.type = 'text';
    inp1.name = 'datInf';
    inp1.id = 'datInf';
    inp1.setAttribute("class", "form-control");

    lab.innerText = 'Рік інфаркту з';
    lab.id = 'datInfL';
    td.appendChild(lab);
    td.appendChild(inp1);
    row.appendChild(td);
    var td0 = document.createElement("td");
    var td10 = document.createElement("td1");

    var lab0 = document.createElement("label");
    var inp10 = document.createElement('input');
    inp10.type = 'text';
    inp10.name = 'datInf0';
    inp10.id = 'datInf0';
    inp10.setAttribute("class", "form-control");

    lab0.innerText = 'Рік інфаркту по';
    lab0.id = 'datInfL0';
    td0.appendChild(lab0);
    td0.appendChild(inp10);
    tr1.appendChild(td0);

    tbody.appendChild(row);
    tbody.appendChild(tr1);
}
    }
    function ss6(el) {
        if (el.value == 'Так') {
            document.getElementById('h12').style.display = 'block';
            document.getElementById('h13').style.display = 'block';
        }
        else {
            document.getElementById('h13').value = '';
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

    document.getElementById('h1').value='';
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
            document.getElementById('h3').value='--';
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
            document.getElementById('h5').value='';
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
            document.getElementById('h7').value='';
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
            document.getElementById('h9').value='';
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
            document.getElementById('h11').value='';
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

