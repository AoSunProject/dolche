<?php
class DatabaseModule
{
private $dbh,$tables,$table=NULL;
private static $instance = NULL;
public static function instance(){
    return self::$instance===NULL
        ? self::$instance=new self()
        : self::$instance;

}
private function __construct()
{
    $config = ConfigModule::load("Database/Database");
       $opt=[
        PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
    ];

    $this->dbh=new PDO("mysql:host=mysql.ukrdomen.com;dbname=uh1108308_dlc","uh1108308_dlc","NPyuW3gnhxQT",$opt
         );
    $this->dbh->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, false);
    $this->tables = $this->dbh->query("SHOW TABLES;")->fetchAll(PDO::FETCH_COLUMN);

}
public function __get($name)
{
if(!in_array($name,$this->tables)) throw new Exception("Table {$name} not exists");
$this->table= $name;
return $this;
    // TODO: Implement __get() method.
}
public function exec($query, array $data=[]){


    $stmt = $this->dbh->prepare($query);
    $stmt->execute($data);
}
    public function exec1($query, array $data=[]){

        //echo $query;
        return $this->query($query,$data);

    }
    public function insertvizit($id_k,$nomPac){
        $date=date('y.m.d');
        $nv="Select max(nomV) from karta where nomPac={$nomPac}";

        $tmp=$this->query($nv);
        $maxv=$tmp[0]['max(nomV)']+1;

    $st="INSERT INTO `karta`(`fname`, `name`, `sname`, `ychas`, `nomIss`, `sex`, `datB`, `city`, `rajon`, `work`, `week`, `fnameO`, `nameO`, `snameO`, `ychasOtez`, `nomIssO`, `datBOtez`, `oblOtez`, `cityOtez`, `lechOtez`, `lechOtezKak`, `fnameM`, `nameM`, `snameM`, `ychasM`, `nomIssM`, `datBM`, `oblM`, `cityM`, `lechM`, `lechMKak`, `lechBS`, `lechBSKak`, `golodM`, `golodO`, `golodSister`, `death1`, `death2`, `ves`, `rost`, `tal`, `bed`, `index`, `art`, `smouk`, `smoukTime`, `smokeKol`, `alkogol`, `typeDiab`, `yearD`, `vekD`, `longD`, `inf`, `aut`, `porok`, `endoc`, `patol`, `DGR`, `infarkt`, `kolInf`, `datInf`, `insult`, `kolIns`, `datIns`, `glaz`, `diabDiab`, `diabNep`, `diabPrep`, `diabPrep2`, `Slep`, `Lazer`, `Katar`, `Mal`, `Glauk`, `LechDR`, `datDiab`, `datNep`, `datPrep`, `datPrep2`, `datSlep`, `datLazer`, `datKatar`, `datMal`, `datGlauk`, `OST`, `pochki`, `diabNefro`, `datNefro`, `diabPochNEd`, `datPochNEd`, `diabPochSt`, `datPochSt`, `diabDializ`, `datDializ`, `LechPoch`, `datPoli`, `diabAngin`, `datAngin`, `kakAngio`, `diabNejr`, `datNejr`, `diabStopp`, `Bol`, `golodSem`, `periodGolod`, `bearn`, `vesR`, `Boltwo`, `BolInten`, `Bolkak`, `Preparat`, `PreparatKakie`, `datStopObsl`, `SnizhT`, `Chyvs`, `NarVibr`, `Reflex`, `Jazv`, `GnojJazv`, `PylsStopa`, `Shynt`, `Hrom`, `Ampyt`, `kakAmput1`, `datAmput`, `datLab`, `Natosh`, `Pisha`, `nmol`, `Datnmol`, `vidsot`, `gemogl`, `Datgemogl`, `Datkrovi`, `eritr`, `gemogl2`, `lekoz`, `nejtrof`, `monozit`, `limfoz`, `tromb`, `mpv`, `dryg`, `kreat`, `datkreat`, `kreatMocha`, `datMocha`, `klirkreat`, `Protein`, `posIzm`, `datProtein`, `Mikroalmb`, `kakMikro1`, `datMikro`, `Lipiddat`, `Holest`, `LipidVis`, `LipidNiz`, `Trigliz`, `Asparta`, `Alanin`, `BelocS`, `Peptid`, `PeptiEdIzm`, `PeptidPmol`, `PeptidNmol`, `S_Pep`, `Sivor`, `Plazma`, `DNK`, `PHK`, `Sluna`, `Biopat`, `PrimZAbKrov`, `LechDIabet`, `LechInsul`, `datLechDiab`, `diabLechTab`, `LechGiper`, `LechLipidGiper`, `Onko`, `VidOnko`, `dateOnko`, `OnkoLek`, `id_user`, `dateSave`, `hronSerd`, `date_izm`, `art1`, `datStad`, `del_k`, `phone`, `email`, `vagaPN`, `systisk`,
 `atGad`, `atGaddat`, `dieta`, `gen`, `disttisk`, 
 `nomV`, `datV`, `statysA`, `vlasnik`, `pomer`, `nomPac`) select `fname`, `name`, `sname`, `ychas`, `nomIss`,
  `sex`, `datB`, `city`, `rajon`, `work`, `week`, `fnameO`, `nameO`, `snameO`, `ychasOtez`, `nomIssO`, `datBOtez`,
   `oblOtez`, `cityOtez`, `lechOtez`, `lechOtezKak`, `fnameM`, `nameM`, `snameM`, `ychasM`, `nomIssM`, `datBM`, `oblM`,
    `cityM`, `lechM`, `lechMKak`, `lechBS`, `lechBSKak`, `golodM`, `golodO`, `golodSister`, `death1`, `death2`, `ves`, `rost`, 
    `tal`, `bed`, `index`, `art`, `smouk`, `smoukTime`, `smokeKol`, `alkogol`, `typeDiab`, `yearD`, `vekD`, `longD`, `inf`, `aut`,
     `porok`, `endoc`, `patol`, `DGR`, `infarkt`, `kolInf`, `datInf`, `insult`, `kolIns`, `datIns`, `glaz`, `diabDiab`, `diabNep`, 
     `diabPrep`, `diabPrep2`, `Slep`, `Lazer`, `Katar`, `Mal`, `Glauk`, `LechDR`, `datDiab`, `datNep`, `datPrep`, `datPrep2`, `datSlep`,
      `datLazer`, `datKatar`, `datMal`, `datGlauk`, `OST`, `pochki`, `diabNefro`, `datNefro`, `diabPochNEd`, `datPochNEd`, `diabPochSt`, 
      `datPochSt`, `diabDializ`, `datDializ`, `LechPoch`, `datPoli`, `diabAngin`, `datAngin`, `kakAngio`, `diabNejr`, `datNejr`, `diabStopp`,
       `Bol`, `golodSem`, `periodGolod`, `bearn`, `vesR`, `Boltwo`, `BolInten`, `Bolkak`, `Preparat`, `PreparatKakie`, `datStopObsl`, 
       `SnizhT`, `Chyvs`, `NarVibr`, `Reflex`, `Jazv`, `GnojJazv`, `PylsStopa`, `Shynt`, `Hrom`, `Ampyt`, `kakAmput1`, `datAmput`, `datLab`, 
       `Natosh`, `Pisha`, `nmol`, `Datnmol`, `vidsot`, `gemogl`, `Datgemogl`, `Datkrovi`, `eritr`, `gemogl2`, `lekoz`, `nejtrof`, `monozit`,
        `limfoz`, `tromb`, `mpv`, `dryg`, `kreat`, `datkreat`, `kreatMocha`, `datMocha`, `klirkreat`, `Protein`, `posIzm`, `datProtein`,
         `Mikroalmb`, `kakMikro1`, `datMikro`, `Lipiddat`, `Holest`, `LipidVis`, `LipidNiz`, `Trigliz`, `Asparta`, `Alanin`, `BelocS`, 
         `Peptid`, `PeptiEdIzm`, `PeptidPmol`, `PeptidNmol`, `S_Pep`, `Sivor`, `Plazma`, `DNK`, `PHK`, `Sluna`, `Biopat`, `PrimZAbKrov`, 
         `LechDIabet`, `LechInsul`, `datLechDiab`, `diabLechTab`, `LechGiper`, `LechLipidGiper`, `Onko`, `VidOnko`, `dateOnko`, `OnkoLek`,
          `id_user`, `dateSave`, `hronSerd`, `date_izm`, `art1`, `datStad`, `del_k`, `phone`, `email`, `vagaPN`, `systisk`,
 `atGad`, `atGaddat`, `dieta`, `gen`, `disttisk`, 
 $maxv, '$date', `statysA`, `vlasnik`, `pomer`, `nomPac` from karta where id={$id_k}";
        $stmt = $this->dbh->prepare($st);
        $stmt->execute();
