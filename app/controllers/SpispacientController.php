<?php
class SpispacientController extends Controller
{
public function action_index(){
    $v=new View("spispacient");
    $v->user=GallaryModel::Instance()->getuser();

    $v->title="Користувачі";
    $v->viewTemplate();
   // $v->auth=AuthModule::instance()->isAuth();
    $this->responce($v);
}

}