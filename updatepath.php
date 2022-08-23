












<?php 
    if(isset($_POST['sem'])){
        $sem=$_POST['sem'];
        if($sem==3){
            echo " <script > 
                 
                window.location.href = 'updatemarksthirdsem.php';
                </script>";
        }
        else if($sem==4){
            echo " <script > 
            
            window.location.href = 'updatemarks4sem.php';
            </script>;";
        }
        else if($sem==5){
            echo " <script > 
            
            window.location.href = 'updatemarks5sem.php';
            </script>;";
        }
    }





?>