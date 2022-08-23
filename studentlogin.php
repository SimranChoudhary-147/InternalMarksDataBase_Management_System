











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    
    <title>login</title>
    <style>
        .dropdown{
            width:100px;
            length:100px;
            text-align: center;
        }

        </style>
</head>
<body>
    <div class='container'>
        
       
        <img src="images.jpg" class="bg" >
        
        <?php
            if(isset($_POST['submit'])){
                $usn=$_POST["usn"];
            }
        ?>
       
                   

                  
                   
       
        <form action="afterlogin.php" method="post" >
        <h2 >SELECT SEMESTER</h2>
                <select class="dropdown" name="sem" id="sem">
                            <option value="3" >third sem</option>
                            <option value="4">forth sem</option>
                            <option value="5">fifth sem</option>
                            
                </select>
        <h2 >ENTER USN </h2>
            <input type="text" name="usn" id="usn" placeholder="enter your usn">
            
                   
           
            <button type="submit" class="btn" value="submit" name="submit">submit</button>
        

        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>