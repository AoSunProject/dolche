<form method="post" action="<?=Url::getAction('ins','getfile')?>" enctype="multipart/form-data">
    <input type="file" name="excel">
    <input type="submit" value="Імпортувати дані" name="btn-add">
</form>
<title>Імпорт в базу даних</title>
<?php


if(isset($_SESSION['user'])){
    if($_SESSION['role']==2){
   ?>
            <?php
        if(isset($fileName)) {
            header('Content-Type: text/html; charset=utf-8');
            ini_set('error_reporting', E_ALL);
            ini_set('display_errors', 1);
            ini_set('display_startup_errors', 1);
            require_once 'Classes/PHPExcel.php';

            $opt = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ];

            $dbh = new PDO("mysql:host=mysql.ukrdomen.com;dbname=uh1108308_dlc", "uh1108308_dlc", "NPyuW3gnhxQT", $opt);
            if (file_exists($fileName)) {
                echo "The file $fileName exists";

            $pExcel = PHPExcel_IOFactory::load($fileName);

            // Цикл по листам Excel-файла
            $i = 0;
            foreach ($pExcel->getWorksheetIterator() as $worksheet) {
                // выгружаем данные из объекта в массив
                $tables[] = $worksheet->toArray();

                $i++;

            }

            $countRow = 0;
            $n = 0;
$diabDiab='Ні';
$diabNefro='Ні';
            foreach ($tables as $table) {

                foreach ($table as $row) {

                    if (!empty($row[0]) and $row[0] != '') {
                        if ($n != 0) {

                            $countRow++;
                            $pp=str_replace(' (','(',$row[4]);
                            $priz = explode(" ", $pp);
                           /* $datB =  date_format(strtotime($row[6]),'%yyyy-%mm-%dd');*/
                           /* $datB = DateTime::createFromFormat('Y-m-d', $row[6]);*/


                            if ($row[5] == 0) {
                                $sex = 'Чоловіча';
                            } elseif ($row[5] == 1) {
                                $sex = 'Жіноча';
                            } else {
                                $sex = '--';
                            }
                            if ($row[9] == 0) {
                                $gen = 'Ні';
                            } elseif ($row[9] == 1) {
                                $gen = 'Так';
                            } elseif ($row[9] == 2) {
                                $gen = 'Не знаю';
                            } else {
                                $gen = '--';
                            }
                            if ($row[12] == 0) {
                                $lechOtez = 'Ні';
                            } elseif ($row[12] == 1) {
                                $lechOtez = 'Так';
                             }elseif ($row[12] == 2) {
                                $lechOtez = 'Не знаю';
                            }else {
                                $lechOtez = '--';
                            }
                            if ($row[11] == 0) {
                                $lechM = 'Ні';
                            } elseif ($row[11] == 1) {
                                $lechM = 'Так';
                            }elseif ($row[11] == 2) {
                                $lechM = 'Не знаю';
                            } else {
                                $lechM = '--';
                            }
                            if ($row[13] == 0) {
                                $lechBS = 'Ні';
                            } elseif ($row[13] == 1) {
                                $lechBS = 'Так';
                            } else {
                                $lechBS = '--';
                            }


                            /*if  ($row[18] =! 0) {
                                $systisk = $row[18];
                                $art='0`';

                            } elseif ($row[18] == 0 and $row[19] =!0) {
                            $art = '10`';
                            $systisk = $row[19];
                            } else {
                                $systisk = '--';
                                $art = '--`';
                            }

                            if  ($row[22] =! 0) {
                                $disttisk = $row[22];
                                $art1='0`';

                            } elseif ($row[22] == 0 and $row[23] =!0) {
                                $art1 = '10`';
                                $disttisk = $row[23];
                            } else {
                                $disttisk = '--';
                                $art1 = '--`';
                            }*/

                            if ($row[26] == 0) {
                                $smouk = 'Ні';
                            } elseif ($row[26] == 1) {
                                $smouk = 'Так';
                            } else {
                                $smouk = '--';
                            }
                            if ($row[28] == 0) {
                                $alkogol = 'Ніколи';
                            } elseif ($row[28] == 1) {
                                $alkogol = 'Менше 1 разу на місяць';
                            } else {
                                $alkogol = '--';
                            }
                            if ($row[30] == 0) {
                                $typeDiab = 'Не хворіє';
                            } elseif ($row[30] == 1) {
                                $typeDiab = 'ЦД 1 типу';
                            } elseif ($row[30] == 2) {
                                $typeDiab = 'ЦД 2 типу';
                            } elseif ($row[30] == 3) {
                                $typeDiab = 'Інший';
                            } else {
                                $typeDiab = '--';
                            }
                            if ($row[44] == 0) {
                                $diabAngin = 'Ні';
                            } elseif ($row[44] == 1) {
                                $diabAngin = 'Так';

                            } elseif ($row[44] == 2) {
                                $diabAngin = 'Так';

                            } else {
                                $diabAngin = '--';

                            }
                            if ($row[48] == 0) {
                                $Katar = 'Ні';
                            } elseif ($row[48] == 1) {
                                $Katar = 'Так';
                            } else {
                                $Katar = '--';
                            }
                            if ($row[50] == 0) {
                                $Mal = 'Ні';
                            } elseif ($row[50] == 1) {
                                $Mal = 'Так';
                            } else {
                                $Mal = '--';
                            }
                            if ($row[52] == 0) {
                                $diabNep = 'Ні';
                            } elseif ($row[52] == 1) {
                                $diabNep = 'Так';
                                $diabDiab = 'Так';
                            } else {
                                $diabNep = '--';
                            }
                            if ($row[54] == 0) {
                                $diabPrep = 'Ні';
                            } elseif ($row[54] == 1) {
                                $diabPrep = 'Так';
                                $diabDiab = 'Так';
                            } else {
                                $diabPrep = '--';
                            }
                            if ($row[56] == 0) {
                                $diabPrep2 = 'Ні';
                            } elseif ($row[56] == 1) {
                                $diabPrep2 = 'Так';
                                $diabDiab = 'Так';
                            } else {
                                $diabPrep2 = '--';
                            }
                            if ($row[58] == 0) {
                                $Slep = 'Ні';
                            } elseif ($row[58] == 1) {
                                $Slep = 'Так';
                            } else {
                                $Slep = '--';
                            }
                            if ($row[60] == 0) {
                                $Lazer = 'Ні';
                            } elseif ($row[60] == 1) {
                                $Lazer = 'Так';
                            } else {
                                $Lazer = '--';
                            }
                            if ($row[64] == 0) {
                                $diabPochNEd = 'Ні';
                            } elseif ($row[64] == 1) {
                                $diabPochNEd = 'Так';
                                $diabNefro = 'Так';
                            } else {
                                $diabPochNEd = '--';
                            }
                            if ($row[66] == 0) {
                                $diabPochSt = 'Ні';
                            } elseif ($row[66] == 1) {
                                $diabPochSt = 'Так';
                                $diabNefro = 'Так';
                            } else {
                                $diabPochSt = '--';
                            }
                            if ($row[70] == 0) {
                                $SnizhT = 'Ні';
                            } elseif ($row[70] == 1) {
                                $SnizhT = 'Так';
                            } else {
                                $SnizhT = '--';
                            }
                            if ($row[71] == 0) {
                                $Chyvs = 'Ні';
                            } elseif ($row[71] == 1) {
                                $Chyvs = 'Так';
                            } else {
                                $Chyvs = '--';
                            }
                            if ($row[72] == 0) {
                                $NarVibr = 'Ні';
                            } elseif ($row[72] == 1) {
                                $NarVibr = 'Так';
                            } else {
                                $NarVibr = '--';
                            }
                            if ($row[73] == 0) {
                                $Jazv = 'Ні';
                            } elseif ($row[73] == 1) {
                                $Jazv = 'Так';
                            } else {
                                $Jazv = '--';
                            }
                            if ($row[74] == 0) {
                                $GnojJazv = 'Ні';
                            } elseif ($row[74] == 1) {
                                $GnojJazv = 'Так';
                            } else {
                                $GnojJazv = '--';
                            }
                            if ($row[75] == 0) {
                                $PylsStopa = 'Ні';
                            } elseif ($row[75] == 1) {
                                $PylsStopa = 'Так';
                            } else {
                                $PylsStopa = '--';
                            }
                            if ($row[77] == 0) {
                                $Shynt = 'Ні';
                            } elseif ($row[77] == 1) {
                                $Shynt = 'Так';
                            } else {
                                $Shynt = '--';
                            }
                            if ($row[78] == 0) {
                                $diabNejr = 'Ні';
                            } elseif ($row[78] == 1) {
                                $diabNejr = 'Так';
                            } else {
                                $diabNejr = '--';
                            }
                            if ($row[79] == 0) {
                                $Hrom = 'Ні';
                            } elseif ($row[79] == 1) {
                                $Hrom = 'Так';
                            } else {
                                $Hrom = '--';
                            }
                            if ($row[80] == 0 and $row[83] == 0) {    /*Уточнить*/
                                $Ampyt = 'Ні';
                            } elseif ($row[80] == 1) {
                                $Ampyt = 'Ліва нога';
                            } elseif ($row[83] == 1) {
                                $Ampyt = 'Права нога';
                            } else {
                                $Ampyt = '--';
                            }
                            if ($row[95] == 0) {
                                $Protein = 'Ні';
                            } else {
                                $Protein = '--';
                            }
                            if ($row[97] == 0) {
                                $Mikroalmb = 'Ні';
                            } elseif ($row[97] == 1) {
                                $Mikroalmb = 'Так';
                                $datMikro1=explode(".",$row[98]);
                                $datMikro=$datMikro1[2].".".$datMikro1['1'].".".$datMikro1['0'];

                            } else {
                                $Mikroalmb = '--';
                            }
                            if ($row[99] == 0) {
                                $Sivor = 'Ні';
                            } elseif ($row[99] == 1) {
                                $Sivor = 'Так';
                            } else {
                                $Sivor = '--';
                            }
                            if ($row[100] == 0) {
                                $Plazma = 'Ні';
                            } elseif ($row[100] == 1) {
                                $Plazma = 'Так';
                            } else {
                                $Plazma = '--';
                            }
                            if ($row[101] == 0) {
                                $DNK = 'Ні';
                            } elseif ($row[101] == 1) {
                                $DNK = 'Так';
                            } else {
                                $DNK = '--';
                            }
                            if ($row[103] == 0) {
                                $LechDIabet = 'Не проводиться';
                            } elseif ($row[103] == 1) {
                                $LechDIabet = 'Таблетки';
                            } elseif ($row[103] == 2) {
                                $LechDIabet = 'Інсулін';
                            } elseif ($row[103] == 3) {
                                $LechDIabet = 'Таблетки + інсулін';
                            } elseif ($row[104] == 1) {
                                $LechDIabet = 'Дієта';
                            } else {
                                $LechDIabet = '--';
                            }

                            if ($row[104] == 0) {
                                $dieta = 'Ні';
                            } elseif ($row[104] == 1) {
                                $dieta= 'Так';
                            } else {
                                $dieta = '--';
                            }

                            if ($row[105] == 0) {
                                $LechInsul = 'Ні';
                            }  else {
                                $LechInsul = '--';
                            }
                            if ($row[118] == 0) {
                                $diabLechTab = 'Бігуаніди';
                            } elseif ($row[118] == 1) {
                                $diabLechTab = 'Похідні сульфонілсечовини';
                            } elseif ($row[118] == 2) {
                                $diabLechTab = 'Інгібітори ДПП-4';
                            } elseif ($row[118] == 3) {
                                $diabLechTab = 'Інгібітори НЗКТГ-2';
                            } elseif ($row[118] == 4) {
                                $diabLechTab = 'Тіазолідиндіони';
                            } elseif ($row[118] == 5) {
                                $diabLechTab = 'Інгібітори a-глікозидази';
                            } elseif ($row[118] == 6) {
                                $diabLechTab = 'Меглітінід';
                            } else {
                                $diabLechTab = '--';
                            }
                            if ($row[184] == 0) {
                                $LechGiper = 'Ні';
                            }
                            else {
                                $LechGiper = '--';
                            }
                            if ($row[185] == 0) {
                                $LechLipidGiper = 'Ні';
                            } else {
                                $LechLipidGiper = '--';
                            }
                            if ($row[161] == 0) {
                                $diabDializ = 'Ні';
                            } elseif ($row[161] == 1) {
                                $diabDializ = 'Так';
                            } else {
                                $diabDializ = '--';
                            }
                            if ($row[170] == 0) {
                                $Onko = 'Ні';
                            } elseif ($row[170] == 1) {
                                $Onko = 'Так';
                            } else {
                                $Onko = '--';
                            }
                            if ($row[34] == 0) {
                                $infarkt = 'Ні';
                            } elseif ($row[34] == 1) {
                                $infarkt = 'Так';
                                if ($row[34]==1 and $row[36] ==0){
                                    $kolinf =1;
                                    $datInf ="{$row['35']}.01.01";
                                }
                                elseif ($row[34]==1 and $row[36] ==1) {
                                    $kolinf =2;
                                    $datInf = "{$row['36']}.01.01"+';'+"{$row['37']}.01.01";
                                }
                                else
                                {$kolinf ='';
                                $datInf='';}
                            } else {
                                $infarkt = '--';
                            }
                            if ($row[38] == 0) {
                                $insult = 'Ні';
                            } elseif ($row[38] == 1) {
                                $insult = 'Так';
                                if ($row[38]==1 and $row[40] ==0){
                                    $kolins ='1';
                                    $datIns = "{$row['39']}.01.01";

                                }
                                elseif ($row[38]==1 and $row[40] ==1) {
                                    $kolins ='2';
                                    $datIns = "{$row['39']}.01.01"+';'+"{$row['41']}.01.01";
                                }
                                else
                                {$kolins ='';
                                    $datIns='';}
                            } else {
                                $insult = '--';
                            }
                            $datB1=explode(".",$row[6]);
                           // var_dump($datB1);
                            $datB=$datB1[2].".".$datB1['1'].".".$datB1['0'];
                            //
                            $dateSave1=explode(".",$row[2]);
                            //
                            $dateSave=$dateSave1[2].".".$dateSave1['1'].".".$dateSave1['0'];
                            //
                            $glaz1=explode(".",$row[47]);
                            //
                            $glaz=$glaz1[2].".".$glaz1['1'].".".$glaz1['0'];
                            //
                            $pochki1=explode(".",$row[63]);
                            //
                            $pochki=$pochki1[2].".".$pochki1['1'].".".$pochki1['0'];
                            //
                            $datStopObsl1=explode(".",$row[69]);
                            //
                            $datStopObsl=$datStopObsl1[2].".".$datStopObsl1['1'].".".$datStopObsl1['0'];
                            //
                            $Datnmol1=explode(".",$row[88]);
                            //
                            $Datnmol=$Datnmol1[2].".".$Datnmol1['1'].".".$Datnmol1['0'];
                            //
                            $Datgemogl1=explode(".",$row[90]);
                            //
                            $Datgemogl=$Datgemogl1[2].".".$Datgemogl1['1'].".".$Datgemogl1['0'];
                            //
                            $datkreat1=explode(".",$row[94]);
                            //
                            $datkreat=$datkreat1[2].".".$datkreat1['1'].".".$datkreat1['0'];
                            //
                            $datProtein1=explode(".",$row[96]);
                            //
                            $datProtein=$datProtein1[2].".".$datProtein1['1'].".".$datProtein1['0'];
                            //
                            $Lipiddat1=explode(".",$row[155]);
                            //
                            $Lipiddat=$Lipiddat1[2].".".$Lipiddat1['1'].".".$Lipiddat1['0'];
                            //
                            $atGaddat1=explode(".",$row[159]);
                            //
                            $atGaddat=$atGaddat1[2].".".$atGaddat1['1'].".".$atGaddat1['0'];
                            //
                            $S_Pep1=explode(".",$row[160]);
                            //
                            $S_Pep=$S_Pep1[2].".".$S_Pep1['1'].".".$S_Pep1['0'];
                            //
                            $datLab1=explode(".",$row[86]);
                            //
                            $datLab=$datLab1[2].".".$datLab1['1'].".".$datLab1['0'];
                            //

                            $datAngin = "{$row['45']}.01.01";
                            $datKatar = "{$row['49']}.01.01";
                            $datMal = "{$row['51']}.01.01";
                            $datNep = "{$row['53']}.01.01";
                            $datPrep = "{$row['55']}.01.01";
                            $datPrep2 = "{$row['57']}.01.01";
                            $datSlep = "{$row['59']}.01.01";
                            $datLazer = "{$row['61']}.01.01";
                            $datPochNEd = "{$row['65']}.01.01";
                            $datPochSt = "{$row['67']}.01.01";


                            $datAmput = "{$row['82']}.01.01";
                            $datDializ = "{$row['162']}.01.01";
                            $ves=str_replace(",",".",$row[14]);
                            $sql_1 = "INSERT INTO karta(`fname`, `name`, `sname`,
 `dateSave`,`sex`,`datB`,`vagaPN`,`city`,
 `gen`,`lechOtez`,`lechM`,`lechBS`,
`ves`,`rost`,`tal`,`index`,
`art`,`systisk`,`art1`,`disttisk`,
                   `smouk`,`smokeKol`,
                   `alkogol`, `typeDiab`,`yearD`,`longD`,`infarkt`,`kolinf`,`datInf`,`insult`,`kolins`,`datIns`,`datStad`, `diabAngin`,`datAngin`,`glaz`,`Katar`,`datKatar`,
                   `Mal`, `datMal`,`diabDiab`,`diabNep`,`datNep`,`diabPrep`,`datPrep`,`diabPrep2`,`datPrep2`,`Slep`,`datSlep`,`Lazer`,`datLazer`
                   ,`pochki`,`diabNefro`, `diabPochNEd`,`datPochNEd`, `diabPochSt`,`datPochSt`,`datStopObsl`,`SnizhT`,`Chyvs`,`NarVibr`,`Jazv`,`GnojJazv`
                   , `PylsStopa`, `Shynt`, `diabNejr`, `Hrom`, `Ampyt`, `datAmput`,`datLab`,`nmol`,`Datnmol`,`vidsot`,`Datgemogl`,`kreat`,`datkreat`
                   ,`Protein`,`datProtein`,`Mikroalmb`,`datMikro`,`Sivor`,`Plazma`,`DNK`,`PrimZAbKrov`,`LechDIabet`,`dieta`,`LechInsul`,`diabLechTab`, `LechGiper`
                   ,`LechLipidGiper`,`rajon`,`Holest`,`LipidVis`,`LipidNiz`,`Trigliz`,`atGad`,`atGaddat`,`PeptidNmol`,`Lipiddat`,`S_Pep`,`diabDializ`,`datDializ`,`inf`
                   ,`aut`,`porok`,`endoc`,`patol`,`Onko`)
                     VALUES('{$priz[0]}','{$priz[1]}','{$priz[2]}',
                      '$datesave', 
                      '$sex', 
                      '$datB',
                      '$row[7]',
                      '$row[8]',
                      '$gen',
                      '$lechOtez',
                      '$lechM',
                      '$lechBS',
                      '$row[14]','$row[15]','$row[16]','$row[17]',
                      '$row[18]','$row[19]','$row[22]','$row[23]',
                      '$smouk','$row[27]',
                      '$alkogol','$typeDiab','$row[32]','$row[33]','$infarkt','$kolinf','$datInf','$insult','$kolins','$datIns','$row[44]','$diabAngin','$datAngin','$glaz','$Katar','$datKatar',
                      '$Mal','$datMal','$diabDiab','$diabNep','$datNep','$diabPrep','$datPrep','$diabPrep2','$datPrep2','$Slep','$datSlep','$Lazer','$datLazer'
                      ,'$pochki','$diabNefro','$diabPochNEd','$datPochNEd','$diabPochSt','$datPochSt','$datStopObsl','$SnizhT','$Chyvs','$NarVibr','$Jazv','$GnojJazv'
                      , '$PylsStopa','$Shynt','$diabNejr', '$Hrom','$Ampyt', '$datAmput','$datLab','$row[87]','$Datnmol','$row[89]','$Datgemogl','$row[93]','$datkreat'
                      ,'$Protein','$datProtein','$Mikroalmb','$datMikro','$Sivor','$Plazma','$DNK','$row[102]','$LechDIabet','$dieta','$LechInsul','$diabLechTab','$LechGiper'
                      ,'$LechLipidGiper','$row[147]','$row[149]','$row[150]','$row[151]','$row[152]','$row[153]','$atGaddat','$row[154]','$Lipiddat','$S_Pep','$diabDializ','$datDializ','$row[165]',
                      '$row[166]','$row[167]','$row[168]','$row[169]','$Onko')";

              // echo $sql_1."<br>";
                           $dbh->query($sql_1);
                        }
                        $n++;

                    }
                    $diabDiab='Ні';
                    $diabNefro='Ні';
                }

            }
            } else {
                echo "The file $fileName does not exist";


            }

        }
    }else{

    }

}else{
    echo "Ви не авторизовані в системі";
}
