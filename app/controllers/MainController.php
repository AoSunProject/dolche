<?php

class MainController extends Controller
{
public function action_index(){
    $v=new View("main");
    $v->title="Електронний реєстр хворих цукровим діабетом";
    $c=new MainController();
    $v->enter=MainModel::Instance()->getenter();
    $v->component = $c->getResponce();

   $v->user=MainModel::Instance()->getuser($this->post("login"),$this->post("pass"));
 if(count($v->user)>0){
     $v->viewTemplate('first');
     $this->redirect(Url::local("admin"));
 }else{
     $v->res='';
     $v->viewTemplate('first');
     $this->responce($v);
 }

}
    public function action_logaut(){
        $user=MainModel::Instance()->logout();
        $this->redirect(Url::local("main"));
    }



}