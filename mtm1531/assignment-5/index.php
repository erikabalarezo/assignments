<?php
require_once 'includes/db.php';

$sql =$db->query('
	SELECT id, movie_title, release_date, director
	FROM movies
	ORDER BY movie_title ASC
');
//debuggin only
//var_dump($db->errorInfo());
//use query string single.php?id to send us to other pages

$results = $sql->fetchALL();

?><!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Movie Browser</title>
     <link href="css/general.css" rel="stylesheet">
</head>



<body>
	<h1>Movie Browser</h1>
	<?php foreach($results as $movie): ?>
	<h2><a href="single.php?id=<?php echo $movie['id'];?>">
	
		<?php echo $movie['movie_title'];?></h2>
	<dl>
    	<dt>Release date</dt>
        <dd><?php echo $movie['release_date'];?></dd>
        <dt>Director</dt>
         <dd><?php echo $movie['director'];?></dd>
	</dl>
    <?php endforeach;?>
</body>
</html>