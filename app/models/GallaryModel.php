<?php
class GallaryModel extends Model
{
private function __construct(){

}
private static $instance=NULL;
public static function Instance(){return self::$instance===NULL? self::$instance= new self():self::$instance;}
public function getImages(){

}
    public function getuser(){
        $tmp=DatabaseModule::instance()->db_users->select();
             return $tmp;
    }

   public function adduser($name,$login,$pass,$phone,$email,$riv){
    $date=date('y.m.d');
       $ip = $_SERVER['REMOTE_ADDR'];
    DatabaseModule::instance()->db_users->insert(
        ["fio"=>$name,
       "phone"=>$phone,
            "email"=>$email,
            "id_kliniki"=>$riv,
            "login"=>$login,
            "password"=>$pass,
            "action"=>'False',
            "supervisor"=>'False',
            "dat"=>$date,
            "datLast"=>$date,
            "ipLast"=>$ip,
            "role"=>1
        ]
    );
   }
}