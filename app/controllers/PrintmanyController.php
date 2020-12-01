<?php
session_start();
class PrintmanyController extends Controller
{
public function action_index(){
    $v=new View("printmany");
    $v->title="COVID19";
var_dump($_POST);die();

    $c=new PrintmanyController();
    $v->user=MainModel::Instance()->getuser1();

     $v->viewTemplate('first');
     $this->responce($v);
}




}