$id=$this->dbh->lastInsertId();

return $id;
    }
public function query($query,array $data=[],$mode=PDO::FETCH_ASSOC){
    $stmt = $this->dbh->prepare($query);
    $stmt->execute($data);
    return $stmt->fetchAll($mode);
}
public function select($where="1",array $data=[],array $columns=NULL){
    if($this->table===NULL)throw new Exception("Table was not be selected");
    $collist = $columns===NULL ? "*":"`".implode("`,`",$columns)."`";
    $q="SELECT {$collist} FROM `{$this->table}` WHERE {$where}";
  //echo $q; die();
      $this->table=NULL;

    return $this->query($q,$data);
}
    public function select1($from,$columns,array $data=[]){

        if($this->table===NULL)throw new Exception("Table was not be selected");
               $q="SELECT {$columns} FROM {$from} ";
               $this->table=NULL;

        return $this->query($q,$data);

    }
    public function select2($q,array $data=[]){



        $this->table=NULL;

        return $this->query($q,$data);

    }
public function selectColumn($column,$where="1",array $data=[]){
    if($this->table===NULL)throw new Exception("Table was not be selected");
    $q="SELECT {$column} FROM `{$this->table}` WHERE {$where}";
       $this->table=NULL;
    return $this->query($q,$data,PDO::FETCH_COLUMN);
}
public function selectOne($where="1",array $data=[]){
    if($this->table===NULL)throw new Exception("Table was not be selected");
    $ss="SELECT * FROM `{$this->table}` WHERE {$where}";
    $stmt=$this->dbh->prepare($ss);
    //var_dump($stmt);
    $stmt->execute($data);
    $this->table=NULL;
    return $stmt->fetch();
}
    public function selectAdmin($where="1",array $data=[]){
        if($this->table===NULL)throw new Exception("Table was not be selected");
        $ss="SELECT * FROM `db_users` WHERE {$where}";

        $stmt=$this->dbh->query($ss);
$ss=$stmt->fetch();

        return $ss;
    }
