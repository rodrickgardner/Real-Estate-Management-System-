<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
  <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <style type="text/css"></style>
<title>Admin Login</title>
<!--sa poip up-->
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
   <script src="lib/jquery.js" type="text/javascript"></script>
  <script src="src/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
    jQuery(document).ready(function($) {
      $('a[rel*=facebox]').facebox({
        loadingImage : 'src/loading.gif',
        closeImage   : 'src/closelabel.png'
      })
    })
  </script>

  <!--sa validate from-->
<script type="text/javascript">
function validateForm()
{

var y=document.forms["login"]["user"].value;
var a=document.forms["login"]["password"].value;
if ((y==null || y==""))
  {
  alert("you must enter your username");
  return true;
  }
  if ((a==null || a==""))
  {
  alert("you must enter your password");
  return false;
  }
 

}
</script>

</head>

<body>
<div style="width:300px; margin:0 auto; position:relative; border:3px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:5px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px;">
  <form id="form1" name="login" method="post" action="login_success.php">
    <!--<form id="form1" name="login" method="post" action="login_success.php">-->
  
  <table width="286" align="center">
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td width="92"><div align="right">UserName</div></td>
    <td width="178"><input type="text" name="myusername" /></td>
  </tr>
  <tr>
    <td><div align="right">Password:</div></td>
    <td>
      <input type="password" name="mypassword" />
    </td>
  </tr>
  <tr>
    <td><div align="right"></div></td>
    <td><a rel="facebox" href="#" align="center" >Forgot Password?</a></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" id="submit" value="login" align="center"/></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
    
  </form>
    <center>
  <a href="/real2/index.php">HOME</a>
    </center>

</div>
</body>
</html>
