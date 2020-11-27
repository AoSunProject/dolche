<?php

class MainModel extends Model
{
private function __construct(){

}
private static $instance=NULL;
public static function Instance(){return self::$instance===NULL? self::$instance= new self():self::$instance;}
/********************/
    private static $_signupUrl = "https://www.google.com/recaptcha/admin";
    private static $_siteVerifyUrl =
        "https://www.google.com/recaptcha/api/siteverify?";
    private $_secret;
    public $success;
    public $errorCodes;

    private static $_version = "php_1.0";
        /**********************/
    public function getuser1(){
    $tmp=DatabaseModule::instance()->db_users->select('id>0 order by dat desc');
    return $tmp;
}
    public function getkarta1($id){
        $id=str_replace('o','',$id);
        $wh='id='.$id;

        $tmp=DatabaseModule::instance()->karta->select($wh);
        return $tmp;
    }
    public function gethist($id){
        $id=str_replace('o','',$id);
        $wh='id_k='.$id;

        $tmp=DatabaseModule::instance()->history->select($wh);
        return $tmp;
    }
    public function quer($ss){
        $tmp=DatabaseModule::instance()->db_users->exec($ss);
        return 1;
    }
    public function getenter(){
        $tmp=DatabaseModule::instance()->const->select("name like 'Enter'");

        return $tmp;
    }
    public function getklinika(){
        $tmp=DatabaseModule::instance()->klinika->select();

        return $tmp;
    }
    public function getKarta(){
        $tmp=DatabaseModule::instance()->karta->select();

        return $tmp;
    }
    public function getKartaFind($buk){
        $tmp=DatabaseModule::instance()->karta->select("fname like '{$buk}%'");

        return $tmp;
    }
    public function getzapdel(){
        $tmp=DatabaseModule::instance()->karta->select("del_k=1");

        return $tmp;
    }
    public function getarh(){
        $tmp=DatabaseModule::instance()->arh->select();

        return $tmp;
    }
    public function tocart($id){
        $ins="Insert into arh select * from karta where id={$id}";

        $tmp=DatabaseModule::instance()->karta->exec($ins);
        $del="delete from karta where id={$id}";

        $tmp=DatabaseModule::instance()->karta->exec($del);
        return $tmp;
    }
    public function arhdel($id){

        $del="delete from arh where id={$id}";

        $tmp=DatabaseModule::instance()->arh->exec($del);
        return $tmp;
    }
    public function apostr($str){
        $str1=str_replace("'","`",$str);
        return $str1;
    }
    public function getKartaFindR1($mas){

             $ss='';
        foreach($mas as $key =>$item):

            if($item!='' and $item!='--' and !empty($item) and $item!='Здійснити пошук') {

            if($key=='datB0') {
                if (!empty($mas['datB0'])) {

                    $ss = $ss . "datB>='{$item}' and ";

                }

            }
            else if($key=='datB'){
                if (!empty($mas['datB'])) {

                    $ss = $ss . "datB<='{$item}' and ";

                }
            }
            /*1.А телефон*/
            else if($key=='phone0'){
                if (!empty($mas['phone0'])) {

                    $ss = $ss . "phone>='{$item}' and ";

                }
            }
            else if($key=='phone'){
                if (!empty($mas['phone'])) {

                    $ss = $ss . "phone<='{$item}' and ";

                }
            }
              /*1.А.  Вага при народженні (кг):*/
            else if($key=='vagaPN0'){
                if (!empty($mas['vagaPN0'])) {

                    $ss = $ss . "vagaPN>='{$item}' and ";

                }
            }
            else if($key=='vagaPN'){
                if (!empty($mas['vagaPN'])) {

                    $ss = $ss . "vagaPN<='{$item}' and ";

                }
            }
            /*------------------*/
            else if($key=='datBOtez0'){
                if (!empty($mas['datBOtez0'])) {

                    $ss = $ss . "datBOtez>='{$item}' and ";

                }
            }
            else if($key=='datBOtez'){
                if (!empty($mas['datBOtez'])) {

                    $ss = $ss . "datBOtez<='{$item}' and ";

                }
            }
            else if($key=='datBM0'){
                if (!empty($mas['datBM0'])) {

                    $ss = $ss . "datBM>='{$item}' and ";

                }
            }
            else if($key=='datBM'){
                if (!empty($mas['datBM'])) {

                    $ss = $ss . "datBM<='{$item}' and ";

                }
            }
            else if($key=='ves0'){
                if (!empty($mas['ves0'])) {

                    $ss = $ss . "ves>='{$item}' and ";

                }
            }
            else if($key=='ves'){
                if (!empty($mas['ves'])) {

                    $ss = $ss . "ves<='{$item}' and ";

                }
            }
            else if($key=='rost0'){
                if (!empty($mas['rost0'])) {

                    $ss = $ss . "rost>='{$item}' and ";

                }
            }
            else if($key=='rost'){
                if (!empty($mas['rost'])) {

                    $ss = $ss . "rost<='{$item}' and ";

                }
            }
            else if($key=='tal0'){
                if (!empty($mas['talt0'])) {

                    $ss = $ss . "tal>='{$item}' and ";

                }
            }
            else if($key=='tal'){
                if (!empty($mas['tal'])) {

                    $ss = $ss . "tal<='{$item}' and ";

                }
            }
            else if($key=='bed0'){
                if (!empty($mas['bed0'])) {

                    $ss = $ss . "bed>='{$item}' and ";

                }
            }
            else if($key=='bed'){
                if (!empty($mas['bed'])) {

                    $ss = $ss . "bed<='{$item}' and ";

                }
            }
            else if($key=='index0'){
                if (!empty($mas['index0'])) {

                    $ss = $ss . "`index>='{$item}' and ";

                }
            }
            else if($key=='index'){
                if (!empty($mas['index'])) {

                    $ss = $ss . "`index<='{$item}' and ";

                }
            }
            /*Систолічний артеріальний тиск (сидячи)*/
            else if($key=='systisk0'){
                if (!empty($mas['systisk0'])) {

                    $ss = $ss . "systisk>='{$item}' and ";

                }
            }
            else if($key=='systisk'){
                if (!empty($mas['systisk'])) {

                    $ss = $ss . "systisk<='{$item}' and ";

                }
            }
             /*   Діастолічний артеріальний тиск (сидячи)*/
            else if($key=='disttisk0'){
                if (!empty($mas['disttisk0'])) {

                    $ss = $ss . "disttisk>='{$item}' and ";

                }
            }
            else if($key=='disttisk'){
                if (!empty($mas['disttisk'])) {

                    $ss = $ss . "disttisk<='{$item}' and ";

                }
            }
            /*_____________________ */
            else if($key=='smokeKol0'){
                if (!empty($mas['smokeKol0'])) {

                    $ss = $ss . "smokeKol>='{$item}' and ";

                }
            }
            else if($key=='smokeKol'){
                if (!empty($mas['smokeKol'])) {

                    $ss = $ss . "smokeKol<='{$item}' and ";

                }
            }
            else if($key=='yearD0'){
                if (!empty($mas['yearD0'])) {

                    $ss = $ss . "yearD>='{$item}' and ";

                }
            }
            else if($key=='yearD'){
                if (!empty($mas['yearD'])) {

                    $ss = $ss . "yearD<='{$item}' and ";

                }
            }
            else if($key=='vekD0'){
                if (!empty($mas['vekD0'])) {

                    $ss = $ss . "vekD>='{$item}' and ";

                }
            }
            else if($key=='vekD'){
                if (!empty($mas['vekD'])) {

                    $ss = $ss . "vekD<='{$item}' and ";

                }
            }
            else if($key=='longD0'){
                if (!empty($mas['longD0'])) {

                    $ss = $ss . "longD>='{$item}' and ";

                }
            }
            else if($key=='longD'){
                if (!empty($mas['longD'])) {

                    $ss = $ss . "longD<='{$item}' and ";

                }
            }

/*11111111111111*/


            else if($key=='glaz0'){
                if (!empty($mas['glaz0'])) {

                    $ss = $ss . "glaz>='{$item}' and ";

                }
            }
            else if($key=='glaz'){
                if (!empty($mas['glaz'])) {

                    $ss = $ss . "glaz<='{$item}' and ";

                }
            }



            /*5.А*/
            else if($key=='pochki0'){
                if (!empty($mas['pochki0'])) {

                    $ss = $ss . "pochki>='{$item}' and ";

                }
            }
            else if($key=='pochki'){
                if (!empty($mas['pochki'])) {

                    $ss = $ss . "pochki<='{$item}' and ";

                }
            }

            /*6.А*/
            else if($key=='datPoli0'){
                if (!empty($mas['datPoli0'])) {

                    $ss = $ss . "datPoli>='{$item}' and ";

                }
            }
            else if($key=='datPoli'){
                if (!empty($mas['datPoli'])) {

                    $ss = $ss . "datPoli<='{$item}' and ";

                }
            }
            /*7.А*/
            /* Дата обстеження: дд-мм-рр*/
            else if($key=='datLab0'){
                if (!empty($mas['datLab0'])) {

                    $ss = $ss . "datLab>='{$item}' and ";

                }
            }
            else if($key=='datLab'){
                if (!empty($mas['datLab'])) {

                    $ss = $ss . "datLab<='{$item}' and ";

                }
            }
            /*О котрій годині був останній прийом їжі (напередодні ввечері)?*/
            else if($key=='Pisha0'){
                if (!empty($mas['Pisha0'])) {

                    $ss = $ss . "Pisha>='{$item}' and ";

                }
            }
            else if($key=='Pisha'){
                if (!empty($mas['Pisha'])) {

                    $ss = $ss . "Pisha<='{$item}' and ";

                }
            }
              /*  Показник, nmol / l*/

            else if($key=='nmol0'){
                if (!empty($mas['nmol0'])) {

                    $ss = $ss . "nmol>='{$item}' and ";

                }
            }
            else if($key=='nmol'){
                if (!empty($mas['nmol'])) {

                    $ss = $ss . "nmol<='{$item}' and ";

                }
            }
                /*'Дата, дд-мм-рр',*/
            else if($key=='Datnmol0'){
                if (!empty($mas['Datnmol0'])) {

                    $ss = $ss . "Datnmol>='{$item}' and ";

                }
            }
            else if($key=='Datnmol'){
                if (!empty($mas['Datnmol'])) {

                    $ss = $ss . "Datnmol<='{$item}' and ";

                }
            }
            /*  %   */
            else if($key=='vidsot0'){
                if (!empty($mas['vidsot0'])) {

                    $ss = $ss . "vidsot>='{$item}' and ";

                }
            }
            else if($key=='vidsot'){
                if (!empty($mas['vidsot'])) {

                    $ss = $ss . "vidsot<='{$item}' and ";

                }
            }
            /*pmol/pmol*/
            else if($key=='gemogl0'){
                if (!empty($mas['gemogl0'])) {

                    $ss = $ss . "gemogl>='{$item}' and ";

                }
            }
            else if($key=='gemogl'){
                if (!empty($mas['gemogl'])) {

                    $ss = $ss . "gemogl<='{$item}' and ";

                }
            }
               /* Дата, дд-мм-рр*/
            else if($key=='Datgemogl0'){
                if (!empty($mas['Datgemogl0'])) {

                    $ss = $ss . "Datgemogl>='{$item}' and ";

                }
            }
            else if($key=='Datgemogl'){
                if (!empty($mas['Datgemogl'])) {

                    $ss = $ss . "Datgemogl<='{$item}' and ";

                }
            }
              /*  Загальний аналіз крові (дата)?*/

            else if($key=='Datkrovi0'){
                if (!empty($mas['Datkrovi0'])) {

                    $ss = $ss . "Datkrovi>='{$item}' and ";

                }
            }
            else if($key=='Datkrovi'){
                if (!empty($mas['Datkrovi'])) {

                    $ss = $ss . "Datkrovi<='{$item}' and ";

                }
            }

             /*   Еритроцити*/
            else if($key=='eritr0'){
                if (!empty($mas['eritr0'])) {

                    $ss = $ss . "eritr>='{$item}' and ";

                }
            }
            else if($key=='eritr'){
                if (!empty($mas['eritr'])) {

                    $ss = $ss . "eritr<='{$item}' and ";

                }
            }

                /*Гемоглобін*/
            else if($key=='gemogl20'){
                if (!empty($mas['gemogl20'])) {

                    $ss = $ss . "gemogl2>='{$item}' and ";

                }
            }
            else if($key=='gemogl2'){
                if (!empty($mas['gemogl2'])) {

                    $ss = $ss . "gemogl2<='{$item}' and ";

                }
            }
             /*   Лейкоцити (кількість)*/
            else if($key=='lekoz0'){
                if (!empty($mas['lekoz0'])) {

                    $ss = $ss . "lekoz>='{$item}' and ";

                }
            }
            else if($key=='lekoz'){
                if (!empty($mas['lekoz'])) {

                    $ss = $ss . "lekoz<='{$item}' and ";

                }
            }
             /*   Нейтрофіли (абс к-ть)*/
            else if($key=='nejtrof0'){
                if (!empty($mas['nejtrof0'])) {

                    $ss = $ss . "nejtrof>='{$item}' and ";

                }
            }
            else if($key=='nejtrof'){
                if (!empty($mas['nejtrof'])) {

                    $ss = $ss . "nejtrof<='{$item}' and ";

                }
            }

            /*    Моноцити (абс к-ть)*/
            else if($key=='monozit0'){
                if (!empty($mas['monozit0'])) {

                    $ss = $ss . "monozit>='{$item}' and ";

                }
            }
            else if($key=='monozit'){
                if (!empty($mas['monozit'])) {

                    $ss = $ss . "monozit<='{$item}' and ";

                }
            }
             /*   Лімфоцити (абс к-во)*/

            else if($key=='limfoz0'){
                if (!empty($mas['limfoz0'])) {

                    $ss = $ss . "limfoz>='{$item}' and ";

                }
            }
            else if($key=='limfoz'){
                if (!empty($mas['limfoz'])) {

                    $ss = $ss . "limfoz<='{$item}' and ";

                }
            }
             /*   Тромбоцити (абс к-во)*/

            else if($key=='tromb0'){
                if (!empty($mas['tromb0'])) {

                    $ss = $ss . "tromb>='{$item}' and ";

                }
            }
            else if($key=='tromb'){
                if (!empty($mas['tromb'])) {

                    $ss = $ss . "tromb<='{$item}' and ";

                }
            }
            /*    Тромбоцити, MPV*/
            else if($key=='mpv0'){
                if (!empty($mas['mpv0'])) {

                    $ss = $ss . "mpv>='{$item}' and ";

                }
            }
            else if($key=='mpv'){
                if (!empty($mas['mpv'])) {

                    $ss = $ss . "mpv<='{$item}' and ";

                }
            }
            /*    Інше (показник)*/
            else if($key=='dryg0'){
                if (!empty($mas['dryg0'])) {

                    $ss = $ss . "dryg>='{$item}' and ";

                }
            }
            else if($key=='dryg'){
                if (!empty($mas['dryg'])) {

                    $ss = $ss . "dryg<='{$item}' and ";

                }
            }
              /*  Показник, мкмоль / л*/
            else if($key=='kreat0'){
                if (!empty($mas['kreat0'])) {

                    $ss = $ss . "kreat>='{$item}' and ";

                }
            }
            else if($key=='kreat'){
                if (!empty($mas['kreat'])) {

                    $ss = $ss . "kreat<='{$item}' and ";

                }
            }
           /*     Дата, дд-мм-рр*/
            else if($key=='datkreat0'){
                if (!empty($mas['datkreat0'])) {

                    $ss = $ss . "datkreat>='{$item}' and ";

                }
            }
            else if($key=='datkreat'){
                if (!empty($mas['datkreat'])) {

                    $ss = $ss . "datkreat<='{$item}' and ";

                }
            }
            /*    Креатинін в сечі
               Показник, мкмоль / л*/
            else if($key=='kreatMocha0'){
                if (!empty($mas['kreatMocha0'])) {

                    $ss = $ss . "kreatMocha>='{$item}' and ";

                }
            }
            else if($key=='kreatMocha'){
                if (!empty($mas['kreatMocha'])) {

                    $ss = $ss . "kreatMocha<='{$item}' and ";

                }
            }
            /*    Дата, дд-мм-рр*/
            else if($key=='datMocha0'){
                if (!empty($mas['datMocha0'])) {

                    $ss = $ss . "datMocha>='{$item}' and ";

                }
            }
            else if($key=='datMocha'){
                if (!empty($mas['datMocha'])) {

                    $ss = $ss . "datMocha<='{$item}' and ";

                }
            }
            /*    Кліренс креатиніну (СКФ, швидкості клубочкової фільтрації)*/
            else if($key=='klirkreat0'){
                if (!empty($mas['klirkreat0'])) {

                    $ss = $ss . "klirkreat>='{$item}' and ";

                }
            }
            else if($key=='klirkreat'){
                if (!empty($mas['klirkreat'])) {

                    $ss = $ss . "klirkreat<='{$item}' and ";

                }
            }
                /*Останній вимір, мг / сут*/
            else if($key=='posIzm0'){
                if (!empty($mas['posIzm0'])) {

                    $ss = $ss . "posIzm>='{$item}' and ";

                }
            }
            else if($key=='posIzm'){
                if (!empty($mas['posIzm'])) {

                    $ss = $ss . "posIzm<='{$item}' and ";

                }
            }
            /*    Дата, дд-мм-рр*/
            else if($key=='datProtein0'){
                if (!empty($mas['datProtein0'])) {

                    $ss = $ss . "datProtein>='{$item}' and ";

                }
            }
            else if($key=='datProtein'){
                if (!empty($mas['datProtein'])) {

                    $ss = $ss . "datProtein<='{$item}' and ";

                }
            }
                /*Лабораторний аналіз ліпідів в крові (дата):*/
            else if($key=='Lipiddat0'){
                if (!empty($mas['Lipiddat0'])) {

                    $ss = $ss . "Lipiddat>='{$item}' and ";

                }
            }
            else if($key=='Lipiddat'){
                if (!empty($mas['Lipiddat'])) {

                    $ss = $ss . "Lipiddat<='{$item}' and ";

                }
            }
            /*    Холестерин (показник)*/
            else if($key=='Holest0'){
                if (!empty($mas['Holest0'])) {

                    $ss = $ss . "Holest>='{$item}' and ";

                }
            }
            else if($key=='Holest'){
                if (!empty($mas['Holest'])) {

                    $ss = $ss . "Holest<='{$item}' and ";

                }
            }
             /*   Ліпіди високої щільності (Показник)*/
            else if($key=='LipidVis0'){
                if (!empty($mas['LipidVis0'])) {

                    $ss = $ss . "LipidVis>='{$item}' and ";

                }
            }
            else if($key=='LipidVis'){
                if (!empty($mas['LipidVis'])) {

                    $ss = $ss . "LipidVis<='{$item}' and ";

                }
            }
            /*    Ліпіди низької щільності (показник)*/
            else if($key=='LipidNiz0'){
                if (!empty($mas['LipidNiz0'])) {

                    $ss = $ss . "LipidNiz>='{$item}' and ";

                }
            }
            else if($key=='LipidNiz'){
                if (!empty($mas['LipidNiz'])) {

                    $ss = $ss . "LipidNiz<='{$item}' and ";

                }
            }
           /*     Тригліцериди (показник)*/
            else if($key=='Trigliz0'){
                if (!empty($mas['Trigliz0'])) {

                    $ss = $ss . "Trigliz>='{$item}' and ";

                }
            }
            else if($key=='Trigliz'){
                if (!empty($mas['Trigliz'])) {

                    $ss = $ss . "Trigliz<='{$item}' and ";

                }
            }
             /*   Аспартатамінотрансфераза (АСТ)*/
            else if($key=='Aspartaz0'){
                if (!empty($mas['Asparta0'])) {

                    $ss = $ss . "Asparta>='{$item}' and ";

                }
            }
            else if($key=='Asparta'){
                if (!empty($mas['Asparta'])) {

                    $ss = $ss . "Asparta<='{$item}' and ";

                }
            }
             /*   Аланінамінотрансфераза (АСТ)*/
            else if($key=='Alanin0'){
                if (!empty($mas['Alanin0'])) {

                    $ss = $ss . "Alanin>='{$item}' and ";

                }
            }
            else if($key=='Alanin'){
                if (!empty($mas['Alanin'])) {

                    $ss = $ss . "Alanin<='{$item}' and ";

                }
            }
            /*    С-реактивний білок*/
            else if($key=='BelocS0'){
                if (!empty($mas['BelocS0'])) {

                    $ss = $ss . "BelocS>='{$item}' and ";

                }
            }
            else if($key=='BelocS'){
                if (!empty($mas['BelocS'])) {

                    $ss = $ss . "BelocS<='{$item}' and ";

                }
            }
             /*   C-пептид, показник:*/
            else if($key=='Peptid0'){
                if (!empty($mas['Peptid0'])) {

                    $ss = $ss . "Peptid>='{$item}' and ";

                }
            }
            else if($key=='Peptid'){
                if (!empty($mas['Peptid'])) {

                    $ss = $ss . "Peptid<='{$item}' and ";

                }
            }
             /*   C-пептид, одиниця виміру:*/
            else if($key=='PeptiEdIzm0'){
                if (!empty($mas['PeptiEdIzm0'])) {

                    $ss = $ss . "PeptiEdIzm>='{$item}' and ";

                }
            }
            else if($key=='PeptiEdIzm'){
                if (!empty($mas['PeptiEdIzm'])) {

                    $ss = $ss . "PeptiEdIzm<='{$item}' and ";

                }
            }
           /*     pmol/l*/
            else if($key=='PeptidPmol0'){
                if (!empty($mas['PeptidPmol0'])) {

                    $ss = $ss . "PeptidPmol>='{$item}' and ";

                }
            }
            else if($key=='PeptidPmol'){
                if (!empty($mas['PeptidPmol'])) {

                    $ss = $ss . "PeptidPmol<='{$item}' and ";

                }
            }
            /*    nmol/l:	*/
            else if($key=='PeptidNmol0'){
                if (!empty($mas['PeptidNmol0'])) {

                    $ss = $ss . "PeptidNmol>='{$item}' and ";

                }
            }
            else if($key=='PeptidNmol'){
                if (!empty($mas['PeptidNmol'])) {

                    $ss = $ss . "PeptidNmol<='{$item}' and ";

                }
            }
            /*    C-пептід, Дата: дд-мм-рр:*/
            else if($key=='S_Pep0'){
                if (!empty($mas['S_Pep0'])) {

                    $ss = $ss . "S_Pep>='{$item}' and ";

                }
            }
            else if($key=='S_Pep'){
                if (!empty($mas['S_Pep'])) {

                    $ss = $ss . "S_Pep<='{$item}' and ";

                }
            }
            else if($key=='art0'){
                if (!empty($mas['art0'])) {

                    $ss = $ss . "art>='{$item}' and ";

                }
            }
            else if($key=='art'){
                if (!empty($mas['art'])) {

                    $ss = $ss . "art<='{$item}' and ";

                }
            }
              /*  AT-GAD:*/
            else if($key=='atGad0'){
                if (!empty($mas['atGad0'])) {

                    $ss = $ss . "atGad>='{$item}' and ";

                }
            }
            else if($key=='atGad'){
                if (!empty($mas['atGad'])) {

                    $ss = $ss . "atGad<='{$item}' and ";

                }
            }
             /*   AT-GAD дата:*/
            else if($key=='atGaddat0'){
                if (!empty($mas['atGaddat0'])) {

                    $ss = $ss . "atGaddat>='{$item}' and ";

                }
            }
            else if($key=='atGaddat'){
                if (!empty($mas['atGaddat'])) {

                    $ss = $ss . "atGaddat<='{$item}' and ";

                }
            }
            else if($key=='art10'){
                if (!empty($mas['art10'])) {

                    $ss = $ss . "art1>='{$item}' and ";

                }
            }
            else if($key=='art1'){
                if (!empty($mas['art1'])) {

                    $ss = $ss . "art1<='{$item}' and ";

                }
            }
                /*Дата початку інсулінотерапії (дд- мм-рр)*/
            else if($key=='datLechDiab0'){
                if (!empty($mas['datLechDiab0'])) {

                    $ss = $ss . "datLechDiab>='{$item}' and ";

                }
            }
            else if($key=='datLechDiab'){
                if (!empty($mas['datLechDiab'])) {

                    $ss = $ss . "datLechDiab<='{$item}' and ";

                }
            }
            /*Дата постановки діагнозу онкозахворювання*/
            else if($key=='dateOnko0'){
                if (!empty($mas['dateOnko0'])) {

                    $ss = $ss . "dateOnko>='{$item}' and ";

                }
            }
            else if($key=='dateOnko'){
                if (!empty($mas['dateOnko'])) {

                    $ss = $ss . "dateOnko<='{$item}' and ";

                }
            }
            else if($key=='fname'){
                $pos      = strripos($item, '*');
                if ($pos === false) {
                    $ss = $ss . "{$key}='{$this->apostr($item)}' and ";
                }else{
                    $item=str_replace('*','%',$item);

                    $ss = $ss . "{$key} like '{$this->apostr($item)}' and ";
                }

            }
            else if($key=='name'){
                $pos      = strripos($item, '*');
                if ($pos === false) {
                    $ss = $ss . "{$key}='{$this->apostr($item)}' and ";
                }else{
                    $item=str_replace('*','%',$item);

                    $ss = $ss . "{$key} like '{$this->apostr($item)}' and ";
                }

            }
            else if($key=='sname'){
                $pos      = strripos($item, '*');
                if ($pos === false) {
                    $ss = $ss . "{$key}='{$this->apostr($item)}' and ";
                }else{
                    $item=str_replace('*','%',$item);

                    $ss = $ss . "{$key} like '{$this->apostr($item)}' and ";
                }

            }
            else if($key=='inf'){
                $pos      = strripos($item, '*');
                if ($pos === false) {
                    $ss = $ss . "{$key}='{$this->apostr($item)}' and ";
                }else{
                    $item=str_replace('*','%',$item);

                    $ss = $ss . "{$key} like '{$this->apostr($item)}' and ";
                }

            }
            else if($key=='aut'){
                $pos      = strripos($item, '*');
                if ($pos === false) {
                    $ss = $ss . "{$key}='{$this->apostr($item)}' and ";
                }else{
                    $item=str_replace('*','%',$item);

                    $ss = $ss . "{$key} like '{$this->apostr($item)}' and ";
                }

            }
            else if($key=='porok'){
                $pos      = strripos($item, '*');
                if ($pos === false) {
                    $ss = $ss . "{$key}='{$this->apostr($item)}' and ";
                }else{
                    $item=str_replace('*','%',$item);

                    $ss = $ss . "{$key} like '{$this->apostr($item)}' and ";
                }

            }
            else if($key=='endoc'){
                $pos      = strripos($item, '*');
                if ($pos === false) {
                    $ss = $ss . "{$key}='{$this->apostr($item)}' and ";
                }else{
                    $item=str_replace('*','%',$item);

                    $ss = $ss . "{$key} like '{$this->apostr($item)}' and ";
                }

            }
            else if($key=='patol'){
                $pos      = strripos($item, '*');
                if ($pos === false) {
                    $ss = $ss . "{$key}='{$this->apostr($item)}' and ";
                }else{
                    $item=str_replace('*','%',$item);

                    $ss = $ss . "{$key} like '{$this->apostr($item)}' and ";
                }

            }
            else if($key=='DGR'){
                $pos      = strripos($item, '*');
                if ($pos === false) {
                    $ss = $ss . "{$key}='{$this->apostr($item)}' and ";
                }else{
                    $item=str_replace('*','%',$item);

                    $ss = $ss . "{$key} like '{$this->apostr($item)}' and ";
                }

            }
            else if($key=='VidOnko'){
                $pos      = strripos($item, '*');
                if ($pos === false) {
                    $ss = $ss . "{$key}='{$this->apostr($item)}' and ";
                }else{
                    $item=str_replace('*','%',$item);

                    $ss = $ss . "{$key} like '{$this->apostr($item)}' and ";
                }

            }
            else if($key=='datInf'){

                if (!empty($mas['datInf'])) {

                    $ss = $ss . "SUBSTRING_INDEX(datInf,';',1)>='{$item}' and ";

                }
            }
            else if($key=='datInf0'){
                if (!empty($mas['datInf0'])) {

                    $ss = $ss . "SUBSTRING_INDEX(datInf,';',1)<='{$item}' and ";

                }
            }
            /*--------------------*/
            else {



                $ss = $ss . "{$key}='{$this->apostr($item)}' and ";
            }
                }

        endforeach;

        if($ss==''){

            $ss="id>0";
        }else {
            $ss = substr($ss, 0, -4);
        }

//echo $ss;die();
        $tmp=DatabaseModule::instance()->karta->select($ss);
//echo "kjkk";die();

        return $tmp;
    }
    public function getKartaFindR($fname,
            $year1, $year2,
            $nom1, $nom2,
            $name,
            $sex,
            $dat_izm,
            $sname,
            $typeDiab,
            $moi,
            $nasPynkt){

        if($moi==1){

if($_SESSION['role']=='2'){

    $m='';
}else{
    $m="id_user={$_SESSION['id']}";
}

        }else{
            $m='';
        }
        $ss='';
        if(isset($_SESSION['find'])){
            $_POST=$_SESSION['find'];
        }
        //var_dump($_POST);die();
      foreach($_POST as $key =>$item):

            if(!empty($item)) {
                if ($key == 'year1') {

                        $ss = $ss . "year(datB)>={$item} and ";



                }
                elseif ($key == 'year2') {
                    $ss = $ss . "year(datB)<={$item} and ";

                }
                elseif ($key=='moi'){
                    if($m==''){
                        $ss=$ss.$m;

                    }else{
                        $ss=$ss.$m." and ";
                    }

                }
                elseif($key=='nom1'){
                    $ss = $ss . "id>={$item} and ";
                }
                elseif($key=='nom2'){
                    $ss = $ss . "id<={$item} and ";
                }
                else {
                    $pos      = strripos($item, '*');
                    if ($pos === false) {
                        $ss = $ss . "{$key}='{$this->apostr($item)}' and ";
                    }else{
                        $item=str_replace('*','%',$item);

                        $ss = $ss . "{$key} like '{$this->apostr($item)}' and ";
                    }

                }
            }

      endforeach;
        //echo $ss;die();
if($ss==''){

    $ss="id>0";
}else {
    $ss = substr($ss, 0, -4);
}
        $tmp=DatabaseModule::instance()->karta->select($ss);
//echo "kjkk";die();

        return $tmp;
    }
    public function getuser($user,$pass){


           $tmp=DatabaseModule::instance()->db_users->select("`login`='{$user}' and `password`='{$pass}'");

if($tmp != null){

    session_start();
    $_SESSION['user']=$user;
    $_SESSION['id_z']=$tmp[0]['id_z'];
    $_SESSION['id']=$tmp[0]['id'];
    $_SESSION['role']=$tmp[0]['role'];
    return $tmp;
}else{

    $a=0;
    return $user;
}
 }
    public function logout(){
    session_start();
    unset($_SESSION['user']);
    $dd = "Update db_users set naSite='0' where id={$_SESSION['id']}";
        unset($_SESSION['role']);
        unset($_SESSION['id']);
        unset($_SESSION['id_z']);


        $b = MainModel::Instance()->quer($dd);
    session_destroy();
    }
/**************************/
    function ReCaptcha($secret)
    {
        if ($secret == null || $secret == "") {
            die("To use reCAPTCHA you must get an API key from <a href='"
                . self::$_signupUrl . "'>" . self::$_signupUrl . "</a>");
        }
        $this->_secret=$secret;
    }

