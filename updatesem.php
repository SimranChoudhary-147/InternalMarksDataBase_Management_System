
















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>select semester</title>
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
        <h1>WELCOME</h1>
       
       
       <form action='updatepath.php' method="post">
                   

                <h2 margin="5%">SELECT SEMESTER</h2>
                <select class="dropdown" name="sem" id="sem">
                    <option value="3" >third sem</option>
                    <option value="4">forth sem</option>
                    <option value="5">fifth sem</option>
                    
                </select>
                <br><br>
                <button class="btn" >submit</button>
             
       </form>
      
       

      
            
        
            
            
            
            
            

        
        

    </div>
    <script src="index.js"></script>
</body>
</html>