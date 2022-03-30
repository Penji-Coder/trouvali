  <?php   

  
    try
    {                            
        $db = new PDO('mysql:host=trouvali;dbname=trouvali;port=3306;charset=utf8','root','');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
  }
   
          catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
 


  ?>

