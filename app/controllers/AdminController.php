<?php
session_start();
class AdminController extends Controller
{
public function action_index(){
    $v=new View("admin");
    $v->title="Електронний реєстр хворих цукровим діабетом";
    $c=new AdminController();
    $v->auth=AuthModel::instance()->isAuth();
    $v->viewTemplate();
    $this->responce($v);
}
    public function action_login(){
        $v=new View("main");
        try{
            if($this->post("login"===NULL)||$this->post("pass")===NULL) throw Exception("no login or password");
            try{
                $vv=AuthModel::Instance()->login($this->post("login"),$this->post("pass"));

                if(isset($vv['login'])){
                  $pass=$vv['password'];

                  if (password_verify($this->post("pass"),$pass)) {
                      if($vv['email_verify']=='YES'){
                        if($vv['adminYes']=='YES'){
                            if($vv['naSite']==0) {
                                unset($_SESSION["id"]);
                                unset($_SESSION["role"]);
                                unset($_SESSION["user"]);
                            }
                                $dd = "Update db_users set naSite='{$_SERVER['REMOTE_ADDR']}' where id={$vv['id']}";

                                $v->b = MainModel::Instance()->quer($dd);
                                session_start();
                                $kl=AuthModel::Instance()->getKlinik($vv['id_kliniki']);
                                $_SESSION['klinika']=$kl;
                                $_SESSION["user"] = $this->post("login");
                                $_SESSION["role"] = $vv['role'];
                                $_SESSION["id"] = $vv['id'];
                                $this->redirect(Url::local("programm"));


                        }
                        else{
                            $v->viewTemplate('first');
                            $v->admin="Ваш обліковий запис ще не пройшов перевірку адміністратором. Перегляньте вашу пошту.";
                            $this->responce($v);
                        }
                      }
                      else{
                          $v->viewTemplate('first');
                          $v->admin="Ваш email не підтверджений. Перейдіть за посиланням відправленим на вашу пошту.";
                          $this->responce($v);
                      }

                    } else {
                      $v->viewTemplate('first');
                      $v->admin="Не вірно ввели пароль";
                      $this->responce($v);
                    }
                }

            }catch (AuthException $e){

                $v->viewTemplate('first');
                $v->admin="Логін або пароль ввели не вірно";
                $this->responce($v);
            }
        }catch (Exception $e){
            $this->redirect(Url::local("main"));
        }
    }
    public function action_logout(){
        session_start();
        unset($_SESSION["user"]);
        $dd = "Update db_users set naSite='0' where id={$_SESSION['id']}";

        $b = MainModel::Instance()->quer($dd);
        session_destroy();
        $this->redirect(Url::local("main/"));
    }
}