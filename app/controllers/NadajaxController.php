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



?>
<span class="ui-menuitem-text">Номер учасника: №
    <? echo $row['nomPac'];?>  ПІБ: <? echo $row['fname'];?>
    <? echo $row['name'];?>
    <? echo $row['sname']."[ Візит № {$row['nomV']} від {$row['datV']}]";?>




<?

    die();

?>
