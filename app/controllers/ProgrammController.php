<?php
session_start();
class ProgrammController extends Controller
{
public function action_index(){
    $v=new View("programm");
    $v->title="Електронний реєстр хворих сахарним діабетом";
    $c=new ProgrammController();
    $v->spis=MainModel::Instance()->getKarta();
     $v->viewTemplate();
     $this->responce($v);
}
    public function action_logaut(){
        $user=MainModel::Instance()->logout();
        $this->redirect(Url::local("main"));
    }

    public function action_userIsset(){
        $v=new View("programm");
        $v->title="Електронний реєстр хворих сахарним діабетом";
        $c=new ProgrammController();
        $v->spis=MainModel::Instance()->getKarta();
        $v->mess="Анкета з такими даними вже існує. Перевірку пройшли ПІБ та дата народження. Знайдіть себе у списку.";
        $v->viewTemplate();
        $this->responce($v);
    }

    public function action_findA(){
        $v=new View("programm");
        $v->title="Електронний реєстр хворих сахарним діабетом";
        $c=new ProgrammController();
        $v->spis=MainModel::Instance()->getKartaFind($_POST['buk']);
        $v->viewTemplate();
        $this->responce($v);
    }
    public function action_findR(){
        $v=new View("programm");
        $v->title="Електронний реєстр хворих сахарним діабетом";
        $c=new ProgrammController();

        if(isset($_SESSION['find'])){
            $v->spis=MainModel::Instance()->getKartaFindR($this->apostr($_SESSION['find']['fname']),
                $_SESSION['find']['year1'], $_SESSION['find']['year2'],
                $_SESSION['find']['nom1'], $_SESSION['find']['nom2'],
                $this->apostr($_SESSION['find']['name']),
                $this->apostr($_SESSION['find']['sex']),
                $_SESSION['find']['date_izm'],
                $this->apostr($_SESSION['find']['sname']),
                $this->apostr($_SESSION['find']['typeDiab']),
                $_SESSION['find']['moi'],
                $this->apostr($_SESSION['find']['city'])
            );
            $find=[$this->apostr($_SESSION['find']['fname']),
                $_SESSION['find']['year1'], $_SESSION['find']['year2'],
                $_SESSION['find']['nom1'], $_SESSION['find']['nom2'],
                $this->apostr($_SESSION['find']['name']),
                $this->apostr($_SESSION['find']['sex']),
                $_SESSION['find']['date_izm'],
                $this->apostr($_SESSION['find']['sname']),
                $this->apostr($_SESSION['find']['typeDiab']),
                $_SESSION['find']['moi'],
                $this->apostr($_SESSION['find']['city'])];

        }
elseif(empty($_POST)){

    $v->openFind='true';
    $find=['',
        '', '',
        '', '',
        '',
        '',
       '',
        '',
        '',
        '',
        ''];
    $v->spis=MainModel::Instance()->getKarta();
    // var_dump($find);die();
    $v->viewTemplate();
    $this->responce($v);
}
else{

    $v->spis = MainModel::Instance()->getKartaFindR($this->apostr($this->post('fname')),
        $this->post('year1'), $this->post('year2'),
        $this->post('nom1'), $this->post('nom2'),
        $this->apostr($this->post('name')),
        $this->apostr($this->post('sex')),
        $this->post('date_izm'),
        $this->apostr($this->post('sname')),
        $this->apostr($this->post('typeDiab')),
        $this->post('moi'),
        $this->apostr($this->post('city'))
    );
    //var_dump($v->spis);die();
    $find = [$this->apostr($this->post('fname')),
        $this->post('year1'), $this->post('year2'),
        $this->post('nom1'), $this->post('nom2'),
        $this->apostr($this->post('name')),
        $this->apostr($this->post('sex')),
        $this->post('date_izm'),
        $this->apostr($this->post('sname')),
        $this->apostr($this->post('typeDiab')),
        $this->post('moi'),
        $this->apostr($this->post('city'))];
}

unset($_SESSION['find']);
       /* echo $_SESSION['find'];
        var_dump($_SESSION);die();*/
        $v->openFind='true';
        $v->findArr=$find;
       // var_dump($find);die();
        $v->viewTemplate();
        $this->responce($v);
    }
    public function action_findR1(){
        $v=new View("programm");
        $v->title="Електронний реєстр хворих сахарним діабетом";
        $c=new ProgrammController();
       $v->spis=MainModel::Instance()->getKartaFindR1($_POST);
       $v->masFind=$_POST;
        $v->viewTemplate();
        $this->responce($v);
    }
}