<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="Login-Style.css">

    <title>ACT_3</title>
</head>
<body>
    <br>
    <br>
    <div class ="container w-25" align="center" >

        <?php 
            $users = array (
                array(
                    'type' => 'Admin', 
                    'username' => 'Admin',
                    'userpass' => 'pass1234'
                ),
                array(
                    'type' => 'Content Manager',
                    'username' => 'Gene',
                    'userpass' => 'pass1234'
                ),
                array(
                    'type' => 'System User',
                    'username' => 'Lara',
                    'userpass' => 'pass1234'
                )
            );

            if (isset($_POST['btnsend'])) {

                $usertype = $_POST['usertype'];
                $username = $_POST['username'];
                $userpass = $_POST['password'];

                if($usertype === $users[0]['type'] && $username == $users[0]['username'] && $userpass === $users[0]['userpass']) {
                    echo '<div class ="alert alert-success alert-dismissible "><a href="#" class="close" data-dismiss="alert" aria-label="close">&times</a> Welcome to the System: ' . $users[0]['username'] . '</div>'; 
                }  
                else if ($usertype === $users[1]['type'] && $username == $users[1]['username'] && $userpass === $users[1]['userpass']) {
                    echo '<div class ="alert alert-success alert-dismissible "><a href="#" class="close" data-dismiss="alert" aria-label="close">&times</a> Welcome to the System: ' . $users[1]['username'] . '</div>'; 
                } 
                else if ($usertype === $users[2]['type'] && $username == $users[2]['username'] && $userpass === $users[2]['userpass']) {
                    echo '<div class ="alert alert-success alert-dismissible "><a href="#" class="close" data-dismiss="alert" aria-label="close">&times</a> Welcome to the System: ' . $users[2]['username'] . '</div>'; 
                }  
                else {
                    echo '<div class ="alert alert-danger alert-dismissible "><a href="#" class="close" data-dismiss="alert" aria-label="close">&times</a> Invalid Username / Password </div>';     
                }

            }
        ?>
    </div>
    
    <div class="container">

        <div class="card card-container">
            <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
                <p id="profile-name" class="profile-name-card"></p>

                <form method="POST" class="form-signin" action="" >

                    <select name = "usertype" size = "1" > 
                        <option value = "Admin">Admin</option>
                        <option value = "Content Manager">Content Manager</option>
                        <option value = "System User">System User</option>
                    </select>

                    <span id="reauth-email" class="reauth-email"></span>

                    <input type="text" name="username" placeholder=" Username" required autofocus>
                    <input type="password" name="password" placeholder=" Password" required>

                    <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="btnsend">Sign in</button>
                </form>   
        </div>
    </div>
 
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>