<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;  
}
body{
  font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif
}
.column {
  
  padding: 10px;
}
.row {
  display:flex;
  min-height:480px;
}

.left {
  width: 25%;
  background-color:#626F47;
  color:whitesmoke;
  
}
.right {
  width: 75%;
  background-color: #A4B465;
  color:black;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}
a:hover{
  background-color: #F5ECD5;
  color:black;
}
a{
  color:white;
  text-decoration: none;
  display:block;
  width:100%;
  padding:10px;
  font-size:larger;
}
.active {
  background-color:#F0BB78;
  color:black;
}
table.small{
  border-collapse:collapse;
  font-size:85%
}
table {
  border-collapse:collapse;
  font-size:100%;
  width:80%;
  font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif
}
td,th {
  Border:solid 1px black;
  Padding:2px;
  
  
  
}
</style>
</head>
<body>
<?php require 'db/login.php'; ?>



<div class="row">
  <nav class="column left" >
    
    <a class="<?= ($_GET['page'] ?? '') == 'glowna' ? 'active' : '' ?>" href="?page=glowna">Strona <i>główna</i></a>
    <a class="<?= ($_GET['page'] ?? '') == 'czytelnicy' ? 'active' : '' ?>" href="?page=czytelnicy">Tabela <i>czytelnicy</i></a>
    <a class="<?= ($_GET['page'] ?? '') == 'dzialy' ? 'active' : '' ?>" href="?page=dzialy">Tabela <i>działy</i></a>
    <a class="<?= ($_GET['page'] ?? '') == 'ksiazki' ? 'active' : '' ?>" href="?page=ksiazki">Tabela <i>książki</i></a>
    <a class="<?= ($_GET['page'] ?? '') == 'pracownicy' ? 'active' : '' ?>" href="?page=pracownicy">Tabela <i>pracownicy</i></a>
    <a class="<?= ($_GET['page'] ?? '') == 'stanowiska' ? 'active' : '' ?>" href="?page=stanowiska">Tabela <i>stanowiska</i></a>
    <a class="<?= ($_GET['page'] ?? '') == 'wypozyczenia' ? 'active' : '' ?>" href="?page=wypozyczenia">Tabela <i>wypożyczenia</i></a>
</nav>
  <main class="column right" >
    <?php
    if (isset($_GET['page'])){
      if (file_exists('pages/' . $_GET['page'] . '.php')){
        include 'pages/' . $_GET['page'] . '.php';
      } else {
        echo '<h1>Błąd! Strona nie istnieje</h1>';
      }
    } else {
      include 'pages/glowna.php';
    }
    ?>
  </main>
</div>
<?php require 'db/logout.php'; ?>
</body>
</html>
