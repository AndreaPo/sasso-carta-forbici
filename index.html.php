<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" type="text/css">
    <title>Sasso Carta Forbici</title>
</head>
<body>
    <div class="container">
        <h1>Sasso Carta Forbici</h1>
    </div>    
        <div class="container">
            <div class="item">
                <form action="" method="POST">
                    <input type="hidden" name="scelta" value="sasso">
                    <input type="submit" name="submit" value="SASSO">
                </form>
            </div>
            <div class="item">
                <form action="" method="POST">
                   <input type="hidden" name="scelta" value="carta">
                    <input type="submit" name="submit" value="CARTA">
                </form>
            </div>
            <div class="item">
                <form action="" method="POST">
                    <input type="hidden" name="scelta" value="forbici"> 
                    <input type="submit" name="submit" value="FORBICI">
                </form>
            </div>
        </div>
        
        <?php
                  if (isset($_POST['submit'])){
                      $scelta = $_POST['scelta'];
                      echo "<div class='container'><p class='choise'>You: ". $scelta . " </p></div><br>";
                      game($scelta);
                  }
 
                  function game( $choise ){

                      $randChoise = rand(1,3);
                      
                      $sasso = "sasso";
                      $carta = "carta";
                      $forbici = "forbici";

                      if ($randChoise == 1){

                          echo "<div class='container'><p class='pcResp'>Computer: " . $sasso ."</p></div><br>"; 

                          if ($choise == $sasso) echo "<div class='container'><p class='resp'>DRAW</p></div>";
                          
                          else if($choise == "carta") echo "<div class='container'><p class='resp'>WIN</p></div>";

                          else echo "<div class='container'><p class='resp'>LOSE</p></div>";
                      }
                      
                      if ($randChoise == 2){
                        echo "<div class='container'><p class='pcResp'>Computer: " . $carta ."</p></div><br>";
                      
                        if ($choise == $carta) echo "<div class='container'><p class='resp'>DRAW</p></div>";
                      
                        else if($choise == "forbici") echo "<div class='container'><p class='resp'>WIN</p></div>";
                        
                        else echo "<div class='container'><p class='resp'>LOSE</p></div>";
                      }
                    
                      if ($randChoise == 3){

                        echo "<div class='container'><p class='pcResp'>Computer: " . $forbici ."</p></div><br>"; 

                        if ($choise == $forbici) echo "<div class='container'><p class='resp'>DRAW</p></div>";
                        
                        else if($choise == "sasso") echo "<div class='container'><p class='resp'>WIN</p></div>";
                        
                        else echo "<div class='container'><p class='resp'>LOSE</p></div>";
                       }
                  }
        ?>
</body>
</html>