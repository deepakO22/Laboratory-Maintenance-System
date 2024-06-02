<?php
$servername='localhost:3306';
$username='root';
$password='';
$database='timetable';
$mysqli =new mysqli('localhost:3306','root','','timetable');
 if ($mysqli->connect_error) {
   die('Connect Error (' .  $mysqli->connect_errno . ')
    '.  $mysqli->connect_error);
 }

$sql="select *from apssdc";
$result=$mysqli->query($sql);
$mysqli->close();
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>iot time table</title>
  </head>
  <style>
  table{
    margin: auto;
    font-size: large;
    border: 3px solid blakc;
  }
  h1{
    text-align: center;
    color: #006600;
    font-size: xx-large;
    font-family: 'Gill Sans', 'Gill Sans MT',' Calibri', 'Trebuchet MS', 'sans-serif';
  }
  td{
    background-color: #ffffff;
    border: 3px solid black;
  }
th,td{
  font-weight: bolder;
  border: 3px solid black;
  padding: 20px;
  text-align: center;
}
td{
  font-weight: normal;
}
  </style>
  <body>
    <h1>APSSDC/DBMS LAB</h1>
    <section>
      <table>
        <tr>
          <th>Week</th>
          <th>Forenoon</th>
          <th>Afternoon</th>
        </tr>
        <?php
        while ($rows=$result->fetch_assoc()) {
         ?>
        <tr>
          <td><?php echo $rows["Week"]; ?></td>
          <td><?php echo $rows["Forenoon"]; ?></td>
          <td><?php echo $rows["Afternoon"]; ?></td>
        </tr>
        <?php
      } ?>
      </table>
    </section>
  </body>
</html>
