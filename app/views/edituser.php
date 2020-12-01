<title>Користувачі</title>
<?php
if(isset($_SESSION['user'])){
    if($_SESSION['role']==2){
   ?>
        <div style="display: flex;justify-content: space-between;"><h2>Список користувачів</h2><div>
                <?php

if($enter[0]['zn']=='1'){
    echo "<h3 class='bg-warning'>Реєстрація дозволена</h3>";
    ?>
    <form method="post" action="<?=Url::getAction('edituser','enterNo')?>">
        <input type="submit" name="s" class="btn btn-warning" value="Заборонити реєстрацію">
    </form>
    <?
}else{
    echo "<h3 class='bg-danger'>Реєстрація заборонена</h3>";
    ?>
    <form method="post" action="<?=Url::getAction('edituser','enterYes')?>">
        <input type="submit" name="s1" class="btn btn-danger" value="Дозволити реєстрацію">
    </form>
    <?
}
                ?>
            </div></div>
<table class="table table-bordered">
    <tr><th>id</th><th>ПІБ</th><th>Телефон</th><th>Email</th><th>Дата реєстрації</th><th>Підтверждення email</th>
        <th>Підтвержденням адміністратором</th><th></th></tr>
    <?php
    foreach ($user as $item):
        if($item['adminYes']=='No'){
            echo "<tr class='bg-danger'><td>{$item['id']}</td><td>{$item['fio']}</td><td>{$item['phone']}</td><td>{$item['email']}</td><td>{$item['dat']}</td>
<td>{$item['email_verify']}</td><td>{$item['adminYes']}</td><td>";
?>
  <form method="post" action="<?=Url::getAction('edituser','changeYes')?>">
      <input type="hidden" name="id" value="<? echo $item['id'];?>">
      <input type="submit" name="send" class='btn btn-danger' value="Підтвердити реєстрацію">
  </form>
<?
echo "</td></tr>";
        }else{
            echo "<tr><td>{$item['id']}</td><td>{$item['fio']}</td><td>{$item['phone']}</td><td>{$item['email']}</td><td>{$item['dat']}</td>
<td>{$item['email_verify']}</td><td>{$item['adminYes']}</td><td>";?>
            <form method="post" action="<?=Url::getAction('edituser','changeNo')?>">
      <input type="hidden" name="id" value="<? echo $item['id'];?>">
      <input type="submit" name="send" class='btn btn-success' value="Відмінити реєстрацію">
  </form>
          <?  echo "</td></tr>";
        }

        endforeach;
    ?>

</table>

<?
    }else{

    }

}else{
    echo "Ви не авторизовані в системі";
}
