<?php
require_once 'includes/form-processor.php';
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration Form</title>
	<link href="css/general.css" rel="stylesheet">
</head>

<body>
	<form method= "post" action="index.php">
    	<div>
			<label for="name">Name <?php if(isset($errors['name'])): ?>
				<strong class="error">is required</strong>
				<?php endif;?>
			</label>
			<input id="name" name="name" required value="<?php echo $name; ?>">
        </div>
		<div>
        	<label for="email">E-mail Address<?php if(isset($errors['email'])): ?>
            	<strong class="error">is required</strong>
            	<?php endif;?>
             </label>
            <input type="email" id="email" name="email" value"<?php echo $email;?>">
        </div>




</body>
</html>