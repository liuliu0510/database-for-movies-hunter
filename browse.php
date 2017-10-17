<?php
$con = mysql_connect("127.0.0.1","jacklee1230","");
if (!$con)
  {
  die('Connection failed:' . mysql_error());
  }
  else
  {
  mysql_select_db("Project1", $con);
  $result = mysql_query("SELECT * FROM Movies_Introduction NATURAL JOIN  Movies_Content");
  //echo the data in a table
  echo "<table border='1'>
<tr>

<th>Title</th>
<th>Directors</th>
<th>Year</th>
<th>Country</th>
<th>Length</th>
<th>Colour</th>
<th>Genre</th>


</tr>";
  while($row = mysql_fetch_array($result))
  {
 echo "<tr>";
 echo "<td>" . $row['Title'] . "</td>";
 echo "<td>" . $row['Directors'] . "</td>";
 echo "<td>" . $row['Year'] . "</td>";
 echo "<td>" . $row['Country'] . "</td>";
 echo "<td>" . $row['Length'] . "</td>";
 echo "<td>" . $row['Colour'] . "</td>";
 echo "<td>" . $row['Genre'] . "</td>";
 
 echo "</tr>";
  }
  echo "</table>";
}
mysql_close($con);
?>