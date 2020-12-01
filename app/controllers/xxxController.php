<?php
session_start();
class xxxController extends Controller
{
public function action_index()
{
    $opt=[
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
    ];

    $dbh=new PDO("mysql:host=mysql.ukrdomen.com;dbname=uh1108308_dlc","uh1108308_dlc","NPyuW3gnhxQT",$opt
    );
    $res=$dbh->query("select id, fname, name, sname, sex,datB, typeDiab, city, date_izm from karta");

    /*while($row=$res->fetch()){

        echo "id='o{$row['id']}' onclick='edit(this.id)'><td><form method='post' name='k{$row['id']}' id='k{$row['id']}'><input type='hidden' name='id_k' value='{$row['id']}'></form> {$row['id']}</td>
        <td>{$row['fname']} {$row['name']} {$row['sname']}</td><td>{$row['sex']}</td><td>{$row['datB']}</td>
                <td>{$row['typeDiab']}</td><td>{$row['city']}</td><td>{$row['date_izm']}</td></tr>";
    }*/
    $rows = array();

// Loop over the db resultset and put encoded values into $rows
    while($row=$res->fetch()) {
        $rows[] = array_map('utf8_encode', $row);
    }

// Output $rows
    echo json_encode($rows);die();

}
}