<?php
session_start();
class ChangepassController extends Controller
{
public function action_index(){
    $v=new View("changepass");
    $v->title="Електронний реєстр хворих цукровим діабетом";
    $c=new ChangepassController();
$v->em=$_GET['email'];
     $v->viewTemplate('first');
     $this->responce($v);
}
    public function action_newpass(){
        $v=new View("changepass");
        $v->title="Електронний реєстр хворих цукровим діабетом";
        $c=new ChangepassController();
       ChangepassModel::Instance()->newpass($this->post("pass1"),$this->post("email"));
       $v->mess="Ваш пароль успішно змінився";
        $v->viewTemplate('first');
        $this->responce($v);
    }




}