public function getById($id){
    return $this->selectOne("id=?",[$id]);
}
    public function getByIdk($id){
        return $this->selectOne("id_k=?",[$id]);
    }
public function getCount($where="1",array $data=[]){
    if($this->table===NULL)throw new Exception("Table was not be selected");
    $stmt=$this->dbh->prepare("SELECT COUNT(*) FROM `{$this->table}` WHERE {$where}");
    $stmt->execute($data);
    $this->table=NULL;
    return $stmt->fetchColumn();
}
public function insert(array $data){
     if($this->table===NULL)throw new Exception("Table was not be selected");
    $fields = array_keys($data);
    $q="INSERT INTO `{$this->table}`(`".implode("`,`",$fields)."`) VALUES(:".implode(",:",$fields).");";

       $this->exec($q,$data);
    $this->table=NULL;
    return $this->dbh->lastInsertId();
}

    public function insert1(array $data){
               if($this->table===NULL)throw new Exception("Table was not be selected");
        $fields = array_keys($data);
        $values = array_values($data);

        $q="INSERT INTO `{$this->table}`(`".implode("`,`",$fields)."`) VALUES('".implode("','",$values)."');";
//echo $q;die();
           $this->exec($q,$data);
        $this->table=NULL;
        return $this->dbh->lastInsertId();
    }
    public function insertz($st){
            $this->exec($st,$data);
              return $this->dbh->lastInsertId();
    }
