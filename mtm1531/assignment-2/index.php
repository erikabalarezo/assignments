<?php
$result = 0;
$num1 = 0;
$num2 = 0;
$total = 0;
$function = 'plus';
//var_dump($_POST);


if (isset($_POST['function']) && isset($_POST['num1']) && isset($_POST['num2'])) {
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$function = $_POST['function'];
	
	if(($num2 > 0) && ($num1 > 0)) {
		switch ($_POST['function']){
			case "minus":
				if($num1 >= $num2) 
					$result =  $num1 - $num2;
				break;
			case "multiply":
				$result =  $num1 * $num2;
				break;
			case "division":
				$result = $num1 / $num2;
				break;
			case "plus":
			default:
				$result =  $num1 + $num2;
				break;
		}
	}
}
$total = $result * 1.13;

?>

<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<title>Money Calculator Form</title>
	<link href="css/general.css" rel="stylesheet">
</head>

<body>
	<h1>Money Calculator Form</h1>
	<form class = "moneyform" method="post" action="index.php"
	
		<label for="num1">Number 1</label>
		<input type="number" id="num1" name="num1">
		<label for="num2">Number 2</label>
		<input type="number" id="num2" name="num2">

		<label for="function">Function</label>
		<select id="function" name="function">
			<option value="plus">+</option>
			<option value="minus">-</option>
			<option value="multiply">*</option>
			<option value="division">/</option>
		</select>
		<button>Calculate</button>
		
		<strong>$<?php echo number_format($total,2); ?></strong>
		
		
	</form>

</body>

</html>