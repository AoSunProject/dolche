<?php
session_start();
class BigfindController extends Controller
{
public function action_index(){
    $v=new View("bigfind");
    $v->title="Електронний реєстр хворих сахарним діабетом";

    $c=new BigfindController();
    $v->user=MainModel::Instance()->getuser1();
    $v->spis=MainModel::Instance()->getKarta();
     $v->viewTemplate();
     $this->responce($v);
}


}