<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
.column {
  float: left;
  padding: 10px;
}
.left {
  width: 15%;
  background-color:#27391C;
  color:whitesmoke;
}
.right {
  width: 85%;
  background-color: #255F38;
  color:black;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}
a:hover{
  background-color: orange;
  color:black;
}
a{
  color:white;
  text-decoration: none;
  display:block;
  width:100%;
  padding:10px;
}

</style>
</head>
<body>
<?php require 'db/login.php'; ?>

<h2>Two Unequal Columns</h2>

<div class="row">
  <div class="column left" >
    <h2>Column 1</h2>
    <a class="link" href="?page=pracownicy">link 1</a>
    <a class="link" href="?page=niemotko">link 2</a>
    <a class="link" href="?halo=halo">link 3</a>
    <a class="link" href="">link 4</a>
    <a class="link" href="">link 5</a>
  </div>
  <div class="column right" >
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
  </div>
</div>
<?php require 'db/logout.php'; ?>
</body>
</html>
