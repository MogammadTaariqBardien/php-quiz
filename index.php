<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Anime Quiz</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- This section contains the heading -->
    <header class='top'>
        <h1>Welcome to the Grand Anime Quiz</h1>
    </header>
    <!-- End of the section with the heading -->
    <!-- Start of the Form for the quiz -->
    <form action="results.php" method="post">
        <?php
            $break = "<br>";
            // The array containing all the questions
            $questions = array (
                '1. Who is the main character in One Piece?',
                '2. Who the sidekick of Saitama in One Punch Man?',
                '3. From which series is the Shadow Realm used?', 
                '4. What was Kurogane Ikki know as in Rakudai Kishi no Eiyuutan?', 
                '5. Who is the brother of Edward Elric in Full Metal Alchemist?', 
                '6. In Soul Eater what does Death The Kid hate the most?', 
                '7. Which part of his powers did Ichigo get from his mother?', 
                '8. How many races exist in Disboard, the fantasy world of No Game No Life?', 
                '9. What are the weapons in Akame ga Kill called?', 
                '10. What is the constitution of Rikuo Nura in Nurarihyon no Mago?', 
                '11. What kind of mage is Lucy from Fairy Tail?', 
                '12. Which animal is associated with Itachi from Naruto?', 
                '13. What is the name of the pharoah that is in the Millennium Puzzle from Yu-Gi-Oh?', 
                '14. Who is the blue haired maid from Re:Zero?', 
                '15. What is Yato from Noragami?', 
                '16. Who is known as Mr.0 in One Piece?', 
                '17. How did Luffy obtain his powers?', 
                '18. What is the curse Saitama from One Punch Man has?', 
                '19. When Baby Beelzebub cries what happens?', 
                '20. How old is Meliodas from Seven Deadly Sins?');
            // End of the array
            // Start of the array for every first choice
            $answerOne = array(
                'Sanji', 
                'L', 
                'Yu-Gi-Oh', 
                'Failed Knight', 
                'Gintoki', 
                'Unsymettrical things', 
                'Vizard', '14', 
                'Imperial Arms', 
                '1/2 Human, 1/2 Demon', 
                'Spirit Mage', 'Eagle', 
                'Atem', 
                'Ram', 
                'A God', 
                'Doflamingo', 
                'Miracle', 
                'He is cannot grow hair', 
                'Shocking Occurs', 
                '3000');
            // End of the array
            // Start of the array for every second choice
            $answerTwo = array(
                'Zoro', 
                'Genos', 
                'Duel Masters', 
                'Best Knight', 
                'Renji', 
                'Doing work', 
                'Hollow', 
                '15', 
                'Imperial Weapons', 
                '1/4 Human, 3/4 Demon', 
                'Celestial Spirit Mage', 
                'Snake', 
                'Yami Yugi', 
                'Rem', 
                'A Spirit', 
                'Ivan', 
                'Devil Fruit', 
                'He is mentally slow', 
                'Floods Occur', 
                '28');
            // End of the array
            // Start of the array for every third choice
            $answerThree = array(
                'Luffy', 
                'Gon', 
                'One Piece', 
                'Worst One', 
                'Alphonse', 
                'Black Star', 
                'Shinigami', 
                '16', 
                'Imperial Killers', 
                '3/4 Human, 1/4 Demon', 
                'Celestial Mage', 
                'Hawk', 
                'Marik', 
                'Emilia', 
                'An Angel', 
                'Crocodile', 
                'Devil Eggs', 
                'He is always alone', 
                'Things shatter from the high pitch', 
                '250');
            // End of the array
            // Start of the array for every fourth choice
            $answerFour = array(
                'Chopper', 
                'Kirito', 
                'Bleach', 
                'Best One', 
                'Sora', 
                'Maka Albern', 
                'Quincy', 
                '17', 
                'Imperial Armaments', 
                '2/3 Human, 1/3 Demon', 
                'Key Mage', 
                'Crow', 
                'Bakura', 
                'Luna', 
                'A Devil', 
                'Akainu', 
                'Magical Item', 
                'He always wins in one punch', 
                'Demons are summoned', 
                '90');
            // End of the array
            // Start of the array for the answer to every question
            $answers = array(
                3, 
                2, 
                1, 
                3, 
                3, 
                1, 
                4, 
                3, 
                1, 
                3, 
                2, 
                4, 
                1, 
                2, 
                1, 
                3, 
                2, 
                4, 
                1, 
                1);
            // End of the array
            // Below is the for loop to create each question into an array
            for ($a = 0 ; $a <= 19; $a++) {
                $fullQuestion[$a] = array($questions[$a] ,$answerOne[$a],$answerTwo[$a],$answerThree[$a],$answerFour[$a], $answers[$a]);
            }

        ?>
        
    <?php
    // The for loop that runs to the size of the fullQuestions array
    for ($i = 0; $i < count($fullQuestion); $i++) { ?>
    <!-- Start of the section that will get displayed from the loop -->
	    <section class='container'>
            <!-- This will display each question -->
			<h3>
				<?php echo $fullQuestion[$i][0]; ?>
            </h3>
            <!-- End of what will display each question -->
            <!-- Section containing all the choices to choose from in each question -->
			<section>
                <?php 
                    $a = 1;
                // Below is the for loop that loops through array and displays all the choices while assigning them values to ensure that only 1 can be picked and making you have to select 1
                for ($b = $i*4; $b < ($i+1)*4; $b++) { 
                    ?>
                    <input type='radio' required name="<?php echo $i; ?>" 
                    value="<?php echo $a ?>" 
                    id="<?php echo $b ?>">
                    <!-- This is to assign labels to each choice from each array -->
                    <label for="<?php echo $b ?>" class="option"><?php echo $fullQuestion[$i][$a] ?>
                    </label><br>
                <?php
                        $a++; 
                    } ?>
            </section>
            <!-- End of section -->
		</section>
        <!-- End of Section that displays from the loop -->
	    <?php }
        ?>
        <!-- Section containing the submit button -->
        <section class="lower">
            <br>
			<input type="submit" value="Submit" class="submit">
        </section>
        <!-- End of Section -->
    </form>
    <!-- End of the form for the quiz -->
</body>
</html>