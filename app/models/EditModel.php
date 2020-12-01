<?php
class EditModel extends Model
{
private function __construct(){

}
private static $instance=NULL;
public static function Instance(){return self::$instance===NULL? self::$instance= new self():self::$instance;}
public function getImages(){

}
    public function getuser($id){
        $tmp=DatabaseModule::instance()->db_users->select("id={$id}");
             return $tmp;
    }

   public function changeYes($id){
    DatabaseModule::instance()->db_users->updateWhere1(
        ["adminYes"=>'YES'
        ],"id={$id}"
    );
}
    public function enterYes(){
    DatabaseModule::instance()->const->updateWhere1(
        ["zn"=>1
        ],"name='Enter'"
    );
}
    public function enterNo(){
        DatabaseModule::instance()->const->updateWhere1(
            ["zn"=>0
            ],"name='Enter'"
        );
    }
    public function changeNo($id){
        DatabaseModule::instance()->db_users->updateWhere1(
            ["adminYes"=>'No'
            ],"id={$id}"
        );
    }
}