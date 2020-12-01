<?php
session_start();
class Programm1Controller extends Controller
{
public function action_index(){
    $col=20;
    $v=new View("programm1");
    unset($_SESSION['find']);
    $v->title="Електронний реєстр хворих сахарним діабетом";
    $c=new Programm1Controller();
    if(isset($_GET['start'])){
        $limit=$_GET['start'];
        $offset=$limit+$col;

        $v->spis=MainModel::Instance()->getKartaP($limit,$col);
        $v->all=MainModel::Instance()->getKartaCount();
    }else{
        $limit=0;
        $offset=$limit+$col;
        $v->spis=MainModel::Instance()->getKartaP($limit,$col);
        $v->all=MainModel::Instance()->getKartaCount();
    }

     $v->viewTemplate();
     $this->responce($v);
}
    public function action_logaut(){
        $user=MainModel::Instance()->logout();
        $this->redirect(Url::local("main"));
    }

    public function action_userIsset(){
        $v=new View("programm1");
        $v->title="Електронний реєстр хворих сахарним діабетом";
        $c=new Programm1Controller();
        $v->spis=MainModel::Instance()->getKarta();
        $v->mess="Анкета з такими даними вже існує. Перевірку пройшли ПІБ та дата народження. Знайдіть себе у списку.";
        $v->viewTemplate();
        $this->responce($v);
    }

