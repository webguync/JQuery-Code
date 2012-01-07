<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-GB">
<head>
	<title>Inspired Evolution : : AJAX Example</title>
<link rel="stylesheet" type="text/css" href="Form.css" media="screen" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>

<script type="text/javascript">
$(function(){
    $('select[name="category_id"]').change(function(){
        var id = $('select[name="category_id"] option:selected').val();
        
        $.ajax({
            url: 'Query.php?category_id=' + id,
            success: function(response){
                $('#DataDisplay').html(response);
            }
        });
    });
});
</script>

        </head>

<body>

<h1 id="Tutoring">Inspired-Evolution.com : : AJAX Example</h1>

	
<p>Below is an application example which utilizes the following web technologies to display the data. HTML, CSS, PHP/MySQL, JQuery and AJAX.</p>

<?php
#connect to MySQL
$conn = mysql_connect( "localhost","username","pw")
or die( "You did not successfully connect to the DB!" );

#select the specified database
$db = mysql_SELECT_DB ("DBName", $conn )
or die ( "Error connecting to the database test!");
?>
<form name="sports" id="sports">
<legend>Select a Sport</legend>
<select name="category_id">
<option value="">--Select a Sport--</option>
<?php
$sql = "SELECT category_id, sport FROM sports ".
"ORDER BY sport";

$db = mysql_query($sql);

while($row = mysql_fetch_array($db))
{
  echo "<option value=\"".$row['category_id']."\">".$row['sport']."</option>\n  ";
}
?>
</select>

</form>
<br />
<div id="DataDisplay"></div>

</body>
</html>


              
                           

                

     
              

                
				
