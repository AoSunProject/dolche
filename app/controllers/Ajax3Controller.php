<?php
class Ajax3Controller extends Controller
{
    public function action_index()
    {
        $pdo = new PDO("", "", "");
        if (isset($_POST['id'])) {

            $sql = "update karta set del_k=0 where id={$_POST['id']}";

        $res=$pdo->query($sql);
?>
            <a class="btn" style="border: 1px solid darkblue;color:darkblue;" value="Видалити" onclick="checkAll(<? echo $_POST['id'];?>)">Видалити
            </a>
  <?      }
    }




}