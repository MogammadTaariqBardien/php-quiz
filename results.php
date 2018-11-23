<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Results</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="second">

    <?php
        // Start of the array that contains the answers
        $answers = array(
            '3', 
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
        // End of array
        $total = 0;
        $e = 0;
        // Array that checks that each answer from the POST is equal to the same in the answers array and adds to the total if it is correct for each question
        for ($e=0; $e <= 19 ; $e++) { 
            if ($_POST[$e] == $answers[$e] ){
                $total++;  
            } 
        }
        // Below is a switch statement that displays an appropriate based on the total that achieved from the for loop
        switch ($total) {
            case ($total <= 9):
                    echo "<p>You have much to learn!</p>";
                    echo $total."/20.<br>";
                    echo "<img class='img' src='img/sad.jpeg'>";
                break;
            case ($total >= 10 && $total <= 15):
                    echo "<p>You can still do better! But Congradulations!</p>";
                    echo $total."/20.<br>";
                    
                break;
            case ($total >= 16 ):
                    echo "<p>You have done well! Congradulations!</p>";
                    echo $total."/20.<br>";
                    echo "<img class='img' src='img/smiley.jpeg'>";
                break;
            default:
                    echo "This is not working right<br>";
                    echo $total."/20"; 
                break;
        }
        // End of switch statement
    ?>
    <!-- Below is the section that allows you to redo the quiz -->
	<section class='lower'>
        <!-- Form that allows you to go back -->
		<form action="index.php" method="post">
		<input type="submit" value="Redo" class="submitb">
		</form>
	</section>
    <!-- End of Section -->
</body>
</html>