







<?php 
    if(isset($_POST['sem'])){
        $sem=$_POST['sem'];
        if($sem==3){
            echo " <script > 
                 
                window.location.href = 'marksthirdsem.php';
                </script>";
        }
        else if($sem==4){
            echo " <script > 
            
            window.location.href = 'marks4sem.php';
            </script>;";
        }
        else if($sem==5){
            echo " <script > 
            
            window.location.href = 'marks5sem.php';
            </script>;";
        }
    }





?>