<?php
session_start();
class EdituserController extends Controller
{
public function action_index(){
    $v=new View("edituser");
    $v->title="Електронний реєстр хворих цукровим діабетом";

    $c=new EdituserController();
    $v->user=MainModel::Instance()->getuser1();
$v->enter=MainModel::Instance()->getenter();
     $v->viewTemplate();
     $this->responce($v);
}
    public function action_enterYes(){
        $v=new View("edituser");

        $v->title="Електронний реєстр хворих цукровим діабетом";

        $c=new EdituserController();
        EditModel::Instance()->enterYes();
        $v->user=MainModel::Instance()->getuser1();
        $v->enter=MainModel::Instance()->getenter();
        $v->viewTemplate();
        $this->responce($v);
    }
    public function action_enterNo(){
        $v=new View("edituser");

        $v->title="Електронний реєстр хворих цукровим діабетом";

        $c=new EdituserController();
        EditModel::Instance()->enterNo();
        $v->user=MainModel::Instance()->getuser1();
        $v->enter=MainModel::Instance()->getenter();
        $v->viewTemplate();
        $this->responce($v);
    }
    public function action_changeYes(){
    $v=new View("edituser");

    $v->title="Електронний реєстр хворих цукровим діабетом";

    $c=new EdituserController();

    EditModel::Instance()->changeYes($this->post("id"));
    $us=EditModel::Instance()->getuser($this->post("id"));

        $subject = "Підтверждення реєстрації";
        $datt=date('yy-m-d');
        $massage= "Доброго дня! Дякуємо за реєстрацію в системі Електронний реєстр хворих цукровим діабетом! 
                Адміністратор підтвердив вашу реєстрацію. Можете зайти на сайт.
                 Для цього перейдіть за посиланням https://projectasp2.pp.ua/ З повагою, Адміністрація";
        mail($us[0]['email'], $subject, $massage);
    $v->user=MainModel::Instance()->getuser1();
        $v->enter=MainModel::Instance()->getenter();
    $v->viewTemplate();
    $this->responce($v);
}

    public function action_changeNo(){
        $v=new View("edituser");
        $v->title="Електронний реєстр хворих цукровим діабетом";

        $c=new EdituserController();
        EditModel::Instance()->changeNo($this->post("id"));
        $v->user=MainModel::Instance()->getuser1();
        $us=EditModel::Instance()->getuser($this->post("id"));
        $subject = "Підтвердження реєстрації";
        $datt=date('yy-m-d');
        $massage= "Доброго дня! Дякуємо за реєстрацію в системі Електронний реєстр хворих цукровим діабетом! 
                Адміністратор відмінив вашу реєстрацію. Пройдіть повторну реєстрацію.
                 Для цього перейдіть за посиланням https://projectasp2.pp.ua/register З повагою, Адміністрація";
        mail($us[0]['email'], $subject, $massage);
        $v->viewTemplate();
        $v->enter=MainModel::Instance()->getenter();
        $this->responce($v);
    }
    public function action_logaut(){
        $user=MainModel::Instance()->logout();
        $this->redirect(Url::local("main"));
    }




}