<?php
class PacientModel extends Model
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

    public function addcart($name,$fname,
            $sname,$ychas,$nomIss,$sex
            ,$datB,$city,$rajon,
            $work,$week,
            $fnameO,$nameO,
            $snameO,$ychasOtez,
            $nomIssO,$datBOtez,
            $oblOtez,$cityOtez,
            $lechOtez,$lechOtezKak,
            $fnameM,$nameM,
            $snameM,$ychasM,
            $nomIssM,$datBM,
            $oblM,$cityM,
            $lechM,$lechMKak,
            $lechBS,$lechBSKak,
            $golodM,$golodO,
            $golodSister,$death1,
            $death2,$ves,
            $rost,$tal,
            $bed,$index,
            $art,$smouk,
            $smoukTime,$smokeKol,
            $alkogol,$typeDiab,
            $yearD,$vekD,
            $longD,$inf,
            $aut,$porok,
            $endoc,$patol,
            $DGR,$infarkt,
            $kolInf,$datInf,
            $insult,$kolIns,
            $datIns,$glaz,
            $diabDiab,$diabNep,
            $diabPrep,$diabPrep2,
            $Slep,$Lazer,
            $Katar,$Mal,
            $Glauk,$LechDR,
            $datDiab,$datNep,
            $datPrep,$datPrep2,
            $datSlep,$datLazer,
            $datKatar,$datMal,
            $datGlauk,$OST,
            $pochki,$diabNefro,
            $datNefro,$diabPochNEd,
            $diabPochSt,$datPochSt,
            $diabDializ,$datDializ,
            $LechPoch,$datPoli,
            $Chyvs,$NarVibr,
            $Reflex,$Jazv,
            $GnojJazv,$PylsStopa,
            $Shynt,$Hrom,
            $Ampyt,$kakAmput1,
            $datAmput,$datLab,
            $Natosh,$Pisha,
            $nmol,$Datnmol,
            $vidsot,$gemogl,

         $Datgemogl,$Datkrovi,
            $eritr,$gemogl2,
            $lekoz,$nejtrof,
            $monozit,$limfoz,
            $tromb,$mpv,
            $dryg,$kreat,
            $datkreat,$kreatMocha,
            $datMocha,$klirkreat,
            $Protein,$posIzm,
        $datProtein,$Mikroalmb,
            $kakMikro,$datMikro,
            $Lipiddat,$Holest,
            $LipidVis,$LipidNiz,
            $Trigliz,$Asparta,
            $Alanin,$BelocS,
            $Peptid,$PeptiEdIzm,
            $PeptidPmol,$PeptidNmol,
            $S_Pep,$Sivor,

         $Plazma,$DNK,
            $PHK,$Sluna,
            $Biopat,$PrimZAbKrov,
            $LechDIabet,$LechInsul,
            $datLechDiab,$diabLechTab,
            $LechGiper,$LechLipidGiper,
            $Onko,$VidOnko,
            $dateOnko,$OnkoLek,$hronSerd,$bearn,$vesR,$art1,$datStad,$diabAngin,$datAngin,$kakAngio,$diabNejr,$datNejr,
                            $diabStopp,$Bol,$Boltwo,$BolInten,$Bolkak,$Preparat,$PreparatKakie,$datStopObsl,$SnizhT,$golodSem,$datPochNEd,
$phone,$email,$vagaPN,$gen,$systisk,$atgad,$atgaddat,$dieta,$disttisk){
        //echo $kolInf.$kolIns;die();
        $date=date('y.m.d');
        $ip = $_SERVER['REMOTE_ADDR'];
        $id_user=$_SESSION['id'];
        $datIns= implode(";", $datIns);
        $datInf= implode(";", $datInf);


            DatabaseModule::instance()->karta->insert1(
                [
                    "name" => $name,
                    "fname" => $fname,
                    "sname" => $sname,
                    "ychas" => $ychas,
                    "nomIss" => $nomIss,
                    "sex" => $sex
                    , "datB" => $datB,
                    "city" => $city,
                    "rajon" => $rajon,
                    "work" => $work,
                    "week" => $week,
                    "fnameO" => $fnameO,
                    "nameO" => $nameO,
                    "snameO" => $snameO,
                    "ychasOtez" => $ychasOtez,
                    "nomIssO" => $nomIssO,
                    "datBOtez" => $datBOtez,
                    "oblOtez" => $oblOtez,
                    "cityOtez" => $cityOtez,
                    "lechOtez" => $lechOtez,
                    "lechOtezKak" => $lechOtezKak,
                    "fnameM" => $fnameM,
                    "nameM" => $nameM,
                    "snameM" => $snameM,
                    "ychasM" => $ychasM,
                    "nomIssM" => $nomIssM,
                    "datBM" => $datBM,
                    "oblM" => $oblM,
                    "cityM" => $cityM,
                    "lechM" => $lechM,
                    "lechMKak" => $lechMKak,
                    "lechBS" => $lechBS,
                    "lechBSKak" => $lechBSKak,
                    "golodM" => $golodM,
                    "golodO" => $golodO,
                    "golodSister" => $golodSister,
                    "death1" => $death1,
                    "death2" => $death2,
                    "ves" => $ves,
                    "rost" => $rost,
                    "tal" => $tal,
                    "bed" => $bed,
                    "index" => $index,
                    "art" => $art,
                    "smouk" => $smouk,
                    "smoukTime" => $smoukTime,
                    "smokeKol" => $smokeKol,
                    "alkogol" => $alkogol,
                    "typeDiab" => $typeDiab,
                    "yearD" => $yearD, "vekD" => $vekD,
                    "longD" => $longD, "inf" => $inf,
                    "aut" => $aut, "porok" => $porok,
                    "endoc" => $endoc, "patol" => $patol,
                    "DGR" => $DGR, "infarkt" => $infarkt,
                    "kolInf" => $kolInf,
                    "datInf" => $datInf,
                    "insult" => $insult, "kolIns" => $kolIns,
                    "datIns" => $datIns, "glaz" => $glaz,
                    "diabDiab" => $diabDiab, "diabNep" => $diabNep,
                    "diabPrep" => $diabPrep, "diabPrep2" => $diabPrep2,
                    "Slep" => $Slep, "Lazer" => $Lazer,
                    "Katar" => $Katar, "Mal" => $Mal,
                    "Glauk" => $Glauk, "LechDR" => $LechDR,
                    "datDiab" => $datDiab, "datNep" => $datNep,
                    "datPrep" => $datPrep,
                    "datPrep2" => $datPrep2,
                    "datSlep" => $datSlep, "datLazer" => $datLazer,
                    "datKatar" => $datKatar, "datMal" => $datMal,
                    "datGlauk" => $datGlauk, "OST" => $OST,
                    "pochki" => $pochki, "diabNefro" => $diabNefro,
                    "datNefro" => $datNefro, "diabPochNEd" => $diabPochNEd,
                    "diabPochSt" => $diabPochSt, "datPochSt" => $datPochSt,
                    "diabDializ" => $diabDializ, "datDializ" => $datDializ,
                    "LechPoch" => $LechPoch, "datPoli" => $datPoli,
                    "Chyvs" => $Chyvs, "NarVibr" => $NarVibr,
                    "Reflex" => $Reflex, "Jazv" => $Jazv,
                    "GnojJazv" => $GnojJazv, "PylsStopa" => $PylsStopa,
                    "Shynt" => $Shynt, "Hrom" => $Hrom,
                    "Ampyt" => $Ampyt, "kakAmput1" => $kakAmput1,
                    "datAmput" => $datAmput, "datLab" => $datLab,
                    "Natosh" => $Natosh, "Pisha" => $Pisha,
                    "nmol" => $nmol, "Datnmol" => $Datnmol,
                    "vidsot" => $vidsot, "gemogl" => $gemogl,

                    "Datgemogl" => $Datgemogl, "Datkrovi" => $Datkrovi,
                    "eritr" => $eritr, "gemogl2" => $gemogl2,
                    "lekoz" => $lekoz, "nejtrof" => $nejtrof,
                    "monozit" => $monozit, "limfoz" => $limfoz,
                    "tromb" => $tromb, "mpv" => $mpv,
                    "dryg" => $dryg, "kreat" => $kreat,
                    "datkreat" => $datkreat, "kreatMocha" => $kreatMocha,
                    "datMocha" => $datMocha, "klirkreat" => $klirkreat,
                    "Protein" => $Protein, "posIzm" => $posIzm,
                    "datProtein" => $datProtein, "Mikroalmb" => $Mikroalmb,
                    "kakMikro1" => $kakMikro, "datMikro" => $datMikro,
                    "Lipiddat" => $Lipiddat, "Holest" => $Holest,
                    "LipidVis" => $LipidVis, "LipidNiz" => $LipidNiz,
                    "Trigliz" => $Trigliz, "Asparta" => $Asparta,
                    "Alanin" => $Alanin, "BelocS" => $BelocS,
                    "Peptid" => $Peptid, "PeptiEdIzm" => $PeptiEdIzm,
                    "PeptidPmol" => $PeptidPmol, "PeptidNmol" => $PeptidNmol,
                    "S_Pep" => $S_Pep, "Sivor" => $Sivor,

                    "Plazma" => $Plazma, "DNK" => $DNK,
                    "PHK" => $PHK, "Sluna" => $Sluna,
                    "Biopat" => $Biopat, "PrimZAbKrov" => $PrimZAbKrov,
                    "LechDIabet" => $LechDIabet, "LechInsul" => $LechInsul,
                    "datLechDiab" => $datLechDiab, "diabLechTab" => $diabLechTab,
                    "LechGiper" => $LechGiper, "LechLipidGiper" => $LechLipidGiper,
                    "Onko" => $Onko, "VidOnko" => $VidOnko,
                    "dateOnko" => $dateOnko, "OnkoLek" => $OnkoLek,
                    "dateSave" => $date,
                    "id_user" => $id_user,
                    "hronSerd" => $hronSerd,
                    "date_izm" => $date,
                    "bearn"=>$bearn,
                    "vesR"=>$vesR,
                    "art1"=>$art1,
                    "datStad"=>$datStad,
                    "diabAngin"=>$diabAngin,
                    "datAngin"=>$datAngin,
                    "kakAngio"=>$kakAngio,
                    "diabNejr"=>$diabNejr,
                    "datNejr"=>$datNejr,
                    "diabStopp"=>$diabStopp,
                    "Bol"=>$Bol,
                    "Boltwo"=>$Boltwo,
                    "BolInten"=>$BolInten,
                    "Bolkak"=>$Bolkak,
                    "Preparat"=>$Preparat,
                    "PreparatKakie"=>$PreparatKakie,
                    "datStopObsl"=>$datStopObsl,
                    "SnizhT"=>$SnizhT,
                    "golodSem"=>$golodSem,
                    "datPochNEd"=>$datPochNEd,
                    "phone"=>$phone,
                    "email"=>$email,
                    "vagaPN"=>$vagaPN,
                    "gen"=>$gen,
                    "systisk"=>$systisk,
                    "atGad"=>$atgad,
                    "atGaddat"=>$atgaddat,
                    "dieta"=>$dieta,
                    "disttisk"=>$disttisk
                ]
            );

    }
    public function save($id,$name,$fname,
                         $sname,$ychas,$nomIss,$sex
        ,$datB,$city,$rajon,
                         $work,$week,
                         $fnameO,$nameO,
                         $snameO,$ychasOtez,
                         $nomIssO,$datBOtez,
                         $oblOtez,$cityOtez,
                         $lechOtez,$lechOtezKak,
                         $fnameM,$nameM,
                         $snameM,$ychasM,
                         $nomIssM,$datBM,
                         $oblM,$cityM,
                         $lechM,$lechMKak,
                         $lechBS,$lechBSKak,
                         $golodM,$golodO,
                         $golodSister,$death1,
                         $death2,$ves,
                         $rost,$tal,
                         $bed,$index,
                         $art,$smouk,
                         $smoukTime,$smokeKol,
                         $alkogol,$typeDiab,
                         $yearD,$vekD,
                         $longD,$inf,
                         $aut,$porok,
                         $endoc,$patol,
                         $DGR,$infarkt,
                         $kolInf,$datInf,
                         $insult,$kolIns,
                         $datIns,$glaz,
                         $diabDiab,$diabNep,
                         $diabPrep,$diabPrep2,
                         $Slep,$Lazer,
                         $Katar,$Mal,
                         $Glauk,$LechDR,
                         $datDiab,$datNep,
                         $datPrep,$datPrep2,
                         $datSlep,$datLazer,
                         $datKatar,$datMal,
                         $datGlauk,$OST,
                         $pochki,$diabNefro,
                         $datNefro,$diabPochNEd,
                         $diabPochSt,$datPochSt,
                         $diabDializ,$datDializ,
                         $LechPoch,$datPoli,
                         $Chyvs,$NarVibr,
                         $Reflex,$Jazv,
                         $GnojJazv,$PylsStopa,
                         $Shynt,$Hrom,
                         $Ampyt,$kakAmput1,
                         $datAmput,$datLab,
                         $Natosh,$Pisha,
                         $nmol,$Datnmol,
                         $vidsot,$gemogl,

                         $Datgemogl,$Datkrovi,
                         $eritr,$gemogl2,
                         $lekoz,$nejtrof,
                         $monozit,$limfoz,
                         $tromb,$mpv,
                         $dryg,$kreat,
                         $datkreat,$kreatMocha,
                         $datMocha,$klirkreat,
                         $Protein,$posIzm,
                         $datProtein,$Mikroalmb,
                         $kakMikro,$datMikro,
                         $Lipiddat,$Holest,
                         $LipidVis,$LipidNiz,
                         $Trigliz,$Asparta,
                         $Alanin,$BelocS,
                         $Peptid,$PeptiEdIzm,
                         $PeptidPmol,$PeptidNmol,
                         $S_Pep,$Sivor,

                         $Plazma,$DNK,
                         $PHK,$Sluna,
                         $Biopat,$PrimZAbKrov,
                         $LechDIabet,$LechInsul,
                         $datLechDiab,$diabLechTab,
                         $LechGiper,$LechLipidGiper,
                         $Onko,$VidOnko,
                         $dateOnko,$OnkoLek,$hronSerd,$bearn,$vesR,$art1,$datStad,$diabAngin,$datAngin,$kakAngio,$diabNejr,$datNejr,
                         $diabStopp,$Bol,$Boltwo,$BolInten,$Bolkak,$Preparat,$PreparatKakie,$datStopObsl,$SnizhT,$golodSem,$datPochNEd,$arr,
$phone,$email,$vagaPN,$gen,$systisk,$atgad,$atgaddat,$dieta,$disttisk){


        $date=date('y.m.d');

        $tmp=DatabaseModule::instance()->karta->select("id={$id}");
        $ii=0;
        $datIns= implode(";", $datIns);
        $datInf= implode(";", $datInf);
        $datIns1=implode(";",$arr['datIns']);
        $datInf1=implode(";",$arr['datInf']);

        foreach ($tmp[0] as $key=>$item):

            if($key!='del_k' and $key!='date_izm') {
            if(!empty($arr[$key])) {

                if ($arr[$key] != $item) {
                    if($key=='datInf' or $key=='datIns') {
                        if ($key == 'datInf') {
                            if ($datInf != $item) {
                                $up="Insert into history(`id_k`,  `nameStol`, `val`, `date_izm`) values({$id},'{$key}','{$item}','$date')";
                                $t=DatabaseModule::instance()->exec($up);
                            }
                        }
                        if ($key == 'datIns') {
                            if ($datIns != $item) {
                                $up="Insert into history(`id_k`,  `nameStol`, `val`, `date_izm`) values({$id},'{$key}','{$item}','$date')";
                                $t=DatabaseModule::instance()->exec($up);

                            }
                        }
                    }else {
                       $up="Insert into history(`id_k`,  `nameStol`, `val`, `date_izm`) values({$id},'{$key}','{$item}','$date')";
                       $t=DatabaseModule::instance()->exec($up);
                    }

                }
            }
            }
            endforeach;


        $ip = $_SERVER['REMOTE_ADDR'];
        $id_user=$_SESSION['id'];



        DatabaseModule::instance()->karta->updateWhere18(
            [
                "name" => $name,
                "fname" => $fname,
                "sname" => $sname,
                "ychas" => $ychas,
                "nomIss" => $nomIss,
                "sex" => $sex
                , "datB" => $datB,
                "city" => $city,
                "rajon" => $rajon,
                "work" => $work,
                "week" => $week,
                "fnameO" => $fnameO,
                "nameO" => $nameO,
                "snameO" => $snameO,
                "ychasOtez" => $ychasOtez,
                "nomIssO" => $nomIssO,
                "datBOtez" => $datBOtez,
                "oblOtez" => $oblOtez,
                "cityOtez" => $cityOtez,
                "lechOtez" => $lechOtez,
                "lechOtezKak" => $lechOtezKak,
                "fnameM" => $fnameM,
                "nameM" => $nameM,
                "snameM" => $snameM,
                "ychasM" => $ychasM,
                "nomIssM" => $nomIssM,
                "datBM" => $datBM,
                "oblM" => $oblM,
                "cityM" => $cityM,
                "lechM" => $lechM,
                "lechMKak" => $lechMKak,
                "lechBS" => $lechBS,
                "lechBSKak" => $lechBSKak,
                "golodM" => $golodM,
                "golodO" => $golodO,
                "golodSister" => $golodSister,
                "death1" => $death1,
                "death2" => $death2,
                "ves" => $ves,
                "rost" => $rost,
                "tal" => $tal,
                "bed" => $bed,
                "index" => $index,
                "art" => $art,
                "smouk" => $smouk,
                "smoukTime" => $smoukTime,
                "smokeKol" => $smokeKol,
                "alkogol" => $alkogol,
                "typeDiab" => $typeDiab,
                "yearD" => $yearD, "vekD" => $vekD,
                "longD" => $longD, "inf" => $inf,
                "aut" => $aut, "porok" => $porok,
                "endoc" => $endoc, "patol" => $patol,
                "DGR" => $DGR, "infarkt" => $infarkt,
                "kolInf" => $kolInf,
                "datInf" => $datInf,
                "insult" => $insult, "kolIns" => $kolIns,
                "datIns" => $datIns, "glaz" => $glaz,
                "diabDiab" => $diabDiab, "diabNep" => $diabNep,
                "diabPrep" => $diabPrep, "diabPrep2" => $diabPrep2,
                "Slep" => $Slep, "Lazer" => $Lazer,
                "Katar" => $Katar, "Mal" => $Mal,
                "Glauk" => $Glauk, "LechDR" => $LechDR,
                "datDiab" => $datDiab, "datNep" => $datNep,
                "datPrep" => $datPrep,
                "datPrep2" => $datPrep2,
                "datSlep" => $datSlep, "datLazer" => $datLazer,
                "datKatar" => $datKatar, "datMal" => $datMal,
                "datGlauk" => $datGlauk, "OST" => $OST,
                "pochki" => $pochki, "diabNefro" => $diabNefro,
                "datNefro" => $datNefro, "diabPochNEd" => $diabPochNEd,
                "diabPochSt" => $diabPochSt, "datPochSt" => $datPochSt,
                "diabDializ" => $diabDializ, "datDializ" => $datDializ,
                "LechPoch" => $LechPoch, "datPoli" => $datPoli,
                "Chyvs" => $Chyvs, "NarVibr" => $NarVibr,
                "Reflex" => $Reflex, "Jazv" => $Jazv,
                "GnojJazv" => $GnojJazv, "PylsStopa" => $PylsStopa,
                "Shynt" => $Shynt, "Hrom" => $Hrom,
                "Ampyt" => $Ampyt, "kakAmput1" => $kakAmput1,
                "datAmput" => $datAmput, "datLab" => $datLab,
                "Natosh" => $Natosh, "Pisha" => $Pisha,
                "nmol" => $nmol, "Datnmol" => $Datnmol,
                "vidsot" => $vidsot, "gemogl" => $gemogl,

                "Datgemogl" => $Datgemogl, "Datkrovi" => $Datkrovi,
                "eritr" => $eritr, "gemogl2" => $gemogl2,
                "lekoz" => $lekoz, "nejtrof" => $nejtrof,
                "monozit" => $monozit, "limfoz" => $limfoz,
                "tromb" => $tromb, "mpv" => $mpv,
                "dryg" => $dryg, "kreat" => $kreat,
                "datkreat" => $datkreat, "kreatMocha" => $kreatMocha,
                "datMocha" => $datMocha, "klirkreat" => $klirkreat,
                "Protein" => $Protein, "posIzm" => $posIzm,
                "datProtein" => $datProtein, "Mikroalmb" => $Mikroalmb,
                "kakMikro1" => $kakMikro, "datMikro" => $datMikro,
                "Lipiddat" => $Lipiddat, "Holest" => $Holest,
                "LipidVis" => $LipidVis, "LipidNiz" => $LipidNiz,
                "Trigliz" => $Trigliz, "Asparta" => $Asparta,
                "Alanin" => $Alanin, "BelocS" => $BelocS,
                "Peptid" => $Peptid, "PeptiEdIzm" => $PeptiEdIzm,
                "PeptidPmol" => $PeptidPmol, "PeptidNmol" => $PeptidNmol,
                "S_Pep" => $S_Pep, "Sivor" => $Sivor,

                "Plazma" => $Plazma, "DNK" => $DNK,
                "PHK" => $PHK, "Sluna" => $Sluna,
                "Biopat" => $Biopat, "PrimZAbKrov" => $PrimZAbKrov,
                "LechDIabet" => $LechDIabet, "LechInsul" => $LechInsul,
                "datLechDiab" => $datLechDiab, "diabLechTab" => $diabLechTab,
                "LechGiper" => $LechGiper, "LechLipidGiper" => $LechLipidGiper,
                "Onko" => $Onko, "VidOnko" => $VidOnko,
                "dateOnko" => $dateOnko, "OnkoLek" => $OnkoLek,
                "dateSave" => $date,
                "id_user" => $id_user,
                "hronSerd" => $hronSerd,
                "date_izm" => $date,
                "bearn"=>$bearn,
                "vesR"=>$vesR,
                "art1"=>$art1,
                "datStad"=>$datStad,
                "diabAngin"=>$diabAngin,
                "datAngin"=>$datAngin,
                "kakAngio"=>$kakAngio,
                "diabNejr"=>$diabNejr,
                "datNejr"=>$datNejr,
                "diabStopp"=>$diabStopp,
                "Bol"=>$Bol,
                "Boltwo"=>$Boltwo,
                "BolInten"=>$BolInten,
                "Bolkak"=>$Bolkak,
                "Preparat"=>$Preparat,
                "PreparatKakie"=>$PreparatKakie,
                "datStopObsl"=>$datStopObsl,
                "SnizhT"=>$SnizhT,
                "golodSem"=>$golodSem,
                "datPochNEd"=>$datPochNEd,
                "phone"=>$phone,
                "email"=>$email,
                "vagaPN"=>$vagaPN,
                "gen"=>$gen,
                "systisk"=>$systisk,
                "atGad"=>$atgad,
                "atGaddat"=>$atgaddat,
                "dieta"=>$dieta,
                "disttisk"=>$disttisk
            ],"id={$id}"
        );

    }

}
