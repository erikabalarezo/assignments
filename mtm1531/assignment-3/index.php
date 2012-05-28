<?php


$possible_preferredlang = array(
	'english' => 'English'
	, 'french' => 'French'
	, 'spanish' => 'Spanish'
);


require_once 'includes/registform-processor.php';
?>
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Registration Form</title>
	<link href="css/general.css" rel="stylesheet">
</head>

<body>
	<h1>Registration Form</h1>
	<form method= "post" action="index.php">
		<div>
			<label for="name">Name <?php if(isset($errors['name'])): ?>
				<strong class="error">is required</strong>
				<?php endif;?>
			</label>
			<input type="text" id="name" name="name" required value="<?php echo $name; ?>">
		</div>
		<div>
			<label for="email">E-mail Address<?php if (isset($errors['email'])) : ?><strong>is required</strong><?php endif; ?></label>
			<input id="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div>
			<label for="username">User Name <?php if(isset($errors['username'])): ?>
				<strong class="error">is required</strong>
				<?php endif;?>
			</label>
			<input type="text" id="username" name="username" required value="<?php echo $username; ?>">
		</div>
		<div>
			<label for="password">Password <?php if(isset($errors['password'])): ?>
				<strong class="error">is required</strong>
				<?php endif;?>
			</label>
			<input type="password" id="password" name="password" required value="<?php echo $password; ?>">
		</div>
		<div>
		<fieldset>
			<legend>Preferred Language</legend>
				<?php if (isset($errors['preferredlang'])) : ?><p class="selectlangmessage"><strong>Select Preferred Language</strong></p><?php endif; ?>
				<?php foreach ($possible_preferredlang as $key => $value) : ?>
					<input type= "radio" id="<?php echo $key; ?>" name="preferredlang" 
						value="<?php echo $key; ?>"<?php if ($key == $preferredlang) { echo ' checked'; } ?>>
					<label for="<?php echo $key; ?>"><?php echo $value; ?></label>
				<?php endforeach; ?>
		</fieldset>
		</div>
		<div>
			<label for="notes">Notes</label>
			<textarea id="notes" name="notes" value="<?php echo $notes;?>"></textarea>
			<!--<p>At least 25 characters long</p>-->
		</div>
		<div>
			<input type="checkbox" id="acceptterms" name="acceptterms" required value="1">
			<label for="acceptterms">Accept terms?<?php if(isset($errors['acceptterms'])): ?>
				<strong class="error">You must comply!</strong><?php endif;?>            	
				</label>

		</div>
		<button type="submit">Send</button>
			
	</form>


</body>
</html>