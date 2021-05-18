<?php
$submit = filter_input(INPUT_POST, 'submit');
if(isset($_POST['games'])) {
 $games = $_POST ['games'];   
}





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
 if(isset($submit)){
     echo "formulář byl odeslán";
     var_dump($games);
 }  else  {?>
 
 


<h1>Vyber oblíbené hry</h1>
<form action ="index.php" method="post">
<input type="checkbox" name="games[]" id="Farcry3" value ="Farcry3">
<label for="Farcry 3">Far Cry 3</label><br>
<input type="checkbox" name="games[]" id="Farcry 4" value="Farcry4">
<label for="Farcry4">Far Cry 4</label><br>
<input type="checkbox" name="games[]" id="Darksouls3" value="Darksouls3">
<label for="Darksouls3">Dark Souls 3</label><br>
<input type ="checkbox" name="games[]" id="Mario" value="Mario">
<label for="Mario">Marion </labrl><br>
<input type="checkbox" name="games[]" id="CSGO" value="CSGO">
<label for="CSGO">CSGO</label><br>
<input type="checkbox" name="games[]" id="Valorant" value="Valorant">
<label for="Valorant">Valorant</label><br>
<input type="checkbox" name="games[]" id="Assassinscreed" value="Assassinscreed">
<label for="Assassinscreed">Assassins Creed</label><br>
<input type="checkbox" name="games[]" id="Needforspeed" value="Needforspeed">
<label for="Needforspeed">Need For Speed</label><br>
<input type="checkbox" name="games[]" id="Crew" value="Crew">
<label for="Crew">Crew</label><br>
<input type="checkbox" name="games[]" id="Flatout2" value="Flatout2">
<label for="Flatout2">Flatout 2</label><br>
<input type="submit" name="submit" value="odeslat">

</form>
 <?php } ?>
</body>
</html>