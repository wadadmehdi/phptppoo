<?php
/*
//exo 1
$input = readline("please enter a number:");
if ($input%7 == 0 & $input%9 == 0){
    echo "success";
} else {
    echo " enter another number";
}

*/

/*exo 2
$compteur=0;
do
{$x=rand(0,1000);$y=rand(0,1000);$z=rand(0,1000);
$compteur++;
echo $x, "," , $y, "," , $z,"<br/>";}

while($x%2==1 OR $y%2==0 OR $z%2==0);
echo "Résultat obtenu en $compteur coups";
*/
/*
// exo 3
for($i=10;$i<=35;$i++)
{ 
    // les lettres de A à Z commence depuis l'indice 65 jusqua 90
    $tab[$i]=chr(55+$i);
    
}
//Lecture avec for
for($i=10;$i<=35;$i++)
{
echo "Elément d'indice $i:$tab[$i] <br/>";}
echo "<hr/>";
//Lecture avec foreach
foreach($tab as $cle=>$valeur){
    echo "Elément d'indice $cle : $valeur <br />";
}
*/

/*exo 4 
$nb=13;
$compteur=0;
$x=rand(0,1000);
//Boucle while
while($x%$nb!=0){
    $x=rand(0,1000);
    $compteur++;
}
echo "$x est multiple de $nb: Résultat obtenu en $compteur coups";
*/

/*exo 5
$chaine = "hello";
for($i= 0; $i< strlen($chaine); $i++){
 echo $chaine[$i]."<br />";
} 
*/

/*exo7

for($i = 1;$i <= 5;$i++) {
    for($k = 1;$k <= $i;$k++) {
       echo "*";
    }
    echo '<br />';
 }
*/

/*exo 8
   $tableau = array();
   $tableau1 = array();
   $tableau2 = array();
   $i = 0;
   while($i < 10) {
      $tableau[] = rand(0, 100);
      $i++;	  
   }
   foreach($tableau as $t) {
      if($t < 50) {
         $tableau1[] = $t;
      } else {
         $tableau2[] = $t;		  
      }
   }
   
   echo 'Tableau 1 : ';
   foreach($tableau1 as $t1) {
      echo $t1.' ';
   }
   
   echo '<br />Tableau 2 : ';
   foreach($tableau2 as $t2) {
      echo $t2.' ';
   }
*/

/*exo 9
$tab = array(1, 2, 2, 3, 3, 3, 4, 5, 5);
print_r(array_values(array_unique($tab)));
*/
/*exo 10
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= 5; $j++) {
       if ($j == 1) {
         echo str_pad($i * $j,2 ," ");
       } else {
         echo str_pad($i * $j,4 ," ");
       }
    }
    echo "<br />";
  }
  */

