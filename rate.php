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

$result = mysql_query ("SELECT ID_P,Title,City,Popularity FROM Movies_Popularity
WHERE Title LIKE '%".$name."%'
") or die (mysql_error());

if ($row = mysql_fetch_array($result)) {
do {
echo "<table border='1'>
<tr>
<th>ID</th>
<th>Title</th>
<th>City</th>
<th>Popularity</th>


</tr>";

echo "<tr>";
echo "<td>" . $row['ID_P'] . "</td>";
echo "<td>" . $row['Title'] . "</td>";
echo "<td>" . $row['City'] . "</td>";
echo "<td>" . $row['Popularity'] . "</td>";

}
while($row = mysql_fetch_array($result));
} else 
{
  echo "<font color='Red' size='4.5pt'> Sorry.We don't have any information about the movie you have typed in.</br></font>";
  echo "</br></b>";
 echo "<font size='4.5pt'>You can add its information using 'Insert'!</br></font> "; 
}



mysql_close($con);
}
?>