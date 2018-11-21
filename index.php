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
<form action="upload.php" method="post">
    <?php
        $break = "<br>";

        $questions = array ('1. Who is the main character in One Piece?',
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
        
        $answerOne = array('Sanji', 
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

        $answerTwo = array('Zoro', 
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

        $answerThree = array('Luffy', 
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

        $answerFour = array('Chopper', 
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

        $answers = array(3, 
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

        

        for ($a = 0 ; $a <= 19; $a++) {
            $fullQuestion[$a] = array($questions[$a] ,$answerOne[$a],$answerTwo[$a],$answerThree[$a],$answerFour[$a], $answers[$a]);
        }

        // var_dump($fullQuestion);
    ?>
    
    <?php
	for ($i = 0; $i < count($fullQuestion); $i++) { ?>

	<section class='container'>

			<h3>
				<?php echo $fullQuestion[$i][0]; ?>
			</h3>
			<section>
			<?php 
                $a = 1;
			for ($b = $i*4; $b < ($i+1)*4; $b++) { 
				?>
				<input type='radio' name="<?php echo $i; ?>" 
                value="<?php echo $a ?>" 
                id="<?php echo $b ?>">
                <label class="option"><?php echo $fullQuestion[$i][$a] ?>
                </label><br>
			<?php
                    $a++; 
		} ?>
			</section>
		</section>
        
	<?php }
?>
        	<section class="submit">
                <br>
			    <input type="submit" value="Submit!">
	        </section>
    </form>
    
</body>
</html>