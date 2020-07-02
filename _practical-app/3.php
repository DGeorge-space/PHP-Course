<?php include "functions.php"; ?>
<?php include "includes/header.php"; ?>

<section class="content">

	<aside class="col-xs-4">

		<?php Navigation(); ?>

	</aside>
	<!--SIDEBAR-->


	<article class="main-content col-xs-8">

		<?php

		/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP




	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */
		$number = 1;
		if ($number > 2) {
			echo "I hate PHP";
		} elseif ($number > 1) {
			echo "Php is the worst";
		} else {
			echo "I love PHP!"."<br>";
		}

		
		for ($val = 0; $val < 10; $val++) {
			echo $val. "<br>";
		}

		echo "<br>";

		$testSubject = 100;

		switch($testSubject){
			case 95:
			break;
			case 96:
			break;
			case 97:
			break;
			case 99:
			break;
			default:
			echo "Test subject is too large... We can't contain it!!";
			
		}


		?>






	</article>
	<!--MAIN CONTENT-->

	<?php include "includes/footer.php"; ?>