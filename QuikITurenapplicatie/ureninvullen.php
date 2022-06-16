<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="overzicht.css">
    </head>
  <body>
  <div class="cont">
    <table class="table">
       <tr>
         <th>begintijd</th>
         <th>eindtijd</th>
         <th>Pauze</th>
         <th>werkdag</th>
         <th>projecten</th>
       </tr>


<?php
$dbhost = "localhost";
$dbuser = "root";
$dbwachtwoord = "";
$dbnaam = "quikitdatabase";

$conn = new mysqli ($dbhost, $dbuser, $dbwachtwoord, $dbnaam,);


        $begintijd=$_POST['timeStart'];
        $eindtijd=$_POST['timeEnd'];
        $pauze=$_POST['timeBreak'];
        $werkdag=$_POST['dagen'];
        $projecten=$_POST['project'];

        $sql="INSERT INTO uren(begintijd,eindtijd,pauze,werkdag,projecten) VALUES('$begintijd','$eindtijd','$pauze','$werkdag','$projecten')";
        $sql2="SELECT FROM projecten(projectnaam)";        

        $run_gry=mysqli_query($conn,$sql,);
     

        //deze regel zorgt ervoor dat hij connectie met de database maakt.
        $conn = mysqli_connect("localhost", "root", "", "quikitdatabase");
        //deze regel selecteert alle gegevens uit de tabel door het sterretje.
        $sql = "SELECT * FROM uren";
        //als de connectie goed is met de rijen($row) uit de database dan haalt hij ze op. zo niet komt er geen resultaten te staan bij regel 62
        $result = mysqli_query($conn, $sql);
        //als het aantal rijen meer dan 0 is krijg je ze tezien
        if ($result->num_rows > 0) {
          while ($row = mysqli_fetch_array($result)) {
              //de $row zijn de rijen uit de tabel die in mijn database staan daar worden de gegevens vanuit opgehaalt. 
              echo "<tr class=\"schema\">";
              //echo "<td class=\"input\">" . $row['werknemer'] . "</td>";
              echo "<td class=\"input\">" . $row['begintijd'] . "</td>";
              echo "<td class=\"input\">" . $row['eindtijd'] . "</td>";
              echo "<td class=\"input\">" . $row['pauze'] . "</td>";
              echo "<td class=\"input\">". $row['werkdag']."</td>";
              echo "<td class=\"input\">" . $row['projecten'] . "</td>";
              echo "</tr>";
            }
        }
        else {
          //als de connectie niet goed is kan hij geen gevevens ophalen en is dit wat hij zegt
            echo "Geen resultaten";
        }
        $conn-> close();

    ?>
    

<link rel="stylesheet" type="text/css" href="style.css">
<a href="welcome.php">
     <input type="button" value="Terug naar keuze maken" class="btn2">   
     </a>