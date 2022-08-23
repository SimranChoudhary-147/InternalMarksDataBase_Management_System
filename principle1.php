





<?php
  $server="localhost";
  $username="root";
  $password="";
  $db="myproj";
  $con= new mysqli($server,$username,$password,$db);
  if(!$con){
      die("connection to this database filed".mysqli_connect_error());
  }
  else{

        if(isset($_POST['value']))
                {
                    $usn =$_POST['value'];
                    if ($usn[0]=='r'){
                        $usn1=substr($usn,3);
                        echo $usn1;
                        $sql1="DELETE FROM `myproj` WHERE `usn`='$usn1';";
                        
                        
                        if($con->query($sql1) === TRUE)
                        {
                            echo " <script > 
                                alert('$usn is rejected and deleted from database'); 
                                window.location.href = 'principle.php';
                                </script>;";
                        }
                        else{
                            echo "error";
                        }
            
                    }
                    else{
                        $sql1="update `myproj` set `varification`=1 where `usn`= '$usn' ;";
                        
                        
                        if($con->query($sql1) == TRUE)
                        {
                            echo " <script > 
                            alert('$usn is verified'); 
                            window.location.href = 'principle.php';
                            </script>;";
                        }
                        else{
                            echo 'error';
                        }
                    }
                }
            

    }
    $con->close();
?>