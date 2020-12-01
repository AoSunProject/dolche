<? session_start();
if(isset($_SESSION['user'])){
if($_SESSION['role']==1){
    $role1='Адміністратор';
    echo "Ви увійшли як ".$_SESSION['user']."  Статус ".$_SESSION['role'];
}
else{
    $role1='';
}
    echo "<span style='font-style: italic;color:#2d4259;'>Ви увійшли як  ".$_SESSION['user'].". {$role1}</span>";

}
else{
?>
<h1>Авторзуйтесь в системі</h1>
<?
}?>


