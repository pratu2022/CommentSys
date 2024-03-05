<?php
session_start();
include('includes/header.php');
include('includes/navbar.php');
?>
<h4><?php if(isset($_SESSION['authuser_name'])){
    echo $_SESSION['authuser_name'];
} ?></h4>
<?php
include('includes/footer.php');
?>