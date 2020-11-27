<?php
class GallaryController extends Controller
{
public function action_index(){
    $v=new View("gallary");
    $v->user=GallaryModel::Instance()->getuser();

    $v->title="Користувачі";
    $v->viewTemplate('admin');
   // $v->auth=AuthModule::instance()->isAuth();
    $this->responce($v);
}
    public function action_adduser(){
        if(!$this->post("name")) throw new RoutExeption("404 param not valid",404);
        GallaryModel::Instance()->adduser($this->apostr($this->post("name")),$this->apostr($this->post("login")),
            $this->post("id_z"),$this->apostr($this->post("pass")),$this->post("riv"),$this->post("pib")
            ,$this->post("phone")
        );
        $this->redirect(Url::local("gallary"));
    }
}