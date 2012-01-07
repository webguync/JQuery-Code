<?php
#get the id
$id=$_GET["category_id"];

#connect to MySQL
$conn = mysql_connect( "localhost","username","pw")
or die( "Error connecting to MySQL" );

#select the specified database
$db = mysql_SELECT_DB ("DBName", $conn )
or die ( "Could not select that particular Database");

#create the query
$sql ="SELECT *
FROM sports
INNER JOIN players ON sports.category_id = players.category_id
WHERE players.category_id = '".$id."'";


//echo $sql;

#execute the query
$db = mysql_query($sql,$conn);
#start the table code
#table striping
$c = 0;
echo "<table><tr><th>Sport</th><th>First Name</th><th>Last Name</th></tr>";
#write the data
while( $row = mysql_fetch_array( $db) )
{
echo ("<tr>");

echo ("<td>");
echo ($row["sport"]);
echo ("</td>");

echo ("<td>");
echo ($row["first_name"]);
echo ("</td>");

echo ("<td>");
echo ($row["last_name"]);
echo ("</td></tr>");
}
echo "</tr></table>";
mysql_close($conn);
?>

</html>
