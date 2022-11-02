<?php

function calc($op,$a,$b){
    switch ($op){
       case "+":
           return $a+$b;
           break;
       case "-":
           return $a-$b;
           break;
       case "*":
           return $a*$b;
           break;
       case "/":
           if($b){
           return $a/$b;
           break;}
           else{
               return -1;
           }
       default:
       {
           echo " Erreur de saisie ou d'opretaeur";
       }
   }
   }

if(isset($_POST["submit"])){

    echo "le resultat du calcule est :".calc($_POST["op"],$_POST["nb1"],$_POST["nb2"]);
    echo "<hr />";
}



?>

<html>
<head>
    <title>CALCULATRICE</title>
</head>
<body>
<form method="post" action="get_post.php">
<p>
Nombre 1 : <input type="text" name="nb1" required>
<span style="color:red">*</span>
</p>
<p>
Nombre 2 : <input type="text" name="nb2" required>
<span style="color:red">*</span>
</p>
<p>
Operateur : <input type="text" name="op" required>
<span style="color:red">*</span>
</p>
<p>
<input type="submit" name="submit">
</p>
</form>


</body>



</html>