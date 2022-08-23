











<?php
$submission=false;
$error='stat';
$em=null;
$ph=null;
$gn=null;
if(isset($_POST['usn'])){
    // $server="localhost";
    // $username="root";
    // $password="";
    // $db="myproj";
    $server="localhost";
    $username="root";
    $password="";
    $db="myproj";
    $con= mysqli_connect($server,$username,$password,$db);
    if(!$con){
        die("connection to this database filed".mysqli_connect_error());
    }
    $usn =$_POST['usn'];
    $DOB =$_POST['DOB'];
    $vari=1;

    $sql="SELECT * FROM `myproj` WHERE `usn` = '$usn' AND `DOB` = '$DOB' AND `varification`=1;";
    $sql1="SELECT * FROM `myproj` WHERE `usn` = '$usn' AND `DOB` = '$DOB' ;";
    $result = $con->query($sql);
    $result1=$con->query($sql1);
    if ($result->num_rows > 0  ) {
        // output data of each row
        //$row = $result->fetch_assoc() ;
        //   
        $count=1;
        setcookie('count', $count, time()+3600);
        echo  " <script > 
                alert('login succesfull'); 
                window.location.href = 'updatesem.php';
                </script>;";
          $submission=true;
    } 
    else if($result1->num_rows > 0) 
    {
        echo  " <script > 
                alert('principle varification pending'); 
                window.location.href = 'index1.php';
                </script>;";
          
    }
    else
    {
        $error='0';
    }
    // if($con->query($sql)==true){
    //    
    // }
    // else 
    // {
    //     $error=$con->error;
    // }
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
    
    <title>login</title>
</head>
<body>
    <div class='container'>
    <img src="images.jpg" class="bg" >
        <h1>LOGIN</h1>
        
        <p> ENTER CORRECT COMBINATION </p>
        
       <?php
            if($submission ==true){
                echo "<p class='submitmsg'>login successfull</p>";
                
                
                
            }
            else if($error=='0'){
                

                    //echo "<script <a href='teachersignup.php'/>alert('USN not registered')</script>";
                  echo  " <script > 
                    alert('ENTERED ID IS NOT REGISTERED'); 
                    window.location.href = 'loginupdate.php';
                    </script>;";
                
                //echo "<a '>ok</a>";
            }
            
       ?>
        <form action="loginupdate.php" method="post" >
            
            <input type="text" name="usn" id="usn" placeholder="enter your id">
            <input type="password" name="DOB" id="DOB" placeholder="password">
           
            <button class="btn">submit</button>
        

        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>