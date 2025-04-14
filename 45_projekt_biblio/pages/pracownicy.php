<h1> Pracownicy</h1>
<h4>Dane z tabeli pracownicy</h4>
<?php 
$query = "Select * from pracownicy";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) > 0) {
         while ($sql=mysqli_fetch_assoc($result)) {
            ?> 
        <?php }
    }
?>