<?php

        $opt=[
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
        ];

        $dbh=new PDO("mysql:host=mysql.ukrdomen.com;dbname=uh1108308_dlc","uh1108308_dlc","NPyuW3gnhxQT",$opt
        );
        if($_GET['str']=='Всі'){
            $str="Select id,nomPac, concat(fname,' ',name, ' ',sname) as pib, sex,datB, typeDiab, city, date_izm from
 (select * from karta order by nomPac, nomV desc,id) x group by nomPac";
        }else{
            $str="Select id,nomPac, concat(fname,' ',name, ' ',sname) as pib, sex,datB, typeDiab, city, date_izm from
 (select * from karta order by nomPac, nomV desc,id) x where  
fname like '{$_GET['str']}%' group by nomPac";
        }

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
