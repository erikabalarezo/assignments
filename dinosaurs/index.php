<?php
require_once 'includes/db.php';

$sql =$db->query('
	SELECT id, dino_name, loves_meat, in_jurassic_park
	FROM dinosaurs
	ORDER BY dino_name ASC
');
//debuggin only
//var_dump($db->errorInfo());
//use query string single.php?id to send us to other pages

$results = $sql->fetchALL();
//results is array
//dino variables is for each iteration
?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Dinosaurs</title>
</head>

<body>

	<a href="add.php">Add a Dinosaur</a>
    
	<?php foreach($results as $dino): ?>
	<h2><a href="single.php?id=<?php echo $dino['id'];?>">
	
		<?php echo $dino['dino_name'];?></h2>
	<dl>
    	<dt>Loves meat</dt>
        <dd><?php echo $dino['loves_meat'];?></dd>
        <dt>In Jurassic Park</dt>
         <dd><?php echo $dino['in_jurassic_park'];?></dd>
	</dl>
    <?php endforeach;?>
</body>
</html>