    public function action_findA(){
        $col=20;
        $v=new View("programm1");
        $v->title="Електронний реєстр хворих сахарним діабетом";
        $c=new Programm1Controller();

        if(isset($_GET['start'])) {
            if(isset($_SESSION['find'])){
                $limit = $_GET['start'];
                $offset = $limit + $col;
                $v->spis = MainModel::Instance()->getKartaFind($_SESSION['find'],$limit,$col);
                $v->all=MainModel::Instance()->getKartaFindCount($_SESSION['find']);
            }

        }else {
            $_SESSION['find']=$_POST['buk'];
            $limit = 0;
            $offset = $limit + $col;
            $v->spis = MainModel::Instance()->getKartaFind($_POST['buk'],$limit,$col);
            $v->all=MainModel::Instance()->getKartaFindCount($_POST['buk']);
        }
        $v->viewTemplate();
        $this->responce($v);
    }
    public function action_findR(){
        $col=20;

        $v=new View("programm1");
        $v->title="Електронний реєстр хворих сахарним діабетом";
        $c=new Programm1Controller();
        if(!empty($_POST)){

            unset($_SESSION['find']);
            if (isset($_GET['start'])) {
                $limit = $_GET['start'];
                $offset = $limit + $col;
                $v->spis = MainModel::Instance()->getKartaFindR2($this->apostr($this->post('fname')),
                    $this->post('year1'), $this->post('year2'),
                    $this->post('nom1'), $this->post('nom2'),
                    $this->apostr($this->post('name')),
                    $this->apostr($this->post('sex')),
                    $this->post('date_izm'),
                    $this->apostr($this->post('sname')),
                    $this->apostr($this->post('typeDiab')),
                    $this->post('moi'),
                    $this->apostr($this->post('city')), $limit, $col
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
                $v->all = MainModel::Instance()->getKartaCount2($this->apostr($this->post('fname')),
                    $this->post('year1'), $this->post('year2'),
                    $this->post('nom1'), $this->post('nom2'),
                    $this->apostr($this->post('name')),
                    $this->apostr($this->post('sex')),
                    $this->post('date_izm'),
                    $this->apostr($this->post('sname')),
                    $this->apostr($this->post('typeDiab')),
                    $this->post('moi'),
                    $this->apostr($this->post('city')));
            }
            elseif (isset($_POST['vidmina'])){
                
            }
            else{

                $limit = 0;
                $offset = $limit + $col;
                $v->spis = MainModel::Instance()->getKartaFindR2($this->apostr($this->post('fname')),
                    $this->post('year1'), $this->post('year2'),
                    $this->post('nom1'), $this->post('nom2'),
                    $this->apostr($this->post('name')),
                    $this->apostr($this->post('sex')),
                    $this->post('date_izm'),
                    $this->apostr($this->post('sname')),
                    $this->apostr($this->post('typeDiab')),
                    $this->post('moi'),
                    $this->apostr($this->post('city')), $limit, $col
                );

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
                $v->all = MainModel::Instance()->getKartaCount2($this->apostr($this->post('fname')),
                    $this->post('year1'), $this->post('year2'),
                    $this->post('nom1'), $this->post('nom2'),
                    $this->apostr($this->post('name')),
                    $this->apostr($this->post('sex')),
                    $this->post('date_izm'),
                    $this->apostr($this->post('sname')),
                    $this->apostr($this->post('typeDiab')),
                    $this->post('moi'),
                    $this->apostr($this->post('city')));



            }
            $_SESSION['find']['fname']=$this->post('fname');
            $_SESSION['find']['year1']=$this->post('year1');
            $_SESSION['find']['year2']=$this->post('year2');
            $_SESSION['find']['nom1']=$this->post('nom1');
            $_SESSION['find']['nom2']=$this->post('nom2');
            $_SESSION['find']['name']=$this->post('name');
            $_SESSION['find']['sex']=$this->post('sex');
            $_SESSION['find']['date_izm']=$this->post('date_izm');
            $_SESSION['find']['sname']=$this->post('sname');
            $_SESSION['find']['typeDiab']=$this->post('typeDiab');
            $_SESSION['find']['moi']=$this->post('moi');
            $_SESSION['find']['city']=$this->post('city');
        }
elseif(isset($_SESSION['find']) and empty($_POST))
{
//echo "7777";die();
    if (isset($_GET['start'])) {
        $limit = $_GET['start'];
        $offset = $limit + $col;
        $v->spis = MainModel::Instance()->getKartaFindR2($this->apostr($_SESSION['find']['fname']),
            $_SESSION['find']['year1'], $_SESSION['find']['year2'],
            $_SESSION['find']['nom1'], $_SESSION['find']['nom2'],
            $this->apostr($_SESSION['find']['name']),
            $this->apostr($_SESSION['find']['sex']),
            $_SESSION['find']['date_izm'],
            $this->apostr($_SESSION['find']['sname']),
            $this->apostr($_SESSION['find']['typeDiab']),
            $_SESSION['find']['moi'],
            $this->apostr($_SESSION['find']['city']), $limit, $col
        );
        $find = [$this->apostr($_SESSION['find']['fname']),
            $_SESSION['find']['year1'], $_SESSION['find']['year2'],
            $_SESSION['find']['nom1'], $_SESSION['find']['nom2'],
            $this->apostr($_SESSION['find']['name']),
            $this->apostr($_SESSION['find']['sex']),
            $_SESSION['find']['date_izm'],
            $this->apostr($_SESSION['find']['sname']),
            $this->apostr($_SESSION['find']['typeDiab']),
            $_SESSION['find']['moi'],
            $this->apostr($_SESSION['find']['city'])];
        $v->all = MainModel::Instance()->getKartaCount2($this->apostr($_SESSION['find']['fname']),
            $_SESSION['find']['year1'], $_SESSION['find']['year2'],
            $_SESSION['find']['nom1'], $_SESSION['find']['nom2'],
            $this->apostr($_SESSION['find']['name']),
            $this->apostr($_SESSION['find']['sex']),
            $_SESSION['find']['date_izm'],
            $this->apostr($_SESSION['find']['sname']),
            $this->apostr($_SESSION['find']['typeDiab']),
            $_SESSION['find']['moi'],
            $this->apostr($_SESSION['find']['city']));
    }
    else {

        $limit=0;
        $offset=$limit+$col;
        $v->spis = MainModel::Instance()->getKartaFindR2($this->apostr($_SESSION['find']['fname']),
            $_SESSION['find']['year1'], $_SESSION['find']['year2'],
            $_SESSION['find']['nom1'], $_SESSION['find']['nom2'],
            $this->apostr($_SESSION['find']['name']),
            $this->apostr($_SESSION['find']['sex']),
            $_SESSION['find']['date_izm'],
            $this->apostr($_SESSION['find']['sname']),
            $this->apostr($_SESSION['find']['typeDiab']),
            $_SESSION['find']['moi'],
            $this->apostr($_SESSION['find']['city']), $limit, $col
        );
        $find = [$this->apostr($_SESSION['find']['fname']),
            $_SESSION['find']['year1'], $_SESSION['find']['year2'],
            $_SESSION['find']['nom1'], $_SESSION['find']['nom2'],
            $this->apostr($_SESSION['find']['name']),
            $this->apostr($_SESSION['find']['sex']),
            $_SESSION['find']['date_izm'],
            $this->apostr($_SESSION['find']['sname']),
            $this->apostr($_SESSION['find']['typeDiab']),
            $_SESSION['find']['moi'],
            $this->apostr($_SESSION['find']['city'])];
        $v->all=MainModel::Instance()->getKartaCount2($this->apostr($_SESSION['find']['fname']),
            $_SESSION['find']['year1'], $_SESSION['find']['year2'],
            $_SESSION['find']['nom1'], $_SESSION['find']['nom2'],
            $this->apostr($_SESSION['find']['name']),
            $this->apostr($_SESSION['find']['sex']),
            $_SESSION['find']['date_izm'],
            $this->apostr($_SESSION['find']['sname']),
            $this->apostr($_SESSION['find']['typeDiab']),
            $_SESSION['find']['moi'],
            $this->apostr($_SESSION['find']['city']));
    }
}
else{

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
    if(isset($_GET['start'])){
        $limit=$_GET['start'];
        $offset=$limit+$col;

        $v->spis=MainModel::Instance()->getKartaP($limit,$col);
        $v->all=MainModel::Instance()->getKartaCount();
    }else{
        $limit=0;
        $offset=$limit+$col;
        $v->spis=MainModel::Instance()->getKartaP($limit,$col);
        $v->all=MainModel::Instance()->getKartaCount();
    }
    // var_dump($find);die();
    $v->viewTemplate();
    $this->responce($v);
}
       /* echo "new<br>";
        var_dump($_SESSION['find']);
        die();*/
//unset($_SESSION['find']);

        $v->openFind='true';
        $v->findArr=$find;
        //var_dump($find);die();

        $v->viewTemplate();
        $this->responce($v);
    }
    public function action_findRSkin(){
        $col=20;
        unset($_SESSION['find']);
        $v=new View("programm1");
        $v->title="Електронний реєстр хворих сахарним діабетом";
        $c=new Programm1Controller();
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
        if(isset($_GET['start'])){
            $limit=$_GET['start'];
            $offset=$limit+$col;

            $v->spis=MainModel::Instance()->getKartaP($limit,$col);
            $v->all=MainModel::Instance()->getKartaCount();
        }else{
            $limit=0;
            $offset=$limit+$col;
            $v->spis=MainModel::Instance()->getKartaP($limit,$col);
            $v->all=MainModel::Instance()->getKartaCount();
        }
        $v->openFind='true';
        $v->findArr=$find;
        $v->viewTemplate();
        $this->responce($v);
    }
    public function action_findR1(){
        $v=new View("programm1");
        $v->title="Електронний реєстр хворих сахарним діабетом";
        $c=new Programm1Controller();
       $v->spis=MainModel::Instance()->getKartaFindR1($_POST);
       $v->masFind=$_POST;
        $v->viewTemplate();
        $this->responce($v);
    }
}