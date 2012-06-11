<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
	<h1>Add New Dinosaur</h1> 
    <form method="post" action="add.php">
    	<div>
        	<label for="dino_name">Dinosaur Name</label>
            <input id= "dino_name" name="dino_name" required>
        </div>
        <fieldset>
        	<legend>Relationship with meat</legend>
            <input type="radio" id="love" name="loves_meat" value="1">
            <label for="love">Loves Meat</label>
            <input type="radio" id="hate" name="loves_meat" value="0">
            <label for="hate">Hates Meat</label>
        </fieldset>
        
        <div>
        	<input type="checkbox" id="in_jurassic_park" name="in_jurassic_park">
           <label for="in_jurassic_park">In_jurassic_park?</label>
        </div>
    
</body>
</html>