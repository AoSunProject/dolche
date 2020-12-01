<?php

class RegisterController extends Controller
{
public function action_index(){
    $v=new View("register");
    $v->title="Електронний реєстр хворих цукровим діабетом";
    $c=new RegisterController();
    $v->klinika = MainModel::Instance()->getklinika();
    $v->component = $c->getResponce();
    $v->enter=MainModel::Instance()->getenter();

        $v->user = MainModel::Instance()->getuser($this->post("login"), $this->post("pass"));

 if(count($v->user)>0){

     $v->viewTemplate('first');
     $this->redirect(Url::local("admin"));
 }else{

     $v->viewTemplate('first');
     $this->responce($v);
 }

}
    public function action_logaut(){
        $user=MainModel::Instance()->logout();
        $this->redirect(Url::local("main"));
    }
public function action_register(){
    $v=new View("register");
    $v->title="Електронний реєстр хворих цукровим діабетом";
    $c=new RegisterController();
    $post_data= filter_input_array(INPUT_POST,[
        'pib'=>FILTER_SANITIZE_STRING,
        'phone'=>FILTER_SANITIZE_STRING,
        'email'=>FILTER_VALIDATE_EMAIL,
        'login'=>FILTER_SANITIZE_STRING,
        'pass1'=>FILTER_SANITIZE_STRING
    ]);

    if($post_data){
        $empty_fields= array_filter (($post_data= array_map('trim',$post_data)), function($a) {
            return empty($a);
        });


            $dbo=new PDO("mysql:host=mysql.ukrdomen.com;dbname=uh1108308_dlc","uh1108308_dlc","NPyuW3gnhxQT");

            $sth= $dbo->prepare("SELECT COUNT(*)FROM `db_users`  WHERE `login`=? OR `phone`=? OR `email`=?");
            $sth->execute([
                $post_data['login'],
                $post_data['phone'],
                $post_data['email'],
            ]);

            if ($sth->fetchColumn(0)){
                echo '<script type="text/javascript">alert("Користувач з такими даними вже є в базі. Перевірку прошли ЛОГІН  EMAIL НОМЕР ТЕЛЕФОНА.");document.location.href = "/main/";</script>';
                $v->res='Користувач з такими даними вже є в базі. Перевірку прошли ЛОГІН  EMAIL НОМЕР ТЕЛЕФОНА.';
                $v->viewTemplate('first');
                $this->responce($v);

            }
            else {

                $ip= $_SERVER['REMOTE_ADDR'];
                $images="https://hb.bizmrg.com/images_j99522iv/6.jpg";
                $dok= "845nh8s9ze5t";
                $nanodok= "35y6ru6y562335745st47rwebriudsrg1";
                $serverdok= "otjhirhgorij40ty409b98yh98ywertb9c8rbieyr23b9ysqsj10";
                $autoc="12345678910";
                $code= SHA1($dok.$serverdok.$post_data['email'].$nanodok.$autoc.$post_data['login']);
                $subject = "Підтвердження реєстрації";
                $datt=date('yy-m-d');
                $massage= "Доброго дня! Дякуємо за реєстрацію в системі Електронний реєстр хворих цукровим діабетом! Щоб далі користуватися всіма функціями системи Вам потрібно активувати свій email. Для цього перейдіть за посиланням https://projectasp2.pp.ua/register/act?login=".$post_data['login']."&secret_key=".$code." З повагою, Админістрація";
                mail($post_data['email'], $subject, $massage);

                $rr=password_hash($post_data['pass1'], PASSWORD_DEFAULT);

                $ss="INSERT INTO `db_users`( `fio`, `phone`, `email`, `id_kliniki`, `login`, `password`, `action`, 
`supervisor`, `dat`, `datLast`, `ipLast`, `role`,`email_verify`)
                                     VALUES('{$post_data['pib']}','{$post_data['phone']}','{$post_data['email']}',{$_POST['riv']},
                                     '{$post_data['login']}','{$rr}','False','False','{$datt}','{$datt}','{$ip}',1,'{$code}')";

                $sth= $dbo->prepare($ss);
                $v->enter=MainModel::Instance()->getenter();
                              $sth->execute();
                              $v->res='Реєстрація користувача успішно закінчена! На Ваш email ми відправили лист з підтвержденням.';
                $v->viewTemplate('first');
                $this->responce($v);
            }
        }

