<?php
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
			<input id="name" name="name" required value="<?php echo $name; ?>">
        </div>
		<div>
        	<label for="email">E-mail Address<?php if(isset($errors['email'])): ?>
            	<strong class="error">is required</strong>
            	<?php endif;?>
             </label>
            <input type="email" id="email" name="email" required value"<?php echo $email;?>">
        </div>
		<div>
			<label for="username">User Name <?php if(isset($errors['username'])): ?>
				<strong class="error">is required</strong>
				<?php endif;?>
			</label>
			<input id="username" name="username" required value="<?php echo $username; ?>">
        </div>
		<div>
			<label for="password">Password <?php if(isset($errors['password'])): ?>
				<strong class="error">is required</strong>
				<?php endif;?>
			</label>
			<input id="password" name="password" required value="<?php echo $password; ?>">
        </div>
		<div>
        <fieldset>
        	<legend>Preferred Language</legend>
            
            <input type= "radio" id="english" name="preferredlang" value="english">
            <label for="english">English</label>
            
            <input type= "radio" id="french" name="preferredlang" value="french">
            <label for="french">French</label>
            
            <input type= "radio" id="spanish" name="preferredlang" value="spanish">
            <label for="spanish">Spanish</label>
		</fieldset>
        </div>
		<div>
        	<label for="notes">Notes
            
            </label>
            <textarea id="notes" name="notes" value="<?php echo $notes;?>"></textarea>
            <!--<p>5 to 100 characters long</p> -->
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