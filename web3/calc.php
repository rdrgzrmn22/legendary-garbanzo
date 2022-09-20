<html>
<head><title>Calculation Result</title></head>
<body>
    <?php
        # test if input is_numeric
        if(is_numeric($_POST['val1']) & is_numeric($_POST['val2'])){
            $a = $_POST['val1'];
            $b = $_POST['val2'];
          
               
            # test if calc is not null
            if(isset($_POST['calc'])){
                $c = $_POST['calc'];

                # switch statement for value of calc             
                switch(($c)){
                    case 'add':
                        $result = $a + $b;
                    break;
                    case 'sub':
                        $result = $a - $b;
                    break;
                    case 'mul':
                        $result = $a * $b;
                    break;
                    case 'div':
                        $result = $a / $b;
                    break; 
                    default:
                        echo "Invalid entry - please retry";                           
                }
                echo "Calculation result: $result";

            }else{echo "Invalid entry - please retry"; }
        }
        else{ echo "Invalid entry - please retry"; }
    ?>
</body>
</html>