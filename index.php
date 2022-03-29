<?php $title = 'Accueil'; 
      include_once("inc/doctype.php"); ?>
<body>
  <?php  include_once("inc/header.php");?>

  <?php
        include_once("inc/variables.php") ;
        include_once("inc/functions.php") ;
  ?>

<!-------------------------------------------- Convertisseur Euro/BTC ----------------------------------------->

<?php




?>

<div id="content" align="center">
  <strong style="color:blue;font-size:30px;">Conversion monnaie</strong><br><br>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
  <table >
  <tr><td><b>Monnaie d'entrée :</b></td><td><select name="devise1" id="devise1"  >
         <option  value="<?php print $devise1;?>"><?php print $devise1;?></option>
         <option  value="€">€</option>
        <option  value="BTC">BTC</option>
        
     </select></td></tr>  
  <tr><td><b>Valeur :</b></td><td><input type="text" name="valeur" value="<?php print $valeur;?>"></td></tr>
  <tr><td><b>Monnaie de sortie :</b></td><td><select name="devise2" id="devise2"  >
        <option  value="<?php print $devise2;?>"><?php print $devise2;?></option>
          <option  value="€">€</option>
        <option  value="BTC"></option>
     </select></td></tr>
  <tr><td></td><td><input type="submit" name="submit" value="Convertir" class="bouton"></td></tr>
  </table>
  </form>




  </div>
 




    <?php include_once("inc/footer.php"); ?>
</body>
</html>