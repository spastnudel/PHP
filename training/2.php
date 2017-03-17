
<?php 
	
	$users = array("First Name" => "Brad", "Last Name" => "Traversy", "Email" => "techguyinfo@gmail.com");
	//$fruits = array("Apple","Orange","Grapes");
	
?>	
	<ul>
	<?php foreach($users as $key => $value) :?>
		
		<li><?php echo $key; ?> : <?php echo $value; ?></li>
	
	<?php endforeach; ?>
	</ul>
