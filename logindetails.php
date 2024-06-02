<?php
$servername='localhost:3306';
$username='root';
$password='';
$database='lms';
$mysqli =new mysqli('localhost:3306','root','','lms');
 if ($mysqli->connect_error) {
   die('Connect Error (' .  $mysqli->connect_errno . ')
    '.  $mysqli->connect_error);
 }

$sql="select *from  admin";
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
    border: 2px solid black;
  }
  h1{

    text-align: center;
    color: #003700;
    font-size: xx-large;
    font-family: 'Gill Sans', 'Gill Sans MT',' Calibri', 'Trebuchet MS', 'sans-serif';
  }
  td{
    background-color: #ffffff;
    border: 2px solid black;
  }
th,td{
  font-weight: bolder;
  border: 2px solid black;
  padding: 20px;
  text-align: center;

}
td{
  font-weight: normal;
}
  </style>
  <body>
    <h1>LOGIN DETAILS</h1>
    <section>
      <table>
        <tr>
          <th>id</th>
          <th>username</th>
          <th>email</th>
          <th>password</th>
        </tr>
        <?php
        while ($rows=$result->fetch_assoc()) {
         ?>
        <tr>
          <td><?php echo $rows["id"]; ?></td>
          <td><?php echo $rows["username"]; ?></td>
          <td><?php echo $rows["email"]; ?></td>
          <td><?php echo $rows["password"]; ?></td>
        </tr>
        <?php
      } ?>
      </table>
    </section>
  </body>
</html>
