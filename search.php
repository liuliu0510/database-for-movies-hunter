<?php
$con = mysql_connect("127.0.0.1","jacklee1230","");
if (!$con)
  {
  die('Connection failed:' . mysql_error());
  }
  else
  {
  mysql_select_db("Project1", $con);
  
$name = $_POST['name'];

$result = mysql_query ("SELECT * FROM Movies_Introduction NATURAL JOIN Movies_Content
WHERE Title LIKE '%".$name."%'
") or die (mysql_error());





if ($row = mysql_fetch_array($result)) {
do {
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

echo "<tr>";
echo "<td>" . $row['Title'] . "</td>";
echo "<td>" . $row['Directors'] . "</td>";
echo "<td>" . $row['Year'] . "</td>";
echo "<td>" . $row['Country'] . "</td>";
echo "<td>" . $row['Length'] . "</td>";
echo "<td>" . $row['Colour'] . "</td>";
echo "<td>" . $row['Genre'] . "</td>";
}
while($row = mysql_fetch_array($result));
} 
else 
{echo "<font color='red' size='4.5pt'>Sorry. We don't have any information about the movie you have typed in.</br></font>";
 echo "</br></b>";
 echo "<font size='4.5pt'>You can edit its introduction using 'Insert' below!</br></font> ";   
}
 
mysql_close($con);
}
?>