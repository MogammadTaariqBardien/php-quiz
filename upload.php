<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Recieve information and Display</title>
</head>
<body>

<?php

        $answers = array( '3', 
        '2', 
        '1', 
        '3', 
        '3', 
        '1', 
        '4', 
        '3', 
        '1', 
        '3', 
        '2', 
        '4', 
        '1', 
        '2', 
        '1', 
        '3', 
        '2', 
        '4', 
        '1', 
        '1');

        $total = 0;
        for ($e=0; $e <= 19 ; $e++) { 
            if ($_POST[$e] == $answers[$e] ){
                $total++;
            }  
        }
        // echo $total."/20";
        switch ($total) {
            case ($total < 10):
                    echo "You have much to learn<br>";
                    echo $total."/20";
                break;
            case ($total > 9 && $total < 16):
                    echo "You can still do better<br>";
                    echo $total."/20";
                break;
            case ($total > 15 ):
                    echo " You have done well<br>";
                    echo $total."/20";
                break;

            default:
                    echo "This is not working right<br>";
                    echo $total."/20"; 
                break;
        }

            

?>

	<section class="submit">
		<form action="index.php" method="post">
		<input type="submit" value="Redo">
		
		</form>
	</section>
    
</body>
</html>