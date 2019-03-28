<!DOCTYPE html>
<html>
<head>
  <title>Property Form</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <style type="text/css"></style>
    <h2>Property Form</h2>
</head>
<body>

</body>
</html>
<?php include('admin/connection.php'); ?>
 
<?php
$conn=mysqli_connect("localhost","root","","property");
$id_property = $_GET['id_property'];
$id_property_sql="SELECT * FROM property WHERE id_property='$id_property'";
$id_property_result=mysqli_query($conn,$id_property_sql) or die(mysqli_error());

while($row_id_property=mysqli_fetch_array($id_property_result)){
$name_property=$row_id_property["name_property"];
$price=$row_id_property["price"];
$type_property=$row_id_property["type_property"];
$beds=$row_id_property["beds"];
$baths=$row_id_property["baths"];
$text=$row_id_property["text"];
$land_area=$row_id_property["land_area"];
$groos_floor_area=$row_id_property["groos_floor_area"];
$image=$row_id_property["name_property"];
$filename = "admin/images/$name_property.jpg";



if (!file_exists($filename)) {
$filename="images/default.png"; 
}
if ($image==null) {
$filename="images/$name_property.jpg"; 
}


print<<<HERE
<td align="center"><br><br>
<p align="center"><img src="$filename"  width="929" height="619"></p>
</td>
<td valign="top" class="text_menu">
<table width="277" border="0" cellspacing="0" cellpadding="0" class="text_menu">
  <tr>
    <td align="left" colspan="3">
<br>
    <text class="text_menu">/ / Item Code: <text class="highlight">MO$id_property</text> / /</text>
    <table class="text_menu" width="289" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="95">Item Name :</td>
        <td width="188" class="highlight">$name_property</td>
      </tr>
      <tr>
        <td>Item Price :</td>
        <td>RM <text class="highlight">$price</text>
		</td>
      </tr>
      <tr>
        <td>Land Area :</td>
        <td> <text class="highlight">$land_area</text>
		</td>
      </tr>
      <tr>
        <td>Groos Floor:</td>
        <td><text class="highlight">$groos_floor_area</text>
		</td>
      </tr>
    </table></td>
  </tr>
<br><br>
</td></tr></table>
<br>
<u>Contact Agent About this Listing:</u><br><br>
<hr>
      <form name="form1" method="post" action="property_form_success.php">
<table>
<tr><td>Name </td><td>:<input type="text" name="name"></td></td></tr>
<tr><td>No.Phone </td><td>:<input type="text" name="mobile_phone"></td></td></tr>
<tr><td>Email </td><td>:<input type="text" name="cus_email"></td></td></tr>
<tr><td>Date </td><td>:<input type="date" name="date"></td></td></tr>
<tr><td>Time </td><td>:<input type="time" name="time"></td></td></tr>
<tr><td>Reason </td><td>:<textarea name="reason" width="333"></textarea></td></td></tr>
</table>
<input type="hidden" name="id_property" value="$id_property">
<p align="left"><input type="submit" name="submit" value="submit" /></p>
</form>
 <hr>
 	

</td>
<br>
</table>

HERE;

}
 ?>