<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

 echo pow(2,100);

 $string = "MY NAME IS DANIEL";

 echo strtolower($string);

 $array1 = [23,5435,56546677,5434343,665356663,1];

 $array2 = sort($array1);

 echo print_r($array2);
 

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>