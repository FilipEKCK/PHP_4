<?php $ID = $_GET['id']; 
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $nazwa = $_POST['nazwa'];
    $new_id = $_POST['iddzial'];
    $query = "update dzialy set Id_dzial='$new_id', Nazwa='$nazwa' where Id_dzial='$ID'";
    $result = mysqli_query($conn, $query);
    $row = null;
} 

$query_select = "select * from dzialy where Id_dzial=$ID";
$result_select = mysqli_query($conn , $query_select);
$row = mysqli_fetch_array($result_select);
?>

<form method="POST">
    <table class="dodaj">
    <tr>
    <td><label for="iddzial">ID_działu</label></td><td><input type="text" id="iddzial" name="iddzial" value="<?= $row['Id_dzial'] ?>"></td>
    </tr>
    <tr>
    <td><label for="nazwa">Nazwa</label></td><td><input required id="nazwa" type="text" name="nazwa" value="<?= $row['Nazwa'] ?>"></td>
    </tr>
    <tr><td class="button" colspan="2"><input type="submit" value="Wyślij" ></td></tr>
    </table>
</form>
<br>
<p>Powrót do tabeli działy</p>
<div style="width:15%; background-color:#626F47;"><a class="<?= ($_GET['page'] ?? '') == 'dzialy' ? 'active' : '' ?>" href="?page=dzialy">DZIAŁY</a></div>