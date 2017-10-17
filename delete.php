<?php
$con = mysql_connect("127.0.0.1","jacklee1230",""); 
if (!$con)
  {
  die('Connection failed:' . mysql_error());
  }
  else
  {
  mysql_select_db("Project1", $con);


// sql to delete a record
$sql1 = "DELETE FROM Movies_Introduction WHERE Title='".$_POST[Title]."'";
$sql2 = "DELETE FROM Movies_Content WHERE Title='".$_POST[Title]."'";

if (mysql_query($sql1, $con) & mysql_query($sql2, $con) ) {
    echo "<font color='Blue' size='4.5pt'>Record deleted successfully!</br></font>";
} else {
    echo "Error deleting record: " . mysql_error();
}


}

mysql_close($con);

?>