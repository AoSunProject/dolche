<?php
session_start();
class Ajax10Controller extends Controller
{
    public function action_index()
    {
        $pdo = new PDO("", "", "");

        if ($_POST['moi'] == 1) {

            if ($_SESSION['role'] == '2') {

                $m = '';
            } else {
                $m = "id_user={$_SESSION['id']}";
            }

        } else {
            $m = '';
        }
        $ss = '';

        foreach ($_POST as $key => $item):

            if (!empty($item)) {
                if ($key == 'year1') {

                    $ss = $ss . "year(datB)>={$item} and ";


                } elseif ($key == 'year2') {
                    $ss = $ss . "year(datB)<={$item} and ";

                } elseif ($key == 'moi') {
                    if ($m == '') {
                        $ss = $ss . $m;

                    } else {
                        $ss = $ss . $m . " and ";
                    }

                } elseif ($key == 'nom1') {
                    $ss = $ss . "id>={$item} and ";
                } elseif ($key == 'nom2') {
                    $ss = $ss . "id<={$item} and ";
                } else {
                    $pos = strripos($item, '*');
                    if ($pos === false) {
                        $ss = $ss . "{$key}='{$this->apostr($item)}' and ";
                    } else {
                        $item = str_replace('*', '%', $item);

                        $ss = $ss . "{$key} like '{$this->apostr($item)}' and ";
                    }

                }
            }

        endforeach;
        //echo $ss;die();
        if ($ss == '') {

            $ss = "id>0";
        } else {
            $ss = substr($ss, 0, -4);
        }
        $spis = "Select * from karta where {$ss}";
     
        $spis = $pdo->query($spis);
?>
        <link href="../../css/1.css" rel="stylesheet">
        <table id="example" class="display" style="width:100%">
            <thead>
            <tr style="    background-color: #ebedf0;
    border-color: #d9d9d9;"><th>№карт</th><th>ПІБ</th><th>Стать</th><th>Рік нар.</th><th>Тип діабету</th><th>Населений пункт</th>
                <th>Дата модифікації</th></tr>
            </thead>
            <tbody>
            <?php
            foreach($spis as $item):
                echo "<tr class='gradeA' ";
                if($item['del_k']==1){
                    echo "style='color:red;'";
                }
                echo "id='o{$item['id']}' onclick='save3(this.id)'><td><form method='post' name='k{$item['id']}' id='k{$item['id']}' action=''><input type='hidden' name='id_k' value='{$item['id']}'></form> {$item['id']}</td>
    <td>{$item['fname']} {$item['name']} {$item['sname']}</td><td>{$item['sex']}</td><td>{$item['datB']}</td>
            <td>{$item['typeDiab']}</td><td>{$item['city']}</td><td>{$item['date_izm']}</td></tr>";
            endforeach;
            ?>
            </tbody>
        </table>


        <script src="../../css/1.js"></script>
        <script src="../../css/2.js"></script>
        <script>
            $(document).ready(function() {
                $('#example').DataTable( {
                    "pagingType": "full_numbers"
                } );
            } );

        </script>

<?    }

}





