<?php
class ChangepassModel extends Model
{
private function __construct(){

}
private static $instance=NULL;
public static function Instance(){return self::$instance===NULL? self::$instance= new self():self::$instance;}
public function getImages(){

}


   public function newpass($pass,$email){
       $pass1=password_hash($pass, PASSWORD_DEFAULT);
$email="'{$email}'";
    DatabaseModule::instance()->db_users->updateWhere1(
        ["password"=>$pass1,
              ],"email={$email}"
    );
   }
}