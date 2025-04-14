<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            background-color:lightcyan;
        }
        p {
            font-size:small;
            line-height:40%;
            color:red;
            margin:0;
            padding:0;
            padding-top:5px;
            
        }
        .errored {
            border:solid 1px red;
        }
    </style>
</head>
<body>
    <?php 
    $valiform=TRUE;
    $namerror="";
    $mailerror="";
    $rangerror="";
    $messerror="";
    $conserror="";
    if($_SERVER['REQUEST_METHOD']=='POST'){
       if($_POST['full_name']==''){
         $namerror="Pole nie może być puste";
         $valiform=FALSE;
       } else {
        if(substr_count(trim($_POST['full_name']), ' ') == 1){
        $namerror="";
      } else {
        $namerror="To pole musi zawierać conajmniej dwa wyrazy";
        $valiform=FALSE;
    }
       }
       if($_POST['email']==''){
        $mailerror="Pole nie może być puste";
        $valiform=FALSE;
      } else {
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        $mailerror="";
        } else {
        $mailerror="Podaj poprawny adres email";
        $valiform=FALSE;
        }
      }
       if($_POST["age_range"]==""){
        $rangerror="Wybierz swoj przedział wiekowy";
        $valiform=FALSE;
       } else { 
            $rangerror="";
        }
       if(strlen($_POST['message_content'])<10){
        $messerror="Wiadomośc musi zawierać conajmniej 10 znaków";
        $valiform=FALSE;
       } else {
        $messerror="";
       }
       if(isset($_POST["consent"]) && $_POST["consent"] === "true"){
        $conserror="";
       } else {
        $conserror="Potwierdź swoją zgodę";
        $valiform=false;
       }
       if($valiform==true){
        $file=fopen("formularz_kontaktowy.txt", "a");
        $date=date('Y-m-d H:i:s');
        $post=print_r($_POST,true );
        fwrite($file, "$date\n $post");
        fclose($file);
        
      } 
       
       
    }
    
    
    ?>
    <form method="post">
        <label for="full_name">Imię i nazwisko</label><sup style="color:red">*</sup><br>
        <input type="text" name="full_name" id="full_name" value="<?php if($_SERVER['REQUEST_METHOD']=='POST'){
            echo $_POST['full_name'];
        } ?>"><br>
        <p><?= $namerror ?></p><br>
        <label for="email">Adres email</label><sup style="color:red">*</sup><br>
        <input type="text" name="email" id="email" value="<?php if($_SERVER['REQUEST_METHOD']=='POST'){
            echo $_POST['email'];
        } ?>">><br>
        <p><?= $mailerror ?></p><br>
        <label for="age_range">Przedział wiekowy</label><sup style="color:red">*</sup><br>
        <select id="age_range" name="age_range">
        <option  value=""></option>
         <option <?php if($_SERVER['REQUEST_METHOD']=="POST" && $_POST["age_range"]=="25"){ echo "selected";} ?> value="25">do 25</option>
         <option <?php if($_SERVER['REQUEST_METHOD']=="POST" && $_POST["age_range"]=="50"){ echo "selected";} ?> value="50">25-50</option>
         <option <?php if($_SERVER['REQUEST_METHOD']=="POST" && $_POST["age_range"]=="75"){ echo "selected";} ?> value="75">50-75</option>
         <option <?php if($_SERVER['REQUEST_METHOD']=="POST" && $_POST["age_range"]=="100"){ echo "selected";} ?> value="100">powyżej 75</option>
        </select><br>
        <p><?= $rangerror ?></p><br>
        <label for="message_content">Wiadomość</label><sup style="color:red">*</sup><br>
        <textarea id="message_content" name="message_content" ><?php if($_SERVER['REQUEST_METHOD']=='POST'){
            echo $_POST['message_content'];
        } ?></textarea><br>
        <p><?= $messerror ?></p><br>
        <input type="checkbox" value="true" name="consent" id="consent"><label for="consent"  >Zgoda na przetwarzanie danych</label><sup style="color:red">*</sup><br>
        <p><?= $conserror ?></p><br><br>
        <input type="submit" value="Wyślij">
    </form>
   <pre> <?php print_r($_POST) ?></pre>
</body>
</html>