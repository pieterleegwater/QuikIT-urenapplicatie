<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welkom</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	
    <div class="container">
		 <class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Maak een keuze</p>
            <form method="get" action="ureninvullen2.php">
			<button class="continue" type="submit">Uren invullen</button>
            <?php echo "<h1>Welkom " . $_SESSION['username'] . "</h1>"; ?>
    <a class="continue" href="logout.php">Uitloggen</a>
			</div>
</form>


</body>

   