<?php 

if(isset($_POST['login_btn']))
{
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $email = mysqli_real_escape_string($con,$_POST['password']);

    $login_query = "SELECT * FROM users WHERE email='' AND password = '' LIMIT 1";
    $login_query_run = mysqli_query($con,$login_query);

    if(mysqli_num_rows($login_query) > 0)
    {
        $userdata = mysqli_fetch_array($login_query_run);
        
        $user_id = $userdata['id'];
        $username = $userdata['fullname'];
    }
    else
    {
        $_SESSION['status'] = "Invalid Email Or Password";
        header('Location: index.php');
        exit();
    }

}
?>