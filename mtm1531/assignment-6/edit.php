<?php
$errors = array();
require_once 'includes/db.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$movie_title = filter_input(INPUT_POST, 'movie_title', FILTER_SANITIZE_STRING);
$release_date = filter_input(INPUT_POST, 'release_date', FILTER_SANITIZE_NUMBER_INT);
$director = filter_input(INPUT_POST, 'director', FILTER_SANITIZE_STRING);


if($_SERVER['REQUEST_METHOD'] == 'POST') {
	if(strlen($movie_title)< 1 || strlen($movie_title)> 100) {
		$errors['movie_title']=true;
	}
	if(strlen($release_date)< 1) {
		$errors['release_date']=true;
	}
	if(strlen($director)< 1 || strlen($director)> 50) {
		$errors['director']=true;
	}
		
	if(empty($errors)) {
		//do DB stuff once evrything is validated
		//require_once 'includes/db.php'; moved to the top
		$sql = $db->prepare('
			UPDATE movies 
			SET movie_title = :movie_title, 
				release_date = :release_date, 
				director = :director
			WHERE id = :id
		');
		//security issues PDO::...
		//puts value $dino name into :movie_title of DB
		$sql->bindValue(':id', $id, PDO::PARAM_INT);
		$sql->bindValue(':movie_title', $movie_title, PDO::PARAM_STR);
		$sql->bindValue(':release_date', $release_date, PDO::PARAM_INT);
		$sql->bindValue(':director', $director, PDO::PARAM_STR);
		
		$sql->execute();
		header('Location:index.php');
		exit;
	}
} else {
	//require_once 'includes/db.php'; to the top
	$sql = $db->prepare('
		SELECT movie_title, release_date, director
		FROM movies
		WHERE id = :id
	');
	$sql->bindValue(':id', $id, PDO::PARAM_INT);
	$sql->execute();
	$results = $sql->fetch();
	
	$movie_title = $results['movie_title'];
	$release_date = $results['release_date'];
	$director = $results['director'];
	
}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Edit Movie</title>
    <link href="css/general.css" rel="stylesheet">
</head>

<body>
	<h1>Edit Movie</h1> 
    
    <form method="post" action="edit.php?id=<?php echo $id;?>">
    
    
    	<div class="editdetails">
        	<label for="movie_title">
            	Movie Title
            	<?php if (isset($errors['movie_title'])):?>
                <strong class="error">is required</strong>
            	<?php endif; ?>
            </label>
            <input id= "movie_title" name="movie_title" required value="<?php echo $movie_title;?>">
        </div>
        <div class="editdetails">
        	<label for="release_date">
            	Release date
            	<?php if (isset($errors['release_date'])):?>
                <strong class="error">is required</strong>
            	<?php endif; ?>
            </label>
            <input id= "release_date" name="release_date" required value="<?php echo $release_date;?>">
        </div>
        <div class="editdetails">
        	<label for="director">
            	Director
            	<?php if (isset($errors['director'])):?>
                <strong class="error">is required</strong>
            	<?php endif; ?>
            </label>
            <input id= "director" name="director" required value="<?php echo $director;?>">
        </div>
        
        
        
        <button class="savebutton" type="submit">Save</button>
        
        </form>
    
</body>
</html>