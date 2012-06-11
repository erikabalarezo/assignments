<?php
require_once 'includes/db.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
//->prepare() allows us tohave bbariables in our SQL
//We can create placeholders and later fill themiwht some contnet

//by using prepare we are protecting against SQL injection attacks
$sql = $db->prepare('
	SELECT id, dino_name, loves_meat, in_jurassic_park
	FROM dinosaurs
	WHERE id = :id
');
//bindValue(placeholder, variable, datatype);
//bindValue puts stuff into the place holder :id
//bind, execute, fetch ALL when more than one. just fetch now
$sql->bindValue(':id', $id, PDO::PARAM_INT);
$sql->execute();
$results = $sql->fetch();

?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo $results['dino_name']; ?> &middot; Dinosaurs</title>
</head>

<body>
	<h1><?php echo $results['dino_name']; ?></h1>
    <dl>
	    <dt>Loves Meat</dt>
    	<dd><?php echo $results['loves_meat'];?></dd>
     
        <dt>In Jurassic Park</dt>
        <dd><?php echo $results['in_jurassic_park'];?></dd>
    </dl>
    
    <a href="delete.php?id=<?php echo $id;?>">Delete</a>
    <a href="edit.php?id=<?php echo $id;?>">Edit</a>
</body>
</html>
