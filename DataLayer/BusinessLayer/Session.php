<?php

    // =============================================================================================
    include('connection.php');
    // =============================================================================================

    // =============================================================================================
    session_start();
    // =============================================================================================
   
    // =============================================================================================
    $userAdmin = $_SESSION['util'];
    // =============================================================================================

    // =============================================================================================
    $query = mysqli_query($db,"select Username from User where Username = '$userAdmin' ");
    // =============================================================================================
    
    // =============================================================================================
    $arrayDeQuery = mysqli_fetch_array($query,MYSQLI_ASSOC);
    // =============================================================================================
    
    // =============================================================================================
    $sessionPourAdmin = $arrayDeQuery['Username'];
    // =============================================================================================
    
    // =============================================================================================
    if(!isset($_SESSION['util'])){
        header("location:login.php");
    }
    // =============================================================================================
?>