public function deleteWhere($where="0",array $data=[]){
    if($this->table===NULL)throw new Exception("Table was not be selected");
    $this->exec("DELETE FROM `{$this->table}` WHERE {$where}",$data);
    $this->table=NULL;
    }
    public function delete($id){
    $this->deleteWhere("`id`=?",[$id]);
    }
    public function delete1($id){
        $this->deleteWhere("`id_p`=?",[$id]);
    }
    public function delete4($id){

        $this->deleteWhere("`id_p`={$id}");
    }
    public function delete2($id1,$id2){
        $this->deleteWhere("`id_p`={$id1} and `id_c`={$id2}");
    }
    public function delete3($id_p,$stat){
        $pdo = new PDO("mysql:host=localhost;dbname=medic", "root", "");
        $str="select id from status where status='{$stat}'";
        $tmp1 = $pdo->query($str);
        $row=$tmp1->fetch();
        $id_c=$row['id'];
        $this->deleteWhere("`id_p`={$id_p} and `id_c`={$id_c}");
    }
    public function updateWhere(array $values, $where="0",array $data=[]){
        if($this->table===NULL)throw new Exception("Table was not be selected");
        $new_values=[];
        $q="UPDATE `{$this->table}` SET ";
        foreach ($values as $field=>$value){
            $q.="`{$field}`=:update_prefix_{$field}";
            $new_values["update_prefix_{$field}"]=$value;
        }
        $q.=" WHERE {$where}";

        $data = array_merge($data,$new_values);
        $this->exec($q,$data);
        $this->table=NULL;
    }
    public function updateWhere1(array $values, $where="0",array $data=[]){
        if($this->table===NULL)throw new Exception("Table was not be selected");
        $new_values=[];

        $q="UPDATE `{$this->table}` SET ";

        $k=1;
        foreach ($values as $field=>$value){
            $q.="`{$field}`='{$value}'";
            if($k<1){
                $q.=",";
            }
            $k=$k+1;
        }
        $q.=" WHERE {$where}";
//echo $q;die();
        $data = array_merge($data,$new_values);

        $this->exec($q,$data);
        $this->table=NULL;
    }
    public function updateWhere3(array $values, $where="0",array $data=[]){
    if($this->table===NULL)throw new Exception("Table was not be selected");
    $new_values=[];

    $q="UPDATE `{$this->table}` SET ";

    $k=1;
    foreach ($values as $field=>$value){
        $q.="`{$field}`='{$value}'";
        if($k<20){
            $q.=",";
        }
        $k=$k+1;
    }
    $q.=" WHERE {$where}";
    $data = array_merge($data,$new_values);

    $this->exec($q,$data);
    $this->table=NULL;
}
    public function updateWhere33(array $values, $where="0",array $data=[]){
        if($this->table===NULL)throw new Exception("Table was not be selected");
        $new_values=[];

        $q="UPDATE `{$this->table}` SET ";

        $k=1;
        foreach ($values as $field=>$value){
            $q.="`{$field}`='{$value}'";
            if($k<11){
                $q.=",";
            }
            $k=$k+1;
        }
        $q.=" WHERE {$where}";
        $data = array_merge($data,$new_values);

        $this->exec($q,$data);
        $this->table=NULL;
    }
    public function updateWhere18(array $values, $where="0",array $data=[]){
        if($this->table===NULL)throw new Exception("Table was not be selected");
        $new_values=[];

        $q="UPDATE `{$this->table}` SET ";

        $k=1;
        foreach ($values as $field=>$value){
            $q.="`{$field}`='{$value}'";
            if($k<206){
                $q.=",";
            }
            $k=$k+1;
        }
        $q.=" WHERE {$where}";

        $data = array_merge($data,$new_values);
//echo $q;die();
        $this->exec($q,$data);
        $this->table=NULL;
    }
    public function updateWhere8(array $values, $where="0",array $data=[]){
        if($this->table===NULL)throw new Exception("Table was not be selected");
        $new_values=[];

        $q="UPDATE `{$this->table}` SET ";

        $k=1;
        foreach ($values as $field=>$value){
            $q.="`{$field}`='{$value}'";
            if($k<2){
                $q.=",";
            }
            $k=$k+1;
        }
        $q.=" WHERE {$where}";

        $data = array_merge($data,$new_values);

        $this->exec($q,$data);
        $this->table=NULL;
    }
    public function Update($id,array $values){

    $this->updateWhere1($values,"`id`=:id",["id"=>$id]);
}
    public function Update1($id,$values){
$q="UPDATE `{$this->table}` SET rayon='{$values}' where id={$id}";
        $this->exec($q);
        $this->table=NULL;
    }
    public function Update2($id,$values){
    $q="UPDATE `{$this->table}` SET zaklad='{$values}' where id={$id}";
    $this->exec($q);
    $this->table=NULL;
}
    public function Update3($id,$mkh,$name){
        $q="UPDATE `{$this->table}` SET mkh='{$mkh}', name='{$name}' where id={$id}";
        $this->exec($q);
        $this->table=NULL;
    }
}