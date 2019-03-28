<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <style type="text/css"></style>


<title>Untitled Document</title>
</head>

<body>
<table border="0" style="border-style:double">
<form method="post" action="customer_success.php">	<tr>
    	<td width="105">Name :</td>
        <td width="296"><input type="text" name="name"> </td>
    	<td width="73">Phone Number:</td>
        <td width="169"><input type="text" name="mobile_phone"></td>
    </tr>
    <tr>
    	<td>Email:</td>
        <td><input type="text" name="cus_email"></td>
    	<td>Date:</td>
        <td><input type="date" name="date"></td>
    </tr>
    <tr>
    	<td>Time:</td>
        <td><input type="time" name="time"></td>
        <td>Code :</td>
        <td><input type="number" name="id_property"</td>
    </tr>
    <tr>
    	<td>Reason:</td>
        <td><select name="reason">
					<option label="I want to view this property" value="VIEW">I want to view this property</option>
<option label="I want more information" value="INFO">I want more information</option>
<option label="I have a similar place to rent or sell" value="SIMI">I have a similar place to rent or sell</option>
<option label="I have another enquiry" value="OTHER">I have another enquiry</option>

	            </select>
</td>

	<tr>
        	<td>&nbsp;</td>
        <td><input type="submit" name="submit" value="Submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Reset"></td>
    </tr>
    
</form>
</table>


</body>
</html>