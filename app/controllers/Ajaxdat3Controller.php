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

foreach($_POST as $key =>$item):

    if($item!='' and $item!='--' and !empty($item) and $item!='Здійснити пошук') {

        if($key=='datB0') {
            if (!empty($_POST['datB0'])) {

                $ss = $ss . "datB>='{$item}' and ";

            }

        }
        else if($key=='datB'){
            if (!empty($_POST['datB'])) {

                $ss = $ss . "datB<='{$item}' and ";

            }
        }
        /*1.А телефон*/
        else if($key=='phone0'){
            if (!empty($_POST['phone0'])) {

                $ss = $ss . "phone>='{$item}' and ";

            }
        }
        else if($key=='phone'){
            if (!empty($_POST['phone'])) {

                $ss = $ss . "phone<='{$item}' and ";

            }
        }
        /*1.А.  Вага при народженні (кг):*/
        else if($key=='vagaPN0'){
            if (!empty($_POST['vagaPN0'])) {

                $ss = $ss . "vagaPN>='{$item}' and ";

            }
        }
        else if($key=='vagaPN'){
            if (!empty($_POST['vagaPN'])) {

                $ss = $ss . "vagaPN<='{$item}' and ";

            }
        }
        /*------------------*/
        else if($key=='datBOtez0'){
            if (!empty($_POST['datBOtez0'])) {

                $ss = $ss . "datBOtez>='{$item}' and ";

            }
        }
        else if($key=='datBOtez'){
            if (!empty($_POST['datBOtez'])) {

                $ss = $ss . "datBOtez<='{$item}' and ";

            }
        }
        else if($key=='datBM0'){
            if (!empty($_POST['datBM0'])) {

                $ss = $ss . "datBM>='{$item}' and ";

            }
        }
        else if($key=='datBM'){
            if (!empty($_POST['datBM'])) {

                $ss = $ss . "datBM<='{$item}' and ";

            }
        }
        else if($key=='ves0'){
            if (!empty($_POST['ves0'])) {

                $ss = $ss . "ves>='{$item}' and ";

            }
        }
        else if($key=='ves'){
            if (!empty($_POST['ves'])) {

                $ss = $ss . "ves<='{$item}' and ";

            }
        }
        else if($key=='rost0'){
            if (!empty($_POST['rost0'])) {

                $ss = $ss . "rost>='{$item}' and ";

            }
        }
        else if($key=='rost'){
            if (!empty($_POST['rost'])) {

                $ss = $ss . "rost<='{$item}' and ";

            }
        }
        else if($key=='tal0'){
            if (!empty($_POST['talt0'])) {

                $ss = $ss . "tal>='{$item}' and ";

            }
        }
        else if($key=='tal'){
            if (!empty($_POST['tal'])) {

                $ss = $ss . "tal<='{$item}' and ";

            }
        }
        else if($key=='bed0'){
            if (!empty($_POST['bed0'])) {

                $ss = $ss . "bed>='{$item}' and ";

            }
        }
        else if($key=='bed'){
            if (!empty($_POST['bed'])) {

                $ss = $ss . "bed<'{$item}' and ";

            }
        }
        else if($key=='index0'){
            if (!empty($_POST['index0'])) {

                $ss = $ss . "`index>='{$item}' and ";

            }
        }
        else if($key=='index'){
            if (!empty($_POST['index'])) {

                $ss = $ss . "`index<='{$item}' and ";

            }
        }
        /*Систолічний артеріальний тиск (сидячи)*/
        else if($key=='systisk0'){
            if (!empty($_POST['systisk0'])) {

                $ss = $ss . "systisk>='{$item}' and ";

            }
        }
        else if($key=='systisk'){
            if (!empty($_POST['systisk'])) {

                $ss = $ss . "systisk<='{$item}' and ";

            }
        }
        /*   Діастолічний артеріальний тиск (сидячи)*/
        else if($key=='disttisk0'){
            if (!empty($_POST['disttisk0'])) {

                $ss = $ss . "disttisk>='{$item}' and ";

            }
        }
        else if($key=='disttisk'){
            if (!empty($_POST['disttisk'])) {

                $ss = $ss . "disttisk<='{$item}' and ";

            }
        }
        /*_____________________ */
        else if($key=='smokeKol0'){
            if (!empty($_POST['smokeKol0'])) {

                $ss = $ss . "smokeKol>='{$item}' and ";

            }
        }
        else if($key=='smokeKol'){
            if (!empty($_POST['smokeKol'])) {

                $ss = $ss . "smokeKol<='{$item}' and ";

            }
        }
        else if($key=='yearD0'){
            if (!empty($_POST['yearD0'])) {

                $ss = $ss . "yearD>='{$item}' and ";

            }
        }
        else if($key=='yearD'){
            if (!empty($_POST['yearD'])) {

                $ss = $ss . "yearD<='{$item}' and ";

            }
        }
        else if($key=='vekD0'){
            if (!empty($_POST['vekD0'])) {

                $ss = $ss . "vekD>='{$item}' and ";

            }
        }
        else if($key=='vekD'){
            if (!empty($_POST['vekD'])) {

                $ss = $ss . "vekD<='{$item}' and ";

            }
        }
        else if($key=='longD0'){
            if (!empty($_POST['longD0'])) {

                $ss = $ss . "longD>='{$item}' and ";

            }
        }
        else if($key=='longD'){
            if (!empty($_POST['longD'])) {

                $ss = $ss . "longD<='{$item}' and ";

            }
        }

        /*11111111111111*/


        else if($key=='glaz0'){
            if (!empty($_POST['glaz0'])) {

                $ss = $ss . "glaz>='{$item}' and ";

            }
        }
        else if($key=='glaz'){
            if (!empty($_POST['glaz'])) {

                $ss = $ss . "glaz<='{$item}' and ";

            }
        }



        /*5.А*/
        else if($key=='pochki0'){
            if (!empty($_POST['pochki0'])) {

                $ss = $ss . "pochki>='{$item}' and ";

            }
        }
        else if($key=='pochki'){
            if (!empty($_POST['pochki'])) {

                $ss = $ss . "pochki<='{$item}' and ";

            }
        }

        /*6.А*/
        else if($key=='datPoli0'){
            if (!empty($_POST['datPoli0'])) {

                $ss = $ss . "datPoli>='{$item}' and ";

            }
        }
        else if($key=='datPoli'){
            if (!empty($_POST['datPoli'])) {

                $ss = $ss . "datPoli<='{$item}' and ";

            }
        }
        /*7.А*/
        /* Дата обстеження: дд-мм-рр*/
        else if($key=='datLab0'){
            if (!empty($_POST['datLab0'])) {

                $ss = $ss . "datLab>='{$item}' and ";

            }
        }
        else if($key=='datLab'){
            if (!empty($_POST['datLab'])) {

                $ss = $ss . "datLab<='{$item}' and ";

            }
        }
        /*О котрій годині був останній прийом їжі (напередодні ввечері)?*/
        else if($key=='Pisha0'){
            if (!empty($_POST['Pisha0'])) {

                $ss = $ss . "Pisha>='{$item}' and ";

            }
        }
        else if($key=='Pisha'){
            if (!empty($_POST['Pisha'])) {

                $ss = $ss . "Pisha<='{$item}' and ";

            }
        }
        /*  Показник, nmol / l*/

        else if($key=='nmol0'){
            if (!empty($_POST['nmol0'])) {

                $ss = $ss . "nmol>='{$item}' and ";

            }
        }
        else if($key=='nmol'){
            if (!empty($_POST['nmol'])) {

                $ss = $ss . "nmol<='{$item}' and ";

            }
        }
        /*'Дата, дд-мм-рр',*/
        else if($key=='Datnmol0'){
            if (!empty($_POST['Datnmol0'])) {

                $ss = $ss . "Datnmol>='{$item}' and ";

            }
        }
        else if($key=='Datnmol'){
            if (!empty($_POST['Datnmol'])) {

                $ss = $ss . "Datnmol<='{$item}' and ";

            }
        }
        /*  %   */
        else if($key=='vidsot0'){
            if (!empty($_POST['vidsot0'])) {

                $ss = $ss . "vidsot>='{$item}' and ";

            }
        }
        else if($key=='vidsot'){
            if (!empty($_POST['vidsot'])) {

                $ss = $ss . "vidsot<='{$item}' and ";

            }
        }
        /*pmol/pmol*/
        else if($key=='gemogl0'){
            if (!empty($_POST['gemogl0'])) {

                $ss = $ss . "gemogl>='{$item}' and ";

            }
        }
        else if($key=='gemogl'){
            if (!empty($_POST['gemogl'])) {

                $ss = $ss . "gemogl<='{$item}' and ";

            }
        }
        /* Дата, дд-мм-рр*/
        else if($key=='Datgemogl0'){
            if (!empty($_POST['Datgemogl0'])) {

                $ss = $ss . "Datgemogl>='{$item}' and ";

            }
        }
        else if($key=='Datgemogl'){
            if (!empty($_POST['Datgemogl'])) {

                $ss = $ss . "Datgemogl<='{$item}' and ";

            }
        }
        /*  Загальний аналіз крові (дата)?*/

        else if($key=='Datkrovi0'){
            if (!empty($_POST['Datkrovi0'])) {

                $ss = $ss . "Datkrovi>='{$item}' and ";

            }
        }
        else if($key=='Datkrovi'){
            if (!empty($_POST['Datkrovi'])) {

                $ss = $ss . "Datkrovi<='{$item}' and ";

            }
        }

        /*   Еритроцити*/
        else if($key=='eritr0'){
            if (!empty($_POST['eritr0'])) {

                $ss = $ss . "eritr>='{$item}' and ";

            }
        }
        else if($key=='eritr'){
            if (!empty($_POST['eritr'])) {

                $ss = $ss . "eritr<='{$item}' and ";

            }
        }

        /*Гемоглобін*/
        else if($key=='gemogl20'){
            if (!empty($_POST['gemogl20'])) {

                $ss = $ss . "gemogl2>='{$item}' and ";

            }
        }
        else if($key=='gemogl2'){
            if (!empty($_POST['gemogl2'])) {

                $ss = $ss . "gemogl2<='{$item}' and ";

            }
        }
        /*   Лейкоцити (кількість)*/
        else if($key=='lekoz0'){
            if (!empty($_POST['lekoz0'])) {

                $ss = $ss . "lekoz>='{$item}' and ";

            }
        }
        else if($key=='lekoz'){
            if (!empty($_POST['lekoz'])) {

                $ss = $ss . "lekoz<'{$item}' and ";

            }
        }
        /*   Нейтрофіли (абс к-ть)*/
        else if($key=='nejtrof0'){
            if (!empty($_POST['nejtrof0'])) {

                $ss = $ss . "nejtrof>='{$item}' and ";

            }
        }
        else if($key=='nejtrof'){
            if (!empty($_POST['nejtrof'])) {

                $ss = $ss . "nejtrof<='{$item}' and ";

            }
        }

        /*    Моноцити (абс к-ть)*/
        else if($key=='monozit0'){
            if (!empty($_POST['monozit0'])) {

                $ss = $ss . "monozit>='{$item}' and ";

            }
        }
        else if($key=='monozit'){
            if (!empty($_POST['monozit'])) {

                $ss = $ss . "monozit<='{$item}' and ";

            }
        }
        /*   Лімфоцити (абс к-во)*/

        else if($key=='limfoz0'){
            if (!empty($_POST['limfoz0'])) {

                $ss = $ss . "limfoz>='{$item}' and ";

            }
        }
        else if($key=='limfoz'){
            if (!empty($_POST['limfoz'])) {

                $ss = $ss . "limfoz<='{$item}' and ";

            }
        }
        /*   Тромбоцити (абс к-во)*/

        else if($key=='tromb0'){
            if (!empty($_POST['tromb0'])) {

                $ss = $ss . "tromb>='{$item}' and ";

            }
        }
        else if($key=='tromb'){
            if (!empty($_POST['tromb'])) {

                $ss = $ss . "tromb<='{$item}' and ";

            }
        }
        /*    Тромбоцити, MPV*/
        else if($key=='mpv0'){
            if (!empty($_POST['mpv0'])) {

                $ss = $ss . "mpv>='{$item}' and ";

            }
        }
        else if($key=='mpv'){
            if (!empty($_POST['mpv'])) {

                $ss = $ss . "mpv<='{$item}' and ";

            }
        }
        /*    Інше (показник)*/
        else if($key=='dryg0'){
            if (!empty($_POST['dryg0'])) {

                $ss = $ss . "dryg>='{$item}' and ";

            }
        }
        else if($key=='dryg'){
            if (!empty($_POST['dryg'])) {

                $ss = $ss . "dryg<='{$item}' and ";

            }
        }
        /*  Показник, мкмоль / л*/
        else if($key=='kreat0'){
            if (!empty($_POST['kreat0'])) {

                $ss = $ss . "kreat>='{$item}' and ";

            }
        }
        else if($key=='kreat'){
            if (!empty($_POST['kreat'])) {

                $ss = $ss . "kreat<='{$item}' and ";

            }
        }
        /*     Дата, дд-мм-рр*/
        else if($key=='datkreat0'){
            if (!empty($_POST['datkreat0'])) {

                $ss = $ss . "datkreat>='{$item}' and ";

            }
        }
        else if($key=='datkreat'){
            if (!empty($_POST['datkreat'])) {

                $ss = $ss . "datkreat<='{$item}' and ";

            }
        }
        /*    Креатинін в сечі
           Показник, мкмоль / л*/
        else if($key=='kreatMocha0'){
            if (!empty($_POST['kreatMocha0'])) {

                $ss = $ss . "kreatMocha>='{$item}' and ";

            }
        }
        else if($key=='kreatMocha'){
            if (!empty($_POST['kreatMocha'])) {

                $ss = $ss . "kreatMocha<='{$item}' and ";

            }
        }
        /*    Дата, дд-мм-рр*/
        else if($key=='datMocha0'){
            if (!empty($_POST['datMocha0'])) {

                $ss = $ss . "datMocha>='{$item}' and ";

            }
        }
        else if($key=='datMocha'){
            if (!empty($_POST['datMocha'])) {

                $ss = $ss . "datMocha<='{$item}' and ";

            }
        }
        /*    Кліренс креатиніну (СКФ, швидкості клубочкової фільтрації)*/
        else if($key=='klirkreat0'){
            if (!empty($_POST['klirkreat0'])) {

                $ss = $ss . "klirkreat>='{$item}' and ";

            }
        }
        else if($key=='klirkreat'){
            if (!empty($_POST['klirkreat'])) {

                $ss = $ss . "klirkreat<='{$item}' and ";

            }
        }
        /*Останній вимір, мг / сут*/
        else if($key=='posIzm0'){
            if (!empty($_POST['posIzm0'])) {

                $ss = $ss . "posIzm>='{$item}' and ";

            }
        }
        else if($key=='posIzm'){
            if (!empty($_POST['posIzm'])) {

                $ss = $ss . "posIzm<='{$item}' and ";

            }
        }
        /*    Дата, дд-мм-рр*/
        else if($key=='datProtein0'){
            if (!empty($_POST['datProtein0'])) {

                $ss = $ss . "datProtein>='{$item}' and ";

            }
        }
        else if($key=='datProtein'){
            if (!empty($_POST['datProtein'])) {

                $ss = $ss . "datProtein<='{$item}' and ";

            }
        }
        /*Лабораторний аналіз ліпідів в крові (дата):*/
        else if($key=='Lipiddat0'){
            if (!empty($_POST['Lipiddat0'])) {

                $ss = $ss . "Lipiddat>='{$item}' and ";

            }
        }
        else if($key=='Lipiddat'){
            if (!empty($_POST['Lipiddat'])) {

                $ss = $ss . "Lipiddat<='{$item}' and ";

            }
        }
        /*    Холестерин (показник)*/
        else if($key=='Holest0'){
            if (!empty($_POST['Holest0'])) {

                $ss = $ss . "Holest>='{$item}' and ";

            }
        }
        else if($key=='Holest'){
            if (!empty($_POST['Holest'])) {

                $ss = $ss . "Holest<='{$item}' and ";

            }
        }
        /*   Ліпіди високої щільності (Показник)*/
        else if($key=='LipidVis0'){
            if (!empty($_POST['LipidVis0'])) {

                $ss = $ss . "LipidVis>='{$item}' and ";

            }
        }
        else if($key=='LipidVis'){
            if (!empty($_POST['LipidVis'])) {

                $ss = $ss . "LipidVis<='{$item}' and ";

            }
        }
        /*    Ліпіди низької щільності (показник)*/
        else if($key=='LipidNiz0'){
            if (!empty($_POST['LipidNiz0'])) {

                $ss = $ss . "LipidNiz>='{$item}' and ";

            }
        }
        else if($key=='LipidNiz'){
            if (!empty($_POST['LipidNiz'])) {

                $ss = $ss . "LipidNiz<='{$item}' and ";

            }
        }
        /*     Тригліцериди (показник)*/
        else if($key=='Trigliz0'){
            if (!empty($_POST['Trigliz0'])) {

                $ss = $ss . "Trigliz>='{$item}' and ";

            }
        }
        else if($key=='Trigliz'){
            if (!empty($_POST['Trigliz'])) {

                $ss = $ss . "Trigliz<='{$item}' and ";

            }
        }
        /*   Аспартатамінотрансфераза (АСТ)*/
        else if($key=='Aspartaz0'){
            if (!empty($_POST['Asparta0'])) {

                $ss = $ss . "Asparta>='{$item}' and ";

            }
        }
        else if($key=='Asparta'){
            if (!empty($_POST['Asparta'])) {

                $ss = $ss . "Asparta<='{$item}' and ";

            }
        }
        /*   Аланінамінотрансфераза (АСТ)*/
        else if($key=='Alanin0'){
            if (!empty($_POST['Alanin0'])) {

                $ss = $ss . "Alanin>='{$item}' and ";

            }
        }
        else if($key=='Alanin'){
            if (!empty($_POST['Alanin'])) {

                $ss = $ss . "Alanin<='{$item}' and ";

            }
        }
        /*    С-реактивний білок*/
        else if($key=='BelocS0'){
            if (!empty($_POST['BelocS0'])) {

                $ss = $ss . "BelocS>='{$item}' and ";

            }
        }
        else if($key=='BelocS'){
            if (!empty($_POST['BelocS'])) {

                $ss = $ss . "BelocS<='{$item}' and ";

            }
        }
        /*   C-пептид, показник:*/
        else if($key=='Peptid0'){
            if (!empty($_POST['Peptid0'])) {

                $ss = $ss . "Peptid>='{$item}' and ";

            }
        }
        else if($key=='Peptid'){
            if (!empty($_POST['Peptid'])) {

                $ss = $ss . "Peptid<='{$item}' and ";

            }
        }
        /*   C-пептид, одиниця виміру:*/
        else if($key=='PeptiEdIzm0'){
            if (!empty($_POST['PeptiEdIzm0'])) {

                $ss = $ss . "PeptiEdIzm>='{$item}' and ";

            }
        }
        else if($key=='PeptiEdIzm'){
            if (!empty($_POST['PeptiEdIzm'])) {

                $ss = $ss . "PeptiEdIzm<='{$item}' and ";

            }
        }
        /*     нг/мл*/
        else if($key=='PeptidPmol0'){
            if (!empty($_POST['PeptidPmol0'])) {

                $ss = $ss . "PeptidPmol>='{$item}' and ";

            }
        }
        else if($key=='PeptidPmol'){
            if (!empty($_POST['PeptidPmol'])) {

                $ss = $ss . "PeptidPmol<='{$item}' and ";

            }
        }
        /*    nmol/l:	*/
        else if($key=='PeptidNmol0'){
            if (!empty($_POST['PeptidNmol0'])) {

                $ss = $ss . "PeptidNmol>='{$item}' and ";

            }
        }
        else if($key=='PeptidNmol'){
            if (!empty($_POST['PeptidNmol'])) {

                $ss = $ss . "PeptidNmol<='{$item}' and ";

            }
        }
        /*    C-пептід, Дата: дд-мм-рр:*/
        else if($key=='S_Pep0'){
            if (!empty($_POST['S_Pep0'])) {

                $ss = $ss . "S_Pep>='{$item}' and ";

            }
        }
        else if($key=='S_Pep'){
            if (!empty($_POST['S_Pep'])) {

                $ss = $ss . "S_Pep<='{$item}' and ";

            }
        }
        else if($key=='art0'){
            if (!empty($_POST['art0'])) {

                $ss = $ss . "art>='{$item}' and ";

            }
        }
        else if($key=='art'){
            if (!empty($_POST['art'])) {

                $ss = $ss . "art<='{$item}' and ";

            }
        }
        /*  AT-GAD:*/
        else if($key=='atGad0'){
            if (!empty($_POST['atGad0'])) {

                $ss = $ss . "atGad>='{$item}' and ";

            }
        }
        else if($key=='atGad'){
            if (!empty($_POST['atGad'])) {

                $ss = $ss . "atGad<='{$item}' and ";

            }
        }
        /*   AT-GAD дата:*/
        else if($key=='atGaddat0'){
            if (!empty($_POST['atGaddat0'])) {

                $ss = $ss . "atGaddat>='{$item}' and ";

            }
        }
        else if($key=='atGaddat'){
            if (!empty($_POST['atGaddat'])) {

                $ss = $ss . "atGaddat<='{$item}' and ";

            }
        }
        else if($key=='art10'){
            if (!empty($_POST['art10'])) {

                $ss = $ss . "art1>='{$item}' and ";

            }
        }
        else if($key=='art1'){
            if (!empty($_POST['art1'])) {

                $ss = $ss . "art1<='{$item}' and ";

            }
        }
        /*Дата початку інсулінотерапії (дд- мм-рр)*/
        else if($key=='datLechDiab0'){
            if (!empty($_POST['datLechDiab0'])) {

                $ss = $ss . "datLechDiab>='{$item}' and ";

            }
        }
        else if($key=='datLechDiab'){
            if (!empty($_POST['datLechDiab'])) {

                $ss = $ss . "datLechDiab<='{$item}' and ";

            }
        }
        /*Дата постановки діагнозу онкозахворювання*/
        else if($key=='dateOnko0'){
            if (!empty($_POST['dateOnko0'])) {

                $ss = $ss . "dateOnko>='{$item}' and ";

            }
        }
        else if($key=='dateOnko'){
            if (!empty($_POST['dateOnko'])) {

                $ss = $ss . "dateOnko<='{$item}' and ";

            }
        }
        else if($key=='datStad0'){
            if (!empty($_POST['datStad0'])) {

                $ss = $ss . "datStad>='{$item}' and ";

            }
        }
        else if($key=='datStad'){
            if (!empty($_POST['datStad'])) {

                $ss = $ss . "datStad<='{$item}' and ";

            }
        }
        else if($key=='datIns0'){
            if (!empty($_POST['datIns0'])) {

                $ss = $ss . "datIns>='{$item}' and ";

            }
        }
        else if($key=='datIns'){
            if (!empty($_POST['datIns'])) {

                $ss = $ss . "datIns<='{$item}' and ";

            }
        }
        else if($key=='fname'){
            $pos      = strripos($item, '*');
            if ($pos === false) {
                $ss = $ss . "{$key}='".apostr($item)."' and ";
            }else{
                $item=str_replace('*','%',$item);

                $ss = $ss . "{$key} like '".apostr($item)."' and ";
            }

        }
        else if($key=='name'){
            $pos      = strripos($item, '*');
            if ($pos === false) {
                $ss = $ss . "{$key}='".apostr($item)."' and ";
            }else{
                $item=str_replace('*','%',$item);

                $ss = $ss . "{$key} like '".apostr($item)."' and ";
            }

        }
        else if($key=='sname'){
            $pos      = strripos($item, '*');
            if ($pos === false) {
                $ss = $ss . "{$key}='".apostr($item)."' and ";
            }else{
                $item=str_replace('*','%',$item);

                $ss = $ss . "{$key} like '".apostr($item)."' and ";
            }

        }
        else if($key=='inf'){
            $pos      = strripos($item, '*');
            if ($pos === false) {
                $ss = $ss . "{$key}='".apostr($item)."' and ";
            }else{
                $item=str_replace('*','%',$item);

                $ss = $ss . "{$key} like '".apostr($item)."' and ";
            }

        }
        else if($key=='aut'){
            $pos      = strripos($item, '*');
            if ($pos === false) {
                $ss = $ss . "{$key}='".apostr($item)."' and ";
            }else{
                $item=str_replace('*','%',$item);

                $ss = $ss . "{$key} like '".apostr($item)."' and ";
            }

        }
        else if($key=='porok'){
            $pos      = strripos($item, '*');
            if ($pos === false) {
                $ss = $ss . "{$key}='".apostr($item)."' and ";
            }else{
                $item=str_replace('*','%',$item);

                $ss = $ss . "{$key} like '".apostr($item)."' and ";
            }

        }
        else if($key=='endoc'){
            $pos      = strripos($item, '*');
            if ($pos === false) {
                $ss = $ss . "{$key}='".apostr($item)."' and ";
            }else{
                $item=str_replace('*','%',$item);

                $ss = $ss . "{$key} like '".apostr($item)."' and ";
            }

        }
        else if($key=='patol'){
            $pos      = strripos($item, '*');
            if ($pos === false) {
                $ss = $ss . "{$key}='".apostr($item)." and ";
            }else{
                $item=str_replace('*','%',$item);

                $ss = $ss . "{$key} like '".apostr($item)."' and ";
            }

        }
        else if($key=='DGR'){
            $pos      = strripos($item, '*');
            if ($pos === false) {
                $ss = $ss . "{$key}='".apostr($item)."' and ";
            }else{
                $item=str_replace('*','%',$item);

                $ss = $ss . "{$key} like '".apostr($item)."' and ";
            }

        }
        else if($key=='VidOnko'){
            $pos      = strripos($item, '*');
            if ($pos === false) {
                $ss = $ss . "{$key}='".apostr($item)."' and ";
            }else{
                $item=str_replace('*','%',$item);

                $ss = $ss . "{$key} like '".apostr($item)."' and ";
            }

        }
        else if($key=='datInf'){

            if (!empty($_POST['datInf'])) {

                $ss = $ss . "SUBSTRING_INDEX(datInf,';',1)>='{$item}' and ";

            }
        }
        else if($key=='datInf0'){
            if (!empty($_POST['datInf0'])) {

                $ss = $ss . "SUBSTRING_INDEX(datInf,';',1)<='{$item}' and ";

            }
        }
        else if($key=='moi'){


                $ss = $ss ;


        }
        else if($key=='city'){


            $item=str_replace('*','%',$item);

            $ss = $ss . "{$key} like '".apostr($item)."' and ";


        }
        else if($key=='nom1'){

    $ss=$ss . "id >=".$item." and ";
}
else if($key=='nom2'){
    $ss=$ss . "id <=".$item." and ";
}




        /*--------------------*/
        else {



            $ss = $ss . "{$key}='".apostr($item)."' and ";
            
        }
    }

endforeach;

if($ss==''){

    $ss="id>0";
}else {
    $ss = substr($ss, 0, -4);
}


$str="Select id,nomPac, concat(fname,' ',name, ' ',sname) as pib, sex,datB, typeDiab, city, date_izm from
 (select * from karta order by nomPac, nomV desc,id) x where ".$ss." group by nomPac";
//echo $str;die();
        $res=$dbh->query($str);
        $json = array();
        while( $row = $res->fetch()) {
            echo "<tr class='gradeA' ";
            if($row['del_k']==1){
                echo "style='color:red;'";
            }
            echo "id='o{$row['id']}' onclick='edit(this.id)'><td><form method='post' name='k{$row['id']}' id='k{$row['id']}'>
        <input type='hidden' name='id_k' value='{$row['id']}'> <input type='hidden' name='nomPac' value='{$row['nomPac']}'></form> {$row['nomPac']}</td>
            <td>{$row['pib']}</td><td>{$row['sex']}</td><td>{$row['datB']}</td>
                    <td>{$row['typeDiab']}</td><td>{$row['city']}</td><td>{$row['date_izm']}</td></tr>";
        }



    die();

?>
