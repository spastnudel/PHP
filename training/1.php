
<?php 
	
	//$user = array("first_name" => "Brad", "last_name" => "Traversy", "email" => "techguyinfo@gmail.com");
		$fruits = array("Apple","Orange","Grapes");
	foreach($fruits as $fruit) {
		echo $fruit."<br>";
		
	}
?>	
	<ul>
	<?php foreach($fruits as $fruit) :?>
		
		<li><?php echo $fruit; ?></li>
	
	<?php endforeach; ?>
	</ul>
