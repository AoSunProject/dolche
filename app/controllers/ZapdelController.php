<?php
session_start();
class ZapdelController extends Controller
{
public function action_index(){
    $v=new View("zapdel");
    $v->title="Електронний реєстр хворих сахарним діабетом";

    $c=new ZapdelController();
    $v->user=MainModel::Instance()->getzapdel();
     $v->viewTemplate();
     $this->responce($v);
}
    public function action_tocart(){
        MainModel::Instance()->tocart($_POST['id']);
        $this->redirect(Url::local("zapdel"));
    }
}