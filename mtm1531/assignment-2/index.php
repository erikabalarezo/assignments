<?php

var_dump($_POST);
?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Money Calculator Form</title>
</head>

<body>
	<?php if($_SERVER['REQUEST_METHOD']== 'GET') : ?>
	<form method="post" action="index.php">
		<label for="number-one">Number 1</label>
		<input id="number-one" name="number-one">
        
        <label for="number-two">Number 2</label>
        <input id="number-two" name="number-two">
        
        <label for="function">Function</label>
        <select id="function" name="function">
        	<option value="plus">+</option>
            <option value="minus">-</option>
            <option value="multiply">*</option>
            <option value="division">/</option>
         </select>
		<button type="submit">Calculate</button>
	</form>
	<?php else : ?>
    	<?php
			switch ($_POST['rating']){
				case plus:
				?>
                	<h1><?php echo $_POST['dino-name'] ?> suck!</h1>
                <?php
				break;
				case minus:
				?>
                	<h1><?php echo $_POST['dino-name'] ?> suck!</h1>
                <?php
				break;
				case multiply:
				?>
                	<h1.<?php echo $_POST['dino-name']; ?> are OK.</h1>
                <?php
				break;
				case division:
				?>
                	<h1><?php echo $_POST['dino-name']; ?> are amaze-a-zing!
                <?php
				break;
	}
	?>
    <?php endif; ?>
</body>
</html>