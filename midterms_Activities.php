<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="border.css">
    <title>ACT_2</title>
</head>      
<body>
    <h2>Peys App</h2>     
    <form method="POST" action="">
        <label for="slider">Select Photo Size: </label>
        <input type="range" name="slider" id="slider" min="10" max="190" step="20" value="114"><br>

        <label for="clrTheme">Select Border color: </label>
        <input type="color" name="clrTheme" id="clrTheme"> <br>

        <button type="submit" name="btnSend"> Process </button> <br> <br> <br>
    </form>
     
    
    <?php
        if(isset($_POST['btnSend']))	{
            
            $img = $_POST['slider'];
            $Color = $_POST['clrTheme']; 
        }	
    ?>
        <img src="ENE.jpg" alt="ENE SIGUA" width="<?php echo $img; ?>px"style="Color:<?php echo $Color; ?>" border="5%" value="100">  
        
</body>
</html>