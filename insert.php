<?php
$con = mysql_connect("127.0.0.1","jacklee1230","");
if (!$con)
  {
  die('Connection failed:' . mysql_error());
  }
  else
  {
  mysql_select_db("Project1", $con);

$result1 = mysql_query ("INSERT INTO Movies_Introduction(Title, Directors, Year, Country)
VALUES ('".$_POST[Title]."', '".$_POST[Directors]."', '".$_POST[Year]."', '".$_POST[Country]."')
");

$result2 = mysql_query ("INSERT INTO Movies_Content(Title, Length, Colour, Genre)
VALUES ('".$_POST[Title]."', '".$_POST[Length]."', '".$_POST[Colour]."', '".$_POST[Genre]."')
");

//$result3 = mysql_query ("INSERT INTO Movies_Popularity(Title, City, Popularity)
//VALUES ('".$_POST[Title]."', '".$_POST[City]."','".$_POST[Popularity]."')
//");

 
if($result1 || $result2 )
{
echo "<font color='Blue' size='4.5pt'>INSERT Successful!</br></font>";
}
else {
echo "< b>INSERT Failed :< /b> ", mysql_error();
}
}

mysql_close($con);
?>