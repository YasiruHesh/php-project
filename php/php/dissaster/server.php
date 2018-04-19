<?php
session_start();

$errors= array();
$userid="";
$pass1="";

$db=mysqli_connect('localhost','root','','dms_db');


//regiter button
if (isset($_POST['register1']))
{
    $username= ($_POST['username']);
    $password=  ($_POST['password']);
    $type= ($_POST['type']);
    

//fields empty
    if(empty($username))
    {
        array_push($errors,"username is required");
    }
    if(empty($password))
    {
        array_push($errors,"password is required");
    }
    if(empty($type))
    {
        array_push($errors,"type Number is required");
    }
 
    
//no errors 
    if(count($errors) == 0)
    {
        $password=md5($pass1);
        $sql="INSERT INTO user_table (username, password, type,) VALUES ('$username','$password','$type',)";
        mysqli_query($db, $sql);
        
        $_SESSION['success']= "Logged in";
        header('location:in.php');
        
    }

    

}


//log user in from login page
if (isset($_POST['login']))
{
	$userid= ($_POST['userid']);
    $pass1= ($_POST['pass1']);


if(empty($userid))
{
	array_push($errors, "UserID is required");
}

if(empty($pass1))
{
	array_push($errors, "Password is required");
}
if (count($errors)==0){
	$password1= md5($pass1);//encript password before comparing with that from data base
	$query="SELECT* FROM users WHERE userid='$userid' AND password='$pass1'";
	$result = mysqli_query($db, $query);
	
	if(mysqli_num_rows($result)==1){
		
		            // log user in
		            $_SESSION['userID']=$userid;
					$_SESSION['success']= "Logged in";
					header('location:afterloguser.php');// redirect to home page
					
		}else{
			array_push($errors,"wrong username/password");
		
}
}
	}
//logout
if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['fullname']);
	header('location:index.html');
}

?>