<?php
$dbhost = "localhost";
$dbuser = "root";
$dbwachtwoord = "";
$dbnaam = "quikitdatabase";

$conn = new mysqli ($dbhost, $dbuser, $dbwachtwoord, $dbnaam,);

$sql2="SELECT * FROM projecten";

$run_gry=mysqli_query($conn,$sql2,);
?>

<!DOCTYPE html>
<html>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');   


body {
    background-color: lightblue;
    background-image: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url(bg.jpg);
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 35px;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

input[type=week], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 35px;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}


  
.btn2 {
  width: 100%;
  background-color: red;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 35px;
  cursor: pointer;
  font-family: 'Poppins', sans-serif;
  font-weight: bold;
  
}
.btn {
  width: 100%;
  background-color: blue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 35px;
  cursor: pointer;
  font-family: 'Poppins', sans-serif;
  font-weight: bold;
  
}

.btn2:hover {
  background-color: #38833c;
}
input[type=submit]:hover {
  background-color: #38833c;
}

.box {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  font-family: 'Poppins', sans-serif;
  width: 20%;
  margin-left: 39%;
  margin-top: 10%;
  border-radius: 25px;
  
}

h3 {
    font-family: 'Poppins', sans-serif;
    text-align: center;
}

@media screen and (max-width: 900px){
  .box {
    width: 70%;
    margin: 50px auto;
  }
}


</style>
<body>
<head>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <div class="box">
      <input type="hidden" name="action" value="ureninvullen">
        <h3>Uren invullen</h3>
  <form action="ureninvullen.php" method="post">
    <label for="timeStart">Begin tijd</label>
    <input name="timeStart" type="text" placeholder="00:00">
    <label for="timeEnd">Eind tijd</label>
    <input name="timeEnd" type="text" placeholder="00:00">
    <label for="timeBreak">Pauze in minuten</label>
	  <input name="timeBreak" type="text" placeholder="00">
    <label for="dagen">Werkdag</label>
    <select id ="dagen" name="dagen">
        <option value="Maandag">Maandag</option>
        <option value="Dinsdag">Dinsdag</option>
        <option value="Woensdag">Woensdag</option>
        <option value="Donderdag">Donderdag</option>
        <option value="Vrijdag">Vrijdag</option>
        <option value="Zaterdag">Zaterdag</option>
    </select>
    <label for="project">Project</label>
    <select name="project" id="project">
    <option value="ApplicatieJanZwaan">ApplicatieJanZwaan</option>
    <option value="ApplicatieQuikIT">ApplicatieQuikIT</option>
      <?php while ($row1 = mysqli_fetch_array($run_gry)):;?>
      <option><?php echo $row1[1];?></option>
      <?php endwhile;?>
    </select>
    <a href="welcome.php">
     <input type="button" value="Terug naar keuze maken" class="btn2">   
     </a>
    <input type="submit" value="OPSLAAN" class="btn">
  </form>
  
</head>
</div>

</body>
</html>