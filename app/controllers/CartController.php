<?php
session_start();
class CartController extends Controller
{
public function action_index(){
    $v=new View("cart");
    $v->title="Електронний реєстр хворих сахарним діабетом";

    $c=new CartController();
    $v->user=MainModel::Instance()->getarh();
     $v->viewTemplate();
     $this->responce($v);
}
    public function action_del(){
        MainModel::Instance()->arhdel($_POST['id']);
        $this->redirect(Url::local("cart"));
    }
}