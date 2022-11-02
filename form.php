<?php
if (isset($_POST['submit']))
{
    if ((!isset($_POST['prenom'])) || (!isset($_POST['nom'])) || 
        (!isset($_POST['addresse'])) || (!isset($_POST['addressemail'])) || 
        (!isset($_POST['password'])) )
    {
        $error = "*" . "Veuillez remplir les champs requis";
    }
    else
    {
        $prenom = $_POST['prenom'];
        $nom = $_POST['nom'];
        $addresse = $_POST['addresse'];
        $addressemail = $_POST['addressemail'];
        $password = md5($_POST['password']);

    }
}
?>
<html>
<head>
    <title>Traitement formulaire</title>
</head>
  
<body>
    <h1>Traitement de formulaire en PHP</h1>
    <fieldset>
        <form id="form" method="post" action="form.php">
            <?php
                if (isset($_POST['submit']))
                {
                    if (isset($error))
                    {
                        echo "<p style='color:red;'>" 
                        . $error . "</p>";
                    }
                }
                ?>
  
                Prenom:
                <input type="text" name="prenom"/> 
                 <span style="color:red;">*</span>
                <br>
                <br>
                Nom:
                <input type="text" name="nom"/>
                  <span style="color:red;">*</span>
                <br>
                <br> 
                Addresse:
                <input type="text" name="addresse"/>
                  <span style="color:red;">*</span>
                <br>
                <br> 
                Email:
                <input type="email" name="addressemail"/>
                  <span style="color:red;">*</span>
                <br>
                <br> 
                Mot de passe:
                <input type="password" name="password"/>
                   <span style="color:red;">*</span>
                <br>
                <br>
                <input type="submit" value="submit" name="submit" />
        </form>
    </fieldset>
    <?php
       if(isset($_POST['submit']))
       {
          if(!isset($error))
           {
                   echo"<h1>Informations reçues</h1><br>";
                   echo "<table border='1'>";
                   echo "<thead>";
                   echo "<th>Parametre</th>";
                   echo "<th>Valeur</th>";
                   echo "</thead>";
                   echo "<tr>";
                   echo "<td>Prenom</td>";
                   echo "<td>".$prenom."</td>";
                   echo "</tr>";
                   echo "<tr>";
                   echo "<td>Nom</td>";
                   echo "<td>".$nom."</td>";
                   echo "</tr>";
                   echo "<tr>";
                   echo "<td>Addresse</td>";
                   echo "<td>".$addresse."</td>";
                   echo "</tr>";
                   echo "<tr>";
                   echo "<td>email</td>";
                   echo "<td>" .$addressemail."</td>";
                   echo "</tr>";
                   echo "<tr>";
                   echo "<td>Mot de passe</td>";
                   echo "<td>".$password."</td>";
                   echo "</tr>";
                   echo "</table>";
        }
      }
    ?>
</body>
</html>