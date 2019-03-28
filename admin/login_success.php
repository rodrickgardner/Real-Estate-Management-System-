               <?php 
               include "admin_login.php";
               	session_start(); 
				ob_start();
				$host="localhost";         //Host Name
				$username="root";        //mysqli username
				$password="";              //mysqli password
				$db_name="property";       //Database name
				$tbl_name="admin";     //Table name
				
				//Connect to server and select database
				$conn=mysqli_connect("$host", "$username", "$password","$db_name")or die("cannot connect");
				mysqli_select_db($conn,"$db_name")or die("cannot select DB");
				
				//Define $myusername and $mypassword
				$myusername=($_POST["myusername"]);
				$mypassword=($_POST["mypassword"]);
				
				//To protect mysqli injection (more detail about mysqli injection)
				$myusername  =  stripslashes($myusername);
				$mypassword  =  stripslashes($mypassword);
				$myusername  =  mysqli_real_escape_string($conn,$myusername);
				$mypassword  =  mysqli_real_escape_string($conn,$mypassword);



				$sql="SELECT * FROM `admin` WHERE myusername= '$myusername'  and  mypassword= '$mypassword'";
				//$sql="SELECT myusername, mypassword FROM `admin` WHERE myusername= '$myusername'  and  mypassword= '$mypassword'";
		if(isset($_POST["submit"]))
		{
				$result=mysqli_query($conn,$sql);
				//mysqli_num_row is counting table row
				$count=mysqli_num_rows($result);
				//  If  result matched $myusername  and $mypassword, table row must be 1 row
				
				if($count==1){
				//  Register  $myusername, $mypassword  and redirect to file "adminMenu.php"
			if(!empty($_SESSION["myusername"]=$myusername)) {
			 if(!empty($_SESSION["mypassword"]=$mypassword)){
session_start();
//redirect("admin_home.php");
header("location: admin_home.php");
							}
					}


else {
echo "Wrong Username or Password";
		
}
}
}
ob_end_flush();

?>






