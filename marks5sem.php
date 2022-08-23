





<?php
$submission=false;
$error='stat';
$notvalid=0;
if(isset($_POST['usn'])){
    $_POST['usn']=strtoupper($_POST['usn']);
    $str=substr($_POST['usn'],0,7);
    //echo $str;
    $pattern1="1RN19CS";
    $pattern2="1RN19CS";
    $pattern3="1RN20CS";
    $pattern4="1RN20IS";
    $pattern5="1RN18IS";
    $pattern6="1RN18IS";
    $pattern7="1RN20CS";
    if($pattern1==$str or $pattern2==$str or $pattern3==$str or $pattern4==$str or $pattern5==$str or $pattern6==$str or $pattern7==$str)
    {
    
        $server="localhost";
    $username="root";
    $password="";
    $db="myproj";
        $con= new mysqli($server,$username,$password,$db);
        if(!$con){
            die("connection to this database filed".mysqli_connect_error());
        }

        
            $usn =$_POST['usn'];
        
            $outoff =$_POST['outoff'];
            $s1 =$_POST['s18CS32'];
            $s2 =$_POST['s18CS33'];
            $s3 =$_POST['s18CS34'];
            $s4 =$_POST['s18CS35'];
            $s5 =$_POST['s18CS36'];
            $s6 =$_POST['s18CSL37'];
            $s7 =$_POST['s18MAT31'];
            $s8 =$_POST['s18CPC39'];
            $s9 =$_POST['s18MATDIP31'];
        



            


            

            
            $sql="INSERT INTO `marksfifthsem` VALUES ('$usn', '$outoff', '$s1', '$s2', '$s3', '$s4', '$s5', '$s6', '$s7', '$s8', '$s9');";


        // INSERT INTO `marksthirdsem` (`usn`, `outoff`, `s18CS32`, `s18CS33`, `s18CS34`, `s18CS35`, `s18CS36`, `s18CSL37`, `s18MAT31`, `s18CPC39`, `s18MATDIP31`) VALUES ('1RN19CS181', '100', '0', '0', '0', '0', '0', '0', '0', '0', '0');

        

            
            
            if($con->query($sql) === TRUE)
            {
                $submission=true;
                
                //echo "submitted succesfully";
            }
            else 
            {
            
                $error="lol";
                
            }
        
        
        $con->close();
        }
    else{
        $notvalid=1;
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="style11.css">
    <title>show marks</title>
    <style>
        .cap{
        text-transform: uppercase;}
    </style>
</head>
<body>
        <div class='topnav'>
                <a  href='index1.php'>Home</a>
                <a href='index1.php#news'>News</a>
                <a href='index1.php#fotter'>Contact</a>
                <a href='#fotter'>About</a>
                <button class='active' onclick=" document.cookie = 'count=0'; window.location.href='index1.php';"
                                style ='padding: 14px 16px; background-color: red; position: absolute ; right: 0; cursor: pointer;'>LOGOUT</button>
               
        
        </div>
    <div class='container'>
        <h1>WELCOME</h1>
        <p>enter fifth sem student details</p>
        <?php
            if($submission ==true){
                echo "<p class='submitmsg'>$usn form submitted</p>";
            }
            if($error!='stat'){
                echo " <script > 
                alert('$usn MARKS IS ALREADY SUBMITTED'); 
                window.location.href = 'marks5sem.php';
                </script>;";
            }
            if($notvalid==1){
                echo " <script > 
                alert('USN IS NOT IN VALID FORMATE'); 
                window.location.href = 'marks5sem.php';
                </script>;";
            }
            
       ?>
    <?php
    
    if($_COOKIE['count']==1){
      echo " <form action='marks5sem.php' method='POST' >
                <input type='text' class='cap' maxlength='10' minlenght='10' required size='10' name='usn' id='usn' placeholder='enter student usn'>
                <input type='number' name='outoff' id='outoff' placeholder='enter max marks'>
                <input type='number' name='s18CS32' id='s18CS32' placeholder='18CS51'>
                <input type='number' name='s18CS33' id='s18CS33' placeholder='18CS52'>
                <input type='number' name='s18CS34' id='s18CS34' placeholder='18CS53'>
                <input type='number' name='s18CS35' id='s18CS35' placeholder='18CS54'>
                <input type='number' name='s18CS36' id='s18CS36' placeholder='18CS55'>
                <input type='number' name='s18CSL37' id='s18CSL37' placeholder='18CS56'>
                <input type='number' name='s18MAT31' id='s18MAT31' placeholder='18CSL57'>
                <input type='number' name='s18CPC39' id='s18CPC39' placeholder='18CSL58'>
                <input type='number' name='s18MATDIP31' id='s18MATDIP31' placeholder='18CIV59'>
                <button class='btn' >submit</button>
        </form>";
    }
    else{
        echo "<p style='text-align: center;color:red; font-size: 60px;'>permission denied</p>";
        echo "<p style='text-align: center;color:red; font-size: 70px;'>login to continue</p>";
    }
      
            ?>			
        

    </div>
    <script src="index.js"></script>
</body>
</html>