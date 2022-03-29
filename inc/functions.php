<!--------------------------------------- Title Dynamic ---------------------------------------------->
<title><?php if (isset($title)) {echo $title;}
else {echo "My Website";} ?></title>

  <?php 
  $conv=0;
  if(isset($_POST['submit'])&&!empty($valeur)){
  //conversion euro en BTC 1€=39056.0660BTC
    if($devise1=='€'&&$devise2=='BTC'){
    $conv=39056.0660*$valeur;
    echo "<b class='aff'>".$valeur." € = ".$conv." BTC</b>";
    }
  //conversion BTC en euro 1BTC=0.000027€
   if($devise1=='BTC'&&$devise2=='€'){
    $conv=0.000027*$valeur;
    echo "<b class='aff'>".$valeur." BTC = ".$conv." €</b>";
    }
  
  }
  ?>