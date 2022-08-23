








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
        $sql="select usn,name,email,phone from myproj where varification=0;";
        $result=mysqli_query($con,$sql);
        
        $resultset=array(); 
        while($row=mysqli_fetch_assoc($result))
        {
            $resultset[]=$row; 
        }
        
        $num=sizeof($resultset);
        $i=0;
        if($num==0)
        {
            echo "<html>
            <head>
               
            <style>
            .header{
                width: 90%;
                padding: 10px ;
                border-style: solid;
                border-color: red;
                margin: 1%;
                margin-left:3% ;
                align-content:center;
            }
        </style>
            </head>
            <body>
                <div >
                   <h1 style= 'text-align: center;'>no one in pending list<h1>
                </div>
               
            </body>
            
       </html>";
        }
        if($num>=1)
        {
            echo "<html>
            <head>
                <title>accept request</title>
                <style>
                    .header{
                        width: 80%;
                        padding: 10px;
                        border: 5px black;
                        margin: 1%;
                        margin-left:3% ;
                    }
                </style>
            </head>
            <body>
                <div >
                   <h1 style='text-align: center;'>Pending requests</h1>
                </div>
               
            </body>
            
       </html>";  
             
        }
        
        // function clickme(){
        //     $sql1='update myproj set `varification`=1 where `usn`= $id ;';
        //     $result=mysqli_query($con,$sql1);

        //     }
        
        
        while($num!=$i)
        {
            
        
        
        
            $sql1='0';
            $id = $resultset[$i]['usn'];
        $name= $resultset[$i]['name'];
        $email =$resultset[$i]['email'];
        $phone = $resultset[$i]['phone'];
        $s=0;
        $rid='ror'.$id;
        
            echo "<html>
            <head>
                <title>accept request</title>
                <style>
                    .header{
                        width: 0%;
                        padding: 10px;
                        border: 5px solid gray;
                        margin: 1%;
                        margin-left:3% ;
                    }
                </style>
            </head>
            <body>
            
        
                <div class='header'>
                    
                    <h>ID : $id </h>
                    <div></div>
                    <h>NAME : $name</h>
                    <div></div>
                    <h>EMAIL : $email</h>
                    <div></div>
                    <h>PHONE : $phone </h>
                    <div style='display:flex;
                    flex-direction: row;
                    align-self: flex-end;'>
                    <form action='principle1.php' method='POST'>
                        <input style='width:0%;height:0%;margin-left:65%; border: none;outline: none;' value='$rid' name='value' id='value'>
                        <button type='submit'  style ='padding: 14px 16px; background-color: red; margin-left:0%; cursor: pointer;'  >Reject</button>
                        
                    </form>
                    
                    <form action='principle1.php' method='POST'>
                        <input style='width:0%;height:0%;margin-left:45%; border: none;outline: none;' value='$id' name='value' id='value'>
                        <button type='submit' ' style ='padding: 14px 16px; background-color: green; position: absolute;  cursor: pointer;'  >Accept</button>
                                   
                    </form>
                    
                </div>
                    
                    
                   
                    </div>
               
            </body>
            
       </html>";
        
        
        $i=$i+1;

        }
        mysqli_free_result($result);
        $sql="select usn,name,email,phone from myproj where varification=1;";
        $result=mysqli_query($con,$sql);
        
        $resultset=array(); 
        while($row=mysqli_fetch_assoc($result))
        {
            $resultset[]=$row; 
        }
        $num=sizeof($resultset);
        $i=0;
        if($num>=1)
        {
            echo "<html>
            <head>
               
                <style>
                    .header{
                        width: 90%;
                        padding: 10px ;
                        border-style: solid;
                        border-color: red;
                        margin: 1%;
                        margin-left:3% ;
                    }
                </style>
            </head>
            <body>
                <div >
                   <h1 style= 'text-align: center;'>Accepted request<h1>
                </div>
               
            </body>
            
       </html>";   
        }
        if($num==0){
            echo "<html>
            <head>
               
            <style>
            .header{
                width: 90%;
                padding: 10px ;
                border-style: solid;
                border-color: red;
                margin: 1%;
                margin-left:3% ;
                align-content:center;
            }
        </style>
            </head>
            <body>
                <div >
                   <h1 style= 'text-align: center;'>no one in list<h1>
                </div>
               
            </body>
            
       </html>";
        }
        while($num!=$i)
        {
            
            $id = $resultset[$i]['usn'];
        $name= $resultset[$i]['name'];
        $email =$resultset[$i]['email'];
        $phone = $resultset[$i]['phone'];
            echo "<html>
            <head>
                <title>accept request</title>
                <style>
                    .header{
                        width: 90%;
                        padding: 10px;
                        border: 5px solid gray;
                        
                        margin-left:3% ;
                    }
                    div {
                        display: flex;
                        flex-direction: column;
                        line-color:red;
                        
                      }
                    

                </style>
            </head>
            <body>
                <div class='header'>
                    <h>ID : $id </h>
                    <div></div>
                    <h>NAME : $name</h>
                    <div></div>
                    <h>EMAIL : $email</h>
                    <div></div>
                    <h>PHONE : $phone </h>
                    <div></div>
                

                </div>
               
            </body>
            
       </html>";
        
        $i=$i+1;

        }


        mysqli_free_result($result);




        $con->close();
    }






?>