    $v->viewTemplate('first');
    $this->responce($v);

    }
    public function action_act(){
             session_start();
        $v=new View("register");
        if (isset($_GET['login'])) {
            $login =$_GET['login']; }
        else {
            $v->res1="Помилка! Мабуть якісь дані були втрачені при передачі їх на сервер. Втрачено інформацію: ЛОГІН. Нам шкода про це :( ";
        }
        if (isset($_GET['secret_key'])){
            $code= $_GET['secret_key'];
        }
        else {
            $v->res1="Помилка! Мабуть якісь дані були втрачені при передачі їх на сервер. Втрачено інформацію: СЕКРЕТНИЙ КЛЮЧ. Нам шкода про це :( ";
        }
        $dok= "845nh8s9ze5t";
        $nanodok= "35y6ru6y562335745st47rwebriudsrg1";
        $serverdok= "otjhirhgorij40ty409b98yh98ywertb9c8rbieyr23b9ysqsj10";
        $autoc="12345678910";
        $dbo=new PDO("mysql:host=mysql.ukrdomen.com;dbname=uh1108308_dlc","uh1108308_dlc","NPyuW3gnhxQT");
        $ss="SELECT `email` FROM `db_users` WHERE `login`='{$_GET['login']}'";

        $activetrue= $dbo->prepare($ss);
        $activetrue->execute();

        $row_chash= $activetrue->fetch(PDO::FETCH_ASSOC);

        $codekeygen= SHA1($dok.$serverdok.$row_chash['email'].$nanodok.$autoc.$login);

        if ($codekeygen == $code) {
            $ok= "YES";
            $sql="UPDATE `db_users` SET `email_verify`= '{$ok}' WHERE `login`= '{$login}'";

            $casuz= $dbo->prepare($sql);
            $casuz->execute();
            $v->res1='Ваш Е-mail підтвержений! Почекайте відповіді системного адміністратора. Це приблизно займе не більше 2 годин. 
        На ваш email прийде підтверждення вашої реєстрації!';

        }
        else{
            $v->res1="Іноді, так буває! Невизначена помилка, але запевняємо Вас, що ми зробимо все можливе, щоб би попередити це відверте неподобство!";
        }

        $v->title="Електронний реєстр хворих цукровим діабетом";
        $c=new RegisterController();

        $v->viewTemplate('first');
        $this->responce($v);

    }
    public function action_about(){
    $v=new View("about");
    $v->title="Про компанію";
    $v->viewTemplate();
      //  $v->auth=AuthModule::instance()->isAuth();
    $this->responce($v);
} /**/
    public function action_print(){
        $v=new View("print");
        $v->title="Друк";
        $v->viewTemplate();
        //  $v->auth=AuthModule::instance()->isAuth();
        $this->responce($v);
    } /**/
    public function action_print1(){
        $v=new View("print1");
        $v->title="Друк";
        $v->viewTemplate();
        //  $v->auth=AuthModule::instance()->isAuth();
        $this->responce($v);
    } /**/
    public function action_faq(){
    $v=new View("faq");
    $v->title="Запитання та відповіді";
    //  $v->auth=AuthModule::instance()->isAuth();
    $v->faq=FaqModel::Instance()->getfaq();
    $v->viewTemplate();
    $this->responce($v);
}
public function action_tovar(){
        session_start();
    $v=new View("tovar");
    $v->user=TovarModel::Instance()->getuser($this->post("login"),$this->post("pass"));
    $v->cat=TovarModel::Instance()->getcat();
    $v->title="Наши товары";
    $v->viewTemplate();
    $this->responce($v);
} /**/
    public function action_addpat(){
        if(!$this->post("name") || !$this->post("firstname")) throw new RoutExeption("404 param not valid",404);
        AllpatientModel::Instance()->addpat($this->post("firstname"),$this->post("name"),$this->post("surename"),
            $this->post("birthdate")
            ,$this->post("city"),$this->post("location"),$this->post("numhouse"),$this->post("tel")
            ,$this->post("stat1"),$this->post("category1")
            ,$this->post("stat2"),$this->post("category2")
            ,$this->post("stat3"),$this->post("category3")
            ,$this->post("stat4"),$this->post("category4")
            ,$this->post("stat5"),$this->post("category5")
            ,$this->post("stat6"),$this->post("category6")
            ,$this->post("stat7"),$this->post("category7")
            ,$this->post("stat8"),$this->post("category8")
            ,$this->post("stat9"),$this->post("category9"));

        $this->redirect(Url::getAction("allpatient"));
    }
    public function action_addt(){
        session_start();
        $v=new View("Addt");

        $v->user=AddtModel::Instance()->getuser($this->post("login"),$this->post("pass"));
        $v->cat=AddtModel::Instance()->getcat();
        $v->title="Наши товары";
        $v->viewTemplate();
        $this->responce($v);
    } /**/
    public function action_allpatient(){
        $v=new View("allpatient");
        $v->title="Реєстрація";
        $v->pacient=AllpatientModel::Instance()->pacient();
        //  $v->auth=AuthModule::instance()->isAuth();


        $v->viewTemplate();
        $this->responce($v);
    }
    public function action_file(){
        $v=new View("file");
        $v->title="Реєстрація";
        //  $v->auth=AuthModule::instance()->isAuth();

      $v->file=FileModel::Instance()->getfile();
        $v->cat=FileModel::Instance()->getcat();
        $v->podcat=FileModel::Instance()->getpodcat();
              $v->viewTemplate();
        $this->responce($v);
    } /**/
    public function action_admin(){
        session_start();
        $v=new View("admin");
        $v->title="Сторінка адміністратора";
        $v->admin=$_SESSION['user'];
        $v->viewTemplate();
        $this->responce($v);
    } /**/
    public function action_adddoctor(){
        session_start();
        $v=new View("adddoctor");
        $v->title="Сторінка адміністратора";
        $v->admin=$_SESSION['user'];
        $v->viewTemplate();
        $this->responce($v);
    }
    public function action_contakt(){
    $v=new View("contakt");
    $v->title="Контакты";
    $v->viewTemplate();
       // $v->auth=AuthModule::instance()->isAuth();
    $this->responce($v);
} /**/
     public function action_rez(){
        $v=new View("rez");
        $v->title="Контакты";
        $v->viewTemplate();
        // $v->auth=AuthModule::instance()->isAuth();
        $this->responce($v);
    } /**/
    public function action_stat(){
    $v=new View("stat");
    $v->title="Оборудование";
    $v->viewTemplate();
      //  $v->auth=AuthModule::instance()->isAuth();
    $this->responce($v);
} /**/

    public function action_calk(){
    $v=new View("calk");
    $v->title="Калькулятор продукции";
    $v->calk=CalkModel::Instance()->getformat();
    $v->paper=CalkModel::Instance()->getpaper();
    $this->responce($v);
    //  $v->auth=AuthModule::instance()->isAuth();
} /**/
    public function action_news1(){
        $page=(int)Router::getUriParam("page");
        $v=new View("news1");
        $v->news1=News1Model::Instance()->getNewsPage($page);
        $v->title="Наши новости";
        // $v->auth=AuthModule::instance()->isAuth();
        $v->viewTemplate();
        $this->responce($v);
    } /**/
    public function action_test(){
        var_dump(Router::getUriParam("p1"));
    } /**/
public function action_addimagehandle(){
    var_dump($_POST);
if(!$this->post("url") || !$this->post("name")) throw new RoutExeption("404 param not valid",404);
GallaryModel::Instance()->addImage($this->post("name"),$this->post("url"),
    $this->post("title2"),
    $this->post("text"),
    $this->post("big_text")
    );
$this->redirect(Url::getAction("main","faq"));
} /**/
}