    private function _encodeQS($data)
    {
        $req = "";
        foreach ($data as $key => $value) {
            $req .= $key . '=' . urlencode(stripslashes($value)) . '&';
        }
        // Cut the last '&'
        $req=substr($req, 0, strlen($req)-1);
        return $req;
    }

    private function _submitHTTPGet($path, $data)
    {
        $req = $this->_encodeQS($data);
        $response = file_get_contents($path . $req);
        return $response;
    }

    public function verifyResponse($remoteIp, $response)
    {
        // Discard empty solution submissions
        if ($response == null || strlen($response) == 0) {

            $success = false;
            $errorCodes = 'missing-input';

            return $success;
        }
        $getResponse = $this->_submitHttpGet(
            self::$_siteVerifyUrl,
            array (
                'secret' => $this->_secret,
                'remoteip' => $remoteIp,
                'v' => self::$_version,
                'response' => $response
            )
        );
        $answers = json_decode($getResponse, true);
        //$recaptchaResponse = new ReCaptchaResponse();
        if (trim($answers ['success']) == true) {
            $success = true;
        } else {
            $success = false;
            // $recaptchaResponse->errorCodes = $answers [error-codes];
        }
        return $success;
    }


    /**********************/
    public function getuser3($email,$kapcha){

        //секретный ключ
        $secret = "6Lel6ekUAAAAAP7GgRXMz_OOnyB2bvVrY4_M1r-m";
//ответ
        $response = null;
//проверка секретного ключа
        $reCaptcha = $this->ReCaptcha($secret);
        if ($kapcha) {

            $response = $this->verifyResponse(
                $_SERVER["REMOTE_ADDR"],
                $kapcha
            );

        }


        if($response != null && $response){
          echo "sddsda";die();
        }else{

            echo "noooo";die();
            return $user;
        }
    }


}
