<?php

        $opt=[
            PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
        ];

        $dbh=new PDO("mysql:host=mysql.ukrdomen.com;dbname=uh1108308_dlc","uh1108308_dlc","NPyuW3gnhxQT",$opt
        );
        $res=$dbh->query("select id, concat(fname,' ',name, ' ',sname) as pib, sex,datB, typeDiab, city, date_izm from karta where  
fname like 'А%'");
        $json = array();
        while( $row = $res->fetch()) {
            echo "<tr class='gradeA' ";
            if($row['del_k']==1){
                echo "style='color:red;'";
            }
            echo "id='o{$row['id']}' onclick='edit(this.id)'><td><form method='post' name='k{$row['id']}' id='k{$row['id']}'>
        <input type='hidden' name='id_k' value='{$row['id']}'></form> {$row['id']}</td>
            <td>{$row['pib']}</td><td>{$row['sex']}</td><td>{$row['datB']}</td>
                    <td>{$row['typeDiab']}</td><td>{$row['city']}</td><td>{$row['date_izm']}</td></tr>";
        }



    die();

?>
