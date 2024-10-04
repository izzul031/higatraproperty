<?php
session_start();
include_once('../../db_connection.php');

// if(isset($_SESSION['name']) && isset($_SESSION['username'] )){

// }
$_SESSION['name'];
$_SESSION['username'];
?>

<?php include "../layout/header-admin.php"; ?>
<style>
.container {
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    padding: 15px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

}

.container span {
    background-color: gold;
    color: white;
    padding: 15px;
    margin: 10pxpx;
    border-radius: 8px;
    font-size: 25px;
    font-weight: 600;
    letter-spacing: 5px;
    text-transform: uppercase;
}

.container p {
    margin: 20px;
}

.container .btn {
    margin-top: -30px;
    width: 150px;
    background-color: gold;
    color: white;
    font-weight: 500;
    letter-spacing: 5px;
    text-transform: uppercase;
    border-radius: 20px;
}

.container .btn:hover {
    margin-top: -30px;
    width: 200px;
    background-color: darkorange;
    font-weight: 500;
    transition: 1s;
    color: white;
}
</style>



<div class="container">
    <h3>Welcome, <span><?= $_SESSION['name']; ?></span></h3>
    <p>Your Email id is :
    <h6><?= $_SESSION['username']; ?></h6>
    </p>
    <a href="logout.php" class="btn">LOGOUT</a>
</div>


<!-- Registration Link -->
<div class="d-flex justify-content-center mt-3">
    <p>Don't have an account? <a href="register.php" class="text-decoration-none" style="color: inherit;">Register</a>
    </p>
</div>




<!-- Bootstrap JavaScript Libraries -->

<?php include "../layout/footer-admin.php";
?>