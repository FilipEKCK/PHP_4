<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dobra Rada</title>
</head>
<body>
    <?php define ("DOBRA_RADA","Bez chleba, to sie nie najesz")  ?>
    <strong>Stała ma wartość: <?php print(DOBRA_RADA)  ?></strong>

<p>  
    Do Stałej DOBRA_RADA stosuje funkcje <strong>strlen:</strong>         <?php print(strlen(DOBRA_RADA)) ?>     <br>
    Do Stałej DOBRA_RADA stosuje funkcje <strong>str_word_count:</strong> <?php print(str_word_count(DOBRA_RADA)) ?>     <br> 
    Do Stałej DOBRA_RADA stosuje funkcje <strong>strrev:</strong>         <?php print(strrev(DOBRA_RADA)) ?>     <br>
    Do Stałej DOBRA_RADA stosuje funkcje <strong>strpos:</strong>         <?php print(strpos(DOBRA_RADA, "to")) ?>     <br>
    Do Stałej DOBRA_RADA stosuje funkcje <strong>str_replace:</strong>    <?php print(str_replace("chleba", "mięsa", DOBRA_RADA)) ?>     <br>
    Do Stałej DOBRA_RADA stosuje funkcje <strong>strtolower:</strong>     <?php print(strtolower(DOBRA_RADA)) ?>     <br>
    Do Stałej DOBRA_RADA stosuje funkcje <strong>strtoupper:</strong>     <?php print(strtoupper(DOBRA_RADA)) ?>     <br>
    Do Stałej DOBRA_RADA stosuje funkcje <strong>ucwords:</strong>        <?php print(ucwords(DOBRA_RADA)) ?>     <br>
    Do Stałej DOBRA_RADA stosuje funkcje <strong>trim:</strong>           <?php print(trim(DOBRA_RADA)) ?>     <br>
    Do Stałej DOBRA_RADA stosuje funkcje <strong>strstr:</strong>         <?php print(strstr(DOBRA_RADA, "nie")) ?>     <br>
    Do Stałej DOBRA_RADA stosuje funkcje <strong>substr:</strong>         <?php print(substr(DOBRA_RADA , 10, 5)) ?>     <br>
    Do Stałej DOBRA_RADA stosuje funkcje <strong>str_pad:</strong>        <?php print(str_pad(DOBRA_RADA, 41, "-_-", STR_PAD_BOTH)) ?>     <br>
  
    
    
</body>
</html>