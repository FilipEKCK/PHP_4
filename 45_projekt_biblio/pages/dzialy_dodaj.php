<?php if($_SERVER['REQUEST_METHOD'] == "POST"){
    $nazwa = $_POST['nazwa'];
    $query = "insert into dzialy(Nazwa) values ('$nazwa')";
    $result = mysqli_query($conn, $query); 
} ?>
<form method="post">
    <table class="dodaj">
    <tr>
    <td><label for="iddzial">ID_działu</label></td><td></td>
    </tr>
    <tr>
    <td><label for="nazwa">Nazwa</label></td><td><input required id="nazwa" type="text" name="nazwa"></td>
    </tr>
    <tr><td class="button" colspan="2"><input type="submit" value="Wyślij" ></td></tr>
    </table>
</form>
<br>
<p>Powrót do tabeli działy</p>
<div style="width:15%; background-color:#626F47;"><a class="<?= ($_GET['page'] ?? '') == 'dzialy' ? 'active' : '' ?>" href="?page=dzialy">DZIAŁY</a></div>