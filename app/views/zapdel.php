<title>Запит на видалення</title>
<?php
if(isset($_SESSION['user'])){
    if($_SESSION['role']==2){
   ?>
       <h2>Список запитів на видалення</h2><div>

<table class="table table-bordered">
    <tr><th>id</th><th>ПІБ</th><th>Дата народження</th><th>Тип діабету</th><th>Дата зміни</th>
      <th></th></tr>
    <?php
    foreach ($user as $item):

            echo "<tr><td>{$item['id']}</td><td>{$item['fname']} {$item['name']} {$item['sname']}</td><td>{$item['datB']}</td>
<td>{$item['typeDiab']}</td><td>{$item['date_izm']}</td>
<td>";
?>
  <form method="post" action="<?=Url::getAction('zapdel','tocart')?>">
      <input type="hidden" name="id" value="<? echo $item['id'];?>">
      <input type="submit" name="send" class='btn btn-danger' value="Видалити">
  </form>
<?
echo "</td></tr>";


        endforeach;
    ?>

</table>

<?
    }else{

    }

}else{
    echo "Ви не авторизовані в системі";
}
