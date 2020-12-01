<?php
$opt=[
    PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
];

$dbh=new PDO("mysql:host=mysql.ukrdomen.com;dbname=uh1108308_dlc","uh1108308_dlc","NPyuW3gnhxQT",$opt
);
$res=$dbh->query("select id, concat(fname,' ',name, ' ',sname) as pib, sex,datB, typeDiab, city, date_izm from karta");
$json = array();
while( $row = $res->fetch()) {
  /*  $b="<form method='post' name='k{$row['id']}' id='k{$row['id']}'>
<input type='hidden' name='id_k' value='{$row['id']}'></form>{$row['id']}";
    array_push($json, array($b, $row['pib'],$row['sex'],$row['datB'],$row['typeDiab'],$row['city'],$row['date_izm']));*/

    array_push($json, array($row['id'],$row['pib'],$row['sex'],$row['datB'],$row['typeDiab'],$row['city'],$row['date_izm']));
}

header('Content-Type: application/json');
echo json_encode(['data' => $json],
    JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);


?>
