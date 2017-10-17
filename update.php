<?php
$con = mysql_connect("127.0.0.1","jacklee1230","");
if (!$con)
  {
  die('Connection failed:' . mysql_error());
  }
  else
  {
  mysql_select_db("Project1", $con);
 
$sql1 = "UPDATE Movies_Introduction SET Directors ='".$_POST[Directors]."'
  WHERE Title='".$_POST[Title]."'";
$sql2 = "UPDATE Movies_Introduction SET Year ='".$_POST[Year]."'
  WHERE Title='".$_POST[Title]."'";
$sql3 = "UPDATE Movies_Introduction SET Country ='".$_POST[Country]."'
  WHERE Title='".$_POST[Title]."'";
  
$sql4 = "UPDATE Movies_Content SET Length ='".$_POST[Length]."'
  WHERE Title='".$_POST[Title]."'";
$sql5 = "UPDATE Movies_Content SET Colour='".$_POST[Colour]."'
  WHERE Title='".$_POST[Title]."'";
$sql6 = "UPDATE Movies_Content SET Genre ='".$_POST[Genre]."'
  WHERE Title='".$_POST[Title]."'";
/*
$sql7 = "UPDATE Movies_Popularity SET City ='".$_POST[City]."'
  WHERE ID_P='".$_POST[ID_P]."'";
$sql8 = "UPDATE Movies_Popularity SET Popularity ='".$_POST[Popularity]."'
  WHERE ID_P='".$_POST[ID_P]."'";
*/

if($_POST[Directors])
{
  $Intro_1=mysql_query($sql1);
}
if($_POST[Year])
{
  $Intro_2=mysql_query($sql2); 
}
if($_POST[Country])
{
  $Intro_3=mysql_query($sql3);
}
if($_POST[Length])
{
  $Cont_1=mysql_query($sql4);
}
if($_POST[Colour])
{
  $Cont_2=mysql_query($sql5);
}
if($_POST[Genre])
{
  $Cont_3=mysql_query($sql6); 
}
/*
if($_POST[City])
{
  $Pop_1=mysql_query($sql7);
}
if($_POST[Popularity])
{
  $Pop_2=mysql_query($sql8); 
}
*/ 
 
 
$result = $Intro_1 || $Intro_2 || $Intro_3 || $Cont_1 || $Cont_2 || $Cont_3 ; 
 
 if ($result)
   {
    echo "<font color='Blue' size='4.5pt'>UPDATE successful!</br></font>";
   } 
   else {
    echo "Error updating record: " . mysql_error();
   }
}

mysql_close($con);

?>