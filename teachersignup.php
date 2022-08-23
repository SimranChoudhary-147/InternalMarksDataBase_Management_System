




<?php
$submission=false;
$error='stat';
if(isset($_POST['usn'])){
    $server="localhost";
    $username="root";
    $password="";
    $db="myproj";
    $con= mysqli_connect($server,$username,$password,$db);
    if(!$con){
        die("connection to this database filed".mysqli_connect_error());
    }
    $name =$_POST['name'];
    $usn =$_POST['usn'];
    $DOB=$_POST['DOB'];
    $gender =$_POST['gender'];
    $phone =$_POST['phone'];
    $email =$_POST['email'];
    

    $sql="INSERT INTO  `myproj` ( `name`, `usn`, `DOB`, `gender`, `phone`, `email`, `date`) VALUES ('$name', '$usn', '$DOB', '$gender', '$phone', '$email', current_timestamp());";
    

    if($con->query($sql)==true){
       $submission=true;
    }
    else 
    {
        $error=$con->error;
    }
    $con->close();
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>signup</title>
</head>
<body>
    <div class='container'>
        <h1>WELCOME</h1>
        <p>enter your details</p>
       <?php
            if($submission ==true){
                echo "<p class='submitmsg'>FORM SUBMITTED</p>";
                echo " <script > 
                alert('wait for principle varification'); 
                window.location.href = 'index1.php';
                </script>;";
            }
            if($error!='stat'){
                echo "<p class='submitmsgerror'>id is already registered or email in use</p>";
            }   
       ?>
        <form action="teachersignup.php" method="post" >
            <input type="text" name="name" id="name" placeholder="enter your name">
            <input type="text" name="usn" id="usn" placeholder="enter your id">
             
            <input type="password" name="DOB" id="DOB" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required placeholder="enter password">
            
            <input type="text" name="gender" id="gender" placeholder="enter your gender">
            <input type="phone" maxlength="10" name="phone" id="phone" placeholder="enter your phone">
            <input type="email" name="email" id="email" placeholder="enter your email">
            
            <button class="btn">submit</button>
        

        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>