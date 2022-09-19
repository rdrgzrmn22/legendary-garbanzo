<html>
<head><title>Your Favorite</title></head>
<body>
    <?php
       
        if(isset($_POST['username'])){

            $user = $_POST['username'];
            $usercheck = empty($user);
           
            $b = $_POST['dish']; 
            $achk = empty($b);

        
                if ($usercheck != 1){       
                    if(isset($_POST['color']) & $achk != 1){
                        $a = $_POST['color'];              
                        echo "Thank you for your selection ".$user. "<br>You really enjoy ". $b . " <br>- especially with a nice " . $a . " wine";

                }else {echo "You haven't either selected a wine or entered a dish."; }


                }else {echo "You haven't entered your name."; }

          }
    ?>
    
</body>
</html>