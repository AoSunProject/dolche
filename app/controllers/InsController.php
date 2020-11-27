<?php
session_start();
class InsController extends Controller
{
public function action_index(){
    $v=new View("ins");
    $v->title="Електронний реєстр хворих сахарним діабетом";

    $c=new InsController();

     $v->viewTemplate();
     $this->responce($v);
}
    public function action_getfile(){
if(isset($_POST['btn-add'])) {


    $name = $_FILES['excel']['name'];
    move_uploaded_file($_FILES['excel']['tmp_name'], $name);
    echo "Файл загружен";
    $v=new View("ins");
    $v->title="Електронний реєстр хворих сахарним діабетом";

    $c=new InsController();
$v->fileName=$_FILES['excel']['name'];
    $v->viewTemplate();
    $this->responce($v);
}
}
}