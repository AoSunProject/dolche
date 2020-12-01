<?php
session_start();
class PrintController extends Controller
{
public function action_index(){
    $v=new View("print");
    $v->title="Електронний реєстр хворих сахарним діабетом";

if(isset($_POST['id_k'])){

    $v->karta=MainModel::Instance()->getkarta1($_POST['id_k']);

$v->post=$_POST;
}
    $c=new PrintController();
    $v->user=MainModel::Instance()->getuser1();

     $v->viewTemplate('first');
     $this->responce($v);
}




}