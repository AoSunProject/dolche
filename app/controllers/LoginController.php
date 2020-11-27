<?php
class LoginController extends Controller
{
    public function action_index(){
        $v= new View("login");
        $v->title="Авторизація";
        $v->viewTemplate();
     $v->auth=AuthModel::instance()->isAuth();
        $v->viewTemplate();
        $this->responce($v);
    }
public function action_login(){
        try{
            if($this->post("login"===NULL)||$this->post("pass")===NULL) throw Exception("no login or password");
        try{
            AuthModel::Instance()->login($this->post("login"),$this->post("pass"));
            session_start();
            $_SESSION["user"]=$this->post("login");
        $this->redirect(Url::local("main/admin"));
        }catch (AuthException $e){
throw new Exception("Не вірний логін або пароль");
        }
        }catch (Exception $e){

        }
}
    public function action_logout(){
    session_start();
    unset($_SESSION["user"]);

    session_destroy();
        $this->redirect(Url::local("main/"));
    }
}