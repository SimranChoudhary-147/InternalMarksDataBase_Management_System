<?php


if(isset($_POST['usn']))
{
    $server="localhost";
    $username="root";
    $password="";
    $db="myproj";
    $con= mysqli_connect($server,$username,$password,$db);
    if(!$con){
        die("connection to this database filed".mysqli_connect_error());
    }
    
    $usn =$_POST['usn'];
    $value=$_POST['sem'];
    if($value==3){
        $sql="SELECT * FROM `marksthirdsem` WHERE `usn` = '$usn';";
        $sql1="SELECT AVG(s18CS32),AVG(s18CS33),AVG(s18CS34),AVG(s18CS35),AVG(s18CS36),AVG(s18CSL37),AVG(s18MAT31),AVG(s18CPC39),AVG(s18MATDIP31) FROM marksthirdsem;";
        $result1=mysqli_query($con,$sql1);
        $num1=mysqli_num_rows($result1);
        $result = mysqli_query($con,$sql);
        
        $num=mysqli_num_rows($result);
        if( $num!=1){
            echo  " <script > 
            alert('YOUR RESULT IS NOT ADDED YET'); 
            window.location.href = 'studentlogin.php';
            </script>;";
            }
            else
            {
                
                $row=mysqli_fetch_assoc($result);
                $outoff=$row['outoff'];
                $s1=$row['s18CS32'];
                $s2=$row['s18CS33'];
                $s3=$row['s18CS34'];
                $s4=$row['s18CS35'];
                $s5=$row['s18CS36'];
                $s6=$row['s18CSL37'];
                $s7=$row['s18MAT31'];
                $s8=$row['s18CPC39'];
                $s9=$row['s18MATDIP31'];

                $rowa=mysqli_fetch_assoc($result1);
                
                $s1a=$rowa['AVG(s18CS32)'];
                $s2a=$rowa['AVG(s18CS33)'];
                $s3a=$rowa['AVG(s18CS34)'];
                $s4a=$rowa['AVG(s18CS35)'];
                $s5a=$rowa['AVG(s18CS36)'];
                $s6a=$rowa['AVG(s18CSL37)'];
                $s7a=$rowa['AVG(s18MAT31)'];
                $s8a=$rowa['AVG(s18CPC39)'];
                $s9a=$rowa['AVG(s18MATDIP31)'];

                require("pdfconverter/fpdf.php");
            // class PDF extends FPDF{
            //     function Header(){
            //         $this->image('images.jpg',100,0);
            //     }
            // }

            $pdf=new FPDF();
            $pdf->AddPage();
            $pdf->Image('header2.jpg',0,0,125,25,'JPG',"https://www.rnsit.ac.in/");
            $pdf->Cell(0,30,"",100,100,'C');
            $pdf->SetFont('Arial','B',12);
            $pdf->Cell(0,10,"                                                           USN      ".strtoupper($usn),1,1);
            //$pdf->Cell(0,10,"CONTACT TEACHER IF EXCEPTION FOUND",1,1);

            $width_cell=array(63.3,63.3,63.3);
            $pdf->SetFillColor(193,229,252);
            $pdf->Cell($width_cell[0],10,'SUBJECT CODE',1,0,'C',true);
            $pdf->Cell($width_cell[1],10,'MARKS',1,0,'C',true);
            $pdf->Cell($width_cell[2],10,'AVERAGE MARKS',1,1,'C',true);

            $pdf->SetFont('Arial','',10);
            
            $pdf->Cell($width_cell[0],10,'18CS32',1,0,'C',false);
            $pdf->Cell($width_cell[1],10,$s1,1,0,'C',false);
            $pdf->Cell($width_cell[2],10,$s1a,1,1,'C',false);


            $pdf->Cell($width_cell[0],10,'18CS33',1,0,'C',false);
            $pdf->Cell($width_cell[1],10,$s2,1,0,'C',false);
            $pdf->Cell($width_cell[2],10,$s2a,1,1,'C',false);

            $pdf->Cell($width_cell[0],10,'18CS34',1,0,'C',false);
            $pdf->Cell($width_cell[1],10,$s3,1,0,'C',false);
            $pdf->Cell($width_cell[2],10,$s3a,1,1,'C',false);

            $pdf->Cell($width_cell[0],10,'18CS35',1,0,'C',false);
            $pdf->Cell($width_cell[1],10,$s4,1,0,'C',false);
            $pdf->Cell($width_cell[2],10,$s4a,1,1,'C',false);

            $pdf->Cell($width_cell[0],10,'18CS36',1,0,'C',false);
            $pdf->Cell($width_cell[1],10,$s5,1,0,'C',false);
            $pdf->Cell($width_cell[2],10,$s5a,1,1,'C',false);

            $pdf->Cell($width_cell[0],10,'18CSL37',1,0,'C',false);
            $pdf->Cell($width_cell[1],10,$s6,1,0,'C',false);
            $pdf->Cell($width_cell[2],10,$s6a,1,1,'C',false);

            $pdf->Cell($width_cell[0],10,'18MAT31',1,0,'C',false);
            $pdf->Cell($width_cell[1],10,$s7,1,0,'C',false);
            $pdf->Cell($width_cell[2],10,$s7a,1,1,'C',false);

            $pdf->Cell($width_cell[0],10,'18CPC39',1,0,'C',false);
            $pdf->Cell($width_cell[1],10,$s8,1,0,'C',false);
            $pdf->Cell($width_cell[2],10,$s8a,1,1,'C',false);
            

            $pdf->Cell($width_cell[0],10,'18MATDIP31',1,0,'C',false);
            $pdf->Cell($width_cell[1],10,$s9,1,0,'C',false);
            $pdf->Cell($width_cell[2],10,$s9a,1,1,'C',false);
             // First header column 
             // Second header column
             // Third header column 
            
             // First header column 
             // Second header column
             // Third header column 
            
            

            $pdf->Cell(0,10,"SHOWN RESULT IS AS PROVIDED BY YOUR RESPECTIVE TEACHER",1,1);
            $pdf->Cell(0,10,"CONTACT TEACHER IF EXCEPTION FOUND",1,1);

            

            $pdf->output();
            }
        
        $con->close();
    }
    else if($value==4)
    {
        $sql="SELECT * FROM `marksforthsem` WHERE `usn` = '$usn'  ;";
        $sql1="SELECT AVG(18CS42),AVG(18CS43),AVG(18CS45),AVG(18CS46),AVG(18CSL47),AVG(18CSL48),AVG(18MAT41),AVG(18MATDIP41) FROM marksforthsem;";
        $result1=mysqli_query($con,$sql1);
        $num1=mysqli_num_rows($result1);
        $result = mysqli_query($con,$sql);
        
        $num=mysqli_num_rows($result);
        if( $num!=1){
            echo  " <script > 
            alert('YOUR RESULT IS NOT ADDED YET'); 
            window.location.href = 'studentlogin.php';
            </script>;";
            }
            else
            {
                
                $row=mysqli_fetch_assoc($result);
                $outoff=$row['outoff'];
                $s1=$row['18CS42'];
                $s2=$row['18CS43'];
                $s3=$row['18CS45'];
                $s4=$row['18CS46'];
                $s5=$row['18CSL47'];
                $s6=$row['18CSL48'];
                $s7=$row['18MAT41'];
                
                $s8=$row['18MATDIP41'];

                $rowa=mysqli_fetch_assoc($result1);
                
                $s1a=$rowa['AVG(18CS42)'];
                $s2a=$rowa['AVG(18CS43)'];
                $s3a=$rowa['AVG(18CS45)'];
                $s4a=$rowa['AVG(18CS46)'];
                $s5a=$rowa['AVG(18CSL47)'];
                $s6a=$rowa['AVG(18CSL48)'];
                $s7a=$rowa['AVG(18MAT41)'];
               
                $s8a=$rowa['AVG(18MATDIP41)'];

                require("pdfconverter/fpdf.php");
            // class PDF extends FPDF{
            //     function Header(){
            //         $this->image('images.jpg',100,0);
            //     }
            // }

            $pdf=new FPDF();
            $pdf->AddPage();
            $pdf->Image('header2.jpg',0,0,125,25,'JPG',"https://www.rnsit.ac.in/");
            $pdf->Cell(0,30,"",100,100,'C');
            $pdf->SetFont('Arial','B',12);
            $pdf->Cell(0,10,"                                                           USN      ".strtoupper($usn),1,1);
            //$pdf->Cell(0,10,"CONTACT TEACHER IF EXCEPTION FOUND",1,1);

            $width_cell=array(63.3,63.3,63.3);
            $pdf->SetFillColor(193,229,252);
            $pdf->Cell($width_cell[0],10,'SUBJECT CODE',1,0,'C',true);
            $pdf->Cell($width_cell[1],10,'MARKS',1,0,'C',true);
            $pdf->Cell($width_cell[2],10,'AVERAGE MARKS',1,1,'C',true);

            $pdf->SetFont('Arial','',10);
            
            $pdf->Cell($width_cell[0],10,'18CS42',1,0,'C',false);
            $pdf->Cell($width_cell[1],10,$s1,1,0,'C',false);
            $pdf->Cell($width_cell[2],10,$s1a,1,1,'C',false);


            $pdf->Cell($width_cell[0],10,'18CS43',1,0,'C',false);
            $pdf->Cell($width_cell[1],10,$s2,1,0,'C',false);
            $pdf->Cell($width_cell[2],10,$s2a,1,1,'C',false);

            $pdf->Cell($width_cell[0],10,'18CS45',1,0,'C',false);
            $pdf->Cell($width_cell[1],10,$s3,1,0,'C',false);
            $pdf->Cell($width_cell[2],10,$s3a,1,1,'C',false);

            $pdf->Cell($width_cell[0],10,'18CS46',1,0,'C',false);
            $pdf->Cell($width_cell[1],10,$s4,1,0,'C',false);
            $pdf->Cell($width_cell[2],10,$s4a,1,1,'C',false);

            $pdf->Cell($width_cell[0],10,'18CSL47',1,0,'C',false);
            $pdf->Cell($width_cell[1],10,$s5,1,0,'C',false);
            $pdf->Cell($width_cell[2],10,$s5a,1,1,'C',false);

            $pdf->Cell($width_cell[0],10,'18CSL48',1,0,'C',false);
            $pdf->Cell($width_cell[1],10,$s6,1,0,'C',false);
            $pdf->Cell($width_cell[2],10,$s6a,1,1,'C',false);

            $pdf->Cell($width_cell[0],10,'18MAT41',1,0,'C',false);
            $pdf->Cell($width_cell[1],10,$s7,1,0,'C',false);
            $pdf->Cell($width_cell[2],10,$s7a,1,1,'C',false);

            

            $pdf->Cell($width_cell[0],10,'18MATDIP41',1,0,'C',false);
            $pdf->Cell($width_cell[1],10,$s8,1,0,'C',false);
            $pdf->Cell($width_cell[2],10,$s8a,1,1,'C',false);
             // First header column 
             // Second header column
             // Third header column 
            
             // First header column 
             // Second header column
             // Third header column 
            
            

            $pdf->Cell(0,10,"SHOWN RESULT IS AS PROVIDED BY YOUR RESPECTIVE TEACHER",1,1);
            $pdf->Cell(0,10,"CONTACT TEACHER IF EXCEPTION FOUND",1,1);

            

            $pdf->output();
            }
        
        $con->close();
    }
    else if($value==5) {
        $sql="SELECT * FROM `marksfifthsem` WHERE `usn` = '$usn'  ;";
        $sql1="SELECT AVG(18CS51),AVG(18CS52),AVG(18CS53),AVG(18CS54),AVG(18CS55),AVG(18CS56),AVG(18CSL57),AVG(18CSL58),AVG(18CIV59) FROM marksfifthsem;";
        $result1=mysqli_query($con,$sql1);
        $num1=mysqli_num_rows($result1);
        $result = mysqli_query($con,$sql);
        
        $num=mysqli_num_rows($result);
        if( $num!=1){
            echo  " <script > 
            alert('YOUR RESULT IS NOT ADDED YET'); 
            window.location.href = 'studentlogin.php';
            </script>;";
            }
            else
            {
                
                $row=mysqli_fetch_assoc($result);
                $outoff=$row['outoff'];
                $s1=$row['18CS51'];
                $s2=$row['18CS52'];
                $s3=$row['18CS53'];
                $s4=$row['18CS54'];
                $s5=$row['18CS55'];
                $s6=$row['18CS56'];
                $s7=$row['18CSL57'];
                $s8=$row['18CSL58'];
                $s9=$row['18CIV59'];

                $rowa=mysqli_fetch_assoc($result1);
                
                $s1a=$rowa['AVG(18CS51)'];
                $s2a=$rowa['AVG(18CS52)'];
                $s3a=$rowa['AVG(18CS53)'];
                $s4a=$rowa['AVG(18CS54)'];
                $s5a=$rowa['AVG(18CS55)'];
                $s6a=$rowa['AVG(18CS56)'];
                $s7a=$rowa['AVG(18CSL57)'];
                $s8a=$rowa['AVG(18CSL58)'];
               
                $s9a=$rowa['AVG(18CIV59)'];

                require("pdfconverter/fpdf.php");
            // class PDF extends FPDF{
            //     function Header(){
            //         $this->image('images.jpg',100,0);
            //     }
            // }

            $pdf=new FPDF();
            $pdf->AddPage();
            $pdf->Image('header2.jpg',0,0,125,25,'JPG',"https://www.rnsit.ac.in/");
            $pdf->Cell(0,30,"",100,100,'C');
            $pdf->SetFont('Arial','B',12);
            $pdf->Cell(0,10,"                                                           USN      ".strtoupper($usn),1,1);
            //$pdf->Cell(0,10,"CONTACT TEACHER IF EXCEPTION FOUND",1,1);

            $width_cell=array(63.3,63.3,63.3);
            $pdf->SetFillColor(193,229,252);
            $pdf->Cell($width_cell[0],10,'SUBJECT CODE',1,0,'C',true);
            $pdf->Cell($width_cell[1],10,'MARKS',1,0,'C',true);
            $pdf->Cell($width_cell[2],10,'AVERAGE MARKS',1,1,'C',true);

            $pdf->SetFont('Arial','',10);
            
            $pdf->Cell($width_cell[0],10,'18CS51',1,0,'C',false);
            $pdf->Cell($width_cell[1],10,$s1,1,0,'C',false);
            $pdf->Cell($width_cell[2],10,$s1a,1,1,'C',false);


            $pdf->Cell($width_cell[0],10,'18CS52',1,0,'C',false);
            $pdf->Cell($width_cell[1],10,$s2,1,0,'C',false);
            $pdf->Cell($width_cell[2],10,$s2a,1,1,'C',false);

            $pdf->Cell($width_cell[0],10,'18CS53',1,0,'C',false);
            $pdf->Cell($width_cell[1],10,$s3,1,0,'C',false);
            $pdf->Cell($width_cell[2],10,$s3a,1,1,'C',false);

            $pdf->Cell($width_cell[0],10,'18CS54',1,0,'C',false);
            $pdf->Cell($width_cell[1],10,$s4,1,0,'C',false);
            $pdf->Cell($width_cell[2],10,$s4a,1,1,'C',false);

            $pdf->Cell($width_cell[0],10,'18CS55',1,0,'C',false);
            $pdf->Cell($width_cell[1],10,$s5,1,0,'C',false);
            $pdf->Cell($width_cell[2],10,$s5a,1,1,'C',false);

            $pdf->Cell($width_cell[0],10,'18CS56',1,0,'C',false);
            $pdf->Cell($width_cell[1],10,$s6,1,0,'C',false);
            $pdf->Cell($width_cell[2],10,$s6a,1,1,'C',false);

            $pdf->Cell($width_cell[0],10,'18CSL57',1,0,'C',false);
            $pdf->Cell($width_cell[1],10,$s7,1,0,'C',false);
            $pdf->Cell($width_cell[2],10,$s7a,1,1,'C',false);

            

            $pdf->Cell($width_cell[0],10,'18CSL58',1,0,'C',false);
            $pdf->Cell($width_cell[1],10,$s8,1,0,'C',false);
            $pdf->Cell($width_cell[2],10,$s8a,1,1,'C',false);

            $pdf->Cell($width_cell[0],10,'18CIV59',1,0,'C',false);
            $pdf->Cell($width_cell[1],10,$s9,1,0,'C',false);
            $pdf->Cell($width_cell[2],10,$s9a,1,1,'C',false);
             
            

            $pdf->Cell(0,10,"SHOWN RESULT IS AS PROVIDED BY YOUR RESPECTIVE TEACHER",1,1);
            $pdf->Cell(0,10,"CONTACT TEACHER IF EXCEPTION FOUND",1,1);

            

            $pdf->output();
            }
        
        $con->close();
    }

    
        
    // $sql="SELECT * FROM `studentmarks` WHERE `usn` = '$usn'  ;";
    //    $result = mysqli_query($con,$sql);
    //     $num=mysqli_num_rows($result);
    //    if( $num!=1){
    //     echo  " <script > 
    //     alert('YOUR RESULT IS NOT ADDED YET'); 
    //     window.location.href = 'studentlogin.php';
    //     </script>;";
    //     }
    //     else
    //     {
    //         $row=mysqli_fetch_assoc($result);
    //         $sci=$row['sci'];
    //         $phy=$row['phy'];
    //         $math=$row['math'];
    //         $total=$row['total'];
    //         $outof=$row['outof'];
        
    //         require("pdfconverter/fpdf.php");
    //         // class PDF extends FPDF{
    //         //     function Header(){
    //         //         $this->image('images.jpg',100,0);
    //         //     }
    //         // }

    //         $pdf=new FPDF();
    //         $pdf->AddPage();
    //         $pdf->Image('header2.jpg',0,0,125,25);
    //         $pdf->Cell(0,50,"",100,100,'C');
    //         $pdf->SetFont("Arial","B","16");
    //         //width height content border newlineentry 
    //         $pdf->Cell(0,10,"RESULT",1,1,'C');
    //         $pdf->Cell(40,10,"USN",1,0);
    //         $pdf->Cell(20,10,"sci",1,0);
    //         $pdf->Cell(20,10,"math",1,0);
    //         $pdf->Cell(20,10,"phy",1,0);
    //         $pdf->Cell(20,10,"total",1,0);
    //         $pdf->Cell(0,10,"outof",1,1);

    //         $pdf->Cell(40,10,$usn,1,0);
    //         $pdf->Cell(20,10,$sci,1,0);
    //         $pdf->Cell(20,10,$math,1,0);
    //         $pdf->Cell(20,10,$phy,1,0);
    //         $pdf->Cell(20,10,$total,1,0);
    //         $pdf->Cell(0,10,$outof,1,1);

    //         $pdf->Cell(0,10,"",1,1);
    //         $pdf->Cell(0,10,"",1,1);
    //         $pdf->Cell(0,10,"",1,1);

    //         $pdf->Cell(0,10,"SHOWN RESULT IS AS PROVIDED BY YOUR RESPECTIVE TEACHER",1,1);
    //         $pdf->Cell(0,10,"CONTACT TEACHER IF EXCEPTION FOUND",1,1);

            

    //         $pdf->output();
    //         }
        
    //     $con->close();
}


?>
    







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css"> 
    
    <title>result</title>
</head>
<body>

  
</body>
</html>